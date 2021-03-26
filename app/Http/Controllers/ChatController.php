<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Chat;
use App\Fonts;
use App\Templates;
use App\Transitions;
use App\Transparency;
use App\Positions;

class ChatController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);

    }

    public function index()
    {
        $user_id = auth()->id();

        $chats = Chat::orderBy('updated_at', 'desc')->where('user_id', $user_id)->get();
        return view('chat.index')->with('chats', $chats);
    }

    public function show($id)
    {
        $chat = Chat::where('ref_id', $id)->first();

        if (is_null($chat)) {
            return abort(404);
        }

        $transparency = Transparency::where('int_value', $chat->chat_transparency)->first();
        $gradient_transparency = Transparency::where('int_value', $chat->chat_template_gradient_transparency)->first();
        $positions = Positions::where('id', $chat->chat_template_gradient_position)->first();
        $background_positions = Positions::where('id', $chat->chat_background_gradient_position)->first();

        return view('chat.show')
            ->with('chat', $chat)
            ->with('transparency', $transparency)
            ->with('gradient_transparency', $gradient_transparency)
            ->with('positions', $positions)
            ->with('background_positions', $background_positions);
    }

    public function create()
    {
        $user_id = auth()->id();

        if (is_null($user_id)) {
            return abort(404);
        }

        $fonts = Fonts::orderBy('font', 'asc')->get();
        $templates = Templates::orderBy('template', 'asc')->get();
        $transitions = Transitions::orderBy('transition', 'asc')->get();
        $positions = Positions::orderBy('position', 'asc')->get();
        $background_positions = Positions::orderBy('position', 'asc')->get();

        return view('chat.create')
            ->with('fonts', $fonts)
            ->with('templates', $templates)
            ->with('transitions', $transitions)
            ->with('positions', $positions)
            ->with('background_positions', $background_positions);
    }

    public function edit($id)
    {
        $user_id = auth()->id();

        $chat = Chat::where('user_id', $user_id)->where('id', $id)->first();

        if (is_null($chat)) {
            return abort(404);
        }

        $fonts = Fonts::orderBy('font', 'asc')->get();
        $templates = Templates::orderBy('template', 'asc')->get();
        $transitions = Transitions::orderBy('transition', 'asc')->get();
        $positions = Positions::orderBy('position', 'asc')->get();
        $background_positions = Positions::orderBy('position', 'asc')->get();

        return view('chat.create')
            ->with('chat', $chat)
            ->with('fonts', $fonts)
            ->with('templates', $templates)
            ->with('transitions', $transitions)
            ->with('positions', $positions)
            ->with('background_positions', $background_positions);
    }

    public function update(Request $request, $id)
    {
        $user_id = auth()->id();

        $this->validate($request, [
            'chat_scene' => 'required',
            'chat_channel' => 'required',
            'chat_bg_image' => 'mimes:jpeg,jpg,bmp,png,gif,svg'
        ]);

        $chat = Chat::where('user_id', $user_id)->where('id', $id)->first();

        $chat->fill($request->all());

        //checkboxes
        $chat->chat_use_twitch_colors = $request->input('chat_use_twitch_colors') ? 'on' : 'off';
        $chat->chat_msg_twitch_colors = $request->input('chat_msg_twitch_colors') ? 'on' : 'off';
        $chat->chat_show_badges = $request->input('chat_show_badges') ? 'on' : 'off';
        $chat->chat_show_emotes = $request->input('chat_show_emotes') ? 'on' : 'off';
        $chat->chat_text_shadow = $request->input('chat_text_shadow') ? 'on' : 'off';
        $chat->chat_title_text_shadow = $request->input('chat_title_text_shadow') ? 'on' : 'off';

        if ($request->hasFile('chat_bg_image')) {
            $filenameWithExt = $request->file('chat_bg_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('chat_bg_image')->getClientOriginalExtension();
            $filenameToStore = 'chat_' . $filename . '_' . sha1(time() * 10000) . '.' . $extension;
            $chat->chat_bg_image = $request->file('chat_bg_image')->storeAs('public/chat_bgs', $filenameToStore);
        }

        $chat->save();

        return redirect('chat/' . $id . '/edit')->with('success', 'Chat Updated');
    }

    public function store(Request $request)
    {
        $user_id = auth()->id();

        $this->validate($request, [
            'chat_scene' => 'required',
            'chat_channel' => 'required',
            'chat_bg_image' => 'mimes:jpeg,jpg,bmp,png,gif,svg'
        ]);

        $chat = new Chat;

        $chat->fill($request->all());

        //checkboxes
        $chat->chat_use_twitch_colors = $request->input('chat_use_twitch_colors') ? 'on' : 'off';
        $chat->chat_msg_twitch_colors = $request->input('chat_msg_twitch_colors') ? 'on' : 'off';
        $chat->chat_show_badges = $request->input('chat_show_badges') ? 'on' : 'off';
        $chat->chat_show_emotes = $request->input('chat_show_emotes') ? 'on' : 'off';
        $chat->chat_text_shadow = $request->input('chat_text_shadow') ? 'on' : 'off';
        $chat->chat_title_text_shadow = $request->input('chat_title_text_shadow') ? 'on' : 'off';

        $chat->user_id = $user_id;
        $chat->ref_id = sha1(time() * 100000);

        if ($request->hasFile('chat_bg_image')) {
            $filenameWithExt = $request->file('chat_bg_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('chat_bg_image')->getClientOriginalExtension();
            $filenameToStore = 'chat_' . $filename . '_' . sha1(time() * 10000) . '.' . $extension;
            $chat->chat_bg_image = $request->file('chat_bg_image')->storeAs('public/chat_bgs', $filenameToStore);
        }

        $chat->save();

        return redirect('chat/' . $chat->id . '/edit')->with('success', 'Chat Created');
    }

    public function destroy($id)
    {
        $user_id = auth()->id();

        $chat = Chat::where('user_id', $user_id)->where('id', $id)->first();

        $image_path = public_path(str_replace('public/', 'storage/', $chat->chat_bg_image));

        if (file_exists($image_path)) {
            File::delete($image_path);
        }

        $chat->delete();

        return redirect('chat')->with('success', 'Chat Deleted');
    }

    public function removeBgImage(Request $request, $id)
    {

        $user_id = auth()->id();

        $chat = Chat::where('user_id', $user_id)->where('id', $id)->first();

        $image_path = public_path(str_replace('public/', 'storage/', $chat->chat_bg_image));

        if (file_exists($image_path)) {
            File::delete($image_path);
        }

        $chat->chat_bg_image = NULL;

        if ($request->ajax()) {

            $chat->save();

        }

        return redirect('chat/' . $id . '/edit')->with('success', 'Chat Background Image Deleted');
    }

    public function chatPreview($id) {

        $chat = Chat::where('ref_id', $id)->first();

        if (is_null($chat)) {
            return abort(404);
        }

        $transparency = Transparency::where('int_value', $chat->chat_transparency)->first();
        $gradient_transparency = Transparency::where('int_value', $chat->chat_template_gradient_transparency)->first();
        $positions = Positions::where('id', $chat->chat_template_gradient_position)->first();
        $background_positions = Positions::where('id', $chat->chat_background_gradient_position)->first();

        return view('chat.preview')
            ->with('chat', $chat)
            ->with('transparency', $transparency)
            ->with('gradient_transparency', $gradient_transparency)
            ->with('positions', $positions)
            ->with('background_positions', $background_positions);
    }


}

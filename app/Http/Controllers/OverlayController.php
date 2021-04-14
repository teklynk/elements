<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Overlay;
use App\Fonts;
use App\Animations;
use App\Styles;
use App\Msgpositions;
use App\Positions;

class OverlayController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);

    }

    public function index()
    {
        $user_id = auth()->id();

        $overlays = Overlay::orderBy('updated_at', 'desc')->where('user_id', $user_id)->get();
        return view('overlay.index')->with('overlays', $overlays);

    }

    public function show($id)
    {
        $overlay = Overlay::where('ref_id', $id)->first();
        $gradient_position_1 = Positions::where('id', $overlay->overlay_gradient_position_1)->first();
        $gradient_position_2 = Positions::where('id', $overlay->overlay_gradient_position_2)->first();
        $gradient_position_3 = Positions::where('id', $overlay->overlay_gradient_position_3)->first();
        $gradient_position_4 = Positions::where('id', $overlay->overlay_gradient_position_4)->first();

        if (is_null($overlay)) {
            return abort(404);
        }

        return view('overlay.show')
            ->with('overlay', $overlay)
            ->with('gradient_position_1', $gradient_position_1)
            ->with('gradient_position_2', $gradient_position_2)
            ->with('gradient_position_3', $gradient_position_3)
            ->with('gradient_position_4', $gradient_position_4);
    }


    public function create()
    {
        $user_id = auth()->id();

        if (is_null($user_id)) {
            return abort(404);
        }

        $fonts = Fonts::orderBy('font', 'asc')->get();
        $animations = Animations::orderBy('animation', 'asc')->get();
        $styles = Styles::orderBy('style', 'asc')->get();
        $positions = Msgpositions::orderBy('position', 'asc')->get();
        $gradientpositions = positions::orderBy('position', 'asc')->get();

        return view('overlay.create')
            ->with('fonts', $fonts)
            ->with('animations', $animations)
            ->with('styles', $styles)
            ->with('positions', $positions)
            ->with('gradientpositions', $gradientpositions);
    }

    public function edit($id)
    {
        $user_id = auth()->id();

        $overlay = Overlay::where('user_id', $user_id)->where('id', $id)->first();

        if (is_null($overlay)) {
            return abort(404);
        }

        $fonts = Fonts::orderBy('font', 'asc')->get();
        $animations = Animations::orderBy('animation', 'asc')->get();
        $styles = Styles::orderBy('style', 'asc')->get();
        $positions = Msgpositions::orderBy('position', 'asc')->get();
        $gradientpositions = positions::orderBy('position', 'asc')->get();

        return view('overlay.create')
            ->with('overlay', $overlay)
            ->with('fonts', $fonts)
            ->with('animations', $animations)
            ->with('styles', $styles)
            ->with('positions', $positions)
            ->with('gradientpositions', $gradientpositions);
    }

    public function store(Request $request)
    {
        $user_id = auth()->id();

        $this->validate($request, ['overlay_scene' => 'required']);

        $overlay = new Overlay;

        $overlay->fill($request->all());
        $overlay->user_id = $user_id;
        $overlay->ref_id = sha1(time() * 100000);

        //checkboxes
        $overlay->overlay_msg_shadow_1 = $request->input('overlay_msg_shadow_1') ? 'on' : 'off';
        $overlay->overlay_msg_shadow_2 = $request->input('overlay_msg_shadow_2') ? 'on' : 'off';
        $overlay->overlay_msg_shadow_3 = $request->input('overlay_msg_shadow_3') ? 'on' : 'off';
        $overlay->overlay_msg_shadow_4 = $request->input('overlay_msg_shadow_4') ? 'on' : 'off';

        $overlay->overlay_msg_border_1 = $request->input('overlay_msg_border_1') ? 'on' : 'off';
        $overlay->overlay_msg_border_2 = $request->input('overlay_msg_border_2') ? 'on' : 'off';
        $overlay->overlay_msg_border_3 = $request->input('overlay_msg_border_3') ? 'on' : 'off';
        $overlay->overlay_msg_border_4 = $request->input('overlay_msg_border_4') ? 'on' : 'off';

        $overlay->overlay_msg_gradient_1 = $request->input('overlay_msg_gradient_1') ? 'on' : 'off';
        $overlay->overlay_msg_gradient_2 = $request->input('overlay_msg_gradient_2') ? 'on' : 'off';
        $overlay->overlay_msg_gradient_3 = $request->input('overlay_msg_gradient_3') ? 'on' : 'off';
        $overlay->overlay_msg_gradient_4 = $request->input('overlay_msg_gradient_4') ? 'on' : 'off';

        if ($request->hasFile('overlay_bg_image')) {
            $filenameWithExt = $request->file('overlay_bg_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('overlay_bg_image')->getClientOriginalExtension();
            $filenameToStore = 'overlay_' . $filename . '_' . sha1(time() * 10000) . '.' . $extension;
            $overlay->overlay_bg_image = $request->file('overlay_bg_image')->storeAs('public/overlay_bgs', $filenameToStore);
        }

        $overlay->save();

        return redirect('overlay/' . $overlay->id . '/edit')->with('success', 'Overlay Created');
    }

    public function update(Request $request, $id)
    {
        $user_id = auth()->id();

        $this->validate($request, ['overlay_scene' => 'required']);

        $overlay = Overlay::where('user_id', $user_id)->where('id', $id)->first();

        $overlay->fill($request->all());

        //checkboxes
        $overlay->overlay_msg_shadow_1 = $request->input('overlay_msg_shadow_1') ? 'on' : 'off';
        $overlay->overlay_msg_shadow_2 = $request->input('overlay_msg_shadow_2') ? 'on' : 'off';
        $overlay->overlay_msg_shadow_3 = $request->input('overlay_msg_shadow_3') ? 'on' : 'off';
        $overlay->overlay_msg_shadow_4 = $request->input('overlay_msg_shadow_4') ? 'on' : 'off';

        $overlay->overlay_msg_border_1 = $request->input('overlay_msg_border_1') ? 'on' : 'off';
        $overlay->overlay_msg_border_2 = $request->input('overlay_msg_border_2') ? 'on' : 'off';
        $overlay->overlay_msg_border_3 = $request->input('overlay_msg_border_3') ? 'on' : 'off';
        $overlay->overlay_msg_border_4 = $request->input('overlay_msg_border_4') ? 'on' : 'off';

        $overlay->overlay_msg_gradient_1 = $request->input('overlay_msg_gradient_1') ? 'on' : 'off';
        $overlay->overlay_msg_gradient_2 = $request->input('overlay_msg_gradient_2') ? 'on' : 'off';
        $overlay->overlay_msg_gradient_3 = $request->input('overlay_msg_gradient_3') ? 'on' : 'off';
        $overlay->overlay_msg_gradient_4 = $request->input('overlay_msg_gradient_4') ? 'on' : 'off';

        if ($request->hasFile('overlay_bg_image')) {
            $filenameWithExt = $request->file('overlay_bg_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('overlay_bg_image')->getClientOriginalExtension();
            $filenameToStore = 'overlay_' . $filename . '_' . sha1(time() * 10000) . '.' . $extension;
            $overlay->overlay_bg_image = $request->file('overlay_bg_image')->storeAs('public/overlay_bgs', $filenameToStore);
        }

        $overlay->save();

        return redirect('overlay/' . $id . '/edit')->with('success', 'Overlay Updated');
    }

    public function destroy($id)
    {
        $user_id = auth()->id();

        $overlay = Overlay::where('user_id', $user_id)->where('id', $id)->first();
        $overlay->delete();

        return redirect('overlay')->with('success', 'Overlay Deleted');
    }

    public function removeBgImage(Request $request, $id)
    {

        $user_id = auth()->id();

        $overlay = Overlay::where('user_id', $user_id)->where('id', $id)->first();

        $image_path = public_path(str_replace('public/', 'storage/', $overlay->overlay_bg_image));

        if (file_exists($image_path)) {
            File::delete($image_path);
        }

        $overlay->overlay_bg_image = NULL;

        if ($request->ajax()) {

            $overlay->save();

        }

        return redirect('overlay/' . $id . '/edit')->with('success', 'Overlay Background Image Deleted');
    }
}
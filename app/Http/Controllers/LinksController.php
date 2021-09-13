<?php

namespace App\Http\Controllers;

use App\Links;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->id();

        $links = Links::orderBy('link_sort', 'desc')->where('user_id', $user_id)->get();
        return view('links.index')->with('links', $links);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = auth()->id();

        if (is_null($user_id)) {
            return abort(404);
        }

        //$links = Links::orderBy('link_sort', 'desc')->where('user_id', $user_id)->get();
        //return view('links.create')->with('links', $links);

        return view('links.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Links  $links
     * @return \Illuminate\Http\Response
     */
    public function show(Links $links)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Links  $links
     * @return \Illuminate\Http\Response
     */
    public function edit(Links $links)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Links  $links
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Links $links)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Links  $links
     * @return \Illuminate\Http\Response
     */
    public function destroy(Links $links)
    {
        //
    }
}

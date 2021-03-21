<?php

namespace App\Http\Controllers;

use App\Base;
use Illuminate\Http\Request;

class BaseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Base  $base
     * @return \Illuminate\Http\Response
     */
    public function show(Base $base)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Base  $base
     * @return \Illuminate\Http\Response
     */
    public function edit(Base $base)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Base  $base
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Base $base)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Base  $base
     * @return \Illuminate\Http\Response
     */
    public function destroy(Base $base)
    {
        //
    }

    public function fontPreview(Request $request) {

        $getFont = $request->input('font');

        return view('fontpreview')->with('font', $getFont);
    }



}

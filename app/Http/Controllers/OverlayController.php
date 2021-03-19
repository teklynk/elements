<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Overlay;

class OverlayController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }

    public function index()
    {
        return view('overlay.index');
    }

    public function show()
    {
        return view('overlay.show');
    }
}

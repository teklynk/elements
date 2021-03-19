<?php

namespace App\Http\Controllers;

use App\Soundboard;
use Illuminate\Http\Request;

class SoundboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }

    public function index()
    {
        return view('soundboard.index');
    }

    public function show()
    {
        return view('soundboard.show');
    }
}

<?php

namespace App\Http\Controllers;

use App\Followers;
use Illuminate\Http\Request;

class FollowersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }

    public function index()
    {
        return view('followers.index');
    }

    public function show()
    {
        return view('followers.show');
    }
}

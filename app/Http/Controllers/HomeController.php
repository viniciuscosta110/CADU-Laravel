<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\HomePost;

class HomeController extends Controller
{
    public function index() {
        $posts = HomePost::all();
        
        return view('index', ['posts' => $posts]);
    }
}

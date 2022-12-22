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

    public function create() {
        return view('createHomePost');
    }

    public function store(Request $request) {
        $post = new HomePost();
        
        $post->title = $request->title;
        $post->description = $request->description;
        $post->image = $request->image;
        $post->link = $request->link;
        $post->save();

        return redirect('/');
    }
}

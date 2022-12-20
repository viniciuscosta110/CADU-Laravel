<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\HomePost;

class HomeController extends Controller
{


    public function index() {
        echo $_COOKIE['Usuário_Logado'];
        $posts = HomePost::all();
        
        return view('index', ['posts' => $posts]);
    }
}

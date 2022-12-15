<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ExtensionPost;

class ExtensionController extends Controller
{
    public function index()
    {
        $extensions = ExtensionPost::all();

        return view('extensions', ['extensions' => $extensions]);
    }
}

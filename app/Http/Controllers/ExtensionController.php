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

    public function create()
    {
        return view('createExtensionPost');
    }

    public function store(Request $request)
    {
        $extension = new ExtensionPost();

        $extension->title = $request->title;
        $extension->description = $request->description;
        $extension->image = $request->image;
        $extension->link = $request->link;

        $extension->save();

        return redirect('/extensions');
    }
}

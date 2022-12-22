<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ResearchPost;

class researchController extends Controller
{
    public function index()
    {
        $researchs = ResearchPost::all();

        return view('researchs', ['researchs' => $researchs]);
    }

    public function create()
    {
        return view('createResearchPost');
    }

    public function store(Request $request)
    {
        $research = new ResearchPost();

        $research->name = $request->name;
        $research->description = $request->description;
        $research->image = $request->image;
        $research->link = $request->link;
        $research->save();

        return redirect('/researchs');
    }
}

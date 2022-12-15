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
}

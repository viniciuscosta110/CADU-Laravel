<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TeacherPost;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = TeacherPost::all();

        return view('teachers', ['teachers' => $teachers]);
    }
}

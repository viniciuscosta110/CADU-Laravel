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

    public function create()
    {
        return view('createTeacherPost');
    }

    public function store(Request $request)
    {
        $teacher = new TeacherPost();

        $teacher->name = $request->name;
        $teacher->description = $request->description;
        $teacher->image = $request->image;
        $teacher->link = $request->link;

        $teacher->save();

        return redirect('/teachers');
    }
}

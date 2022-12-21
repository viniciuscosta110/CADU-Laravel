<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function index_ec($id)
    {
        $subjects = Subject::where('course','=','ec')->where('period','=',$id)->get();

        return view('cc_subjects', ['id' => $id, 'subjects' => $subjects]);
    }

    public function index_cc($id)
    {
        $subjects = Subject::where('course','=','cc')->where('period','=',$id)->get();

        return view('cc_subjects', ['id' => $id, 'subjects' => $subjects]);
    }
}

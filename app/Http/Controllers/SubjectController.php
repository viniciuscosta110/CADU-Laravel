<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function index_ec($id)
    {
        return view('ec_subjects', ['id' => $id]);
    }

    public function index_cc($id)
    {
        $subjects = Subject::where('course','=','cc')->first();
        echo $subjects;

        return view('cc_subjects', ['id' => $id, 'subjects' => $subjects]);
    }
}

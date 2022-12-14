<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Subject;

class detailController extends Controller
{
    public function index()
    {
        return view('details');
    }

    public function find($id)
    {
        $subject = Subject::where('id', $id)->first();

        return view('details', ['subject' => $subject]);
    }
}

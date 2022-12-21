<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Detail;

class detailController extends Controller
{
    public function index()
    {
        return view('details');
    }

    public function find($id)
    {
        return view('details', ['id' => $id]);
    }
}

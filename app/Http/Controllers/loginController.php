<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class loginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
       $User = new User;

       $User->name = $request->username;
       $User->password = $request->password;

       //logica do bd
   
    }
}

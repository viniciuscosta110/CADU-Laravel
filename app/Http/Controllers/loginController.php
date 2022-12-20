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
       $user = User::where('name', '=', $request->username, 'and')->where('password', '=', $request->password)->first();
     
        if(is_null($user))
        {
            return view('login');
        }

        else
        {
            return redirect('/');
        }
    }
}

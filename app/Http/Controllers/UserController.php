<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{
    function login(Request $req)
    {
        $result=User::where('email',$req->email)->where('password',$req->password)->get();
        if(count($result)>0)
        {
            $req->session()->put('user_name', $result[0]->name);
            return redirect('dashboard');
        }
        else
        {
            session::flash('coc', 'Email and Password Do Not Match');
            return redirect('/')->withInput();
        }
    }
}

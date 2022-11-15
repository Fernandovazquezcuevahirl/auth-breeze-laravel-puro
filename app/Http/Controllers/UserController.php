<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    

    function ObtenerDatos(){

        $user = User::find(1);
        

        // var_dump($user);
        return view('welcome',compact('user'));
    }

    function Register(){

        return view('/auth/login');
    }


}

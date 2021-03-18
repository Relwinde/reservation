<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;

class UserExistsController extends Controller
{
    public function checkUsers ()
    {
        $users = User::where('userRole','admin')->count();
        if ($users>0){
            return view('connect');
        }
        else{
            return view('pages.register');
        }

    }
}

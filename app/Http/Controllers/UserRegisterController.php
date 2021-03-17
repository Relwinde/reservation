<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserRegisterController extends Controller
{
    private function mailExistsControll ($mail)
    {
        $mailNum = User::where('email', $mail)->count();
    }

    private function passwordMatchController ($pass, $passRepeat)
    {
        
    }
}

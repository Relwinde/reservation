<?php

namespace App\Http\Controllers;

use App\Mail\VerificationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public static function sendVerificationEmail ($userName, $userMail, $verificationCode){
        $data = [
            'userName'=>$userName,
            'verificationCode'=>$verificationCode
        ];
        Mail::to($userMail)->send(new VerificationMail($data));
    }
}

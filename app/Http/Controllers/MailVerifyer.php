<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MailVerifyer extends Controller
{
    public function codeVerify (){

        $user = User::where('verificationCode', $_GET['code'])->first();
        if($user != null){
                $user->verified = 1;
                $user->save();
                $default = 'Votre addresse email a été verifié,il reste un dernière étape avant de pouvoir acceder à la platforme: La validation de votre compte par un administrateur. Dès que cette opération sera effectuée un mail vous sera envoyez. <br> A très bientôt';
                    return view('pages.registered', ['default'=>$default]);
        }
        else{
            $default = 'Ce code de verification est inexistant';
                return view('pages.registered', ['default'=>$default]);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserLoginController extends Controller
{
    public function loginControl (){
        $user = User::where('email', $_POST['mail'])->first();
        if ($user != null){
           if (Hash::check($_POST['pass'], $user->password)){

                if ($user->verified == 1){
               $userInfos=['firstName'=>$user->firstName, 'lastName'=>$user->lastName];
               return redirect()->route('home-page', $userInfos);
            }
            else{
                $default = "Votre addresse email n'a pas été vérifié consulter votre boite et cliquez sur le lien de vérification";
            return view('connect
            ', ['default'=>$default]);
            }
                
           }

           else{
            $default = 'Erreur mot de passe ou addresse email incorrect';
            return view('connect
            ', ['default'=>$default]);
           }
        }

        else{
            $default = 'Erreur mot de passe ou addresse email incorrect';
                        return view('connect
                        ', ['default'=>$default]);
        }

       
    }
}

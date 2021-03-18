<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserRegisterController extends Controller
{
    private function mailExistsControll ($mail)
    {
        $mailNum = User::where('email', $mail)->count();
        return $mailNum;
    }

    private function passwordMatchController ($pass, $passRepeat)
    {
        if ($pass === $passRepeat)
        { return true;}
        else{ return false;}
    }

    public function registController ()
    {
        if($this->mailExistsControll($_POST['mail'])>0)
        {
            $default = 'le mail existe déjà';
            return view('pages.register', ['default'=>$default]);
        }
        else{
            if ($this->passwordMatchController($_POST['pass'], $_POST['passRepeat'])){
                $user = new User();
                $user->firstName = $_POST['fname'];
                $user->lastName = $_POST['lname'];
                $user->email = $_POST['mail'];
                if ( User::where('userRole','admin')->count()>0){
                    $user->userRole = "user";
                }
                else {
                    $user->userRole = "admin";
                }
                
                $user->userStatut = "pending";
                $user->password = Hash::make($_POST['pass']);
                $user->verificationCode = sha1(time());
                $user->verified=0;
                $user->save();
                if ($user != null){
                    $userName = $user->firstName.' '.$user->lastName;

                    MailController::sendVerificationEmail($userName, $user->email, $user->verificationCode);


                    $default = 'Votre compte a été créé avec succès, veillez consulter votre boite Email afin de confirmer la création de votre compte';
                    return view('pages.registered', ['default'=>$default]);
                    }
                    else{
                        $default = 'Une erreur est servenue merci de ressayer';
                        return view('pages.register', ['default'=>$default]);
                    }
            }
            else{
                $default = 'Les mots de passe que vous avez entrez sont discordants';
                return view('pages.register', ['default'=>$default]);
            }
        }
        
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function homePage(){
        dd(Session::get('firstName'));
    }
}

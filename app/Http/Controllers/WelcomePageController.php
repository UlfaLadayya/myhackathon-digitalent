<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomePageController extends Controller
{
    function welcomepage(){
        return view('welcomepage', [
            "title" => "Welcome Page Web"
        ]);
    }
}

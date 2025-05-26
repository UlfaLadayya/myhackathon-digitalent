<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarUserController extends Controller
{
    function teknologiinformasidankomunikasi(){
        return view('teknologiinformasidankomunikasi', [
            "title" => "Teknologi Informasi dan Komunikasi",
        ]);
    }

    function aboutus(){
        return view('aboutus', [
            "title" => "About Us",
        ]);
    }

    function suggestionscriticism(){
        return view('suggestionscriticism', [
            "title" => "Suggestions & Criticism",
        ]);
    }
}

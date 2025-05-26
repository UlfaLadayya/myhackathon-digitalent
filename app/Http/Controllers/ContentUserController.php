<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentUserController extends Controller
{
    function sejarahperkembangantik(){
        return view('sejarahperkembangantik', [
            "title" => "Sejarah Perkembangan TIK",
        ]);
    }

    function pengertiantik(){
        return view('pengertiantik', [
            "title" => "Pengertian TIK",
        ]);
    }

    function komponenkomponen(){
        return view('komponenkomponen', [
            "title" => "Komponen-komponen SI",
        ]);
    }

    function manfaattik(){
        return view('manfaattik', [
            "title" => "Manfaat TIK",
        ]);
    }

    function dampaktik(){
        return view('dampaktik', [
            "title" => "Dampak TIK",
        ]);
    }

    function penerapantik(){
        return view('penerapantik', [
            "title" => "Penerapan TIK",
        ]);
    }

    function masaprasejarah(){
        return view('masaprasejarah', [
            "title" => "Masa Prasejarah",
        ]);
    }

        function masasejarah(){
        return view('masasejarah', [
            "title" => "Masa Sejarah",
        ]);
    }

        function masamodern(){
        return view('masamodern', [
            "title" => "Masa Modern",
        ]);
    }

        function sejarahperkembangankomputer(){
        return view('sejarahperkembangankomputer', [
            "title" => "Sejarah Perkembangan Komputer",
        ]);
    }
}

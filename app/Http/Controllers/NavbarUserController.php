<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarUserController extends Controller
{
    function teknologiinformasidankomunikasi(){
        return view('teknologiinformasidankomunikasi', [
            "title" => "Teknologi Informasi dan Komunikasi",
            "contentTik" => "Hi, Sobat Cerdas.. Selamat Datang di PetuTeInKo (Petualangan Teknologi Informasi dan Komunikasi). Di halaman ini sobat dapat
        mengetahui sejarah perkembangan TIK, pengertiannya, komponen, manfaat, dampak, dan penerapannya. Untuk mengetahui semua itu,
        sobat cerdas akan MinTIK ajak untuk berpetualang menemukan semua item pembahasan yang sudah disebutkan sebelumnya. 
        <br><br>
        Caranya ikuti saja alur route map dari awal hingga akhir dan temukan item-item tersebut <strong>dengan cara klik gambarnya ya..</strong> <br>Selamat berpetualang sobat cerdas..",
        ]);
    }

    function aboutus(){
        return view('aboutus', [
            "title" => "About Us",
            "contentAbout" => "WePTIK merupak singkatan dari <b>Website Pengetahuan Teknologi Informasi dan Komunikasi (TIK)</b>. Website ini diperuntukkan bagi anak-anak dari tingkatan apapun.
               Di dalam website ini akan disediakan pengetahuan seputar TIK. Saya berharap semua anak-anak dapat mengenal Teknologi Informasi dan Komunikasi sebelum dapat memahami atau mengerti 
               lebih dalam mengenai hal ini.
               <br><br>
               Konsep untuk menyalurkan pengetahuan tersebut, saya kemas menjadi sebuah map.
               <br><br>
               Untuk mengetahui lebih lanjut, jangan lupa kunjungi halaman <b>Teknologi Informasi dan Komunikasi</b> ya sobat cerdas..
               <br><br>

               <b>Salam Cerdas Teknologi..</b>

               <br><br>
               Sincerely,<br>
               Ulf's Creativity",
        ]);
    }

    function suggestionscriticism(){
        return view('suggestionscriticism', [
            "title" => "Suggestions & Criticism",
            "contentKritik" => "Halo sobat cerdas semua.. Jika sobat cerdas mempunyai kritik dan saran untuk WePTIK, 
            langsung saja berikan pendapatmu dengan cara klik link di bawah ya..",
        ]);
    }
}

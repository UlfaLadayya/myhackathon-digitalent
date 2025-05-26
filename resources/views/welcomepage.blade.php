@extends('layouts.mainwelcomepage')

@section('container')

    <div class="welcomepage_main">
      <div class="welcome_content">
        <div class="left_content">
          <h1 id="title_welcome">Selamat Datang di WePTIK (Website Pengetahuan Teknologi Informasi dan Komunikasi (TIK))</h1><br>
          <p id="earlier_content">Website Pengetahuan TIK ini merupakan website yang hanya berisi seputar TIK saja. 
            Website ini dapat diakses secara offline oleh <i>user</i>. Web ini dilengkapi fitur AI yang hanya dapat 
            digunakan saat website <i>online</i>.</p>
        </div>

        <div class="right_content">
          <video autoplay muted loop>
            <source src="assets/video/first-video.mp4" type="video/mp4">
          </video>
        </div>
      </div>

      <div class="welcomebutton_main">
        <div class="btn custom-btn">
          <a class="nav-link" href="/loginpageuser">Log In</a>
        </div>
        <div class="btn custom-btn">
          <a class="nav-link" href="/signuppageuser">Sign Up</a>
        </div>
      </div>
    </div>
@endsection
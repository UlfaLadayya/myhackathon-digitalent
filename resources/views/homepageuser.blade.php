@extends('layouts.mainuserpage')

@section('container')

<div class="hero_homepage">
    <video id="video" autoplay muted loop>
        <source src="assets/video/hero-page.mp4" type="video/mp4">
    </video>
    <p id="hero_content">"Hidup itu seperti bersepeda. Kalau kamu ingin menjaga keseimbanganmu, kamu harus terus bergerak maju." - Albert Einstein</p>
    <p id="hero_subcontent">Jelajahi teknologi informasi dan komunikasi untuk memperluas pengetahuan anda..<br>
        <a href="/teknologiinformasidankomunikasi" class="btn btn-outline-dark">Buka petualangan Anda sekarang..</a>
    </p>

    <div class="hero_thecards">
        <div id="hero_cardone">
            <div id="hero_cardbody">
                <h4 class="hero_cardtitle">Tentang WePTIK</h5>
                <p class="hero_cardtext">Mari ketahui tentang situs web ini. Cukup klik kata-kata di bawah ini ya..</p>
                <a href="/aboutus" class="hero_cardlink btn">Pengantar tentang situs web ini</a>
            </div>
        </div>

        <div id="hero_cardtwo">
            <div id="hero_cardbody">
                <h4 class="hero_cardtitle">Saran dan Kritik</h5>
                <p class="hero_cardtext">Anda dapat memberikan saran dan kritik untuk situs web ini. Cukup klik kata-kata di bawah ini...</p>
                <a href="/suggestionscriticism" class="hero_cardlink btn">Ungkapkan pikiranmu</a>
            </div>
        </div>
    </div>
</div>
<div class="homepage_content">
    <div id="home">
        <div class="lefthomepage_content">
            <p id="homepage_showcontent">Teknologi Informasi dan Komunikasi</p>
            <p id="homepage_showsubcontent">Di dalam bagian ini anda dapat melihat semua tentang Teknologi Informasi dan Komunikasi (TIK). 
                Mau tahu lebih lanjut? Klik button di bawah..<br>
                <a href="/teknologiinformasidankomunikasi" class="btn btn-outline-dark">Mari ketahui lebih lanjut..</a>
            </p>
        </div>

        <div class="righthomepage_content">
            <div class="video_wrap">
                <video autoplay muted loop>
                    <source src="assets/video/grafis.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</div>

@endsection


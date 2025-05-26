@extends('layouts.mainuserpage')

@section('container')

<div class="technology_content">
    <p id="intro_petualangan">Hi, Sobat Cerdas.. Selamat Datang di PetuTeInKo (Petualangan Teknologi Informasi dan Komunikasi). Di halaman ini sobat dapat
        mengetahui sejarah perkembangan TIK, pengertiannya, komponen, manfaat, dampak, dan penerapannya. Untuk mengetahui semua itu,
        sobat cerdas akan MinGK ajak untuk berpetualang menemukan semua item pembahasan yang sudah disebutkan sebelumnya. 
        <br><br>
        Caranya ikuti saja alur route map dari awal hingga akhir dan temukan item-item tersebut <strong>dengan cara klik gambarnya ya..</strong> <br>Selamat berpetualang sobat cerdas..
    </p>
    <div class="container_route">
        <img class="route_map" src="assets/images/routemap.png" alt="route-map">
        <a href="/sejarahperkembangantik">
            <img class="mark object-point-a" src="assets/images/tech-globe.png" alt="tech-globe">
        </a>
        <a href="/pengertiantik">
            <img class="mark object-point-b" src="assets/images/book.png" alt="book">
        </a>
        <a href="/komponenkomponen">
            <img class="mark object-point-c" src="assets/images/gear.png" alt="gear">
        </a>
        <a href="/manfaattik">
            <img class="mark object-point-d" src="assets/images/manfaat.png" alt="manfaat">
        </a>
        <a href="/dampaktik">
            <img class="mark object-point-e" src="assets/images/impact.png" alt="dampak">
        </a>
        <a href="/penerapantik">
            <img class="mark object-point-f" src="assets/images/implementation.png" alt="penerapan">
        </a>
    </div>
</div>

@endsection

{{-- <div class="pengetahuanumum_content">
    <p id="pengetahuanumum_subtitle">Kategori Pengetahuan Umum</p>

    <div class="vertical_tab">
        <div class="pengetahuanumum_leftcontent">
            <ul id="pengetahuanumum_linkkategori" class="nav flex-column">
                <li class="nav-item">
                    <a id="navitem-bg" class="nav-link" href="/contenttechnology">Teknologi Informasi dan Komunikasi</a>
                </li>
                <li class="nav-item">
                    <a id="navitem-bg" class="nav-link" href="/contenttechnology">Flora</a>
                </li>
                <li class="nav-item">
                    <a id="navitem-bg" class="nav-link" href="/contenttechnology">Fauna</a>
                </li>
                <li class="nav-item">
                    <a id="navitem-bg" class="nav-link" href="/contenttechnology">Negara</a>
                </li>
                <li class="nav-item">
                    <a id="navitem-bg" class="nav-link" href="/contenttechnology">Tokoh Dunia</a>
                </li>
                <li class="nav-item">
                    <a id="navitem-bg" class="nav-link" href="/contenttechnology">Bahasa</a>
                </li>
                <li class="nav-item">
                    <a id="navitem-bg" class="nav-link" href="/contenttechnology">Sejarah Dunia</a>
                </li>
                <li class="nav-item">
                    <a id="navitem-bg" class="nav-link" href="/contenttechnology">Bumi</a>
                </li>
                <li class="nav-item">
                    <a id="navitem-bg" class="nav-link" href="/contenttechnology">Lautan</a>
                </li>
                <li class="nav-item">
                    <a id="navitem-bg" class="nav-link" href="/contenttechnology">Daratan</a>
                </li>
            </ul>
        </div>

        <div class="pengetahuanumum_rightcontent">
            <ul id="pengetahuanumum_linkkategori" class="nav flex-column">
                <li class="nav-item">
                    <a id="navitems-bg" class="nav-link" href="/contenttechnology">Seni</a>
                </li>
                <li class="nav-item">
                    <a id="navitems-bg" class="nav-link" href="/contenttechnology">Sungai</a>
                </li>
                <li class="nav-item">
                    <a id="navitems-bg" class="nav-link" href="/contenttechnology">Kerajaan</a>
                </li>
                <li class="nav-item">
                    <a id="navitems-bg" class="nav-link" href="/contenttechnology">Keajaiban Dunia</a>
                </li>
                <li class="nav-item">
                    <a id="navitems-bg" class="nav-link" href="/contenttechnology">Perang Dunia</a>
                </li>
                <li class="nav-item">
                    <a id="navitems-bg" class="nav-link" href="/contenttechnology">Tata Krama</a>
                </li>
                <li class="nav-item">
                    <a id="navitems-bg" class="nav-link" href="/contenttechnology">Fashion</a>
                </li>
                <li class="nav-item">
                    <a id="navitems-bg" class="nav-link" href="/contenttechnology">Elektronik</a>
                </li>
                <li class="nav-item">
                    <a id="navitems-bg" class="nav-link" href="/contenttechnology">Gurun</a>
                </li>
                <li class="nav-item">
                    <a id="navitems-bg" class="nav-link" href="/contenttechnology">Bencana Alam</a>
                </li>
            </ul>
        </div>
    </div>

</div> --}}
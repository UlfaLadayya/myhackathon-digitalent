@extends('layouts.mainuserpage')

@section('container')

<div class="technology_content">
    <p id="technology_subtitle"><u>Sejarah Perkembangan Komputer</u></p>
    <p class="writer_content">Ditulis oleh : Ulf's Creativity <br> Source : Buku DASAR-DASAR PENGANTAR TEKNOLOGI INFORMASI (Bayu Rianto & Welly Dozan, Juni 2020)</p>

    <button id="btnSejarahPerkembanganKomputer">
        <img id="icon_voice" src="assets/images/voice.png" alt="icon-voice">
    </button>
    <div id="tech_per_item">
        
        <p class="contenttech_orderlist">
            {!! $introSejarahPerkembanganKomputer !!}
        </p>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <b>{!! $judul1 !!}</b>
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <img class="perkembangankomputer" src="assets/images/komputergenerasipertama.jpg" class="card-img-top" alt="Komputer Generasi Pertama">
                    <div id="source-img">
                        <p>
                            Komputer Generasi Pertama <br>
                            sumber gambar : https://www.ruangguru.com/blog/yuk-ingat-kembali-sejarah-perkembangan-komputer
                        </p>
                    </div>
                    <p class="contenttech_orderlist">
                        {!! $contentSejarahPerkembanganKomputer1 !!}
                    </p>
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    {!! $judul2 !!}
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <img class="perkembangankomputer" src="assets/images/komputergenerasikedua.png" class="card-img-top" alt="Komputer Generasi Kedua">
                    <div id="source-img">
                        <p>
                            Komputer Generasi Kedua <br>
                            sumber gambar : https://www.ruangguru.com/blog/yuk-ingat-kembali-sejarah-perkembangan-komputer
                        </p>
                    </div>
                    <div class="contenttech_orderlist">
                        {!! $contentSejarahPerkembanganKomputer2 !!}
                    </div>
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    {!! $judul3 !!}
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <img class="perkembangankomputer" src="assets/images/komputergenerasiketiga.jpg" class="card-img-top" alt="Komputer Generasi Ketiga">
                    <div id="source-img">
                        <p>
                            Komputer Generasi Ketiga <br>
                            sumber gambar : https://www.ruangguru.com/blog/yuk-ingat-kembali-sejarah-perkembangan-komputer
                        </p>
                    </div>
                    <div class="contenttech_orderlist">
                        {!! $contentSejarahPerkembanganKomputer3 !!}
                    </div>
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    {!! $judul4 !!}
                </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <img class="perkembangankomputer" src="assets/images/komputergenerasikeempat.jpg" class="card-img-top" alt="Komputer Generasi Keempat">
                    <div id="source-img">
                        <p>
                            Komputer Generasi Keempat <br>
                            sumber gambar : https://www.ruangguru.com/blog/yuk-ingat-kembali-sejarah-perkembangan-komputer
                        </p>
                    </div>
                    <div class="contenttech_orderlist">
                        {!! $contentSejarahPerkembanganKomputer4 !!}
                    </div>
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="false" aria-controls="collapseFifth">
                    {!! $judul5 !!}
                </button>
                </h2>
                <div id="collapseFifth" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <img class="perkembangankomputer" src="assets/images/komputergenerasikelima.png" class="card-img-top" alt="Komputer Generasi Kelima">
                    <div id="source-img">
                        <p>
                            Komputer Generasi Kelima <br>
                            sumber gambar : https://www.ruangguru.com/blog/yuk-ingat-kembali-sejarah-perkembangan-komputer
                        </p>
                    </div>
                    <div class="contenttech_orderlist">
                        {!! $contentSejarahPerkembanganKomputer5 !!}
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
    <script>
        document.getElementById('btnSejarahPerkembanganKomputer').addEventListener('click', () => {
            const text = document.getElementById('tech_per_item').textContent.trim();
            if (!text) {
                alert('Teks kosong!');
                return;
            }

            fetch('/tts/texttospeech', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ text })
            })
            .then(res => {
                if (!res.ok) throw new Error('Gagal request TTS');
                return res.blob();
            })
            .then(blob => {
                const audioUrl = URL.createObjectURL(blob);
                const audio = new Audio(audioUrl);
                audio.play();
            })
            .catch(err => {
                console.error(err);
                alert('Gagal memutar suara: ' + err.message);
            });
        });
    </script>
@endsection
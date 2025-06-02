@extends('layouts.mainuserpage')

@section('container')

<div class="technology_content">
    <p id="technology_subtitle"><u>Pengertian Teknologi Informasi dan Komunikasi</u></p>
    <p class="writer_content">Ditulis oleh : Ulf's Creativity <br> Source : Buku DASAR-DASAR PENGANTAR TEKNOLOGI INFORMASI (Bayu Rianto & Welly Dozan, Juni 2020)</p>

    <div id="card-tik1" class="card">
        <div id="card-tik2" class="card-body">
            <button id="btnPengertianTik">
                <img id="icon_voice" src="assets/images/voice.png" alt="icon-voice">
            </button>
            <div id="content_pengertian">
                {!! $contentPengertianTik !!}
                {{-- Teknologi informasi dan komunikasi terbagi menjadi dua bagian, yaitu informasi dan komunikasi. Teknologi informasi mencakup semua yang berhubungan dengan pengolahan dan pengelolaan data. Di sisi lain, teknologi komunikasi mencakup segala yang berkaitan dengan cara menyampaikan data dari pengirim kepada penerima. 
                Haag dan Keen (1906) menyatakan bahwa teknologi informasi mencakup alat-alat yang dirancang untuk mendukung aktivitas yang berhubungan dengan pengolahan data.
                Martin (1999) menegaskan bahwa teknologi tidak hanya mencakup perangkat komputer, baik perangkat keras maupun perangkat lunak, yang digunakan untuk memproses data, tetapi juga mencakup teknologi komunikasi yang digunakan untuk mengirimkan data.
                Williams dan Sawyer (2003) menjelaskan bahwa teknologi informasi merupakan kombinasi antara komputasi, yaitu komputer, dengan jalur komunikasi cepat yang mentransmisikan data, suara, dan video. Teknologi ini sering disebut TIK atau ICT (teknologi informasi dan komunikasi). Istilah lain yang digunakan adalah "telematika," gabungan dari telekomunikasi dan informatika. (Budiana, Sjafirah 2015)
                Secara umum, dapat disimpulkan bahwa teknologi informasi berarti teknologi yang digunakan untuk mendapatkan, memproses, menyimpan, dan menyebarkan berbagai jenis informasi dengan menggunakan komputer dan telekomunikasi. Ini lahir dari dorongan kuat untuk menciptakan inovasi dan ide-ide baru yang dapat mengatasi kelemahan dan keterlambatan dalam kinerja manusia. --}}
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
    <script>
        document.getElementById('btnPengertianTik').addEventListener('click', () => {
            const text = document.getElementById('content_pengertian').textContent.trim();
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
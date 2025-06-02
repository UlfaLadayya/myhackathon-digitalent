@extends('layouts.mainuserpage')

@section('container')

<div class="technology_content">
    <p id="technology_subtitle"><u>Masa Prasejarah (3000 SM)</u></p>
    <p class="writer_content">Ditulis oleh : Ulf's Creativity <br> Source : Buku DASAR-DASAR PENGANTAR TEKNOLOGI INFORMASI (Bayu Rianto & Welly Dozan, Juni 2020)</p>

    <div id="card-tik1" class="card">
        <div id="card-tik2" class="card-body">
            <button id="btnMasaPrasejarah">
                <img id="icon_voice" src="assets/images/voice.png" alt="icon-voice">
            </button>
            <div id="tech_per_item_prasejarah">
                <img id="lukisandinding" src="assets/images/lukisandidindinggua.jpg" alt="Gambar lukisan didinding komunikasi manusia di Masa Prasejarah">
                <div id="source-img">
                    <p>
                        sumber gambar : https://www.indoworx.com/sejarah-perkembangan-teknologi-informasi-dan-komunikasi-di-dunia/
                    </p>
                </div>
                {!! $contentMasaPrasejarah !!}
                {{-- <p>
                    Di zaman ini, cara manusia berkomunikasi hanya dengan <b>menggambarkan informasinya pada dinding-dinding gua</b> <b>mengenai perburuan dan
                    binatang buruannya</b> lho sobat cerdas. Manusia juga sudah mulai mengetahui berbagai benda yang ada disekitarnya dan menggambarkan semua benda 
                    tersebut di dinding-dinding gua untuk mewakilinya. Kemahiran bahasa merekasaat itu pun hanya terbatas pada dengusan, bahasa isyarat, dan juga
                    gerakan tangan. Kemajuan selanjutnya adalah diproduksi dan digunakannya alat-alat yang dapat memunculkan bunyi dan isyarat. <br>Contohnya seperti <b>gendang, 
                    terompet yang dibuat dari tanduk binatang, isyarat asap sebagai alat peringatan bahaya</b>.
                </p>     --}}
            </div>
        </div>
    </div>

</div>

@endsection

@section('script')
    <script>
        document.getElementById('btnMasaPrasejarah').addEventListener('click', () => {
            const text = document.getElementById('tech_per_item_prasejarah').textContent.trim();
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
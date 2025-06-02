@extends('layouts.mainuserpage')

@section('container')
<div class="technology_content">
    <p id="technology_subtitle">WePTIK</p>

    <div id="card-tik1" class="card">
        <div id="card-tik2" class="card-body">
            <button id="btnAbout">
                <img id="icon_voice" src="assets/images/voice.png" alt="icon-voice">
            </button>
            <div id="content_About">
                {!! $contentAbout !!}
               {{-- WePTIK merupak singkatan dari <b>"Website Pengetahuan Teknologi Informasi dan Komunikasi (TIK)"</b>. Website ini diperuntukkan bagi anak-anak dari tingkatan apapun.
               Di dalam website ini akan disediakan pengetahuan seputar TIK. Saya berharap semua anak-anak dapat mengenal Teknologi Informasi dan Komunikasi sebelum dapat memahami atau mengerti 
               lebih dalam mengenai hal ini.
               <br><br>
               Konsep untuk menyalurkan pengetahuan tersebut, saya kemas menjadi sebuah map.
               <br><br>
               Untuk mengetahui lebih lanjut, jangan lupa kunjungi halaman "Teknologi Informasi dan Komunikasi" ya sobat cerdas..
               <br><br>

               <b>Salam Cerdas Teknologi..</b>

               <br><br>
               Sincerely,<br>
               Ulf's Creativity --}}

            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        document.getElementById('btnAbout').addEventListener('click', () => {
            const text = document.getElementById('content_About').textContent.trim();
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
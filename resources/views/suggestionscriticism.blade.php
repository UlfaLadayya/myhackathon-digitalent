@extends('layouts.mainuserpage')

@section('container')
<div class="technology_content">
    <p id="technology_subtitle"></p>

    <div id="card-tik1" class="card">
        <div id="card-tik2" class="card-body">
            <button id="btnKritik">
                <img id="icon_voice" src="assets/images/voice.png" alt="icon-voice">
            </button>
            <div id="content_Kritik">
                {!! $contentKritik !!}
               {{-- Halo sobat cerdas semua.. Jika sobat cerdas mempunyai kritik dan saran untuk WePTIK, langsung saja berikan pendapatmu dengan cara klik link di bawah ya.. --}}
               <br><br>
               <a id="saran" href="https://forms.gle/9VdE9ksKGPR1NG297"><b>Beri saran & Kritik..</b></a>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
</div>
@endsection

@section('script')
    <script>
        document.getElementById('btnKritik').addEventListener('click', () => {
            const text = document.getElementById('content_Kritik').textContent.trim();
            if (!text) {
                alert('Teks kosong!');
                return;
            }

            // const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            // fetch('/tts/generate', {
            // method: 'POST',
            // headers: {
            //     'Content-Type': 'application/json',
            //     'X-CSRF-TOKEN': csrfToken
            // },
            // body: JSON.stringify({ text: 'Halo dunia' })
            // })
            // .then(res => res.json())
            // .then(data => {
            // const audioUrl = `/tts/play/${data.filename}`;
            // const audio = new Audio(audioUrl);
            // audio.play();
            // })
            // .catch(err => console.error(err));

            // fetch('/tts/generate', {
            // method: 'POST',
            // headers: {
            //     'Content-Type': 'application/json',
            //     'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            // },
            // body: JSON.stringify({ text: 'Halo dunia' })
            // })
            // .then(res => res.json())
            // .then(data => {
            // const audioUrl = `/tts/play/${data.filename}`;
            // const audio = new Audio(audioUrl);
            // audio.play();
            // })
            // .catch(err => console.error(err));

            fetch('/tts/generate', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ text })
            })
            .then(res => res.json())
            .then(data => {
                const audioUrl = `/tts/play/${data.filename}`;
                const audio = new Audio(audioUrl);
                audio.play();
            })
            .catch(err => console.error(err));

            // fetch('/tts/generate', {
            //     method: 'POST',
            //     headers: { 'Content-Type': 'application/json' },
            //     body: JSON.stringify({ text: 'Halo dunia' })
            //     })
            //     .then(res => res.json())
            //     .then(data => {
            //     const audioUrl = `/tts/play/${data.filename}`;
            //     const audio = new Audio(audioUrl);
            //     audio.play();
            // });


            // fetch('/tts/play')
            // .then(res => res.blob())
            // .then(blob => {
            //     const audioUrl = URL.createObjectURL(blob);
            //     new Audio(audioUrl).play();
            // });

            // fetch('/txtfile/audiorequestcontrol', {
            //     method: 'POST',
            //     headers: {
            //         'Content-Type': 'application/json',
            //         'X-CSRF-TOKEN': '{{ csrf_token() }}'
            //     },
            //     body: JSON.stringify({ text })
            // })
            // .then(res => {
            //     if (!res.ok) throw new Error('Gagal request TTS');
            //     return res.blob();
            // })
            // .then(blob => {
            //     const audioUrl = URL.createObjectURL(blob);
            //     const audio = new Audio(audioUrl);
            //     audio.play();
            // })
            // .catch(err => {
            //     console.error(err);
            //     alert('Gagal memutar suara: ' + err.message);
            // });
        });
    </script>
@endsection
@extends('layouts.mainuserpage')

@section('container')

<div class="technology_content">
    <button id="btnSpeech">
        <img id="icon_voice" src="assets/images/voice.png" alt="icon-voice">
    </button>
    <p id="intro_petualangan">
        {!! $contentTik !!}
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

@section('script')
    <script>
        document.getElementById('btnSpeech').addEventListener('click', () => {
            const text = document.getElementById('intro_petualangan').textContent.trim();
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

{{-- <script>
document.addEventListener('DOMContentLoaded', () => {
    const playBtn = document.getElementById('play');
    playBtn.addEventListener('click', async () => {
        const text = {!! json_encode(strip_tags($contentTik)) !!};

        const response = await fetch('/texttospeech', {  // sesuaikan URL endpoint
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ text })
        });

        if (!response.ok) {
            alert('Gagal memutar suara');
            return;
        }

        const audioData = await response.arrayBuffer();
        const audioBlob = new Blob([audioData], { type: 'audio/mpeg' });
        const audioUrl = URL.createObjectURL(audioBlob);
        const audio = new Audio(audioUrl);
        audio.play();
    });
});
</script> --}}

{{-- @section('script')
<script>
document.getElementById('play').addEventListener('click', async () => {
    const text = {!! json_encode(strip_tags($contentTik)) !!};

    const response = await fetch('/texttospeech', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ text })
    });

    if (!response.ok) {
        alert('Gagal memutar suara');
        return;
    }

    const audioData = await response.arrayBuffer();
    const audioBlob = new Blob([audioData], { type: 'audio/mpeg' });
    const audioUrl = URL.createObjectURL(audioBlob);
    const audio = new Audio(audioUrl);
    audio.play();
});
</script>
@endsection --}}

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
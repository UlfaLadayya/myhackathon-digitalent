@extends('layouts.mainuserpage')

@section('container')

<div class="technology_content">
    <p id="technology_subtitle"><u>Penerapan Teknologi Informasi dan Komunikasi di berbagai bidang</u></p>
    <p class="writer_content">Ditulis oleh : Ulf's Creativity <br> Source : https://www.detik.com/edu/detikpedia/d-6837518/teknologi-informasi-pengertian-fungsi-contoh-dan-prediksi-masa-depan</p>

    <div id="card-tik1" class="card">
        <div id="card-tik2" class="card-body">
            <button id="btnPenerapan">
                <img id="icon_voice" src="assets/images/voice.png" alt="icon-voice">
            </button>
            <div id="content_penerapan">
                {!! $contentPenerapan !!}
                {{-- Saat ini, berbagai bidang telah mengadopsi teknologi informasi, termasuk komunikasi, ekonomi, pendidikan, dan kesehatan. 
                Berikut adalah beberapa contoh penerapan TI di bidang-bidang tersebut :
                <ol type="a">
                    <li>Layanan SMS sudah tergantikan oleh WhatsApp yang memiliki biaya lebih rendah. Selain mengirimkan teks, berbagi 
                        foto dan video kini menjadi lebih sederhana.
                    </li>
                    <li>
                        Rapat tidak lagi memerlukan kehadiran fisik, karena sekarang bisa dilakukan melalui Zoom atau Google Meet.
                    </li>
                    <li>
                        Penggunaan Kecerdasan Buatan (AI) semakin meningkat, terlihat dari aplikasi seperti Chat GPT dan generator gambar AI.
                    </li>
                    <li>
                        Sekarang, ponsel juga berfungsi seperti kartu debit, kartu kredit, dompet digital, dan alat untuk transaksi.
                    </li>
                    <li>
                        Transaksi jual beli produk kini bisa dilakukan secara online lewat e-commerce, TikTok, Instagram, dan platform lainnya.
                    </li>
                    <li>
                        Selama pandemi COVID-19, pendidikan dapat dilaksanakan secara daring berkat kemajuan dalam teknologi informasi. Materi 
                        pelajaran tidak lagi bergantung pada buku-buku dari sekolah; siswa dapat mencarinya di internet.
                    </li>
                    <li>
                        Kemajuan teknologi telah membantu dokter dalam mendiagnosis penyakit, melalui penggunaan sinar X, MRI, dan CT Scan.
                    </li>
                    <li>
                        Perawatan untuk berbagai penyakit juga semakin maju, misalnya lewat kemoterapi, hemodialisis, dan berbagai metode lainnya.
                    </li>
                </ol> --}}
            </div>
        </div>
    </div> 
</div>

@endsection

@section('script')
    <script>
        document.getElementById('btnPenerapan').addEventListener('click', () => {
            const text = document.getElementById('content_penerapan').textContent.trim();
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
@extends('layouts.mainuserpage')

@section('container')

<div class="technology_content">
    <p id="technology_subtitle"><u>Manfaat-manfaat dari Teknologi Informasi dan Komunikasi</u></p>
    <p class="writer_content">Ditulis oleh : Ulf's Creativity <br> Source : https://www.liputan6.com/hot/read/5187393/12-manfaat-tik-di-berbagai-bidang-pahami-kelebihan-dan-kekurangnnya?page=5</p>

    <div id="card-tik1" class="card">
        <div id="card-tik2" class="card-body">
            <button id="btnManfaat">
                <img id="icon_voice" src="assets/images/voice.png" alt="icon-voice">
            </button>
            <div id="content_manfaat">
                {!! $contentManfaat !!}
                {{-- Berikut merupakan beberapa manfaat dari teknologi informasi dan komunikasi.
                <ol type="1">
                    <li><b>Akses Informasi</b></li>
                    Keuntungan dari teknologi informasi dan komunikasi memungkinkan orang untuk mendapatkan berbagai jenis informasi, mulai dari berita hingga pendidikan, melalui internet. Ini sangat berguna 
                    dalam memperluas wawasan dan mencari jawaban untuk pertanyaan yang mungkin sulit dicari dengan cara lain.

                    <li><b>Komunikasi</b></li>
                    Teknologi informasi dan komunikasi membuat interaksi antara individu dan perusahaan menjadi lebih mudah, baik 
                    lewat email, pesan teks, maupun video call. Ini sangat mendukung pemeliharaan hubungan dengan orang-orang yang 
                    berada jauh atau menjalankan bisnis dengan lebih efektif. Dalam bisnis, teknologi ini juga memungkinkan perusahaan 
                    untuk melakukan pengiriman pesan secara massal dan meningkatkan komunikasi internal.

                    <li><b>Produktivitas</b></li>
                    Dengan bantuan teknologi informasi dan komunikasi, seseorang dapat menyelesaikan tugas dengan lebih cepat dan efisien 
                    melalui perangkat lunak yang mendukung pengelolaan data, pembuatan laporan, atau perencanaan. Dalam konteks bisnis, 
                    teknologi ini juga membantu perusahaan untuk menyempurnakan proses bisnis dan meningkatkan tingkat efisiensi.

                    <li><b>Pembelajaran</b></li>
                    Keuntungan dari teknologi informasi dan komunikasi memungkinkan individu untuk belajar kapan pun dan di mana pun berkat 
                    internet. Hal ini sangat berpengaruh dalam meningkatkan peluang belajar bagi individu yang memiliki keterbatasan. Di dunia 
                    pendidikan, teknologi ini juga mendukung pengembangan konten edukasi interaktif, pembelajaran online, dan sistem evaluasi 
                    yang lebih baik.

                    <li><b>Bisnis</b></li>
                    Perusahaan dapat memanfaatkan teknologi informasi dan komunikasi untuk memperluas jangkauan pasar mereka melalui internet, 
                    meningkatkan efisiensi dengan pengoptimalan proses bisnis, serta meraih keuntungan melalui pemasaran online. Dalam sektor 
                    e-commerce, teknologi ini juga memungkinkan perusahaan untuk menjual barang atau jasa secara online.

                    <li><b>Keamanan</b></li>
                    Teknologi informasi dan komunikasi dapat meningkatkan keamanan di level perusahaan dan individu melalui otomatisasi sistem 
                    keamanan, enkripsi data, dan teknologi pengenalan wajah. Dalam industri perbankan, teknologi ini juga memungkinkan penggunaan 
                    sistem keamanan yang lebih mutakhir seperti token, biometrik, dan metode verifikasi ganda untuk melindungi transaksi finansial.

                    <li><b>Pemantauan</b></li>
                    Teknologi informasi dan komunikasi bisa dipakai untuk memantau situasi lingkungan atau kesehatan manusia, melalui sensor yang 
                    dipasang di sekitar atau alat yang dapat dikenakan. Misalnya, sensor lingkungan dapat digunakan untuk mengukur polusi udara, 
                    cuaca, atau kualitas air. Sensor dalam alat yang dikenakan dapat memantau kesehatan seseorang, termasuk detak jantung, aktivitas 
                    fisik, dan kualitas tidur.

                    <li><b>Pembuatan</b></li>
                    Keuntungan dari teknologi informasi dan komunikasi memungkinkan pembuatan produk lebih cepat dan efisien dengan bantuan teknologi 
                    seperti pencetakan 3D, simulasi, dan robotik. Ini sangat mendukung peningkatan efisiensi dalam proses produksi dan mengurangi biaya.

                    <li><b>Transportasi</b></li>
                    Teknologi informasi dan komunikasi dapat memperbaiki sistem transportasi dengan penggunaan teknologi seperti sistem navigasi, aplikasi 
                    pemesanan taksi, dan pengaturan lalu lintas. Ini berkontribusi pada efisiensi transportasi dan pengurangan kemacetan.

                    <li><b>Pengelolaan sumber daya</b></li>
                    Manfaat teknologi informasi dan komunikasi dapat dimanfaatkan dalam pengelolaan sumber daya, termasuk air, listrik, 
                    dan gas, melalui sistem pengukuran waktu nyata dan kontrol. Ini sangat membantu dalam memaksimalkan penggunaan sumber 
                    daya dan meminimalkan kerugian.

                    <li><b>Kesehatan</b></li>
                    Teknologi informasi dan komunikasi mendukung perawatan kesehatan dengan penggunaan sistem rekam medis elektronik, telemedisin, 
                    dan pemantauan kesehatan jarak jauh. Hal ini sangat bermanfaat dalam meningkatkan efisiensi layanan kesehatan dan akses pasien 
                    terhadap perawatan.

                    <li><b>Pendidikan</b></li>
                    Manfaat teknologi informasi dan komunikasi dapat meningkatkan mutu pendidikan melalui pembelajaran online, sistem evaluasi, dan 
                    pengembangan konten pendidikan yang interaktif. Ini sangat membantu dalam meningkatkan kualitas pendidikan dan memberikan akses 
                    pendidikan bagi individu dengan keterbatasan.

                </ol> --}}
            </div>
        </div>
    </div>

    
</div>

@endsection

@section('script')
    <script>
        document.getElementById('btnManfaat').addEventListener('click', () => {
            const text = document.getElementById('content_manfaat').textContent.trim();
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
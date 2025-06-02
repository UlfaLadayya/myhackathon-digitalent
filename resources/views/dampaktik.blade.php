@extends('layouts.mainuserpage')

@section('container')

<div class="technology_content">
    <p id="technology_subtitle"><u>Dampak dari Teknologi Informasi dan Komunikasi</u></p>
    <p class="writer_content">Ditulis oleh : Ulf's Creativity <br> Source : Buku DASAR-DASAR PENGANTAR TEKNOLOGI INFORMASI (Bayu Rianto & Welly Dozan, Juni 2020)</p>

    <div id="card-tik1" class="card">
        <div id="card-tik2" class="card-body">
            <button id="btnDampak">
                <img id="icon_voice" src="assets/images/voice.png" alt="icon-voice">
            </button>
            <div id="content_dampak">
                {!! $contentDampak !!}
                {{-- Teknologi informasi dan komunikasi, yang merupakan bagian dari ilmu pengetahuan dan teknologi secara keseluruhan, adalah jenis teknologi yang terkait dengan pengumpulan dan 
                pengolahan data. Dalam dunia pendidikan, TIK memiliki peranan yang besar. Teknologi informasi seakan telah menggantikan buku, guru, dan metode pembelajaran tradisional.
                <br><br>
                Dengan pesatnya perkembangan zaman, teknologi informasi juga berkembang dengan cepat. Manusia tidak dapat terlepas dari pemanfaatan teknologi 
                informasi dan komunikasi. Dampak dari perkembangan teknologi ini sangat besar, di mana masyarakat kini sangat bergantung pada TIK. Ini membuat 
                penyebaran informasi menjadi sangat cepat, sehingga peristiwa dari berbagai bagian dunia dapat diakses secara instan.
                <br><br>
                Namun, perkembangan teknologi juga membawa dampak buruk bagi masyarakat, terutama untuk generasi muda. Melalui layanan internet, terdapat banyak 
                konten yang tidak seharusnya diakses oleh anak-anak yang masih di bawah umur. Hal ini dapat mengganggu perkembangan mental dan psikologi anak-anak, 
                dan tidak sedikit yang mengalami dampak negatif akibat teknologi.
                <br><br>
                Bagi beberapa kalangan, teknologi menjadi lahan ideal untuk mendapatkan keuntungan yang besar.
                <ol type="1">
                    <li><b>Dampak Positif Teknologi Informasi dan Komunikasi</b></li>
                    <ol type="a">
                        <li>Internet berfungsi sebagai media komunikasi yang paling umum digunakan, memungkinkan semua penggunanya berinteraksi dengan orang lain di 
                            seluruh dunia, termasuk anak-anak hingga orang dewasa.
                        </li>
                        <li>
                            Hal ini membantu mengurangi kesenjangan penggunaan TIK dalam pendidikan antara negara berkembang dan negara maju lainnya.
                        </li>
                        <li>
                            Dengan perkembangan internet yang cepat, ia berfungsi sebagai sumber informasi.
                        </li>
                        <li>
                            Manusia mendapatkan akses yang mudah untuk informasi di internet, sehingga mereka dapat mengetahui banyak hal yang terjadi.
                        </li>
                        <li>
                            Internet juga dapat berfungsi sebagai sumber informasi dalam pendidikan, budaya, dan bidang lainnya.
                        </li>
                        <li>
                            Transaksi dan bisnis dalam perdagangan menjadi lebih mudah karena tidak perlu datang langsung ke lokasi penjualan.
                        </li>
                        <li>
                            Internet memungkinkan kita untuk memperbarui informasi yang selalu bisa diakses setiap detiknya.
                        </li>
                    </ol><br>
                    <li><b>Dampak Negatif Teknologi Informasi dan Komunikasi</b></li>
                    Hal ini membuat pelanggaran terhadap Hak Atas Kekayaan Intelektual (HAKI) lebih mudah terjadi, karena orang dapat dengan 
                    gampang mengakses data, yang mendorong plagiarisme.
                    <br><br>
                    Selain itu, orang menjadi kurang mampu berpikir jernih dan sulit berkonsentrasi dalam waktu lama, karena ketergantungan 
                    pada alat yang ada.
                    <br><br>
                    Melalui penggunaan komputer, banyak keuntungan, kemudahan, dan kesenangan yang bisa didapatkan. Namun, hal ini juga dapat 
                    menyebabkan dampak negatif dalam cara kita menggunakan teknologi ini. Berikut adalah penjelasannya.
                    <ol type="a">
                        <li><b>Ketergantungan</b></li>
                        Komputer memiliki daya tarik yang kuat, mampu menjawab semua rangsangan dari penggunanya. Daya tarik yang berlebihan ini 
                        bisa membuat pengguna merasa menemukan dunia yang nyaman, sehingga sulit untuk berpisah. Komputer sering digunakan sebagai 
                        cara untuk meredakan stres melalui permainan yang tersedia.

                        <li><b>Pornografi</b></li>
                        Pandangan bahwa internet sering berkaitan dengan pornografi memang ada benarnya. Dengan kecepatan dalam menyebarkan informasi, 
                        pornografi pun menjadi sangat umum di internet. Banyak situs pornografi yang membuat banyak orang, terutama orang tua, merasa 
                        khawatir karena anak-anak mereka bisa terpapar konten tersebut. Di internet, terdapat gambar-gambar pornografi yang bisa memicu 
                        seseorang untuk melakukan tindakan yang melanggar hukum. Ironisnya, ada situs yang secara khusus menargetkan anak-anak, mencoba 
                        menarik perhatian mereka dengan konten yang lekat dengan minat mereka.

                        <li><b>Perilaku Antisosial</b></li>
                        Salah satu akibat dari penyalahgunaan komputer adalah munculnya perilaku antisosial. Pengguna menjadi kurang peduli dengan lingkungan 
                        sosial dan lebih memprioritaskan penggunaan komputer. Mereka cenderung tidak memperhatikan apa yang terjadi di sekitar, hanya komputer 
                        yang menarik perhatian mereka. Hal ini menyebabkan orang jarang berinteraksi dengan orang lain di sekitarnya, sehingga kemampuan untuk 
                        bersosialisasi dan beremosi tidak berkembang dengan baik. Seiring waktu, seseorang bisa kesulitan dalam berkomunikasi dan membangun hubungan 
                        dengan orang lain. Jika tidak ditangani dengan cepat, ini bisa mengakibatkan dampak yang sangat negatif, di mana individu akan menjadi lebih 
                        individualis dan interaksi serta sosialisasi bisa hilang sama sekali.
                    </ol>
                </ol> --}}
            </div>
        </div>
    </div>   
</div>

@endsection

@section('script')
    <script>
        document.getElementById('btnDampak').addEventListener('click', () => {
            const text = document.getElementById('content_dampak').textContent.trim();
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
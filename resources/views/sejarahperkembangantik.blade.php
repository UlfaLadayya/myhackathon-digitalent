@extends('layouts.mainuserpage')

@section('container')

<div id="sejarah" class="technology_content sejarah">
    {{-- <p id="technology_title">Technology</p> --}}
    <p id="technology_subtitle"><u>Sejarah Perkembangan Teknologi Informasi dan Komunikasi</u></p>
    <p class="writer_content">Ditulis oleh : Ulf's Creativity <br> Source : Buku DASAR-DASAR PENGANTAR TEKNOLOGI INFORMASI (Bayu Rianto & Welly Dozan, Juni 2020)</p>

    <button id="btnSejarah">
        <img id="icon_voice" src="assets/images/voice.png" alt="icon-voice">
    </button>
    
    <div id="content_tik">
        {!! $contentSejarahTik !!}
        {{-- Hi, sobat cerdas.. Sebelum kita mulai berpetualang di bagian <i>technology</i> khususnya Teknologi Informasi dan Komunikasi,
        aku mau berkenalan dengan sobat cerdas semua. Aku MinSmarGenKnowsite (Mimin Smart General Knowledge Website), karena kepanjangan
        sobat cerdas bisa panggi aku MinGK, GK itu singkatan dari <i>general knowledge</i> ya, sebut saja dalam bahasa inggris "ji kei", 
        jadi Min ji kei/Mimin ji kei, hehehe.. 
        <br><br>
        Kali ini MinGK mau ajak sobat cerdas untuk mengetahui lebih lanjut mengenai <b>"Sejarah Perkembangan Teknologi Informasi dan Komunikasi"</b>.
        Sobat cerdas tahu engga kalau Teknologi Informasi dan Komunikasi sudah mulai ada sejak zaman pra sejarah. Mau tahu lebih lanjut? 
        Yuk, ikut MinGK untuk mulai perjalanannya sekarang. Bentuk awal komunikasi saat itu hanyalah suara dengusan dan juga isyarat tangan lho sobat cerdas.
        Lalu, diciptakanlah alat-alat yang dapat menimbulkan bunyi dsn isyarat pada zaman berikutnya. Tidak berakhir disitu saja, manusia mulai memproduksi
        alat-alat mekanik untuk mekanisme perhitungan. Apakah sejarahnya berhenti sampai tahap itu saja? Tentu tidak sobat cerdas, karena penelitian
        terus dilaksanakan yang bertujuan untuk menemukan alat-alat yang dapat memudahkan hidup manusia.
        <br><br>
        <b>Jika ingin tahu lebih lanjut, klik setiap gambar di bawah ini ya sobat cerdas..</b> --}}

        <div class="sejarahpage_content">

            <div class="leftsejarahpage_content">

                <div id="card-bg" class="card">
                    <a href="/masaprasejarah">
                        <img id="img-sejarah" src="assets/images/lukisandidindinggua.jpg" class="card-img-top" alt="Gambar lukisan didinding komunikasi manusia di Masa Prasejarah">
                    </a>
                    <div id="card-content" class="card-body">
                        <p class="card-text">Masa Prasejarah (3000 SM)</p>
                    </div>
                </div>

                <div id="card-bg" class="card">
                    <a href="/masamodern">
                        <img id="img-sejarah" src="assets/images/mesincetak.jpg" class="card-img-top" alt="Mesin Cetak Gutenberg">
                    </a>
                    <div id="card-content" class="card-body">
                        <p class="card-text">Masa Modern (1400 M s.d. Sekarang)</p>
                    </div>
                </div>

            </div>

            <div class="rightsejarahpage_content">

                <div id="card-bg" class="card">
                    <a href="/masasejarah">
                        <img id="img-sejarah" src="assets/images/tulisanpiktograf.jpg" class="card-img-top" alt="Tulisan Piktograf Bangsa Sumeria">
                    </a>
                    <div id="card-content" class="card-body">
                        <p class="card-text">Masa Sejarah (3000 SM s.d. 1400 M)</p>
                    </div>
                </div>

                <div id="card-bg" class="card">
                    <a href="/sejarahperkembangankomputer">
                        <img id="img-sejarah" src="assets/images/komputergenerasipertama.jpg" class="card-img-top" alt="Komputer Generasi Pertama">
                    </a>
                    <div id="card-content" class="card-body">
                        <p class="card-text">Sejarah Perkembangan Komputer</p>
                    </div>
                </div>

            </div>

        </div>

        {{-- <ol id="tech_orderlist">
            <li><b>Masa Prasejarah (3000 SM)</b></li>
                <img class="tech_img" src="assets/images/masaprasejarah.jpg" alt="Gambar lukisan didinding komunikasi manusia di Masa Prasejarah">
                <div class="contenttech_orderlist">
                    Di zaman ini, cara manusia berkomunikasi hanya dengan menggambarkan informasinya pada dinding-dinding gua mengenai perburuan dan
                    binatang buruannya lho sobat cerdas. Manusia juga sudah mulai mengetahui berbagai benda yang ada disekitarnya dan menggambarkan semua benda 
                    tersebut di dinding-dinding gua untuk mewakilinya. Kemahiran bahasa merekasaat itu pun hanya terbatas pada dengusan, bahasa isyarat, dan juga
                    gerakan tangan. Kemajuan selanjutnya adalah diproduksi dan digunakannya alat-alat yang dapat memunculkan bunyi dan isyarat. Contohnya seperti gendang, 
                    terompet yang dibuat dari tanduk binatang, isyarat asap sebagai alat peringatan bahaya.
                </div>

           <li><b>Masa Sejarah (3000 SM s.d. 1400 M)</b>
                <p id="tech_sub">--Penemuan alat TIK pada Masa Sejarah--</p>
                <ul class="ul_circle">
                    <li><b>Bangsa Sumeria</b> menemukan tulisan untuk pertama kalinya berupa simbol-simbol yang disebut <b>piktografi (3000 SM)</b>.</li>
                    https://nationalgeographic.grid.id/read/132187193/penemuan-penemuan-peradaban-sumeria-kuno-yang-mengubah-dunia?page=all
                    <li><b>Bangsa Mesir Kuno</b> sudah mengembangkan tulisan <b>Hieroglif</b> untuk berkomunikasi <b>2900 SM</b>.</li>
                    <li><b>Abacus</b>, alat ini dianggap sebagai alat perhitungan digital pertama kali. Namun, sumber aslinya belum jelas untuk abacus atau sempoa, diperkirakan berasal dari Babylon, Cina atau Mesir <b>2500 SM</b>.</li>
                    <li><b>Bangsa Yunani</b> menginformasikan sistem penulisan yang dimulai dari kiri ke kanan memakai abjad fonetik yakni huruf yang dibangun berdasar kepada bunyi ucapan <b>1775 SM</b>.</li>
                    <li><b>Bangsa China</b> mulai menuliskan sejarahnya pada kepingan tulang binatang <b>(1400 SM)</b>.</li>
                    <li><b>Bangsa Suriah</b> sudah membuat ensiklopedia untuk pertama kalinya <b>1270 SM</b>.</li>
                    <li><b>Bangsa China</b> membangun sistem pelayanan pos dan kantor pos yang pertama kalinya <b>900 SM</b>.</li>
                    <li><b>Bangsa Yunani</b> memakai burung merpati untuk mendistribusikan informasi <b>776 SM</b>.</li>
                    <li><b>Bangsa Yunani</b> membangun perpustakan untuk pertama kalinya <b>530 SM</b>.</li>
                    <li><b>Bangsa Mesir Kuno</b> memakai serat pohon papyrus sebagai kertas <b>500 SM</b>.</li>
                    <li><b>Bangsa China</b> menemukan kertas, orang tersebut ialah <b>Tsai Lun</b>. Kertasnya dibuat dari serat pohon bambu yang mana dihaluskan, dicuci, diratakan, dan terakhir dikeringkan <b>105 SM</b>.</li>
                    <li><b>Bangsa Romawi</b> secara resmi membangun sistem pelayanan pos <b>14 M</b>.</li>
                    <li><b>Kaisar Tiberus dari Roma</b> memakai cermin untuk alat mendistribusikan pesan (heliograf) <b>(37 M)</b>.</li>
                    <li><b>Bangsa China</b> untuk pertama kalinya memproduksi mesin cetak yang dibuat dari lempengan kayu ukir. Sistem pencetakannya sendiri dilaksanakan dengan memakai blok kayu yang digores dan dipoles oleh tinta <b>(305 M)</b>.</li>
                </ul>
            </li>
            <br>
            <li><b>Masa Modern (1400 M s.d. Sekarang)</b>
                <p class="contenttech_orderlist">
                    Berikut merupakan perkembangan yang ada selama masa <i>modern</i>.<br><br>
                    <b>Perkembangan Perangkat TIK Masa <i>Modern</i></b>
                </p>
                <ul class="ul_circle">
                    <li><b>Koran pertama</b> yang ada di dunia mulai beredar di wilayah <b>Eropa</b>, walaupun korannya belum terbit setiap hari.</li>
                    <li><b>Johann Guttenber</b> membangun <b>mesin cetak memakai plat huruf dari besi dan dibingkai oleh kayu yang dapat diganti-ganti</b>.</li>
                    https://luk.staff.ugm.ac.id/kmi/iptek/100/Gutenberg.html
                    <li><b>Kamera foto</b> pertama yang dibangun dengan nama <b>Camera Obscure</b>.</li>
                    <li><b>Pascal's Machine Aritmetique (The Pascaline)</b> dibangun oleh <b>Blaise Pascal (ahli matematika & ahli filsafat dari Prancis)</b>. 
                        Alat ini merupakan alat perhitungan dengan mesin mekanis yang pertama dan hingga sekarang komputer modern masih memakai metode dari alat ini.</li>
                    <li><b>Surat kabar</b> pertama beredar di negara Jerman.</li>
                    <li><b>Henry Mill dari Inggris</b> membangun mesin ketik yang modern.</li>
                    <li><b>Claude Chappe</b> membangun rute telegraf optik secara jarak jauh.</li>
                    <li><b>Microfon</b> pertama kalinya dijumpai oleh <b>Charles Whaetstone</b>.</li>
                    <li><b>Agusta LAdy Byron</b> menulis program komputer pertama yang berkolaborasi dengan <b>Charles Babbage</b> memakai <b>ide mesin <i>analytical</i></b>.</li>
                    <li><b>Joseph Henry</b> membangun rute listrik pertam kalinya di dunia.</li>
                    <li><b>Samuel F.B Morse</b>, <b>William Cook</b>, dan <b>Charles Whaetstone</b> mengekspansi telegraf dan kode morse.</li>
                    <li><b>Alexander Bain</b> membangun mesin <b>faksimili</b> pertamanya.</li>
                    <li>Didapatkannya alat <b>kinematoskop</b> untuk memutar slide.</li>
                    <li><b>Thomas Alva Edison</b> memperoleh <b>mesin fotocopi</b> pertama. <b>Alexander Graham Bell</b> menegaskan bahwa dirinya sudah membangun <b>pesawat telepon</b>. 
                        Dalam tahun yang sama, <b>Melvyl Dewwy</b> mengembangkan <b>sistem pencatatan katalog buku</b> yang dipakai untuk perpustakaan di seluruh dunia yang namanya 
                        <b>Sistem Desimal Dewey</b>.</li>
                    <li>Dibangunnya <b>gulungan film</b> untuk mengabadikan foto oleh <b>George Eastman</b>.</li>
                    <li><b>Thomas Alva Edison</b> membangun <b>film bersuara</b> pertama di dunia.</li>
                    <li>Ditemukannya <b>pesawat televisi</b> pertama oleh <b>Vladimir Kosma Zworykin</b>.</li>
                    <li><b>Joseph Begun</b> mengembangan <b>tape recorder</b>.</li>
                    <li><b>Komputer pertama</b> di dunia bernama <b>Z1</b> sudah dibangun oleh <b>Konrad Zuse</b>.</li>
                    <li><b>Vannevar Bush</b> membangun <b>kode Hypertext</b>.</li>
                    <li><b>ENIAC 1</b> merupakan <b>komputer digital</b> pertama yang dikembangkan.</li>
                    <li><b>Uni Soviet (Rusia)</b> merilis <b>Sputnik</b> sebagai <b>satelit bumi buatan pertama</b>, sedangkan <b>Amerika</b> membentuk <b>ARPA (Advanced Research Projects Agency)</b>.</li>
                    <li><b>Chester Carlson</b> membangun <b>mesin fotokopi pertama dengan nama <b>Xerox</b>.</b></li>
                    <li><b>Amerika</b> membangun <b>sistem kode pos</b>.</li>
                    <li>Terlahirnya <b>ARPANET</b> yang mana ini merupakan cikal bakal hadirnya <b>internet</b>.</li>
                    <li>Dibuatnya <b>disket pertama</b> di dunia.</li>
                    <li><b>Ray Tomlinson</b> membangun <b>program e-mail</b> pertama.</li>
                    <li>Terlahirnya <b>protokol internet TCP/IP</b>.</li>
                    <li><b>Jepang</b> merintis terlahirnya <b>jaringan telepon tanpa kabel</b> pertama di dunia.</li>
                    <li><b>Perusahan Sony Jepang</b> membangun <b>Walkman</b> pertama di dunia.</li>
                    <li>Didapatkannya <b>cakram penyimpan data (CD)</b>.</li>
                    <li>Hadirnya <b>WWW</b> oleh <b>CERN (Laboratorium Partikel di Swiss)</b>.</li>
                    <li>Hadirnya <b>raksasa mesin pencari informasi gratis</b> di dunia yang kita kenal sekarang sebagai <b>Google.com</b>.</li>
                    <br>
                </ul>
            </li>
            
            <li><b>Sejarah Perkembangan Komputer</b></li>
            https://www.ruangguru.com/blog/yuk-ingat-kembali-sejarah-perkembangan-komputer
            <br>
                <p class="contenttech_orderlist">
                    Perkembangan komputer sendiri dibagi menjadi 5 generasi, yakni sebagai berikut.
                </p>
                <ol type="a">
                    <li><b>Komputer Generasi Pertama (1940 s.d. 1959)</b></li>
                    <p class="contenttech_orderlist">
                        Komputer di generasi inimemiliki ciri memakai tabung vakum untum mengoperasikan dan menyimpan data, cepat panas dan mudah terbakar.
                        Maka dari itu beribu-ribu tabung vakun dibutuhkan untuk melaksanakan mekanisme keseluruhan komputer dan membuthkan daya yang sangat
                        besar. Komputer ini 100% elektronik yang mana istimewa dengan fakta bahwasanya petunjuk operasinya dibangun dengan spesifik untuk
                        suatu tugas tertentu. Setiap komputer sendiri mempunyai program kode-biner yang berbeda atau disebut <i>machine language</i> (bahasa 
                        mesin). Itu mengakibatkan komputer sulit untuk diprogram dan akan menghambat kecepatannya. 
                        <br>
                        Berikut merupakan ciri-ciri dari komputer generasi pertama.
                        <ol class="numberwithparen">
                            <li>Programnya dibangun dalam bahasa mesin.</li>
                            <li>Memakai rancangan <i>storage</i> program.</li>
                            <li>Elemen yang dipakai ialah tabung hampa udara.</li>
                            <li>Ukuran fisiknya besar sehingga memerlukan daya listrik yang besar.</li>
                            <li>Dapat disimpa di dalam <i>magnetic tap</i> dan <i>magnetic disk</i>.</li>
                        </ol> 
                        <br>
                        Contohnya adalah <b>komputer IBM 701</b> yang dibangun pada <b>tahun 1953</b>. Ini merupakan komputer profitabel yang berukuran besar.
                        Sementara <b>IBM 705</b> dibangun pada <b>tahun 1959</b> yang dipakai dalam industri.

                    </p>
                    
                    <li><b>Komputer Generasi Kedua (1959 s.d. 1965)</b></li>
                    <div class="contenttech_orderlist">
                        Tahun <b>1948</b> penemuan <b>transistor</b> sangatlah merajai perkembangan komputer. Transistor menggantikan tube vakum di televisi, 
                        radio, dan komputer. Alhasil, ukuran drai mesin-mesin elektrik turun drastis. Transistor mulai dipakai di dalam komputer pada tahun 
                        1956. Ada penemuan lainnya berwujud pengembangan memori inti-magnetik yang mendukung pengembangan komputer generasi ini yang lebih kecil, 
                        lebih cepat, lebih dapat diandalkan, dan lebih hemat energinya daripada pendahulunya. Mesin pertama yang mengadopsi teknologi baru ini
                        adalah <b>super komputer.</b> <b>IBM membangun super komputer</b> bernama <b>Stretch</b> dan <b>Sprery-Rand</b> membangun <b>komputer 
                        bernama LARC</b>. Semua komputer tersebut dikembangkan untuk laboratorium energi atom yang dapat memproses banyaknya data. Kapabilitas 
                        tersebut yang paling diperlukan oleh peneliti atom.
                        <br><br>
                        Komputer di generasi ini mengambil alih bahasa mesin dengan <b>bahasa assembly</b>. Bahasa assembly merupakan bahasa yang memakai berbagai
                        singkata untuk menggantikan kode biner. Semua komputer di generasi ini juga sudah sepenuhnya memakai transistor. Mereka mempunyai elemen-
                        elemen yang dapat digabungkan dengan komputer sekarang, contohnya seperti printer, penyimpanan dalam disket, memory, sistem operasi, 
                        dan program. Salah satu contoh esensi komputer sekarang ini ialah <b>IBM 1401</b> yang diterima luas oleh kalangan industri.
                        <br><br>
                        Ada beberapa bahasa pemrograman yang mulai hadir di generasi ini. <b>Bahasa pemrograman COBOL (Common Business Oriented Language)</b> 
                        dan <b>FORTRAN (Formula Translator)</b> sudah mulai dipakai. Bahas apemrograman tersebutlah yang menggantikan kode mesin yang sangat rumit 
                        dengan kata-kata, kalimat, dan formula matematika yang lebih mudah dipahami manusia. Hal tersebutlah yang memudahkan orang-orang untuk 
                        memprogram dan mengatur komputer. <br>
                        Berikut merupakan karakteristik-karakteristik dari komputer generasi kedua.
                        <ol class="numberwithparen">
                            <li>Kapasitas memori utama yang cukup besar.</li>
                            <li>Elemen yang dipakai ialah transistor yang jauh lebih kecil daripada tabung hampa udara.</li>
                            <li>Memakai <b>magnetic tape</b> dan <b>magnetic disk</b> yang berupa <b>removable disk</b>.</li>
                            <li>Memiliki Kapabilitas mekanisme yang <b><i>real-time</i></b> dan <b><i>time sharing</i></b>.</li>
                            <li>Teknik operasinya lebih cepat.</li>
                            <li>Tujuannya pada aplikasi bisnis dan teknik.</li>
                        </ol>
                        <br>
                        Sebagai contoh, pada tahun 1963, komputer mini komersial pertama yang dibuat adalah PDP-5 dan PDP-8. Di samping itu, ada juga komputer 
                        seperti IBM 7070, IBM 1400, NCR 300, dan lain-lain.
                    </div>

                    <li><b>Komputer Generasi Ketiga (1965 s.d. 1970)</b></li>
                    <div class="contenttech_orderlist">
                        Kemajuan di komputer generasi ketiga ditandai dengan adanya sistem operasi yang memungkinkan komputer untuk melaksanakan berbagai program 
                        secara bersamaan, sementara program utama bertugas untuk memantau dan mengatur memori. Beberapa ciri dari komputer generasi ketiga meliputi :
                        <br><br>
                        <ol class="numberwithparen">
                            <li>Komponen yang digunakan adalah rangkaian terintegrasi (Integrated Circuits), yang terdiri dari ratusan hingga ribuan transistor yang 
                                berbentuk rangkaian terintegrasi hibrida dan monolitik.</li>
                            <li>Proses operasinya lebih cepat dan lebih akurat, serta kapasitas memorinya jauh lebih besar.</li>
                            <li>Ukuran fisiknya jauh lebih kompak, sehingga penggunaan energi dapat lebih efisien.</li>
                            <li>Menggunakan disk magnetik yang memiliki kemampuan akses acak.</li>
                            <li>Memungkinkan pelaksanaan multiproses dan pemrograman paralel.</li>
                            <li>Alat masukan dan keluaran telah berkembang dengan adanya terminal tampilan visual.</li>
                            <li>Dapat melakukan komunikasi data antar komputer.</li>
                        </ol>
                        <br>
                        Contohnya termasuk komputer seperti IBM S/30, NOVA, CDC 3000, PDP-11, dan lainnya.
                        <br><br>
                    </div>

                    <li><b>Komputer Generasi Keempat (sejak tahun 1970)</b></li>
                    <div class="contenttech_orderlist">
                        Sejak awal tahun 1970-an, ada dua perkembangan signifikan di dunia komputer, yaitu:
                        <br><br>
                        <ol class="numberwithparen">
                            <li>Penerapan LSI, atau Large Scale Integration, yang juga dikenal sebagai Bipolar Large Scale Integration.</li>
                            <li>Pemakaian mikroprosesor serta semikonduktor berupa chip untuk penyimpanan data komputer.</li>
                        </ol>
                        <br>
                        Sebagai contoh, komputer IBM 370 memanfaatkan mikroprosesor Intel 4004, yang pertama kali diciptakan pada tahun 1971 oleh Intel Corporation 
                        dengan menggunakan chip mikroprosesor. Komputer pribadi (PC) mulai muncul dan berkembang pada tahun 1977, contohnya Apple II serta komputer 
                        desktop dari Xerox Corporation. Pada tahun 1981, banyak komputer yang mulai mengadopsi sistem Windows dan penggunaan mouse.
                    </div>
                    <br>

                    <li><b>Komputer Generasi Kelima</b></li>
                    <div class="contenttech_orderlist">
                        Komputer generasi kelima sekarang sedang dalam proses pengembangan. Komponen yang digunakan adalah VLSI (Very Large Scale Integration). Saat ini, 
                        Josephson Function sedang dikembangkan dan diperkirakan dapat menggantikan peran chip. Negara yang memimpin pengembangan komputer generasi kelima 
                        ini adalah Jepang. Selain itu, ada kemungkinan bahwa komputer akan memiliki kemampuan untuk memecahkan masalah secara mandiri dengan bantuan AI 
                        (Artificial Intelligence). Ini bisa diterapkan untuk mengendalikan robot.
                    </div>
                </ol>
        </ol> --}}
    </div>
</div>

@endsection

@section('script')
    <script>
        document.getElementById('btnSejarah').addEventListener('click', () => {
            const text = document.getElementById('content_tik').textContent.trim();
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
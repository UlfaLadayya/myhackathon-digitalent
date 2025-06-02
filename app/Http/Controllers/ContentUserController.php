<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentUserController extends Controller
{
    function sejarahperkembangantik(){
        return view('sejarahperkembangantik', [
            "title" => "Sejarah Perkembangan TIK",
            "contentSejarahTik" => "Hi, sobat cerdas.. Sebelum kita mulai berpetualang di bagian <i>technology</i> khususnya Teknologi Informasi dan Komunikasi,
        aku mau berkenalan dengan sobat cerdas semua. Aku MinWePTIK (Mimin Website Pengetahuan Teknologi Informasi dan Komunikasi), karena kepanjangan
        sobat cerdas bisa panggil aku MinTIK saja ya, hehehe.. 
        <br><br>
        Kali ini MinTIK mau ajak sobat cerdas untuk mengetahui lebih lanjut mengenai <b>Sejarah Perkembangan Teknologi Informasi dan Komunikasi</b>.
        Sobat cerdas tahu engga kalau Teknologi Informasi dan Komunikasi sudah mulai ada sejak zaman pra sejarah. Mau tahu lebih lanjut? 
        Yuk, ikut MinTIK untuk mulai perjalanannya sekarang. Bentuk awal komunikasi saat itu hanyalah suara dengusan dan juga isyarat tangan lho sobat cerdas.
        Lalu, diciptakanlah alat-alat yang dapat menimbulkan bunyi dsn isyarat pada zaman berikutnya. Tidak berakhir disitu saja, manusia mulai memproduksi
        alat-alat mekanik untuk mekanisme perhitungan. Apakah sejarahnya berhenti sampai tahap itu saja? Tentu tidak sobat cerdas, karena penelitian
        terus dilaksanakan yang bertujuan untuk menemukan alat-alat yang dapat memudahkan hidup manusia.
        <br><br>
        <b>Jika ingin tahu lebih lanjut, klik setiap gambar di bawah ini ya sobat cerdas..</b>",
        ]);
    }

    function pengertiantik(){
        return view('pengertiantik', [
            "title" => "Pengertian TIK",
            "contentPengertianTik" => "Teknologi informasi dan komunikasi terbagi menjadi <b>dua bagian</b>, yaitu <b>informasi dan komunikasi</b>. Teknologi informasi mencakup semua yang berhubungan dengan pengolahan dan pengelolaan data. Di sisi lain, teknologi komunikasi mencakup segala yang berkaitan dengan cara menyampaikan data dari pengirim kepada penerima. 
                <b>Haag dan Keen (1906)</b> menyatakan bahwa teknologi informasi mencakup alat-alat yang dirancang untuk mendukung aktivitas yang berhubungan dengan pengolahan data.
                <b>Martin (1999)</b> menegaskan bahwa teknologi tidak hanya mencakup perangkat komputer, baik perangkat keras maupun perangkat lunak, yang digunakan untuk memproses data, tetapi juga mencakup teknologi komunikasi yang digunakan untuk mengirimkan data.
                <b>Williams dan Sawyer (2003)</b> menjelaskan bahwa teknologi informasi merupakan kombinasi antara komputasi, yaitu komputer, dengan jalur komunikasi cepat yang mentransmisikan data, suara, dan video. Teknologi ini sering disebut TIK atau ICT (teknologi informasi dan komunikasi). Istilah lain yang digunakan adalah <b>telematika</b>, gabungan dari telekomunikasi dan informatika.
                Secara umum, dapat disimpulkan bahwa teknologi informasi berarti teknologi yang digunakan untuk mendapatkan, memproses, menyimpan, dan menyebarkan berbagai jenis informasi dengan menggunakan komputer dan telekomunikasi. Ini lahir dari dorongan kuat untuk menciptakan inovasi dan ide-ide baru yang dapat mengatasi kelemahan dan keterlambatan dalam kinerja manusia.",
        ]);
    }

    function komponenkomponen(){
        return view('komponenkomponen', [
            "title" => "Komponen-komponen SI",
            "contentKomponen" => "Sistem Informasi terdiri dari beberapa elemen. Elemen-elemen tersebut meliputi komponen input, komponen output, komponen model, komponen teknologi, komponen 
                perangkat lunak, komponen perangkat keras, komponen basis data, dan komponen kontrol.
                <ol type=1>
                        <li><b>Komponen Input</b></li>
                        Komponen input adalah data yang dimasukkan ke dalam sistem informasi. Ini adalah bagian yang bertugas untuk menangkap data yang akan diproses menjadi informasi 
                        yang bermanfaat.

                        <li><b>Komponen Output</b></li>
                        Output berupa informasi yang berkualitas serta dokumentasi yang berguna bagi semua level manajemen dan pengguna sistem. Berbeda dengan komponen input, komponen 
                        ini menghasilkan data atau dokumentasi yang baik, yang dapat digunakan sebagai informasi penting.

                        <li><b>Komponen Model</b></li>
                        Ini adalah kombinasi dari prosedur, logika, dan model matematis yang memproses data yang tersimpan di basis data dengan cara yang telah ditentukan, untuk mendapatkan 
                        keluaran yang diharapkan. Elemen ini memanipulasi data menurut prosedur yang ditentukan untuk mencapai hasil yang diinginkan.

                        <li><b>Komponen Teknologi</b></li>
                        Teknologi berfungsi sebagai alat dalam sistem informasi. Ia digunakan untuk menerima input, menjalankan model, menyimpan dan mengakses data, serta menghasilkan dan 
                        mengirimkan output. Komponen ini juga mendukung kontrol keseluruhan sistem.

                        <li><b>Komponen Software</b></li>
                        Software sangat penting sebagai tempat penyimpan informasi. Komponen ini berfungsi sebagai wadah untuk data dan mempermudah proses kerja sistem informasi.
                
                        <li><b>Komponen Hardware</b></li>
                        Hardware adalah tempat untuk memproses, menghitung, dan mengolah data yang diambil oleh software dari perangkat keras, untuk menciptakan informasi.

                        <li><b>Komponen Basis Data</b></li>
                        Ini adalah sekumpulan data yang saling terhubung, yang disimpan dalam komputer menggunakan software basis data. Data ini berguna untuk menghasilkan 
                        informasi berkualitas.

                        <li><b>Komponen Kontrol</b></li>
                        Kontrol dirancang untuk mengatasi gangguan yang mungkin terjadi pada sistem informasi.

                        Banyak faktor yang dapat merusak sistem informasi, termasuk bencana alam. Di sinilah komponen kontrol berperan, karena komponen ini dapat mencegah 
                        kerusakan pada sistem atau, jika kerusakan sudah terjadi, membantu mempercepat perbaikan sistem informasi.
                    </ol>",
        ]);
    }

    function manfaattik(){
        return view('manfaattik', [
            "title" => "Manfaat TIK",
            "contentManfaat" => "Berikut merupakan beberapa manfaat dari teknologi informasi dan komunikasi.
                <ol type=1>
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

                </ol>",
        ]);
    }

    function dampaktik(){
        return view('dampaktik', [
            "title" => "Dampak TIK",
            "contentDampak" => "Teknologi informasi dan komunikasi, yang merupakan bagian dari ilmu pengetahuan dan teknologi secara keseluruhan, adalah jenis teknologi yang terkait dengan pengumpulan dan 
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
                <ol type=1>
                    <li><b>Dampak Positif Teknologi Informasi dan Komunikasi</b></li>
                    <ol type=a>
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
                    <ol type=a>
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
                </ol>",
        ]);
    }

    function penerapantik(){
        return view('penerapantik', [
            "title" => "Penerapan TIK",
            "contentPenerapan" => "Saat ini, berbagai bidang telah mengadopsi teknologi informasi, termasuk komunikasi, ekonomi, pendidikan, dan kesehatan. 
                Berikut adalah beberapa contoh penerapan TI di bidang-bidang tersebut :
                <ol type=a>
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
                </ol>",
        ]);
    }

    function masaprasejarah(){
        return view('masaprasejarah', [
            "title" => "Masa Prasejarah",
            "contentMasaPrasejarah" => "<p>
                    Di zaman ini, cara manusia berkomunikasi hanya dengan <b>menggambarkan informasinya pada dinding-dinding gua</b> <b>mengenai perburuan dan
                    binatang buruannya</b> lho sobat cerdas. Manusia juga sudah mulai mengetahui berbagai benda yang ada disekitarnya dan menggambarkan semua benda 
                    tersebut di dinding-dinding gua untuk mewakilinya. Kemahiran bahasa merekasaat itu pun hanya terbatas pada dengusan, bahasa isyarat, dan juga
                    gerakan tangan. Kemajuan selanjutnya adalah diproduksi dan digunakannya alat-alat yang dapat memunculkan bunyi dan isyarat. <br>Contohnya seperti <b>gendang, 
                    terompet yang dibuat dari tanduk binatang, isyarat asap sebagai alat peringatan bahaya</b>.
                </p>",
        ]);
    }

        function masasejarah(){
        return view('masasejarah', [
            "title" => "Masa Sejarah",
            "subJudul" => "--Penemuan alat TIK pada Masa Sejarah--",
            "contentMasaSejarah1" => "<b>Bangsa Sumeria</b> menemukan tulisan untuk pertama kalinya berupa simbol-simbol yang disebut <b>piktografi (3000 SM)</b>.",
            "contentMasaSejarah2" => "<b>Bangsa Mesir Kuno</b> sudah mengembangkan tulisan <b>Hieroglif</b> untuk berkomunikasi <b>(2900 SM)</b>.",
            "contentMasaSejarah3" => "<b>Abacus</b>, alat ini dianggap sebagai alat perhitungan digital pertama kali. Namun, sumber aslinya belum jelas untuk abacus atau sempoa, diperkirakan berasal dari Babylon, Cina atau Mesir <b>(2500 SM)</b>.",
            "contentMasaSejarah4" => "<b>Bangsa Yunani</b> menginformasikan sistem penulisan yang dimulai dari kiri ke kanan memakai abjad fonetik yakni huruf yang dibangun berdasar kepada bunyi ucapan <b>(1775 SM)</b>.",
            "contentMasaSejarah5" => "<b>Bangsa China</b> mulai menuliskan sejarahnya pada kepingan tulang binatang <b>(1400 SM)</b>.",
            "contentMasaSejarah6" => "<b>Bangsa Suriah</b> sudah membuat ensiklopedia untuk pertama kalinya <b>(1270 SM)</b>.",
            "contentMasaSejarah7" => "<b>Bangsa China</b> membangun sistem pelayanan pos dan kantor pos yang pertama kalinya <b>(900 SM)</b>.",
            "contentMasaSejarah8" => "<b>Bangsa Yunani</b> memakai burung merpati untuk mendistribusikan informasi <b>(776 SM)</b>.",
            "contentMasaSejarah9" => "<b>Bangsa Yunani</b> membangun perpustakan untuk pertama kalinya <b>(530 SM)</b>.",
            "contentMasaSejarah10" => "<b>Bangsa Mesir Kuno</b> memakai serat pohon papyrus sebagai kertas <b>(500 SM)</b>.",
            "contentMasaSejarah11" => "<b>Bangsa China</b> menemukan kertas, orang tersebut ialah <b>Tsai Lun</b>. Kertasnya dibuat dari serat pohon bambu yang mana dihaluskan, dicuci, diratakan, dan terakhir dikeringkan <b>(105 SM)</b>.",
            "contentMasaSejarah12" => "<b>Bangsa Romawi</b> secara resmi membangun sistem pelayanan pos <b>14 M</b>.",
            "contentMasaSejarah13" => "<b>Kaisar Tiberus dari Roma</b> memakai cermin untuk alat mendistribusikan pesan (heliograf) <b>(37 M)</b>.",
            "contentMasaSejarah14" => "<b>Bangsa China</b> untuk pertama kalinya memproduksi mesin cetak yang dibuat dari lempengan kayu ukir. Sistem pencetakannya sendiri dilaksanakan dengan memakai blok kayu yang digores dan dipoles oleh tinta <b>(305 M)</b>.",
        ]);
    }

        function masamodern(){
        return view('masamodern', [
            "title" => "Masa Modern",
            "introMasaModern" => "Berikut merupakan perkembangan yang ada selama masa <i>modern</i>.<br><b>Perkembangan Perangkat TIK Masa <i>Modern</i></b>",
            "contentMasaModern1" => "<b>Koran pertama</b> yang ada di dunia mulai beredar di wilayah <b>Eropa</b>, walaupun korannya belum terbit setiap hari.",
            "contentMasaModern2" => "<b>Johann Guttenber</b> membangun <b>mesin cetak memakai plat huruf dari besi dan dibingkai oleh kayu yang dapat diganti-ganti</b>.",
            "contentMasaModern3" => "<b>Kamera foto</b> pertama yang dibangun dengan nama <b>Camera Obscure</b>.",
            "contentMasaModern4" => "<b>Pascal's Machine Aritmetique (The Pascaline)</b> dibangun oleh <b>Blaise Pascal (ahli matematika & ahli filsafat dari Prancis)</b>. Alat ini merupakan alat perhitungan dengan mesin mekanis yang pertama dan hingga sekarang komputer modern masih memakai metode dari alat ini.",
            "contentMasaModern5" => "<b>Surat kabar</b> pertama beredar di negara Jerman.",
            "contentMasaModern6" => "<b>Henry Mill dari Inggris</b> membangun mesin ketik yang modern.",
            "contentMasaModern7" => "<b>Claude Chappe</b> membangun rute telegraf optik secara jarak jauh.",
            "contentMasaModern8" => "<b>Microfon</b> pertama kali ditemukan oleh <b>Charles Whaetstone</b>.",
            "contentMasaModern9" => "<b>Agusta Lady Byron</b> menulis program komputer pertama yang berkolaborasi dengan <b>Charles Babbage</b> memakai <b>ide mesin <i>analytical</i></b>.",
            "contentMasaModern10" => "<b>Joseph Henry</b> membangun rute listrik pertam kalinya di dunia.",
            "contentMasaModern11" => "<b>Samuel F.B Morse</b>, <b>William Cook</b>, dan <b>Charles Whaetstone</b> mengekspansi telegraf dan kode morse.",
            "contentMasaModern12" => "<b>Alexander Bain</b> membangun mesin <b>faksimili</b> pertamanya.",
            "contentMasaModern13" => "Didapatkannya alat <b>kinematoskop</b> untuk memutar slide.",
            "contentMasaModern14" => "<b>Thomas Alva Edison</b> memperoleh <b>mesin fotocopi</b> pertama. <b>Alexander Graham Bell</b> menegaskan bahwa dirinya sudah membangun <b>pesawat telepon</b>. Dalam tahun yang sama, <b>Melvyl Dewwy</b> mengembangkan <b>sistem pencatatan katalog buku</b> yang dipakai untuk perpustakaan di seluruh dunia yang namanya <b>Sistem Desimal Dewey</b>.",
            "contentMasaModern15" => "Dibangunnya <b>gulungan film</b> untuk mengabadikan foto oleh <b>George Eastman</b>.",
            "contentMasaModern16" => "<b>Thomas Alva Edison</b> membangun <b>film bersuara</b> pertama di dunia.",
            "contentMasaModern17" => "Ditemukannya <b>pesawat televisi</b> pertama oleh <b>Vladimir Kosma Zworykin</b>.",
            "contentMasaModern18" => "<b>Joseph Begun</b> mengembangkan <b>tape recorder</b>.",
            "contentMasaModern19" => "<b>Komputer pertama</b> di dunia bernama <b>Z1</b> sudah dibangun oleh <b>Konrad Zuse</b>.",
            "contentMasaModern20" => "<b>Vannevar Bush</b> membangun <b>kode Hypertext</b>.",
            "contentMasaModern21" => "<b>ENIAC 1</b> merupakan <b>komputer digital</b> pertama yang dikembangkan.",
            "contentMasaModern22" => "<b>Uni Soviet (Rusia)</b> merilis <b>Sputnik</b> sebagai <b>satelit bumi buatan pertama</b>, sedangkan <b>Amerika</b> membentuk <b>ARPA (Advanced Research Projects Agency)</b>.",
            "contentMasaModern23" => "<b>Chester Carlson</b> membangun <b>mesin fotokopi pertama dengan nama <b>Xerox</b>.",
            "contentMasaModern24" => "<b>Amerika</b> membangun <b>sistem kode pos</b>.",
            "contentMasaModern25" => "Terlahirnya <b>ARPANET</b> yang mana ini merupakan cikal bakal hadirnya <b>internet</b>.",
            "contentMasaModern26" => "Dibuatnya <b>disket pertama</b> di dunia.",
            "contentMasaModern27" => "<b>Ray Tomlinson</b> membangun <b>program e-mail</b> pertama.",
            "contentMasaModern28" => "Terlahirnya <b>protokol internet TCP/IP</b>.",
            "contentMasaModern29" => "<b>Jepang</b> merintis terlahirnya <b>jaringan telepon tanpa kabel</b> pertama di dunia.",
            "contentMasaModern30" => "<b>Perusahan Sony Jepang</b> membangun <b>Walkman</b> pertama di dunia.",
            "contentMasaModern31" => "Didapatkannya <b>cakram penyimpan data (CD)</b>.",
            "contentMasaModern32" => "Hadirnya <b>WWW</b> oleh <b>CERN (Laboratorium Partikel di Swiss)</b>.",
            "contentMasaModern33" => "Hadirnya <b>raksasa mesin pencari informasi gratis</b> di dunia yang kita kenal sekarang sebagai <b>Google.com</b>."
        ]);
    }

        function sejarahperkembangankomputer(){
        return view('sejarahperkembangankomputer', [
            "title" => "Sejarah Perkembangan Komputer",
            "introSejarahPerkembanganKomputer" => "Perkembangan komputer sendiri dibagi menjadi 5 generasi, yakni sebagai berikut.",
            "judul1" => "Komputer Generasi Pertama (1940 s.d. 1959)",
            "contentSejarahPerkembanganKomputer1" => "Komputer di generasi inimemiliki ciri memakai tabung vakum untum mengoperasikan dan menyimpan data, cepat panas dan mudah terbakar.
                        Maka dari itu beribu-ribu tabung vakun dibutuhkan untuk melaksanakan mekanisme keseluruhan komputer dan membuthkan daya yang sangat
                        besar. Komputer ini 100% elektronik yang mana istimewa dengan fakta bahwasanya petunjuk operasinya dibangun dengan spesifik untuk
                        suatu tugas tertentu. Setiap komputer sendiri mempunyai program kode-biner yang berbeda atau disebut <i>machine language</i> (bahasa 
                        mesin). Itu mengakibatkan komputer sulit untuk diprogram dan akan menghambat kecepatannya. 
                        <br>
                        Berikut merupakan ciri-ciri dari komputer generasi pertama.
                        <ol class=numberwithparen>
                            <li>Programnya dibangun dalam bahasa mesin.</li>
                            <li>Memakai rancangan <i>storage</i> program.</li>
                            <li>Elemen yang dipakai ialah tabung hampa udara.</li>
                            <li>Ukuran fisiknya besar sehingga memerlukan daya listrik yang besar.</li>
                            <li>Dapat disimpa di dalam <i>magnetic tap</i> dan <i>magnetic disk</i>.</li>
                        </ol> 
                        Contohnya adalah <b>komputer IBM 701</b> yang dibangun pada <b>tahun 1953</b>. Ini merupakan komputer profitabel yang berukuran besar.
                        Sementara <b>IBM 705</b> dibangun pada <b>tahun 1959</b> yang dipakai dalam industri.",
            "judul2" => "<b>Komputer Generasi Kedua (1959 s.d. 1965)</b>",
            "contentSejarahPerkembanganKomputer2" => "Tahun <b>1948</b> penemuan <b>transistor</b> sangatlah merajai perkembangan komputer. Transistor menggantikan tube vakum di televisi, 
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
                        <ol class=numberwithparen>
                            <li>Kapasitas memori utama yang cukup besar.</li>
                            <li>Elemen yang dipakai ialah transistor yang jauh lebih kecil daripada tabung hampa udara.</li>
                            <li>Memakai <b>magnetic tape</b> dan <b>magnetic disk</b> yang berupa <b>removable disk</b>.</li>
                            <li>Memiliki Kapabilitas mekanisme yang <b><i>real-time</i></b> dan <b><i>time sharing</i></b>.</li>
                            <li>Teknik operasinya lebih cepat.</li>
                            <li>Tujuannya pada aplikasi bisnis dan teknik.</li>
                        </ol>
                        <br>
                        Sebagai contoh, pada <b>tahun 1963</b>, <b>komputer mini komersial pertama</b> yang dibuat adalah <b>PDP-5 dan PDP-8</b>. Di samping itu, ada juga <b>komputer</b> 
                        seperti <b>IBM 7070</b>, <b>IBM 1400</b>, <b>NCR 300</b>, dan lain-lain.",
            "judul3" => "<b>Komputer Generasi Ketiga (1965 s.d. 1970)</b>",
            "contentSejarahPerkembanganKomputer3" => "Kemajuan di komputer generasi ketiga ditandai dengan adanya sistem operasi yang memungkinkan komputer untuk melaksanakan berbagai program 
                        secara bersamaan, sementara program utama bertugas untuk memantau dan mengatur memori. Beberapa ciri dari komputer generasi ketiga meliputi :
                        <br><br>
                        <ol class=numberwithparen>
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
                        Contohnya termasuk <b>komputer seperti IBM S/30</b>, <b>NOVA</b>, <b>CDC 3000</b>, <b>PDP-11</b>, dan lainnya.",
            "judul4" => "<b>Komputer Generasi Keempat (sejak tahun 1970)</b>",
            "contentSejarahPerkembanganKomputer4" => "Sejak awal tahun 1970-an, ada dua perkembangan signifikan di dunia komputer, yaitu:
                        <br><br>
                        <ol class=numberwithparen>
                            <li>Penerapan LSI, atau Large Scale Integration, yang juga dikenal sebagai Bipolar Large Scale Integration.</li>
                            <li>Pemakaian mikroprosesor serta semikonduktor berupa chip untuk penyimpanan data komputer.</li>
                        </ol>
                        Sebagai contoh, <b>komputer IBM 370</b> memanfaatkan <b>mikroprosesor Intel 4004</b>, yang pertama kali diciptakan pada <b>tahun 1971</b> oleh <b>Intel Corporation</b> 
                        dengan menggunakan <b>chip mikroprosesor</b>. <b>Komputer pribadi (PC)</b> mulai muncul dan berkembang pada <b>tahun 1977</b>, contohnya <b>Apple II</b> serta <b>komputer 
                        desktop dari Xerox Corporation</b>. Pada <b>tahun 1981</b>, banyak komputer yang mulai mengadopsi sistem Windows dan penggunaan mouse.",
            "judul5" => "<b>Komputer Generasi Kelima</b>",
            "contentSejarahPerkembanganKomputer5" => "Komputer generasi kelima sekarang sedang dalam proses pengembangan. Komponen yang digunakan adalah VLSI (Very Large Scale Integration). Saat ini, 
                        Josephson Function sedang dikembangkan dan diperkirakan dapat menggantikan peran chip. Negara yang memimpin pengembangan komputer generasi kelima 
                        ini adalah Jepang. Selain itu, ada kemungkinan bahwa komputer akan memiliki kemampuan untuk memecahkan masalah secara mandiri dengan bantuan AI 
                        (Artificial Intelligence). Ini bisa diterapkan untuk mengendalikan robot.",
        ]);
    }
}

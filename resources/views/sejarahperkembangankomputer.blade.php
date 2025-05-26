@extends('layouts.mainuserpage')

@section('container')

<div class="technology_content">
    <p id="technology_subtitle"><u>Sejarah Perkembangan Komputer</u></p>
    <p class="writer_content">Ditulis oleh : Ulf's Creativity <br> Source : Buku DASAR-DASAR PENGANTAR TEKNOLOGI INFORMASI (Bayu Rianto & Welly Dozan, Juni 2020)</p>

    <div id="tech_per_item">
        
        <p class="contenttech_orderlist">
            Perkembangan komputer sendiri dibagi menjadi 5 generasi, yakni sebagai berikut.
        </p>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <b>Komputer Generasi Pertama (1940 s.d. 1959)</b>
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <img class="perkembangankomputer" src="assets/images/komputergenerasipertama.jpg" class="card-img-top" alt="Komputer Generasi Pertama">
                    <div id="source-img">
                        <p>
                            Komputer Generasi Pertama <br>
                            sumber gambar : https://www.ruangguru.com/blog/yuk-ingat-kembali-sejarah-perkembangan-komputer
                        </p>
                    </div>
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
                        {{-- <br> --}}
                        Contohnya adalah <b>komputer IBM 701</b> yang dibangun pada <b>tahun 1953</b>. Ini merupakan komputer profitabel yang berukuran besar.
                        Sementara <b>IBM 705</b> dibangun pada <b>tahun 1959</b> yang dipakai dalam industri.
                    </p>
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <b>Komputer Generasi Kedua (1959 s.d. 1965)</b>
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <img class="perkembangankomputer" src="assets/images/komputergenerasikedua.png" class="card-img-top" alt="Komputer Generasi Kedua">
                    <div id="source-img">
                        <p>
                            Komputer Generasi Kedua <br>
                            sumber gambar : https://www.ruangguru.com/blog/yuk-ingat-kembali-sejarah-perkembangan-komputer
                        </p>
                    </div>
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
                        Sebagai contoh, pada <b>tahun 1963</b>, <b>komputer mini komersial pertama</b> yang dibuat adalah <b>PDP-5 dan PDP-8</b>. Di samping itu, ada juga <b>komputer</b> 
                        seperti <b>IBM 7070</b>, <b>IBM 1400</b>, <b>NCR 300</b>, dan lain-lain.
                    </div>
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <b>Komputer Generasi Ketiga (1965 s.d. 1970)</b>
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <img class="perkembangankomputer" src="assets/images/komputergenerasiketiga.jpg" class="card-img-top" alt="Komputer Generasi Ketiga">
                    <div id="source-img">
                        <p>
                            Komputer Generasi Ketiga <br>
                            sumber gambar : https://www.ruangguru.com/blog/yuk-ingat-kembali-sejarah-perkembangan-komputer
                        </p>
                    </div>
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
                        Contohnya termasuk <b>komputer seperti IBM S/30</b>, <b>NOVA</b>, <b>CDC 3000</b>, <b>PDP-11</b>, dan lainnya.
                    </div>
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <b>Komputer Generasi Keempat (sejak tahun 1970)</b></
                </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <img class="perkembangankomputer" src="assets/images/komputergenerasikeempat.jpg" class="card-img-top" alt="Komputer Generasi Keempat">
                    <div id="source-img">
                        <p>
                            Komputer Generasi Keempat <br>
                            sumber gambar : https://www.ruangguru.com/blog/yuk-ingat-kembali-sejarah-perkembangan-komputer
                        </p>
                    </div>
                    <div class="contenttech_orderlist">
                        Sejak awal tahun 1970-an, ada dua perkembangan signifikan di dunia komputer, yaitu:
                        <br><br>
                        <ol class="numberwithparen">
                            <li>Penerapan LSI, atau Large Scale Integration, yang juga dikenal sebagai Bipolar Large Scale Integration.</li>
                            <li>Pemakaian mikroprosesor serta semikonduktor berupa chip untuk penyimpanan data komputer.</li>
                        </ol>
                        Sebagai contoh, <b>komputer IBM 370</b> memanfaatkan <b>mikroprosesor Intel 4004</b>, yang pertama kali diciptakan pada <b>tahun 1971</b> oleh <b>Intel Corporation</b> 
                        dengan menggunakan <b>chip mikroprosesor</b>. <b>Komputer pribadi (PC)</b> mulai muncul dan berkembang pada <b>tahun 1977</b>, contohnya <b>Apple II</b> serta <b>komputer 
                        desktop dari Xerox Corporation</b>. Pada <b>tahun 1981</b>, banyak komputer yang mulai mengadopsi sistem Windows dan penggunaan mouse.
                    </div>
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="false" aria-controls="collapseFifth">
                    <b>Komputer Generasi Kelima</b></
                </button>
                </h2>
                <div id="collapseFifth" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <img class="perkembangankomputer" src="assets/images/komputergenerasikelima.png" class="card-img-top" alt="Komputer Generasi Kelima">
                    <div id="source-img">
                        <p>
                            Komputer Generasi Kelima <br>
                            sumber gambar : https://www.ruangguru.com/blog/yuk-ingat-kembali-sejarah-perkembangan-komputer
                        </p>
                    </div>
                    <div class="contenttech_orderlist">
                        Komputer generasi kelima sekarang sedang dalam proses pengembangan. Komponen yang digunakan adalah VLSI (Very Large Scale Integration). Saat ini, 
                        Josephson Function sedang dikembangkan dan diperkirakan dapat menggantikan peran chip. Negara yang memimpin pengembangan komputer generasi kelima 
                        ini adalah Jepang. Selain itu, ada kemungkinan bahwa komputer akan memiliki kemampuan untuk memecahkan masalah secara mandiri dengan bantuan AI 
                        (Artificial Intelligence). Ini bisa diterapkan untuk mengendalikan robot.
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
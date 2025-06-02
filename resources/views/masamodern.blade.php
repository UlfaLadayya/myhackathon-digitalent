@extends('layouts.mainuserpage')

@section('container')

<div class="technology_content">
    <p id="technology_subtitle"><u>Masa Modern (1400 M s.d. Sekarang)</u></p>
    <p class="writer_content">Ditulis oleh : Ulf's Creativity <br> Source : Buku DASAR-DASAR PENGANTAR TEKNOLOGI INFORMASI (Bayu Rianto & Welly Dozan, Juni 2020)</p>

    <div id="card-tik1" class="card">
        <div id="card-tik2" class="card-body">
            <button id="btnMasaModern">
                <img id="icon_voice" src="assets/images/voice.png" alt="icon-voice">
            </button>

            <div id="tech_per_item_modern">
                <p class="contenttech_orderlist">
                    {!! $introMasaModern !!}
                </p>
                <ul class="ul_circle">
                    <li>{!! $contentMasaModern1 !!}</li>
                    <li>{!! $contentMasaModern2 !!}</li>
                    <img class="imgmasamodern" src="assets/images/mesincetak.jpg" class="card-img-top" alt="Mesin Cetak Gutenberg">
                    <div id="source-img">
                        <p>
                            sumber gambar : https://luk.staff.ugm.ac.id/kmi/iptek/100/Gutenberg.html
                        </p>
                    </div>
                    
                    <li>{!! $contentMasaModern3 !!}</li>
                    <div class="two_photos">
                        <div class="left_photo">
                            <img class="imgmasamodern" src="assets/images/prinsipkameraobscura.jpg" class="card-img-top" alt="Prinsip Kamera Obscura">
                            <div id="source-img">
                                <p>
                                    Prinsip Kamera Obscura <br>
                                    sumber gambar : https://id.wikipedia.org/wiki/Kamera_obscura
                                </p>
                            </div>
                        </div>

                        <div class="right_photo">
                            <img class="imgmasamodern" src="assets/images/alhaytham.jpg" class="card-img-top" alt="Penemu Kamera Obscura">
                            <div id="source-img">
                                <p>
                                    Penemu Kamera Obscura <br>
                                    sumber gambar : https://www.kpi.go.id/id/umum/38-dalam-negeri/34060- <br> penemu-kamera-obscura
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <li>{!! $contentMasaModern4 !!}</li>
                    <img class="imgmasamodern" src="assets/images/thepascaline.png" class="card-img-top" alt="Pascal's Machine Aritmetique (The Pascaline)">
                    <div id="source-img">
                        <p>
                            sumber gambar : https://www.historyofinformation.com/detail.php?id=382
                        </p>
                    </div>
                        
                    <li>{!! $contentMasaModern5 !!}</li>
                    <li>{!! $contentMasaModern6 !!}</li>
                    <img class="imgmasamodern" src="assets/images/henry-mill-typewriter.jpg" class="card-img-top" alt="Henry Mill Typewriter">
                    <div id="source-img">
                        <p>
                            sumber gambar : https://type-writer.org/?p=6025
                        </p>
                    </div>

                    <li>{!! $contentMasaModern7 !!}</li>
                    <img class="imgmasamodern" src="assets/images/OptischerTelegraf.jpg" class="card-img-top" alt="Replika salah satu menara semaphore Chappe di Nalbach, Jerman">
                    <div id="source-img">
                        <p>
                            Replika salah satu menara semaphore Chappe di Nalbach, Jerman <br>
                            sumber gambar : https://en.wikipedia.org/wiki/Optical_telegraph
                        </p>
                    </div>

                    <li>{!! $contentMasaModern8 !!}</li>
                    <li>{!! $contentMasaModern9 !!}</li>
                    <li>{!! $contentMasaModern10 !!}</li>
                    <li>{!! $contentMasaModern11 !!}</li>
                    <li>{!! $contentMasaModern12 !!}</li>
                    <img class="imgmasamodern" src="assets/images/bain.jpg" class="card-img-top" alt="Mesin Faksmil">
                    <div id="source-img">
                        <p>
                            sumber gambar : https://www.hagley.org/librarynews/bain-usa-fax-behind-rediscovered-telecommunications-patent-model
                        </p>
                    </div>

                    <li>{!! $contentMasaModern13 !!}</li>
                    <li>{!! $contentMasaModern14 !!}</li>
                    <li>{!! $contentMasaModern15 !!}</li>
                    <li>{!! $contentMasaModern16 !!}</li>
                    <li>{!! $contentMasaModern17 !!}</li>
                    <li>{!! $contentMasaModern18 !!}</li>
                    <li>{!! $contentMasaModern19 !!}</li>
                    <img class="imgmasamodern" src="assets/images/zuse.jpg" class="card-img-top" alt="Komputer Pertama">
                    <div id="source-img">
                        <p>
                            sumber gambar : https://horman98.blogspot.com/2017/11/entry-3-konrad-zuse-father-of-computer.html
                        </p>
                    </div>
                    
                    <li>{!! $contentMasaModern20 !!}</li>
                    <li>{!! $contentMasaModern21 !!}</li>
                    <li>{!! $contentMasaModern22 !!}</li>
                    <img class="imgmasamodern" src="assets/images/Sputnik.jpg" class="card-img-top" alt="Sputnik">
                    <div id="source-img">
                        <p>
                            sumber gambar : https://en.wikipedia.org/wiki/Sputnik_crisis
                        </p>
                    </div>
                    
                    <li>{!! $contentMasaModern23 !!}</li>
                    <img class="imgmasamodern" src="assets/images/Chester-Carlson.png" class="card-img-top" alt="Xerox">
                    <div id="source-img">
                        <p>
                            sumber gambar : https://www.infobiografi.com/biografi-dan-profil-lengkap-chester-carlson/
                        </p>
                    </div>
                    
                    <li>{!! $contentMasaModern24 !!}</li>
                    <li>{!! $contentMasaModern25 !!}</li>
                    <li>{!! $contentMasaModern26 !!}</li>
                    <li>{!! $contentMasaModern27 !!}</li>
                    <li>{!! $contentMasaModern28 !!}</li>
                    <li>{!! $contentMasaModern29 !!}</li>
                    <li>{!! $contentMasaModern30 !!}</li>
                    <li>{!! $contentMasaModern31 !!}</li>
                    <li>{!! $contentMasaModern32 !!}</li>
                    <li>{!! $contentMasaModern33 !!}</li>
                    <br>
                </ul>
            </div>
        </div>
    </div>


</div>

@endsection

@section('script')
    <script>
        document.getElementById('btnMasaModern').addEventListener('click', () => {
            const text = document.getElementById('tech_per_item_modern').textContent.trim();
            if (!text) {
                alert('Teks kosong!');
                return;
            }

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


        //     fetch('/txtfile/audiorequestcontrol', {
        //         method: 'POST',
        //         headers: {
        //             'Content-Type': 'application/json',
        //             'X-CSRF-TOKEN': '{{ csrf_token() }}'
        //         },
        //         body: JSON.stringify({ text })
        //     })
        //     .then(res => {
        //         if (!res.ok) throw new Error('Gagal request TTS');
        //         return res.blob();
        //     })
        //     .then(blob => {
        //         const audioUrl = URL.createObjectURL(blob);
        //         const audio = new Audio(audioUrl);
        //         audio.play();
        //     })
        //     .catch(err => {
        //         console.error(err);
        //         alert('Gagal memutar suara: ' + err.message);
        //     });
        });
    </script>
@endsection
@extends('layouts.mainuserpage')

@section('container')

<div class="technology_content">
    <p id="technology_subtitle"><u>Masa Sejarah (3000 SM s.d. 1400 M)</u></p>
    <p class="writer_content">Ditulis oleh : Ulf's Creativity <br> Source : Buku DASAR-DASAR PENGANTAR TEKNOLOGI INFORMASI (Bayu Rianto & Welly Dozan, Juni 2020)</p>

    <div id="card-tik1" class="card">
        <div id="card-tik2" class="card-body">
            <button id="btnMasaSejarah">
                <img id="icon_voice" src="assets/images/voice.png" alt="icon-voice">
            </button>
            <div id="tech_per_item_sejarah">
                <p id="tech_sub">{!! $subJudul !!}</p>        
                <ul class="ul_circle">
                    <li>{!! $contentMasaSejarah1 !!}</li>
                    <img class="imgmasasejarah" src="assets/images/tulisanpiktograf.jpg" class="card-img-top" alt="Tulisan Piktograf Bangsa Sumeria">
                    <div id="source-img">
                        <p>
                            sumber gambar : https://nationalgeographic.grid.id/read/132187193/penemuan-penemuan-peradaban-sumeria-kuno-yang-mengubah-dunia?page=all
                        </p>
                    </div>

                    <li>{!! $contentMasaSejarah2 !!}</li>
                    <img class="imgmasasejarah" src="assets/images/gambarhieroglif.jpg" class="card-img-top" alt="Gambar Hieroglif">
                    <div id="source-img">
                        <p>
                            sumber gambar : https://www.kompas.com/stori/read/2021/04/19/164657579/hieroglif-mesir-sejarah-sistem-penulisan-dan-jenisnya?page=all
                        </p>
                    </div>
                    
                    <li>{!! $contentMasaSejarah3 !!}</li>
                    <img class="imgmasasejarah" src="assets/images/abacus.jpg" class="card-img-top" alt="Abacus">
                    <div id="source-img">
                        <p>
                            sumber gambar : https://www.kanalkalimantan.com/abacus-alat-hitung-pertama-yang-diciptaan-manusia/
                        </p>
                    </div>
                    
                    <li>{!! $contentMasaSejarah4 !!}</li>
                    <img class="imgmasasejarah" src="assets/images/abjadfonetik.png" class="card-img-top" alt="Abjad Fonetik">
                    <div id="source-img">
                        <p>
                            sumber gambar : https://id.wikipedia.org/wiki/Alfabet_Yunani
                        </p>
                    </div>
                        
                    <li>{!! $contentMasaSejarah5 !!}</li>
                    <img class="imgmasasejarah" src="assets/images/turtleshell.jpg" class="card-img-top" alt="Turtle Shell">
                    <div id="source-img">
                        <p>
                            sumber gambar : https://www.unesco.org/en/memory-world/chinese-oracle-bone-inscriptions
                        </p>
                    </div>

                    <li>{!! $contentMasaSejarah6 !!}</li>
                    <li>{!! $contentMasaSejarah7 !!}</li>
                    <li>{!! $contentMasaSejarah8 !!}</li>
                    <li>{!! $contentMasaSejarah9 !!}</li>
                    <li>{!! $contentMasaSejarah10 !!}</li>
                    <img class="imgmasasejarah" src="assets/images/letteronpapyrus.jpg" class="card-img-top" alt="Surat di atas Papyrus">
                    <div id="source-img">
                        <p>
                            sumber gambar : https://id.wikipedia.org/wiki/Papirus
                        </p>
                    </div>
                    
                    <li>{!! $contentMasaSejarah11 !!}</li>
                    <div class="two_photos">
                        <div class="left_photo">
                            <img class="imgmasasejarah" src="assets/images/oldestextantpaperfragment.jpg" class="card-img-top" alt="">
                            <div id="source-img">
                                <p>
                                    sumber gambar : https://www.cabinet.ox.ac.uk/origins-paper
                                </p>
                            </div>
                        </div>

                        <div class="right_photo">
                            <img id="img_cailun" class="imgmasasejarah" src="assets/images/cai_lun.jpg" class="card-img-top" alt="Cai Lun">
                            <div id="source-img">
                                <p>
                                    sumber gambar : https://student-activity.binus.ac.id/bnmc/2022/<br>09/11/cai-lun-sang-penemu-kertas/
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <li>{!! $contentMasaSejarah12 !!}</li>
                    <li>{!! $contentMasaSejarah13 !!}</li>
                    <li>{!! $contentMasaSejarah14 !!}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
    <script>
        document.getElementById('btnMasaSejarah').addEventListener('click', () => {
            const text = document.getElementById('tech_per_item_sejarah').textContent.trim();
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
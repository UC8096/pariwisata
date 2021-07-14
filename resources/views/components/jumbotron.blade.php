<!-- Background & Jumbotron  -->
<div class="topbg-1" style="background-image: url('{{ asset('img/jumbotron.jpg') }}')">
    <div>
        <div class="position-custom-1 text-light">
            <div>
                <h1 class="display-4 ">Wonderful Yogyakarta
                </h1>
                <div class="deskripsi-box-custom-1">
                    {{-- <p class="lead">Yogyakarta adalah destinasi wisata paling populer di Indonesia setelah Bali. Apa
                        yang membuat Jogja begitu istimewa sampai dikunjungi jutaan orang setiap tahun? Temukan info
                        wisata Jogja terbaik di sini.</p> --}}
                    <h3>
                        <strong>Yogyakarta </strong>
                    </h3>
                    <h1 class="ml4">
                        <span>
                            <p class="letters letters-1 lead">adalah kota yang sangat strategis karena banyak sekali
                                tempat
                                wisata yang ada di kota ini. Kota pelajar satu ini memang selalu melekat di hati
                                pengunjungnya. Bagaimana tidak? Jogja adalah kota dengan paket wisata lengkap baik
                                wisata
                                alam, edukasi, kuliner, belanja, semua dapat ditemukan. Karena itu, banyak sekali
                                wisatawan
                                yang tertarik dengan kota ini.</p>
                        </span>
                        <span>
                            <p class="letters letters-2 lead">memiliki iklim yang panas ketika musim kemarau. Secara
                                umum,
                                rata-rata curah hujan tertinggi di Kota Yogyakarta yaitu sebanyak 692.50 mm3. Kelembaban
                                udara rata-rata cukup tinggi, terendah terjadi pada bulan Agustus tahun 2019 sebesar 81
                                persen. Tahun 2019 rata-rata tekanan udara sebesar 995.66 mb dan suhu udara rata-rata
                                26,05oC.</p>
                        </span>
                        <span>
                            <p class="letters letters-3 lead">Merupakan kota yang eksotik dan berbudaya. Pegunungan,
                                pantai-pantai, hamparan sawah yang hijau dan udara yang sejuk menghiasi keindahan kota
                                Jogja. Tidak diherankan bila kota Jogja sangat terkenal dan merupakan salah satu tujuan
                                utama para wisatawan mancanegara, untuk berlibur dan menghabiskan sisa waktu
                                istirahatnya di
                                Jogja.

                            </p>
                        </span>

                        {{-- <span class="letters letters-1">Ready</span> --}}
                        {{-- <span class="letters letters-2">Set</span>
                        <span class="letters letters-3">Go!</span> --}}
                    </h1>

                </div>
                <br />

            </div>
        </div>
    </div>
</div>

<style>
    .ml4 {
        position: relative;
    }

    .ml4 .letters {
        position: absolute;
        margin: auto;
        left: 0;
        top: 0.3em;
        right: 0;
        opacity: 0;
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<script>
    var ml4 = {};
ml4.opacityIn = [0,1];
ml4.scaleIn = [0.2, 1];
ml4.scaleOut = 3;
ml4.durationIn = 1000;
ml4.durationOut = 1000;
ml4.delay = 5000;

anime.timeline({loop: true})
  .add({
    targets: '.ml4 .letters-1',
    opacity: ml4.opacityIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-1',
    opacity: 0,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  }).add({
    targets: '.ml4 .letters-2',
    opacity: ml4.opacityIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-2',
    opacity: 0,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  }).add({
    targets: '.ml4 .letters-3',
    opacity: ml4.opacityIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-3',
    opacity: 0,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  })
</script>
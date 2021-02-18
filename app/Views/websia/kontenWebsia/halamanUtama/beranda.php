<?php
// Kalo mau akses carousel, di controller websia ganti variabel login = 'sudah'
//  Kalo mau akses jumbotron, di controller websia ganti variabel login = 'belum'
if ($login == 'belum') {
    $urlTemplate = 'websia/layoutWebsia/templateBeranda.php';
    $urlCarouselorJumbotron = 'websia/kontenWebsia/halamanUtama/jumbotron.php';
} else if ($login == 'sudah') {
    $urlTemplate = 'websia/layoutWebsia/templateBerandaLogin.php';
    $urlCarouselorJumbotron = 'websia/kontenWebsia/halamanUtama/carousel.php';
}
?>

<?= $this->extend($urlTemplate); ?>

<?= $this->section('content'); ?>


<script type="text/javascript" src="/js/leaflet.js"></script>
<!-- Awal Carousel -->
<?= $this->include($urlCarouselorJumbotron) ?>
<!-- Akhir Carousel -->

<!-- Awal Sejarah Singkat HAISTIS -->
</div>
<div class="flex md:flex-row flex-col-reverse my-8 pt-0 lg:px-20 md:px-8 px-2">
    <div class="md:w-2/3 block md:px-2 md:py-8 pb-4">
        <div class="md:mb-6 mb-2 text-xl text-center md:text-left text-black font-heading font-semibold">HASIL DARI PROYEK PKL RISET 5</div>
        <!-- awal keterangan hasil proyek pkl riset 5 -->
        <p class="text-primary text-justify md:text-left font-paragraph">
            Riset 5 merupakan salah satu dari enam riset yang ada dalam PKL Tahun Akademik 2020/2021 Politeknik Statistika STIS. Riset 5 sendiri memiliki topik
            “Pengembangan Sistem Database Alumni AIS/STIS/Politeknik Statistika STIS”. Riset 5 memiliki tujuan untuk menjadi penyedia data alumni AIS/STIS/Politeknik
            Statistika STIS yang lengkap, terintegrasi, dan up to date sehingga dapat menjadi penghubung antaralumni maupun antara alumni dengan Politeknik Statistika
            STIS. Dengan sistem informasi database alumni ini juga diharapkan dapat mempermudah dalam mencari data alumni AIS/STIS/Politeknik Statistika STIS mulai dari
            angkatan 1 hingga angkatan terakhir yang baru lulus.
        </p>
        <!-- akhir keterangan hasil proyek pkl riset 5 -->
    </div>

    <div class="md:w-1/3 w-full md:flex md:items-stretch bg-contain bg-no-repeat bg-right" style="background-image: url(/img/segitiga2.png)">
        <img class="lg:w-1/2 md:w-2/3 w-1/3 mb-2 md:mb-0  mx-auto md:self-center" src="/img/logo PKL.png" alt="" data-aos="fade-left">
    </div>
</div>
<!-- Akhir Sejarah Singkat HAISTIS -->

<!-- Awal Sejarah Singkat HAISTIS -->
<div class="flex md:flex-row flex-col bg-primary my-8 pt-0 lg:px-20 md:px-8 px-2">
    <div class="md:w-1/3 w-full md:flex md:items-stretch bg-contain bg-no-repeat bg-left" style="background-image: url(/img/segitiga1.png)">
        <img class="lg:w-2/3 md:w-11/12 w-10/12  mx-auto md:self-center" src="/img/logo_haisstis1.png" alt="" data-aos="fade-right">
    </div>

    <div class="md:w-2/3 block md:px-2 md:py-8 pb-4 ">
        <div class="md:mb-6 mb-2 text-xl text-center md:text-left text-secondary font-heading font-semibold">HIMPUNAN ALUMNI AIS/STIS (HAISSTIS)</div>
        <!-- awal keterangan hasil proyek pkl riset 5 -->
        <p class="text-white text-justify md:text-left font-paragraph">
            Himpunan alumni AIS/STIS (HAISSTIS) merupakan organisasi yang dibentuk sebagai wadah silaturahmi alumni AIS/STIS/Polstat STIS yang beragam suku, agama dan
            budaya agar terjalin hubungan kekeluargaan. HAISSTIS bertujuan untuk menjunjung tinggi nama baik almamater, membina dan mengembangkan semangat kebersamaan,
            ikut mengembangkan perstatistikan Indonesia, dan ikut meningkatkan kesadaran masyarakat akan arti dan kegunaan statistik.
        </p>
        <!-- akhir keterangan hasil proyek pkl riset 5 -->
    </div>
</div>
<!-- Akhir Sejarah Singkat HAISTIS -->

<!-- Awal Jumlah Alumni AIS/STIS/Polstat STIS -->
<div class="w-full my-8 lg:px-20 md:px-8 px-2">
    <div class="w-full md:mb-6 mb-4 text-center text-xl text-black font-heading font-bold">ALUMNI AIS/STIS/POLSTAT STIS</div>

    <div class="flex flex-col items-center md:flex-row md:justify-around w-full mt-4">
        <!-- Awal Jumlah Alumni AIS/STIS/Polstat STIS I -->
        <div class="w-min mb-2 md:mb-0 py-6 px-6 bg-contain bg-no-repeat bg-center" style="background-image: url(/img/bulat.png)" data-aos="zoom-in">
            <div class="text-primary md:text-6xl text-3xl font-bold md:mb-4 mb-2 font-heading">38.578</div>
            <div class="text-gray-500 text-sm font-semibold text-center font-paragraph">Lulusan AIS</div>
        </div>
        <!-- Akhir Jumlah Alumni AIS/STIS/Polstat STIS I-->

        <!-- Awal Jumlah Alumni AIS/STIS/Polstat STIS II-->
        <div class="w-min mb-2 md:mb-0 py-6 px-6 bg-contain bg-no-repeat bg-center" style="background-image: url(/img/bulat.png)" data-aos="zoom-in">
            <div class="text-primary md:text-6xl text-3xl font-bold md:mb-4 mb-2 font-heading">38.578</div>
            <div class="text-gray-500 text-sm font-semibold text-center font-paragraph">Lulusan STIS</div>
        </div>
        <!-- Akhir Jumlah Alumni AIS/STIS/Polstat STIS II-->

        <!-- Awal Jumlah Alumni AIS/STIS/Polstat STIS III-->
        <div class="w-min mb-2 md:mb-0 py-6 px-6 bg-contain bg-no-repeat bg-center" style="background-image: url(/img/bulat.png)" data-aos="zoom-in">
            <div class="text-primary md:text-6xl text-3xl font-bold md:mb-4 mb-2 font-heading">38.578</div>
            <div class="text-gray-500 text-sm font-semibold text-center font-paragraph">Lulusan Polstat STIS</div>
        </div>
        <!-- Akhir Jumlah Alumni AIS/STIS/Polstat STIS III-->

    </div>
</div>
<!-- Akhir Jumlah Alumni AIS/STIS/Polstat STIS -->

<!-- Awal Peta Sebaran ALUMNI -->
<div class="bg-primary my-8 md:py-8 py-4 lg:px-20 md:px-8 px-3 z-10">
    <div class="w-full md:mb-6 mb-4 text-center text-xl text-secondary font-bold font-heading">PETA SEBARAN ALUMNI</div>

    <div class="text-white font-medium text-center mb-1">Tampilkan Berdasarkan :</div>
    <!-- <div> -->
    <div class="flex flex-col w-32 h-20 items-center mx-auto filterPeta">
        <div class="w-full flex justify-center items-center  mb-1 py-1 mx-auto text-primary text-sm bg-white font-medium font-paragraph rounded-lg cursor-pointer">
            <div class="hasilFilterPeta">Provinsi</div>

            <svg class="w-4 h-4 downFilterPeta" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>

            <svg class="w-4 h-4 hidden upFilterPeta" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path>
            </svg>

        </div>
        <!-- </div> -->
        <div class="mx-auto flex flex-col justify-center mb-4 bg-white cursor-pointer rounded-lg hidden z-20 listFilterPeta">
            <div class="w-32 text-primary text-center text-sm py-1 font-medium font-paragraph border-b border-primary petaProvinsi">Provinsi</div>
            <div class="w-32 text-primary text-center text-sm py-1 font-medium font-paragraph petaKabupaten">Kabupaten</div>
        </div>
    </div>

    <div class="bg-white p-2 cursor-pointer skalaAwal hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class=" ml-3 w-4 h-4 stroke-current stroke-2 text-black" fill="currentColor" class="bi bi-fullscreen">
            <path d="M1.5 1a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4A1.5 1.5 0 0 1 1.5 0h4a.5.5 0 0 1 0 1h-4zM10 .5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 16 1.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5zM.5 10a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 0 14.5v-4a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v4a1.5 1.5 0 0 1-1.5 1.5h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5z" />
        </svg>
    </div>

    <!-- awal gambar peta alumni -->
    <div class="bg-primary relative" style="height: 26rem;" data-aos="zoom-in">
        <div id="mapid" class="bg-primary z-10 h-full w-full"></div>

        <div class="flex flex-col items-end absolute top-0 right-0 z-20">
            <svg class="w-6 h-6 text-white cursor-pointer mb-2 hover:text-gray-300 tombolInfo" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
            </svg>

            <div class="p-2 bg-white rounded-xl text-primary bg-opacity-75 hidden info">
                <div class="text-sm font-heading font-semibold">Keterangan :</div>
                <div class="text-xs font-paragraph">Terdapat total 2000 Alumni yang berada di luar Indonesia</div>
            </div>
        </div>
    </div>
    <!-- akhir gambar peta alumni -->
</div>
<!-- Akhir Peta Sebaran ALUMNI -->

<!-- awal card -->
<div class="w-full my-8 lg:px-20 md:px-8 px-2">
    <div class="w-full md:mb-6 mb-4 text-center text-xl text-black font-bold font-heading">BERITA TERBARU</div>

    <div class="flex flex-col md:flex-row md:justify-between w-full mt-4">

        <!-- awal card I-->
        <div class="w-full mb-6 lg:w-80 md:w-60 w-full md:border-0 border-b-2 border-gray-300">
            <a href="#" class="mb-4">
                <img class="lg:w-80 lg:h-60 md:w-60 md:h-44" src="/img/sampel.jpeg">
            </a>
            <div class="py-4">
                <!-- Awal judul berita -->
                <div>
                    <a href="#" class="text-black text-xl font-heading font-semibold hover:font-bold">
                        Pelatihan Kepegawaian di Masa Pandemi
                    </a>
                </div>
                <!-- akhir judul berita -->

                <!-- awal tanggal berita -->
                <div class="text-gray-700 text-sm font-paragraph font-semibold ">1 Januari 2020</div>
                <!-- akhir tanggal berita -->

                <!-- awal isi berita -->
                <p class="text-gray-600 break-words font-paragraph text-justify leading-none mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo voluptatum quibusdam nemo, incidunt dolorem voluptatem, rem eligendi beatae numquam a rerum debitis omnis ratione tempora, quisquam ullam id aperiam quam.
                </p>
                <!-- akhir isi berita -->

            </div>
        </div>
        <!-- akhir card I-->

        <!-- awal card II-->
        <div class="w-full mb-6 lg:w-80 md:w-60 w-full md:border-0 border-b-2 border-gray-300">
            <a href="#" class="mb-4">
                <img class="lg:w-80 lg:h-60 md:w-60 md:h-44" src="/img/sampel.jpeg">
            </a>
            <div class="py-4">
                <!-- Awal judul berita -->
                <div>
                    <a href="#" class="text-black text-xl font-heading font-semibold hover:font-bold">
                        Pelatihan Kepegawaian di Masa Pandemi
                    </a>
                </div>
                <!-- akhir judul berita -->

                <!-- awal tanggal berita -->
                <div class="text-gray-700 text-sm font-paragraph font-semibold ">1 Januari 2020</div>
                <!-- akhir tanggal berita -->

                <!-- awal isi berita -->
                <p class="text-gray-600 break-words font-paragraph text-justify leading-none mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo voluptatum quibusdam nemo, incidunt dolorem voluptatem, rem eligendi beatae numquam a rerum debitis omnis ratione tempora, quisquam ullam id aperiam quam.
                </p>
                <!-- akhir isi berita -->

            </div>
        </div>
        <!-- akhir card II-->

        <!-- awal card III-->
        <div class="w-full mb-6 lg:w-80 md:w-60 w-full md:border-0 border-b-2 border-gray-300">
            <a href="#" class="mb-4">
                <img class="lg:w-80 lg:h-60 md:w-60 md:h-44" src="/img/sampel.jpeg">
            </a>
            <div class="py-4">
                <!-- Awal judul berita -->
                <div>
                    <a href="#" class="text-black text-xl font-heading font-semibold hover:font-bold">
                        Pelatihan Kepegawaian di Masa Pandemi
                    </a>
                </div>
                <!-- akhir judul berita -->

                <!-- awal tanggal berita -->
                <div class="text-gray-700 text-sm font-paragraph font-semibold ">1 Januari 2020</div>
                <!-- akhir tanggal berita -->

                <!-- awal isi berita -->
                <p class="text-gray-600 break-words font-paragraph text-justify leading-none mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo voluptatum quibusdam nemo, incidunt dolorem voluptatem, rem eligendi beatae numquam a rerum debitis omnis ratione tempora, quisquam ullam id aperiam quam.
                </p>
                <!-- akhir isi berita -->

            </div>
            <!-- akhir card III-->

        </div>

    </div>

    <!-- awal tombol "Lihat Berita Selanjutnya" -->
    <div class="flex w-full justify-end">
        <div class="text-primary font-paragraph my-auto"><a href="">Lihat Berita Selanjutnya</a> </div>
        <div>
            <a href="">
                <svg class="w-6 h-6 font-bold text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </div>
    <!-- akhir tombol "Lihat Berita Selanjutnya" -->

</div>
<!-- akhir card -->

<script type="text/javascript" src="/js/leaflet.ajax.js"></script>
<script type="text/javascript" src="/js/add.js"></script>
<?= $this->endSection(); ?>
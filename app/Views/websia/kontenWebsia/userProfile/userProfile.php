<!-- ganti status ='user' atau 'bukan user' di controller websia class userProfile sesuai pengakses. 
User itu untuk melihat profil diri sendiri, sedangkan bukan user untuk melihat profil orang lain. 
Hal ini berpengaruh pada ada tidaknya tampilan tombol edit profil di halaman profil -->
<?php
if ($status == 'bukan user') {
    $tombolEdit = 'hidden';

    // berfungsi, tapi butuh tempat tersendiri biar bisa di hidden, sekarang masih gabung sama tempat lahir
    if ($checked->ttl == 1) {
        $cttl = "";
    } else {
        $cttl = "hidden";
    }
    if ($checked->email == 1) {
        $cemail = "";
    } else {
        $cemail = "hidden";
    }
    if ($checked->alamat == 1) {
        $calamat = "";
    } else {
        $calamat = "hidden";
    }
    if ($checked->jabatan == 1) {
        $cjab = "";
    } else {
        $cjab = "hidden";
    }
    if ($checked->instagram == 1) {
        $cig = "";
    } else {
        $cig = "hidden";
    }
    if ($checked->twitter == 1) {
        $ctw = "";
    } else {
        $ctw = "hidden";
    }
    if ($checked->facebook == 1) {
        $cfb = "";
    } else {
        $cfb = "hidden";
    }
    if ($checked->pendidikan == 1) {
        $cpendidikan = "1";
    } else {
        $cpendidikan = "0";
    }
    if ($checked->prestasi == 1) {
        $cprestasi = "1";
    } else {
        $cprestasi = "0";
    }
} else if ($status == 'user') {
    $tombolEdit = '';
    $cttl = "";
    $cemail = "";
    $calamat = "";
    $cjab = "";
    $cig = "";
    $ctw = "";
    $cfb = "";
    $cpendidikan = "1";
    $cprestasi  = "1";
}


?>
<?= $this->extend('websia/layoutWebsia/templateBerandaLogin.php'); ?>

<?= $this->section('content'); ?>
<!-- Awal User Profile-->
<div class="md:flex block items-center md:flex-col lg:flex-row flex-col-reverse mt-10 md:mt-6 lg:mt-10 mb-8 pt-0 lg:px-20 md:px-8">
    <div class="lg:w-7/12 w-full md:flex items-center font-paragraph text-sm">
        <div class="md:w-2/5 mb-8 justify-center object-center space-y-4">
            <!-- Avatar user profile -->
            <div class="flex flex-wrap justify-center">
                <div class="w-2/3 sm:w-full px-4">
                    <!-- syarat foto disini harus persegi (solusi : object fit) -->
                    <img src="/img/<?= $alumni->foto_profil ?>" alt="..." class="rounded-full max-w-full h-auto align-middle border-none" />
                    <!-- <img src="/img/tes/download.jpg" alt="..." class="shadow rounded-full max-w-full h-auto align-middle border-none" /> -->
                </div>
            </div>
            <!-- Tombol edit profil yang ketika di klik akan mengarah ke halaman edit profil -->
            <a class="block bg-secondary text-white text-center py-1 md:py-2 px-4 mx-auto rounded-full w-24 md:w-32 cursor-pointer hover:bg-secondaryhover transition-colors duration-300 <?= $tombolEdit ?>" href="/User/editProfil">Edit Profil</a>
        </div>
        <div class="md:w-3/5 justify-center mx-auto items-center text-center md:text-left object-center md:px-8 md:py-6">
            <!-- nama alumni -->
            <h3 class="font-heading text-secondary text-2xl md:text-3xl lg:pr-1 px-8 md:px-0 mb-2 font-extrabold uppercase"><?= $alumni->nama; ?></h3>
            <div class="mb-2">
                <!-- role alumni -->
                <?php
                if ($status == 'bukan user') {
                } else if ($status == 'user') { ?>
                    <?php foreach ($role as $row) : ?>
                        <?php if ($row->name == 'Developer') {
                        } else { ?>
                            <span class="font-paragraph text-xs inline-block bg-gray-300 mb-1 py-1 px-2 md:px-3 lg:px-4 rounded-lg text-primary align-middle uppercase"><?= $row->name; ?></span>
                <?php }
                    endforeach;
                } ?>

            </div>
            <!-- tempat dan tanggal lahir -->
            <p class="font-heading text-primary text-center md:text-left text-sm mb-5 md:mb-3 lg:mb-5">
                <?php if ($cttl == "") : ?>
                    <?= $alumni->tempat_lahir ?>, <?= strftime("%d %B %Y", strtotime($alumni->tanggal_lahir)); ?>
                <?php endif ?>
            </p>
            <p class="font-heading text-center md:text-left text-base mb-5 md:mb-3 lg:mb-5">
                <!-- Angkatan -->
                Angkatan <span class="text-primary">ke-<?= $alumni->angkatan; ?> </span><br />
                <!-- Akademi Ilmu Statistik / STIS/ POLSTAT STIS  ========>  Harusnya diatur di BE -->
                <?php foreach ($pendidikan as $row) {
                    echo $row->instansi; ?> <br />
                <?php } ?>
                <!-- NIM -->
                NIM <span class="text-primary"><?= $alumni->nim; ?></span>
            </p>
            <!-- Instansi tempat bekerja dan jabatan -->
            <p class="font-heading text-base text-center md:text-left">
                Bekerja di <span class="text-primary"> <?= $tempat_kerja->nama_instansi; ?> </span></br>
                <?php if ($cjab == "") : ?>
                    Sebagai <span class="text-primary"> <?= $alumni->jabatan_terakhir; ?> </span>
                <?php endif ?>
            </p>
        </div>
    </div>
    <div class="lg:w-5/12 w-full md:px-8 md:py-6 pb-4">
        <!-- Awal Deskripsi user profile -->
        <div class="md:p-7 md:shadow-lg md:rounded-xl">
            <p class="px-5 md:px-0 mt-8 md:mt-0 font-heading text-primary text-sm italic text-justify mb-4 md:mb-0 text-center md:text-justify lg:text-left">
            <?= $alumni->biografi ?>
            </p>
        </div>
        <!-- Akhir Deskripsi user profile -->
        <div class="md:pl-5 lg:pl-6">
            <?php if ($calamat == "") : ?>
                <p class="font-heading text-primary text-xs px-5 md:px-0 mt-6">Lokasi Tempat Tinggal Saat Ini</p>
                <span class="font-heading flex justify-start px-3 md:px-0 text-base text-left mb-5 md:mb-2">
                    <img class="my-2 mt-2 mr-0 md:mr-2 ml-1 md:ml-0 w-6 h-6 md:w-6 float-left" src="/img/icon/maps_flag.png" alt="">
                    <!-- Lokasi tempat tinggal -->
                    <p class="font-heading my-2 mt-2"> <?= $alumni->alamat ?> </p>
                </span>
            <?php endif ?>
            <!-- Awal media sosial dan telepon -->
            <?php
            if ($alumni->email == "") {
                $email = "belum terisi";
            } else {
                $email = $alumni->email;
            }
            if ($alumni->fb == "") {
                $fb = "belum terisi";
            } else {
                $fb = $alumni->fb;
            }
            if ($alumni->twitter == "") {
                $twitter = "belum terisi";
            } else {
                $twitter = $alumni->twitter;
            }
            if ($alumni->ig == "") {
                $ig = "belum terisi";
            } else {
                $ig = $alumni->ig;
            }
            ?>
            <div class="md:space-x-4 flex flex-row items-center justify-center lg:justify-start md:py-2 px-5 md:px-0">
                <?php if ($cemail == "" || $cfb == "") : ?>
                    <div class="w-1/2">
                        <!-- Email -->
                        <?php if ($cemail == "") : ?>
                            <div <?= $cemail ?> class="inline-block mb-2 flex flex-row">
                                <img src="/img/icon/message.png" alt="" class="float-left w-5">
                                <span class="font-heading text-xs text-primary text-center ml-1 md:ml-2"><?= $email ?></span>
                            </div>
                        <?php endif ?>
                        <!-- Facebook -->
                        <?php if ($cfb == "") : ?>
                            <div <?= $cfb ?> class="inline-block flex flex-row">
                                <img src="/img/icon/facebook.png" alt="" class="float-left ml-1 w-2 h-4">
                                <span class="font-heading text-xs text-primary text-left flex items-center ml-3 md:ml-4"><?= $fb ?></span>
                            </div>
                        <?php endif ?>
                    </div>
                <?php endif ?>
                <?php if ($cig == "" || $ctw == "") : ?>
                    <div class="w-1/2 pl-6">
                        <!-- Twitter -->
                        <?php if ($ctw == "") : ?>
                            <div <?= $ctw ?> class="inline-block mb-2 flex flex-row">
                                <img src="/img/icon/twitter.png" alt="" class="float-left w-4 w-4">
                                <span class="font-heading text-xs text-primary text-center ml-2 md:ml-3"><?= $twitter ?></span>
                            </div>
                        <?php endif ?>
                        <!-- Instagram -->
                        <?php if ($cig == "") : ?>
                            <div <?= $cig ?> class="inline-block flex flex-row">
                                <img src="/img/icon/instagram.png" alt="" class="float-left w-4">
                                <span class="font-heading text-xs text-primary text-center flex items-center ml-2 md:ml-3"><?= $ig ?></span>
                            </div>
                        <?php endif ?>
                    </div>
                <?php endif ?>
            </div>
            <!--  Akhir media sosial-->
        </div>
    </div>
</div>
<!-- Akhir User Profile-->

<!-- Awal Rekomendasi -->
<div class="bg-primary py-8 md:py-4 lg:px-20 md:px-8 px-3">
    <div class="static md:w-full md:px-2 md:py-8 pb-8">
        <div class="-mt-16 sm:mt-0 md:mb-6 mb-2 text-center md:text-left text-secondary font-semibold">
            <!-- link ini mengarah ke halaman tampilan semua rekomendasi -->
            <div class="invisible sm:visible">
                <a class="bg-secondary mb-8 mt-1 md:mt-0 float-right font-paragraph text-sm text-white text-center py-1 px-4 mx-auto rounded-full cursor-pointer hover:bg-secondaryhover transition-colors duration-100" href="/User/rekomendasi">
                    Lihat Semua Rekomendasi
                    <img src="/img/components/icon/panah_kanan.png" alt="icon panah kanan" class="float-right pl-2">
                </a>
            </div>
            <h2 class="font-heading mb-6 text-xl inline-block">Alumni yang mungkin Anda kenal</h2>
        </div>
        <div class="holder mx-auto w-11/12 md:w-full lg:w-11/12 grid grid-cols-2 md:grid-cols-4 gap-x-4 md:gap-x-0 lg:gap-x-8" data-aos="zoom-in">
            <?php foreach ($rekomendasi as $row) :  ?>
                <div class="card shadow border-gray-800 hover:bg-gray-200 hover:shadow-inner transition duration-700 bg-white relative" data-aos="zoom-in">
                    <a href="/User/profilAlumni?nim=<?= $row->nim; ?>" target="_new">
                        <div class="">
                            <img class="w-16 md:w-20 lg:w-24 mx-auto mt-4" src="/img/avatar.png" alt="" /> <!-- Hilangin padding klo dah ada gambar, dan pake w-full aja -->
                        </div>
                        <div>
                            <span class="title mt-4 font-heading text-sm md:text-base lg:text-lg font-semibold text-primary block px-2 md:px-0 text-center"><?= $row->nama; ?></span>
                        </div>
                        <div>
                            <span class="description font-paragraph text-primary text-center md:text-base block pt-2 pb-2 border-gray-400 mb-2">Angkatan <?= $row->angkatan; ?></span>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="visible sm:invisible">
            <a class="bg-secondary mb-8 mt-1 md:mt-0 float-right font-paragraph text-sm text-white text-center py-1 px-4 mx-auto rounded-full cursor-pointer hover:bg-secondaryhover transition-colors duration-300" href="/User/rekomendasi">
                Lihat Semua Rekomendasi
                <img src="/img/icon/g" alt="" class="float-right pl-2">
            </a>
        </div>
    </div>
</div>
<!-- Akhir Rekomendasi -->

<!-- Atribut pada section ini belum ditentukan -->
<!-- Awal Informasi Instansi -->
<div class="w-full my-8 lg:px-20 md:px-8 px-2">
    <h3 class="font-heading font-bold text-xl text-secondary">Informasi Instansi</h3>
    <div class="md:shadow-lg lg:shadow-xl rounded-2xl px-3 py-3 md:px-7 md:py-5 lg:mx-14 lg:py-8 lg:px-11 md:mt-3">
        <div class="font-heading">
            <?php
            if ($tempat_kerja->nama_instansi == "") {
                $nama_instansi = "belum terisi";
            } else {
                $nama_instansi = $tempat_kerja->nama_instansi;
            }
            if ($tempat_kerja->telp_instansi == "") {
                $telp_instansi = "belum terisi";
            } else {
                $telp_instansi = $tempat_kerja->telp_instansi;
            }
            if ($tempat_kerja->faks_instansi == "") {
                $faks_instansi = "belum terisi";
            } else {
                $faks_instansi = $tempat_kerja->faks_instansi;
            }
            if ($tempat_kerja->email_instansi == "") {
                $email_instansi = "belum terisi";
            } else {
                $email_instansi = $tempat_kerja->email_instansi;
            }
            if ($tempat_kerja->alamat_instansi == "") {
                $alamat_instansi = "belum terisi";
            } else {
                $alamat_instansi = $tempat_kerja->alamat_instansi;
            }
            ?>
            <div class="flex items-start">
                <div class="font-bold text-primary w-3/12 md:w-2/12 lg:w-1/12 lg:pb-2">Instansi :</div>
                <div class="w-9/12 md:w-10/12 lg:w-11/12 lg:ml-5"><?= $nama_instansi ?></div>
            </div>
            <div class="flex items-start">
                <div class="font-bold text-primary w-3/12 md:w-2/12 lg:w-1/12 lg:pb-2">Alamat : </div>
                <div class="w-9/12 md:w-10/12 lg:w-11/12 lg:ml-5"><?= $alamat_instansi ?></div>
            </div>
            <div class="flex items-start">
                <div class="font-bold text-primary w-3/12 md:w-2/12 lg:w-1/12 lg:pb-2">Telp : </div>
                <div class="w-9/12 md:w-10/12 lg:w-11/12 lg:ml-5"><?= $telp_instansi ?></div>
            </div>
            <div class="flex items-start">
                <div class="font-bold text-primary w-3/12 md:w-2/12 lg:w-1/12 lg:pb-2">Faks : </div>
                <div class="w-9/12 md:w-10/12 lg:w-11/12 lg:ml-5"><?= $faks_instansi ?></div>
            </div>
            <div class="flex items-start">
                <div class="font-bold text-primary w-3/12 md:w-2/12 lg:w-1/12 lg:pb-2">Email : </div>
                <div class="w-9/12 md:w-10/12 lg:w-11/12 lg:ml-5"><?= $email_instansi ?></div>
            </div>
        </div>
    </div>
    <hr class="visible sm:invisible border-primary border-opacity-75 w-4/5 object-center mx-auto mt-8">
</div>
<!-- Akhir Informasi Intsansi -->

<?php if ($cprestasi == 1) { ?>
<!-- Awal Riwayat Prestasi -->
<div class="w-full my-8 lg:px-20 md:px-8 px-2">
    <h3 class="font-heading font-bold text-xl text-secondary">Riwayat Prestasi</h3>
    <div class="md:shadow-lg lg:shadow-xl rounded-2xl px-0 py-1 md:px-5 md:py-5 lg:mx-14 lg:p-8 mb-1 md:mt-3">
        <?php foreach ($prestasi as $row) : ?>
            <div class="flex justify-between px-3 font-heading text-primary mt-2 md:mt-2 lg:mt-3">
                <div class=""><span class="text-black"><?= $row->nama_prestasi; ?></span> </div>
                <div class="font-bold"><?= $row->tahun_prestasi; ?></div>
            </div>
        <?php endforeach; ?>
    </div>
    <hr class="visible sm:invisible border-primary border-opacity-75 w-4/5 object-center mx-auto mt-8">
</div>
<!-- Akhir Riwayat Prestasi -->
    <?php } ?>

<?php if ($cpendidikan == 1) { ?>
<!-- Awal Riwayat Pendidikan -->
<div class="w-full my-8 lg:px-20 md:px-8 px-2 mb-6 md:mb-12">
    <h3 class="font-heading font-bold text-xl text-secondary">Riwayat Pendidikan</h3>
    <div class="lg:px-16">
        <div class="md:shadow-lg lg:shadow-xl rounded-3xl w-full mx-auto mt-5">
            <div class="overflow-x-scroll md:overflow-x-hidden">
                <table class="table-fixed font-paragraph text-black">
                    <thead>
                        <tr>
                            <th class="w-1/12 bg-gray-100 border-b-2 border-gray-200 rounded-tl-xl lg:rounded-tl-3xl text-sm text-left pl-3 lg:pl-5 py-2 md:py-3 lg:py-4">Jenjang Pendidikan</th>
                            <th class="w-2/12 bg-gray-100 border-b-2 border-gray-200 text-sm text-left pl-3 lg:pl-5 py-2 md:py-3 lg:py-4">Univeristas</th>
                            <th class="w-2/12 bg-gray-100 border-b-2 border-gray-200 text-sm text-left pl-3 lg:pl-5 py-2 md:py-3 lg:py-4">Program Studi</th>
                            <th class="w-1/12 bg-gray-100 border-b-2 border-gray-200 text-sm text-left pl-3 lg:pl-5 py-2 md:py-3 lg:py-4">Tahun Masuk</th>
                            <th class="w-1/12 bg-gray-100 border-b-2 border-gray-200 text-sm text-left pl-3 lg:pl-5 py-2 md:py-3 lg:py-4">Tahun Lulus</th>
                            <th class="w-3/12 bg-gray-100 border-b-2 border-gray-200 rounded-tr-xl lg:rounded-tr-3xl text-sm text-left pl-3 lg:pl-5 py-2 md:py-3 lg:py-4">Judul Tulisan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pendidikan as $row) : ?>
                            <?php
                            if ($row->jenjang == "") {
                                $jenjang = "belum terisi";
                            } else {
                                $jenjang = $row->jenjang;
                            }
                            if ($row->instansi == "") {
                                $instansi = "belum terisi";
                            } else {
                                $instansi = $row->instansi;
                            }
                            if ($row->program_studi == "") {
                                $program_studi = "belum terisi";
                            } else {
                                $program_studi = $row->program_studi;
                            }
                            if ($row->tahun_masuk == "0000") {
                                $tahun_masuk = "belum terisi";
                            } else {
                                $tahun_masuk = $row->tahun_masuk;
                            }
                            if ($row->tahun_lulus == "0000") {
                                $tahun_lulus = "belum terisi";
                            } else {
                                $tahun_lulus = $row->tahun_lulus;
                            }
                            if ($row->judul_tulisan == "") {
                                $judul_tulisan = "belum terisi";
                            } else {
                                $judul_tulisan = $row->judul_tulisan;
                            }
                            ?>
                            <tr>
                                <td class="text-sm text-left border-b-2 border-gray-200 px-3 lg:px-5 py-2 md:py-3 lg:py-4"><?= $jenjang; ?></td>
                                <td class="text-sm text-left border-b-2 border-gray-200 px-3 lg:px-5 py-2 md:py-3 lg:py-4"><?= $instansi; ?></td>
                                <td class="text-sm text-left border-b-2 border-gray-200 px-3 lg:px-5 py-2 md:py-3 lg:py-4"><?= $program_studi; ?></td>
                                <td class="text-sm text-left border-b-2 border-gray-200 px-3 lg:px-5 py-2 md:py-3 lg:py-4"><?= $tahun_masuk; ?></td>
                                <td class="text-sm text-left border-b-2 border-gray-200 px-3 lg:px-5 py-2 md:py-3 lg:py-4"><?= $tahun_lulus; ?></td>
                                <td class="text-sm text-left border-b-2 border-gray-200 px-3 lg:px-5 py-2 md:py-3 lg:py-4"><?= $judul_tulisan; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td class="bg-gray-100 rounded-bl-xl lg:rounded-bl-3xl text-sm text-left px-3 lg:px-5 py-2 md:py-3 lg:py-4"></td>
                            <td class="bg-gray-100 text-sm text-left px-3 lg:px-5 py-2 md:py-3 lg:py-4"></td>
                            <td class="bg-gray-100 text-sm text-left px-3 lg:px-5 py-2 md:py-3 lg:py-4"></td>
                            <td class="bg-gray-100 text-sm text-left px-3 lg:px-5 py-2 md:py-3 lg:py-4"></td>
                            <td class="bg-gray-100 text-sm text-left px-3 lg:px-5 py-2 md:py-3 lg:py-4"></td>
                            <td class="bg-gray-100 rounded-br-xl lg:rounded-br-3xl text-sm text-left px-3 lg:px-5 py-2 md:py-3 lg:py-4"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Riwayat Pendidikan -->
    <?php } ?>

<?= $this->endSection(); ?>
<!-- ganti status ='user' atau 'bukan user' di controller websia class userProfile sesuai pengakses. 
User itu untuk melihat profil diri sendiri, sedangkan bukan user untuk melihat profil orang lain. 
Hal ini berpengaruh pada ada tidaknya tampilan tombol edit profil di halaman profil -->
<?php
if ($status == 'bukan user') {
    $tombolEdit = 'hidden';
} else if ($status == 'user') {
    $tombolEdit = '';
}
?>
<?= $this->extend('websia/layoutWebsia/templateBerandaLogin.php'); ?>

<?= $this->section('content'); ?>
<!-- Awal User Profile-->
<div class="md:flex block items-center md:flex-col lg:flex-row flex-col-reverse my-8 pt-0 lg:px-20 md:px-8 md:pt-4">
    <div class="lg:w-3/5 w-full md:flex items-center font-paragraph text-sm">
        <div class="md:w-2/5 mb-8 justify-center object-center space-y-4">
            <!-- Avatar user profile -->
            <img class="block float-none mx-auto w-60 md:w-72 px-6 object-contain" src="/img/avatar.png" alt="">
            <!-- Tombol edit profil yang ketika di klik akan mengarah ke halaman edit profil -->
            <a class="block bg-secondary text-white text-center py-1 md:py-2 px-4 mx-auto rounded-full w-24 md:w-32 cursor-pointer hover:bg-secondaryhover transition-colors duration-300 <?= $tombolEdit ?>" href="">Edit Profil</a>
        </div>
        <div class="md:w-3/5 justify-center mx-auto items-center text-center md:text-left object-center md:px-8 md:py-6">
            <!-- nama alumni -->
            <h3 class="font-heading text-secondary text-2xl md:text-3xl lg:pr-1 px-8 md:px-0 mb-2 font-extrabold uppercase"><?=$nama;?></h3>
            <div class="mb-8">
                <!-- role alumni -->
                <?php
                    if ($status == 'bukan user') {
                    } else if ($status == 'user') {?>
                        <?php foreach($role as $row) :?>
                        <span class="font-paragraph text-xs bg-gray-300 py-1 px-2 md:px-3 lg:px-4 rounded-lg text-primary align-middle uppercase"><?=$row->group_id;?></span>
                        <?php endforeach;?>
                        <?php    }
                ?>
                
            </div>
            <!-- tempat dan tanggal lahir -->
            <p class="font-heading text-center md:text-left text-base mb-5"><?=$tempat_lahir;?>, <?=$tanggal_lahir;?></p>
            <!-- Instansi tempat bekerja dan jabatan -->
            <p class="font-heading text-base text-center md:text-left">
                Bekerja di <?=$nama_instansi;?> <br />
                Sebagai <?=$jabatan_terakhir;?>
            </p>
            <span class="font-heading flex justify-center md:justify-start px-8 md:px-0 text-base items-center text-center md:text-left">
                <img class="my-2 mt-4 mr-2 w-5 float-left" src="/img/icon/maps_flag.png" alt="">
                <!-- Lokasi tempat tinggal -->
                <p class="my-2 mt-4"> <?=$alamat;?></p>
            </span>

        </div>
    </div>
    <div class="lg:w-2/5 w-full md:px-8 md:py-6 pb-4">
        <!-- Awal Deskripsi user profile -->
        <p class="px-8 md:px-0 mt-8 md:mt-0 font-heading text-base italic text-justify mb-8 md:mb-0 text-center md:text-left">
            `Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea incidunt quos saepe doloribus esse, fugit ratione culpa reprehenderit eos totam tenetur consectetur. Id, recusandae aspernatur incidunt cum, quo quaerat sequi earum ex doloremque eos ullam accusantium porro quos laudantium dolore delectus? Natus minima voluptates alias suscipit aperiam debitis voluptatum iusto`
        </p>
        <!-- Akhir Deskripsi user profile -->
        <div class="space-x-3 lg:space-x-2 flex justify-center lg:justify-start md:py-6 px-8 md:px-0">
            <!-- Awal media sosial dan telepon -->
            <a href="https://facebook.com" class="inline-block">
                <img src="/img/icon/fb.png" alt="" class="w-6">
            </a>
            <a href="https://twitter.com" class="inline-block">
                <img src="/img/icon/twit.png" alt="" class="w-6">
            </a>
            <a href="https://instagram.com" class="inline-block">
                <img src="/img/icon/ig.png" alt="" class="w-6">
            </a>
            <div class="inline-block">
                <img src="/img/icon/telp.png" alt="" class="float-left w-10 md:w-8">
                <span class="font-heading text-xs object-center"> <?= $telp_alumni;?> </span>
            </div>
            <div class="inline-block">
                <img src="/img/icon/msg.png" alt="" class="float-left w-10 md:w-8">
                <span class="font-heading text-xs object-center"> <?= $telp_alumni;?> </span>
            </div>
            <!--  Akhir media sosial dan telepon -->
        </div>
    </div>
</div>
<!-- Akhir User Profile-->
<?php if ($status == 'bukan user') {
}else{ ?>
<!-- Awal Rekomendasi -->
<div class="bg-primary py-8 md:py-4 lg:px-20 md:px-8 px-2">
    <div class="static md:w-full md:px-2 md:py-8 pb-4">
        <div class="md:mb-6 mb-2 text-center md:text-left text-secondary font-semibold">
            <!-- link ini mengarah ke halaman tampilan semua rekomendasi -->
            <a class="bg-secondary mb-8 mt-1 md:mt-0 float-right font-paragraph text-sm text-white text-center py-1 px-4 mx-auto rounded-full cursor-pointer hover:bg-secondaryhover transition-colors duration-300" href="/Home/rekomendasi">
                Lihat Semua Rekomendasi
                <img src="/img/icon/panah.png" alt="" class="float-right pl-2">
            </a>
            <h2 class="font-heading mb-6 text-xl inline-block">Alumni yang mungkin Anda kenal</h2>
        </div>
        <div class="holder mx-auto w-11/12 md:w-full lg:w-11/12 grid grid-cols-2 md:grid-cols-4 gap-x-4 md:gap-x-0 lg:gap-x-8" data-aos="zoom-in">
        <?php foreach ($rekomendasi as $row) :  ?>
                <!-- 1 card -->
                <div class="each rounded-3xl m-2 shadow-lg border-gray-800 bg-white relative">
                    <a href="/Home/profilAlumni?nim=<?=$row->nim?>" target="_new">
                        <img class="w-24 mx-auto py-4" src="/img/avatar.png" alt="" /> <!-- Hilangin padding klo dah ada gambar, dan pake w-full aja -->
                        <!-- <div class="font-paragraph absolute top-0 right-0 bg-secondary m-3 text-white p-1 px-2 text-xs font-bold rounded">59</div> -->
                        <div class="desc p-2">
                            <span class="title font-heading font-bold text-primary block cursor-pointer text-center"><?= $row->nama ?></span>
                            <span class="description font-paragraph text-primary text-center text-base block pt-2 border-gray-400 mb-0"><?= $row->nim ?></span>
                            <span class="description font-paragraph text-primary text-center text-base block py-0 border-gray-400 mb-0"><?= $row->angkatan ?></span>
                            <!-- <a class="block bg-gray-300 font-paragraph text-primary text-sm text-center py-1 px-3 my-4 mx-auto rounded-lg w-full cursor-pointer border-gray-300 hover:bg-gray-400 hover:border-opacity-70 transition-colors duration-300" href="/profil">Lihat Profil</a> -->
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php }?>
<!-- Akhir Rekomendasi -->

<!-- Atribut pada section ini belum ditentukan -->
<!-- Awal Informasi Umum -->
<div class="w-full my-8 lg:px-20 md:px-8 px-2">
    <h3 class="font-heading font-bold text-xl text-secondary">Informasi Umum</h3>
    <table class="table-auto font-paragraph text-primary ml-5 mt-3">
        <tbody>
            <tr>
                <td class="font-bold">Nama Lengkap</td>
                <td>:</td>
                <td class="pl-4"><?=$nama?></td>
            </tr>
            <tr>
                <td class="font-bold">Angkatan</td>
                <td>:</td>
                <td class="pl-4"><?=$angkatan?></td>
            </tr>
            <tr>
                <td class="font-bold">Jenis Kelamin</td>
                <td>:</td>
                <td class="pl-4"><?=$jenis_kelamin?></td>
            </tr>
            <tr>
                <td class="font-bold">Tempat/tanggal lahir</td>
                <td>:</td>
                <td class="pl-4"><?=$tempat_lahir;?>, <?=$tanggal_lahir;?></td>
            </tr>
            <tr>
                <td class="font-bold">Alamat</td>
                <td>:</td>
                <td class="pl-4"><?=$alamat?></td>
            </tr>
            <tr>
                <td class="font-bold">Nomor Telepon</td>
                <td>:</td>
                <td class="pl-4"><?=$telp_alumni?></td>
            </tr>
        </tbody>
    </table>
    <hr class="border-primary border-opacity-75 w-3/4 object-center mx-auto mt-8">
</div>
<!-- Akhir Informasi Umum -->

<!-- Awal Riwayat Pendidikan -->
<div class="w-full my-8 lg:px-20 md:px-8 px-2">
    <h3 class="font-heading font-bold text-xl text-secondary">Riwayat Pendidikan</h3>
    <table class="table-auto font-paragraph text-primary ml-5 mt-3">
        <tbody>
            <?php for ($x = 0; $x <= 5; $x++) : ?>
                <tr>
                    <td class="font-bold">Atribut : </td>
                    <td class="pl-4">Isi Atribut</td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
    <hr class="border-primary border-opacity-75 w-3/4 object-center mx-auto mt-8">
</div>
<!-- Akhir Riwayat Pendidikan -->

<!-- Awal Riwayat Pekerjaan -->
<div class="w-full my-8 lg:px-20 md:px-8 px-2">
    <h3 class="font-heading font-bold text-xl text-secondary">Riwayat Pekerjaan</h3>
    <table class="table-auto font-paragraph text-primary ml-5 mt-3">
        <tbody>
            <tr>
                <td class="font-bold">Nama Instansi</td>
                <td>:</td>
                <td class="pl-4"><?=$nama_instansi?></td>
            </tr>
            <tr>
                <td class="font-bold">Alamat Instansi</td>
                <td>:</td>
                <td class="pl-4"><?=$alamat_instansi?></td>
            </tr>
            <tr>
                <td class="font-bold">Telfon Instansi</td>
                <td>:</td>
                <td class="pl-4"><?=$telp_instansi?></td>
            </tr>
            <tr>
                <td class="font-bold">Email Instansi</td>
                <td>:</td>
                <td class="pl-4"><?=$email_instansi?></td>
            </tr>
            <tr>
                <td class="font-bold">Faks Instansi</td>
                <td>:</td>
                <td class="pl-4"><?=$faks_instansi?></td>
            </tr>
            <tr>
                <td class="font-bold">Status PNS</td>
                <td>:</td>
                <td class="pl-4"><?=$aktif_pns?></td>
            </tr>
            <tr>
                <td class="font-bold">Jabatan Terakhir</td>
                <td>:</td>
                <td class="pl-4"><?=$jabatan_terakhir?></td>
            </tr>
            <tr>
                <td class="font-bold">Status Bekerja</td>
                <td>:</td>
                <td class="pl-4"><?=$status_bekerja?></td>
            </tr>
            <tr>
                <td class="font-bold">Perkiraan Pensiun</td>
                <td>:</td>
                <td class="pl-4"><?=$perkiraan_pensiun?></td>
            </tr>
        </tbody>
    </table>
    <hr class="border-primary border-opacity-75 w-3/4 object-center mx-auto mt-8">
</div>
<!-- Akhir Riwayat Pekerjaan -->

<!-- Awal Riwayat Organisasi -->
<div class="w-full my-8 lg:px-20 md:px-8 px-2">
    <h3 class="font-heading font-bold text-xl text-secondary">Riwayat Organisasi</h3>
    <table class="table-auto font-paragraph text-primary ml-5 mt-3">
        <tbody>
            <?php for ($x = 0; $x <= 5; $x++) : ?>
                <tr>
                    <td class="font-heading font-semibold">Atribut : </td>
                    <td class="pl-4">Isi Atribut</td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</div>
<!-- Akhir Riwayat Organisasi -->

<?= $this->endSection(); ?>
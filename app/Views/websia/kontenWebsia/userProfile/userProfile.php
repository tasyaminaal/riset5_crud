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
<div class="md:flex block items-center md:flex-col lg:flex-row flex-col-reverse mt-10 md:mt-6 lg:mt-10 mb-8 pt-0 lg:px-20 md:px-8">
    <div class="lg:w-7/12 w-full md:flex items-center font-paragraph text-sm">
        <div class="md:w-2/5 mb-8 justify-center object-center space-y-4">
            <!-- Avatar user profile -->
            <div class="flex flex-wrap justify-center">
                <div class="w-2/3 sm:w-full px-4">
                    <!-- syarat foto disini harus persegi (solusi : object fit) -->
                    <img src="https://demos.creative-tim.com/tailwindcss-starter-project/_next/static/images/team-1-800x800-fa5a7ac2c81a43925586ea85f2fea332.jpg" alt="..." class="rounded-full max-w-full h-auto align-middle border-none" />
                    <!-- <img src="/img/tes/download.jpg" alt="..." class="shadow rounded-full max-w-full h-auto align-middle border-none" /> -->
                </div>
            </div>
            <!-- Tombol edit profil yang ketika di klik akan mengarah ke halaman edit profil -->
            <a class="block bg-secondary text-white text-center py-1 md:py-2 px-4 mx-auto rounded-full w-24 md:w-32 cursor-pointer hover:bg-secondaryhover transition-colors duration-300 <?= $tombolEdit ?>" href="/Home/editProfil">Edit Profil</a>
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
                        <?php if($row->name == 'Developer'){
                }else{?>
                        <span class="font-paragraph text-xs inline-block bg-gray-300 mb-1 py-1 px-2 md:px-3 lg:px-4 rounded-lg text-primary align-middle uppercase"><?= $row->name; ?></span>
                    <?php }
                endforeach;
            }?>

            </div>
            <!-- tempat dan tanggal lahir -->
            <p class="font-heading text-primary text-center md:text-left text-sm mb-5 md:mb-3 lg:mb-5"><?= $alumni->tempat_lahir ?>, <?= DATE("d-m-Y", strtotime($alumni->tanggal_lahir)); ?></p>
            <p class="font-heading text-center md:text-left text-base mb-5 md:mb-3 lg:mb-5">
                <!-- Angkatan -->
                Angkatan <span class="text-primary">ke-<?= $alumni->angkatan; ?> </span><br />
                <!-- Akademi Ilmu Statistik / STIS/ POLSTAT STIS  ========>  Harusnya diatur di BE -->
                Sekolah Tinggi Ilmu Satistik <br />
                <!-- NIM -->
                NIM <span class="text-primary"><?= $alumni->nim; ?></span>
            </p>
            <!-- Instansi tempat bekerja dan jabatan -->
            <p class="font-heading text-base text-center md:text-left">
                Bekerja di <span class="text-primary"> <?= $tempat_kerja->nama_instansi; ?> </span>
                Sebagai <span class="text-primary"> <?= $alumni->jabatan_terakhir; ?> </span>
            </p>
        </div>
    </div>
    <div class="lg:w-5/12 w-full md:px-8 md:py-6 pb-4">
        <!-- Awal Deskripsi user profile -->
        <div class="md:p-7 md:shadow-lg md:rounded-xl">
            <p class="px-5 md:px-0 mt-8 md:mt-0 font-heading text-primary text-sm italic text-justify mb-4 md:mb-0 text-center md:text-justify lg:text-left">
                `Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea incidunt quos saepe doloribus esse, fugit ratione culpa reprehenderit eos totam tenetur consectetur. Id, recusandae aspernatur incidunt cum, quo quaerat sequi earum ex doloremque eos ullam`
            </p>
        </div>
        <!-- Akhir Deskripsi user profile -->
        <div class="space-x-3 lg:space-x-2 flex justify-center lg:justify-start md:py-6 px-8 md:px-0">
            <!-- Awal media sosial dan telepon -->
            <div class="md:space-x-4 flex flex-row items-center justify-center lg:justify-start md:py-2 px-5 md:px-0">
                <div class="w-1/2">
                    <!-- Email -->
                    <div class="inline-block mb-2 flex flex-row">
                        <img src="/img/icon/message.png" alt="" class="float-left w-5">
                        <span class="font-heading text-xs text-primary text-center ml-1 md:ml-2"><?= $alumni->email ?></span>
                    </div>
                    <!-- Facebook -->
                    <div class="inline-block flex flex-row">
                        <img src="/img/icon/facebook.png" alt="" class="float-left ml-1 w-2 h-4">
                        <span class="font-heading text-xs text-primary text-center flex items-center ml-3 md:ml-4">belum ada</span>
                    </div>
                </div>
                <div class="w-1/2 ml-2">
                    <!-- Twitter -->
                    <div class="inline-block mb-2 flex flex-row">
                        <img src="/img/icon/twitter.png" alt="" class="float-left w-4 w-4">
                        <span class="font-heading text-xs text-primary text-center ml-2 md:ml-3">belum ada</span>
                    </div>
                    <!-- Instagram -->
                    <div class="inline-block flex flex-row">
                        <img src="/img/icon/instagram.png" alt="" class="float-left w-4">
                        <span class="font-heading text-xs text-primary text-center flex items-center ml-2 md:ml-3">belum ada</span>
                    </div>
                </div>
            </div>
            <!--  Akhir media sosial dan telepon -->
        </div>
    </div>
</div>
<!-- Akhir User Profile-->

    <!-- Awal Rekomendasi -->
    <div class="bg-primary py-8 md:py-4 lg:px-20 md:px-8 px-2">
        <div class="static md:w-full md:px-2 md:py-8 pb-4">
            <div class="md:mb-6 mb-2 text-center md:text-left text-secondary font-semibold">
                <!-- link ini mengarah ke halaman tampilan semua rekomendasi -->
                <div class="invisible sm:visible">
                    <a class="bg-secondary mb-8 mt-1 md:mt-0 float-right font-paragraph text-sm text-white text-center py-1 px-4 mx-auto rounded-full cursor-pointer hover:bg-secondaryhover transition-colors duration-100" href="/Home/rekomendasi">
                        Lihat Semua Rekomendasi
                        <img src="/img/icon/panah.png" alt="" class="float-right pl-2">
                    </a>
                </div>
                <h2 class="font-heading mb-6 text-xl inline-block">Alumni yang mungkin Anda kenal</h2>
            </div>
            <div class="holder mx-auto w-11/12 md:w-full lg:w-11/12 grid grid-cols-2 md:grid-cols-4 gap-x-4 md:gap-x-0 lg:gap-x-8" data-aos="zoom-in">
                <?php foreach ($rekomendasi as $row) :  ?>
                    <div class="each rounded-3xl m-2 shadow-lg border-gray-800 bg-white relative">
                        <a href="/Home/profilAlumni?nim=<?= $row->nim; ?>" target="_new">
                            <img class="w-24 mx-auto py-4" src="/img/avatar.png" alt="" /> <!-- Hilangin padding klo dah ada gambar, dan pake w-full aja -->
                            <div class="desc p-2">
                                <span class="title font-heading font-bold text-primary block cursor-pointer text-center"><?= $row->nama; ?></span>
                                <!-- <span class="description font-paragraph text-primary text-center text-base block pt-2 border-gray-400 mb-0"><?= $row->nim; ?></span> -->
                                <span class="description font-paragraph text-primary text-center text-base block py-0 border-gray-400 mb-0">Angkatan <?= $row->angkatan; ?></span>
                                <!-- <a class="block bg-gray-300 font-paragraph text-primary text-sm text-center py-1 px-3 my-4 mx-auto rounded-lg w-full cursor-pointer border-gray-300 hover:bg-gray-400 hover:border-opacity-70 transition-colors duration-300" href="/profil">Lihat Profil</a> -->
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="visible sm:invisible">
                <a class="bg-secondary mb-8 mt-1 md:mt-0 float-right font-paragraph text-sm text-white text-center py-1 px-4 mx-auto rounded-full cursor-pointer hover:bg-secondaryhover transition-colors duration-300" href="/Home/rekomendasi">
                    Lihat Semua Rekomendasi
                    <img src="/img/icon/panah.png" alt="" class="float-right pl-2">
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
            <div class="flex items-start">
                <div class="font-bold text-primary w-3/12 md:w-2/12 lg:w-1/12 lg:pb-2">Instansi :</div>
                <div class="w-9/12 md:w-10/12 lg:w-11/12 lg:ml-5"><?= $tempat_kerja->nama_instansi ?></div>
            </div>
            <div class="flex items-start">
                <div class="font-bold text-primary w-3/12 md:w-2/12 lg:w-1/12 lg:pb-2">Alamat : </div>
                <div class="w-9/12 md:w-10/12 lg:w-11/12 lg:ml-5"><?= $tempat_kerja->alamat_instansi ?></div>
            </div>
            <div class="flex items-start">
                <div class="font-bold text-primary w-3/12 md:w-2/12 lg:w-1/12 lg:pb-2">Telp : </div>
                <div class="w-9/12 md:w-10/12 lg:w-11/12 lg:ml-5"><?= $tempat_kerja->telp_instansi ?></div>
            </div>
            <div class="flex items-start">
                <div class="font-bold text-primary w-3/12 md:w-2/12 lg:w-1/12 lg:pb-2">Faks : </div>
                <div class="w-9/12 md:w-10/12 lg:w-11/12 lg:ml-5"><?= $tempat_kerja->faks_instansi ?></div>
            </div>
            <div class="flex items-start">
                <div class="font-bold text-primary w-3/12 md:w-2/12 lg:w-1/12 lg:pb-2">Email : </div>
                <div class="w-9/12 md:w-10/12 lg:w-11/12 lg:ml-5"><?= $tempat_kerja->email_instansi ?></div>
            </div>
        </div>
    </div>
    <hr class="visible sm:invisible border-primary border-opacity-75 w-4/5 object-center mx-auto mt-8">
</div>
<!-- Akhir Informasi Intsansi -->

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

<!-- Awal Riwayat Pendidikan -->
<div class="w-full my-8 lg:px-20 md:px-8 px-2 mb-6 md:mb-12">
    <h3 class="font-heading font-bold text-xl text-secondary">Riwayat Pendidikan</h3>
    <div class="lg:px-16">
        <div class="md:shadow-lg lg:shadow-xl rounded-3xl w-full mx-auto mt-5">
            <div class="overflow-x-scroll md:overflow-x-hidden">
                <table class="table-auto font-paragraph text-black  ">
                    <thead>
                        <tr>
                            <th class="bg-gray-100 border-b-2 border-gray-200 rounded-tl-xl lg:rounded-tl-3xl text-sm text-left pl-3 lg:pl-5 lg:pr-3 py-2 md:py-3 lg:py-4">Jenjang Pendidikan</th>
                            <th class="bg-gray-100 border-b-2 border-gray-200 text-sm text-left pl-3 lg:pl-5 pr-12 md:pr-0 py-2 md:py-3 lg:py-4">Univeristas</th>
                            <th class="bg-gray-100 border-b-2 border-gray-200 text-sm text-left pl-3 lg:pl-5 pr-12 md:pr-0 py-2 md:py-3 lg:py-4">Program Studi</th>
                            <th class="bg-gray-100 border-b-2 border-gray-200 text-sm text-left pl-3 lg:pl-5 lg:pr-1 py-2 md:py-3 lg:py-4">Tahun Masuk</th>
                            <th class="bg-gray-100 border-b-2 border-gray-200 text-sm text-left pl-3 lg:pl-5 lg:pr-2 py-2 md:py-3 lg:py-4">Tahun Lulus</th>
                            <th class="bg-gray-100 border-b-2 border-gray-200 rounded-tr-xl lg:rounded-tr-3xl text-sm text-left pl-3 pr-32 md:pr-24 lg:pr-80 lg:pl-5 py-2 md:py-3 lg:py-4">Judul Tulisan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pendidikan as $row) : ?>
                            <tr>
                                <td class="text-sm text-left border-b-2 border-gray-200 px-3 lg:px-5 py-2 md:py-3 lg:py-4"><?= $row->jenjang; ?></td>
                                <td class="text-sm text-left border-b-2 border-gray-200 px-3 lg:px-5 py-2 md:py-3 lg:py-4"><?= $row->instansi; ?></td>
                                <td class="text-sm text-left border-b-2 border-gray-200 px-3 lg:px-5 py-2 md:py-3 lg:py-4"><?= $row->program_studi; ?></td>
                                <td class="text-sm text-left border-b-2 border-gray-200 px-3 lg:px-5 py-2 md:py-3 lg:py-4"><?= $row->tahun_masuk; ?></td>
                                <td class="text-sm text-left border-b-2 border-gray-200 px-3 lg:px-5 py-2 md:py-3 lg:py-4"><?= $row->tahun_lulus; ?></td>
                                <td class="text-sm text-left border-b-2 border-gray-200 px-3 lg:px-5 py-2 md:py-3 lg:py-4"><?= $row->judul_tulisan; ?></td>
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

<?= $this->endSection(); ?>
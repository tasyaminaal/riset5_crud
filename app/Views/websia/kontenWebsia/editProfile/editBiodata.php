<?php
if ($alumni->jenis_kelamin == 'L') {
    $jk = "Laki-laki";
} else if ($alumni->jenis_kelamin == 'P') {
    $jk = "Perempuan";
}

if ($alumni->status_bekerja == '1') {
    $status_bekerja = "Bekerja";
} else if ($alumni->status_bekerja == '0') {
    $status_bekerja = "Tidak bekerja";
}

if ($alumni->aktif_pns == '1') {
    $aktif_pns = "Aktif sebagai PNS";
} else if ($alumni->aktif_pns == '0') {
    $aktif_pns = "Tidak aktif sebagai PNS";
}
?>
<?= $this->extend('websia/kontenWebsia/editProfile/layoutEdit.php'); ?>

<?= $this->section('contentEdit'); ?>
<div class="shadow-2xl rounded-3xl mb-8">
    <div class="lg:grid lg:grid-cols-3 lg:gap-x-4">
        <!-- start foto profil -->
        <div class="p-6">
            <div class="flex items-center justify-center lg:flex-none">
                <div class="md:w-2/3 w-1/2 lg:w-full">
                    <div class="flex justify-center">
                        <img src="/img/<?= $alumni->foto_profil ?>" alt="" class="mb-6 md:w-48 md:h-48 w-28 h-28 rounded-full">
                    </div>
                    <div class="flex justify-center">
                        <button class="updateFotoProfil bg-secondary rounded-full font-paragraph text-white px-3 py-1 hover:bg-secondaryhover lg:text-base text-sm focus:outline-none">Ubah foto profil</button>
                    </div>
                </div>
                <div class="mt-8 flex justify-center editTampilan hidden lg:absolute lg:top-80">
                    <div>
                        <div class="shadow-xl rounded-lg p-3">
                            <p class="font-heading font-medium text-sm">Keterangan:</p>
                            <div class="flex gap-x-2 items-center">
                                <input type="checkbox" checked onclick="return false;" onkeydown="return false;" class="focus:outline-none">
                                <p class="font-heading font-medium text-xs">Tampilkan</p>
                            </div>
                            <div class="flex gap-x-2 items-center">
                                <input type="checkbox" onclick="return false" class="focus:outline-none">
                                <p class="font-heading font-medium text-xs">Sembunyikan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end foto profil -->
        <div class="col-span-2 md:mt-6 ml-6 mr-6">
            <!-- start form edit -->
            <form action="/User/updateProfil" method="POST" class="font-paragraph text-primary lg:col-span-3" id="formEditBiodata">
                <div class="flex justify-between items-end">
                    <div class="font-medium">Nama Lengkap:</div>
                    <div class="bg-secondary hover:bg-secondaryhover text-white lg:py-1.5 py-1 px-3 lg:text-sm text-xs outline-none cursor-pointer rounded-full" id="buttonEditTampilan">
                        Edit Tampilan
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="lg:w-4 w-3 inline">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                    </div>
                </div>
                <div class="text-black font-heading font-normal mb-2"><?= $alumni->nama ?></div>
                <div class="grid grid-cols-2 gap-x-4 mr-6">
                    <div>
                        <div class="font-medium">NIM:</div>
                        <div class="text-black font-heading font-normal mb-2"><?= $alumni->nim ?></div>
                    </div>
                    <div>
                        <div class="font-medium">Angkatan:</div>
                        <div class="text-black font-heading font-normal mb-2"><?= $alumni->angkatan ?></div>
                    </div>
                </div>
                <div class="mb-2">
                    <div class="flex justify-between items-center">
                        <div class="font-medium">Jenis Kelamin:</div>
                        <input type="checkbox" name="checkJenisKelamin" id="checkJenisKelamin" class="cursor-pointer focus:outline-none editTampilan hidden">
                    </div>
                    <div class="text-black font-heading font-normal mb-2"><?= $jk ?></div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-x-4 md:mr-6">
                    <div>
                        <div class="flex justify-between items-center lg:mr-2">
                            <div class="font-medium">Tempat Lahir:</div>
                            <input type="checkbox" name="checkTempatLahir" id="checkTempatLahir" class="cursor-pointer focus:outline-none md:-mr-1 editTampilan hidden">
                        </div>
                        <div class="text-black font-heading font-normal mb-2"><?= $alumni->tempat_lahir ?></div>
                    </div>
                    <div>
                        <div class="flex justify-between items-center">
                            <div class="font-medium">Tanggal Lahir:</div>
                            <input type="checkbox" name="checkTanggalLahir" id="checkTanggalLahir" class="cursor-pointer focus:outline-none md:-mr-6 editTampilan hidden">
                        </div>
                        <div class="text-black font-heading font-normal mb-2"><?= DATE("d M Y", strtotime($alumni->tanggal_lahir)) ?></div>
                    </div>
                </div>
                <div class="flex justify-between items-center md:mr-6">
                    <label for="notelepon" class="font-medium">No. Telepon:</label>
                    <input type="checkbox" name="checkTelepon" id="checkTelepon" class="cursor-pointer focus:outline-none md:-mr-6 editTampilan hidden">
                </div>
                <div class="lg:w-1/2">
                    <div class="lg:mr-6">
                        <?php if (session('inputs')) { ?>
                            <input type="text" name="telp_alumni" id="notelepon" class="inputForm" placeholder="Nomor telfon WA aktif" value="<?= session('inputs')['telp_alumni'] ?>" required>
                        <?php } else { ?>
                            <input type="text" name="telp_alumni" id="notelepon" class="inputForm" placeholder="Nomor telfon WA aktif" value="<?= $alumni->telp_alumni ?>" required>
                        <?php } ?>
                    </div>
                </div>
                <div class="flex justify-between items-center md:mr-6">
                    <label for="email" class="font-medium">Email:</label>
                    <input type="checkbox" name="checkEmail" id="checkEmail" class="cursor-pointer focus:outline-none md:-mr-6 editTampilan hidden">
                </div>
                <div class="lg:w-1/2">
                    <div class="lg:mr-6">
                        <?php if (session('inputs')) { ?>
                            <input type="email" name="email" id="email" class="inputForm" placeholder="Alamat email aktif" value="<?= session('inputs')['email'] ?>" required>
                        <?php } else { ?>
                            <input type="email" name="email" id="email" class="inputForm" placeholder="Alamat email aktif" value="<?= $alumni->email ?>" required>
                        <?php } ?>
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <label for="alamat" class="font-medium">Alamat:</label>
                    <input type="checkbox" name="checkAlamat" id="checkAlamat" class="cursor-pointer focus:outline-none editTampilan hidden">
                </div>
                <div>
                    <?php if (session('inputs')) { ?>
                        <textarea name="alamat" id="alamat" cols="50" rows="3" placeholder="Alamat saat ini" class="inputForm resize-none" required><?= session('inputs')['alamat'] ?></textarea>
                    <?php } else { ?>
                        <textarea name="alamat" id="alamat" cols="50" rows="3" placeholder="Alamat saat ini" class="inputForm resize-none" required><?= $alumni->alamat ?></textarea>
                    <?php } ?>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-x-4 md:mr-6">
                    <div>
                        <div class="font-medium">Status Bekerja di BPS:</div>
                        <div class="text-black font-heading font-normal mb-2"><?= $status_bekerja ?></div>
                    </div>
                    <div>
                        <div class="font-medium">Aktif PNS:</div>
                        <div class="text-black font-heading font-normal mb-2"><?= $aktif_pns ?></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between items-center">
                        <div class="font-medium">Jabatan Terakhir:</div>
                        <input type="checkbox" name="checkJabatan" id="checkJabatan" class="cursor-pointer focus:outline-none editTampilan hidden">
                    </div>
                    <div class="text-black font-heading font-normal mb-2"><?= $alumni->jabatan_terakhir ?></div>
                </div>
                <div>
                    <div class="font-medium">Perkiraan Tahun Pensiun:</div>
                    <div class="text-black font-heading font-normal mb-2"><?= $alumni->perkiraan_pensiun ?></div>
                </div>
                <div>
                    <div class="font-medium mb-2">Akun Media Sosial:</div>
                    <div class="w-full">
                        <div class="flex items-center mb-2">
                            <div class="md:w-1/4 w-1/3">
                                <label for="instagram" class="font-medium">Instagram</label>
                            </div>
                            <div class="md:w-3/4 w-2/3 gap-x-3 flex justify-between items-center">
                                <?php if (session('inputs')) { ?>
                                    <input type="text" name="ig" id="instagram" class="w-full md:p-2 p-1 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary text-black" placeholder="Username Instagram tanpa tanda (@)" value="<?= session('inputs')['ig'] ?>">

                                <?php } else { ?>
                                    <input type="text" name="ig" id="instagram" class="w-full md:p-2 p-1 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary text-black" placeholder="Username Instagram tanpa tanda (@)" value="<?= $alumni->ig ?>">
                                <?php } ?>
                                <input type="checkbox" name="checkInstagram" id="checkInstagram" class="cursor-pointer focus:outline-none editTampilan hidden">
                            </div>
                        </div>
                        <div class="flex items-center mb-2">
                            <div class="md:w-1/4 w-1/3">
                                <label for="twitter" class="font-medium">Twitter</label>
                            </div>
                            <div class="md:w-3/4 w-2/3 gap-x-3 flex justify-between items-center">
                                <?php if (session('inputs')) { ?>
                                    <input type="text" name="twitter" id="twitter" class="w-full md:p-2 p-1 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary text-black" placeholder="Username Twitter" value="<?= session('inputs')['twitter'] ?>">
                                <?php } else { ?>
                                    <input type="text" name="twitter" id="twitter" class="w-full md:p-2 p-1 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary text-black" placeholder="Username Twitter" value="<?= $alumni->twitter ?>">
                                <?php } ?>
                                <input type="checkbox" name="checkTwitter" id="checkTwitter" class="cursor-pointer focus:outline-none editTampilan hidden">
                            </div>
                        </div>
                        <div class="flex items-center mb-2">
                            <div class="md:w-1/4 w-1/3">
                                <label for="facebook" class="font-medium">Facebook</label>
                            </div>
                            <div class="md:w-3/4 w-2/3 gap-x-3 flex justify-between items-center">
                                <?php if (session('inputs')) { ?>
                                    <input type="text" name="fb" id="facebook" class="w-full md:p-2 p-1 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary text-black" placeholder="Nama Akun Facebook" value="<?= session('inputs')['fb'] ?>">
                                <?php } else { ?>
                                    <input type="text" name="fb" id="facebook" class="w-full md:p-2 p-1 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary text-black" placeholder="Nama Akun Facebook" value="<?= $alumni->fb ?>">
                                <?php } ?>
                                <input type="checkbox" name="checkFacebook" id="checkFacebook" class="cursor-pointer focus:outline-none editTampilan hidden">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end mt-8 mb-6">
                    <input type="submit" value="SIMPAN" class="w-24 text-center py-1 bg-secondary hover:bg-secondaryhover text-white rounded-full cursor-pointer mb-6 focus:outline-none" id="submitBiodata">
                </div>
            </form>
            <!-- end form edit -->
        </div>
    </div>
</div>

<!-- dialog box di edit biodata -->
<!-- kalau mau ngecek hilangin kelas hidden sama opacity-0 nya-->

<?php if (session()->getFlashdata('edit-foto-success')) { ?>
    <!-- BERHASIL ubah foto -->
    <div id="berhasilUpdateFoto" class="dialogBox">
        <div class="fixed top-0 bottom-0 right-0 left-0 z-50 bg-black bg-opacity-40 flex flex-col justify-end">
            <div class=" duration-300 transition-all p-2 pl-8 flex items-center" style="background-color: #B1FF66;">
                <img src="/img/icon/check.png" class="h-5 mr-2" style="color: #54AC00;">
                <p class="sm:text-base text-sm font-heading font-bold text-success"><?= session()->getFlashdata('edit-foto-success') ?></p>
            </div>
        </div>
    </div>
    <script>
        $(document).click(function() {
            $('#berhasilUpdateFoto').fadeOut();
        })
    </script>
<?php }
if (session()->getFlashdata('edit-foto-fail')) { ?>
    <!-- GAGAL ubah foto -->
    <div class="fixed top-0 bottom-0 right-0 left-0 z-50 bg-black bg-opacity-40 flex flex-col justify-end" id="gagalUpdateFoto">
        <div class="duration-300 transition-all p-2 pl-8 flex items-center" style="background-color: #FF7474;">
            <img src="/img/icon/warning.png" class="h-5 mr-2">
            <p class="sm:text-base text-sm font-heading font-bold" style="color: #C51800;">Foto Profil Tidak Berhasil Diubah : <?= session()->getFlashdata('edit-foto-fail') ?></p>
        </div>
    </div>
    <script>
        $(document).click(function() {
            $('#gagalUpdateFoto').fadeOut();
        })
    </script>
<?php }
if (session()->getFlashdata('edit-bio-success')) { ?>

    <!-- BERHASIL update biodata -->
    <div id="berhasilUpdateBiodata">
        <div class="fixed top-0 bottom-0 right-0 left-0 z-50 flex justify-center items-center bg-black bg-opacity-40">
            <div class="duration-700 transition-all p-3 rounded-lg flex items-center" style="background-color: #B1FF66;">
                <img src="/img/icon/check.png" class="h-5 mr-2" style="color: #54AC00;">
                <p class="sm:text-base text-sm font-heading font-bold text-success"><?= session()->getFlashdata('edit-bio-success') ?></p>
            </div>
        </div>
    </div>
    <script>
        $(document).click(function() {
            $('#berhasilUpdateBiodata').fadeOut();
        })
    </script>
<?php }
if (session()->getFlashdata('edit-bio-fail')) { ?>
    <!-- GAGAL update biodata -->
    <div id="gagalUpdateBiodata">
        <div class="fixed top-0 bottom-0 right-0 left-0 z-50 flex justify-center items-center bg-black bg-opacity-40">
            <div class="duration-700 transition-all p-3 rounded-lg flex items-center" style="background-color: #FF7474;">
                <img src="/img/icon/warning.png" class="h-5 mr-2">
                <p class="sm:text-base text-sm font-heading font-bold" style="color: #C51800;"><?= session()->getFlashdata('edit-bio-fail') ?></p>
            </div>
        </div>
    </div>
    <script>
        $(document).click(function() {
            $('#gagalUpdateBiodata').fadeOut();
        })
    </script>
<?php }
if (session()->getFlashdata('hapus-foto') != NULL) { ?>
    <!-- HAPUS foto biodata -->
    <div id="berhasilHapusFoto">
        <div class="fixed top-0 bottom-0 right-0 left-0 z-50 flex justify-center items-center bg-black bg-opacity-40">
            <div class="duration-700 transition-all p-3 rounded-lg flex items-center" style="background-color: #B1FF66;">
                <img src="/img/icon/check.png" class="h-5 mr-2" style="color: #54AC00;">
                <p class="sm:text-base text-sm font-heading font-bold text-success"><?= session()->getFlashdata('hapus-foto') ?></p>
            </div>
        </div>
    </div>
    <script>
        $(document).click(function() {
            $('#berhasilHapusFoto').fadeOut();
        })
    </script>
<?php } ?>

<!-- end dialog box -->
<?= $this->endSection(); ?>
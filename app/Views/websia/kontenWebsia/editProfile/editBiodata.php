<?php
if ($alumni->jenis_kelamin == 'L') {
    $centangL = 'checked';
    $centangP = '';
} else if ($alumni->jenis_kelamin == 'P') {
    $centangL = '';
    $centangP = 'checked';
}

if ($alumni->status_bekerja == '1') {
    $centang1 = 'checked';
    $centang0 = '';
} else if ($alumni->status_bekerja == '0') {
    $centang1 = '';
    $centang0 = 'checked';
}

if ($alumni->aktif_pns == '1') {
    $centangA = 'checked';
    $centangB = '';
} else if ($alumni->aktif_pns == '0') {
    $centangA = '';
    $centangB = 'checked';
}
?>
<?= $this->extend('websia/kontenWebsia/editProfile/layoutEdit.php'); ?>

<?= $this->section('contentEdit'); ?>
<div class="shadow-2xl rounded-3xl">
    <div class="md:grid md:grid-cols-3 md:gap-x-4">
        <div class="p-6">
            <div class="flex justify-center">
                <img src="/img/avatar.png" alt="" class="mb-6 md:w-48 w-28">
            </div>
            <div class="flex justify-center">
                <button class="updateFotoProfil bg-secondary rounded-full font-paragraph text-white px-3 py-1 hover:bg-secondaryhover lg:text-base text-sm">Ubah foto profil</button>
            </div>
        </div>
        <div class="col-span-2 md:mt-6 ml-6 mr-6">
            <form action="/Home/updateProfil" method="POST" class="font-paragraph text-primary" id="formEditBiodata">
                <label for="nama" class="font-medium">Nama:</label>
                <input type="text" name="nama" id="nama" class="inputForm text-black" value="<?= $alumni->nama; ?>">
                <div class="grid grid-cols-2 gap-x-4">
                    <div>
                        <div class="font-medium mb-2">NIM:</div>
                        <div class="text-black font-heading font-normal mb-2"><?= $alumni->nim ?></div>
                    </div>
                    <div>
                        <div class="font-medium mb-2">Angkatan:</div>
                        <div class="text-black font-heading font-normal mb-2"><?= $alumni->angkatan ?></div>
                    </div>
                </div>
                <div class="lg:w-1/2 lg:mr-4 mb-2">
                    <label for="jenis_kelamin" class="font-medium mb-2">Jenis Kelamin:</label>
                    <div class="grid grid-cols-2 gap-x-2">
                        <div class="flex items-center">
                            <label class="font-heading text-sm text-gray-500 font-medium jk_label"><input type="radio" name="jenis_kelamin" id="lakilaki" value="L" class="cursor-pointer jk_radio mr-2 mt-2" <?= $centangL; ?>>Laki-laki</label>
                        </div>
                        <div class="flex items-center">
                            <label class="font-heading text-sm text-gray-500 font-medium jk_label"><input type="radio" name="jenis_kelamin" id="perempuan" value="P" class="cursor-pointer jk_radio mr-2 mt-2" <?= $centangP; ?> >Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-x-4">
                    <div>
                        <label for="tempat_lahir" class="font-medium">Tempat Lahir:</label>
                        <div class="text-black font-heading font-normal mb-2"><?= $alumni->tempat_lahir ?></div>
                    </div>
                    <div>
                        <label for="tanggal_lahir" class="font-medium">Tanggal Lahir:</label>
                        <input type="date" name="tanggal_lahir" id="tanggallahir" class="inputForm" value="<?= $alumni->tanggal_lahir; ?>" disabled>
                    </div>
                </div>
                <div class="lg:w-1/2 lg:mb-2">
                    <div class="lg:mr-2">
                        <label for="telp_alumni" class="font-medium">No. Telepon:</label>
                        <input type="text" name="telp_alumni" id="notelepon" class="inputForm" value="<?= $alumni->telp_alumni; ?>">
                        <label for="email" class="font-medium">Email:</label>
                        <div class="text-black font-heading font-normal mb-2"><?= $email ?></div>
                    </div>
                </div>
                <label for="alamat" class="font-medium">Alamat:</label>
                <textarea name="alamat" id="alamat" cols="50" rows="3"><?= $alumni->alamat ?></textarea>
                <div class="lg:w-1/2 lg:mr-4">
                    <label for="status_bekerja" class="font-medium">Status Bekerja:</label>
                    <div class="grid grid-cols-2 gap-x-2 mb-2">
                        <div class="flex items-center">
                            <label class="font-heading text-sm text-gray-500 font-medium sb_label"><input type="radio" name="status_bekerja" id="bekerja" value="1" class="cursor-pointer sb_radio mr-2 mt-2" <?= $centang1; ?>>Bekerja</label>
                        </div>
                        <div class="flex items-center">
                            <label class="font-heading text-sm text-gray-500 font-medium sb_label"><input type="radio" name="status_bekerja" id="tidakbekerja" value="0" class="cursor-pointer sb_radio mr-2 mt-2" <?= $centang0; ?> >Tidak Bekerja</label>
                        </div>
                    </div>
                    <div class="mr-2">
                        <label for="perkiraan_pensiun" class="font-medium">Perkiraan Tahun Pensiun:</label>
                        <input type="number" name="perkiraan_pensiun" id="tahunpensiun" min="1990" max="2100" class="inputForm" value="<?= $alumni->perkiraan_pensiun; ?>">
                        <label for="jabatan" class="font-medium">Jabatan Terakhir:</label>
                        <input type="text" name="jabatan_terakhir" id="jabatan" class="inputForm" value="<?= $alumni->jabatan_terakhir; ?>">
                    </div>
                    <label for="aktif_pns" class="font-medium">Aktif PNS:</label>
                    <div class="grid grid-cols-2 gap-x-2 mb-2">
                        <div class="flex items-center">
                            <label class="font-heading text-sm text-gray-500 font-medium sp_label"><input type="radio" name="aktif_pns" id="aktif" value="1" class="cursor-pointer sp_radio mr-2 mt-2" <?= $centangA; ?>>Aktif</label>
                        </div>
                        <div class="flex items-center">
                            <label class="font-heading text-sm text-gray-500 font-medium sp_label"><input type="radio" name="aktif_pns" id="tidakaktif" value="0" class="cursor-pointer sp_radio mr-2 mt-2" <?= $centangB; ?>>Tidak Aktif</label>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="font-medium mb-2">Akun Media Sosial:</div>
                    <div class="w-full lg:w-3/4">
                        <div class="flex items-center mb-2">
                            <div class="md:w-1/4 w-1/3">
                                <label for="instagram" class="font-medium">Instagram</label>
                            </div>
                            <div class="md:w-3/4 w-2/3">
                                <input type="text" name="instagram" id="instagram" class="w-full md:p-2 p-1 border-2 border-gray-200 rounded-lg" placeholder="Username Instagram">
                            </div>
                        </div>
                        <div class="flex items-center mb-2">
                            <div class="md:w-1/4 w-1/3">
                                <label for="twitter" class="font-medium">Twitter</label>
                            </div>
                            <div class="md:w-3/4 w-2/3">
                                <input type="text" name="twitter" id="twitter" class="w-full md:p-2 p-1 border-2 border-gray-200 rounded-lg" placeholder="Username Twitter">
                            </div>
                        </div>
                        <div class="flex items-center mb-2">
                            <div class="md:w-1/4 w-1/3">
                                <label for="facebook" class="font-medium">Facebook</label>
                            </div>
                            <div class="md:w-3/4 w-2/3">
                                <input type="text" name="facebook" id="facebook" class="w-full md:p-2 p-1 border-2 border-gray-200 rounded-lg" placeholder="Nama Akun Facebook">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end mt-8 mb-6">
                    <input type="submit" value="SIMPAN" class="w-24 text-center py-1 bg-secondary hover:bg-secondaryhover text-white rounded-full cursor-pointer mb-6" id="submitBiodata">
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

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
            <div class="flex justify-center">
                <img src="/img/fotoProfil/<?= $alumni->foto_profil ?>" alt="" class="mb-6 md:w-48 md:h-48 w-28 h-28 rounded-full">
            </div>
            <div class="flex justify-center">
                <button class="updateFotoProfil bg-secondary rounded-full font-paragraph text-white px-3 py-1 hover:bg-secondaryhover lg:text-base text-sm focus:outline-none">Ubah foto profil</button>
            </div>
        </div>
        <!-- end foto profil -->
        <div class="col-span-2 md:mt-6 ml-6 mr-6">
            <!-- start form edit -->
            <form action="/User/updateProfil" method="POST" class="font-paragraph text-primary" id="formEditBiodata">
                <div class="font-medium">Nama Lengkap:</div>
                <div class="text-black font-heading font-normal mb-2"><?= $alumni->nama ?></div>
                <div class="grid grid-cols-2 gap-x-4">
                    <div>
                        <div class="font-medium">NIM:</div>
                        <div class="text-black font-heading font-normal mb-2"><?= $alumni->nim ?></div>
                    </div>
                    <div>
                        <div class="font-medium">Angkatan:</div>
                        <div class="text-black font-heading font-normal mb-2"><?= $alumni->angkatan ?></div>
                    </div>
                </div>
                <div class="lg:w-1/2 lg:mr-4 mb-2">
                    <div class="font-medium">Jenis Kelamin:</div>
                    <div class="text-black font-heading font-normal mb-2"><?= $jk ?></div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-x-4">
                    <div>
                        <div class="font-medium">Tempat Lahir:</div>
                        <div class="text-black font-heading font-normal mb-2"><?= $alumni->tempat_lahir ?></div>
                    </div>
                    <div>
                        <div class="font-medium">Tanggal Lahir:</div>
                        <div class="text-black font-heading font-normal mb-2"><?= DATE("d M Y", strtotime($alumni->tanggal_lahir)) ?></div>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <div class="lg:mr-2">
                        <label for="notelepon" class="font-medium">No. Telepon:</label>
                        <input type="text" name="telp_alumni" id="notelepon" class="inputForm" placeholder="Nomor telfon WA aktif" value="<?= $alumni->telp_alumni ?>">
                        <label for="email" class="font-medium">Email:</label>
                        <input type="email" name="email" id="email" class="inputForm" placeholder="Alamat email aktif" value="<?= $alumni->email ?>">
                    </div>
                </div>
                <label for="alamat" class="font-medium">Alamat:</label>
                <textarea name="alamat" id="alamat" cols="50" rows="3" placeholder="Alamat saat ini" class="inputForm resize-none"><?= $alumni->alamat ?></textarea>
                <div class="grid grid-cols-2 gap-x-4">
                    <div>
                        <div class="font-medium">Status Bekerja:</div>
                        <div class="text-black font-heading font-normal mb-2"><?= $status_bekerja ?></div>
                    </div>
                    <div>
                        <div class="font-medium">Aktif PNS:</div>
                        <div class="text-black font-heading font-normal mb-2"><?= $aktif_pns ?></div>
                    </div>
                </div>
                <div>
                    <div class="font-medium">Jabatan Terakhir:</div>
                    <div class="text-black font-heading font-normal mb-2"><?= $alumni->jabatan_terakhir ?></div>
                </div>
                <div>
                    <div class="font-medium">Perkiraan Tahun Pensiun:</div>
                    <div class="text-black font-heading font-normal mb-2"><?= $alumni->perkiraan_pensiun ?></div>
                </div>
                <div>
                    <div class="font-medium mb-2">Akun Media Sosial:</div>
                    <div class="w-full lg:w-3/4">
                        <div class="flex items-center mb-2">
                            <div class="md:w-1/4 w-1/3">
                                <label for="instagram" class="font-medium">Instagram</label>
                            </div>
                            <div class="md:w-3/4 w-2/3">
                                <input type="text" name="ig" id="instagram" class="w-full md:p-2 p-1 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary text-black" placeholder="Username Instagram tanpa memakai (@)" value="<?= $alumni->ig ?>">
                            </div>
                        </div>
                        <div class="flex items-center mb-2">
                            <div class="md:w-1/4 w-1/3">
                                <label for="twitter" class="font-medium">Twitter</label>
                            </div>
                            <div class="md:w-3/4 w-2/3">
                                <input type="text" name="twitter" id="twitter" class="w-full md:p-2 p-1 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary text-black" placeholder="Username Twitter" value="<?= $alumni->twitter ?>">
                            </div>
                        </div>
                        <div class="flex items-center mb-2">
                            <div class="md:w-1/4 w-1/3">
                                <label for="facebook" class="font-medium">Facebook</label>
                            </div>
                            <div class="md:w-3/4 w-2/3">
                                <input type="text" name="fb" id="facebook" class="w-full md:p-2 p-1 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary text-black" placeholder="Nama Akun Facebook" value="<?= $alumni->fb ?>">
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
<?= $this->endSection(); ?>
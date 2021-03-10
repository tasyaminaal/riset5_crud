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
<div class="shadow-2xl rounded-3xl mb-8">
    <div class="lg:grid lg:grid-cols-3 lg:gap-x-4">
        <!-- start foto profil -->
        <div class="p-6">
            <div class="flex justify-center">
                <img src="https://demos.creative-tim.com/tailwindcss-starter-project/_next/static/images/team-1-800x800-fa5a7ac2c81a43925586ea85f2fea332.jpg" alt="" class="mb-6 md:w-48 md:h-48 w-28 h-28 rounded-full">
            </div>
            <div class="flex justify-center">
                <button class="updateFotoProfil bg-secondary rounded-full font-paragraph text-white px-3 py-1 hover:bg-secondaryhover lg:text-base text-sm focus:outline-none">Ubah foto profil</button>
            </div>
        </div>
        <!-- end foto profil -->
        <div class="col-span-2 md:mt-6 ml-6 mr-6">
            <!-- start form edit -->
            <form action="" method="POST" class="font-paragraph text-primary" id="formEditBiodata">
                <div class="font-medium">Nama Lengkap:</div>
                <div class="text-black font-heading font-normal mb-2">Ini Nama Lengkap</div>
                <div class="grid grid-cols-2 gap-x-4">
                    <div>
                        <div class="font-medium">NIM:</div>
                        <div class="text-black font-heading font-normal mb-2">XXXXXXXXX</div>
                    </div>
                    <div>
                        <div class="font-medium">Angkatan:</div>
                        <div class="text-black font-heading font-normal mb-2">XX</div>
                    </div>
                </div>
                <div class="lg:w-1/2 lg:mr-4 mb-2">
                    <div class="font-medium">Jenis Kelamin:</div>
                    <div class="text-black font-heading font-normal mb-2">Laki-laki</div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-x-4">
                    <div>
                        <div class="font-medium">Tempat Lahir:</div>
                        <div class="text-black font-heading font-normal mb-2">Indonesia</div>
                    </div>
                    <div>
                        <div class="font-medium">Tanggal Lahir:</div>
                        <div class="text-black font-heading font-normal mb-2">29 Februari 2000</div>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <div class="lg:mr-2">
                        <label for="notelepon" class="font-medium">No. Telepon:</label>
                        <input type="text" name="notelepon" id="notelepon" class="inputForm" placeholder="08999339379">
                        <label for="email" class="font-medium">Email:</label>
                        <input type="email" name="email" id="email" class="inputForm" placeholder="iniemail@stis.ac.id">
                    </div>
                </div>
                <label for="alamat" class="font-medium">Alamat:</label>
                <textarea name="alamat" id="alamat" cols="50" rows="3" placeholder="Jl. Terwilen Margodadi, Seyegan, Kregolan, Margomulyo, Kec. Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55561" class="inputForm resize-none"></textarea>
                <div class="lg:w-1/2 lg:mr-4">
                    <label for="statusbekerja" class="font-medium">Status Bekerja:</label>
                    <div class="grid grid-cols-2 gap-x-2 mb-2">
                        <div class="flex items-center">
                            <label class="font-heading text-sm text-gray-500 font-medium sb_label cursor-pointer"><input type="radio" name="statusbekerja" id="bekerja" value="bekerja" class="cursor-pointer sb_radio mr-2">Bekerja</label>
                        </div>
                        <div class="flex items-center">
                            <label class="font-heading text-sm text-gray-500 font-medium sb_label cursor-pointer"><input type="radio" name="statusbekerja" id="tidakbekerja" value="tidakbekerja" class="cursor-pointer sb_radio mr-2">Tidak Bekerja</label>
                        </div>
                    </div>
                    <div class="mr-2">
                        <div class="font-medium">Perkiraan Tahun Pensiun:</div>
                        <div class="text-black font-heading font-normal mb-2">2056</div>
                        <label for="jabatan" class="font-medium">Jabatan Terakhir:</label>
                        <input type="text" name="jabatan" id="jabatan" class="inputForm" placeholder="Jabatan terakhir">
                    </div>
                    <label for="pns" class="font-medium">Aktif PNS:</label>
                    <div class="grid grid-cols-2 gap-x-2 mb-2">
                        <div class="flex items-center">
                            <label class="font-heading text-sm text-gray-500 font-medium sp_label cursor-pointer"><input type="radio" name="statuspns" id="aktif" value="aktif" class="cursor-pointer sp_radio mr-2">Aktif</label>
                        </div>
                        <div class="flex items-center">
                            <label class="font-heading text-sm text-gray-500 font-medium sp_label cursor-pointer"><input type="radio" name="statuspns" id="tidakaktif" value="tidakaktif" class="cursor-pointer sp_radio mr-2">Tidak Aktif</label>
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
                                <input type="text" name="instagram" id="instagram" class="w-full md:p-2 p-1 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary text-black" placeholder="Username Instagram">
                            </div>
                        </div>
                        <div class="flex items-center mb-2">
                            <div class="md:w-1/4 w-1/3">
                                <label for="twitter" class="font-medium">Twitter</label>
                            </div>
                            <div class="md:w-3/4 w-2/3">
                                <input type="text" name="twitter" id="twitter" class="w-full md:p-2 p-1 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary text-black" placeholder="Username Twitter">
                            </div>
                        </div>
                        <div class="flex items-center mb-2">
                            <div class="md:w-1/4 w-1/3">
                                <label for="facebook" class="font-medium">Facebook</label>
                            </div>
                            <div class="md:w-3/4 w-2/3">
                                <input type="text" name="facebook" id="facebook" class="w-full md:p-2 p-1 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary text-black" placeholder="Nama Akun Facebook">
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
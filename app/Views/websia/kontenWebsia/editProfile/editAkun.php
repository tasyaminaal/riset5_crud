<?= $this->extend('websia/kontenWebsia/editProfile/layoutEdit.php'); ?>

<?= $this->section('contentEdit'); ?>
<div class="shadow-2xl rounded-3xl mb-8">
    <div class="p-6 font-paragraph text-primary lg:min-h-screen">
        <!-- start form edit akun -->
        <form action="" method="POST" id="formEditAkun">
            <!-- tambahin form actionnya ya -->
            <div class="md:w-1/2 w-full">
                <div class="font-medium">Email:</div>
                <div class="text-black font-heading font-normal mb-2">iniemail@stis.ac.id</div>
                <label for="passbaru" class="font-medium">Kata Sandi Baru:</label>
                <input type="password" name="passbaru" id="passbaru" class="inputForm" placeholder="🞄🞄🞄🞄🞄🞄🞄🞄">
                <label for="ulangpassbaru" class="font-medium">Ketik Ulang Kata Sandi Baru:</label>
                <input type="password" name="ulangpassbaru" id="ulangpassbaru" class="inputForm" placeholder="🞄🞄🞄🞄🞄🞄🞄🞄">
                <div class="text-secondary text-xs mt-6 mb-2 text-justify">Silakan Masukkan Kata Sandi Lama Anda untuk Verifikasi!</div>
                <label for="passlama" class="font-medium">Kata Sandi Lama:</label>
                <input type="password" name="passlama" id="passlama" class="inputForm" placeholder="🞄🞄🞄🞄🞄🞄🞄🞄">
            </div>
            <div class="flex justify-end md:mb-6 mt-48">
                <input type="submit" value="SIMPAN" class="w-24 text-center py-1 bg-secondary hover:bg-secondaryhover text-white rounded-full cursor-pointer focus:outline-none" id="submitAkun">
            </div>
        </form>
        <!-- end form edit akun -->
    </div>
</div>
<?= $this->endSection(); ?>
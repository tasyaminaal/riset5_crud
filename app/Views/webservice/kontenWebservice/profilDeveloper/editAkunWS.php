<?= $this->extend('webservice/kontenWebservice/profilDeveloper/layoutEditWS.php'); ?>

<?= $this->section('contentEdit'); ?>
<div class="flex justify-center">
    <div class="shadow-2xl rounded-xl md:p-16 p-4 lg:w-full w-5/6">
        <form action="" method="POST" class="font-paragraph text-primary" id="formEditAkunDev">
            <div class="lg:w-1/2 w-full">
                <label for="email" class="font-medium">Email:</label>
                <input type="text" name="email" id="email" class="inputForm mb-2" placeholder="mail@example.com">
                <label for="passbaru" class="font-medium">Kata Sandi Baru:</label>
                <input type="password" name="passbaru" id="passbaru" class="inputForm mb-2" placeholder="🞄🞄🞄🞄🞄🞄🞄🞄">
                <label for="ulangpassbaru" class="font-medium">Ketik Ulang Kata Sandi Baru:</label>
                <input type="password" name="ulangpassbaru" id="ulangpassbaru" class="inputForm mb-2" placeholder="🞄🞄🞄🞄🞄🞄🞄🞄">
                <div class="text-secondary text-justify text-xs mt-6 mb-2">
                    Silakan Masukkan Kata Sandi Lama Anda untuk Verifikasi!
                </div>
                <label for="passlama" class="font-medium">Kata Sandi Lama:</label>
                <input type="password" name="passlama" id="passlama" class="inputForm mb-2" placeholder="🞄🞄🞄🞄🞄🞄🞄🞄">
            </div>
            <div class="flex justify-end">
                <input type="submit" value="SIMPAN" class="w-24 text-center py-1 bg-secondary hover:bg-secondaryhover text-white rounded-full cursor-pointer focus:outline-none mt-8 md:text-base text-sm" id="simpanAkun">
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>
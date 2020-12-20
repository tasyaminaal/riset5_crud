<?= $this->extend('layout/templateLoginRegisterReset') ?>

<?= $this->section('content') ?>
<div class="flex flex-col justify-center flex-grow font-dmsans">
    <div class="flex flex-col items-center mx-auto p-16 w-11/12 lg:w-4/12 md:w-8/12 bg-white shadow-xl rounded-md">
        <div class="w-full flex justify-center mb-5">
            <img src="/img/checked-icon.png" alt="" class="h-20 w-20">
        </div>
        <div class="md:text-xl text-lg font-bold text-center mb-10 text-gray-700">AKUN ANDA <br> BERHASIL TERDAFTAR, <br> KLIK LOGIN <br> UNTUK MELANJUTKAN</div>
        <!-- tombol login -->
        <a href="/login" class="text-xs text-white font-bold bg-gradient-to-r from-blue-500 to-indigo-500 hover:from-blue-500 hover:to-indigo-600 py-2 px-10 mb-4 cursor-pointer rounded-md">Login</a>
        <!-- tombol login -->
    </div>
</div>
<?= $this->endSection() ?>
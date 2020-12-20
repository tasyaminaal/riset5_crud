<?= $this->extend('layout/templateLoginRegisterReset') ?>

<?php
$visibility = ''; // bisa diisi hidden untuk menonaktifkan

?>

<?= $this->section('content') ?>
<!-- konten  -->
<div class="flex flex-col justify-center flex-grow">
    <div class="flex flex-col items-center shadow-2xl rounded-xl w-11/12 lg:w-2/5 md:w-8/12 mx-auto px-1 py-5 md:py-10 px-12">

        <!-- logo sipadu -->
        <img src="/img/logo.png" alt="" class="w-28 h-28 mb-5">
        <!-- logo sipadu -->

        <div class="font-bold text-xl mb-8">Masukan Akun SIPADU</div>

        <!-- tulisan kalo akun yang dimasukkan salah untuk saat ini masih ke hidden, untuk mengnonaktifkan bisa mengisi 'hidden' pada variabel visibility di text php -->
        <div class="w-11/12 md:w-9/12 mb-2 text-sm md:text-base text-center bg-red-200 text-red-600  font-semibold p-1 rounded-lg <?= $visibility ?>">Username/password was wrong!</div>
        <!-- tulisan kalo akun yang dimasukkan salah -->

        <form action="" class="flex flex-col items-center w-full">
            <!-- username -->
            <div class="flex justify between w-11/12 md:w-9/12 mb-4">
                <label for="username" class="my-auto"> Username&nbsp;:</label>
                <div class="flex-grow ml-4">
                    <input type="text" name=" username" id="username" placeholder="username" autocomplete="off" class="shadow-md border-2 w-full h-10 rounded-lg px-3 py-2 focus:outline-none border-gray-200 focus:border-gray-700 placeholder-gray-700 text-sm align-middle" required>
                </div>
            </div>
            <!-- username -->

            <!-- password -->
            <div class="flex w-11/12 md:w-9/12 mb-6 ">
                <label for="password" class="my-auto  "> Password&nbsp;&nbsp;:</label>
                <div class="flex-grow ml-4 ">
                    <input type="password" name=" password" id="password" placeholder="type your password" autocomplete="off" class="shadow-md border-2 w-full h-10 rounded-lg px-3 py-2 focus:outline-none border-gray-200 focus:border-gray-700 placeholder-gray-700 text-sm align-middle" required>
                </div>
            </div>
            <!-- password -->

            <!-- submit -->
            <div class="flex w-11/12 md:w-9/12  ">
                <div class="w-20"></div>
                <input type="submit" value="Login" id="submit" class="text-xs text-white font-bold hover:from-blue-500 hover:to-indigo-600 py-2 px-10 mb-4 cursor-pointer bg-gradient-to-r from-blue-500 to-indigo-500 py-2 px-8 ml-4 focus:outline-none rounded-md">
            </div>
            <!-- submit -->
        </form>

    </div>
</div>
<!-- konten -->
<?= $this->endSection() ?>
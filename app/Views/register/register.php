<?= $this->extend('layout/templateLoginRegisterReset') ?>

<?php
$visibility = ''; // bisa diisi 'hidden' untuk menonaktifkan
?>

<?= $this->section('content') ?>
<div class="flex flex-col justify-center flex-grow font-dmsans bg-white">
    <div class="flex flex-col items-center mx-auto py-4 w-11/12 lg:w-6/12 md:8/12 bg-white shadow-lg rounded-md">
        <div class="text-xl uppercase font-bold mb-5 text-center">register</div>
        <div class="w-5/6 text-center">

            <!-- tulisan kalo akun yang dimasukkan salah untuk saat ini masih ke hidden, untuk mengnonaktifkan bisa mengisi 'hidden' pada variabel visibility di text php -->
            <div class="text-sm w-12/12  mb-2 text-center bg-red-200 text-red-600  font-semibold p-1 rounded-md <?= $visibility ?>">Incorrect password!</div>
            <!-- tulisan yang tampil saat konfirmasi password tidak sesuai dengan password -->

            <form action="/register/success">
                <!-- name -->
                <div class="flex justify-between  mb-4">
                    <label for="name" name="name" class="w-3/6 text-left text-sm md:text-base my-auto text-gray-700">Name :</label>
                    <input id="name" type="text" name="name" placeholder="type your name" autocomplete="off" class=" shadow-md border-2 py-2 px-3 border-gray-300 rounded-md placeholder-gray-400 text-sm align-middle w-full h-10 px-3 py-2 focus:outline-none focus:border-gray-700" required>
                </div>
                <!-- name -->

                <!-- username -->
                <div class="flex justify-between mb-4">
                    <label for="username" name="username" class="w-3/6 text-left text-sm md:text-base my-auto text-gray-700">Username :</label>
                    <input id="username" type="text" name="username" placeholder="type your username" autocomplete="off" class="shadow-md border-2 py-2 px-3 border-gray-300 rounded-md placeholder-gray-400 text-sm align-middle w-full h-10 px-3 py-2 focus:outline-none focus:border-gray-700 " required>
                </div>
                <!-- username -->

                <!-- email -->
                <div class="flex justify-between mb-4">
                    <label for="email" name="email" class="w-3/6 text-left text-sm md:text-base my-auto text-gray-700">Email :</label>
                    <input id="email" type="text" name="email" placeholder="type your e-mail address" autocomplete="off" class="shadow-md border-2 py-2 px-3 border-gray-300 rounded-md placeholder-gray-400 text-sm align-middle w-full h-10 px-3 py-2 focus:outline-none focus:border-gray-700 " required>
                </div>
                <!-- email -->

                <!-- password -->
                <div class="flex justify-between mb-4">
                    <label for="password" name="password" class="w-3/6 text-left text-sm md:text-base my-auto text-gray-700">Password :</label>
                    <input id="password" type="password" name="password" placeholder="type your new password" autocomplete="off" class="shadow-md border-2 py-2 px-3 border-gray-300 rounded-md placeholder-gray-400 text-sm align-middle w-full h-10 px-3 py-2 focus:outline-none focus:border-gray-700 " required>
                </div>
                <!-- password -->

                <!-- konfirmasi password -->
                <div class="flex justify-between mb-8">
                    <label for="confirmPassword" name="confirmPassword" class="w-3/6  my-auto text-left text-sm md:text-base text-gray-700">Confirm Password :</label>
                    <input id="confirmPassword" type="password" name="confirmPassword" placeholder="confirm your password" autocomplete="off" class="shadow border-2 py-2 px-3 border-gray-300 rounded-md placeholder-gray-400 text-sm align-middle w-full h-10 px-3 py-2 focus:outline-none focus:border-gray-700 " required>
                </div>
                <!-- konfirmasi password -->

                <!-- tombol register -->
                <div class="flex w-full items-center  mb-4">

                    <div class="w-3/6 hidden md:flex "></div>
                    <div class=" flex justify-end md:justify-between w-full ">
                        <!-- tombol register -->
                        <input type="submit" value="Register" id="submit" class="text-xs my-auto text-white font-bold hover:from-blue-500 hover:to-indigo-600 py-2 px-6 md:px-8 cursor-pointer focus:outline-none bg-gradient-to-r from-blue-500 to-indigo-500  rounded-md">
                        <!-- tombol register -->
                        <!-- Catatan : kalau register sukses bakal masuk ke halaman "http://localhost/register/success" -->

                        <div class="mx-3 my-auto font-light text-blue-700 font-normal">
                            or
                        </div>

                        <!-- masuk akun google -->
                        <a href="">
                            <div class="flex py-2 px-1 md:px-4 my-auto border-2 border-blue-500 rounded-lg hover:border-blue-700 hover:bg-blue-100">
                                <img src="/img/search.png" alt="" class="w-4 h-4 my-auto">
                                <div class="text-xs ml-2 my-auto text-blue-500 hover:text-blue-700 font-bold">Sign up with Google</div>
                            </div>
                        </a>
                        <!-- masuk akun google -->
                    </div>

                </div>

            </form>

        </div>

    </div>

</div>
<?= $this->endSection() ?>
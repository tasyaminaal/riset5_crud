<?= $this->extend('layout/templateLoginRegisterReset') ?>

<?= $this->section('content') ?>
<div class="flex flex-col justify-center flex-grow">

    <div class="flex flex-col items-center mx-auto py-4 w-11/12 lg:w-6/12 md:w-8/12 bg-white shadow-2xl rounded-lg  py-5 md:py-10 md:px-2">

        <div class="text-xl uppercase font-bold mb-8 text-center">RESET PASSWORD</div>

        <div class=" text-left w-11/12 md:w-9/12 ">
            <form action="">
                <div class="flex flex-col items-center">

                    <div class="flex items-center my-3 w-full mb-4">
                        <label for="emailAdd" class="my-auto text-sm md:text-base w-32 md:w-auto ">E-mail Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                        <input type="text" id="emailAdd" name="emailAdd" class="shadow-md border-2 py-2 px-3 border-gray-200 rounded-md ml-1 md:ml-2 flex-grow focus:border-gray-700 focus:outline-none placeholder-gray-700  text-xs md:text-base align-middle my-auto" placeholder="type your e-mail address" required>
                    </div>

                    <div class="flex items-center my-3 w-full mb-4">
                        <label for="newpass" class="my-auto text-sm md:text-base w-32 md:w-auto ">New Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                        <input type="text" id="newpass" name="newpass" class="shadow-md border-2 py-2 px-3 border-gray-200 rounded-md ml-1 md:ml-2 flex-grow focus:border-gray-700 focus:outline-none placeholder-gray-700  text-xs md:text-base align-middle my-auto" placeholder="type your new password" required>
                    </div>

                    <div class="flex items-center my-3 w-full mb-8">
                        <label for="confirmpass" class="my-auto text-sm md:text-base  w-32 md:w-auto ">Confirm Password&nbsp;:</label>
                        <input type="text" id="confirmpass" name="confirmpass" class="shadow-md border-2 py-2 px-3 border-gray-200 rounded-md ml-1 md:ml-2 flex-grow focus:border-gray-700 focus:outline-none placeholder-gray-700  text-xs md:text-base align-middle my-auto" placeholder="confirm your password" required>
                    </div>

                </div>

                <div class="flex justify-center w-full">
                    <input type="submit" value="Send Password Reset Link" class="text-xs my-auto text-white font-bold hover:from-blue-500 hover:to-indigo-600  cursor-pointer focus:outline-none bg-gradient-to-r from-blue-500 to-indigo-500 py-2 px-2 md:px-4 ml-2 rounded-md">
                </div>

            </form>
        </div>
    </div>
    <!-- konten bisa diubah sampai sini -->
</div>
<!-- konten -->
<?= $this->endSection() ?>
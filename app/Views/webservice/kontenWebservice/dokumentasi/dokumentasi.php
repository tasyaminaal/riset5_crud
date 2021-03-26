<?= $this->extend('webservice/layoutWebservice/templateWebserviceLogin.php'); ?>

<?= $this->section('content'); ?>

<div class="md:grid md:grid-cols-3 lg:gap-x-16 md:gap-x-8 my-4 md:mx-8 mx-4">
    <div class="md:col-span-1 mt-8">
        <h1 class="text-2xl text-center font-heading text-secondary font-bold md:hidden block mb-4">DOKUMENTASI</h1>
        <!-- SEARCH DOKUMENTASI -->
        <div class="w-full flex items-center">
            <input type="text" name="pencarian" id="pencarian" placeholder="Pencarian..." class="border-2 border-gray-300 rounded-lg md:px-3 px-1 md:py-2 py-1 w-full">
            <button>
                <div>
                    <svg class="text-gray-500 hover:text-black ml-3 w-8 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </div>
            </button>
        </div>
        <!-- END SEARCH DOKUMENTASI -->
        <hr class="border-gray-300 mt-2">

        <!-- MINIMAP UNTUK DOKUMENTASI -->
        <ul class="mt-4 font-heading text-secondary lg:text-2xl md:text-xl text-lg">
            <li class="mt-2 font-bold"><a href="#judul1">Judul 1</a>
                <ul class="ml-4 lg:mt-2 text-black lg:text-xl md:text-lg text-base font-paragraph font-bold">
                    <li><a href="#sub11">Subjudul 1.1</a></li>
                    <li><a href="#sub12">Subjudul 1.2</a></li>
                </ul>
            </li>
            <li class="mt-2 font-bold"><a href="#judul2">Judul 2</a>
                <ul class="ml-4 lg:mt-2 text-black lg:text-xl md:text-lg text-base font-paragraph font-bold">
                    <li><a href="#sub21">Subjudul 2.1</a></li>
                    <li><a href="#sub22">Subjudul 2.2</a></li>
                </ul>
            </li>
        </ul>
        <hr class="border-gray-300 mt-2 md:hidden block">
        <!-- END MINIMAP UNTUK DOKUMENTASI -->
    </div>
    <div class="md:col-span-2 mt-8">
        <h1 class="lg:text-6xl md:text-3xl text-2xl text-center font-heading text-secondary font-bold md:block hidden">DOKUMENTASI</h1>

        <!-- DAFTAR DOKUMENTASI -->
        <h2 class="lg:text-2xl md:text-xl text-lg text-secondary mt-4 font-heading font-bold" id="judul1">Judul 1</h2>
        <div class="text-justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
        </div>
        <h3 class="lg:text-xl md:text-lg mt-4 font-bold" id="sub11">Subjudul 1.1</h3>
        <div class="text-justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum was introduced to the digital world in the mid-1980s when Aldus employed it in graphic and word-processing templates for its desktop publishing program PageMaker. Lorem ipsum was introduced to the digital world in the mid-1980s when Aldus employed it in graphic and word-processing templates for its desktop publishing program PageMaker.
        </div>
        <h3 class="lg:text-xl md:text-lg mt-4 font-bold" id="sub12">Subjudul 1.2</h3>
        <div class="text-justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
        <h2 class="lg:text-2xl md:text-xl text-lg text-secondary mt-4 font-heading font-bold" id="judul2">Judul 2</h2>
        <div class="text-justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
        </div>
        <h3 class="lg:text-xl md:text-lg mt-4 font-bold" id="sub21">Subjudul 2.1</h3>
        <div class="text-justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum was introduced to the digital world in the mid-1980s when Aldus employed it in graphic and word-processing templates for its desktop publishing program PageMaker. Lorem ipsum was introduced to the digital world in the mid-1980s when Aldus employed it in graphic and word-processing templates for its desktop publishing program PageMaker.
        </div>
        <h3 class="lg:text-xl md:text-lg mt-4 font-bold" id="sub22">Subjudul 2.2</h3>
        <div class="text-justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
        <!-- END DAFTAR DOKUMENTASI -->
    </div>
</div>

<?= $this->endSection(); ?>
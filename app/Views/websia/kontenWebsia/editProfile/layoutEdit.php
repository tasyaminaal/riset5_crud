<?= $this->extend('websia/layoutWebsia/templateBerandaLogin.php'); ?>

<?= $this->section('content'); ?>

<style>
    .layoutEdit {
        z-index: 5;
    }

    .active {
        background-color: #015998;
        color: #FFAA00;
    }

    @media screen and (max-width: 1024px) {
        #pagePendidikan table tbody tr td {
            padding-left: .25rem;
            padding-right: .25rem;
        }
    }

    @media screen and (max-width: 768px) {
        #pagePendidikan table {
            width: 670px;
        }
    }

    #pagePendidikan table tr td {
        padding-left: .5rem;
        padding-right: .5rem;
    }

    #pagePrestasi table tr td {
        padding-left: .5rem;
        padding-right: .5rem;
    }

    @media screen and (max-width: 640px) {
        #pagePrestasi table {
            width: 580px;
        }
    }

    @media screen and (max-width: 1024px) {
        #pagePrestasi table tbody tr td {
            padding-left: .25rem;
            padding-right: .25rem;
        }
    }

    input[type=checkbox] {
        transform: scale(1.25);
    }
</style>
<script src="https://code.jquery.com/jquery-1.10.1.min.js" integrity="sha256-SDf34fFWX/ZnUozXXEH0AeB+Ip3hvRsjLwp6QNTEb3k=" crossorigin="anonymous"></script>

<div class="w-full">
    <div class="flex w-full relative">
        <div class="layoutEdit md:static absolute top-0 bottom-0 sm:w-12 w-10 md:w-1/5 transition-all duration-500 bg-primarySidebar">
            <?php
            function getLastCurrentUrl()
            {
                $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                preg_match('/[^\/]+$/', $actual_link, $matches);
                $last_word = $matches[0];
                return $last_word;
            }
            ?>
            <div class="md:hidden">
                <svg class="block mx-auto sm:w-7 w-6 cursor-pointer fill-current text-secondary mt-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>

            <div class="navEdit md:block hidden">
                <div class="flex justify-between items-center text-secondary bg-primaryHover md:text-xl font-bold py-2 lg:pr-5 md:pr-2 lg:pl-7 md:pl-3 px-3">
                    <p>EDIT</p>
                    <div class="editTutup select-none">
                        <svg class="sm:w-7 w-6 fill-current cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </div>

                </div>
                <ul>
                    <a href="/User/editProfil">
                        <li id="profil" class="button font-heading lg:p-3 p-2 pl-3 lg:pl-7 mr-4 rounded-r-lg text-sm text-white <?= (getLastCurrentUrl() == 'editProfil') ? 'active' : ''; ?> hover:text-secondary hover:bg-primaryDark font-semibold">Biodata</li>
                    </a>
                    <a href="/User/editPendidikan">
                        <li id="pendidikan" class="button font-heading lg:p-3 p-2 pl-3 lg:pl-7 mr-4 rounded-r-lg text-sm text-white <?= (getLastCurrentUrl() == 'editPendidikan') ? 'active' : ''; ?> hover:text-secondary hover:bg-primaryDark font-semibold">Pendidikan</li>
                    </a>
                    <a href="/User/editTempatKerja">
                        <li id="tempatkerja" class="button font-heading lg:p-3 p-2 pl-3 lg:pl-7 mr-4 rounded-r-lg text-sm text-white <?= (getLastCurrentUrl() == 'editTempatKerja') ? 'active' : ''; ?> hover:text-secondary hover:bg-primaryDark font-semibold">Tempat Kerja</li>
                    </a>
                    <a href="/User/editPrestasi">
                        <li id="prestasi" class="button font-heading lg:p-3 p-2 pl-3 lg:pl-7 mr-4 rounded-r-lg text-sm text-white <?= (getLastCurrentUrl() == 'editPrestasi') ? 'active' : ''; ?> hover:text-secondary hover:bg-primaryDark font-semibold">Prestasi</li>
                    </a>
                    <a href="/User/editPublikasi">
                        <li id="publikasi" class="button font-heading lg:p-3 p-2 pl-3 lg:pl-7 mr-4 rounded-r-lg text-sm text-white <?= (getLastCurrentUrl() == 'editPublikasi') ? 'active' : ''; ?> hover:text-secondary hover:bg-primaryDark font-semibold">Publikasi</li>
                    </a>
                    <?php if (session('manual') == "yes") : ?>
                        <a href="/User/editAkun">
                            <li id="akun" class="button font-heading lg:p-3 p-2 pl-3 lg:pl-7 mr-4 rounded-r-lg text-sm text-white <?= (getLastCurrentUrl() == 'editAkun') ? 'active' : ''; ?> hover:text-secondary hover:bg-primaryDark font-semibold">Akun</li>
                        </a>
                    <?php endif ?>
                </ul>

            </div>

        </div>

        <div class="md:w-4/5 w-full md:pl-0 sm:pl-20 pl-12 md:mx-7 mt-8 rounded-xl text-sm">
            <?php $this->renderSection('contentEdit'); ?>
        </div>
    </div>

</div>


<?= $this->endSection(); ?>
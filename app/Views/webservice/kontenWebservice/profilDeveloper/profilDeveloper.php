<?= $this->extend('webservice/layoutWebservice/templateWebserviceLogin.php'); ?>

<?= $this->section('content'); ?>

<div class="lg:mt-32 md:mt-24 mt-16 w-full flex justify-center">
    <div class="shadow-2xl sm:w-3/4 w-full mt-6 lg:mb-12 mb-6 rounded-xl px-0 pt-4 pb-6 sm:mx-0 mx-6">
        <h1 class="lg:text-6xl md:text-5xl text-3xl text-center font-heading text-secondary font-bold items-center flex justify-center">PROFIL</h1>
        <div class="flex justify-center">
            <div class="lg:w-4/5 w-5/6">
                <div class="md:mx-2 lg:mt-20 mt-8">
                    <div class="lg:mb-4 mb-2">
                        <div class="flex justify-start items-center">
                            <div class="w-2/5">
                                <h5 class="font-bold font-heading text-primary lg:text-lg md:text-sm text-xs">NAMA LENGKAP</h5>
                            </div>
                            <div class="w-3/5">
                                <h5 class="font-paragraph text-primary lg:text-lg md:text-base text-sm">Baek Nambong</h5>
                            </div>
                        </div>
                        <hr class="border-gray border-1 lg:mt-4 mt-2">
                    </div>
                    <div class="lg:mb-4 mt-2">
                        <div class="flex justify-start items-center">
                            <div class="w-2/5">
                                <h5 class="font-bold font-heading text-primary lg:text-lg md:text-sm text-xs">TEMPAT/TGL LAHIR</h5>
                            </div>
                            <div class="w-3/5">
                                <h5 class="font-paragraph text-primary lg:text-lg md:text-base text-sm">Bojong Gede, 21 Januari 1983</h5>
                            </div>
                        </div>
                        <hr class="border-gray border-1 lg:mt-4 mt-2">
                    </div>
                    <div class="lg:mb-4 mt-2">
                        <div class="flex justify-start items-center">
                            <div class="w-2/5">
                                <h5 class="font-bold font-heading text-primary lg:text-lg md:text-sm text-xs">STATUS</h5>
                            </div>
                            <div class="w-3/5">
                                <h5 class="font-paragraph text-primary lg:text-lg md:text-base text-sm">Peneliti</h5>
                            </div>
                        </div>
                        <hr class="border-gray border-1 lg:mt-4 mt-2">
                    </div>
                    <div class="lg:mb-4 mt-2">
                        <div class="flex justify-start items-center">
                            <div class="w-2/5">
                                <h5 class="font-bold font-heading text-primary lg:text-lg md:text-sm text-xs">NAMA INSTANSI</h5>
                            </div>
                            <div class="w-3/5">
                                <h5 class="font-paragraph text-primary lg:text-lg md:text-base text-sm">Universitas Yonggang</h5>
                            </div>
                        </div>
                        <hr class="border-gray border-1 lg:mt-4 mt-2">
                    </div>
                    <div class="lg:mb-4 mt-2">
                        <div class="flex justify-start items-center">
                            <div class="w-2/5">
                                <h5 class="font-bold font-heading text-primary lg:text-lg md:text-sm text-xs">EMAIL</h5>
                            </div>
                            <div class="w-3/5">
                                <h5 class="font-paragraph text-primary lg:text-lg md:text-base text-sm">Frost@email.com</h5>
                            </div>
                        </div>
                        <hr class="border-gray border-1 lg:mt-4 mt-2">
                    </div>
                    <div class="">
                        <a href="/webservice/editbiodata">
                            <div class="rounded-full mt-4 bg-secondary text-white p-1 md:w-24 w-16 text-center md:text-base text-xs hover:bg-secondaryhover">EDIT</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- nyoba pake table -->
    <!-- <div class="w-full my-8 lg:px-20 md:px-8 px-2">
            <table class="table-auto text-primary ml-5 mt-3">
                <tbody>
                    <tr>
                        <td class="font-heading font-bold">NAMA LENGKAP</td>
                        <td class="font-paragraph pl-4">Sukijan</td>
                        <td class="font-heading font-bold">TEMPAT/TGL LAHIR</td>
                        <td class="font-paragraph pl-4">Zimbabwe, 30 Februari 1919</td>
                        <td class="font-heading font-bold">STATUS</td>
                        <td class="font-paragraph pl-4">Pengedar Kebahagiaan</td>
                        <td class="font-heading font-bold">NAMA INSTANSI</td>
                        <td class="font-paragraph pl-4">International University of Zimbabwe</td>
                        <td class="font-heading font-bold">EMAIL</td>
                        <td class="font-paragraph pl-4">sukijancintadia@gmail.com</td>
                    </tr>
                </tbody>
            </table>
            <hr class="border-primary border-opacity-75 w-3/4 object-center mx-auto mt-8">
        </div> -->

</div>
</div>

<?php $this->endSection(); ?>
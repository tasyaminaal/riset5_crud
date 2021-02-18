<div class="md:relative fixed flex flex-col bg-primary rounded-r md:h-auto h-full sidebarSearch">

    <div class="flex md:px-4 px-2 py-1 justify-between bg-primaryHover">
        <div class="md:text-xl text-base my-auto font-heading font-semibold text-secondary hidden md:mr-32 param1"> FILTER</div>
        <svg class="md:w-6 w-4 fill-current text-secondary cursor-pointer hamburgerSidebar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </div>

    <div class="flex flex-col mt-4 hidden param2">

        <!-- Awal tombol filter "Semua" -->
        <div class="md:text-base text-sm text-secondary hover:bg-primaryDark font-heading font-medium px-4 py-1 cursor-pointer filterSidebar">Semua</div>
        <!-- Akhir tombol filter "Semua" -->

        <!-- Awal filter "Alumni" -->
        <div class="md:text-base text-sm  text-white hover:bg-primaryDark font-heading font-medium px-4 py-1 cursor-pointer filterSidebar">Alumni</div>

        <div class="flex flex-col py-1 px-6 w-full hidden listFilterSidebarAlumni">

            <!-- Awal Filter "Prodi" Untuk Alumni  -->
            <div class="flex flex-col">
                <div class="flex justify-between mb-1 hover:bg-primaryDark py-1 px-2 rounded-lg cursor-pointer listSidebar">
                    <div class="md:text-sm text-xs text-white font-heading">Prodi</div>
                    <svg class="w-3 h-3 my-auto text-white font-semibold " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    <svg class="w-3 h-3 my-auto text-white font-semibold  hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                    </svg>
                </div>

                <!-- Awal List Filter "Prodi" Untuk Alumni  -->
                <div class="flex flex-col font-paragraph mb-1 px-3 hidden listProdi">
                    <div class="text-xs text-white cursor-pointer py-1 px-1 hover:bg-primaryDark rounded-lg" id="namaProdi">DIII Statistika</div>
                    <div class="text-xs text-white cursor-pointer py-1 px-1 hover:bg-primaryDark rounded-lg" id="namaProdi">DIV Statistika</div>
                    <div class="text-xs text-white cursor-pointer py-1 px-1 hover:bg-primaryDark rounded-lg" id="namaProdi">DIV Komputasi Statistik</div>
                </div>
                <!-- Akhir List Filter "Prodi" Untuk Alumni  -->

            </div>
            <!-- Akhir Fiilter "Prodi" Untuk Alumni  -->

            <!-- Awal Filter "Angkatan" Untuk Alumni  -->
            <div class="flex flex-col">
                <div class="flex justify-between mb-1 hover:bg-primaryDark py-1 px-2 rounded-lg cursor-pointer listSidebar">
                    <div class="md:text-sm text-xs font-heading text-white">Angkatan</div>
                    <svg class="w-3 h-3 my-auto text-white font-semibold" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    <svg class="w-3 h-3 my-auto text-white font-semibold hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                    </svg>
                </div>

                <!-- Awal Input Filter "Prodi" Untuk Alumni  -->
                <div class="mb-1 px-4 hidden listAngkatan">
                    <input type="text" placeholder="Angkatan 60" class="placeholder-gray-300 text-primary font-paragraph text-xs px-2 py-1 outline-none focus:ring-2 focus:ring-secondary font-paragraph rounded-lg">
                </div>
                <!-- Akhir Input Filter "Prodi" Untuk Alumni  -->

            </div>
            <!-- Akhir Filter "Angkatan" Untuk Alumni  -->

            <!-- Awal Filter "Tempat Kerja" Untuk Alumni  -->
            <div class="flex flex-col">
                <div class="flex justify-between mb-1 hover:bg-primaryDark py-1 px-2 rounded-lg cursor-pointer listSidebar">
                    <div class="md:text-sm text-xs text-white font-heading ">Tempat Kerja</div>
                    <svg class="w-3 h-3 my-auto text-white font-semibold " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    <svg class="w-3 h-3 my-auto text-white font-semibold  hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                    </svg>
                </div>

                <div class="flex flex-col mb-1 px-4 hidden listTempatKerja">
                    <div class="flex justify-between mb-1 cursor-pointer" id="BPS">
                        <div class="text-white text-xs font-heading">BPS</div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-5 text-secondary onBPS" fill="currentColor" class="bi bi-toggle-on" viewBox="0 0 16 16">
                            <path d="M5 3a5 5 0 0 0 0 10h6a5 5 0 0 0 0-10H5zm6 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-5 text-secondary hidden offBPS" fill="currentColor" class="bi bi-toggle-off" viewBox="0 0 16 16">
                            <path d="M11 4a4 4 0 0 1 0 8H8a4.992 4.992 0 0 0 2-4 4.992 4.992 0 0 0-2-4h3zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5z" />
                        </svg>
                    </div>

                    <!-- Awal Input Filter "Tempat Kerja BPS" Untuk Alumni  -->
                    <input type="text" placeholder="BPS RI/Provinsi/kota" class="placeholder-gray-300 text-primary font-paragraph text-xs px-2 py-1 outline-none mb-2 focus:ring-2 focus:ring-secondary font-paragraph rounded-lg inputBPS">
                    <!-- Awal Input Filter "Tempat Kerja BPS" Untuk Alumni  -->

                    <div class="flex justify-between mb-1 cursor-pointer" id="Lainnya">
                        <div class="text-white text-xs font-heading">Lainnya</div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-5 text-secondary hidden onLainnya" fill="currentColor" class="bi bi-toggle-on" viewBox="0 0 16 16">
                            <path d="M5 3a5 5 0 0 0 0 10h6a5 5 0 0 0 0-10H5zm6 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-5 text-secondary offLainnya" fill="currentColor" class="bi bi-toggle-off" viewBox="0 0 16 16">
                            <path d="M11 4a4 4 0 0 1 0 8H8a4.992 4.992 0 0 0 2-4 4.992 4.992 0 0 0-2-4h3zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5z" />
                        </svg>
                    </div>

                    <!-- Awal Input Filter "Tempat Kerja Lainnya" Untuk Alumni  -->
                    <input type="text" placeholder="Institusi/Perusahaan Lain" class="placeholder-gray-300 text-xs font-paragraph text-gray-300 px-2 py-1 outline-none mb-1 focus:ring-2 focus:ring-secondary font-paragraph rounded-lg inputTempatKerjaLainnya">
                    <!-- Awal Input Filter "Tempat Kerja Lainnya" Untuk Alumni  -->

                </div>
            </div>
            <!-- Akhir Filter "Tempat Kerja" Untuk Alumni  -->

        </div>
        <!-- Akhir filter "Alumni" -->

        <!-- Awal filter "Berita" -->
        <div class="md:text-base text-sm text-white hover:bg-primaryDark font-medium px-4 py-1 cursor-pointer filterSidebar">Artikel/Berita</div>

        <div class="flex flex-col py-1 px-7 w-full hidden listFilterSidebarBerita">

            <div class="flex flex-col">
                <div class="flex justify-between mb-1 hover:bg-primaryDark py-1 px-2 rounded-lg cursor-pointer listSidebar">

                    <div class="md:text-sm text-xs text-white font-heading">Rentang Waktu</div>

                    <svg class="w-3 h-3 my-auto text-white font-semibold" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>

                    <svg class="w-3 h-3 my-auto text-white font-semibold hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                    </svg>

                </div>

                <div class="flex flex-col mb-1 px-4 hidden listRentangWaktu">

                    <div class="flex justify-between gap-x-1 mb-2">

                        <!-- Awal Input Filter "Rentang Waktu Awal" Untuk Berita  -->
                        <input type="text" placeholder="Awal" class="placeholder-gray-300 text-xs font-paragraph text-primary px-2 py-1 outline-none mb-1 focus:ring-2 focus:ring-secondary font-paragraph rounded-lg w-1/2 inputTahunAwal">
                        <!-- Akhir Input Filter "Rentang Waktu Awal" Untuk Berita  -->

                        <!-- Awal Input Filter "Rentang Waktu Akhir" Untuk Berita  -->
                        <input type="text" placeholder="Akhir" class="placeholder-gray-300 text-xs font-paragraph text-primary px-2 py-1 outline-none mb-1 focus:ring-2 focus:ring-secondary font-paragraph rounded-lg w-1/2 inputTahunAkhir">
                        <!-- Akhir Input Filter "Rentang Waktu Akhir" Untuk Berita  -->

                    </div>

                    <!-- Awal Kalender Awal  -->
                    <div class="mx-auto bg-white grid grid-cols-4 gap-1 p-2 rounded-lg font-medium hidden font-paragraph kalenderAwal">
                        <div class="text-sm text-secondary my-auto cursor-pointer perviousTahunAwal">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M15.707 15.707a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414l5-5a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 010 1.414zm-6 0a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414l5-5a1 1 0 011.414 1.414L5.414 10l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </div>

                        <div class="text-sm text-secondary col-span-2 rentangTahunAwal"></div>

                        <div class="text-sm text-secondary my-auto flex justify-end  cursor-pointer nextTahunAwal">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>

                        <?php for ($x = 0; $x < 12; $x++) : ?>
                            <div class="text-xs text-gray-400 hover:text-primary mx-auto cursor-pointer tahunKalenderAwal"></div>
                        <?php endfor; ?>
                    </div>
                    <!-- Akhir Kalender Awal  -->

                    <!-- Awal Kalender Akhir  -->
                    <div class="mx-auto bg-white grid grid-cols-4 gap-1 p-2 rounded-lg font-paragraph font-medium hidden kalenderAkhir">
                        <div class="text-sm text-secondary my-auto cursor-pointer perviousTahunAkhir">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M15.707 15.707a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414l5-5a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 010 1.414zm-6 0a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414l5-5a1 1 0 011.414 1.414L5.414 10l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </div>

                        <div class="text-sm text-secondary col-span-2 rentangTahunAkhir"></div>

                        <div class="text-sm text-secondary my-auto flex justify-end  cursor-pointer nextTahunAkhir">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>

                        <?php for ($x = 0; $x < 12; $x++) : ?>
                            <div class="text-xs text-gray-400 hover:text-primary mx-auto cursor-pointer tahunKalenderAkhir"></div>
                        <?php endfor; ?>
                    </div>
                    <!-- Akhir Kalender Akhir  -->

                </div>
            </div>

        </div>
        <!-- Akhir filter "Berita" -->

    </div>

</div>
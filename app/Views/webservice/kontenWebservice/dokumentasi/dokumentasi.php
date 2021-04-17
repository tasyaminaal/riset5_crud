<?= $this->extend('webservice/kontenWebservice/dokumentasi/layoutDokumentasi.php'); ?>

<?= $this->section('dokumentasi'); ?>
<div id="burgerDok" title="Sidebar" class="lg:hidden select-none fixed transform translate-y-1.5 md:top-20 sm:top-16 z-20 top-11 left-0 w-10 h-10 p-1 cursor-pointer bg-secondary border-none focus:outline-none transition-all duration-700 tutup">
    <svg class="cursor-pointer fill-current text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
    </svg>
</div>
<div class="sm:ml-12 sm:mr-5 ml-8 mr-2 sm:mt-7 mt-4 transition-none overflow-hidden">
    <!-- <div class="lg:hidden sm:text-sm text-xs absolute mt-3" id="burgerDok">
        <svg class="block w-7 cursor-pointer fill-current text-secondary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </div> -->
    <section>
        <div class="text-secondary lg:mx-4 mx-3">
            <h1 class="lg:text-xl">Sistem Informasi Alumni</h1>
            <h2 class="font-bold lg:text-3xl md:text-2xl text-xl">DOKUMENTASI WEB SERVICE</h2>
        </div>
        <hr class="border border-gray-500 transform translate-y-2">
        <div class="lg:mx-4 mx-3 mt-4 2xl:-mb-2 mb-10">
            <h3 class="text-secondary mb-5">Penjelasan API Sistem Informasi Alumni</h3>
            <div class="flex ">
                <p class="text-justify md:mr-8 sm:mr-2 mr-0 xl:w-10/12 lg:w-9/12">API Sistem Informasi Alumni menyediakan akses terprogram untuk membaca data User dan data Alumni. Pengguna dapat membaca tentang informasi pribadi dasar pengguna, informasi pribadi dasar alumni atas nama pengguna, dan daftar informasi pribadi dasar alumni. API Sistem Informasi Alumni mengidentifikasi pengguna dengan api-key. Pengguna bisa mendapatkan api-key dari situs Webservice Sistem Informasi Alumni. Setiap pengguna bisa mendapatkan dua hingga tiga api-key untuk mengakses API. Tanggapan tersedia dalam bentuk JSON.</p>
                <img src="/img/components/logo/logo_api.png" alt="Logo Api" class="xl:w-2/12 md:w-3/12 sm:w-4/12 sm:block hidden">
            </div>
        </div>
    </section>

    <section id="memintaData" class="pb-12">
        <div class="text-secondary lg:mx-4 mx-3">
            <h1 class="font-bold lg:text-3xl md:text-2xl text-xl">Meminta Data</h1>
        </div>
        <hr class="border border-gray-500 transform translate-y-2">
        <div class="lg:mx-4 mx-3 mt-4 text-justify">
            <p class="">Cara meminta data : </p>
            <ol class="list-decimal list-inside">
                <li>Klik menu API kemudian pilih sub menu proyek</li>
                <li>Klik tombol "Buat Proyek" untuk mendaftarkan proyek baru</li>
                <li>Masukkan identitas proyek/aplikasi seperti nama, deskripsi proyek, pilih cakupan data yang diiginkan dan klik "buat"</li>
                <li>Tunggu hingga status permintaan berubah dan Anda akan mendapat kunci beserta token API SIA</li>
            </ol>
            <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus consectetur vel sint ad reprehenderit officia officiis quod expedita magni accusamus eveniet ipsum possimus soluta ipsa non similique et sed quo, deleniti iusto vero necessitatibus ipsam! Excepturi placeat possimus pariatur odit. Consequatur necessitatibus harum, blanditiis aut explicabo vitae repudiandae in iusto? Lorem100</p>
        </div>
    </section>
</div>

<!-- Data dokumentasi -->
<div class="sm:ml-12 sm:mr-5 ml-8 mr-2 transition-none mb-12">
    <section id="data" class="lg:mx-4 mx-3 pb-5">
        <h1 class="font-bold text-secondary lg:text-3xl md:text-2xl text-xl">Data</h1>
        <hr class="border border-gray-500 transform translate-y-2 -mx-3">
        <p class="mt-5 text-justify">Data 1 adalah Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione modi nesciunt et dicta sunt ab vitae doloribus eveniet, nostrum dolores iusto, laudantium voluptas non maiores quibusdam ipsa, cum voluptates quaerat? </p>
    </section>
    <div class="lg:mx-4 mx-3 text-justify -mt-5">
        <section id="dataUser" class="pb-8">
            <div class="shadow-2xl w-full lg:mt-6 mt-4 rounded-xl">
                <div class="text-primary lg:mx-4 sm:mx-2.5 mx-1 px-4 py-4">
                    <h1 class="font-bold text-black lg:text-2xl md:text-xl text-lg">Data User</h1>
                    <p class="text-black mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione modi nesciunt et dicta sunt ab vitae doloribus eveniet, nostrum dolores iusto, laudantium voluptas non maiores quibusdam ipsa, cum voluptates quaerat? </p>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4 mb-1">User Profile Read</h1>
                    <div class="bg-black p-3 rounded-xl w-full sm:text-sm text-xs overflow-auto">
                        <code>
                            <span style="color: #8bc;">http:</span><span class="text-secondary">//localhost:8080/api/user?api_key=&nim=</span>
                        </code>
                    </div>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4 mb-1">Parameter</h1>
                    <div class="overflow-x-auto shadow-2xl rounded-3xl mb-3">
                        <!-- mulai tabel -->
                        <table class="w-full sm:text-sm text-xs rounded-3xl shadow-2xl md:shadow-none font-paragraph text-black text-justify">
                            <!-- start nama kolom tabel Sub Data 1.1 -->
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="pt-6 pb-6 px-4">Field</th>
                                    <th class="pt-6 pb-6 px-4">Type</th>
                                    <th class="pt-6 pb-6 px-4">Description</th>
                                </tr>
                            </thead>
                            <!-- end nama kolom tabel Sub Data 1.1 -->

                            <!-- start isi tabel Sub Data 1.1 -->
                            <tbody>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">api_key</td>
                                    <td class="pt-2 pb-2 px-4">String</td>
                                    <td class="pt-2 pb-2 px-4">Key untuk mengakses API.</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">nim</td>
                                    <td class="pt-2 pb-2 px-4">Number</td>
                                    <td class="pt-2 pb-2 px-4">Nomor Induk Mahasiswa AIS/STIS/Polstat STIS</td>
                                </tr>
                                <tr class="h-5 formEdit">
                                    <td colspan="8" class="rounded-b-3xl"></td>
                                </tr>
                            </tbody>
                            <!-- end isi tabel Sub Data 1.1 -->
                        </table>
                    </div>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4 mb-1">Success 200</h1>
                    <div class="overflow-x-auto shadow-2xl rounded-3xl mb-3">
                        <!-- mulai tabel -->
                        <table class="w-full sm:text-sm text-xs rounded-3xl shadow-2xl md:shadow-none font-paragraph text-black text-justify">
                            <!-- start nama kolom tabel Sub Data 1.1 -->
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="pt-6 pb-6 px-4">Field</th>
                                    <th class="pt-6 pb-6 px-4">Type</th>
                                    <th class="pt-6 pb-6 px-4">Description</th>
                                </tr>
                            </thead>
                            <!-- end nama kolom tabel Sub Data 1.1 -->

                            <!-- start isi tabel Sub Data 1.1 -->
                            <tbody>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">status</td>
                                    <td class="pt-2 pb-2 px-4">String</td>
                                    <td class="pt-2 pb-2 px-4">Status pengembalian</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">message</td>
                                    <td class="pt-2 pb-2 px-4">String</td>
                                    <td class="pt-2 pb-2 px-4">Pesan pengembalian</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">data</td>
                                    <td class="pt-2 pb-2 px-4">Array</td>
                                    <td class="pt-2 pb-2 px-4">Data pengembalian</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">&nbsp;&nbsp;&nbsp;fullname</td>
                                    <td class="pt-2 pb-2 px-4">String</td>
                                    <td class="pt-2 pb-2 px-4">Nama lengkap pengguna</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">&nbsp;&nbsp;&nbsp;nim</td>
                                    <td class="pt-2 pb-2 px-4">Number</td>
                                    <td class="pt-2 pb-2 px-4">Nomor Induk Mahasiswa saat menjadi mahasiswa AIS/STIS/Polstat STIS</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">&nbsp;&nbsp;&nbsp;username</td>
                                    <td class="pt-2 pb-2 px-4">String</td>
                                    <td class="pt-2 pb-2 px-4">Username pengguna</td>
                                </tr>
                                <tr class="h-5 formEdit">
                                    <td colspan="8" class="rounded-b-3xl"></td>
                                </tr>
                            </tbody>
                            <!-- end isi tabel Sub Data 1.1 -->
                        </table>
                    </div>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4 mb-1">Success Response</h1>
                    <div class="bg-black p-3 rounded-xl w-full text-white sm:text-sm text-xs overflow-x-auto">
                        <code>
                            <pre>
{
  <span class="field-response">"status"</span>: <span class="text-secondary">"200"</span>,
  <span class="field-response">"message"</span>: <span class="text-secondary">"Successful!"</span>,
  <span class="field-response">"data"</span>: [
    {
        <span class="field-response">"fullname"</span>: <span class="text-secondary">"Haillyn Ethan Callisto"</span>,
        <span class="field-response">"nim"</span>: <span class="text-secondary">223099999</span>,
        <span class="field-response">"username"</span>: <span class="text-secondary">"223099999"</span>
    }
  ]
}
                           </pre>
                        </code>
                    </div>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4 mb-1">Error 40x</h1>
                    <div class="overflow-x-auto shadow-2xl rounded-3xl mb-3">
                        <!-- mulai tabel -->
                        <table class="w-full sm:text-sm text-xs rounded-3xl shadow-2xl md:shadow-none font-paragraph text-black text-justify">
                            <!-- start nama kolom tabel Sub Data 1.1 -->
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="pt-6 pb-6 px-4">Field</th>
                                    <th class="pt-6 pb-6 px-4">Type</th>
                                    <th class="pt-6 pb-6 px-4">Description</th>
                                </tr>
                            </thead>
                            <!-- end nama kolom tabel Sub Data 1.1 -->

                            <!-- start isi tabel Sub Data 1.1 -->
                            <tbody>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">status</td>
                                    <td class="pt-2 pb-2 px-4">String</td>
                                    <td class="pt-2 pb-2 px-4">Status pengembalian</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">message</td>
                                    <td class="pt-2 pb-2 px-4">String</td>
                                    <td class="pt-2 pb-2 px-4">Pesan pengembalian</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">data</td>
                                    <td class="pt-2 pb-2 px-4">Array</td>
                                    <td class="pt-2 pb-2 px-4">Data pengembalian</td>
                                </tr>
                            </tbody>
                            <!-- end isi tabel Sub Data 1.1 -->
                        </table>
                    </div>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4 mb-1">Error 401 Response</h1>
                    <div class="bg-black p-3 rounded-xl w-full text-white sm:text-sm text-xs overflow-x-auto">
                        <code>
                            <pre>
{
  <span class="field-response">"status"</span>: <span class="text-secondary">"401"</span>,
  <span class="field-response">"message"</span>: <span class="text-secondary">"Please input an api-key!"</span>,
  <span class="field-response">"data"</span>: []
}
                           </pre>
                        </code>
                    </div>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4 mb-1">Error 403 Response</h1>
                    <div class="bg-black p-3 rounded-xl w-full text-white sm:text-sm text-xs overflow-x-auto">
                        <code>
                            <pre>
{
  <span class="field-response">"status"</span>: <span class="text-secondary">"403"</span>,
  <span class="field-response">"message"</span>: <span class="text-secondary">"Forbidden!"</span>,
  <span class="field-response">"data"</span>: []
}
                           </pre>
                        </code>
                    </div>

        </section>
        <section id="dataAlumni">
            <div class="shadow-2xl w-full mt-0 rounded-xl">
                <div class="text-primary lg:mx-4 sm:mx-2.5 mx-1 px-4 py-4">
                    <h1 class="font-bold text-black lg:text-2xl md:text-xl text-lg">Data Alumni</h1>
                    <p class="text-black mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione modi nesciunt et dicta sunt ab vitae doloribus eveniet, nostrum dolores iusto, laudantium voluptas non maiores quibusdam ipsa, cum voluptates quaerat? </p>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4 mb-1">Alumni Profile Read</h1>
                    <div class="bg-black p-3 rounded-xl w-full sm:text-sm text-xs overflow-auto">
                        <code>
                            <span style="color: #8bc;">http:</span><span class="text-secondary">//localhost:8080/api/alumni?api_key=&nim=&list=</span>
                        </code>
                    </div>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4 mb-1">Parameter</h1>
                    <div class="overflow-x-auto shadow-2xl rounded-3xl">
                        <!-- mulai tabel -->
                        <table class="w-full sm:text-sm text-xs rounded-3xl shadow-2xl md:shadow-none font-paragraph text-black sm:text-justify text-left">
                            <!-- start nama kolom tabel Sub Data 1.2 -->
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="pt-6 pb-6 px-4">Field</th>
                                    <th class="pt-6 pb-6 px-4">Type</th>
                                    <th class="pt-6 pb-6 px-4">Description</th>
                                </tr>
                            </thead>
                            <!-- end nama kolom tabel Sub Data 1.2 -->

                            <!-- start isi tabel Sub Data 1.2 -->
                            <tbody>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">api_key</td>
                                    <td class="pt-2 pb-2 px-4">String</td>
                                    <td class="pt-2 pb-2 px-4">Key untuk mengakses API</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">nim</td>
                                    <td class="pt-2 pb-2 px-4">Number</td>
                                    <td class="pt-2 pb-2 px-4">Nomor Induk Mahasiswa AIS/STIS/Polstat STIS</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">list</td>
                                    <td class="pt-2 pb-2 px-4">Number</td>
                                    <td class="pt-2 pb-2 px-4">Untuk mengakses informasi dasar alumni. Nilai yang diterima '1' atau '0'. 1 untuk mendapatkan informasi dasar seluruh alumni, sedangkan 0 untuk mendapatkan informasi dasar seorang alumni saja</td>
                                </tr>
                                <tr class="h-5 formEdit">
                                    <td colspan="8" class="rounded-b-3xl"></td>
                                </tr>
                            </tbody>
                            <!-- end isi tabel Sub Data 1.2 -->
                        </table>
                    </div>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4 mb-1">Success 200</h1>
                    <div class="overflow-x-auto shadow-2xl rounded-3xl mb-3">
                        <!-- mulai tabel -->
                        <table class="w-full sm:text-sm text-xs rounded-3xl shadow-2xl md:shadow-none font-paragraph text-black sm:text-justify text-left">
                            <!-- start nama kolom tabel Sub Data 1.1 -->
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="pt-6 pb-6 px-4">Field</th>
                                    <th class="pt-6 pb-6 px-4">Type</th>
                                    <th class="pt-6 pb-6 px-4">Description</th>
                                </tr>
                            </thead>
                            <!-- end nama kolom tabel Sub Data 1.1 -->

                            <!-- start isi tabel Sub Data 1.1 -->
                            <tbody>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">status</td>
                                    <td class="pt-2 pb-2 px-4">String</td>
                                    <td class="pt-2 pb-2 px-4">Status pengembalian</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">message</td>
                                    <td class="pt-2 pb-2 px-4">String</td>
                                    <td class="pt-2 pb-2 px-4">Pesan pengembalian</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">data</td>
                                    <td class="pt-2 pb-2 px-4">Array</td>
                                    <td class="pt-2 pb-2 px-4">Data pengembalian</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">&nbsp;&nbsp;&nbsp;angkatan</td>
                                    <td class="pt-2 pb-2 px-4">Number</td>
                                    <td class="pt-2 pb-2 px-4">Angkatan alumni AIS/STIS/Polstat STIS</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">&nbsp;&nbsp;&nbsp;nama</td>
                                    <td class="pt-2 pb-2 px-4">String</td>
                                    <td class="pt-2 pb-2 px-4">Nama lengkap alumni</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">&nbsp;&nbsp;&nbsp;nim</td>
                                    <td class="pt-2 pb-2 px-4">Number</td>
                                    <td class="pt-2 pb-2 px-4">Nomor Induk Mahasiswa saat menjadi mahasiswa AIS/STIS/Polstat STIS</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">&nbsp;&nbsp;&nbsp;jenis_kelamin</td>
                                    <td class="pt-2 pb-2 px-4">String</td>
                                    <td class="pt-2 pb-2 px-4">Jenis kelamin alumni</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">&nbsp;&nbsp;&nbsp;status_bekerja</td>
                                    <td class="pt-2 pb-2 px-4">Number</td>
                                    <td class="pt-2 pb-2 px-4">Status bekerja alumni di BPS. Nilai '1' jika alumni bekerja di BPS dan '0' jika alumni tidak bekerja di BPS</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">&nbsp;&nbsp;&nbsp;jabatan_terakhir</td>
                                    <td class="pt-2 pb-2 px-4">String</td>
                                    <td class="pt-2 pb-2 px-4">Jabatan terakhir alumni</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">&nbsp;&nbsp;&nbsp;aktif_pns</td>
                                    <td class="pt-2 pb-2 px-4">Number</td>
                                    <td class="pt-2 pb-2 px-4">Status aktif PNS. Nilai '1' jika alumni aktif/masih aktif sebagai PNS dan '0' jika alumni tidak/sudah tidak aktif sebagai PNS</td>
                                </tr>
                                <tr class="h-5 formEdit">
                                    <td colspan="8" class="rounded-b-3xl"></td>
                                </tr>
                            </tbody>
                            <!-- end isi tabel Sub Data 1.1 -->
                        </table>
                    </div>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4 mb-1">Success Response</h1>
                    <div class="bg-black p-3 rounded-xl w-full text-white sm:text-sm text-xs overflow-x-auto">
                        <code>
                            <pre>
{
  <span class="field-response">"status"</span>: <span class="text-secondary">"200"</span>,
  <span class="field-response">"message"</span>: <span class="text-secondary">"Successful!"</span>,
  <span class="field-response">"data"</span>: [
    {
        <span class="field-response">"angaktan"</span>: <span class="text-secondary">9</span>,
        <span class="field-response">"nama"</span>: <span class="text-secondary">"Haillyn Ethan Callisto"</span>,
        <span class="field-response">"nim"</span>: <span class="text-secondary">223099999</span>
        <span class="field-response">"jenis_kelamin"</span>: <span class="text-secondary">"P"</span>,
        <span class="field-response">"status_bekerja"</span>: <span class="text-secondary">1</span>,
        <span class="field-response">"jabatan_terakhir"</span>: <span class="text-secondary">"Kasubbag umum"</span>,
        <span class="field-response">"aktif_pns"</span>: <span class="text-secondary">1</span>,
    }
  ]
}
                           </pre>
                        </code>
                    </div>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4 mb-1">Error 40x</h1>
                    <div class="overflow-x-auto shadow-2xl rounded-3xl mb-3">
                        <!-- mulai tabel -->
                        <table class="w-full sm:text-sm text-xs rounded-3xl shadow-2xl md:shadow-none font-paragraph text-black text-justify">
                            <!-- start nama kolom tabel Sub Data 1.1 -->
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="pt-6 pb-6 px-4">Field</th>
                                    <th class="pt-6 pb-6 px-4">Type</th>
                                    <th class="pt-6 pb-6 px-4">Description</th>
                                </tr>
                            </thead>
                            <!-- end nama kolom tabel Sub Data 1.1 -->

                            <!-- start isi tabel Sub Data 1.1 -->
                            <tbody>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">status</td>
                                    <td class="pt-2 pb-2 px-4">String</td>
                                    <td class="pt-2 pb-2 px-4">Status pengembalian</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">message</td>
                                    <td class="pt-2 pb-2 px-4">String</td>
                                    <td class="pt-2 pb-2 px-4">Pesan pengembalian</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">data</td>
                                    <td class="pt-2 pb-2 px-4">Array</td>
                                    <td class="pt-2 pb-2 px-4">Data pengembalian</td>
                                </tr>
                            </tbody>
                            <!-- end isi tabel Sub Data 1.1 -->
                        </table>
                    </div>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4 mb-1">Error 401 Response</h1>
                    <div class="bg-black p-3 rounded-xl w-full text-white sm:text-sm text-xs overflow-x-auto">
                        <code>
                            <pre>
{
  <span class="field-response">"status"</span>: <span class="text-secondary">"401"</span>,
  <span class="field-response">"message"</span>: <span class="text-secondary">"Please input an api-key!"</span>,
  <span class="field-response">"data"</span>: []
}
                           </pre>
                        </code>
                    </div>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4 mb-1">Error 403 Response</h1>
                    <div class="bg-black p-3 rounded-xl w-full text-white sm:text-sm text-xs overflow-x-auto">
                        <code>
                            <pre>
{
  <span class="field-response">"status"</span>: <span class="text-secondary">"403"</span>,
  <span class="field-response">"message"</span>: <span class="text-secondary">"Forbidden!"</span>,
  <span class="field-response">"data"</span>: []
}
                           </pre>
                        </code>
                    </div>


                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-8 mb-1">Alumni Profile List</h1>
                    <div class="bg-black p-3 rounded-xl w-full sm:text-sm text-xs overflow-auto">
                        <code>
                            <span style="color: #8bc;">http:</span><span class="text-secondary">//localhost:8080/api/alumni?api_key=&nim=&list=</span>
                        </code>
                    </div>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4 mb-1">Parameter</h1>
                    <div class="overflow-x-auto shadow-2xl rounded-3xl mb-3">
                        <!-- mulai tabel -->
                        <table class="w-full sm:text-sm text-xs rounded-3xl shadow-2xl md:shadow-none font-paragraph text-black sm:text-justify text-left">
                            <!-- start nama kolom tabel Sub Data 1.2 -->
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="pt-6 pb-6 px-4">Field</th>
                                    <th class="pt-6 pb-6 px-4">Type</th>
                                    <th class="pt-6 pb-6 px-4">Description</th>
                                </tr>
                            </thead>
                            <!-- end nama kolom tabel Sub Data 1.2 -->

                            <!-- start isi tabel Sub Data 1.2 -->
                            <tbody>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">api_key</td>
                                    <td class="pt-2 pb-2 px-4">String</td>
                                    <td class="pt-2 pb-2 px-4">Key untuk mengakses API</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">nim</td>
                                    <td class="pt-2 pb-2 px-4">Number</td>
                                    <td class="pt-2 pb-2 px-4">Nomor Induk Mahasiswa AIS/STIS/Polstat STIS</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">list</td>
                                    <td class="pt-2 pb-2 px-4">Number</td>
                                    <td class="pt-2 pb-2 px-4">Untuk mengakses informasi dasar alumni. Nilai yang diterima '1' atau '0'. 1 untuk mendapatkan informasi dasar seluruh alumni, sedangkan 0 untuk mendapatkan informasi dasar seorang alumni saja</td>
                                </tr>
                                <tr class="h-5 formEdit">
                                    <td colspan="8" class="rounded-b-3xl"></td>
                                </tr>
                            </tbody>
                            <!-- end isi tabel Sub Data 1.2 -->
                        </table>
                    </div>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4 mb-1">Success 200</h1>
                    <div class="overflow-x-auto shadow-2xl rounded-3xl mb-3">
                        <!-- mulai tabel -->
                        <table class="w-full sm:text-sm text-xs rounded-3xl shadow-2xl md:shadow-none font-paragraph text-black sm:text-justify text-left">
                            <!-- start nama kolom tabel Sub Data 1.1 -->
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="pt-6 pb-6 px-4">Field</th>
                                    <th class="pt-6 pb-6 px-4">Type</th>
                                    <th class="pt-6 pb-6 px-4">Description</th>
                                </tr>
                            </thead>
                            <!-- end nama kolom tabel Sub Data 1.1 -->

                            <!-- start isi tabel Sub Data 1.1 -->
                            <tbody>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">status</td>
                                    <td class="pt-2 pb-2 px-4">String</td>
                                    <td class="pt-2 pb-2 px-4">Status pengembalian</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">message</td>
                                    <td class="pt-2 pb-2 px-4">String</td>
                                    <td class="pt-2 pb-2 px-4">Pesan pengembalian</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">data</td>
                                    <td class="pt-2 pb-2 px-4">Array</td>
                                    <td class="pt-2 pb-2 px-4">Data pengembalian</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">&nbsp;&nbsp;&nbsp;angkatan</td>
                                    <td class="pt-2 pb-2 px-4">Number</td>
                                    <td class="pt-2 pb-2 px-4">Angkatan alumni AIS/STIS/Polstat STIS</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">&nbsp;&nbsp;&nbsp;nama</td>
                                    <td class="pt-2 pb-2 px-4">String</td>
                                    <td class="pt-2 pb-2 px-4">Nama lengkap alumni</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">&nbsp;&nbsp;&nbsp;nim</td>
                                    <td class="pt-2 pb-2 px-4">Number</td>
                                    <td class="pt-2 pb-2 px-4">Nomor Induk Mahasiswa saat menjadi mahasiswa AIS/STIS/Polstat STIS</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">&nbsp;&nbsp;&nbsp;jenis_kelamin</td>
                                    <td class="pt-2 pb-2 px-4">String</td>
                                    <td class="pt-2 pb-2 px-4">Jenis kelamin alumni</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">&nbsp;&nbsp;&nbsp;status_bekerja</td>
                                    <td class="pt-2 pb-2 px-4">Number</td>
                                    <td class="pt-2 pb-2 px-4">Status bekerja alumni di BPS. Nilai '1' jika alumni bekerja di BPS dan '0' jika alumni tidak bekerja di BPS</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">&nbsp;&nbsp;&nbsp;jabatan_terakhir</td>
                                    <td class="pt-2 pb-2 px-4">String</td>
                                    <td class="pt-2 pb-2 px-4">Jabatan terakhir alumni</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">&nbsp;&nbsp;&nbsp;aktif_pns</td>
                                    <td class="pt-2 pb-2 px-4">Number</td>
                                    <td class="pt-2 pb-2 px-4">Status aktif PNS. Nilai '1' jika alumni aktif/masih aktif sebagai PNS dan '0' jika alumni tidak/sudah tidak aktif sebagai PNS</td>
                                </tr>
                                <tr class="h-5 formEdit">
                                    <td colspan="8" class="rounded-b-3xl"></td>
                                </tr>
                            </tbody>
                            <!-- end isi tabel Sub Data 1.1 -->
                        </table>
                    </div>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4 mb-1">Success Response</h1>
                    <div class="bg-black p-3 rounded-xl w-full text-white sm:text-sm text-xs overflow-x-auto">
                        <code>
                            <pre>
{
  <span class="field-response">"status"</span>: <span class="text-secondary">"200"</span>,
  <span class="field-response">"message"</span>: <span class="text-secondary">"Successful!"</span>,
  <span class="field-response">"data"</span>: [
    {
        <span class="field-response">"angaktan"</span>: <span class="text-secondary">57</span>,
        <span class="field-response">"nama"</span>: <span class="text-secondary">"Dummy_dummy"</span>,
        <span class="field-response">"nim"</span>: <span class="text-secondary">221810160</span>
        <span class="field-response">"jenis_kelamin"</span>: <span class="text-secondary">"L"</span>,
        <span class="field-response">"status_bekerja"</span>: <span class="text-secondary">1</span>,
        <span class="field-response">"jabatan_terakhir"</span>: <span class="text-secondary">"admin_web"</span>,
        <span class="field-response">"aktif_pns"</span>: <span class="text-secondary">1</span>,
    },
    {
        <span class="field-response">"angaktan"</span>: <span class="text-secondary">9</span>,
        <span class="field-response">"nama"</span>: <span class="text-secondary">"Haillyn Ethan Callisto"</span>,
        <span class="field-response">"nim"</span>: <span class="text-secondary">223099999</span>
        <span class="field-response">"jenis_kelamin"</span>: <span class="text-secondary">"P"</span>,
        <span class="field-response">"status_bekerja"</span>: <span class="text-secondary">1</span>,
        <span class="field-response">"jabatan_terakhir"</span>: <span class="text-secondary">"Kasubbag umum"</span>,
        <span class="field-response">"aktif_pns"</span>: <span class="text-secondary">1</span>,
    },
    {
        <span class="field-response">"angaktan"</span>: <span class="text-secondary">1</span>,
        <span class="field-response">"nama"</span>: <span class="text-secondary">"Johanes Aristo"</span>,
        <span class="field-response">"nim"</span>: <span class="text-secondary">340000888</span>
        <span class="field-response">"jenis_kelamin"</span>: <span class="text-secondary">"L"</span>,
        <span class="field-response">"status_bekerja"</span>: <span class="text-secondary">0</span>,
        <span class="field-response">"jabatan_terakhir"</span>: <span class="text-secondary">"Kepala K.S Tk I (Tipe A)"</span>,
        <span class="field-response">"aktif_pns"</span>: <span class="text-secondary">0</span>,
    },
    {
        <span class="field-response">"angaktan"</span>: <span class="text-secondary">1</span>,
        <span class="field-response">"nama"</span>: <span class="text-secondary">"Kayla Hasan"</span>,
        <span class="field-response">"nim"</span>: <span class="text-secondary">340000989</span>
        <span class="field-response">"jenis_kelamin"</span>: <span class="text-secondary">"P"</span>,
        <span class="field-response">"status_bekerja"</span>: <span class="text-secondary">0</span>,
        <span class="field-response">"jabatan_terakhir"</span>: <span class="text-secondary">"Wakil Kepala Biro Pusat Statistik"</span>,
        <span class="field-response">"aktif_pns"</span>: <span class="text-secondary">0</span>,
    },
    {
        <span class="field-response">"angaktan"</span>: <span class="text-secondary">1</span>,
        <span class="field-response">"nama"</span>: <span class="text-secondary">"Muhammad Reno"</span>,
        <span class="field-response">"nim"</span>: <span class="text-secondary">340000759</span>
        <span class="field-response">"jenis_kelamin"</span>: <span class="text-secondary">"L"</span>,
        <span class="field-response">"status_bekerja"</span>: <span class="text-secondary">0</span>,
        <span class="field-response">"jabatan_terakhir"</span>: <span class="text-secondary">"Kepala Badan Pusat Statistik"</span>,
        <span class="field-response">"aktif_pns"</span>: <span class="text-secondary">0</span>,
    }
  ]
}
                           </pre>
                        </code>
                    </div>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4 mb-1">Error 40x</h1>
                    <div class="overflow-x-auto shadow-2xl rounded-3xl mb-3">
                        <!-- mulai tabel -->
                        <table class="w-full sm:text-sm text-xs rounded-3xl shadow-2xl md:shadow-none font-paragraph text-black text-justify">
                            <!-- start nama kolom tabel Sub Data 1.1 -->
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="pt-6 pb-6 px-4">Field</th>
                                    <th class="pt-6 pb-6 px-4">Type</th>
                                    <th class="pt-6 pb-6 px-4">Description</th>
                                </tr>
                            </thead>
                            <!-- end nama kolom tabel Sub Data 1.1 -->

                            <!-- start isi tabel Sub Data 1.1 -->
                            <tbody>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">status</td>
                                    <td class="pt-2 pb-2 px-4">String</td>
                                    <td class="pt-2 pb-2 px-4">Status pengembalian</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">message</td>
                                    <td class="pt-2 pb-2 px-4">String</td>
                                    <td class="pt-2 pb-2 px-4">Pesan pengembalian</td>
                                </tr>
                                <tr class="border-t-2 border-b-2 bg-white">
                                    <td class="pt-2 pb-2 px-4">data</td>
                                    <td class="pt-2 pb-2 px-4">Array</td>
                                    <td class="pt-2 pb-2 px-4">Data pengembalian</td>
                                </tr>
                            </tbody>
                            <!-- end isi tabel Sub Data 1.1 -->
                        </table>
                    </div>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4 mb-1">Error 401 Response</h1>
                    <div class="bg-black p-3 rounded-xl w-full text-white sm:text-sm text-xs overflow-x-auto">
                        <code>
                            <pre>
{
  <span class="field-response">"status"</span>: <span class="text-secondary">"401"</span>,
  <span class="field-response">"message"</span>: <span class="text-secondary">"Please input an api-key!"</span>,
  <span class="field-response">"data"</span>: []
}
                           </pre>
                        </code>
                    </div>
                    <h1 class="font-bold text-black lg:text-lg md:text-base text-sm mt-4 mb-1">Error 403 Response</h1>
                    <div class="bg-black p-3 rounded-xl w-full text-white sm:text-sm text-xs overflow-x-auto">
                        <code>
                            <pre>
{
  <span class="field-response">"status"</span>: <span class="text-secondary">"403"</span>,
  <span class="field-response">"message"</span>: <span class="text-secondary">"Forbidden!"</span>,
  <span class="field-response">"data"</span>: []
}
                           </pre>
                        </code>
                    </div>
                    <!-- mulai source code -->

        </section>
    </div>

</div>
<?= $this->endSection(); ?>
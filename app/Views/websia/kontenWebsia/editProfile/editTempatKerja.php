<?= $this->extend('websia/kontenWebsia/editProfile/layoutEdit.php'); ?>

<?= $this->section('contentEdit'); ?>
<div class="shadow-2xl rounded-3xl mb-8">
    <div class="p-6 font-paragraph text-primary lg:min-h-screen">
        <!-- start form edit tempat kerja -->
        <form action="" method="POST" id="formEditTempatKerja">
            <!-- note: belum ada action -->
            <!-- kalau nama instansi ada di database -->
            <div>
                <div id="adainstansi" class="block">
                    <label for="namainstansi" class="font-medium">Nama Instansi:</label>
                    <input list="daftarInstansi" name="instansi" id="instansi" placeholder="Masukkan nama instansi" class="inputForm">
                    <datalist id="daftarInstansi" class="font-paragraph">
                        <option value="BPS Republik Indonesia"></option>
                        <option value="BPS Provinsi DKI Jakarta"></option>
                        <option value="BPS Kota Jakarta Timur"></option>
                        <option value="BPS Kabupaten Magelang"></option>
                        <option value="BPS Kabupaten Humbang Hasundutan"></option>
                        <option value="BPS Provinsi Lampung"></option>
                        <option value="BPS Provinsi Sumatera Utara"></option>
                        <option value="BPS Provinsi Kalimantan Barat"></option>
                        <option value="BPS Provinsi Jawa Tengah"></option>
                        <option value="BPS Provinsi Jawa Timur"></option>
                        <option value="BPS Provinsi Jawa Barat"></option>
                        <option value="BPS Provinsi Banten"></option>
                        <option value="BPS Provinsi Bali"></option>
                        <option value="BPS Provinsi Nusa Tenggara Timur"></option>
                        <option value="BPS Provinsi Nusa Tenggara Barat"></option>
                        <option value="BPS Kabupaten Tapanuli Selatan"></option>
                        <option value="BPS Kabupaten Musi Banyu Asin"></option>
                    </datalist>
                    <div class="flex gap-x-2 items-center">
                        <div>
                            Jika nama instansi Anda tidak terdaftar pada daftar di atas, tambahkan instansi Anda di sini:
                        </div>
                        <div class="bg-primary text-white rounded-full py-1 px-3 text-center cursor-pointer hover:bg-primaryHover transition-colors duration-300 my-2 tambahInstansi">TAMBAH</div>
                    </div>
                </div>
            </div>
            <!-- kalau nama instansi ga ada di database -->
            <div class="hidden" id="lainnya">
                <div class="flex gap-x-2 items-center mb-4">
                    <div>
                        Cari instansi Anda pada daftar instansi:
                    </div>
                    <div class="bg-primary text-white rounded-full py-1 px-3 text-center cursor-pointer hover:bg-primaryHover transition-colors duration-300 my-2 kembaliInstansi">DAFTAR INSTANSI</div>
                </div>
                <label for="nama" class="font-medium">Nama Instansi:</label>
                <input type="text" name="nama" id="nama" class="inputForm" placeholder="Nama Instansi">
                <label for="alamat" class="font-medium">Alamat Instansi:</label>
                <textarea type="text" name="alamat" id="alamat" class="inputForm resize-none" placeholder="Jl. Terwilen Margodadi, Segeyan, Kregolan, Margomulyo, Kec. Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55561"></textarea>
                <div class="md:w-1/2 w-full">
                    <label for="telepon" class="font-medium">No Telepon Instansi:</label>
                    <input type="text" name="telepon" id="telepon" class="inputForm" placeholder="082233445566">
                    <label for="faks" class="font-medium">Faks Instansi:</label>
                    <input type="text" name="faks" id="faks" class="inputForm" placeholder="082233445566">
                    <label for="email" class="font-medium">Email:</label>
                    <input type="text" name="email" id="email" class="inputForm" placeholder="iniemail@stis.ac.id">
                </div>
            </div>
            <div class="flex justify-end md:mb-6 mt-12">
                <input type="submit" value="SIMPAN" class="w-24 text-center py-1 bg-secondary hover:bg-secondaryhover text-white rounded-full cursor-pointer focus:outline-none" id="submitTempatKerja">
            </div>
        </form>
        <!-- end form edit tempat kerja -->
    </div>
</div>
<?= $this->endSection(); ?>
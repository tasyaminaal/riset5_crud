<?= $this->extend('websia/kontenWebsia/editProfile/layoutEdit.php'); ?>

<?= $this->section('contentEdit'); ?>
<div class="shadow-2xl rounded-3xl">
    <div class="p-6 font-paragraph text-primary lg:min-h-screen">
        <form action="/Home/editTempatKerja" method="POST" id="formEditTempatKerja">
            <label for="nama" class="font-medium">Nama Instansi:</label>
            <input type="text" name="nama" id="nama" class="inputForm" placeholder="Nama Instansi">
            <label for="alamat" class="font-medium">Alamat Instansi:</label>
            <textarea type="text" name="alamat" id="alamat" class="inputForm resize-none" placeholder="Jl. Terwilen Margodadi, Segeyan, Kregolan, Margomulyo, Kec. Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55561"></textarea>
            <div class="md:w-1/2 w-full mt-2">
                <label for="telepon" class="font-medium">No Telepon Instansi:</label>
                <input type="text" name="telepon" id="telepon" class="inputForm" placeholder="082233445566">
                <label for="faks" class="font-medium">Faks Instansi:</label>
                <input type="text" name="faks" id="faks" class="inputForm" placeholder="082233445566">
                <label for="email" class="font-medium">Email:</label>
                <input type="text" name="email" id="email" class="inputForm" placeholder="iniemail@stis.ac.id">
            </div>
            <div class="flex justify-end md:mb-6 mt-48">
                <input type="submit" value="SIMPAN" class="w-24 text-center py-1 bg-secondary hover:bg-secondaryhover text-white rounded-full cursor-pointer" id="submitTempatKerja">
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>

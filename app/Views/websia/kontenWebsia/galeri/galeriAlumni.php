<?= $this->extend('websia/layoutWebsia/templateBerandaLogin.php'); ?>

<?= $this->section('content'); ?>
<!-- Awal Galeri Alumni -->
<div class="text-center">
    <div id="coba" class="coba mt-8 text-2xl font-bold font-heading">
        Galeri Kenangan Alumni
    </div>
    <div class="flex items-center justify-center mt-4 mb-8">
        <div class="flex justify-between items-center rounded-3xl text-sm bg-secondary text-white hover:bg-yellow-500 transition-colors duration-300">
            <!-- Awal dropdown button album -->
            <div class="dropdown font-paragraph">
                <button class="px-2 py-1">
                    ALBUM
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="inline w-6 text-white">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    <!-- awal konten dropdown -->
                    <div class="dropdown-content content-center mt-1">
                        <a href="" class="text-secondary bg-white border-b-2 hover:border-secondary hover:bg-gray-100 py-2 px-3 text-left transiton duration-300"> ALBUM </a>
                        <a href="" class="text-secondary bg-white border-b-2 hover:border-secondary hover:bg-gray-100 py-2 px-3 text-left transiton duration-300"> ALBUM </a>
                        <a href="" class="text-secondary bg-white border-b-2 hover:border-secondary hover:bg-gray-100 py-2 px-3 text-left transiton duration-300"> ALBUM </a>
                    </div>
                    <!-- akhir konten dropdown -->
                </button>
            </div>
            <!-- Akhir dropdown button album -->
        </div>
    </div>
</div>
<div class="bg-primary">
    <div class="py-4">
        <div class="holder p-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-4">
            <!-- Awal Tampilan Galeri (Buat ditambahkan coding sesuai gambar dari database) -->
            <?php for ($x = 0; $x < 12; $x++) : ?>
                <!-- 1 gambar -->
                <a href="#img-1">
                    <div class="rounded-3xl m-2 relative hover:shadow-xl transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105 cursor-pointer">
                        <img class="w-full rounded-3xl mx-auto" src="/img/alumni.jpg" alt="" />
                    </div>
                </a>
            <?php endfor; ?>
            <!-- Akhir Tampilan Galeri -->
            <!-- Awal Image viewer (Ketika gambar diklik) -->
            <div class="overlay" id="img-1">
                <a href="#" class="close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="absolute w-8 text-gray-300 top-3 right-3">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </a>
                <!-- Tombol navigasi previous dan next (Karena gambarnya masih sama semua jadi linknya diarahkan ke gambar yang sama) -->
                <a href="#img-1">
                    <img src="/img/left-on.png" alt="" class="absolute top-32 sm:top-1/3">
                    <img src="/img/right-on.png" alt="" class="absolute top-32 right-0 sm:top-1/3">
                </a>
                <!-- Gambar yang ditampilkan sesuai dengan gambar yang diklik -->
                <img src="/img/alumni.jpg" alt="" class="w-full sm:max-w-screen-sm">
                <p class="mx-12 mt-2 sm:mx-24 md:mx-40 lg:mx-48 text-center text-gray-300 font-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam impedit optio praesentium soluta quasi. Voluptatibus molestias sequi inventore odit voluptas pariatur a ut, totam obcaecati accusamus iure, labore dolorum dolor.</p>
            </div>
            <!-- Akhir Image viewer -->
        </div>
        <!-- Awal Navigasi -->
        <div class="flex justify-center md:justify-end items-center mx-8 p-2 text-secondary font-paragraph">
            <a href="" class="p-1 rounded-full w-7 transform hover:scale-110">
                <img src="/img/left-on.png" alt="">
            </a>
            <a href="" class="p-1 hover:text-white">
                1
            </a>
            <a href="" class="p-1 hover:text-white">
                2
            </a>
            <a href="" class="p-1 hover:text-white">
                ..
            </a>
            <a href="" class="p-1 hover:text-white">
                45
            </a>
            <a href="" class="p-1 rounded-full w-7 transform hover:scale-110">
                <img src="/img/right-on.png" alt=""></a>
        </div>
        <!-- Akhir Navigasi -->
    </div>
</div>

<!-- Awal fitur unggah foto galeri -->
<div class="flex flex-col-reverse md:grid md:grid-cols-4 lg:grid-cols-5 md:gap-4">
    <div class="md:col-span-2 lg:col-span-3">
        <div class="flex flex-col mx-6 md:m-6">
            <div class="mt-5 md:mt-1 text-center md:text-left text-3xl text-secondary font-bold font-heading">
                Mama Lorent
            </div>
            <div class="my-4 md:my-5 font-paragraph italic text-base lg:text-xl">
                "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit adipisci sed fuga, earum fugit reiciendis repellendus maxime at quia dolore similique cupiditate inventore accusantium autem exercitationem ratione, natus minus fugiat?"
            </div>
            <button class="p-1 rounded-3xl text-base lg:text-xl bg-secondary border-2 border-secondary text-white hover:bg-white hover:border-2 hover:border-secondary hover:text-secondary transition-colors duration-300 font-paragraph text-base lg:text-xl">UNGGAH KENANGANMU</button>
            <label for="komentar" class="mt-5 font-paragraph text-red-400">*Wajib diisi</label>
            <input type="text" name="komentar" placeholder="Komentar.." class="mb-6 p-2 border-2 border-gray-300 rounded-xl font-paragraph focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" required>
            <div class="text-right">
                <button class="py-1 px-6 text-right rounded-3xl bg-secondary border-2 border-secondary text-white hover:bg-white hover:border-2 hover:border-secondary hover:text-secondary transition-colors duration-300 font-paragraph text-base lg:text-xl">KIRIM</button>
            </div>
        </div>
    </div>
    <div class="md:col-span-2 lg:col-span-2">
        <div class="">
            <img src="/img/galeri.png" alt="" class="w-full md:h-full md:w-auto">
        </div>
    </div>
</div>
</div>
<!-- Akhir fitur unggah foto galeri -->
<!-- Akhir Galeri Alumni -->
<?= $this->endSection(); ?>
<?= $this->extend('websia/layoutWebsia/templateBerandaLogin.php'); ?>

<?= $this->section('content'); ?>
<!-- Awal Galeri Alumni -->
<div class="text-center">
    <div class="mt-10 text-2xl font-bold font-heading">
        Galeri Video Wisuda AIS/STIS/Polstat STIS
    </div>
</div>
<div class="">
    <div class="py-4">
        <div class="holder p-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-x-4 gap-y-10">
            <?php for ($x = 0; $x < 12; $x++) : ?>
                <!-- 1 video -->
                <div class="gal-image m-2 bg-primary relative border border-white hover:shadow-xl transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                    <iframe class="h-full w-full" src="https://www.youtube.com/embed/tlty5mFRCKY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="font-paragraph text-center text-white bg-primary py-2 border-t border-t-white">Video Wisuda Tahun X</div>
                </div>
            <?php endfor; ?>
        </div>
        <!-- Awal Navigasi -->
        <div class="flex justify-center md:justify-end items-center mx-8 p-2 text-secondary font-paragraph">
            <a href="" class="p-1 w-8 transform hover:scale-110">
                <img src="/img/left-on.png" alt="">
            </a>
            <a href="" class="p-1 hover:text-primary">
                1
            </a>
            <a href="" class="p-1 hover:text-primary">
                2
            </a>
            <a href="" class="p-1 hover:text-primary">
                ..
            </a>
            <a href="" class="p-1 hover:text-primary">
                45
            </a>
            <a href="" class="p-1 w-8 transform hover:scale-110">
                <img src="/img/right-on.png" alt=""></a>
        </div>
        <!-- Akhir Navigasi -->
    </div>
</div>
</div>
<!-- Akhir Galeri Alumni -->
<?= $this->endSection(); ?>
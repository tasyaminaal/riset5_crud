<?= $this->extend('websia/layoutWebsia/templateBerandaLogin.php'); ?>

<?= $this->section('content'); ?>

<div class="flex w-full">

    <!-- awal sidebar -->
    <?= $this->include('websia/kontenWebsia/searchAndFilter/sidebarFilter'); ?>
    <!-- akhir sidebar -->

    <!-- awal Hasil Pencarian  -->
    <div class=" ml-2 flex-grow min-h-screen ">
        <div class="flex">

            <!-- awal -> ini hanya untuk margin sidebar jadi jangan ubah kecuali jika ubah ukuran sidebarnya  -->
            <div class=" md:hidden invisible">
                <div class="flex md:px-4 px-2 py-1 justify-between bg-primaryHover">
                    <svg class="w-4 fill-current text-secondary cursor-pointer" id="hamburgerSidebar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </div>
            </div>
            <!-- akhir -> ini hanya untuk margin sidebar jadi jangan ubah kecuali jika ubah ukuran sidebarnya  -->

            <div class="flex-grow" id="hasilPencarian">
                <!-- Catatan : jika hasil tidak ada, bisa isi id="hasilPencarian" dengan coding yang ada pada searchKosong.php  -->

                <!-- HASIL PENCARIAN ALUMNI -->
                <div class="md:ml-12 mx-3 mt-2">
                    <div id="cariAlumni">
                        <h1 class="text-secondary font-heading text-2xl font-bold">ALUMNI</h1>

                        <!-- awal jumlah hasil pencarian alumni  -->
                        <div id="jumlahAlumni" class="text-primary md:mb-6 mb-2 font-paragraph font-extralight text-sm">
                            <?= $jumlah['text']; ?>
                        </div>
                        <hr class="md:my-4 my-2 border-2 border-gray-400">
                        <!-- akhir jumlah hasil pencarian alumni  -->

                        <!-- Awal DAFTAR HASIL PENCARIAN ALUMNI -->
                        <div id="filterAlumni">
                            <?php foreach ($alumni1 as $row) : ?>
                                <!-- Awal Card Alumni -->
                                <a href="/User/profilAlumni?nim=<?= $row['nim'] ?>">
                                    <div class="mx-2">
                                        <div class="flex gap-x-4">
                                            <div class="flex items-center">
                                                <img src="/img/avatar.png" class="lg:w-18 w-12 mx-auto" alt="">
                                            </div>
                                            <div class="flex items-center">
                                                <div>
                                                    <!-- Awal Nama Alumni -->
                                                    <h2 class="md:text-lg font-heading text-primary font-semibold"><?= $row['nama']; ?></h2>
                                                    <!-- Akhir Nama Alumni -->

                                                    <!-- Awal Atribut Alumni -->
                                                    <div class="md:text-sm text-xs font-paragraph text-primary">Angkatan <?= $row['angkatan']; ?></div>
                                                    <!-- Akhir Atribut Alumni -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- Akhir Card Alumni -->

                                <hr class="my-4 border-gray-400">
                            <?php endforeach; ?>
                            <hr class="-my-4 border-2 border-gray-400">
                        </div>

                        <nav id="pager" class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                            <?= $pager->links() ?>
                        </nav>

                        <!-- awal tulisan "Selengkapnya" di hasil pencarian -->
                        <div class="flex justify-end mt-12">
                            <div class="flex bg-secondary text-white rounded-full md:py-2 py-1 md:px-3 px-2 items-center gap-x-2 cursor-pointer md:text-sm text-xs">
                                Selengkapnya
                                <img src="/img/right-off.png" class="md:w-4 md:h-4 w-3 h-3 my-auto" alt="">
                            </div>
                        </div>
                        <!-- akhir tulisan "Selengkapnya" di hasil pencarian -->

                        <!-- Akhir DAFTAR HASIL PENCARIAN ALUMNI -->
                    </div>
                </div>
                <!-- AKHIR HASIL PENCARIAN ALUMNI -->

                <!-- HASIL PENCARIAN BERITA -->
                <div class="md:ml-12 mx-3 mt-2">
                    <div>
                        <h1 class="text-secondary font-heading text-2xl font-bold">BERITA</h1>

                        <!-- awal jumlah hasil pencarian berita  -->
                        <div class="text-primary md:mb-6 mb-2 font-paragraph font-extralight text-sm">
                            Sekitar 28.899 hasil pencarian berita
                        </div>
                        <hr class="md:my-4 my-2 border-2 border-gray-400">
                        <!-- akhir jumlah hasil pencarian berita  -->


                        <!-- Awal DAFTAR HASIL PENCARIAN BERITA -->
                        <div>
                            <?php for ($x = 0; $x < 4; $x++) : ?>
                                <!-- Awal Card Berita  -->
                                <a href="">
                                    <div class="flex px-2 md:flex-row flex-col md:gap-x-4 gap-x-0 items-center">
                                        <img src="/img/sampel.jpeg" alt="" class="md:w-48 w-full gambarBerita">
                                        <div class="flex-grow">
                                            <div class="flex flex-col">

                                                <!-- Awal Judul Berita  -->
                                                <h2 class="text-lg font-heading text-primary font-semibold mb-2">Judul Berita</h2>
                                                <!-- Akhir Judul Berita  -->

                                                <!-- Awal Tanggal Berita  -->
                                                <div class="text-xs font-paragraph text-primary">11 Januari 2021</div>
                                                <!-- Akhir Tanggal Berita  -->

                                                <!-- Awal Deskripsi Berita  -->
                                                <div class="text-sm font-paragraph break-words ">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras blandit turpis sem, eu laoreet odio pretium ac. Mauris eget aliquet lorem. Cras dignissim leo non ante molestie, at vulputate justo lobortis. Pellentesque quam elit, mattis eu nibh et, maximus congue mauris
                                                </div>
                                                <!-- Akhir Tanggal Berita  -->

                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- Akhir Card Berita  -->

                                <hr class="my-4 border-gray-400">
                            <?php endfor; ?>
                            <hr class="-my-4 border-2 border-gray-400">
                        </div>

                        <!-- awal tulisan "Selengkapnya" di hasil pencarian -->
                        <div class="flex justify-end mt-12" id="beritaSelengkapnya">
                            <div class="flex bg-secondary text-white rounded-full md:py-2 py-1 md:px-3 px-2 items-center gap-x-2 cursor-pointer md:text-sm text-xs">
                                Selengkapnya
                                <img src="/img/right-off.png" class="md:w-4 md:h-4 w-3 h-3" alt="">
                            </div>
                        </div>
                        <!-- akhir tulisan "Selengkapnya" di hasil pencarian -->

                        <!-- Akhir DAFTAR HASIL PENCARIAN BERITA -->
                    </div>
                </div>

                <!-- END HASIL PENCARIAN BERITA -->
            </div>
        </div>
    </div>
    <!-- akhir Hasil Pencarian  -->


</div>

<script>
    let x;
    let string = "<a href='/User/profilAlumni?nim={nim}'><div class='mx-2'><div class='flex gap-x-4'><div class='flex items-center'><img src='/img/avatar.png' class='lg:w-18 w-12 mx-auto' alt=''></div><div class='flex items-center'><div><!-- Awal Nama Alumni --><h2 class='md:text-lg font-heading text-primary font-semibold'>{nama}</h2><!-- Akhir Nama Alumni --><!-- Awal Atribut Alumni --><div class='md:text-sm text-xs font-paragraph text-primary'>Angkatan {akt}</div><!-- Akhir Atribut Alumni --></div></div></div></div></a><!-- Akhir Card Alumni --><hr class='my-4 border-gray-400'>";

    function search($cari = null) {
        if (x) window.clearTimeout(x);
        x = setTimeout(function() {
            cari = $("input[name=cari]").val();
            $.ajax({
                url: "<?php base_url('user/searchAndFilter'); ?>",
                type: 'POST',
                data: {
                    'cari': cari
                },
                // data: 'cari=' + cari + '&akt=' + $("#cariAngkatan").val(),

                success: (data) => {
                    data = JSON.parse(data);
                    $('#filterAlumni').empty()
                    $('#jumlahAlumni').html(data.jumlah)
                    if (data.ret) {
                        $.each(data.data, (i, item) => {
                            $('#filterAlumni').append(string.replace('{nama}', item.nama).replace('{nim}', item.nim).replace('{akt}', item.angkatan))
                        })
                        $('#filterAlumni').append("<hr class='-my-4 border-2 border-gray-400'>")
                        $('#pager').html(data.pager)
                        $.each($('.pagination a'), (i, item) => {
                            item.href += data.search
                        })
                    } else {
                        $('#filterAlumni').append(`<div class=" ml-2 flex-grow min-h-screen "><img src="/img/pencarianKosong.png" class="w-96 mx-auto" alt=""><div class="text-primary text-center font-bold md:text-xl -mt-8 mx-auto">Hasil Pencarian Tidak Ditemukan</div><hr class="border-b-2 border-t-0 w-32 border-gray-400 mx-auto"></div>`)
                    }
                }
            })
        }, 300)
    }

    $("input[name=cari").keyup(function() {
        search()
    })
    $("#cariAngkatan").keyup(function() {
        search()
    });
</script>
<script type="text/javascript" src="/js/search.js"></script>
<script type="text/javascript" src="/js/berita.js"></script>
<?= $this->endSection(); ?>
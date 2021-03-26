<?= $this->extend('webservice/layoutWebservice/templateWebserviceLogin.php'); ?>

<?= $this->section('content'); ?>

<div class="lg:mx-36 mx-5 lg:mt-12 md:mt-16 mt-12 mb-8 w-full">
    <h3 class="font-heading font-bold text-center text-secondary xl:text-6xl lg:text-5xl md:text-4xl text-2xl">PROYEK</h3>
    <!-- start tombol buat proyek -->
    <a href="/developer/buatProyek">
        <div class="flex justify-center md:w-44 w-28 md:px-2 md:py-2 px-1 py-1 lg:mt-12 mt-4 mb-8 rounded-lg border-gray shadow-lg tracking-wider cursor-pointer hover:bg-gray-100">
            <div class="flex items-center justify-center">
                <svg class="text-secondary md:w-8 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                <div class="font-heading font-semibold md:text-base text-xs">Buat Proyek</div>
            </div>
        </div>
    </a>
    <!-- end tombol buat proyek -->




</div>

<?php foreach ($client_app as $key => $data) { ?>
    <div class="proyek flex justify-between items-center rounded-md border font-paragraph mb-4 md:px-2 md:py-2 px-1 py-1 hover:bg-gray-100 cursor-pointer" data-id="<?= $data['id'] ?>">
        <span class="font-paragraph md:text-base text-sm"><?php echo $data['nama_app']; ?></span>

        <?php if ($data['status'] == 'Review') { ?>
            <span class="font-paragraph md:text-base text-sm rounded-full border bg-gray-400 text-white px-3 py-1 md:w-32 w-24 text-center">Menunggu</span>
        <?php } ?>

        <?php if ($data['status'] == 'Diterima') { ?>
            <span class="font-paragraph md:text-base text-sm rounded-full border bg-green-400 text-white px-3 py-1 md:w-32 w-24 text-center">Disetujui</span>
        <?php } ?>

        <?php if ($data['status'] == 'Ditolak') { ?>
            <span class="font-paragraph md:text-base text-sm rounded-full border bg-red-600 text-white px-3 py-1 md:w-32 w-24 text-center">Ditolak</span>
        <?php } ?>
    </div>

    <div class="w-11/12 mx-auto mb-4 rounded-b-xl shadow-xl hidden opacity-0 duration-500 transition-all">
        <div class="flex justify-start text-sm">
            <div class="token text-white py-1 w-20 text-center mr-1 cursor-pointer transform hover:scale-105 duration-150 outline-none choosed">
                TOKEN</div>
            <div class="detail text-white py-1 w-20 text-center mr-1 cursor-pointer transform hover:scale-105 duration-150 outline-none notchoose">
                DETAIL</div>
            <a data-id="<?php echo $data['id'] ?>" class="delete-project text-white bg-red-500 py-1 w-20 text-center mr-1 cursor-pointer transform hover:scale-105 duration-150 outline-none">CANCEL</a>
        </div>
        <div class="sm:mx-3 mx-2">
            <div class="flex mt-3 mb-2">
                <p class="w-1/4 text-primary text-sm font-bold">Token Pengguna</p>
                <p id="token_app<?php echo $data['id'] ?>" class="w-3/4 text-primary text-sm break-all"></p>
            </div>

            <div class="flex mb-2">
                <p class="w-1/4 text-primary text-sm font-bold">Tanggal Dibuat</p>
                <p id="req_date<?php echo $data['id'] ?>" class="w-3/4 text-primary text-sm"></p>
            </div>
            <div class="flex mb-2 pb-4">
                <p class="w-1/4 text-primary text-sm font-bold">Tanggal Diperiksa</p>
                <p id="req_acc<?php echo $data['id'] ?>" class="w-3/4 text-primary text-sm"></p>
            </div>
        </div>
        <div class="hidden">
            <div class="flex mx-3 mt-3 mb-2">
                <p class="w-1/4 text-primary text-sm font-bold">Deskripsi</p>
                <p id="deskripsi<?php echo $data['id'] ?>" class="w-3/4 text-justify text-primary text-sm"></p>
            </div>
            <!-- <div class="flex mx-3 mt-3 mb-2">
                <p class="w-1/4 text-primary text-sm font-bold">Redirect URL</p>
                <p id="redirek<?php echo $data['id'] ?>" class="w-3/4 text-justify text-primary text-sm"></p>
            </div> -->
            <div class="flex mx-3 pb-4">
                <p class="w-1/4 text-primary text-sm font-bold">Cakupan Data</p>
                <p id="scope<?php echo $data['id'] ?>" class="w-3/4 text-justify text-primary text-sm"></p>
            </div>
        </div>
    </div>
<?php } ?>

<!-- ini harusnya cuma muncul kalau belum ada proyek yg terdaftar di db, jadi mungkin bisa dikasih ifelse buat nampilin div ini atau div isi proyeknya-->
<?php if ($client_app == NULL) { ?>
    <div id="tidakAdaProyek" class="flex justify-center">
        <div class="mt-8 mb-24">
            <span class="font-heading text-center text-xl">Belum ada proyek yang terdaftar. <b>Buat proyekmu sekarang!</b></span>
        </div>
    </div>
<?php } ?>
</div>



<script>
    //buat nampilin detail proyek
    $(".proyek").click(function() {
        if (!$(this).hasClass('border-primary')) {
            $(this).addClass('border-primary')
            $(this).css("border-width", "2px")
            $(this).after(`
            <div class="w-11/12 mx-auto mb-4 rounded-b-xl hidden opacity-0 duration-500 transition-all" style="box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.1), 0 0px 3px 3px rgba(0, 0, 0, 0.06);;">
        <div class="flex justify-between text-sm">
            <div class="flex">
                <div class="text-white py-1 w-20 text-center mr-1 cursor-pointer transform hover:scale-105 outline-none choosed">TOKEN</div>
                <div class="text-white py-1 w-20 text-center mr-1 cursor-pointer outline-none transform hover:scale-105 notchoose">DETAIL</div>
            </div>
            <div class="mr-3 flex items-center">
                <input type="button" value="HAPUS" class="text-red-500 font-semibold transition-all cursor-pointer outline-none border-none bg-transparent hover:text-red-700">
            </div>
        </div>
        <div id="isiToken" class="sm:mx-3 mx-2">
            <div class="flex mt-3 mb-2">
                <p class="w-1/4 text-primary text-sm font-bold">Token Pengguna</p>
                <p class="w-3/4 text-primary text-sm break-all">fafdsfsgdfgdfhgfhs24235gh43y@4gfdhdshgshshsggrgrgrg4y4456547fefgfeggfgf</p>
            </div>
            <div class="flex mb-2">
                <p class="w-1/4 text-primary text-sm font-bold">Tanggal Disetujui</p>
                <p class="w-3/4 text-primary text-sm">30 Feruari 2021 - 21.00</p>
            </div>
            <div class="flex pb-4">
                <p class="w-1/4 text-primary text-sm font-bold">Masa Berlaku</p>
                <p class="w-3/4 text-primary text-sm">2 Bulan</p>
            </div>
        </div>
        <div class="hidden" id="isiDetail">
            <div class="flex mx-3 mt-3 mb-2">
                <p class="w-1/4 text-primary text-sm font-bold">Deskripsi</p>
                <p class="w-3/4 text-justify text-primary text-sm">Berisikan Data yang diisikan saat membuat proyek. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, iusto id? Natus officiis nemo laborum similique molestiae in labore tenetur nihil. Cum temporibus alias modi ratione est assumenda, commodi possimus?</p>
            </div>
            <div class="flex mx-3 pb-4">
                <p class="w-1/4 text-primary text-sm font-bold">Cakupan Data</p>
                <p class="w-3/4 text-justify text-primary text-sm">Menggunakan informasi pribadi</p>
            </div>
        </div>
    </div>
        `)
            $(this).next().children().first().children().first().hover(function() {
                $(this).next().children().first().children().first().children().eq(0).removeAttr('style')
                $(this).next().children().first().children().first().children().eq(1).removeAttr('style')
            })
            var $this = $(this);
            $(this).next().removeClass('hidden')
            setTimeout(function() {
                $this.next().removeClass('opacity-0');
            }, 30);
            $(this).next().children().first().children().first().children().eq(1).click(function() {
                $(this).removeClass('notchoose').addClass('choosed')
                $(this).prev().removeClass('choosed').addClass('notchoose')

                $(this).parent().parent().next().next().removeClass('hidden')
                $(this).parent().parent().next().addClass('hidden')
            })

            $(this).next().children().first().children().first().children().eq(0).click(function() {
                $(this).removeClass('notchoose').addClass('choosed')
                $(this).next().removeClass('choosed').addClass('notchoose')

                $(this).parent().parent().next().next().addClass('hidden')
                $(this).parent().parent().next().removeClass('hidden')
            })
        } else {
            $(this).removeClass('border-primary')
            $(this).css("border-width", "1px")

            $(this).next().addClass('opacity-0')
            $(this).next().addClass('hidden')
        }
    })
</script>

<?= $this->endSection(); ?>
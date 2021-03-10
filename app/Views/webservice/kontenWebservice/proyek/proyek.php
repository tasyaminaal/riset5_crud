<?= $this->extend('webservice/layoutWebservice/templateWebserviceLogin.php'); ?>

<?= $this->section('content'); ?>

<div class="lg:mx-36 mx-5 lg:mt-36 md:mt-28 mt-20 w-full">
    <h3 class="font-heading font-bold text-center text-secondary lg:text-6xl md:text-3xl text-2xl">PROYEK</h3>
    <a href="/webservice/buatProyek"
        class="flex justify-center md:w-40 w-36 md:px-3 md:py-2 px-1 py-1 lg:mt-12 mt-4 mb-8 rounded-lg border-gray shadow-lg tracking-wider cursor-pointer hover:bg-gray-100">
        <div class="flex gap-x-2 items-center justify-center">
            <svg class="text-secondary w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                    clip-rule="evenodd" />
            </svg>
            <div class="font-heading font-semibold md:text-base text-sm">Buat Proyek</div>
        </div>
    </a>

    <?php foreach($client_app as $key => $data) { ?>
    <div class="proyek flex justify-between items-center rounded-md border font-paragraph mb-4 md:px-2 md:py-2 px-1 py-1 hover:bg-gray-100 cursor-pointer"
        data-id="<?= $data['id'] ?>">
        <span class="font-paragraph md:text-base text-sm"><?php echo $data['nama_app']; ?></span>

        <?php if($data['status']=='Review'){ ?>
        <span
            class="font-paragraph md:text-base text-sm rounded-full border bg-gray-400 text-white px-3 py-1 md:w-32 w-24 text-center">Menunggu</span>
        <?php } ?>

        <?php if($data['status']=='Diterima'){ ?>
        <span
            class="font-paragraph md:text-base text-sm rounded-full border bg-green-400 text-white px-3 py-1 md:w-32 w-24 text-center">Disetujui</span>
        <?php } ?>

        <?php if($data['status']=='Ditolak'){ ?>
        <span
            class="font-paragraph md:text-base text-sm rounded-full border bg-red-600 text-white px-3 py-1 md:w-32 w-24 text-center">Ditolak</span>
        <?php } ?>
    </div>

    <div class="w-11/12 mx-auto mb-4 rounded-b-xl shadow-xl hidden opacity-0 duration-500 transition-all">
        <div class="flex justify-start text-sm">
            <div
                class="token text-white py-1 w-20 text-center mr-1 cursor-pointer transform hover:scale-105 duration-150 outline-none choosed">
                TOKEN</div>
            <div
                class="detail text-white py-1 w-20 text-center mr-1 cursor-pointer transform hover:scale-105 duration-150 outline-none notchoose">
                DETAIL</div>
            <a data-id="<?php echo $data['id'] ?>"
                class="delete-project text-white bg-red-500 py-1 w-20 text-center mr-1 cursor-pointer transform hover:scale-105 duration-150 outline-none">CANCEL</a>
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

</div>

<script type="text/javascript" src="/js/webservices.js"></script>


<?= $this->endSection(); ?>
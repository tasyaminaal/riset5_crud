<?= $this->extend('webservice/layoutWebservice/templateWebserviceLogin.php'); ?>

<?= $this->section('content'); ?>
<div class="w-full flex justify-center items-center">
    <div class="shadow-2xl sm:w-3/4 w-full lg:my-12 md:my-8 sm:my-6 my-4 rounded-xl px-0 pt-4 py-6 sm:mx-0 mx-6">
        <h1 class="lg:text-6xl md:text-3xl text-2xl text-center font-heading text-secondary font-bold">PROYEK</h1>
        <div class="flex justify-center">
            <div class="lg:w-3/5 w-4/5">
                <hr class="border-primary border-2 lg:mt-6 md:mt-4 mt-2">
                <div class="mx-2 mt-4">
                    <form action="<?php echo base_url('/Webservice/insertProyek'); ?>" method="post" class="lg:text-base md:text-sm text-xs">
                        <label for="nama" class="font-bold text-secondary lg:text-lg md:text-base text-sm">Nama*</label>
                        <input type="text" name="nama" id="nama" placeholder="Nama Proyek" class="inputForm lg:mb-4">

                        <label for="deskripsi" class="font-bold text-secondary lg:text-lg md:text-base text-sm">Deskripsi*</label>
                        <textarea name="deskripsi" id="deskripsi" cols="50" rows="5" class="inputForm lg:mb-4" placeholder="Masukkan Deskripsi Proyek"></textarea>
                        <div>
                            <label for="scope" class="font-bold text-secondary lg:text-lg md:text-base text-sm">API*</label>
                            <div>
                                <?php foreach ($scope_app as $key => $data) { ?>
                                    <div class="flex items-center gap-x-2">
                                        <input data-id="<?= $data['id'] ?>" id="scope<?= $data['id'] ?>" type="checkbox" name="scope[]" value="<?= $data['id'] ?>" class="scope cursor-pointer">
                                        <div id="labelScope<?= $data['id'] ?>" class="font-heading font-medium text-gray-500"><?= $data['scope'] ?></div>
                                    </div>
                                    <div class="ml-5 md:mt-2 mb-2">
                                        <?= $data['scope_dev'] ?>
                                    </div>
                                <?php } ?>
                            </div>

                        </div>
                        <div class="text-xs text-secondary md:mt-6 mt-4">
                            *Harus diisi
                        </div>
                        <div class="flex md:justify-end justify-between gap-x-6 items-center mt-2">
                            <a href="/developer/proyek">
                                <div class="flex items-center gap-x-2">
                                    <img src="/img/left-on.png" class="w-3 h-3" alt="">
                                    <div class="text-secondary">KEMBALI</div>
                                </div>
                            </a>
                            <input type="submit" value="BUAT" class="bg-secondary hover:bg-secondaryhover text-white py-1 px-5 cursor-pointer rounded-full focus:outline-none">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="/js/checkbox.js"></script>
<?php $this->endSection(); ?>
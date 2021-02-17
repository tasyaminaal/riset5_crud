<?php
/*if ($login == 'sudah') {
    echo $this->extend('webservice/layoutWebservice/templateWebserviceLogin.php');
} else if ($login == 'belum') {
    echo $this->extend('webservice/layoutWebservice/templateWebservice.php');
}*/
echo $this->extend('webservice/layoutWebservice/templateWebserviceLogin.php');
echo $this->section('content');
?>

<div class="sm:mt-28 mt-16 flex sm:static relative xl:mx-28 lg:mx-20 md:mx-12 sm:mx-7 mx-6" id="utama">
    <div class="lg:mr-10 sm:mr-6 mr-0 md:w-8/12 w-full flex flex-col justify-center relative" data-aos="fade-right">
        <h1 class="xl:text-5xl lg:text-4xl md:text-3xl sm:text-2xl text-xl font-heading text-secondary font-bold flex justify-center sm:block">WEBSERVICE SISTEM INFORMASI ALUMNI</h1>
        <p class="sm:mt-8 mt-4 text-justify md:text-base text-sm">
            API Alumni AIS/STIS/Polstat STIS merupakan sebuah layanan yang menyediakan informasi data alumni AIS/STIS/Polstat STIS. Dengan adanya API Alumni AIS/STIS/Polstat STIS,
            maka para developer dapat mengembangkan aplikasi mobile atau website menggunakan API yang tersedia.
        </p>
    </div>
    <div class="sm:flex sm:flex-col sm:justify-center hidden xl:w-4/12 sm:w-1/2 relative" data-aos="fade-left">
        <div class="flex flex-col">
            <img src="/img/logo api.png" alt="Logo Api">
        </div>
    </div>
</div>
<script>
    if ($(window).width() <= 640) {
        $('#utama').children().first().removeAttr('data-aos')
        $('#utama').attr('data-aos', 'zoom-in')
    }
</script>
<?= $this->endSection(); ?>
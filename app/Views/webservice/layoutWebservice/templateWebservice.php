<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/tailwind.css">
    <link rel="stylesheet" href="/css/scrollbar.css">
    <link rel="stylesheet" href="/css/aos.css" />
    <script type="text/javascript" src="/js/jquery.js"></script>
    <title>Web Service | SIA</title>

    <!-- link utk manggil font nya  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body class="flex min-h-screen flex-col w-screen overflow-x-hidden font-paragraph">

    <!-- HEADER -->
    <div class="bg-primary md:px-12 sm:px-8 px-4 w-full navbar fixed z-10 bg-no-repeat bg-cover bg-left" style="background-image: url(/img/components/bgHeaderWS.png)">
        <div class="flex justify-between sm:my-2 my-1">
            <div class="font-heading flex items-center sm:gap-x-6 gap-x-3 z-10">
                <a href="<?= base_url(); ?>">
                    <img src="/img/components/logo/logo_sia.png" class=" z-50 md:w-16 w-10" alt="logo SIA">
                </a>
                <div class="md:px-3 px-2 my-auto text-white z-50">
                    <p class="font-heading text-lg md:text-2xl font-semibold">Webservice Sistem Informasi Alumni</p>
                    <p class="font-heading md:text-xs font-normal hidden md:block -mt-1.5">Akademi Ilmu Statistik - Sekolah Tinggi Ilmu Statistik - Politeknik Statistika STIS</p>
                </div>
            </div>
            <div id="nav" class="hidden sm:flex sm:items-center z-10">
                <ul class="flex lg:gap-x-6 md:gap-x-4 gap-x-2 relative">
                    <a href="/login">
                        <li class="bg-secondary text-white py-1.5 sm:w-20 md:w-24 text-center cursor-pointer border-secondary border-2 hover:text-secondary hover:bg-white transition-colors duration-300">MASUK</li>
                    </a>
                </ul>
            </div>
        </div>

    </div>
    <!-- END HEADER -->
    <!-- CONTENT PAGE DI SINI -->
    <div class="w-full flex flex-1 justify-center items-center">
        <?= $this->renderSection('content'); ?>
    </div>
    <!-- END CONTENT PAGE -->

    <!-- FOOTER -->
    <div class="bg-primary w-full mt-8 pt-6 pb-3 lg:px-20 md:px-8 px-3">
        <div class="flex flex-col md:flex-row md:justify-around text-xs">

            <!-- awal footer stis -->
            <div class="flex items-center gap-x-2 mx-auto md:mx-0">
                <div class="w-36 md:w-auto">
                    <a href="https://stis.ac.id/"><img class="lg:w-24 lg:h-24 w-20 h-20" src="/img/components/logo/logo_stis.png" alt="logo STIS"></a>
                </div>
                <div class="text-white font-heading">
                    <h3>Jl. Otto Iskandardinata No.64C Jakarta 13330</h3>
                    <h3>Telp. (021) 8191437, 8508812</h3>
                    <h3>Fax. (021) 8197577</h3>
                    <div class="flex gap-x-2 mt-2">
                        <a href="https://www.facebook.com/PolstatSTIS/"><img class="lg:h-6 h-4" src="/img/components/icon/facebook.png" alt="icon facebook"></a>
                        <a href="https://www.youtube.com/channel/UCwmpr4lmrApoGRpq4TcmsvA"><img class="lg:h-6 h-4" src="/img/components/icon/youtube.png" alt="icon youtube"></a>
                        <a href="https://twitter.com/stisjkt"><img class="lg:h-6 h-4" src="/img/components/icon/twitter.png" alt="icon twitter"></a>
                        <a href="https://www.instagram.com/polstatstis/"><img class="lg:h-6 h-4" src="/img/components/icon/instagram.png" alt="icon instagram"></a>
                    </div>
                </div>
            </div>
            <!-- akhir footer stis -->

            <!-- awal footer haistis -->
            <div class="flex items-center mt-4 gap-x-2 md:mt-0 mx-auto md:mx-0">
                <a href="https://haisstis.org/"><img class="lg:h-24 h-20 w-36 lg:w-auto" src="/img/components/logo/logo_haisstis.png" alt="logo HAISSTIS"></a>
                <div class="text-white font-heading">
                    <h3>Jl. Otto Iskandardinata No.64C Jakarta 13330</h3>
                    <h3>Telp. (021) 8191437, 8508812</h3>
                    <h3>Fax. (021) 8197577</h3>
                    <div class="flex gap-x-2 mt-2">
                        <a href=""><img class="lg:h-6 h-4" src="/img/components/icon/facebook.png" alt="icon facebook"></a>
                        <a href=""><img class="lg:h-6 h-4" src="/img/components/icon/youtube.png" alt="icon youtube"></a>
                        <a href="https://twitter.com/haisstis"><img class="lg:h-6 h-4" src="/img/components/icon/twitter.png" alt="icon twitter"></a>
                        <a href=""><img class="lg:h-6 h-4" src="/img/components/icon/instagram.png" alt="icon instagram"></a>
                    </div>
                </div>
            </div>
            <!-- akhir footer haistis -->

            <!-- awal link ke webservice  -->
            <div class="flex flex-col text-white font-heading mx-auto md:mx-5 mt-4 md:mt-0">
                <a href="/" class="mb-2 hover:text-secondary">
                    <h3>Website SIA</h3>
                </a>
                <a href="https://pkl.stis.ac.id/60/" class="hover:text-secondary">
                    <h3>Website PKL60</h3>
                </a>
            </div>
            <!-- akhir link ke webservice  -->

        </div>

        <div class="flex items-center mt-2">
            <div class="flex-grow">
                <hr class="text-white bg-white border my-auto">
            </div>
        </div>

        <h2 class="text-white text-sm text-center mt-1">Copyright &copy; PKL 60 Riset 5</h2>
    </div>
    <!-- END FOOTER -->

    <script src="/js/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
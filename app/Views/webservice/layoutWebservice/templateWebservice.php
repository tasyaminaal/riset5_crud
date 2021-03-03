<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/output.css">
    <link rel="stylesheet" href="/css/add_style.css">
    <link rel="stylesheet" href="/css/scrollbar.css">
    <link rel="stylesheet" href="/css/scrollbar.css">
    <link rel="stylesheet" href="/css/jquery-confirm.min.css">
    <!--<script type="text/javascript" src="/js/jquery.js"></script>-->
    <title>Web Service | SIA</title>
</head>

<body class="flex min-h-screen flex-col w-screen overflow-x-hidden font-paragraph">
    <!-- HEADER -->
    <header class="bg-primary sm:py-4 py-3 md:px-12 px-4 w-full fixed">
        <div class="lingkaran-luar" id="kiri">
            <div class="lingkaran-dalam"></div>
        </div>
        <div class="flex justify-between">
            <div class="font-heading flex items-center sm:gap-x-6 gap-x-3 z-10">
                <a href="<?= base_url(); ?>">
                    <img src="/img/logoSIA.png" class="xl:w-16 lg:w-14 md:w-12 w-8" alt="">
                </a>
                <h1 class="judulApi text-white xl:text-2xl lg:text-lg text-base font-light">WEB SERVICE SISTEM INFORMASI ALUMNI</h1>
            </div>
            <div id="nav" class="flex items-center">
                <ul class="flex lg:gap-x-6 md:gap-x-4 gap-x-2 relative z-10">
                    <li class="bg-secondary text-white sm:py-1.5 py-0 sm:w-24 w-20 text-center cursor-pointer border-secondary border-2 hover:text-secondary hover:bg-white hover:border-opacity-70 transition-colors duration-300"><a href="/login/">MASUK</a></li>
                </ul>
            </div>
        </div>
        <div class="lingkaran-luar" id="kanan">
            <div class="lingkaran-dalam"></div>
        </div>
    </header>
    <!-- END HEADER -->

    <!-- CONTENT PAGE DI SINI -->
    <div class="w-full flex flex-1 justify-center items-center">
        <?= $this->renderSection('content'); ?>
    </div>
    <!-- END CONTENT PAGE -->

    <!-- FOOTER -->
    <div class="bg-primary w-full mt-8 pt-6 pb-3 lg:px-20 md:px-8 px-3">
        <div class="flex flex-col md:flex-row md:justify-around md:text-sm text-xs">

            <!-- awal footer stis -->
            <div class="flex items-center gap-x-2 mx-auto md:mx-0">
                <div class="w-36 md:w-auto">
                    <a href="https://stis.ac.id/"><img class="lg:w-24 lg:h-24 w-20 h-20" src="/img/STISlogo.png" alt=""></a>
                </div>
                <div class="text-white font-heading">
                    <h3>Jalan Otto Iskandardinatta</h3>
                    <h3>64C Jakarta 13330</h3>
                    <h3>08967xxxxx</h3>
                    <div class="flex gap-x-2 mt-2">
                        <a href="https://www.facebook.com/PolstatSTIS/"><img class="lg:h-6 h-4" src="/img/facebook.png" alt=""></a>
                        <a href="https://www.youtube.com/channel/UCwmpr4lmrApoGRpq4TcmsvA"><img class="lg:h-6 h-4" src="/img/youtube.png" alt=""></a>
                        <a href="https://twitter.com/stisjkt"><img class="lg:h-6 h-4" src="/img/twitter.png" alt=""></a>
                        <a href="https://www.instagram.com/polstatstis/"><img class="lg:h-6 h-4" src="/img/instagram.png" alt=""></a>
                    </div>
                </div>
            </div>
            <!-- akhir footer stis -->

            <!-- awal footer haistis -->
            <div class="flex items-center mt-4 gap-x-2 md:mt-0 mx-auto md:mx-0">
                <a href="https://haisstis.org/"><img class="lg:h-24 h-20 w-36 lg:w-auto" src="/img/logo_haisstis1.png" alt=""></a>
                <div class="text-white font-heading">
                    <h3>Jalan Otto Iskandardinatta</h3>
                    <h3>64C Jakarta 13330</h3>
                    <h3>08967xxxxx</h3>
                    <div class="flex gap-x-2 mt-2">
                        <a href=""><img class="lg:h-6 h-4" src="/img/facebook.png" alt=""></a>
                        <a href=""><img class="lg:h-6 h-4" src="/img/youtube.png" alt=""></a>
                        <a href="https://twitter.com/haisstis"><img class="lg:h-6 h-4" src="/img/twitter.png" alt=""></a>
                        <a href=""><img class="lg:h-6 h-4" src="/img/instagram.png" alt=""></a>
                    </div>
                </div>
            </div>
            <!-- akhir footer haistis -->

            <!-- awal link ke webservice  -->
            <div class="flex flex-col text-white font-heading mx-auto md:mx-0 mt-4 md:mt-0">
                <a href="/" class="mb-4">
                    <h3>Website PKL60</h3>
                </a>

                <a href="/webservice/">
                    <h3>Webservice(API)</h3>
                </a>
            </div>
            <!-- akhir link ke webservice  -->

        </div>

        <div class="flex items-center mt-2">
            <div class="flex-grow">
                <hr class="text-white border-2 my-auto">
            </div>
            <div class="flex-grow-0">
                <div class="flex items-center w-8 h-8 rounded-full bg-secondary cursor-pointer" id="upPage">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white mx-auto" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                        <path d="M7.247 4.86l-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                    </svg>
                </div>
            </div>
        </div>

        <h2 class="text-white text-center mt-3">Copyright &copy; PKL 60 Riset 5</h2>
    </div>
    <!-- END FOOTER -->
    <script type="text/javascript" src="/js/navbar.js"></script>
    <script type="text/javascript" src="/js/footer.js"></script>
    <script type="text/javascript" src="/js/jquery-confirm.min.js"></script>
</body>

</html>
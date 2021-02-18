<!-- Kalo mau akses carousel, di controller websia ganti variabel login = 'sudah' -->

<!-- Awal Carousel -->
<div class="w-full bg-primary">
    <div id="slider" class="swiper-container w-full">
        <div class="swiper-wrapper">
            <div class="swiper-slide bg-cover bg-center w-full py-20 md:py-32 lg:py-64" style="background-image: url('/img/carousel/carousel-01.png');">
            </div>
            <div class="swiper-slide bg-cover bg-left w-full py-20 md:py-32 lg:py-64" style="background-image: url('/img/carousel/carousel-02.png');">
            </div>
            <div class="swiper-slide bg-cover bg-left w-full py-20 md:py-32 lg:py-64" style="background-image: url('/img/carousel/carousel-03.png');">
            </div>
            <div class="swiper-slide bg-cover bg-left w-full py-20 md:py-32 lg:py-64" style="background-image: url('/img/carousel/carousel-04.png');">
            </div>
        </div>
        <div class="hidden md:flex">
            <img class="swiper-button-prev md:ml-8" src="/img/left-on.png">
            <img class="swiper-button-next md:mr-8" src="/img/right-on.png">
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<script src="/js/carousel.js"></script>
<!-- Akhir Carousel -->
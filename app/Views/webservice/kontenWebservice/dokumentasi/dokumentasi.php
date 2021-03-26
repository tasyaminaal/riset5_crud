<?= $this->extend('webservice/kontenWebservice/dokumentasi/layoutDokumentasi.php'); ?>

<?= $this->section('dokumentasi'); ?>

<div class="sm:ml-12 sm:mr-5 ml-8 mr-2 sm:mt-7 mt-4 transition-none">
    <div class="lg:hidden absolute mt-3" id="burgerDok">
        <svg class="block w-7 cursor-pointer fill-current text-secondary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </div>
    <section>
        <div class="text-secondary lg:mx-4 mx-3 ml-10">
            <h1 class="lg:text-xl">Sistem Informasi Alumni</h1>
            <h2 class="font-bold lg:text-xl">DOKUMENTASI WEB SERVICE</h2>
        </div>
        <hr class="border border-gray-500 transform translate-y-2">
        <div class="lg:mx-4 mx-3 mt-4">
            <h3 class="text-secondary mb-5">Penjelasan API Sistem Informasi Alumni</h3>
            <div class="flex 2xl:-mb-10 lg:mb-4 mb-8">
                <p class="text-justify sm:mr-4 mr-0 xl:w-9/12 lg:w-7/12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, consequuntur hic? Nostrum ratione perferendis repellendus aspernatur illum at nam ex asperiores natus excepturi. Quae, nam laboriosam. Odit consequatur repellendus illo neque rerum ut vel ad quidem! Delectus, sed in similique veniam vero, ducimus qui quasi quos ipsa a consequuntur! Possimus. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit tempora laboriosam deleniti rerum veniam officia provident quis, aspernatur ad doloribus nihil. Molestias placeat error, architecto dolorem et pariatur iusto. Veniam? Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <img src="/img/components/logo/logo_api.png" alt="Logo Api" class="xl:w-3/12 lg:w-5/12 sm:w-4/12 sm:block hidden">
            </div>
        </div>
    </section>

    <section id="memintaData">
        <div class="text-secondary lg:mx-4 mx-3">
            <h1 class="font-bold lg:text-xl">MEMINTA DATA</h1>
        </div>
        <hr class="border border-gray-500 transform translate-y-2">
        <div class="lg:mx-4 mx-3 mt-4 mb-8 text-justify">
            <p class="">Cara meminta data : </p>
            <ol class="list-decimal list-inside">
                <li>Klik menu API kemudian pilih sub menu proyek</li>
                <li>Klik tombol "Buat Proyek" untuk mendaftarkan proyek baru</li>
                <li>Masukkan identitas proyek/aplikasi seperti nama, deskripsi proyek, pilih cakupan data yang diiginkan dan klik "buat"</li>
                <li>Tunggu hingga status permintaan berubah dan Anda akan mendapat kunci beserta token API SIA</li>
            </ol>
            <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus consectetur vel sint ad reprehenderit officia officiis quod expedita magni accusamus eveniet ipsum possimus soluta ipsa non similique et sed quo, deleniti iusto vero necessitatibus ipsam! Excepturi placeat possimus pariatur odit. Consequatur necessitatibus harum, blanditiis aut explicabo vitae repudiandae in iusto? Lorem100</p>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>
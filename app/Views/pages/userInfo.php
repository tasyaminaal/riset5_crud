<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<?= $this->include('layout/navbarUser') ?>

<div class="alert alert-<?= session()->get('warna'); ?> alert-dismissible show pesan" role="alert" id="alert-pesan">
    <?= session()->getFlashdata('pesan'); ?>
</div>

<script>
    $('#alert-pesan').addClass('muncul')
    let foo = setTimeout(hapusPesan, 2000);

    function hapusPesan() {
        $('#alert-pesan').addClass('hilang');
        setTimeout(function() {
            $('#alert-pesan').remove();
        }, 1500);
    }
</script>

<?php if (session()->has('id_user')) : ?>
    <h1 class="text-center">Berhasil Masuk</h1>
    <h1>Selamat Datang</h1>
    <h2>Username <?php echo (session('username')); ?> </h2>
    <h2>Nama <?php echo (session('nama')); ?> </h2>
    <h2>Role <?php echo (session('role')); ?> </h2>

    <Button onClick="logout();">Logout</Button>
    <script>
        function logout() {
            window.location.href = "http://localhost:8080/auth/logout";
        }
    </script>
<?php endif; ?>
<?php if (!session()->has('id_user')) : ?>
    <h1 class="text-center">ERROR</h1>
    <h2>Anda harus login terlebih dahulu</h2>
    <a href="http://localhost:8080/">login sekarang!</a>
<?php endif; ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

<?= $this->endSection(); ?>
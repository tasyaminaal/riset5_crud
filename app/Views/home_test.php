<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Document</title>
    <style>
        .hilang {
            opacity: 0;
        }
    </style>
</head>

<body>
    <div class="alert alert-<?= session()->get('warna'); ?> alert-dismissible show pesan" role="alert" id="alert-pesan">
        <?= session()->getFlashdata('pesan'); ?>
        <button type="button" class="close" onclick="hapusPesan()" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
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

</body>

</html>
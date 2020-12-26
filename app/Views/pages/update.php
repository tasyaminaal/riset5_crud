<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('layout/navbar') ?>

<div class="container">
    <?php if (session()->has('id_user')) : ?>
	<div class="row">
        <div class="col-md-7 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <hr>
                    <h2>Update Profil User</h2>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="box box-info">
                        <div class="box-body">
                            <div class="col-sm-6">
                                <div  align="center">
                                    <img alt="User Pic" src="/img/pp.png" id="profile-image1" class="img-circle img-responsive">
                                </div>
                                <br>
                            <!-- tampilan profilenya, nama dan biodata singkat -->
                            </div>
                            <div class="col-sm-6">
                                <h4 style="color:#00b1b1;"><?= $nama ?></h4></span>
                                <hr>
                                Updating data without validation first.              
                            </div>
                            <div class="clearfix"></div>
                            <hr style="margin:5px 0 5px 0;">

                            <!-- form update profile user -->
                            <form action="/home/updating/<?=session('username');?>" method="post">
                                <?= csrf_field();?>
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-5 col-xs-6 tital ">Nama(80)</label>
                                    <div class="col-sm-7 col-xs-6">
                                        : <input type="text" id="nama" name="nama" autofocus value="<?=$nama;?>">
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="bot-border"></div>

                                    <label for="nim" class="col-sm-5 col-xs-6 tital ">Nim(12)</label>
                                    <div class="col-sm-7 col-xs-6">
                                        : <?=$nim;?>
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="bot-border"></div>

                                    <label for="angkatan" class="col-sm-5 col-xs-6 tital ">Angkatan(4)</label>
                                    <div class="col-sm-7 col-xs-6">
                                        : <input type="text" id="angkatan" name="angkatan" autofocus value="<?=$angkatan;?>">
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="bot-border"></div>

                                    <label for="jenisKelamin" class="col-sm-5 col-xs-6 tital ">Jenis kelamin(L/P)</label>
                                    <div class="col-sm-7 col-xs-6">
                                        : <input type="text" id="jenisKelamin" name="jenisKelamin" autofocus value="<?=$jenisKelamin;?>">
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="bot-border"></div>

                                    <label for="tempatLahir" class="col-sm-5 col-xs-6 tital ">Tempat lahir(50)</label>
                                    <div class="col-sm-7 col-xs-6">
                                        : <input type="text" id="tempatLahir" name="tempatLahir" autofocus value="<?=$tempatLahir;?>">
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="bot-border"></div>

                                    <label for="tanggalLahir" class="col-sm-5 col-xs-6 tital ">Tanggal lahir(yyyy-mm-dd)</label>
                                    <div class="col-sm-7 col-xs-6">
                                        : <input type="text" id="tanggalLahir" name="tanggalLahir" autofocus value="<?=$tanggalLahir;?>">
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="bot-border"></div>

                                    <label for="telpAlumni" class="col-sm-5 col-xs-6 tital ">Nomor telepon(20)</label>
                                    <div class="col-sm-7 col-xs-6">
                                        : <input type="text" id="telpAlumni" name="telpAlumni" autofocus value="<?=$telpAlumni;?>">
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="bot-border"></div>

                                    <label for="alamat" class="col-sm-5 col-xs-6 tital ">Alamat(100)</label>
                                    <div class="col-sm-7 col-xs-6">
                                        : <input type="text" id="alamat" name="alamat" autofocus value="<?=$alamat;?>">
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="bot-border"></div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm">Submit Data</button>  
                            </form>
                        </div>
                    </div>     
                </div>
            </div>
        </div> 
    </div>
    <?php endif; ?>
    <?php if (!session()->has('id_user')) : ?>
        <h1 class="text-center">Jangan Nakal!</h1>
        <h2>Anda harus login terlebih dahulu</h2>
        <a href="http://localhost:8080/home/login">login sekarang!</a>
    <?php endif; ?>
</div>

<?= $this->endSection(); ?>
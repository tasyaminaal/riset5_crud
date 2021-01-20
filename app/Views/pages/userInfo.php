<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('layout/navbar') ?>

<div class="container">
    <?php if (session()->has('nim')) : ?>
        <div class="row">
            <div class="col-md-7 ">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <hr>
                        <h2>Profil User</h2>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="box box-info">
                            <div class="box-body">
                                <div class="col-sm-6">
                                    <div align="center">
                                        <img alt="User Pic" src="/img/pp.png" id="profile-image1" class="img-circle img-responsive">
                                    </div>
                                    <br>
                                    <!-- tampilan profilenya, nama dan biodata singkat -->
                                </div>
                                <div class="col-sm-6">
                                    <h4 style="color:#00b1b1;"><?= $nama ?></h4></span>
                                    <hr>
                                    <a type="button" class="btn btn-primary btn-sm" aria-current="page" href="/home/update/<?= session('username'); ?>">Edit data</a>
                                </div>
                                <div class="clearfix"></div>
                                <hr style="margin:5px 0 5px 0;">

                                <!-- tabel profile user -->
                                <div class="col-sm-5 col-xs-6 tital ">Nama</div>
                                <div class="col-sm-7 col-xs-6 ">: <?= $nama ?></div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital ">NIM</div>
                                <div class="col-sm-7">: <?= $nim ?></div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital ">Angkatan</div>
                                <div class="col-sm-7">: <?= $angkatan ?></div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital ">Jenis kelamin</div>
                                <div class="col-sm-7">: <?= $jenis_kelamin ?></div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital ">Tempat/Tanggal lahir</div>
                                <div class="col-sm-7">: <?= $tempat_lahir ?>, <?= $tanggal_lahir; ?></div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital ">Nomor Telepon</div>
                                <div class="col-sm-7">: <?= $telp_alumni ?></div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital ">Alamat</div>
                                <div class="col-sm-7">: <?= $alamat ?></div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital ">Status Bekerja</div>
                                <div class="col-sm-7">: <?= $status_bekerja ?></div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital ">Perkiraan Pensiun</div>
                                <div class="col-sm-7">: <?= $perkiraan_pensiun ?></div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital ">Jabatan Terakhir</div>
                                <div class="col-sm-7">: <?= $jabatan_terakhir ?></div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital ">Aktif PNS</div>
                                <div class="col-sm-7">: <?= $aktif_pns ?></div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if (!session()->has('nim')) : ?>
        <h1 class="text-center">Jangan Nakal!</h1>
        <h2>Anda harus login terlebih dahulu</h2>
        <a href="http://localhost:8080/home/login">login sekarang!</a>
    <?php endif; ?>
</div>

<?= $this->endSection(); ?>
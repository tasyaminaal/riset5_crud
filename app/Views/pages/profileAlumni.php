<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('layout/navbar') ?>

<div class="container">
	<div class="row">
        <div class="col-md-7 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <hr>
                    <h2>Profil Alumni</h2>
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
                                <span><p>Ini nanti bisa diisi masih setia di BPS, atau ex BPS. cuman aku belum tau cara ngepastiinnya gimana</p></span>            
                            </div>
                            <div class="clearfix"></div>
                            <hr style="margin:5px 0 5px 0;">

                            <!-- tabel profile user -->
                            <div class="col-sm-5 col-xs-6 tital " >Nama</div>
                            <div class="col-sm-7 col-xs-6 ">: <?= $nama ?></div>

                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital " >NIM</div>
                            <div class="col-sm-7">: <?= $nim ?></div>

                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital " >Angkatan</div>
                            <div class="col-sm-7">: <?= $angkatan ?></div>

                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital " >Jenis kelamin</div>
                            <div class="col-sm-7">: <?= $jenisKelamin ?></div>

                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital " >Tempat/Tanggal lahir</div>
                            <div class="col-sm-7">: <?= $tempatLahir ?>, <?= $tanggalLahir ?></div>

                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital " >Nomor Telepon</div>
                            <div class="col-sm-7">: <?= $telpAlumni ?></div>

                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital " >Alamat</div>
                            <div class="col-sm-7">: <?= $alamat ?></div>
                        </div>
                    </div>     
                </div> 
            </div>
        </div> 
    </div>
</div>

<?= $this->endSection(); ?>
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
                        <h2>Update Profil User</h2>
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
                                    Updating data without validation first.
                                </div>
                                <div class="clearfix"></div>
                                <hr style="margin:5px 0 5px 0;">

                                <!-- form update profile user -->
                                <form action="/home/updating/<?= session('username'); ?>" method="post">
                                    <?= csrf_field(); ?>
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-5 col-xs-6 tital ">Nama(80)</label>
                                        <div class="col-sm-7 col-xs-6">
                                            : <input type="text" id="nama" name="nama" autofocus value="<?= $nama; ?>">
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="bot-border"></div>

                                        <label for="nim" class="col-sm-5 col-xs-6 tital ">Nim(12)</label>
                                        <div class="col-sm-7 col-xs-6">
                                            : <?= $nim; ?>
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="bot-border"></div>

                                        <label for="angkatan" class="col-sm-5 col-xs-6 tital ">Angkatan(4)</label>
                                        <div class="col-sm-7 col-xs-6">
                                            : <input type="text" id="angkatan" name="angkatan" autofocus value="<?= $angkatan; ?>">
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="bot-border"></div>

                                        <label for="jenis_kelamin" class="col-sm-5 col-xs-6 tital ">Jenis kelamin(L/P)</label>
                                        <div class="col-sm-7 col-xs-6">
                                            : <input type="text" id="jenis_kelamin" name="jenis_kelamin" autofocus value="<?= $jenis_kelamin; ?>">
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="bot-border"></div>

                                        <label for="tempat_lahir" class="col-sm-5 col-xs-6 tital ">Tempat lahir(50)</label>
                                        <div class="col-sm-7 col-xs-6">
                                            : <input type="text" id="tempat_lahir" name="tempat_lahir" autofocus value="<?= $tempat_lahir; ?>">
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="bot-border"></div>

                                        <label for="tanggal_lahir" class="col-sm-5 col-xs-6 tital ">Tanggal lahir(yyyy-mm-dd)</label>
                                        <div class="col-sm-7 col-xs-6">
                                            : <input type="text" id="tanggal_lahir" name="tanggal_lahir" autofocus value="<?= $tanggal_lahir; ?>">
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="bot-border"></div>

                                        <label for="telp_alumni" class="col-sm-5 col-xs-6 tital ">Nomor telepon(20)</label>
                                        <div class="col-sm-7 col-xs-6">
                                            : <input type="text" id="telp_alumni" name="telp_alumni" autofocus value="<?= $telp_alumni; ?>">
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="bot-border"></div>

                                        <label for="alamat" class="col-sm-5 col-xs-6 tital ">Alamat(100)</label>
                                        <div class="col-sm-7 col-xs-6">
                                            : <input type="text" id="alamat" name="alamat" autofocus value="<?= $alamat; ?>">
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="bot-border"></div>

                                        <label for="status_bekerja" class="col-sm-5 col-xs-6 tital ">Status bekerja(0/1)</label>
                                        <div class="col-sm-7 col-xs-6">
                                            : <input type="text" id="status_bekerja" name="status_bekerja" autofocus value="<?= $status_bekerja; ?>">
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="bot-border"></div>

                                        <label for="perkiraan_pensiun" class="col-sm-5 col-xs-6 tital ">Tahun pensiun(yyyy)</label>
                                        <div class="col-sm-7 col-xs-6">
                                            : <input type="text" id="perkiraan_pensiun" name="perkiraan_pensiun" autofocus value="<?= $perkiraan_pensiun; ?>">
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="bot-border"></div>

                                        <label for="jabatan_terakhir" class="col-sm-5 col-xs-6 tital ">Jabatan terkhir(50)</label>
                                        <div class="col-sm-7 col-xs-6">
                                            : <input type="text" id="jabatan_terakhir" name="jabatan_terakhir" autofocus value="<?= $jabatan_terakhir; ?>">
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="bot-border"></div>

                                        <label for="aktif_pns" class="col-sm-5 col-xs-6 tital ">Status PNS(0/1)</label>
                                        <div class="col-sm-7 col-xs-6">
                                            : <input type="text" id="aktif_pns" name="aktif_pns" autofocus value="<?= $aktif_pns; ?>">
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
    <?php if (!session()->has('nim')) : ?>
        <h1 class="text-center">Jangan Nakal!</h1>
        <h2>Anda harus login terlebih dahulu</h2>
        <a href="http://localhost:8080/home/login">login sekarang!</a>
    <?php endif; ?>
</div>

<?= $this->endSection(); ?>
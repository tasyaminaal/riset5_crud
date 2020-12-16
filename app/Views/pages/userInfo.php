<?= $this->extend('layout/template');?>


<?= $this->section('content');?>
<?= $this->include('layout/navbarUser')?>
<div class="container">
    <div class="row">
        <div class="col">
            Isinya halaman user info :
            <table>
                <tr>
                    <td>
                        Nama
                    </td>
                    <td>
                        :   
                    </td>
                    <td>
                    <?php print_r($nama) ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nim
                    </td>
                    <td>
                        :   
                    </td>
                    <td>
                    <?php print_r($nim) ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Angkatan
                    </td>
                    <td>
                        :   
                    </td>
                    <td>
                    <?php print_r($angkatan) ?>
                    </td>
                </tr>
            </table>
        </div>
        <button type="button" class="btn btn-primary btn-sm" href="#">Update Data</button>
        <button type="button" class="btn btn-primary btn-sm" href="#">Update Password</button>
    </div>
</div>
<?= $this->endSection(); ?>
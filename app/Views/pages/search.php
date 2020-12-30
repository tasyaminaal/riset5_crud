<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('layout/navbar') ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2>Pencarian Data Alumni</h2>
			</div>
		</div>
	</div>
	<hr>
	<form method="GET" action="" class="form-group">
		<div class="row">
			<div class="col-lg-12">
				<div class="input-group mb-3">
					<input type="text" class="form-control" name="cari" placeholder="Mencari Data Berdasarkan Nama">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="Submit">CARI DATA</button>
					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<?= $jumlah; ?>
			</div>
		</div>
	</form>

	<div class="row">
		<div class="col-lg-12 margin-tb">
			<table class="table table-bordered">
				<tr>
					<th class="center">No</th>
					<th>Nama</th>
					<th>NIM</th>
					<th>Angkatan</th>
					<th>Profile</th>
				</tr>
				<?php $no = 1 + (10 * ($page - 1));
				foreach ($alumni as $row) : ?>
					<tr>
						<td class="center"><?= $no; ?></td>
						<td><?= $row['nama']; ?></td>
						<td><?= $row['nim']; ?></td>
						<td><?= $row['angkatan']; ?></td>
						<td class="center"><a class="btn btn-primary" href="/home/profileAlumni?nim=<?=$row['nim'];?>" role="button">Lihat Profile</a></td>
					</tr>
				<?php $no++;
				endforeach; ?>
			</table>
			<?= $pager->Links() ?>
		</div>
	</div>
</div>
<?= $this->endSection(); ?>
<?php if (session()->has('message')) : ?>
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<span class="text-sm" style="font-weight: bold;">Successfully!</span>&ensp;
		<?= session('message') ?>
	</div>
<?php endif ?>

<?php if (session()->has('error')) : ?>
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<span class="text-sm" style="font-weight: bold;">Something went wrong :</span>
		<div class="error text-sm">
			<?= session('error') ?>
		</div>

	</div>
<?php endif ?>

<?php if (session()->has('errors')) : ?>
	<ul class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<span class="text-sm" style="font-weight: bold;">Something went wrong :</span>
		<div class="error text-sm pl-3">
			<?php foreach (session('errors') as $error) : ?>
				<li><?= $error ?></li>
			<?php endforeach ?>
		</div>
	</ul>
<?php endif ?>
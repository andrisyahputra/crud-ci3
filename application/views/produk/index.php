<div class="container py-3 ">
	<?php if ($this->session->flashdata('flash')) : ?>
		<div class="row mt-3">
			<div class="col-md-6">
				<div class="alert alert-success" role="alert">
					<strong>Data Produk</strong> Berhasil <?= $this->session->flashdata('flash'); ?>
				</div>

			</div>
		</div>
	<?php endif ?>

	<!-- Hover added -->
	<!-- <php var_dump($produks) ?> -->
	<div class="row">
		<div class="col-md-6">
			<a name="" id="" class="btn btn-primary" href="<?= base_url() ?>produk/tambah" role="button">Tambah Produk</a>

		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="list-group">
				<ul class="list-group">
					<h1>Daftar produk</h1>
					<h5>total produk <?= $total_rows ?></h5>
					<!-- <php $i = 1; ?> -->
					<?php foreach ($produks as $value) : ?>

						<li class="list-group-item  align-items-center">
							<?= ++$start ?>.
							<?= $value['nama_produk'] ?>
							<div class="float-end">

								<a href="<?= base_url() ?>produk/detail/<?= $value['id'] ?>" class="badge bg-primary badge-pill me-1">Detail</a>
								<a href="<?= base_url() ?>produk/ubah/<?= $value['id'] ?>" class="badge bg-secondary badge-pill me-1">Ubah</a>
								<a href="<?= base_url() ?>produk/hapus/<?= $value['id'] ?>" class="badge bg-danger badge-pill" onclick="return confirm('yakin Mau Dihapus?')">hapus</a>
							</div>
						</li>
					<?php endforeach ?>
					<?php if (!$produks) : ?>
						<div class="alert alert-danger" role="alert">
							Produk <strong>Tidak Ada</strong>
						</div>


					<?php endif; ?>
					<?= $this->pagination->create_links(); ?>
				</ul>

			</div>
		</div>
	</div>

</div>
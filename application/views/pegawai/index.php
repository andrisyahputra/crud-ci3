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
			<a name="" id="" class="btn btn-primary" href="<?= base_url() ?>pegawai/tambah" role="button">Tambah Pegawai</a>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="list-group">
				<ul class="list-group">
					<h1>Daftar Pegawai</h1>
					<h5>Total Pegawai <?= $total_rows ?></h5>
					<!-- <php $i = 1; ?> -->
					<div class="table-responsive">
						<table class="table table-bordered ">
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Nama Pegawai</th>
									<th scope="col">Nip</th>
									<th scope="col">Jenis Kelamin</th>
									<th scope="col">Opsi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($pegawai as $value) : ?>


									<tr class="">
										<td width="1%"><?= ++$start ?></td>
										<td><?= $value['nama'] ?></td>
										<td><?= $value['nip'] ?></td>
										<td><?= $value['jk'] == "L" ? "Laki Laki" : "Perempuan" ?></td>
										<td class="text-center">
											<a href="<?= base_url() ?>pegawai/detail/<?= $value['id'] ?>" class="badge bg-primary badge-pill text-decoration-none">Detail</a>
											<a href="<?= base_url() ?>pegawai/ubah/<?= $value['id'] ?>" class="badge bg-secondary badge-pill text-decoration-none">Ubah</a>
											<a href="<?= base_url() ?>pegawai/hapus/<?= $value['id'] ?>" class="badge bg-danger badge-pill text-decoration-none" onclick="return confirm('yakin Mau Dihapus?')">hapus</a>

										</td>
									</tr>



								<?php endforeach ?>
								<?php if (!$pegawai) : ?>
									<tr>
										<td colspan="5" class="text-center">Data Pegawai tidak Ada</td>
									</tr>


								<?php endif; ?>
							</tbody>
						</table>
					</div>
					<?= $this->pagination->create_links(); ?>
				</ul>

			</div>
		</div>
	</div>

</div>
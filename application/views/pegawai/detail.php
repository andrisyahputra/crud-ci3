<div class="container py-3 ">

	<div class="row">
		<div class="col-auto">
			<div class="card text-center my-4 ">
				<div class="card-body">
					<h4 class="card-title"><?= $pegawai['nama'] ?></h4>
					<p class="card-text"><?= $pegawai['nip'] ?></p>
					<p class="card-text"><?= $pegawai['jk'] == 'L' ? 'Laki Laki' : 'Perempuan' ?></p>
				</div>
			</div>


			<a class="btn btn-primary" href="<?= base_url(); ?>pegawai" role="button">Kembali</a>
		</div>

	</div>

</div>
<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card ">
				<div class="card-body">


					<form action="" method="post">
						<div class="mb-3">
							<label for="nama" class="form-label">Nama Pegawai</label>
							<input type="text" class="form-control" name="nama" id="nama" value="<?= $pegawai['nama'] ?>" />
							<small class="text-danger"><?= form_error('nama') ?></small>
						</div>
						<div class="mb-3">
							<label for="nip" class="form-label">Nik Pegawai</label>
							<input type="text" class="form-control" name="nip" id="nip" value="<?= $pegawai['nip'] ?>" />
							<small class="text-danger"><?= form_error('nip') ?></small>
						</div>
						<div class="mb-3">
							<div class="form-group">
								<label for="jk" class="form-label">Jenis kelamin</label>
								<select class="form-control" id="jk" name="jk">
									<option disabled>Pilih Jenis Kelamin</option>
									<option value="L" <?= $pegawai['jk'] == 'L' ? 'selected' : '' ?>>Laki</option>
									<option value="P" <?= $pegawai['jk'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
								</select>
							</div>
							<small class="text-danger"><?= form_error('jk') ?></small>
						</div>
						<div class=" float-end  ">
							<button type="submit" class="btn btn-primary">
								Ubah
							</button>
							<a class="btn btn-primary" href="<?= base_url(); ?>pegawai" role="button">Kembali</a>
						</div>

					</form>
				</div>
			</div>

		</div>
	</div>
</div>
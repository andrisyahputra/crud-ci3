<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card ">
				<div class="card-body">


					<form action="" method="post">
						<div class="mb-3">
							<label for="nama_produk" class="form-label">Nama Produk</label>
							<input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Masukkan Nama Produk" />
							<small class="text-danger"><?= form_error('nama_produk') ?></small>
						</div>
						<div class="mb-3">
							<label for="stok" class="form-label">Stok Produk</label>
							<input type="number" class="form-control" name="stok_produk" id="stok" placeholder="Masukkan Stok Produk" />
							<small class="text-danger"><?= form_error('stok_produk') ?></small>
						</div>
						<div class="mb-3">
							<label for="harga" class="form-label">Harga Produk</label>
							<input type="number" class="form-control" name="harga_produk" id="harga" placeholder="Masukkan harga Produk" />
							<small class="text-danger"><?= form_error('harga_produk') ?></small>
						</div>
						<div class=" float-end  ">
							<button type="submit" name="" id="" class="btn btn-primary">
								Tambah
							</button>
							<a class="btn btn-primary" href="<?= base_url(); ?>produk" role="button">Kembali</a>
						</div>

					</form>
				</div>
			</div>

		</div>
	</div>
</div>
<div class="container py-3 ">

	<div class="row">
		<div class="col-auto">
			<div class="card text-center my-4 ">
				<div class="card-body">
					<h4 class="card-title"><?= $produk['nama_produk'] ?></h4>
					<p class="card-text"><?= $produk['stok_produk'] ?></p>
					<p class="card-text"><?= $produk['harga_produk'] ?></p>
				</div>
			</div>


			<a class="btn btn-primary" href="<?= base_url(); ?>produk" role="button">Kembali</a>
		</div>

	</div>

</div>
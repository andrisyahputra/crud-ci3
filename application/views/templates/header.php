<!doctype html>
<html lang="en">

<head>
	<title><?= $judul ?></title>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!-- Bootstrap CSS v5.2.1 -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" /> -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
</head>

<body>
	<nav class="navbar navbar-expand-sm navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">Crud</a>
			<button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavId">
				<ul class="navbar-nav me-auto mt-2 mt-lg-0">

					<li class="nav-item">
						<a class="nav-link active" href="<?= base_url() ?>pegawai">Pegawai</a>
					</li>

				</ul>
				<form class="d-flex my-2 my-lg-0" method="post" action="<?= base_url('pegawai'); ?>">
					<input class="form-control me-sm-2" name="cari" type="text" placeholder="Cari Pegawai" />
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">
						Cari
					</button>
				</form>
			</div>
		</div>
	</nav>
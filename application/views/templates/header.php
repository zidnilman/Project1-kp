<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!-- My CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

	<title><?php echo $judul; ?></title>
</head>

<body>

	<nav class="navbar navbar-expand-lg bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">PONPES.ID</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-link" aria-current="page" href="<?= base_url(); ?>">Home</a>
					<a class="nav-link" href="<?= base_url(); ?>santri">Santri</a>
					<a class="nav-link" href="#">About</a>
				</div>
			</div>
		</div>
	</nav>
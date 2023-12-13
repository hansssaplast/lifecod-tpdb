<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<!-- Bootstrap CSS -->
	<link href="<?php echo base_url('assets/member/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="<?php echo base_url('assets/member/css/tiny-slider.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/member/css/style.css'); ?>" rel="stylesheet">
	<title>Lifecod Store</title>
	<script src="<?php echo base_url('assets/member/js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/member/js/custom.js'); ?>"></script>
</head>

<!-- Start Header/Navigation -->
<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

	<div class="container">
		<a class="navbar-brand" href="<?php echo site_url('home'); ?>">Lifecod Store<span>.</span></a>

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsFurni">
			<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
				<li class="nav-item-active"><a class="nav-link" href="<?php echo site_url('home'); ?>">Home</a></li>
				<li class="nav-item-active"><a class="nav-link" href="<?php echo site_url('home/produk'); ?>">Produk</a></li>
			</ul>

			<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
				<li><a class="nav-link" href="#"><img src="<?php echo base_url('assets/member/images/user.svg'); ?>"></a></li>
				<li><a class="nav-link" href="<?php echo site_url('home/keranjang'); ?>"><img src="<?php echo base_url('assets/member/images/cart.svg'); ?>"></a></li>
			</ul>
		</div>
	</div>

</nav>
<!-- End Header/Navigation -->
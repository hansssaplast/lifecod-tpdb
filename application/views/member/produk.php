<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1>Semua Produk</h1>
				</div>
			</div>
			<div class="col-lg-7">

			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->
<div class="untree_co-section ">
	<div class="container">
		<?php if ($alert = $this->session->flashdata('success')) : ?>
			<div class="row">
				<div class="alert alert-success">
					<h4><?= $alert ?></h4>
				</div>
			</div>
		<?php endif ?>
		<div class="row">
			<div class="col-2">
				<div class="row mb-4">
					<h3 class="text-black"> Kategori </h3>
				</div>
				<div class="row">
					<div class="list-group">
						<a href="<?php echo base_url('./home/produk/'); ?>" class="product-selection list-group-item list-group-item-action <?= isset($category) ? "" : "active" ?>">SEMUA</a>
						<?php foreach ($kategori as $c) : ?>
							<!-- <button type="button" class="list-group-item list-group-item-action"><?php echo $c->nama_kategori ?></button> -->
							<a href="<?php echo base_url('./home/produk/get_by_category?cat=' . $c->nama_kategori); ?>" class="product-selection list-group-item list-group-item-action <?= @$category == $c->nama_kategori ? "active" : "" ?>"><?php echo $c->nama_kategori ?></a>
						<?php endforeach ?>
					</div>
				</div>
			</div>

			<div class="col-10">
				<div class="product-section">
					<div class="container">
						<div class="row">
							<?php foreach ($produk as $p) : ?>
								<?php $isDisabled = $p->stok <= 0 ? true : false ?>
								<?php $usehref = !$isDisabled ? "href=" . base_url('./home/produk/preview?id=' . $p->id_produk) : "" ?>
								<div class="col-12 col-md-3 col-lg-4 mb-5">
									<a class="product-item<?= $isDisabled ? " disabled" : "" ?>" <?php echo $usehref ?>>
										<img src="<?php echo base_url('assets/produk/' . $p->gambar); ?>" class="product-thumbnail" height="290px" width="360px">
										<h3 class="product-title"><?php echo $p->nama_produk ?></h3>
										<strong class="product-price">Rp <?= number_format($p->harga_produk, 0, ".", ".") ?></strong>
									</a>
								</div>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
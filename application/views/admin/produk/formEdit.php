<div class="right_col" role="main">
	<div class="row mt-5">
		<div class="col-md-6">
			<div class="x_title">
				<h3>Edit Data Produk</h2>
					<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br>
				<form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" method="post" action="<?php echo site_url('produk/edit'); ?>">
				<div class="body">
					<input type="hidden" name="id_produk" value="<?php echo $produk->id_produk; ?>">
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Produk </span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="nama_produk" required="required" class="form-control" name="nama_produk" value="<?php echo $produk->nama_produk; ?>">
						</div>
					</div>
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Gambar </span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="file" id="gambar" name="gambar" class="form-control">
						</div>
					</div>
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Kategori </span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<select class="form-select form-control" name="kategori" aria-label="Default select example">
								<?php foreach ($kategori as $cat) : ?>
									<option value="<?= $cat->id_kategori ?>"><?= $cat->nama_kategori ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Ukuran </span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" required="required" class="form-control" id="ukuran_produk" name="ukuran_produk" value="<?php echo $produk->ukuran_produk; ?>">
						</div>
					</div>
					<div class="item form-group">
						<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Warna</label>
						<div class="col-md-6 col-sm-6 ">
							<input class="form-control" type="text"  id="warna_produk" name="warna_produk" value="<?php echo $produk->warna_produk; ?>">
						</div>
					</div>
					<div class="item form-group">
						<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Harga</label>
						<div class="col-md-6 col-sm-6 ">
							<input class="form-control" type="text"  id="harga_produk" name="harga_produk" value="<?php echo $produk->harga_produk; ?>">
						</div>
					</div>
					<div class="item form-group">
						<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Stok</label>
						<div class="col-md-6 col-sm-6 ">
							<input class="form-control" type="text" id="stok" name="stok" value="<?php echo $produk->stok; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Deskripsi</span>
						</label>
						<div class="col-md-9 col-sm-9 ">
							<textarea class="form-control" rows="3" id="deskripsi" name="deskripsi"><?php echo $produk->deskripsi; ?></textarea>
						</div>
					</div>

					<div class="ln_solid"></div>
					<div class="item form-group">
						<div class="col-md-6 col-sm-6 offset-md-3">
							<button type="submit" class="btn btn-success">Submit</button>
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
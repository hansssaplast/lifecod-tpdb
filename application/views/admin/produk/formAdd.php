<div class="right_col" role="main">
	<div class="row mt-5">
		<div class="col-md-6">
			<div class="x_title">
				<h3>Tambah Data Produk</h2>
					<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br>
				<!-- <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate=""> -->
				<form action="<?php echo base_url('produk/save'); ?>" method="post" enctype="multipart/form-data">
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Produk </span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" name="nama_produk" class="form-control" id="name">
						</div>
					</div>
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Gambar </span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="file" id="gambar" name="gambar" required="required" class="form-control">
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
							<input type="text" id="last-name" name="ukuran_produk" required="required" class="form-control">
						</div>
					</div>
					<div class="item form-group">
						<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Warna</label>
						<div class="col-md-6 col-sm-6 ">
							<input id="middle-name" class="form-control" type="text" name="warna_produk">
						</div>
					</div>
					<div class="item form-group">
						<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Harga</label>
						<div class="col-md-6 col-sm-6 ">
							<input id="middle-name" class="form-control" type="text" name="harga_produk">
						</div>
					</div>
					<div class="item form-group">
						<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Stok</label>
						<div class="col-md-6 col-sm-6 ">
							<input id="middle-name" class="form-control" name="stok">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Deskripsi</span>
						</label>
						<div class="col-md-9 col-sm-9 ">
							<textarea class="form-control" name="deskripsi" rows="3" placeholder=""></textarea>
						</div>
					</div>

					<div class="ln_solid"></div>
					<div class="item form-group">
						<div class="col-md-6 col-sm-6 offset-md-3">
							<button type="submit" class="btn btn-success">Submit</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
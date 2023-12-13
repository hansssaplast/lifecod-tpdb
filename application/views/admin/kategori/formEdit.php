<div class="right_col" role="main">
    <div class="row mt-5">
	    <div class="col-md-6">
                <div class="x_title">
                    <h3>Edit Data Kategori</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
									<br>
									<form class="form-horizontal" method="post" action="<?php echo site_url('kategori/edit');?>">
									<div class="item form-group">
									<input type="hidden" name="id_kategori" value="<?php echo $kategori->id_kategori; ?>">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Kategori <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<!-- <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="<?php echo $kategori->nama_kategori; ?>"> -->
												<input type="text" id="nama_kategori" name="nama_kategori" required="required" data-validation-required-message="please enter your logo" value="<?php echo $kategori->nama_kategori; ?>" class="form-control" id="inputEmail3">
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" class="btn btn-success">Save</button>
											</div>
										</div>
									</form>

						
				</div>
            </div>
        </div>
    </div>
</div>




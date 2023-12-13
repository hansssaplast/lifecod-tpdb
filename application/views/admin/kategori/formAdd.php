<div class="right_col" role="main">
    <div class="row mt-5">
	    <div class="col-md-6">
                <div class="x_title">
                    <h3>Tambah Data Kategori</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
									<br>
									<form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left"  method="post" action="<?php echo site_url('kategori/save');?>">
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Kategori <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<!-- <input type="text" id="first-name" required="required" class="form-control "> -->
												<input type="text" name="nama_kategori" class="form-control" id="nama_kategori" data-validation-required-message="please enter your toko name">
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>
									</form>



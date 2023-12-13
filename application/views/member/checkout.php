<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1>Checkout</h1>
				</div>
			</div>
			<div class="col-lg-7">

			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->

<form action="" method="post">
	<div class="untree_co-section before-footer-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 mb-5 mb-md-0">
					<h2 class="h3 mb-3 text-black">Lengkapi Data</h2>
					<div class="p-3 p-lg-5 border bg-white">
						<div class="form-group">
							<label for="c_country" class="text-black">Provinsi<span class="text-danger">*</span></label>
							<select id="c_country" name="c_country" class="form-control">
								<option value="1">Pilih Provinsi</option>
								<option value="2">Daerah Istimewa Yogyakarta</option>
								<option value="3">Jawa Tengah</option>
								<option value="4">Jawa Timur</option>
								<option value="5">Jawa Barat</option>
							</select>
						</div>
						<div class="form-group row">
							<div class="col-md-12">
								<label for="c_fname" class="text-black">Nama Lengkap<span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="c_fname" name="c_fname">
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-12">
								<label for="c_address" class="text-black">Alamat Lengkap<span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="c_address" name="c_address">
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-6">
								<label for="c_state_country" class="text-black">Kabupaten<span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="c_state_country" name="c_state_country">
							</div>
							<div class="col-md-6">
								<label for="c_postal_zip" class="text-black">Kecamatan<span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
							</div>
						</div>

						<div class="form-group row mb-5">
							<div class="col-md-6">
								<label for="c_email_address" class="text-black">Email<span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="c_email_address" name="c_email_address">
							</div>
							<div class="col-md-6">
								<label for="c_phone" class="text-black">No HP<span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
							</div>
						</div>

					</div>
				</div>
				<div class="col-md-6">



					<div class="row mb-5">
						<div class="col-md-12">
							<h2 class="h3 mb-3 text-black">Pesananmu</h2>
							<div class="p-3 p-lg-5 border bg-white">
								<table class="table site-block-order-table mb-5">
									<thead>
										<th>Produk</th>
										<th>Total</th>
									</thead>
									<tbody>
										<?php $total = 0; ?>
										<?php foreach ($keranjang as $cart) : ?>
											<tr>
												<td><?= $cart->nama ?> <strong class="mx-2">x</strong> <?= $cart->qty ?></td>
												<td>Rp <?= number_format($cart->harga * $cart->qty, 0, '.', '.') ?></td>
											</tr>
											<?php $total += $cart->harga * $cart->qty ?>
										<?php endforeach ?>
										<tr>
											<td class="text-black font-weight-bold"><strong>Ongkir</strong></td>
											<td class="text-black">Rp 20.000</td>
										</tr>
										<tr>
											<td class="text-black font-weight-bold"><strong>Sub Total</strong></td>
											<td class="text-black font-weight-bold"><strong>Rp <?= number_format($total + 20000, 0, '.', '.') ?></strong></td>
										</tr>
									</tbody>
								</table>



								<div class="form-group">
									<input type="submit" class="btn btn-black btn-lg py-3 btn-block" value="Bayar">
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<!-- </form> -->
</div>
</div>
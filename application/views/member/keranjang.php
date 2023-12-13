<!-- Start Hero Section -->
<div class="hero">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-5">
        <div class="intro-excerpt">
          <h1>Keranjang Belanja</h1>
        </div>
      </div>
      <div class="col-lg-7">

      </div>
    </div>
  </div>
</div>
<!-- End Hero Section -->

<div class="untree_co-section before-footer-section">
  <div class="container">
    <div class="row mb-5">
      <form class="col-md-12" method="post">
        <div class="site-blocks-table">
          <table class="table">
            <thead>
              <tr>
                <th class="product-thumbnail">Gambar</th>
                <th class="product-name">Nama Produk</th>
                <th class="product-price">Harga</th>
                <th class="product-quantity">Jumlah</th>
                <th class="product-total">Total</th>
                <th class="product-remove">Hapus</th>
              </tr>
            </thead>
            <tbody>
              <?php $total = 0; ?>
              <?php foreach ($keranjang as $cart) : ?>
                <tr>
                  <td class="product-thumbnail">
                    <img src="<?php echo base_url('assets/produk/' . $cart->gambar); ?>" alt="Image" class="img-fluid">
                  </td>
                  <td class="product-name">
                    <h2 class="h5 text-black"><?= $cart->nama ?></h2>
                  </td>
                  <td>Rp <?= number_format($cart->harga, 0, '.', '.') ?></td>
                  <td>
                    <div class="input-group mb-3 d-flex align-items-center justify-content-center quantity-container">
                      <div class="input-group-prepend">
                        <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                      </div>
                      <input type="text" class="form-control text-center quantity-amount" name="qty[]" value="<?= $cart->qty ?>" min="1" style="width: 2em" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                      <div class="input-group-append">
                        <button class="btn btn-outline-black increase" type="button">&plus;</button>
                      </div>
                    </div>

                  </td>
                  <td>Rp <?= number_format($cart->harga * $cart->qty, 0, '.', '.') ?></td>
                  <?php $total += $cart->harga * $cart->qty; ?>
                  <td>
                    <input type="hidden" id="id_produk" value="<?= $cart->id ?>">
                    <button type="button" class="btn btn-black btn-sm hapus-keranjang">X</button>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
        <div class="row mb-5">
          <div class="col-md-6 mb-3 mb-md-0">
            <input type="submit" class="btn btn-black btn-sm btn-block" value="Update Keranjang">
          </div>
        </div>
      </form>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div>
          <div>

          </div>
          <div>
          </div>
          <div>

          </div>
        </div>
      </div>
      <div class="col-md-6 pl-5">
        <div class="row justify-content-end">
          <div class="col-md-7">
            <div class="row">
              <div class="col-md-12 text-right border-bottom mb-5">
                <h3 class="text-black h4 text-uppercase">Total Harga</h3>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <span class="text-black">Subtotal</span>
              </div>
              <div class="col-md-6 text-end">
                <strong class="text-black">Rp <?= number_format($total, 0, '.', '.') ?></strong>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 text-center">
                <a href="<?php echo site_url('home/checkout'); ?>" <button class="btn btn-black btn-lg py-3 btn-block">Checkout</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
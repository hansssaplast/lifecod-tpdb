<?php

if (isset($_POST["id_produk"])) {
    $this->db->select('stok');
    $this->db->from('tbl_produk');
    $this->db->where('id_produk', $_POST["id_produk"]);
    $query = $this->db->get();
    $currentStock = $query->row()->stok;
    if ($_POST['jumlah'] > $currentStock) {
        $this->session->set_flashdata("error", "Produk gagal ditambahkan karena melebihi stok!");
    } else {
        $_SESSION["keranjang"][$_POST["id_produk"]] = $_POST['jumlah'];
        $this->session->set_flashdata("success", "Produk berhasil ditambahkan kedalam keranjang!");
    }
}

?>

<section class="sec-product-detail p-4">
    <div class="container">
        <?php if ($alert = $this->session->flashdata('success')) : ?>
            <div class="row">
                <div class="alert alert-success">
                    <h4><?= $alert ?></h4>
                </div>
            </div>
        <?php endif ?>
        <?php if ($alert = $this->session->flashdata('error')) : ?>
            <div class="row">
                <div class="alert alert-danger">
                    <h4><?= $alert ?></h4>
                </div>
            </div>
        <?php endif ?>
        <div class="row">
            <div class="col-md-6 col-lg-7 d-flex justify-content-center align-items-center">
                <img src="<?php echo base_url('assets/produk/' . $produk->gambar); ?>" class="product-thumbnail" height="500px">
            </div>

            <div class="col-md-6 col-lg-4 d-flex flex-column justify-content-center text-black">
                <h3>
                    <?php echo $produk->nama_produk ?>
                </h3>

                <span>
                    <strong>Rp <?= number_format($produk->harga_produk, 0, ".", ".") ?></strong>
                </span>

                <p class="mt-3">
                    <?php echo $produk->deskripsi ?>
                </p>

                <div class="row">
                    <div class="col">
                        Ukuran
                    </div>
                    <div class="col text-end">
                        <strong><?= $produk->ukuran_produk ?></strong>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        Warna
                    </div>
                    <div class="col text-end">
                        <strong><?= $produk->warna_produk ?></strong>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        Stok
                    </div>
                    <div class="col text-end">
                        <strong><?= $produk->stok ?></strong>
                    </div>
                </div>

                <hr>

                <form method="post">
                    <input type="hidden" name="id_produk" value="<?php echo $produk->id_produk ?>">
                    <div class="row">
                        <div class="col">
                            Jumlah
                        </div>
                        <div class="col text-end">
                            <input type="number" name="jumlah" id="" min="1" max="<?php echo $produk->stok ?>" value="1" style="width: 4em">
                        </div>
                    </div>

                    <div class="row mt-3 text-center">
                        <div class="col">
                            <input type="submit" class="btn" value="Tambahkan">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="right_col" role="main">
  <div class="col mt-5">
    <div class="add">
      <div class="row">
        <a class="p-2 text-decoration-none align-items-center mt-2">
          <h3 class="d-none d-sm-inline text-dark" style="font-size: 25px;">Produk</h1>
        </a>
        <div class="x_content">
          <div class="row">
            <div class="col-sm-12">
              <div class="card-box table-responsive">

                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <a href="<?php echo site_url('produk/add'); ?>"><button type="button" class="btn btn-primary">+ Tambah</button>
                      <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Kategori</th>
                        <th>Nama Produk</th>
                        <th>Ukuran</th>
                        <th>Warna</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                      </tr>
                  </thead>

                  <tbody>
                    <?php $no = 1;
                    foreach ($produk as $prdk) { ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td class="text-center"><img src="<?php echo site_url('./assets/produk/' . $prdk->gambar); ?>" alt="" width="100px" height="100px"></td>
                        <td><?php echo $this->db->get_where("tbl_kategori", ["id_kategori" => $prdk->id_kategori])->row()->nama_kategori; ?></td>
                        <td><?php echo $prdk->nama_produk; ?></td>
                        <td><?php echo $prdk->ukuran_produk; ?></td>
                        <td><?php echo $prdk->warna_produk; ?></td>
                        <td><?php echo $prdk->harga_produk; ?></td>
                        <td><?php echo $prdk->stok; ?></td>
                        <td><?php echo $prdk->deskripsi; ?></td>
                        <td>
                          <a href="<?php echo site_url('produk/get_by_id/' . $prdk->id_produk); ?>"><button type="button" class="btn btn-warning">Edit</button>
              </div>
              <a href="<?php echo site_url('produk/delete/' . $prdk->id_produk); ?>" onclick="return confirm('Yakin akan hapus data ini?')"><button type="button" class="btn btn-danger">Hapus</button>
            </div>
            </td>
            </tr>
          <?php $no++;
                    } ?>
          <tbody>
            </table>
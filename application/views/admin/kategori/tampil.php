<div class="right_col" role="main">
            <div class="col mt-5">
                <div class="add">
                    <div class="row">
                      <a class="p-2 text-decoration-none align-items-center mt-2">
                        <h3 class="d-none d-sm-inline text-dark" style="font-size: 25px;">Kategori</h1>
                      </a>
                      <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                     
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                      <a href="<?php echo site_url('kategori/add');?>"><button type="button" class="btn btn-primary">+ Tambah</button>
                        <tr>
                          <th>No</th>
                          <th>Nama Kategori</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>

                      <tbody>
                      <?php $no=1; foreach($kategori as $kat){?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $kat->nama_kategori; ?></td>
                          <td>
                          <a href="<?php echo site_url('kategori/get_by_id/'.$kat->id_kategori);?>"><button type="button" class="btn btn-warning">Edit</button>
                          <a href="<?php echo site_url('kategori/delete/'.$kat->id_kategori);?>" onclick="return confirm('Yakin akan hapus data ini?')"><button type="button" class="btn btn-danger">Hapus</button>
                          </div>
                          </td>
                        </tr>
                        <?php $no++; }?>
                      <tbody>
                    </table>
                      
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>
      </div><!-- /.container-fluid -->
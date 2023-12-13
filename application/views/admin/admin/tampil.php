<div class="right_col" role="main">
            <div class="col mt-5">
                <div class="add">
                    <div class="row">
                      <a class="p-2 text-decoration-none align-items-center mt-2">
                        <h3 class="d-none d-sm-inline text-dark" style="font-size: 25px;">Admin</h1>
                      </a>

                      <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                     
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                      <?php $no=1; foreach($admin as $adm){?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $adm->nama_admin; ?></td>
                          <td><?php echo $adm->username; ?></td>
                          <td><?php echo $adm->password; ?></td>
                          <td>
                          <a href="<?php echo site_url('admin/delete/'.$adm->id_admin);?>"><button type="button" class="btn btn-danger">Hapus</button>
                          </div>
                          </td>
                        </tr>
                        <?php $no++; }?>
                      <tbody>
                    </table>
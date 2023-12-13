<div class="right_col" role="main">
            <div class="col mt-5">
                <div class="add">
                    <div class="row">
                      <a class="p-2 text-decoration-none align-items-center mt-2">
                        <h3 class="d-none d-sm-inline text-dark" style="font-size: 25px;">Member</h1>
                      </a>

                      <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                     
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Member</th>
                          <th>Username</th>
                          <th>No Telpon</th>
                          <th>Email</th>
                          <th>Alamat</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>

                      <tbody>
                      <?php $no=1; foreach($member as $mbr){?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $mbr->nama_member; ?></td>
                          <td><?php echo $mbr->username; ?></td>
                          <td><?php echo $mbr->no_telp; ?></td>
                          <td><?php echo $mbr->email; ?></td>
                          <td><?php echo $mbr->alamat; ?></td>
                          <td>
                          <a href="<?php echo site_url('member/delete/'.$mbr->id_member);?>"><button type="button" class="btn btn-danger">Hapus</button>
                          </div>
                          </td>
                        </tr>
                        <?php $no++; }?>
                      <tbody>
                    </table>
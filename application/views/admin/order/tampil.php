<div class="right_col" role="main">
    <div class="col mt-5">
        <div class="add">
            <div class="row">
                <a class="p-2 text-decoration-none align-items-center mt-2">
                    <h1 class="d-none d-sm-inline text-dark" style="font-size: 35px;">Order Management</h1>
                </a>
                <div class="col-lg-12 table-responsive mt-3">
                <table class="table text-center mb-0 border">
                    <thead class="bg-light text-dark">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Total Price</th>
                            <th>Status Payment</th>
                            <th>Status Shipping</th>
                            <th>Delivery receipt</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                    <?php $no=1; foreach($order as $val){?>
                        <tr>
                            <td class="align-middle"><?php echo $no; ?></td>
                            <td class="align-middle"><?php echo $val->nama_user; ?></td>
                            <td class="align-middle"><?php echo $val->alamat_user; ?></td>
                            <td class="align-middle"><span>Rp </span><?php echo $val->harga; ?></td></td>
                            <td class="align-middle"><?php echo $val->status_pembayaran; ?></td>
                            <td class="align-middle"><?php echo $val->status_pemesanan; ?></td>
                            <td class="align-middle"><?php echo $val->kurir; ?></td>
                            <td class="align-middle">
                                <a href="<?php echo site_url('order/get_by_id/'.$val->id_order);?>" class="btn btn-sm fs-4"><i class="bx bx-pencil"></i></a>
                            </td>
                        </tr>
                    <?php $no++; }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<div class="right_col" role="main">
            <div class="col-9 col-lg-10 mt-5">
                <div class="col-md-12">
                    <div class="col" >
                        <div class="py-2">
                            <a class="d-flex text-decoration-none align-items-center">
                                <h1 class="fs-4 d-none d-sm-inline text-dark">Settings</h1>
                            </a>
                        </div>
                        <div class="add">
                            <div class="row">
                                <div class="col-md-6">
                                    <form class="border rounded-2 p-5 form-horizontal" method="post" action="<?php echo site_url('user/edit');?>" enctype="multipart/form-data">
                                        <h4 class="mb-4">My Profile</h4>
                                        <input type="hidden" name="id" class="form-control" value="<?php echo $user->id_user; ?>">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Name</label>
                                            <input type="text" name="nama_user" class="form-control rounded-0" id="exampleInputEmail1" placeholder="Olivia" aria-describedby="emailHelp" value="<?php echo $user->nama_user; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Address</label>
                                            <input type="text" name="alamat_user" class="form-control rounded-0" id="exampleInputEmail1" placeholder="Lorem ipsum" aria-describedby="emailHelp" value="<?php echo $user->alamat_user; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Post Code</label>
                                            <input type="text" name="kodepos" class="form-control rounded-0" id="exampleInputEmail1" placeholder="21098" aria-describedby="emailHelp" value="<?php echo $user->kodepos; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                                            <input type="text" name="tlp_user" class="form-control rounded-0" id="exampleInputEmail1" placeholder="081234567890" aria-describedby="emailHelp" value="<?php echo $user->tlp_user; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary rounded-0 float-right">Save Change</button>
                                        </div>
                                    </form>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
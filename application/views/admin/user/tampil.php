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
                                <div class="col-md-8">
                                    <form class="border rounded-2 p-5 form-horizontal"  method="post" action="<?php echo site_url('user/save');?>">
                                    <?php foreach($user as $val){?>
                                        <input type="hidden" name="id_user" class="form-control" value="<?php echo $val->id_user; ?>">
                                        <h4 class="mb-4">Profile Photo</h4>
                                            <div class="d-flex">
                                                <div class="mb-3 mx-3">
                                                    <img class="rounded-circle shadow-4-strong" alt="avatar2" src="<?php echo base_url('assets/admin/images/profile.png');?>" height="150" width="150"/>
                                                </div>
                                                <div class="mb-3 text-center mx-2 my-5">
                                                    <button type="submit" class="btn btn-outline-primary rounded-0 mb-2">Upload Photo</button>
                                                    <!-- <a href="#" class="text-dark text-decoration-none">Remove</a> -->
                                                </div>   
                                                <div class="vr mx-2"></div>
                                                <div class="mb-3 mx-4 my-3">
                                                    <h5 class="fs-5">Image requirments :</h5>
                                                    <div class="mt-3">
                                                        <h6 class="fw-normal">1. Min. 400 x 400px</h6>
                                                        <h6 class="fw-normal">2. Max. 2MB</h6>
                                                        <h6 class="fw-normal">3. Your face or company logo</h6>
                                                    </div>
                                                </div>
                                            </div>
                                    
                                        <h4 class="mb-4 mt-4">My Profile</h4>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Username</label>
                                            <input type="text" name="username" class="form-control rounded-0" value="<?php echo $val->username; ?>" id="exampleInputEmail1" placeholder="Olivia" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control rounded-0" value="<?php echo $val->password; ?>" id="exampleInputEmail1" placeholder="Lorem ipsum">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Name</label>
                                            <input type="text" name="nama_user" class="form-control rounded-0" value="<?php echo $val->nama_user; ?>" id="exampleInputEmail1" placeholder="Olivia">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Address</label>
                                            <input type="text" name="alamat_user" class="form-control rounded-0" value="<?php echo $val->alamat_user; ?>" id="exampleInputEmail1" placeholder="Lorem ipsum">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Post Code</label>
                                            <input type="text" name="kodepos" class="form-control rounded-0" value="<?php echo $val->kodepos; ?>" id="exampleInputEmail1" placeholder="21098">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                                            <input type="text" name="tlp_user" class="form-control rounded-0" value="<?php echo $val->tlp_user; ?>" id="exampleInputEmail1" placeholder="081234567890">
                                        </div>
                                        <div class="mb-3">
                                            <a href="<?php echo site_url('user/get_by_id/'.$val->id_user);?>"><button class="btn btn-secondary rounded-0 float-right">Change</button></a>
                                        </div>
                                        <?php }?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
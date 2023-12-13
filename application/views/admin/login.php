<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in | Admin Lifecod</title>

   <!-- Bootstrap -->
   <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/font-awesome/css/font-awesome.min.css');?>">
        <!-- NProgress -->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/nprogress/nprogress.css');?>">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/iCheck/skins/flat/green.css');?>">
        <!-- Box Icon -->
        <link rel="stylesheet" href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
        
        <!-- bootstrap-progressbar -->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css');?>">
        <!-- JQVMap -->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/jqvmap/dist/jqvmap.min.css');?>">
        <!-- bootstrap-daterangepicker -->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css');?>">
    
        <!-- Custom Theme Style -->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/adminlte/adminlte.min.css');?>">
        <link href="<?php echo base_url('assets/member/css/style.css'); ?>" rel="stylesheet">
</head>
<body class="hold-transition login-page">
 
<div class="login-box">
  <div class="login-logo">
    <h2>Welcome Back Admin!</h2>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">

      <p class="login-box-msg">Sign in to start your session</p>
      <form action="<?php echo site_url('adminpanel/login');?>" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="username">
          <div class="input-group-append">
            <div class="input-group-text">
              
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/admin/plugins/jquery/jquery.min.js');?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/admin/dist/js/adminlte.min.js');?>"></script>
</body>
</html>

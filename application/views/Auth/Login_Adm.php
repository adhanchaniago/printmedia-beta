<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Purple Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/admin/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/admin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url();?>asset/admin/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <h4>Sign In Developer</h4>
              </div>
              <?php echo form_open('auth/prosesloginadmin'); ?>
                <div class="form-group">
                  <?php
                  $data = array('type' => 'email', 'class' => 'form-control', 'id' => 'email', 'name' => 'email', 'placeholder' => 'Masukkan Email', 'value' => set_value('email'), 'required' => 'true');
                  echo form_input($data);
                  echo form_error('email');
                  ?>
                </div>
                <div class="form-group">
                  <?php
                  $data = array('type' => 'password', 'class' => 'form-control', 'id' => 'password', 'name' => 'password', 'placeholder' => 'Masukkan Email', 'value' => set_value('password'), 'required' => 'true');
                  echo form_input($data);
                  echo form_error('password');
                  ?>
                </div>
                <div class="mt-3">
                  <?php echo form_submit('submit', 'Login', array('class' => 'btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn')); ?>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                </div>
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo base_url();?>asset/admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url();?>asset/admin/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url();?>asset/admin/js/off-canvas.js"></script>
  <script src="<?php echo base_url();?>asset/admin/js/misc.js"></script>
  <!-- endinject -->
</body>

</html>

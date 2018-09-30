<!DOCTYPE html>
<html>
<head>
</head>
<body>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="<?php echo base_url();?>asset/admin/images/faces/face1.jpg" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->              
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">ADMIN</span>
                <span class="text-secondary text-small">Super Admin</span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Admin/index'); ?>">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-bank menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">User</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-account-multiple menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Data</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Tambah</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
              <span class="menu-title">Universitas</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-account-card-details menu-icon"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Admin/Tampil_Univ'); ?>"> Data </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Admin/Input_Universitas');?>"> Tambah Universitas</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Admin/Input_Jurusan');?>"> Tambah Jurusan</a></li>
              </ul>
              </div>
          </li>
          
        </ul>
      </nav>
</body>
</html>
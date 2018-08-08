<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Print Media - Layanan Jasa Cetak Masa Kini</title>
    <link rel="shortcut icon" href="<?php echo base_url('asset/iconprintmedia.png');?>">    

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url('asset/user/vendor/bootstrap/css/bootstrap.min.css');?>">
    
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url('asset/user/vendor/font-awesome/css/font-awesome.min.css');?>">
    
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo base_url('asset/user/css/fontastic.css');?>">
    
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url('asset/user/css/style.blue.css');?>" id="theme-stylesheet">
    
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url('asset/user/css/custom.css');?>">

    <!-- Data Table -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.17/css/dataTables.bootstrap4.min.css">
        
  </head>

  <body>
    <div class="page">

      <!-- Navbar & Side Bar-->  
        <?php require_once(APPPATH. 'views/user/navbar.php'); ?>
      <!-- Navbar & Side Bar-->  

      

        <!-- Awal Konten -->
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">History</h2>
            </div>
          </header>

          <!-- Awalan Isi  -->
          
          <div style="margin-top: 20px;" class="container">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">                       
                   <table id="example" class="table table-striped table-hover">
                    <thead>
                    <tr style="text-align: center;">
                      <th>No.</th>
                      <th>Judul Dokumen</th>
                      <th>Tanggal</th>
                      <th>Status</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr style="text-align: center;">
                    <th scope="row">1</th>
                      <td>Interaksi Manusia dan Komputer</td>
                      <td>26 Juni 2018</td>
                      <td>Sedang Dalam Proses</td>
                    </tr>
                    </tbody>
                    </table>
                 </div>
                </div>
              </div>
          </div>            
          <!-- Akhiran Isi -->

         <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Print Media</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Design by <a href="<?php echo base_url('welcome/index');?>" class="external">Print Media</a>
                </div>
              </div>
            </div>
          </footer>
          
        </div>
        <!-- Akhir Konten -->

      </div>
    </div>

  <!-- JavaScript files-->
  <script src="<?php echo base_url('asset/user/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('asset/user/vendor/popper.js/umd/popper.min.js');?>"> </script>
  <script src="<?php echo base_url('asset/user/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('asset/user/vendor/jquery.cookie/jquery.cookie.js');?>"> </script>
  <script src="<?php echo base_url('asset/user/vendor/chart.js/Chart.min.js');?>"></script>
  <script src="<?php echo base_url('asset/user/vendor/jquery-validation/jquery.validate.min.js');?>"></script>
  <script src="<?php echo base_url('asset/user/js/charts-home.js');?>"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>


  <script>
    $(document).ready(function() {
    $('#example').DataTable();
    } );
  </script>

  <!-- Scrip Data table -->
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

  

    
  <!-- Main File-->
  <script src="<?php echo base_url('asset/user/js/front.js');?>"></script>

  </body>
</html>
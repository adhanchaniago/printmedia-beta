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
              <div class="row">
                <div class="col-md-7">
                  <h2 class="no-margin-bottom">Profile</h2>    
                </div>

                <div class="col-md-5">
                  <small class="no-margin-bottom">Di sini kamu dapat mengganti profil pribadi dan profil pelajar.</small>
                </div>
              </div>
              
            </div>
          </header>

          <!-- Awalan Isi  -->
          <div style="margin-top: 10px;" class="container">
            <div class="card">
              <div class="card-body">

             

              <form class="form-horizontal">
                    <div class="form-group row">
                      <div class="container">
                        <h1>Pribadi</h1>
                      </div>
                    </div>  

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Nama</label>
                      <div class="col-sm-9">
                      <input id="inputHorizontalSuccess" type="text" class="form-control form-control-success">
                      <small class="form-text">Silahkan isi nama anda.</small>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group-material">
                              <input type="text" name="registerUsername" required class="input-material">
                              <label for="register-username" class="label-material">No.Handphone</label>
                        </div>   
                          </div>

                          <div class="col-md-6">
                            <div class="form-group-material">
                              <input type="text" name="registerUsername" required class="input-material">
                              <label for="register-username" class="label-material">Email</label>
                        </div>   
                          </div>
                        </div>
                        
                      </div>
                      
                    </div>


                                                                      

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Alamat Asal</label>
                      <div class="col-sm-9">
                      <textarea class="form-control" rows="3"></textarea>
                      <small>Silahkan isi alamat asal, bukan alamat kos.</small>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="container">
                        <h1>Pelajar</h1>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Universitas</label>
                      <div class="col-sm-9">
                      <input id="inputHorizontalSuccess" type="text" class="form-control form-control-success">
                      <small class="form-text">Silahkan isi Universitas anda.</small>
                      </div>
                    </div>                  

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Jurusan</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control form-control-success">
                      <small class="form-text">Silahkan isi Jurusan yang sedang anda pelajari sekarang.</small>
                      </div>
                    </div>       

                    

                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group-material">
                              <input type="text" name="registerUsername" required class="input-material">
                              <label for="register-username" class="label-material">Jenjang</label>
                        </div>                        
                      </div>

                      <div class="col-md-3">
                        <div class="form-group-material">
                              <input type="text" name="registerUsername" required class="input-material">
                              <label for="register-username" class="label-material">Tahun Masuk</label>
                        </div>                        
                      </div>

                      <div class="col-md-3">
                        <div class="form-group-material">
                              <input type="text" name="registerUsername" required class="input-material">
                              <label for="register-username" class="label-material">Tahun Lulus</label>
                        </div>                        
                      </div>

                      <div class="col-md-3">
                        <div class="form-group-material">
                              <input type="text" name="registerUsername" required class="input-material">
                              <label for="register-username" class="label-material">Semester</label>
                        </div>                        
                      </div>
                    </div> 

                    <div class="form-group row">
                      <button class="btn btn-primary form-control" type="submit">Save</button>
                    </div>                   
                  </form>                  
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
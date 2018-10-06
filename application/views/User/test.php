<!DOCTYPE html>
<html>
  <head>
    
    <!-- All StyleSheet --> 
    <?php $this->load->view('user/user_stylesheet'); ?>
    <!-- All StyleSheet -->
        
  </head>

  <body>
    <div class="page">

      <!-- Navbar & Side Bar-->  
        <?php require_once(APPPATH. 'views/user/include/navbar.php'); ?>
      <!-- Navbar & Side Bar-->  


      

        <!-- Awal Konten -->
        <div class="content-inner">

        <!-- Navbar & Side Bar-->  
        <?php require_once(APPPATH. 'views/user/include/sidebar.php'); ?>
      <!-- Navbar & Side Bar-->  
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Upload Dokumen</h2>
            </div>
          </header>

          <!-- Awalan Isi  -->
          <div style="margin-top: 10px;" class="container">
            <div class="card">
              <div class="card-body">
                <p>
                  Pastikan dokumen yang kamu upload sudah benar dan sesuai dengan ketentuan.
                  Pastikan data pengiriman di bawah ini kamu isi dengan <b>Jelas</b>, <b>Lengkap</b>, dan <b>Benar</b>.                  
                </p>
                <p>
                  <b>Bila dokumen kamu tidak dapat dikirim atau tidak mencapai tujuan yang benar atau jadi terhambat / tertunda karena data pengiriman yang tidak benar / lengkap, itu diluar tanggung jawab Print Media
                  </b>
                </p>                
              </div>
            </div>            
          </div>
          
          <div style="margin-top: 20px;" class="container">
            <div class="card">
              <div class="card-body">

                <div class="row">                  
                  <!-- Ini Sisi Kiri -->                
                  <div class="col-md-9">
                  <?php echo form_open('user/inputpemesanan', array('enctype' => 'multipart/form-data', 'class' => 'form-horizontal')); ?>
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Judul Dokumen</label>
                      <div class="col-sm-9">
                      <input id="inputHorizontalSuccess" type="text" class="form-control form-control-success">
                      <small class="form-text">Isikan judul dokumen, misal: Interaksi Manusia dan Komputer.</small>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">File</label>
                      <div class="col-sm-9">
                        <div class="custom-file mb-3">
                         <input type="file" class="custom-file-input" id="customFile" name="upload_file">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                         </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Nama Penerima</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control form-control-success" disabled="">
                      <small class="form-text">Disesuaikan dengan nama yang terdaftar.</small>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">No Handphone Penerima</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control form-control-success" disabled="">
                      <small class="form-text">Disesuaikan dengan nomor handphone yang telah terdaftar.</small>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Alamat Pengiriman</label>
                      <div class="col-sm-9">
                      <textarea class="form-control" rows="3"></textarea>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Catatan Tambahan</label>
                      <div class="col-sm-9">
                      <textarea class="form-control" rows="3"></textarea>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Jenis Layanan</label>
                      <div class="col-sm-9">
                        <select class="form-control">
                              <option>Print Standar</option>
                              <option>Print + Jilid Biasa</option>
                              <option>Print + Jilid Spiral</option>                            
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <button class="btn btn-primary form-control" type="submit">Upload</button>
                    </div>                    
                  </form>                  
                  </div> 

                  <!-- Ini Sisi Kanan  -->
                  <div class="col-md-3">
                    <p><b>MOHON PERHATIAN!</b></p><hr>
                    <p>File yang di upload harus berupa <B>PDF</B>.</p><hr>
                    <p>Jangan memprotek dokumen PDF dengan Password</p><hr>
                    <p>Ukuran file PDF maksimum adalah 30mb</p><hr>
                    <p>Dokumen PDF Maksimum berisi 120  Halaman</p><hr>
                    <p>Waktu Pengantaran Maksimal 7 Hari Kerja</p><hr>
                    <p>Jumlah tagihan pembayaran akan dikirim melalui Email</p><hr>
                    <p><strong>Pemesanan yang sudah dipesan TIDAK DAPAT DIBATALKAN</strong></p><hr>
                    <p>Pastikan data dan pesanan sudah <b>BENAR</b></p>                  
                </div>
                
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
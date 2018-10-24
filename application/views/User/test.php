<!DOCTYPE html>
<html>
  <head>

    <title>Print Media - Layanan Jasa Cetak Masa Kini</title>
    <!-- All StyleSheet --> 
      <?php $this->load->view('user/include/user_stylesheet'); ?>
    <!-- All StyleSheet -->    

  </head>

  <body>
    <div class="page">

      <!-- Awal Navbar-->  
        <?php $this->load->view('user/include/navbar'); ?>
      <!-- Navbar-->
      
      <div class="page-content d-flex align-items-stretch">

      <!-- Awal Sidebar-->  
        <?php $this->load->view('user/include/sidebar'); ?>
      <!-- Akhir Side Bar-->

        <div class="content-inner">
        <?php if($this->session->flashdata('success_input') == true):?>
        <script src="<?php echo base_url();?>asset/user/plugin/sweetalert/dist/sweetalert2.all.min.js"></script>
        <script>
          swal({
              title: "Done",
              text: "Selamat Bergabung Dengan Printmedia",              
              showConfirmButton: true,
              type: 'success'
              });
        </script>
      <?php endif;?>

          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-7">
                  <h2 class="no-margin-bottom">Upload Dokumen</h2>    
                </div>

                <div class="col-md-5">
                  <small class="no-margin-bottom">Di sini kamu dapat mengupload dokumen untuk melakukan pemesanan.</small>
                </div>
              </div>
            </div>
          </header>
          
          <!-- Awalan Forms-->
          <section class="forms"> 
            <div class="container">
            
              <!-- Awal Card -->
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h3 class="h4">Form Pemesanan dan Pengiriman</h3>
                </div>

                <!--Awal Card Body -->
                <div class="card-body">
                  <div class="container">
                    <?php echo form_open('user/inputdataprofile', array('class' => 'form-horizontal')); ?>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group-row">
                          <label class="label">Nama Penerima : </label>
                          <?php 
                            $data = array('type' => 'text', 'class' => 'form-control', 'name' => 'nama_lengkap', 'id' => 'nama_lengkap', 'value' => set_value('nama_lengkap')); 
                            echo form_input($data);                                                    
                          ?>                            
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group-row">
                            <label class="label">No. Handphone penerima : </label>
                            <?php 
                              $data = array('type' => 'text', 'class' => 'form-control', 'name' => 'nama_lengkap', 'id' => 'nama_lengkap', 'value' => set_value('nama_lengkap')); 
                              echo form_input($data);                                                    
                            ?>                            
                            </div>
                        </div>
                      
                      </div>

                      
                    <?php echo form_close(); ?> 
                  </div>                      
                  
                </div>
                <!-- Akhir cardBody -->

              </div>
              <!-- Akhir Card -->
            
            </div>  
            <!-- Akhir container -->

          </section>
          <!-- Akhiran Form -->

          <!-- Awla Page Footer-->
            <?php $this->load->view('user/include/footer'); ?>
          <!-- Akhir Page Footer-->

        </div> <!-- Akhir Div Content Inner -->
      </div> <!-- Akhir Div Page Content -->
    </div> <!-- Akhir Div Page -->


  <!-- All Java Scripts --> 
    <?php $this->load->view('user/include/user_javascript'); ?>
  <!-- All Java Script -->


  </body>
</html>
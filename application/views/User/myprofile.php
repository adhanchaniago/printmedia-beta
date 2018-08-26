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
    <link rel="stylesheet" href="<?php echo base_url();?>asset/user/vendor/bootstrap/css/bootstrap.min.css">
    
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/user/vendor/font-awesome/css/font-awesome.min.css">
    
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/user/css/fontastic.css">
    
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/user/css/style.blue.css" id="theme-stylesheet">
    
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/user/css/custom.css">    

    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/user/plugin/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
        
  </head>

  <body>
    <div class="page">

      <!-- Navbar & Side Bar-->  
        <?php $this->load->view('user/navbar'); ?>
      <!-- Navbar & Side Bar-->  

        <!-- Awal Konten -->
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-7">
                  <h2 class="no-margin-bottom">Pengaturan Akun</h2>    
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
                <?php echo form_open('', array('class' => 'form-horizontal')); ?>
                  <div class="form-group row">
                    <div class="container">
                      <h1>Profile Pribadi</h1>
                    </div>
                  </div>           

                  <div class="form-group row">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group-material">
                            <?php 
                              $data = array('type' => 'text', 'class' => 'input-material', 'name' => 'nama_lengkap', 'id' => 'nama_lengkap', 'value' => set_value('nama_lengkap')); 
                              echo form_input($data);
                            ?>
                            <label for="nama_lengkap" class="label-material">Nama Lengkap*</label>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group-material">
                            <?php 
                              $data = array('type' => 'text', 'class' => 'input-material', 'name' => 'no_handphone', 'id' => 'no_handphone', 'value' => set_value('no_handphone')); 
                              echo form_input($data);
                            ?>
                            <label for="no_handphone" class="label-material">Nomer Handphone*</label>
                          </div>   
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4">
                          <label class="label">Jenis Kelamin : </label>
                            <div class="select">
                            <?php
                              $data = array('Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan');
                              echo form_dropdown('jenis_kelamin', $data, set_value('jenis_kelamin'), ['class' => 'form-control']);
                            ?>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <i class="fa fa-calendar"></i>
                          <label class="label">Tanggal Lahir : </label>                            
                            <div class="input-group date">
                              <div class="input-group-addon">
                              </div>
                            <input type="text" class="form-control pull-right" id="datepicker">
                            </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group-material">
                            <label class="label">Email : </label>
                            <?php
                              $data = array('type' => 'email', 'class' => 'form-control', 'name' => 'email', 'id' => 'email', 'value' => $this->session->userdata('email'), 'readonly' => 'true');
                              echo form_input($data);
                            ?>
                          </div>
                        </div>                          
                      </div>
                    </div>                      
                  </div>                                                                      

                  <div class="form-group row">
                    <label class="col-sm-3 form-control-label">Alamat Asal</label>
                    <div class="col-sm-9">
                      <?php
                        $data = array('class' => 'form-control', 'name' => 'alamat', 'rows' => 3);
                        echo form_textarea($data);
                      ?>
                      <small>Alamat asal (bukan tempat kost). Misal: Jl. Jembrana XI no 5</small>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 form-control-label">Detail Tempat Tinggal</label>
                    <div class="col-sm-9">
                      <?php
                        $data = array('class' => 'form-control', 'name' => 'detail_alamat', 'rows' => 3);
                        echo form_textarea($data);
                      ?>
                      <small>Misal: Perumahan Elok Permai Blok BC, RT/RW 03/09</small>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <label class="label">Provinsi : </label>
                      <div class="select">
                        <select name="account" class="form-control" id="provinsi">
                        <?php
                        $this->db->from('provinces');
                        $provinsi = $this->db->get();
                        $data_provinsi = $provinsi->result_array();
                        foreach($data_provinsi as $row) {
                        ?>
                          <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                        <?php } ?>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <label class="label">Kota/Kabupaten : </label>
                      <div class="select">
                        <select name="account" class="form-control" id="kota">
                        <?php
                        $this->db->from('regencies');
                        //$this->db->join('provinces', 'provinces.id = regencies.province_id' );
                        //$this->db->where('province_id', $row['id']);
                        $kota = $this->db->get();
                        $data_kota = $kota->result_array();
                        foreach($data_kota as $rows){ 
                        ?>
                          <option value="<?php echo $rows['name']; ?>"><?php echo $rows['name']; ?></option>
                        <?php } ?>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <label class="label">Provinsi : </label>
                      <div class="select">
                        <select name="account" class="form-control" id="kecamatan">
                        <?php
                        $this->db->from('districts');
                        //$this->db->join('provinces', 'provinces.id = regencies.province_id' );
                        //$this->db->where('province_id', $row['id']);
                        $kecamatan = $this->db->get();
                        $data_kecamatan = $kecamatan->result_array();
                        //foreach($data_kecamatan as $rowss){ 
                        ?>
                          <option value="<?php //$rowss['name']; ?>"><?php //$rowss['name']; ?></option>
                        <?php //} ?>
                        </select>
                      </div>
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
                      <?php
                        $data = array('type' => 'text', 'class' => 'form-control', 'name' => 'instansi', 'id' => 'instansi', 'value' => set_value('instansi'));
                        echo form_input($data);
                      ?>
                      <small class="form-text">Silahkan isi Instansi anda.</small>
                    </div>
                  </div>                  

                  <div class="form-group row">
                    <label class="col-sm-3 form-control-label">Jurusan</label>
                    <div class="col-sm-9">
                      <?php
                        $data = array('type' => 'text', 'class' => 'form-control', 'name' => 'jurusan', 'id' => 'jurusan', 'value' => set_value('jurusan'));
                        echo form_input($data);
                      ?>
                      <small class="form-text">Silahkan isi Jurusan yang sedang anda pelajari sekarang.</small>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group-material">
                        <?php
                          $data = array('type' => 'text', 'class' => 'input-material', 'name' => 'jenjang', 'id' => 'jenjang', 'value' => set_value('jenjang'));
                          echo form_input($data);
                        ?>
                        <label for="jenjang" class="label-material">Jenjang</label>
                      </div>                        
                    </div>

                    <div class="col-md-3">
                      <div class="form-group-material">
                        <?php
                          $data = array('type' => 'text', 'class' => 'input-material', 'name' => 'tahun_masuk', 'id' => 'tahun_masuk', 'value' => set_value('tahun_masuk'));
                          echo form_input($data);
                        ?>
                        <label for="tahun_masuk" class="label-material">Tahun Masuk</label>
                      </div>                        
                    </div>

                    <div class="col-md-3">
                      <div class="form-group-material">
                        <?php
                          $data = array('type' => 'text', 'class' => 'input-material', 'name' => 'tahun_lulus', 'id' => 'tahun_lulus', 'value' => set_value('tahun_lulus'));
                          echo form_input($data);
                        ?>
                        <label for="tahun_lulus" class="label-material">Tahun Lulus</label>
                      </div>                        
                    </div>

                    <div class="col-md-3">
                      <div class="form-group-material">
                        <?php
                          $data = array('type' => 'text', 'class' => 'input-material', 'name' => 'semester', 'id' => 'semester', 'value' => set_value('semester'));
                          echo form_input($data);
                        ?>
                        <label for="semester" class="label-material">Semester</label>
                      </div>                        
                    </div>
                  </div> 

                  <div class="form-group row">
                    <?php echo form_submit('submit', 'Submit', array('class' => 'btn btn-primary')); ?>
                    <?php echo form_reset('reset', 'Reset', array('class' => 'btn btn-danger')); ?>
                  </div>                   
                <?php echo form_close(); ?>                 
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
  <script src="<?php echo base_url();?>asset/user/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>asset/user/vendor/popper.js/umd/popper.min.js"> </script>
  <script src="<?php echo base_url();?>asset/user/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>asset/user/vendor/jquery.cookie/jquery.cookie.js"> </script>
  <script src="<?php echo base_url();?>asset/user/vendor/jquery-validation/jquery.validate.min.js"></script>
  <!-- bootstrap datepicker -->
  <script src="<?php echo base_url();?>asset/user/plugin/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

  <!-- Main File-->
  <script src="<?php echo base_url();?>asset/user/js/front.js"></script>
  <script>
            $("#kota").chained("#provinsi"); // disini kita hubungkan kota dengan provinsi
            $("#kecamatan").chained("#kota"); // disini kita hubungkan kecamatan dengan kota
        </script>

  </body>
</html>
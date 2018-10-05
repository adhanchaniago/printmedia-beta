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

          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-7">
                  <h2 class="no-margin-bottom">Profil Ku</h2>    
                </div>

                <div class="col-md-5">
                  <small class="no-margin-bottom">Di sini kamu dapat melihat dan merubah Profil Pribadi dan Akademik Kamu.</small>
                </div>
              </div>
            </div>
          </header>
          
          <!-- Awalan Forms-->
          <section class="forms"> 
            <div class="container-fluid">
            <?php echo form_open('user/editdata', array('class' => 'form-horizontal')); ?>
            <!-- Awal Row Form -->
              <div class="row">

                <!-- Awal Data Diri Pribadi -->
                <div class="col-lg-12">

                  <!-- Awal Card Pribadi -->
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Data Diri Pribadi</h3>
                    </div>

                    <div class="card-body">
                    <?php foreach ($cek as $info)  { ?>
                        <!-- Awal ROW 1 -->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="label">Nama Lengkap : </label>
                              <?php                              
                                $data = array('type' => 'text', 'class' => 'form-control', 'name' => 'nama_lengkap', 'id' => 'nama_lengkap', 'value' => $info['nama'], 'readonly' => 'true'); 
                                echo form_input($data);                                                            
                                ?>                           
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="label">No. Handphone : </label>
                                <?php 
                                    $data = array('type' => 'text', 'class' => 'form-control', 'name' => 'no_handphone', 'id' => 'no_handphone', 'value' => $info['nohape'], 'readonly'=>'true'); 
                                    echo form_input($data);                              
                                ?>                                                   
                            </div>   
                          </div>
                        </div>
                        <!-- AKHIR ROW 1 -->

                        <!-- AWAL ROW 2 -->
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="label">Jenis Kelamin : </label>
                                <?php 
                                    $data = array('type' => 'text', 'class' => 'form-control', 'name' => 'jenis_kelamin', 'id' => 'no_handphone', 'value' => $info['gender'], 'readonly'=>'true'); 
                                    echo form_input($data);                          
                                ?>                        
                            </div>
                          </div>
                          
                          <div class="col-md-4">
                            <div class="form-group">
                              <i class="fa fa-calendar"></i>
                              <label class="label">Tanggal Lahir : </label>
                                <?php
                                    $data = array('type'=>'text', 'class' => 'form-control', 'name' => 'tanggal_lahir','value' => $info['tanggal_lahir'], 'readonly' => 'true');
                                    echo form_input($data);
                                ?>                                                                     
                            </div>
                          </div>
                          
                          <div class="col-md-4">
                            <div class="form-group">
                            <label class="label">Email : </label>
                            <?php
                              $data = array('type' => 'email', 'class' => 'form-control', 'name' => 'email', 'id' => 'email', 'value' => $this->session->userdata('email'), 'readonly' => 'true');
                              echo form_input($data);
                            ?>
                            </div>
                          </div>
                        </div>
                        <!-- AKHIR ROW 2 -->

                        <!-- AWAL ROW 3 -->
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Alamat Asal</label>
                            <div class="col-sm-9">
                            <?php
                                $data = array('class' => 'form-control', 'name' => 'alamat', 'value' => $info['alamat'], 'rows' => 3, 'readonly' => 'true');
                                echo form_textarea($data);
                            ?>
                                <small>Alamat asal (bukan tempat kost). Misal: Jl. Jembrana XI no 5</small>
                            </div>
                        </div>
                        <!-- AKHIR ROW 3 -->

                        <!-- AWAL ROW 4 -->
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Detail Tempat Tinggal</label>
                            <div class="col-sm-9">
                            <?php
                            $data = array('class' => 'form-control', 'name' => 'detail_alamat', 'rows' => 3,'value' => $info['detail_alamat'], 'readonly' => 'true');
                            echo form_textarea($data);
                            ?>
                            <small>Misal: Perumahan Elok Permai Blok BC, RT/RW 03/09</small>
                          </div>
                          </div>
                        <!-- AKHIR ROW 4 -->
                        
                        <div class="row">

                          <div class="col-md-3">
                            <div class="form-group">
                              <label class="label">Provinsi : </label>
                                <?php                    
                                    $data = array('id' => $info['provinsi']) ;
                                    $provinsi = $this->db->get_where('provinces', $data);
                                    $data_provinsi = $provinsi->result_array();
    
                                    $data = array('type' => 'text', 'class' => 'form-control', 'name' => 'provinsi', 'id' => 'provinsi', 'value' => $data_provinsi[0]['name'], 'readonly'=>'true'); 
                                    echo form_input($data);                          
                                ?>
                            </div>
                          </div>
                          
                          <div class="col-md-3">
                            <div class="form-group">
                              <label class="label">Kota/Kabupaten : </label>
                              <?php                    
                              $data = array('id' => $info['kota']) ;
                              $kota = $this->db->get_where('regencies', $data);
                              $data_kota = $kota->result_array();
    
                              $data = array('type' => 'text', 'class' => 'form-control', 'name' => 'provinsi', 'id' => 'provinsi', 'value' => $data_kota[0]['name'], 'readonly'=>'true'); 
                              echo form_input($data);                          
                            ?>
                            </div>
                          </div>
                          
                          <div class="col-md-3">
                            <div class="form-group">
                              <label class="label">Kecamatan : </label>
                              <?php                    
                              $data = array('id' => $info['kecamatan']) ;
                              $kecamatan = $this->db->get_where('districts', $data);
                              $data_kecamatan = $kecamatan->result_array();

                              $data = array('type' => 'text', 'class' => 'form-control', 'name' => 'provinsi', 'id' => 'provinsi', 'value' => $data_kecamatan[0]['name'], 'readonly'=>'true'); 
                              echo form_input($data);                          
                            ?>
                            </div>
                          </div>
                          
                          <div class="col-md-3">
                            <div class="form-group">
                              <label class="label">Kode Pos : </label>
                              <?php 
                              $data = array('type' => 'text', 'class' => 'form-control', 'name' => 'provinsi', 'id' => 'provinsi', 'value' => $info['kodepos'], 'readonly'=>'true'); 
                              echo form_input($data);                          
                            ?>  
                            </div>
                          </div>
                        
                        </div>
                    </div>
                    
                  </div>
                  <!-- Akhir Card Pribadi -->
                  
                </div>
                <!-- Akhir Data Diri Pribadi -->

                <!-- Awal Data Diri Akademik -->
                <div class="col-lg-12">
                  
                  <!-- Awal Card Akademik -->
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Data Diri Akademik</h3>
                    </div>

                    <!--Awal Card Body  -->
                    <div class="card-body">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Universitas</label>
                          <div class="col-sm-9 select">
                            <?php
                                $data = array('id' => $info['universitas']) ;
                                $universitas = $this->db->get_where('universitas', $data);
                                $data_universitas = $universitas->result_array();
                                $data = array('type' => 'text', 'class' => 'form-control', 'name' => 'email', 'id' => 'email', 'value' => $data_universitas[0]['nama_univ'], 'readonly' => 'true');
                                echo form_input($data);
                            ?>
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Program Studi</label>
                          <div class="col-sm-9 select">
                            <?php
                                $data = array('id' => $info['progdi']) ;
                                $progdi = $this->db->get_where('jurusan', $data);
                                $data_progdi = $progdi->result_array();
                                $data = array('type' => 'text', 'class' => 'form-control', 'name' => 'email', 'id' => 'email', 'value' => $data_progdi[0]['jurusan'], 'readonly' => 'true');
                                echo form_input($data);
                            ?>
                          </div>
                        </div>
                        
                        <div class="row">                         
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="label">Tahun Masuk : </label>
                                <?php
                                    $data = array('id' => $info['tahun_masuk']) ;
                                    $masuk = $this->db->get_where('tahun', $data);
                                    $data_masuk = $masuk->result_array();
                                    $data = array('type' => 'text', 'class' => 'form-control', 'name' => 'email', 'id' => 'email', 'value' => $data_masuk[0]['tahun'], 'readonly' => 'true');
                                    echo form_input($data);
                                ?>
                            </div>
                          </div>
                          
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="label">Tahun Keluar : </label>
                                <?php
                                    $data = array('id' => $info['tahun_masuk']) ;
                                    $keluar = $this->db->get_where('tahun', $data);
                                    $data_keluar = $keluar->result_array();
                                    $data = array('type' => 'text', 'class' => 'form-control', 'name' => 'email', 'id' => 'email', 'value' => $data_keluar[0]['tahun'], 'readonly' => 'true');
                                    echo form_input($data);
                                ?>
                            </div>
                          </div>
                        
                        </div>
          
                        <div class="form-group- row">
                            <div class="container">
                                <?php echo form_submit('submit', 'Edit Data Diri', array('class' => 'btn btn-primary form-control')); ?>
                            </div>                                                 
                        </div>

                        
                    </div>
                    <!-- Akhir Card Body -->
                  </div>
                  <!-- Akhir Card Akademik -->

                </div>
                <!-- Akhir Data Diri Akademik -->

                    <?php } ?>

              </div>
            <!-- Ending Row FOrm -->
            <?php echo form_close(); ?> 

            </div>
          </section>
          <!-- Akhiran Form -->

          <!-- Awla Page Footer-->
            <?php $this->load->view('user/include/footer'); ?>
          <!-- Akhir Page Footer-->

        </div> <!-- Akhir Div Content Inner -->
      </div> <!-- Akhir Div Page Content -->
    </div> <!-- Akhir Div Page -->


  <!-- All StyleSheet --> 
    <?php $this->load->view('user/include/user_javascript'); ?>
  <!-- All StyleSheet -->

  <!-- Datepicker -->
  <script>
    $(document).ready(function () {
                $('#tanggal_lahir').datepicker({
                    format: "yyyy-mm-dd",
                    autoclose:true
                });
            });
  </script>

  <!-- Untuk Provinsi, Kota dan kecamatan -->
  <script>
  $(document).ready(function(){ 
    $("#provinsi").change(function(){ // Ketika user mengganti atau memilih data provinsi
      $("#kota").hide(); // Sembunyikan dulu combobox kota nya
    
      $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "<?php echo base_url("user/listkota"); ?>", // Isi dengan url/path file php yang dituju
        data: {province_id : $("#provinsi").val()}, // data yang akan dikirim ke file yang dituju
        dataType: "json",
        beforeSend: function(e) {
          if(e && e.overrideMimeType) {
            e.overrideMimeType("application/json;charset=UTF-8");
          }
        },
        success: function(response){ // Ketika proses pengiriman berhasil
          // set isi dari combobox kota
          // lalu munculkan kembali combobox kotanya
          $("#kota").html(response.list_kota).show();
        },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
          alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
        }
      });
    });
  });

  $(document).ready(function(){ 
    $("#kota").change(function(){ // Ketika user mengganti atau memilih data provinsi
      $("#kecamatan").hide(); // Sembunyikan dulu combobox kota nya
    
      $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "<?php echo base_url("user/listkecamatan"); ?>", // Isi dengan url/path file php yang dituju
        data: {regency_id : $("#kota").val()}, // data yang akan dikirim ke file yang dituju
        dataType: "json",
        beforeSend: function(e) {
          if(e && e.overrideMimeType) {
            e.overrideMimeType("application/json;charset=UTF-8");
          }
        },
        success: function(response){ // Ketika proses pengiriman berhasil
          // set isi dari combobox kota
          // lalu munculkan kembali combobox kotanya
          $("#kecamatan").html(response.list_kota).show();
        },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
          alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
        }
      });
    });
  });
  </script>

  </body>
</html>
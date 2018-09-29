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
                <?php echo form_open('user/inputdata', array('class' => 'form-horizontal')); ?>
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
                            <label class="label">Nama Lengkap : </label>
                            <?php 
                              $data = array('type' => 'text', 'class' => 'form-control', 'name' => 'nama_lengkap', 'id' => 'nama_lengkap', 'value' => set_value('nama_lengkap')); 
                              echo form_input($data);
                              echo form_error('nama_lengkap');
                            ?>                            
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group-material">
                            <label class="label">No. Handphone : </label>
                            <?php 
                              $data = array('type' => 'text', 'class' => 'form-control', 'name' => 'no_handphone', 'id' => 'no_handphone', 'value' => set_value('no_handphone')); 
                              echo form_input($data);
                              echo form_error('no_handphone');
                            ?>                                                  
                          </div>   
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group-material">
                            <label class="label">Jenis Kelamin : </label>
                            <div class="select">
                            <?php
                              $data = array('Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan');
                              echo form_dropdown('jenis_kelamin', $data, set_value('jenis_kelamin'), ['class' => 'form-control']);
                            ?>
                            </div>
                          </div>                          
                        </div>

                        <div class="col-md-4">
                          <div class="form-group-material">
                            <i class="fa fa-calendar"></i>
                          <label class="label">Tanggal Lahir : </label>                             
                            <div class="input-group date">
                              <div class="input-group-addon"></div>                              
                                <input type="text" class="form-control pull-right" id="tanggal_lahir" name="tanggal_lahir">                                                     
                            </div>                              
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
                    <div class="col-md-3">
                      <label class="label">Provinsi : </label>
                      <div class="select">
                        <select name="provinsi" class="form-control" id="provinsi">
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

                    <div class="col-md-3">
                      <label class="label">Kota/Kabupaten : </label>
                      <div class="select">
                        <select name="kota" class="form-control" id="kota">
                          <option value=""></option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <label class="label">Kecamatan : </label>
                      <div class="select">
                        <select name="kecamatan" class="form-control" id="kecamatan">
                          <option value=""></option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <label class="label">Kode Pos : </label>
                      <?php 
                        $data = array('type' => 'text', 'class' => 'form-control', 'name' => 'kodepos', 'id' => 'kodepos', 'value' => set_value('kodepos')); 
                        echo form_input($data);                        
                      ?>                            
                    </div>


                  </div>

                  <div class="form-group row">
                    <div class="container">
                      <br>
                      <h1>Profil Mahasiswa</h1>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 form-control-label">Universitas</label>
                    <div class="col-sm-9">
                      <div class="select">
                        <select name="universitas" class="form-control" id="universitas">
                        <?php
                        $this->db->from('universitas');
                        $universitas = $this->db->get();
                        $data_universitas = $universitas->result_array();
                        foreach($data_universitas as $row) {
                        ?>
                          <option value="<?php echo $row['id']; ?>"><?php echo $row['nama_univ']; ?></option>
                        <?php } ?>                                                                  
                        </select>
                      </div>                
                      <small class="form-text">Silahkan isi Nama Universitas anda.</small>
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
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
                  <h2 class="no-margin-bottom">Pengaturan Akun</h2>    
                </div>

                <div class="col-md-5">
                  <small class="no-margin-bottom">Di sini kamu dapat mengganti profil pribadi dan profil pelajar.</small>
                </div>
              </div>
            </div>
          </header>
          
          <!-- Awalan Forms-->
          <section class="forms"> 
            <div class="container-fluid">
            <?php echo form_open('user/inputdata', array('class' => 'form-horizontal')); ?>
              <div class="row">

                <!-- Form Elements -->
                <div class="col-lg-12">

                  <!-- Awal Card -->
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Data Diri Pribadi</h3>
                    </div>

                    <div class="card-body">
                        <!-- Awal ROW 1 -->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
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
                        <!-- AKHIR ROW 1 -->

                        <!-- AWAL ROW 2 -->
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="label">Jenis Kelamin : </label>
                              <?php
                                $data = array('Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan');
                                echo form_dropdown('jenis_kelamin', $data, set_value('jenis_kelamin'), ['class' => 'form-control']);
                              ?>                          
                            </div>
                          </div>
                          
                          <div class="col-md-4">
                            <div class="form-group">
                              <i class="fa fa-calendar"></i>
                              <label class="label">Tanggal Lahir : </label>
                                <div class="input-group date">
                                  <div class="input-group-addon"></div>                              
                                    <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir">                                                     
                                </div>                                                                  
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
                            $data = array('class' => 'form-control', 'name' => 'alamat', 'rows' => 3);
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
                            $data = array('class' => 'form-control', 'name' => 'detail_alamat', 'rows' => 3);
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
                            <div class="form-group">
                              <label class="label">Kota/Kabupaten : </label>
                              <div class="select">
                                <select name="kota" class="form-control" id="kota">
                                  <option value=""></option>
                                </select>
                              </div>
                            </div>
                          </div>
                          
                          <div class="col-md-3">
                            <div class="form-group">
                              <label class="label">Kecamatan : </label>
                              <div class="select">
                                <select name="kecamatan" class="form-control" id="kecamatan">
                                  <option value=""></option>
                                </select>
                              </div>
                            </div>
                          </div>
                          
                          <div class="col-md-3">
                            <div class="form-group">
                              <label class="label">Kode Pos : </label>
                              <?php 
                              $data = array('type' => 'text', 'class' => 'form-control', 'name' => 'kodepos', 'id' => 'kodepos', 'value' => set_value('kodepos')); 
                              echo form_input($data);                        
                              ?>      
                            </div>
                          </div>
                        
                        </div>
                    </div>
                    
                  </div>
                  <!-- Akhir Card -->
                  
                </div>

                <div class="col-lg-12">

                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Data Diri Akademik</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Universitas</label>
                          <div class="col-sm-9 select">
                            <select name="account" class="form-control">
                              <option>option 1</option>
                              <option>option 2</option>
                              <option>option 3</option>
                              <option>option 4</option>
                            </select>
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Program Studi</label>
                          <div class="col-sm-9 select">
                            <select name="account" class="form-control">
                              <option>option 1</option>
                              <option>option 2</option>
                              <option>option 3</option>
                              <option>option 4</option>
                            </select>
                          </div>
                        </div>
                        
                        <div class="row">                         
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-control-label">Jenis Kelamin</label>
                              <select name="account" class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                              </select>
                            </div>
                          </div>
                          
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-control-label">Jenis Kelamin</label>
                              <select name="account" class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                              </select>
                            </div>
                          </div>
                        
                        </div>

                        <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                    </div>
                  </div>

                </div>

              </div>
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
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
                  

                      <?php
                        function getPDFPages($document)
                        {                                                      
                          $cmd = "C:\\xampp\\htdocs\\printmedia-beta\\asset\\user\\pemesanan\\pdfinfo.exe";                          
                        
                           
                            // Parse entire output
                            // Surround with double quotes if file name has spaces
                            exec("$cmd \"$document\"", $output);

                            // Iterate through lines
                            $pagecount = 0;
                            foreach($output as $op)
                            {
                              // Extract the number
                              if(preg_match("/Pages:\s*(\d+)/i", $op, $matches) === 1)
                              {
                                $pagecount = intval($matches[1]);
                                break;
                              }
                            }

                              return $pagecount;
                        }
                      ?>

                      <div class="form-group row">
                        <?php
                          $src = "C:\\xampp\\htdocs\\printmedia-beta\\asset\\user\\pemesanan\\test11.pdf";                          
                          echo "Jumlah Page PDF : ";
                          echo getPDFPages($src); 
                        ?>
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
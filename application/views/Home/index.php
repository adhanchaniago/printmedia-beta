<!DOCTYPE HTML>
<html lang="en">
<head>
<title><?php echo SITE_NAME .": ". ucfirst($this->uri->segment(1)) ." - ". ucfirst($this->uri->segment(2)) ?></title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Material Design for Bootstrap CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/home/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/home/css/style.css">
<link href="https://fonts.googleapis.com/css?family=Fredoka+One|Roboto:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>
<body>

<div id="navbar">
    <?php $this->load->view('home/inc/header'); ?>
</div>

<section class="section section-intro" id="mulai">
    <img src="<?php echo base_url('asset/home/img/banner4.jpg'); ?>" alt="" width="100%">
</section>

<section class="section section-tutorial">
    <div class="container">
        <div class="default-header">
            <h3>LANGKAH PEMESANAN</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="tutorial-header">
                    <img src="<?php echo base_url('asset/home/img/register.png'); ?>" class="img-fluid" width="150" height="150">
                </div>
                <div class="tutorial-body">
                    <h4>Daftar di PrintMedia</h4>
                    <p>Mahasiswa / siswa melakukan pendaftaran di Print Media dan melengkapi data-datanya. Hanya email berdomain <b>.ac.id</b> atau <b>.edu</b> yang bisa mendaftar.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="tutorial-header">
                    <img src="<?php echo base_url('asset/home/img/upload-dokumen.png'); ?>" class="img-fluid" width="150" height="150">
                </div>
                <div class="tutorial-body">
                    <h4>Upload Dokumen</h4>
                    <p><b>1.</b> Anda mengunggah dokumen dengan format-format yang di inginkan.</p>
                    <p><b>2.</b> Pilih jenis pembayaran dan pengiriman.</p>
                    <p><b>3.</b> Pihak Print Media akan memproses pesanan Anda.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="tutorial-header">
                    <img src="<?php echo base_url('asset/home/img/shipping.png'); ?>" class="img-fluid" width="150" height="150">
                </div>
                <div class="tutorial-body">
                    <h4>Dokumen Sampai</h4>
                    <p>Dokumen akan sampai sesuai dengan waktu yang telah ditentukan. Jika dalam waktu 7 hari tidak sampai, maka akan diberikan pengembalian uang.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-layanan">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="header-layanan">
                    <h4>Mengapa Harus Print Media?</h4>
                </div>

                <div class="row my-3">
                    <div class="col-lg-6">
                        <img src="<?php echo base_url('asset/home/img/layanan1.jpg'); ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6">
                        <h4>Cetak Mudah &amp; Efisien</h4>
                        <span>Cetak kebutuhan Anda online kapanpun dan dimanapun, tanpa macet atau antrian.</span>
                    </div>
                </div>
                    
                <div class="row my-3">
                    <div class="col-lg-6">
                        <img src="<?php echo base_url('asset/home/img/layanan2.jpg'); ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6">
                        <h4>Berbagai Pilihan Kertas</h4>
                        <span>Kami menawarkan macam - macam kertas, agar bisa digunakan sesuai kebutuhan Anda.</span>
                    </div>
                </div>
                    <!-- 'oninvalid' => 'this.setCustomValidity('."'Username Tidak Boleh Kosong'".')', 'oninput' => 'setCustomValidity('."''".')', -->
                <div class="row my-3">
                    <div class="col-lg-6">
                        <img src="<?php echo base_url('asset/home/img/layanan3.jpg'); ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6">
                        <h4>Pengiriman Yang Fleksibel</h4>
                        <span>Tersedia pilihan pengiriman oleh pihak Perusahaan atau Ojek Online.</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="header-layanan">
                    <h4>Pilih Kertasmu</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-dark">
                        <thead>
                            <tr>
                                <th class="text-white">Jenis</th>
                                <th class="text-white">Hitam Putih</th>
                                <th class="text-white">Berwarna</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>A4</td>
                                <td>Rp. 300 / pcs</td>
                                <td>Rp. 1000 / pcs</td>
                            </tr>
                            
                            <tr>
                                <td>F4</td>
                                <td>Rp. 300 / pcs</td>
                                <td>Rp. 1000 / pcs</td>
                            </tr>
                        </tbody>
                    </table>
                    <span>* Harga sewaktu - waktu dapat berubah.</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-about">
    <div class="container">
        <div class="header-about">
            <h3>Print Media <span>Hadir di Indonesia</span></h3>
            <span>Solusi Cetak Tugas, Skripsi!</span>
        </div>
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Mengenal Lebih Jauh Print Media
                    </button>
                </h5>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Panduan Menggunakan Print Media
                    </button>
                </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
                </div>
            </div>
        </div>      
    </div>
</section>

<section class="footer">
    <div class="container">
        <div class="list">
            <div class="row">
                <div class="col-lg-12">
                    <ul>
                        <li class="facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
                        <li class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></li>
                        <li class="youtube"><i class="fa fa-youtube" aria-hidden="true"></i></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php $this->load->view('home/inc/footer'); ?>
    </div>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

<script>
$(document).ready(function(){
    var scroll_start = 0;
    var startchange = $('#mulai');
    var offset = startchange.offset();
    if (startchange.length){
    $(document).scroll(function() { 
        scroll_start = $(this).scrollTop();
        if(scroll_start > offset.top) {
            $(".navbar").css('background-color', '#fff');
        } 
        else {
            $('.navbar').css('background-color', 'transparent');
       }
    });
    }
});
</script>

</body>
</html>
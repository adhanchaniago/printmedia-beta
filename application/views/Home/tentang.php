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
<!-- Material Design for Bootstrap fonts and icons -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script|PT+Sans" rel="stylesheet">


</head>
<body>

<div id="navbar">
    <?php $this->load->view('home/inc/header'); ?>
</div>

<section class="section section-tentang-banner" id="mulai">
    <div class="container">
        <h4>Tentang Kami</h4>
    </div>
</section>

<section class="section section-visi-misi">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="text-center">Visi</h4>
                <p>Di awali dengan memberitahu kepada semua orang bahwa kita adalah startup karya anak bangsa Indonesia. Kami ingin meningkatkan kesejahteraan taraf hidup keluarga. Melalui teknologi kami berusaha menyebarkan dampak sosial yaitu kehidupan yang lebih baik untuk ibu rumah tangga dan keluarganya dengan meningkatkan jumlah penghasilan mereka. Karena setiap ibu rumah tangga memiliki resep makanan yang khas dan berbeda. Dengan itu kita ingin mengubah resep keluarga menjadi nilai ekonomi yang lebih.</p>
            </div>

            <div class="col-lg-6">
                <h4 class="text-center">Misi</h4>
                <ul class="list-group">
                    <li class="list-group-item">Misi 1</li>
                    <li class="list-group-item">Misi 1</li>
                    <li class="list-group-item">Misi 1</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section section-team">
    <div class="container">
        <h4>TEAM</h4>
        <div class="row">
            <div class="col-lg-3">
                <img src="<?php echo base_url('asset/home/img/avatar.png'); ?>" alt="">
                <div class="team-body">
                    <h5>Wahyu Rizky</h5>
                    <span>Penggembira</span>
                </div>
            </div>
            <div class="col-lg-3">
                <img src="<?php echo base_url('asset/home/img/avatar.png'); ?>" alt="">
                <div class="team-body">
                    <h5>Abdiel Reyhan</h5>
                    <span>Web Developer</span>
                </div>
            </div>
            <div class="col-lg-3">
                <img src="<?php echo base_url('asset/home/img/avatar.png'); ?>" alt="">
                <div class="team-body">
                    <h5>Bugi Setiawan</h5>
                    <span>Backend Developer</span>
                </div>   
            </div>
            <div class="col-lg-3">
                <img src="<?php echo base_url('asset/home/img/avatar.png'); ?>" alt="">
                <div class="team-body">
                    <h5>Ira Kusuma</h5>
                    <span>Frontend Developer</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer">
    <?php $this->load->view('home/inc/footer'); ?>
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
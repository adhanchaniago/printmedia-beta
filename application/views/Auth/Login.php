<!DOCTYPE html>
<html>
<head>
<title>Print Media | Solusi Percetakan Masa Kini</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Material Design for Bootstrap CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/home/css/bootstrap.min.css">
 <link rel="stylesheet" href="<?php echo base_url(); ?>asset/home/css/login.css"> 
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/home/css/style.css">


<!-- Material Design for Bootstrap fonts and icons -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

</head>
<body>
<div id="navbar">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url('/'); ?>">PrintMedia</a>
            <button class="navbar-toggler btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link kotak kotak-biru" href="#">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link kotak kotak-hijau" href="#">Daftar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<section class="section section-intro" id="mulai">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="intro-kiri" style="padding-top:5px">
                    <h2>PrintMedia</h2>
                   <form action="" style="border:1px solid #ccc">
                        <div class="containerform">
                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" name="email" required>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>

                            <label>
                            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                            </label>

                            <div class="clearfix">
                                <button type="submit" class="signupbtn">Sign Up</button>
                                <button type="button" class="cancelbtn">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?php echo base_url('asset/home/img/intro-foto.png'); ?>" alt="" class="img-fluid">
            </div>
        </div>
    </div> 


<section class="footer">
    <div class="container">
        <div class="kelebihan">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo base_url('asset/home/img/aman.png'); ?>" alt="" width="75" height="75">
                    <h4>Aman</h4>
                </div>

                <div class="col-md-4">
                    <img src="<?php echo base_url('asset/home/img/customer.png'); ?>" alt="" width="75" height="75">
                    <h4>24/7 Support</h4>
                </div>

                <div class="col-md-4">
                    <img src="<?php echo base_url('asset/home/img/pembayaran.png'); ?>" alt="" width="75" height="75">
                    <h4>Berbagai Pembayaran</h4>
                </div>
            </div>
        </div>
        <div class="about">
            <div class="row">
                <div class="col-md-3">
                    logo
                </div>
                <div class="col-md-3">
                    Perusahaan
                </div>
                <div class="col-md-3">
                    Bantuan
                </div>
                <div class="col-md-3">
                    Social Media
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container-fluid">
        <p>© 2018 - PT Print Media</p>
        </div>
    </div>
</section>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"  crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"  crossorigin="anonymous"></script>
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
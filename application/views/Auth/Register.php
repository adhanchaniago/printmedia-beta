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
    <?php $this->load->view('auth/header'); ?>
</div>

<section class="section section-intro" id="mulai">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="intro-kiri" style="padding-top:5px">
                    <!-- <h2>PrintMedia</h2> -->
                    <div class="card">
                        <?php echo form_open('auth/prosesregister', array('id' => 'commentForm')); ?>
                            <div class="containerform">
                                <div class="form-top">
                                    <h4>Daftar Sekarang</h4>
                                    <span>Sudah punya akun PrintMedia? <a href="<?php echo base_url('login'); ?>">Masuk!</a></span>
                                </div>
                                <?php        
                                if($this->session->flashdata('error'))
                                {
                                ?>
                                    <div class="alert alert-danger">
                                    <?php echo $this->session->flashdata('error'); ?>
                                    </div>
                                <?php
                                }

                                if($this->session->flashdata('success'))
                                {
                                ?>
                                    <div class="alert alert-success">
                                    <?php echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php
                                }
                                ?>
                                <div class="form-group">
                                    <label class="bmd-label-floating">Email address</label>
                                    <?php $data=array('type' => 'email', 'id' => 'email', 'name' => 'email', 'class' => 'form-control', 'value' => set_value('email') ); echo form_input($data); ?>
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    <?php echo form_error('email', '<div class="alert alert-danger">', '</div>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="bmd-label-floating">Password</label>
                                    <?php $data=array('type' => 'password', 'id' => 'password', 'name' => 'password', 'class' => 'form-control',); echo form_input($data); ?>
                                    <?php echo form_error('password', '<div class="alert alert-danger">', '</div>'); ?>
                                </div>

                                <div class="clearfix">
                                    <button type="submit" class="signupbtn">Daftar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?php echo base_url('asset/home/img/intro-foto.png'); ?>" alt="" class="img-fluid">
            </div>
        </div>
    </div> 
</section>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"  crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"  crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>asset/home/js/jquery-validate.min.js"></script>
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
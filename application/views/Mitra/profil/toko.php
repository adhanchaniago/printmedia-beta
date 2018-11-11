<!doctype html>
<head>
    <title><?php echo SITE_NAME .": ". ucfirst($this->uri->segment(1)) ." - ". ucfirst($this->uri->segment(2)) ?></title>
    <?php $this->load->view('mitra/include/head'); ?>
</head>
<body>
    <aside id="left-panel" class="left-panel">
        <?php $this->load->view('mitra/include/sidebar'); ?>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <?php $this->load->view('mitra/include/header'); ?>
        </header><!-- /header -->
        <!-- Header-->       

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title mb-3">Profil Toko</strong>
                        </div>
                        <div class="card-body">
                            <div class="mx-auto d-block">
                                <img class="rounded-circle mx-auto d-block" src="<?php echo base_url() ?>asset/mitra/images/admin.jpg" alt="Card image cap">
                                <h5 class="text-sm-center mt-2 mb-1">Nama Pemilik</h5>
                                <div class="location text-sm-center"><i class="fa fa-map-marker"></i> Semarang, Indonesia</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <!-- SCRIPT -->
    <?php $this->load->view('mitra/include/js'); ?>
    <!-- SCRIPT -->

</body>
</html>

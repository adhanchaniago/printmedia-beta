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

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <?php
                if($this->session->flashdata('berhasil')):
                    echo '<div class="col-sm-12">
                            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                            <span class="badge badge-pill badge-success">Sukses</span> Selamat Datang .'. $this->session->userdata('email') .'
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>';
                endif;
                ?>

                <!-- STATISTIK ATAS -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="clearfix">
                                <i class="fa fa-cogs bg-flat-color-5 p-3 font-2xl mr-3 float-left text-light"></i>
                                <div class="h5 text-secondary mb-0 mt-1">$4.999,50</div>
                                <div class="text-muted text-uppercase font-weight-bold font-xs small">Transaksi Hari Ini</div>
                            </div>
                            <div class="b-b-1 pt-3"></div>
                            <hr>
                            <div class="more-info pt-2" style="margin-bottom:-10px;">
                                <a class="font-weight-bold font-xs btn-block text-muted small" href="#">View More <i class="fa fa-angle-right float-right font-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--/.col-->
                
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="clearfix">
                                <i class="fa fa-cogs bg-flat-color-5 p-3 font-2xl mr-3 float-left text-light"></i>
                                <div class="h5 text-secondary mb-0 mt-1">$4.999,50</div>
                                <div class="text-muted text-uppercase font-weight-bold font-xs small">Pelanggan</div>
                            </div>
                            <div class="b-b-1 pt-3"></div>
                            <hr>
                            <div class="more-info pt-2" style="margin-bottom:-10px;">
                                <a class="font-weight-bold font-xs btn-block text-muted small" href="#">View More <i class="fa fa-angle-right float-right font-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--/.col-->
                
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="clearfix">
                                <i class="fa fa-cogs bg-flat-color-5 p-3 font-2xl mr-3 float-left text-light"></i>
                                <div class="h5 text-secondary mb-0 mt-1">$4.999,50</div>
                                <div class="text-muted text-uppercase font-weight-bold font-xs small">Pendapatan</div>
                            </div>
                            <div class="b-b-1 pt-3"></div>
                            <hr>
                            <div class="more-info pt-2" style="margin-bottom:-10px;">
                                <a class="font-weight-bold font-xs btn-block text-muted small" href="#">View More <i class="fa fa-angle-right float-right font-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--/.col-->

                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Daftar Penjualan</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                </tbody>
                            </table>
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

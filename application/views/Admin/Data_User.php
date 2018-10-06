<!DOCTYPE html>
<html>
<head>
  <!-- SRC include  -->
  <?php $this->load->view('Admin/head'); ?>
  <title>PrintMedia-Admin | Universitas</title>
 
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

 <?php $this->load->view('admin/navbar');?>

 <!--sidebar load  -->
 <?php $this->load->view('admin/sidebar');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Daftar Jurusan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin');?>">Home</a></li>
              <li class="breadcrumb-item active">Universitas</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Jurusan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama</th>
                  <th>Gender</th>
                  <th>No.HP</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1;?>
                <?php foreach ($data as $info) {?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $info['nama'];?></td>
                  <td><?php echo $info['gender'];?></td>
                  <td><?php echo $info['nohape'];?></td>
                  <td><?php echo $info['email'];?></td>
                  <td>
                    <a  class="fa fa-eye" href="#" title="Detail"></a>
                    <a  class="fa fa-times" href="#" title="Delete"></a>
                  </td>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nomor</th>
                  <th>Nama</th>
                  <th>Gender</th>
                  <th>No.HP</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('admin/footer'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- Script include  -->
<?php $this->load->view('Admin/script'); ?>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
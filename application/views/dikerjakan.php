<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!-- include head -->
<?php include('head.php');?>
  <!-- include header -->
  <?php include('header.php');?>
  <!-- end include header -->
  <aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Admin</p>
        <a href="#"><?php echo $this->session->userdata('username')?></a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MENU</li>
      <li>
        <a href="<?php echo base_url()?>Dashboard">
          <i class="fa fa-dashboard"></i><span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url()?>pengaduan">
          <i class="fa fa-phone"></i><span>Pengaduan</span>
        </a>
      </li>
      <li class="active">
        <a href="<?php echo base_url()?>dikerjakan">
          <i class="fa fa-cogs"></i><span>Di Kerjakan</span>
      </a>
      </li>
      <li>
        <li><a href="<?php echo base_url()?>selesai"><i class="fa fa-flag-checkered"></i>Selesai di Kerjakan</a></li>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Di Kerjakan
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="http://localhost/adminpmjb/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Di Kerjakan</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Pengaduan Masuk</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="datatable" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No</th>
              <th>id_pengadu</th>
              <th>Kondisi Aduan</th>
              <th>Latitude</th>
              <th>Longtitude</th>
              <th>Gambar</th>
              <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <?php
              $no=1;
              foreach ($data as $row) {
                $status = ($row->status == 0) ? '<label class="label label-warning">UNPROGRESS</label>':'<label class="label label-success">PENGERJAAN</label>';
            ?>  
                <tr>
                  <td><?php echo $no++?></td>
                  <td><?php echo $row->id_firebase?></td>
                  <td><?php echo $this->Main_model->kondisi_jalan($row->kondisi_jalan)?></td>
                  <td><?php echo $row->latitude?></td>
                  <td><?php echo $row->longtitude?></td>
                  <td><?php echo $row->img?></td>
                  <td><?php echo $status?></td>
                </tr>
            <?php } ?>          
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url();?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/bower_components/datatables/datatables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
</body>
</html>
<script>
  $( document ).ready(function() {
    $("#datatable").DataTable({
        responsive:true
    });
});
</script>

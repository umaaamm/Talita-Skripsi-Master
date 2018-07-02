<?php
include "koneksi/koneksi.php";
?>
<?php
if (!empty($_SESSION['id_admin'])){
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>website rasio keuangan | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="asset/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="asset/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="asset/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="asset/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="asset/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="asset/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="asset/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="asset/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="asset/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">ADMINISTRATOR</span>
    </a>
    <nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
          <!-- User Account: style can be found in dropdown.less -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
           <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
          <li><a href="javascript:;" data-id="" data-toggle="modal" data-target="#modal-konfirmasi-logout"><i class="fa fa"></i> Logout</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="asset/dist/img/tim1.jpg" class="img-circle" alt="User Image">
        </div>
      </div>
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i><span>DASHBOARD</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.php"><i class="fa fa-home fa-fw"></i> Home</a></li>
			     <li><a href="?f1=admin&f2=admin"><i class="fa fa-circle-o"></i> Admin</a></li>
            <li><a href="?f1=perusahaan&f2=perusahaan"><i class="fa fa-circle-o"></i> Perusahaan</a></li>
			
			     </ul>
          </li>
         
      <li class="active treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Rasio Keuangan</span>
            <span class="pull-right-container">
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </span>
          </a>
        </li>
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Likuiditas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="?f1=rasiolancar&f2=rasiolancar"><i class="fa fa-circle-o"></i>Rasio Lancar</a></li>
            <li><a href="?f1=rasiocepat&f2=rasiocepat"><i class="fa fa-circle-o"></i>Rasio Cepat</a></li>
			<li><a href="?f1=rasiokas&f2=rasiokas"><i class="fa fa-circle-o"></i>Rasio Kas</a></li>
			 </ul>
        </li>
		<li class=" treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Solvabilitas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="?f1=debtratio&f2=debtratio"><i class="fa fa-circle-o"></i>Debt To Asset Ratio</a></li>
            <li><a href="?f1=debtequity&f2=debtequity"><i class="fa fa-circle-o"></i>Debt To Equity Ratio</a></li>
			 </ul>
        </li>
		<li class=" treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Rentabilitas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="?f1=profit&f2=profit"><i class="fa fa-circle-o"></i>Profit Margin On Sales</a></li>
            <li><a href="?f1=roi&f2=roi"><i class="fa fa-circle-o"></i>Return On Investment</a></li>
			<li><a href="?f1=roe&f2=roe"><i class="fa fa-circle-o"></i>Return On Equity</a></li>
			 </ul>
        </li>
		
		<li class="active treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>LAPORAN</span>
            <span class="pull-right-container">
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </span>
          </a>
        </li>
		 <li class=" treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Likuiditas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="?f1=laporanrasiolancar&f2=rasiolancar"><i class="fa fa-circle-o"></i>Rasio Lancar</a></li>
            <li><a href="?f1=laporanrasiocepat&f2=rasiocepat"><i class="fa fa-circle-o"></i>Rasio Cepat</a></li>
			<li><a href="?f1=laporanrasiokas&f2=rasiokas"><i class="fa fa-circle-o"></i>Rasio Kas</a></li>
			 </ul>
        </li>
		<li class=" treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Solvabilitas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="?f1=laporandebtratio&f2=debtratio"><i class="fa fa-circle-o"></i>Debt To Asset Ratio</a></li>
            <li><a href="?f1=laporandebtequity&f2=debtequity"><i class="fa fa-circle-o"></i>Debt To Equity Ratio</a></li>
			 </ul>
        </li>
		<li class=" treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Rentabilitas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="?f1=laporanprofit&f2=profit"><i class="fa fa-circle-o"></i>Profit Margin On Sales</a></li>
            <li><a href="?f1=laporanroi&f2=roi"><i class="fa fa-circle-o"></i>Return On Investment</a></li>
			<li><a href="?f1=laporanroe&f2=roe"><i class="fa fa-circle-o"></i>Return On Equity</a></li>
			 </ul>
        </li>
      
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
	<?
    if(empty($_GET['f1']) || empty($_GET['f2']))
	{
		include "home.php";
	}
	else
	{
		include "konten/".$_GET['f1']."/".$_GET['f2'].".php";
	}
	?>  
	

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>

<div id="modal-konfirmasi-logout" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                 
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Konfirmasi</h4>
                </div>
                <div class="modal-body btn-info">
                    Apakah Anda yakin ingin keluar ?
                </div>
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-danger" id="true-data-keluar">Ya</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                </div>
                 
                </div>
            </div>
        </div>





  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2018 <a href="https://adminlte.io">Talitha Dwi Aditya</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="asset/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="asset/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="asset/bower_components/raphael/raphael.min.js"></script>
<script src="asset/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="asset/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="asset/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="asset/bower_components/moment/min/moment.min.js"></script>
<script src="asset/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="asset/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="asset/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="asset/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="asset/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="asset/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="asset/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="asset/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="asset/bower_components/Chart.js/Chart.js"></script>
<script src="asset/bower_components/raphael/raphael.min.js"></script>


<script src="assets/js/highcharts.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable()
    $('#example3').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<?php
include "koneksi/koneksi.php";
$sql   = "SELECT kode  FROM rasiolancar WHERE tahun='2014' ";
$query = mysqli_query( $koneksi, $sql )or die(mysqli_error());

$sql1   = "SELECT kode  FROM rasiolancar WHERE tahun='2015' ";
$query1 = mysqli_query( $koneksi, $sql1 )or die(mysqli_error());

$sql2   = "SELECT kode  FROM rasiolancar WHERE tahun='2016' ";
$query2 = mysqli_query( $koneksi, $sql2 )or die(mysqli_error());

?>


<script>
  var chartrasiolancar1;
  var chartrasiolancar2;
  var chartrasiolancar3;
    $(document).ready(function() {
          chartnpf1 = new Highcharts.Chart({
             chart: {
                renderTo: 'mygraphrasiolancar',
                type: 'column'
             },   
             title: {
                text: 'Rasio Lancar Tahun 2014'
             },
             xAxis: {
                categories: ['Rasio Lancar']
             },
             yAxis: {
                title: {
                   text: 'Hasil Rasio Lancar'
                }
             },
                  series:             
                [
                    <?php 
                    
                    while( $temp = mysqli_fetch_array( $query ) )
                    {
                        $trendbrowser=$temp['kode'];                     
                        $sql_total   = "SELECT hasil FROM rasiolancar WHERE kode='$trendbrowser' and tahun='2014' ";        
                        $query_total = mysqli_query($koneksi,$sql_total ) or die(mysql_error());
                        while( $data = mysqli_fetch_array( $query_total ) )
                        {
                            $total = $data['hasil'];                 
                        }             
                    ?>
                        {
                          name: '<?php echo $trendbrowser; ?>',
                          data: [<?php echo $total; ?>]
                        },
                        <?php 
                    }   ?>
                    ]
          });
       });  

    $(document).ready(function() {
          chartnpf2 = new Highcharts.Chart({
             chart: {
                renderTo: 'mygraphrasiolancar1',
                type: 'column'
             },   
             title: {
                text: 'Rasio Lancar Tahun 2015'
             },
             xAxis: {
                categories: ['Rasio Lancar']
             },
             yAxis: {
                title: {
                   text: 'Hasil Rasio Lancar'
                }
             },
                  series:             
                [
                    <?php 
                    
                    while( $temp = mysqli_fetch_array( $query1 ) )
                    {
                        $trendbrowser1=$temp['kode'];                     
                        $sql_total1   = "SELECT hasil FROM rasiolancar WHERE kode='$trendbrowser1' and tahun='2015' ";        
                        $query_total1 = mysqli_query($koneksi,$sql_total1 ) or die(mysql_error());
                        while( $data = mysqli_fetch_array( $query_total1 ) )
                        {
                            $total1 = $data['hasil'];                 
                        }             
                    ?>
                        {
                          name: '<?php echo $trendbrowser1; ?>',
                          data: [<?php echo $total1; ?>]
                        },
                        <?php 
                    }   ?>
                    ]
          });
       });

    $(document).ready(function() {
          chartnpf3 = new Highcharts.Chart({
             chart: {
                renderTo: 'mygraphrasiolancar2',
                type: 'column'
             },   
             title: {
                text: 'Rasio Lancar Tahun 2016'
             },
             xAxis: {
                categories: ['Rasio Lancar']
             },
             yAxis: {
                title: {
                   text: 'Hasil Rasio Lancar'
                }
             },
                  series:             
                [
                    <?php 
                    
                    while( $temp = mysqli_fetch_array( $query2 ) )
                    {
                        $trendbrowser2=$temp['kode'];                     
                        $sql_total2   = "SELECT hasil FROM rasiolancar WHERE kode='$trendbrowser2' and tahun='2016' ";        
                        $query_total2 = mysqli_query($koneksi,$sql_total2 ) or die(mysql_error());
                        while( $data = mysqli_fetch_array( $query_total2 ) )
                        {
                            $total2 = $data['hasil'];                 
                        }             
                    ?>
                        {
                          name: '<?php echo $trendbrowser2; ?>',
                          data: [<?php echo $total2; ?>]
                        },
                        <?php 
                    }   ?>
                    ]
          });
       });
<?php
include "koneksi/koneksi.php";
$sql   = "SELECT kode  FROM rasiocepat WHERE tahun='2014' ";
$query = mysqli_query( $koneksi, $sql )or die(mysqli_error());

$sql1   = "SELECT kode  FROM rasiocepat WHERE tahun='2015' ";
$query1 = mysqli_query( $koneksi, $sql1 )or die(mysqli_error());

$sql2   = "SELECT kode  FROM rasiocepat WHERE tahun='2016' ";
$query2 = mysqli_query( $koneksi, $sql2 )or die(mysqli_error());

?>


<script>
  var chartrasiocepat1;
  var chartrasiocepat2;
  var chartrasiocepat3;
    $(document).ready(function() {
          chartnpf1 = new Highcharts.Chart({
             chart: {
                renderTo: 'mygraphrasiocepat',
                type: 'column'
             },   
             title: {
                text: 'Rasio Cepat Tahun 2014'
             },
             xAxis: {
                categories: ['Rasio Cepat']
             },
             yAxis: {
                title: {
                   text: 'Hasil Rasio Cepat'
                }
             },
                  series:             
                [
                    <?php 
                    
                    while( $temp = mysqli_fetch_array( $query ) )
                    {
                        $trendbrowser=$temp['kode'];                     
                        $sql_total   = "SELECT hasil FROM rasiocepat WHERE kode='$trendbrowser' and tahun='2014' ";        
                        $query_total = mysqli_query($koneksi,$sql_total ) or die(mysql_error());
                        while( $data = mysqli_fetch_array( $query_total ) )
                        {
                            $total = $data['hasil'];                 
                        }             
                    ?>
                        {
                          name: '<?php echo $trendbrowser; ?>',
                          data: [<?php echo $total; ?>]
                        },
                        <?php 
                    }   ?>
                    ]
          });
       });  

    $(document).ready(function() {
          chartnpf2 = new Highcharts.Chart({
             chart: {
                renderTo: 'mygraphrasiocepat1',
                type: 'column'
             },   
             title: {
                text: 'Rasio Cepat Tahun 2015'
             },
             xAxis: {
                categories: ['Rasio Cepat']
             },
             yAxis: {
                title: {
                   text: 'Hasil Rasio Cepat'
                }
             },
                  series:             
                [
                    <?php 
                    
                    while( $temp = mysqli_fetch_array( $query1 ) )
                    {
                        $trendbrowser1=$temp['kode'];                     
                        $sql_total1   = "SELECT hasil FROM rasiocepat WHERE kode='$trendbrowser1' and tahun='2015' ";        
                        $query_total1 = mysqli_query($koneksi,$sql_total1 ) or die(mysql_error());
                        while( $data = mysqli_fetch_array( $query_total1 ) )
                        {
                            $total1 = $data['hasil'];                 
                        }             
                    ?>
                        {
                          name: '<?php echo $trendbrowser1; ?>',
                          data: [<?php echo $total1; ?>]
                        },
                        <?php 
                    }   ?>
                    ]
          });
       });

    $(document).ready(function() {
          chartnpf3 = new Highcharts.Chart({
             chart: {
                renderTo: 'mygraphrasiocepat2',
                type: 'column'
             },   
             title: {
                text: 'Rasio Cepat Tahun 2016'
             },
             xAxis: {
                categories: ['Rasio Cepat']
             },
             yAxis: {
                title: {
                   text: 'Hasil Rasio Cepat'
                }
             },
                  series:             
                [
                    <?php 
                    
                    while( $temp = mysqli_fetch_array( $query2 ) )
                    {
                        $trendbrowser2=$temp['kode'];                     
                        $sql_total2   = "SELECT hasil FROM rasiocepat WHERE kode='$trendbrowser2' and tahun='2016' ";        
                        $query_total2 = mysqli_query($koneksi,$sql_total2 ) or die(mysql_error());
                        while( $data = mysqli_fetch_array( $query_total2 ) )
                        {
                            $total2 = $data['hasil'];                 
                        }             
                    ?>
                        {
                          name: '<?php echo $trendbrowser2; ?>',
                          data: [<?php echo $total2; ?>]
                        },
                        <?php 
                    }   ?>
                    ]
          });
       });
<?php
include "koneksi/koneksi.php";
$sql   = "SELECT kode  FROM rasiokas WHERE tahun='2014' ";
$query = mysqli_query( $koneksi, $sql )or die(mysqli_error());

$sql1   = "SELECT kode  FROM rasiokas WHERE tahun='2015' ";
$query1 = mysqli_query( $koneksi, $sql1 )or die(mysqli_error());

$sql2   = "SELECT kode  FROM rasiokas WHERE tahun='2016' ";
$query2 = mysqli_query( $koneksi, $sql2 )or die(mysqli_error());

?>


<script>
  var chartrasiokas1;
  var chartrasiokas2;
  var chartrasiokas3;
    $(document).ready(function() {
          chartnpf1 = new Highcharts.Chart({
             chart: {
                renderTo: 'mygraphrasiokas',
                type: 'column'
             },   
             title: {
                text: 'Rasio Kas Tahun 2014'
             },
             xAxis: {
                categories: ['Rasio Kas']
             },
             yAxis: {
                title: {
                   text: 'Hasil Rasio Kas'
                }
             },
                  series:             
                [
                    <?php 
                    
                    while( $temp = mysqli_fetch_array( $query ) )
                    {
                        $trendbrowser=$temp['kode'];                     
                        $sql_total   = "SELECT hasil FROM rasiokas WHERE kode='$trendbrowser' and tahun='2014' ";        
                        $query_total = mysqli_query($koneksi,$sql_total ) or die(mysql_error());
                        while( $data = mysqli_fetch_array( $query_total ) )
                        {
                            $total = $data['hasil'];                 
                        }             
                    ?>
                        {
                          name: '<?php echo $trendbrowser; ?>',
                          data: [<?php echo $total; ?>]
                        },
                        <?php 
                    }   ?>
                    ]
          });
       });  

    $(document).ready(function() {
          chartnpf2 = new Highcharts.Chart({
             chart: {
                renderTo: 'mygraphrasiokas1',
                type: 'column'
             },   
             title: {
                text: 'Rasio Kas Tahun 2015'
             },
             xAxis: {
                categories: ['Rasio Kas']
             },
             yAxis: {
                title: {
                   text: 'Hasil Rasio Kas'
                }
             },
                  series:             
                [
                    <?php 
                    
                    while( $temp = mysqli_fetch_array( $query1 ) )
                    {
                        $trendbrowser1=$temp['kode'];                     
                        $sql_total1   = "SELECT hasil FROM rasiokas WHERE kode='$trendbrowser1' and tahun='2015' ";        
                        $query_total1 = mysqli_query($koneksi,$sql_total1 ) or die(mysql_error());
                        while( $data = mysqli_fetch_array( $query_total1 ) )
                        {
                            $total1 = $data['hasil'];                 
                        }             
                    ?>
                        {
                          name: '<?php echo $trendbrowser1; ?>',
                          data: [<?php echo $total1; ?>]
                        },
                        <?php 
                    }   ?>
                    ]
          });
       });

    $(document).ready(function() {
          chartnpf3 = new Highcharts.Chart({
             chart: {
                renderTo: 'mygraphrasiokas2',
                type: 'column'
             },   
             title: {
                text: 'Rasio Kas Tahun 2016'
             },
             xAxis: {
                categories: ['Rasio Kas']
             },
             yAxis: {
                title: {
                   text: 'Hasil Rasio Kas'
                }
             },
                  series:             
                [
                    <?php 
                    
                    while( $temp = mysqli_fetch_array( $query2 ) )
                    {
                        $trendbrowser2=$temp['kode'];                     
                        $sql_total2   = "SELECT hasil FROM rasiokas WHERE kode='$trendbrowser2' and tahun='2016' ";        
                        $query_total2 = mysqli_query($koneksi,$sql_total2 ) or die(mysql_error());
                        while( $data = mysqli_fetch_array( $query_total2 ) )
                        {
                            $total2 = $data['hasil'];                 
                        }             
                    ?>
                        {
                          name: '<?php echo $trendbrowser2; ?>',
                          data: [<?php echo $total2; ?>]
                        },
                        <?php 
                    }   ?>
                    ]
          });
       });
<?php
include "koneksi/koneksi.php";
$sql   = "SELECT kode  FROM debtratio WHERE tahun='2014' ";
$query = mysqli_query( $koneksi, $sql )or die(mysqli_error());

$sql1   = "SELECT kode  FROM debtratio WHERE tahun='2015' ";
$query1 = mysqli_query( $koneksi, $sql1 )or die(mysqli_error());

$sql2   = "SELECT kode  FROM debtratio WHERE tahun='2016' ";
$query2 = mysqli_query( $koneksi, $sql2 )or die(mysqli_error());

?>


<script>
  var chartdebtratio1;
  var chartdebtratio2;
  var chartdebtratio3;
    $(document).ready(function() {
          chartnpf1 = new Highcharts.Chart({
             chart: {
                renderTo: 'mygraphdebtratio',
                type: 'column'
             },   
             title: {
                text: 'Debt Asset to Ratio Tahun 2014'
             },
             xAxis: {
                categories: ['Debt Asset to Ratio']
             },
             yAxis: {
                title: {
                   text: 'Hasil Debt Asset to Ratio'
                }
             },
                  series:             
                [
                    <?php 
                    
                    while( $temp = mysqli_fetch_array( $query ) )
                    {
                        $trendbrowser=$temp['kode'];                     
                        $sql_total   = "SELECT hasil FROM debtratio WHERE kode='$trendbrowser' and tahun='2014' ";        
                        $query_total = mysqli_query($koneksi,$sql_total ) or die(mysql_error());
                        while( $data = mysqli_fetch_array( $query_total ) )
                        {
                            $total = $data['hasil'];                 
                        }             
                    ?>
                        {
                          name: '<?php echo $trendbrowser; ?>',
                          data: [<?php echo $total; ?>]
                        },
                        <?php 
                    }   ?>
                    ]
          });
       });  

    $(document).ready(function() {
          chartnpf2 = new Highcharts.Chart({
             chart: {
                renderTo: 'mygraphdebtratio1',
                type: 'column'
             },   
             title: {
                text: 'Debt Asset to Ratio Tahun 2015'
             },
             xAxis: {
                categories: ['Debt Asset to Ratio']
             },
             yAxis: {
                title: {
                   text: 'Hasil Debt Asset to Ratio'
                }
             },
                  series:             
                [
                    <?php 
                    
                    while( $temp = mysqli_fetch_array( $query1 ) )
                    {
                        $trendbrowser1=$temp['kode'];                     
                        $sql_total1   = "SELECT hasil FROM debtratio WHERE kode='$trendbrowser1' and tahun='2015' ";        
                        $query_total1 = mysqli_query($koneksi,$sql_total1 ) or die(mysql_error());
                        while( $data = mysqli_fetch_array( $query_total1 ) )
                        {
                            $total1 = $data['hasil'];                 
                        }             
                    ?>
                        {
                          name: '<?php echo $trendbrowser1; ?>',
                          data: [<?php echo $total1; ?>]
                        },
                        <?php 
                    }   ?>
                    ]
          });
       });

    $(document).ready(function() {
          chartnpf3 = new Highcharts.Chart({
             chart: {
                renderTo: 'mygraphdebtratio2',
                type: 'column'
             },   
             title: {
                text: 'Debt Asset to Ratio Tahun 2016'
             },
             xAxis: {
                categories: ['Debt Asset to Ratio']
             },
             yAxis: {
                title: {
                   text: 'Hasil Debt Asset to Ratio'
                }
             },
                  series:             
                [
                    <?php 
                    
                    while( $temp = mysqli_fetch_array( $query2 ) )
                    {
                        $trendbrowser2=$temp['kode'];                     
                        $sql_total2   = "SELECT hasil FROM debtratio WHERE kode='$trendbrowser2' and tahun='2016' ";        
                        $query_total2 = mysqli_query($koneksi,$sql_total2 ) or die(mysql_error());
                        while( $data = mysqli_fetch_array( $query_total2 ) )
                        {
                            $total2 = $data['hasil'];                 
                        }             
                    ?>
                        {
                          name: '<?php echo $trendbrowser2; ?>',
                          data: [<?php echo $total2; ?>]
                        },
                        <?php 
                    }   ?>
                    ]
          });
       });
    <?php
include "koneksi/koneksi.php";
$sql   = "SELECT kode  FROM debtequity WHERE tahun='2014' ";
$query = mysqli_query( $koneksi, $sql )or die(mysqli_error());

$sql1   = "SELECT kode  FROM debtequity WHERE tahun='2015' ";
$query1 = mysqli_query( $koneksi, $sql1 )or die(mysqli_error());

$sql2   = "SELECT kode  FROM debtequity WHERE tahun='2016' ";
$query2 = mysqli_query( $koneksi, $sql2 )or die(mysqli_error());

?>


<script>
  var chartdebtequity1;
  var chartdebtequity2;
  var chartdebtequity3;
    $(document).ready(function() {
          chartnpf1 = new Highcharts.Chart({
             chart: {
                renderTo: 'mygraphdebtequity',
                type: 'column'
             },   
             title: {
                text: 'Debt Equity to Ratio Tahun 2014'
             },
             xAxis: {
                categories: ['Debt Equity to Ratio']
             },
             yAxis: {
                title: {
                   text: 'Hasil Debt Equity to Ratio'
                }
             },
                  series:             
                [
                    <?php 
                    
                    while( $temp = mysqli_fetch_array( $query ) )
                    {
                        $trendbrowser=$temp['kode'];                     
                        $sql_total   = "SELECT hasil FROM debtequity WHERE kode='$trendbrowser' and tahun='2014' ";        
                        $query_total = mysqli_query($koneksi,$sql_total ) or die(mysql_error());
                        while( $data = mysqli_fetch_array( $query_total ) )
                        {
                            $total = $data['hasil'];                 
                        }             
                    ?>
                        {
                          name: '<?php echo $trendbrowser; ?>',
                          data: [<?php echo $total; ?>]
                        },
                        <?php 
                    }   ?>
                    ]
          });
       });  

    $(document).ready(function() {
          chartnpf2 = new Highcharts.Chart({
             chart: {
                renderTo: 'mygraphdebtequity1',
                type: 'column'
             },   
             title: {
                text: 'Debt Equity to Ratio Tahun 2015'
             },
             xAxis: {
                categories: ['Debt Equity to Ratio']
             },
             yAxis: {
                title: {
                   text: 'Hasil Debt Equity to Ratio'
                }
             },
                  series:             
                [
                    <?php 
                    
                    while( $temp = mysqli_fetch_array( $query1 ) )
                    {
                        $trendbrowser1=$temp['kode'];                     
                        $sql_total1   = "SELECT hasil FROM debtequity WHERE kode='$trendbrowser1' and tahun='2015' ";        
                        $query_total1 = mysqli_query($koneksi,$sql_total1 ) or die(mysql_error());
                        while( $data = mysqli_fetch_array( $query_total1 ) )
                        {
                            $total1 = $data['hasil'];                 
                        }             
                    ?>
                        {
                          name: '<?php echo $trendbrowser1; ?>',
                          data: [<?php echo $total1; ?>]
                        },
                        <?php 
                    }   ?>
                    ]
          });
       });

    $(document).ready(function() {
          chartnpf3 = new Highcharts.Chart({
             chart: {
                renderTo: 'mygraphdebtequity2',
                type: 'column'
             },   
             title: {
                text: 'Debt Equity to Ratio Tahun 2016'
             },
             xAxis: {
                categories: ['Debt Equity to Ratio']
             },
             yAxis: {
                title: {
                   text: 'Hasil Debt Equity to Ratio'
                }
             },
                  series:             
                [
                    <?php 
                    
                    while( $temp = mysqli_fetch_array( $query2 ) )
                    {
                        $trendbrowser2=$temp['kode'];                     
                        $sql_total2   = "SELECT hasil FROM debtequity WHERE kode='$trendbrowser2' and tahun='2016' ";        
                        $query_total2 = mysqli_query($koneksi,$sql_total2 ) or die(mysql_error());
                        while( $data = mysqli_fetch_array( $query_total2 ) )
                        {
                            $total2 = $data['hasil'];                 
                        }             
                    ?>
                        {
                          name: '<?php echo $trendbrowser2; ?>',
                          data: [<?php echo $total2; ?>]
                        },
                        <?php 
                    }   ?>
                    ]
          });
       });
<?php
include "koneksi/koneksi.php";
$sql   = "SELECT kode  FROM profit WHERE tahun='2014' ";
$query = mysqli_query( $koneksi, $sql )or die(mysqli_error());

$sql1   = "SELECT kode  FROM profit WHERE tahun='2015' ";
$query1 = mysqli_query( $koneksi, $sql1 )or die(mysqli_error());

$sql2   = "SELECT kode  FROM profit WHERE tahun='2016' ";
$query2 = mysqli_query( $koneksi, $sql2 )or die(mysqli_error());

?>


<script>
  var chartProfit1;
  var chartProfit2;
  var chartProfit3;
    $(document).ready(function() {
          chartnpf1 = new Highcharts.Chart({
             chart: {
                renderTo: 'mygraphProfit',
                type: 'column'
             },   
             title: {
                text: 'Profit Margin On Sales Tahun 2014'
             },
             xAxis: {
                categories: ['Profit Margin On Sales']
             },
             yAxis: {
                title: {
                   text: 'Hasil Profit Margin On Sales'
                }
             },
                  series:             
                [
                    <?php 
                    
                    while( $temp = mysqli_fetch_array( $query ) )
                    {
                        $trendbrowser=$temp['kode'];                     
                        $sql_total   = "SELECT hasil FROM profit WHERE kode='$trendbrowser' and tahun='2014' ";        
                        $query_total = mysqli_query($koneksi,$sql_total ) or die(mysql_error());
                        while( $data = mysqli_fetch_array( $query_total ) )
                        {
                            $total = $data['hasil'];                 
                        }             
                    ?>
                        {
                          name: '<?php echo $trendbrowser; ?>',
                          data: [<?php echo $total; ?>]
                        },
                        <?php 
                    }   ?>
                    ]
          });
       });  

    $(document).ready(function() {
          chartnpf2 = new Highcharts.Chart({
             chart: {
                renderTo: 'mygraphProfit1',
                type: 'column'
             },   
             title: {
                text: 'Profit Margin On Sales Tahun 2015'
             },
             xAxis: {
                categories: ['Profit Margin On Sales']
             },
             yAxis: {
                title: {
                   text: 'Hasil Profit Margin On Sales'
                }
             },
                  series:             
                [
                    <?php 
                    
                    while( $temp = mysqli_fetch_array( $query1 ) )
                    {
                        $trendbrowser1=$temp['kode'];                     
                        $sql_total1   = "SELECT hasil FROM profit WHERE kode='$trendbrowser1' and tahun='2015' ";        
                        $query_total1 = mysqli_query($koneksi,$sql_total1 ) or die(mysql_error());
                        while( $data = mysqli_fetch_array( $query_total1 ) )
                        {
                            $total1 = $data['hasil'];                 
                        }             
                    ?>
                        {
                          name: '<?php echo $trendbrowser1; ?>',
                          data: [<?php echo $total1; ?>]
                        },
                        <?php 
                    }   ?>
                    ]
          });
       });

    $(document).ready(function() {
          chartnpf3 = new Highcharts.Chart({
             chart: {
                renderTo: 'mygraphProfit2',
                type: 'column'
             },   
             title: {
                text: 'Profit Margin On Sales Tahun 2016'
             },
             xAxis: {
                categories: ['Profit Margin On Sales']
             },
             yAxis: {
                title: {
                   text: 'Hasil Profit Margin On Sales'
                }
             },
                  series:             
                [
                    <?php 
                    
                    while( $temp = mysqli_fetch_array( $query2 ) )
                    {
                        $trendbrowser2=$temp['kode'];                     
                        $sql_total2   = "SELECT hasil FROM profit WHERE kode='$trendbrowser2' and tahun='2016' ";        
                        $query_total2 = mysqli_query($koneksi,$sql_total2 ) or die(mysql_error());
                        while( $data = mysqli_fetch_array( $query_total2 ) )
                        {
                            $total2 = $data['hasil'];                 
                        }             
                    ?>
                        {
                          name: '<?php echo $trendbrowser2; ?>',
                          data: [<?php echo $total2; ?>]
                        },
                        <?php 
                    }   ?>
                    ]
          });
       });
<?php
include "koneksi/koneksi.php";
$sql   = "SELECT kode  FROM roi WHERE tahun='2014' ";
$query = mysqli_query( $koneksi, $sql )or die(mysqli_error());

$sql1   = "SELECT kode  FROM roi WHERE tahun='2015' ";
$query1 = mysqli_query( $koneksi, $sql1 )or die(mysqli_error());

$sql2   = "SELECT kode  FROM roi WHERE tahun='2016' ";
$query2 = mysqli_query( $koneksi, $sql2 )or die(mysqli_error());

?>


<script>
  var chartroi1;
  var chartroi2;
  var chartroi3;
    $(document).ready(function() {
          chartnpf1 = new Highcharts.Chart({
             chart: {
                renderTo: 'mygraphroi',
                type: 'column'
             },   
             title: {
                text: 'Return On Investment Tahun 2014'
             },
             xAxis: {
                categories: ['Return On Investment']
             },
             yAxis: {
                title: {
                   text: 'Hasil Return On Investment'
                }
             },
                  series:             
                [
                    <?php 
                    
                    while( $temp = mysqli_fetch_array( $query ) )
                    {
                        $trendbrowser=$temp['kode'];                     
                        $sql_total   = "SELECT hasil FROM roi WHERE kode='$trendbrowser' and tahun='2014' ";        
                        $query_total = mysqli_query($koneksi,$sql_total ) or die(mysql_error());
                        while( $data = mysqli_fetch_array( $query_total ) )
                        {
                            $total = $data['hasil'];                 
                        }             
                    ?>
                        {
                          name: '<?php echo $trendbrowser; ?>',
                          data: [<?php echo $total; ?>]
                        },
                        <?php 
                    }   ?>
                    ]
          });
       });  

    $(document).ready(function() {
          chartnpf2 = new Highcharts.Chart({
             chart: {
                renderTo: 'mygraphroi1',
                type: 'column'
             },   
             title: {
                text: 'Return On Investment 2015'
             },
             xAxis: {
                categories: ['Return On Investment']
             },
             yAxis: {
                title: {
                   text: 'Hasil Return On Investment'
                }
             },
                  series:             
                [
                    <?php 
                    
                    while( $temp = mysqli_fetch_array( $query1 ) )
                    {
                        $trendbrowser1=$temp['kode'];                     
                        $sql_total1   = "SELECT hasil FROM roi WHERE kode='$trendbrowser1' and tahun='2015' ";        
                        $query_total1 = mysqli_query($koneksi,$sql_total1 ) or die(mysql_error());
                        while( $data = mysqli_fetch_array( $query_total1 ) )
                        {
                            $total1 = $data['hasil'];                 
                        }             
                    ?>
                        {
                          name: '<?php echo $trendbrowser1; ?>',
                          data: [<?php echo $total1; ?>]
                        },
                        <?php 
                    }   ?>
                    ]
          });
       });

    $(document).ready(function() {
          chartnpf3 = new Highcharts.Chart({
             chart: {
                renderTo: 'mygraphroi2',
                type: 'column'
             },   
             title: {
                text: 'Return On Investment Tahun 2016'
             },
             xAxis: {
                categories: ['Return On Investment']
             },
             yAxis: {
                title: {
                   text: 'Hasil Return On Investment'
                }
             },
                  series:             
                [
                    <?php 
                    
                    while( $temp = mysqli_fetch_array( $query2 ) )
                    {
                        $trendbrowser2=$temp['kode'];                     
                        $sql_total2   = "SELECT hasil FROM roi WHERE kode='$trendbrowser2' and tahun='2016' ";        
                        $query_total2 = mysqli_query($koneksi,$sql_total2 ) or die(mysql_error());
                        while( $data = mysqli_fetch_array( $query_total2 ) )
                        {
                            $total2 = $data['hasil'];                 
                        }             
                    ?>
                        {
                          name: '<?php echo $trendbrowser2; ?>',
                          data: [<?php echo $total2; ?>]
                        },
                        <?php 
                    }   ?>
                    ]
          });
       });
<?php
include "koneksi/koneksi.php";
$sql   = "SELECT kode  FROM roe WHERE tahun='2014' ";
$query = mysqli_query( $koneksi, $sql )or die(mysqli_error());

$sql1   = "SELECT kode  FROM roe WHERE tahun='2015' ";
$query1 = mysqli_query( $koneksi, $sql1 )or die(mysqli_error());

$sql2   = "SELECT kode  FROM roe WHERE tahun='2016' ";
$query2 = mysqli_query( $koneksi, $sql2 )or die(mysqli_error());

?>


<script>
  var chartroe1;
  var chartroe2;
  var chartroe3;
    $(document).ready(function() {
          chartnpf1 = new Highcharts.Chart({
             chart: {
                renderTo: 'mygraphroe',
                type: 'column'
             },   
             title: {
                text: 'Return On Equity Tahun 2014'
             },
             xAxis: {
                categories: ['Return On Equity']
             },
             yAxis: {
                title: {
                   text: 'Hasil Return On Equity'
                }
             },
                  series:             
                [
                    <?php 
                    
                    while( $temp = mysqli_fetch_array( $query ) )
                    {
                        $trendbrowser=$temp['kode'];                     
                        $sql_total   = "SELECT hasil FROM roe WHERE kode='$trendbrowser' and tahun='2014' ";        
                        $query_total = mysqli_query($koneksi,$sql_total ) or die(mysql_error());
                        while( $data = mysqli_fetch_array( $query_total ) )
                        {
                            $total = $data['hasil'];                 
                        }             
                    ?>
                        {
                          name: '<?php echo $trendbrowser; ?>',
                          data: [<?php echo $total; ?>]
                        },
                        <?php 
                    }   ?>
                    ]
          });
       });  

    $(document).ready(function() {
          chartnpf2 = new Highcharts.Chart({
             chart: {
                renderTo: 'mygraphroe1',
                type: 'column'
             },   
             title: {
                text: 'Return On Equity 2015'
             },
             xAxis: {
                categories: ['Return On Equity']
             },
             yAxis: {
                title: {
                   text: 'Hasil Return On Equity'
                }
             },
                  series:             
                [
                    <?php 
                    
                    while( $temp = mysqli_fetch_array( $query1 ) )
                    {
                        $trendbrowser1=$temp['kode'];                     
                        $sql_total1   = "SELECT hasil FROM roe WHERE kode='$trendbrowser1' and tahun='2015' ";        
                        $query_total1 = mysqli_query($koneksi,$sql_total1 ) or die(mysql_error());
                        while( $data = mysqli_fetch_array( $query_total1 ) )
                        {
                            $total1 = $data['hasil'];                 
                        }             
                    ?>
                        {
                          name: '<?php echo $trendbrowser1; ?>',
                          data: [<?php echo $total1; ?>]
                        },
                        <?php 
                    }   ?>
                    ]
          });
       });

    $(document).ready(function() {
          chartnpf3 = new Highcharts.Chart({
             chart: {
                renderTo: 'mygraphroi2',
                type: 'column'
             },   
             title: {
                text: 'Return On Equity Tahun 2016'
             },
             xAxis: {
                categories: ['Return On Equity']
             },
             yAxis: {
                title: {
                   text: 'Hasil Return On Equity'
                }
             },
                  series:             
                [
                    <?php 
                    
                    while( $temp = mysqli_fetch_array( $query2 ) )
                    {
                        $trendbrowser2=$temp['kode'];                     
                        $sql_total2   = "SELECT hasil FROM roe WHERE kode='$trendbrowser2' and tahun='2016' ";        
                        $query_total2 = mysqli_query($koneksi,$sql_total2 ) or die(mysql_error());
                        while( $data = mysqli_fetch_array( $query_total2 ) )
                        {
                            $total2 = $data['hasil'];                 
                        }             
                    ?>
                        {
                          name: '<?php echo $trendbrowser2; ?>',
                          data: [<?php echo $total2; ?>]
                        },
                        <?php 
                    }   ?>
                    ]
          });
       });

</script>
   
<script src="asset/hapus.js"></script>
<script src="asset/logout.js"></script>

<script type="text/javascript">
function angka(e) {
  if (!/^[0-9]+$/.test(e.value)) {
    e.value = e.value.substring(0,e.value.length-1);
  }
}
</script>


</body>
</html>
<?php
}else{
    include "login.php";
}

?>
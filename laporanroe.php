<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include 'koneksi/koneksi.php';
error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
	<title>Rasio Laporan User</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Soft Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->

	<!-- <link rel="stylesheet" href="asset/bower_components/bootstrap/dist/css/bootstrap.min.css"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="asset/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="asset/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="asset/dist/css/AdminLTE.min.css"> -->
  <link rel="stylesheet" href="asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="asset/dist/css/skins/_all-skins.min.css">
  
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

	<link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
	    rel='stylesheet' type='text/css'>
</head>

<body>
	<!-- header -->
	<div class="header" id="home">
		<div class="content white agile-info">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" href="index.html">
							<h1><span class="fa fa-signal" aria-hidden="true"></span> Analisis dan Perancangan <label>Sistem Perhitungan Rasio Keuangan Berbasis Web</label></h1>
						</a>
					</div>
					<!--/.navbar-header-->

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-2" id="link-effect-2">
							<ul class="nav navbar-nav">
								<li><a href="./" class="effect-3">Home</a></li>
								<li class="dropdown">
									<a  class="dropdown-toggle effect-3" data-toggle="dropdown">Likuiditas <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="laporanrasiolancar.php">Rasio Lancar</a></li>
										<li class="divider"></li>
										<li><a href="laporanrasiocepat.php">Rasio Cepat</a></li>
										<li class="divider"></li>
										<li><a href="laporanrasiokas.php">Rasio Kas</a></li>
										<li class="divider"></li>
									</ul>
								</li>
								<li class="dropdown">
									<a  class="dropdown-toggle effect-3" data-toggle="dropdown">Solvabilitas <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="laporandebtratio.php">Debt To Asset Ratio</a></li>
										<li class="divider"></li>
										<li><a href="laporandebtequity.php">Debt To Equity Ratio</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a  class="dropdown-toggle effect-3" data-toggle="dropdown">Rentabilitas <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="laporanprofit.php">Profit Margin On Sales</a></li>
										<li class="divider"></li>
										<li><a href="laporanroi.php">Return On Investment</a></li>
										<li class="divider"></li>
										<li><a href="laporanroe.php">Return On Equity</a></li>
										<li class="divider"></li>
									</ul>
								</li>
						
							
								<!-- <li><a href="professional.html" class="effect-3">Profesionals</a></li>
								<li><a href="contact.html" class="effect-3">Contact</a></li> -->
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<!-- banner -->
	<div class="inner_page_agile">
		<h3>Laporan Return On Equity</h3>
		<p>Analisis dan Perancangan Sistem perhitungan rasio</p>

	</div>
	<!--//banner -->
	<!--/w3_short-->
	<!-- <div class="services-breadcrumb_w3layouts">
		<div class="inner_breadcrumb">

			<ul class="short_w3ls"_w3ls>
				<li><a href="index.html">Home</a><span>|</span></li>
				<li>Jobs</li>
			</ul>
		</div>
	</div> -->
	<!--//w3_short-->
	<!-- /inner_content -->
	<div class="inner_content_info_agileits" style="background-color: #94ecff;"> 
		<div class="container" >
			<!-- <div class="tittle_head_w3ls">
				<h3 class="tittle">Available Jobs </h3>
			</div> -->
			<div class="inner_sec_grids_info_w3ls" >
				<div class="col-md-12 job_info_left">
					<div class="but_list">
						<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
							<ul id="myTab" class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="./" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Laporan</a></li>
								
							</ul>
							<a href="http://www.idx.co.id/perusahaan-tercatat/laporan-keuangan-dan-tahunan/">Sumber Laporan Keuangan</a>
							<br>
							<br>
<?php
if(isset($_POST['filter'])){
	$tahun=$_POST['tahun'];
	if ($tahun == 'semua' ) {
		$query=$koneksi->query("select perusahaan.nama,roe.* from roe,perusahaan where perusahaan.kode = roe.kode");
	}else{
		$query=$koneksi->query("select perusahaan.nama,roe.* from roe,perusahaan where perusahaan.kode = roe.kode and tahun='".$tahun."' order by hasil DESC");
		$b=a;
	}
	
}else{
	$query=$koneksi->query("select perusahaan.nama,roe.* from roe,perusahaan where perusahaan.kode = roe.kode");
}
?>

<div class="row">
		  
		   <form role="form" action="" method="post">
		  	<div class="col-md-3">
		  		 <div class="form-group">
                  <label>Tahun</label>
		  			<select class="form-control" name="tahun" placeholder="Enter perusahaan">
		  			<option value="semua">Semua</option>
					<option value="2014">2014</option>
					<option value="2015">2015</option>
					<option value="2016">2016</option>
				</select>
				<br>
				<button type="submit" name="filter" class="btn btn-primary">Filter</button>
		  		</div>

		  </div>
		  
		</form>
			<div class="col-md-12">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Return on Equity</h3>
							</div>
							<div class="box-body">
							<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
								<th>No</th>
								<th>Perusahaan</th>
								<th>Tahun</th>
								<th>EAIT</th>
								<th>Total Ekuitas</th>
								<th>Hasil</th>
								<th>Tingkat</th>
					
								</tr>
							</thead>
							<?php
								while ($tampil=$query->fetch_assoc())
								{ $a++;
										$hasil_rupiah="Rp  ".number_format($tampil['EAIT'],2,',','.');
										$hasil="Rp  ".number_format($tampil['total_ekuitas'],2,',','.');
								?>
								<tr>
								<td><?=$a?></td>
								<td><?=$tampil['nama']?></td>
								<td><?=$tampil['tahun']?></td>
								<td align="right"><?=$hasil_rupiah?></td>
								<td align="right"><?=$hasil?></td>
								<td><?=$tampil['hasil']?></td>
								<td><?=$tampil['tingkat']?></td>
								
								</tr>
							
								<?php } ?>
								</tbody>
								</table>
								
						</div>
						</div>
						</div>
<?php

if (isset($a)) {
if ($b=='a') {
	
echo '<div class="col-md-12">
				
	<div class="box box-primary">
	<div class="box-header with-border">
	<h3 class="box-title">Deskripsi Return On Equity </h3>

	</div>
	<div class="box-body">
	<div style="text-align: justify;">
	<li><span class="fa fa-" aria-hidden="true"></span><b>Return On Equity memiliki standar industri sebesar 40% jika hasil menunjukkan angka diatas 40% maka perusahaan dalam keadaan baik karena menunjukkan efisiensi penggunaan modal sendiri</b></li>
	<li><span class="fa fa-" aria-hidden="true"></span><b>Return On Equity memiliki standar industri sebesar 40% jika hasil menunjukkan angka dibawah 40% maka posisi peilik perusahaan kurang baik.</b></li>
	</div>
	</div>
	</div>
	</div>
	';
}
}
?>
<?php
	$querytabel=$koneksi->query("select * from return_equity");
?>
  <div class="col-md-6">
  <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Tabel Hasil</h3>
            </div>
            <div class="box-body chart-responsive">
            <div class="box-body">
							<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
								<th rowspan="2" style="text-align:center;">No</th>
								<th rowspan="2" style="text-align:center;">Perusahaan</th>
								<th colspan="3" style="text-align:center;">Tahun</th>
								</tr>
								<tr>
							    <td align="center">2014</td>
							    <td align="center">2015</td>
							    <td align="center">2016</td>
							  	</tr>
							</thead>
							<?php
								while ($tampil=$querytabel->fetch_assoc())
								{ $b++;
								?>
								<tr>
								<td><?=$b?></td>
								<td><?=$tampil['pt']?></td>
								<td><?=$tampil['2014']?></td>
								<td><?=$tampil['2015']?></td>
								<td><?=$tampil['2016']?></td>
								</tr>
								<?php } ?>
								</tbody>
								</table>
								
						</div>
            <!-- /.box-body -->
        </div>
          </div>
      </div>

<div class="col-md-6">
  <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Line Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <canvas id="rasio" width="100" height="100"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
      </div>

						
						</div>
						</div>
					</div>
					<!-- </div> -->
				</div>
			</div>
			
	</div>
	<!-- //inner_content -->
	<!-- footer -->
	<br>
	<br>
	
	<div class="footer_w3ls">
		<div class="container">
			<div class="footer_bottom">
				<div class="col-md-9 footer_bottom_grid">
					<div class="footer_bottom1">
						<a href="index.html">
							<h2><span class="fa fa-signal" aria-hidden="true"></span> Rasio <label>Keuangan</label></h2>
						</a>
						<p>© 2018 Talitha Dwi Aditya. All rights reserved</a></p>
					</div>
				</div>
				<div class="col-md-3 footer_bottom_grid">
					<h6>Follow Us</h6>
					<div class="social">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
	</div>
	<!-- //footer -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
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
<script src="js/Chart.js"></script>
<script src="asset/bower_components/raphael/raphael.min.js"></script>
</body>

</html>
<?php
$JPFA2014 = mysqli_query( $koneksi,"SELECT kode,hasil from roe where kode='JPFA' and tahun='2014' ")or die(mysqli_error());
$JPFA2015 = mysqli_query( $koneksi,"SELECT kode,hasil from roe where kode='JPFA' and tahun='2015' ")or die(mysqli_error());
$JPFA2016 = mysqli_query( $koneksi,"SELECT kode,hasil from roe where kode='JPFA' and tahun='2016' ")or die(mysqli_error());
//SIPD
$SIPD2014 = mysqli_query( $koneksi,"SELECT kode,hasil from roe where kode='SIPD' and tahun='2014' ")or die(mysqli_error());
$SIPD2015 = mysqli_query( $koneksi,"SELECT kode,hasil from roe where kode='SIPD' and tahun='2015' ")or die(mysqli_error());
$SIPD2016 = mysqli_query( $koneksi,"SELECT kode,hasil from roe where kode='SIPD' and tahun='2016' ")or die(mysqli_error());
//MAIN
$MAIN2014 = mysqli_query( $koneksi,"SELECT kode,hasil from roe where kode='MAIN' and tahun='2014' ")or die(mysqli_error());
$MAIN2015 = mysqli_query( $koneksi,"SELECT kode,hasil from roe where kode='MAIN' and tahun='2015' ")or die(mysqli_error());
$MAIN2016 = mysqli_query( $koneksi,"SELECT kode,hasil from roe where kode='MAIN' and tahun='2016' ")or die(mysqli_error());
//CPIN
$CPIN2014 = mysqli_query( $koneksi,"SELECT kode,hasil from roe where kode='CPIN' and tahun='2014' ")or die(mysqli_error());
$CPIN2015 = mysqli_query( $koneksi,"SELECT kode,hasil from roe where kode='CPIN' and tahun='2015' ")or die(mysqli_error());
$CPIN2016 = mysqli_query( $koneksi,"SELECT kode,hasil from roe where kode='CPIN' and tahun='2016' ")or die(mysqli_error());

//JPFA
$hasil2014 = mysqli_fetch_array($JPFA2014);
$hasil2015 = mysqli_fetch_array($JPFA2015);
$hasil2016 = mysqli_fetch_array($JPFA2016);

//SIPD
$hasil2014s = mysqli_fetch_array($SIPD2014);
$hasil2015s = mysqli_fetch_array($SIPD2015);
$hasil2016s = mysqli_fetch_array($SIPD2016);

//MAIN
$hasil2014m = mysqli_fetch_array($MAIN2014);
$hasil2015m = mysqli_fetch_array($MAIN2015);
$hasil2016m = mysqli_fetch_array($MAIN2016);

//CPIN
$hasil2014c = mysqli_fetch_array($CPIN2014);
$hasil2015c = mysqli_fetch_array($CPIN2015);
$hasil2016c = mysqli_fetch_array($CPIN2016);

?>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
	<script  type="text/javascript">

    	  var ctx = document.getElementById("rasio").getContext("2d");
    	  var data = {
    	            labels: ["2014","2015","2016"],
    	            datasets: [
    	            {
    	              label: "JPFA",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(59, 100, 222, 1)",
                    borderColor: "rgba(59, 100, 222, 1)",
                    pointHoverBackgroundColor: "rgba(59, 100, 222, 1)",
						        pointHoverBorderColor: "rgba(59, 100, 222, 1)",
										data: [<?php 
														{ echo '"' . $hasil2014['hasil'] . '","' . $hasil2015['hasil'] . '","' . $hasil2016['hasil'] . '",';}
														?>
													]
    	            },
                  {
    	              label: "SPID",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(255, 255, 225, 0.9)",
                    borderColor: "rgba(255, 255, 225, 0.9)",
                    pointHoverBackgroundColor: "rgba(255, 255, 225, 0.9)",
						        pointHoverBorderColor: "rgba(255, 255, 225, 0.9)",
										data: [<?php
													{ echo '"' . $hasil2014s['hasil'] . '","' . $hasil2015s['hasil'] . '","' . $hasil2016s['hasil'] . '",';}
														
													?>
													]
    	            },
                  {
    	              label: "MAIN",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(201, 29, 29, 1)",
                    borderColor: "rgba(201, 29, 29, 1)",
                    pointHoverBackgroundColor: "rgba(201, 29, 29, 1)",
						        pointHoverBorderColor: "rgba(201, 29, 29, 1)",
										data: [<?php 
													{ echo '"' . $hasil2014m['hasil'] . '","' . $hasil2015m['hasil'] . '","' . $hasil2016m['hasil'] . '",';}
														
													?>
													]
    	            },
									{
    	              label: "CPIN",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(111, 29, 29, 1)",
                    borderColor: "rgba(111, 29, 29, 1)",
                    pointHoverBackgroundColor: "rgba(111, 29, 29, 1)",
						        pointHoverBorderColor: "rgba(111, 29, 29, 1)",
										data: [<?php 
													{ echo '"' . $hasil2014c['hasil'] . '","' . $hasil2015c['hasil'] . '","' . $hasil2016c['hasil'] . '",';}
														
													?>
													]
    	            }
    	            ]
    	            };

    	  var myBarChart = new Chart(ctx, {
    	            type: 'line',
    	            data: data,
    	            options: {
    	            barValueSpacing: 20,
    	            scales: {
    	              yAxes: [{
    	                  ticks: {
    	                      min: -52,
    	                  }
    	              }],
    	              xAxes: [{
    	                          gridLines: {
    	                              color: "rgba(0, 0, 0, 0)",
    	                          }
    	                      }]
    	              }
    	          }
    	        });
    	</script>

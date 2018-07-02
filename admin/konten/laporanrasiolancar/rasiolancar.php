<?
	$id_delete=$_GET['id_delete'];
	if(!empty($id_delete)){
	$query_hapus=$koneksi->query("delete from rasiolancar where id_rasiolancar='".$id_delete."' ");
	echo '<div class="alert alert-success">data  berhasil dihapus</div>';
	echo "<meta http-equiv=refresh content=2;url='?f1=rasiolancar&f2=rasiolancar'>";
}
	?>
<?php
if(isset($_POST['submit'])){
	$kode=$_POST['perusahaan'];
	$tahun=$_POST['tahun'];
	$aktiva_lancar=$_POST['aktiva_lancar'];
	$utang_lancar=$_POST['utang_lancar'];
	$rumus=$aktiva_lancar/$utang_lancar;
	$hasil=$rumus;
	if($tahun == "2014"){
            $angka=1.63;
          }
  elseif ($tahun == "2015") {
           $angka=1.58;
          }
  elseif ($tahun == "2016") {
          $angka=2.18;
         }
  else{
            $angka=0;
          }
  if($rumus>=$angka){
            $tingkat="Likuid";
          }
  else{
            $tingkat="Illikuid";
  
           }
		$query_tambah=$koneksi->query("insert into rasiolancar (kode,tahun,aktiva_lancar,utang_lancar,hasil,tingkat)values 
	('".$kode."','".$tahun."','".$aktiva_lancar."','".$utang_lancar."','".$hasil."','".$tingkat."')");
	echo '<div class="alert alert-success">data  berhasil ditambah</div>';
	echo "<meta http-equiv=refresh content=2;url='?f1=rasiolancar&f2=rasiolancar'>";
	}
?>


<?php
if(isset($_POST['filter'])){
	$tahun=$_POST['tahun'];
	if ($tahun == 'semua' ) {
		$query=$koneksi->query("select perusahaan.nama,rasiolancar.* from rasiolancar,perusahaan where perusahaan.kode = rasiolancar.kode");
	}else{
		$query=$koneksi->query("select perusahaan.nama,rasiolancar.* from rasiolancar,perusahaan where perusahaan.kode = rasiolancar.kode and tahun='".$tahun."' order by hasil DESC");
		$b=a;
	}
	
}else{
	$query=$koneksi->query("select perusahaan.nama,rasiolancar.* from rasiolancar,perusahaan where perusahaan.kode = rasiolancar.kode");
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
							<h3 class="box-title">Rasio Lancar</h3>

							</div>

							<div class="box-body">
							<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
								<th>No</th>
								<th>Perusahaan</th>
								<th>Tahun</th>
								<th>Aktiva_Lancar</th>
								<th>Utang_Lancar</th>
								<th>Hasil</th>
								<th>Tingkat</th>
								</tr>
							</thead>
							<?php
								while ($tampil=$query->fetch_assoc())
								{ $a++;
										$hasil_rupiah="Rp".number_format($tampil['aktiva_lancar'],2,',','.');
										$hasil="Rp".number_format($tampil['utang_lancar'],2,',','.');
								?>
								<tr>
								<td><?=$a?></td>
								<td><?=$tampil['nama']?></td>
								<td><?=$tampil['tahun']?></td>
								<td><?=$hasil_rupiah?></td>
								<td><?=$hasil?></td>
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
	<h3 class="box-title">Deskripsi Rasio Lancar</h3>

	</div>
	<div class="box-body">
	Rasio lancar memiliki standar industri sebesar 2 kali jika hasil menunjukkan angka diatas 2 berarti perusahaan mampu membayar hutang jangka pendeknya 
	atau disebut likuid dan jika hasil menunjukkan angka dibawah 2 kali berati perusahaan belum mampu membayar hutang jangka pendeknya atau disebut illikuid
	</div>
	</div>
	</div>
	';
}
}
?>
<div class="col-md-6">
  <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bar Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="mygraphrasiolancar" style="height: 300px;"></div>
            </div>
            <!-- /.box-body -->
          </div>
      </div>


<div class="col-md-6">
  <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bar Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="mygraphrasiolancar1" style="height: 300px;"></div>
            </div>
            <!-- /.box-body -->
          </div>
      </div>

<div class="col-md-6">
  <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bar Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="mygraphrasiolancar2" style="height: 300px;"></div>
            </div>
            <!-- /.box-body -->
          </div>
      </div>

     
            <!-- /.box-body -->
          </div>
      </div>

	<!-- <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">The Graph of Browser Trends January 2015</div>
                <div class="panel-body">
                    <div id ="mygraph"></div>
                </div>
        </div>
    </div> -->					
</div>
								
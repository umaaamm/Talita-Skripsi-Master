<?
	$id_delete=$_GET['id_delete'];
	if(!empty($id_delete)){
	$query_hapus=$koneksi->query("delete from debtequity where id_debtequity='".$id_delete."' ");
	echo '<div class="alert alert-success">data  berhasil dihapus</div>';
	echo "<meta http-equiv=refresh content=2;url='?f1=debtequity&f2=debtequity'>";
}
	?>
<?php
if(isset($_POST['submit'])){
	$kode=$_POST['perusahaan'];
	$tahun=$_POST['tahun'];
	$total_utang=$_POST['total_utang'];
	$total_ekuitas=$_POST['total_ekuitas'];
	$rumus=($total_utang/$total_ekuitas)*100;
	$hasil=$rumus;
	if($tahun == "2014"){
            $angka=158.31;
          }
  elseif ($tahun == "2015") {
           $angka=159.6;
          }
  elseif ($tahun == "2016") {
          $angka=108.6;
         }
  else{
            $angka=0;
          }
  if($rumus<=$angka){
            $tingkat="Solvabel";
          }
  else{
            $tingkat="Insolvabel";
	
	         }
		$query_tambah=$koneksi->query("insert into debtequity (kode,tahun,total_utang,total_ekuitas,hasil,tingkat)values 
	('".$kode."','".$tahun."','".$total_utang."','".$total_ekuitas."','".$hasil."','".$tingkat."')");
	echo '<div class="alert alert-success">data  berhasil ditambah</div>';
	echo "<meta http-equiv=refresh content=2;url='?f1=debtequity&f2=debtequity'>";
	}
?>
<?php
if(isset($_POST['filter'])){
	$tahun=$_POST['tahun'];
	if ($tahun == 'semua' ) {
		$query=$koneksi->query("select perusahaan.nama,debtequity.* from debtequity,perusahaan where perusahaan.kode = debtequity.kode");
	}else{
		$query=$koneksi->query("select perusahaan.nama,debtequity.* from debtequity,perusahaan where perusahaan.kode = debtequity.kode and tahun='".$tahun."' order by hasil ASC");
		$b=a;
	}
	
}else{
	$query=$koneksi->query("select perusahaan.nama,debtequity.* from debtequity,perusahaan where perusahaan.kode = debtequity.kode");
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
							<h3 class="box-title">Dept to Equity Ratio</h3>
							</div>
							<div class="box-body">
							<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
								<th>No</th>
								<th>Perusahaan</th>
								<th>Tahun</th>
								<th>Total Utang</th>
								<th>Total Ekuitas</th>
								<th>Hasil</th>
								<th>Tingkat</th>
					
								</tr>
							</thead>
							<?php
								while ($tampil=$query->fetch_assoc())
								{ $a++;
										$hasil_rupiah="Rp".number_format($tampil['total_utang'],2,',','.');
										$hasil="Rp".number_format($tampil['total_ekuitas'],2,',','.');
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
	<h3 class="box-title">Deskripsi Debt To Equity Ratio</h3>

	</div>
	<div class="box-body">
	Debt To Equity Ratio memiliki standar industri sebesar 80% jika hasil menunjukkna angka diatas 80% maka semakin tidak menguntungkan untuk kreditur
	karena akan semakin besar resiko kegagalan yang mungkin terjadi di perusahaan dan jika hasil menunjukkan angka dibawah 80% maka semakin tinggi 
	tingkat pendanaan yang disediakan oleh perusahaan </div>
	</div>
	</div>
	';
}
}
?>
</div>
								
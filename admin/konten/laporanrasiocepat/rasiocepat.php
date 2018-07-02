<?
	$id_delete=$_GET['id_delete'];
	if(!empty($id_delete)){
	$query_hapus=$koneksi->query("delete from rasiocepat where id_rasiocepat='".$id_delete."' ");
	echo '<div class="alert alert-success">data  berhasil dihapus</div>';
	echo "<meta http-equiv=refresh content=2;url='?f1=rasiocepat&f2=rasiocepat'>";
}
	?>
<?php
if(isset($_POST['submit'])){
	$kode=$_POST['perusahaan'];
	$tahun=$_POST['tahun'];
	$aktiva_lancar=$_POST['aktiva_lancar'];
	$persediaan=$_POST['persediaan'];
	$utang_lancar=$_POST['utang_lancar'];
	$rumus=($aktiva_lancar-$persediaan)/$utang_lancar;
	$hasil=$rumus;
	if($tahun == "2014"){
            $angka=0.95;
          }
  elseif ($tahun == "2015") {
           $angka=0.83;
          }
  elseif ($tahun == "2016") {
          $angka=1.03;
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
		$query_tambah=$koneksi->query("insert into rasiocepat (kode,tahun,aktiva_lancar,persediaan,utang_lancar,hasil,tingkat)values 
	('".$kode."','".$tahun."','".$aktiva_lancar."','".$persediaan."','".$utang_lancar."','".$hasil."','".$tingkat."')");
	echo '<div class="alert alert-success">data  berhasil ditambah</div>';
	echo "<meta http-equiv=refresh content=2;url='?f1=rasiocepat&f2=rasiocepat'>";
	}
?>


<?php
if(isset($_POST['filter'])){
	$tahun=$_POST['tahun'];
	if ($tahun == 'semua' ) {
		$query=$koneksi->query("select perusahaan.nama,rasiocepat.* from rasiocepat,perusahaan where perusahaan.kode = rasiocepat.kode");
	}else{
		$query=$koneksi->query("select perusahaan.nama,rasiocepat.* from rasiocepat,perusahaan where perusahaan.kode = rasiocepat.kode and tahun='".$tahun."' order by hasil DESC");
		$b=a;
	}
	
}else{
	$query=$koneksi->query("select perusahaan.nama,rasiocepat.* from rasiocepat,perusahaan where perusahaan.kode = rasiocepat.kode");
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
							<h3 class="box-title">Rasio Cepat</h3>

							</div>

							<div class="box-body">
							<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
								<th>No</th>
								<th>Perusahaan</th>
								<th>Tahun</th>
								<th>Aktiva_Lancar</th>
								<th>Persediaan</th>
								<th>Utang_Lancar</th>
								<th>Hasil</th>
								<th>Tingkat</th>
								</tr>
							</thead>
							<?php
								while ($tampil=$query->fetch_assoc())
								{ $a++;
										$hasil_rupiah="Rp".number_format($tampil['aktiva_lancar'],2,',','.');
										$hasil="Rp".number_format($tampil['persediaan'],2,',','.');
										$hasil1="Rp".number_format($tampil['utang_lancar'],2,',','.');
								?>
								<tr>
								<td><?=$a?></td>
								<td><?=$tampil['nama']?></td>
								<td><?=$tampil['tahun']?></td>
								<td><?=$hasil_rupiah?></td>
								<td><?=$hasil?></td>
								<td><?=$hasil1?></td>
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
	<h3 class="box-title">Deskripsi Rasio Cepat</h3>

	</div>

	<div class="box-body">
	Rasio cepat memiliki standar industri sebesar 1,5 kali jika hasil menunjukkan angka diatas 1,5 kali maka keadaan perusahaan lebih baik karena peusahaan 
	tidak harus menjual persediaan nya untuk membayar hutang jangka pendeknya atau disebut likuid dan jika hasil menunjukkan angka dibawah 1,5 kali
	maka perusahaan dalam keadaan kurang baik karena harus menjual persediaannya untuk membayar hutang jangka pendek atau disebut illikuid.
	</div>
	</div>
	</div>
	';
}
}
?>
			
</div>
								
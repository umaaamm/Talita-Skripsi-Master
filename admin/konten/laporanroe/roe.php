<?
	$id_delete=$_GET['id_delete'];
	if(!empty($id_delete)){
	$query_hapus=$koneksi->query("delete from roe where id_roe='".$id_delete."' ");
	echo '<div class="alert alert-success">data  berhasil dihapus</div>';
	echo "<meta http-equiv=refresh content=2;url='?f1=roe&f2=roe'>";
}
	?>
<?php
if(isset($_POST['submit'])){
	$kode=$_POST['perusahaan'];
	$tahun=$_POST['tahun'];
	$EAIT=$_POST['EAIT'];
	$total_ekuitas=$_POST['total_ekuitas'];
	$rumus=($EAIT/$total_ekuitas)*100;
	$hasil=$rumus;
	if($tahun == "2014"){
            $angka=3.90;
          }
    elseif ($tahun == "2015") {
           $angka= -7.57;
          }
    elseif ($tahun == "2016") {
          $angka= 13.75;
         }
    else{
            $angka=0;
          }
	if($rumus >= $angka){
						$tingkat="Rendabel";
					}
	else{
						$tingkat="Unrendabel";
					}
		$query_tambah=$koneksi->query("insert into roe (kode,tahun,EAIT,total_ekuitas,hasil,tingkat)values 
	('".$kode."','".$tahun."','".$EAIT."','".$total_ekuitas."','".$hasil."','".$tingkat."')");
	echo '<div class="alert alert-success">data  berhasil ditambah</div>';
	echo "<meta http-equiv=refresh content=2;url='?f1=roe&f2=roe'>";
	}
?>
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
										$hasil_rupiah="Rp".number_format($tampil['EAIT'],2,',','.');
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
	<h3 class="box-title">Deskripsi Return On Equity </h3>

	</div>
	<div class="box-body">
	Return On Equity memiliki standar industri sebesar 40% jika hasil menunjukkan angka diatas 40% maka perusahaan dalam keadaan baik karena 
	menunjukkan efisiensi penggunaan modal sendiri dan jika hasil menunjukkan angka dibawah 40% maka posisi peilik perusahaan kurang baik.
	</div>
	</div>
	</div>
	';
}
}
?>
</div>
								
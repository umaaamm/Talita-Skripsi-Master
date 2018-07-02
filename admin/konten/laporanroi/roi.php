<?
	$id_delete=$_GET['id_delete'];
	if(!empty($id_delete)){
	$query_hapus=$koneksi->query("delete from roi where id_roi='".$id_delete."' ");
	echo '<div class="alert alert-success">data  berhasil dihapus</div>';
	echo "<meta http-equiv=refresh content=2;url='?f1=roi&f2=roi'>";
}
	?>
<?php
if(isset($_POST['submit'])){
	$kode=$_POST['perusahaan'];
	$tahun=$_POST['tahun'];
	$EAIT=$_POST['EAIT'];
	$total_aset=$_POST['total_aset'];
	$rumus=($EAIT/$total_aset)*100;
	$hasil=$rumus;
	if($tahun == "2014"){
            $angka=2.12;
          }
    elseif ($tahun == "2015") {
           $angka= -1.80;
          }
    elseif ($tahun == "2016") {
          $angka= 10.10;
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
		$query_tambah=$koneksi->query("insert into roi (kode,tahun,EAIT,total_aset,hasil,tingkat)values 
	('".$kode."','".$tahun."','".$EAIT."','".$total_aset."','".$hasil."','".$tingkat."')");
	echo '<div class="alert alert-success">data  berhasil ditambah</div>';
	echo "<meta http-equiv=refresh content=2;url='?f1=roi&f2=roi'>";
	}
?>
<?php
if(isset($_POST['filter'])){
	$tahun=$_POST['tahun'];
	if ($tahun == 'semua' ) {
		$query=$koneksi->query("select perusahaan.nama,roi.* from roi,perusahaan where perusahaan.kode = roi.kode");
	}else{
		$query=$koneksi->query("select perusahaan.nama,roi.* from roi,perusahaan where perusahaan.kode = roi.kode and tahun='".$tahun."' order by hasil DESC");
		$b=a;
	}
	
}else{
	$query=$koneksi->query("select perusahaan.nama,roi.* from roi,perusahaan where perusahaan.kode = roi.kode");
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
							<h3 class="box-title">Return on Investment</h3>
							</div>
							<div class="box-body">
							<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
								<th>No</th>
								<th>Perusahaan</th>
								<th>Tahun</th>
								<th>EAIT</th>
								<th>Total Aset</th>
								<th>Hasil</th>
								<th>Tingkat</th>
					
								</tr>
							</thead>
							<?php
								while ($tampil=$query->fetch_assoc())
								{ $a++;
										$hasil_rupiah="Rp".number_format($tampil['EAIT'],2,',','.');
										$hasil="Rp".number_format($tampil['total_aset'],2,',','.');
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
	<h3 class="box-title">Deskripsi Return On Investment</h3>

	</div>
	<div class="box-body">
	Return On Investment memiliki standar industri sebesar 30% jika hasil mununjukkan angka diatas 30$ maka efektivitas dari keseluruhan operasi perusahaan
	dalam keadaan baik dan jika hasil menunjukkan angka dibawah 30% maka perusahaan kurang baik bisa disebabkan oleh rendahnya perputaran aktiva.
	</div>
	</div>
	</div>
	';
}
}
?>
</div>
								
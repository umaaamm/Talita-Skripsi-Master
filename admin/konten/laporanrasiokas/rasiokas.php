<?
	$id_delete=$_GET['id_delete'];
	if(!empty($id_delete)){
	$query_hapus=$koneksi->query("delete from rasiokas where id_rasiokas='".$id_delete."' ");
	echo '<div class="alert alert-success">data  berhasil dihapus</div>';
	echo "<meta http-equiv=refresh content=2;url='?f1=rasiokas&f2=rasiokas'>";
}
	?>
<?php
if(isset($_POST['submit'])){
	$kode=$_POST['perusahaan'];
	$tahun=$_POST['tahun'];
	$kas_bank=$_POST['kas_bank'];
	$utang_lancar=$_POST['utang_lancar'];
	$rumus=$kas_bank/$utang_lancar;
	$hasil=$rumus;
	if($tahun == "2014"){
            $angka=16.44;
          }
  elseif ($tahun == "2015") {
           $angka=21.49;
          }
  elseif ($tahun == "2016") {
          $angka=36.20;
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
	$query_tambah=$koneksi->query("insert into rasiokas (kode,tahun,kas_bank,utang_lancar,hasil,tingkat)values 
	('".$kode."','".$tahun."','".$kas_bank."','".$utang_lancar."','".$hasil."','".$tingkat."')");
	echo '<div class="alert alert-success">data  berhasil ditambah</div>';
	echo "<meta http-equiv=refresh content=2;url='?f1=rasiokas&f2=rasiokas'>";
	}
?>

<?php
if(isset($_POST['filter'])){
	$tahun=$_POST['tahun'];
	if ($tahun == 'semua' ) {
		$query=$koneksi->query("select perusahaan.nama,rasiokas.* from rasiokas,perusahaan where perusahaan.kode = rasiokas.kode");
	}else{
		$query=$koneksi->query("select perusahaan.nama,rasiokas.* from rasiokas,perusahaan where perusahaan.kode = rasiokas.kode and tahun='".$tahun."' order by hasil DESC");
		$b=a;
	}
	
}else{
	$query=$koneksi->query("select perusahaan.nama,rasiokas.* from rasiokas,perusahaan where perusahaan.kode = rasiokas.kode");
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
              
              </div>
			  
              </form>
				<div class="col-md-12">
				
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Rasio Kas</h3>
							
							</div>

							<div class="box-body">
							<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
								<th>No</th>
								<th>Perusahaan</th>
								<th>Tahun</th>
								<th>Kas Dan Bank</th>
								<th>Utang Lancar</th>
								<th>Hasil</th>
								<th>Tingkat</th>
					
								</tr>
							</thead>
							<?php
								while ($tampil=$query->fetch_assoc())
								{ $a++;
										$hasil_rupiah="Rp".number_format($tampil['kas_bank'],2,',','.');
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
	<h3 class="box-title">Deskripsi Rasio Kas</h3>
	</div>

	<div class="box-body">
	Rasio kas memiliki standar industri sebesar 50% jika hasil menunjukkan angka diatas 50% maka keadaan perusahaan lebih baik atau disebut likuid
	dan jika hasil menunjukkan angka dibawah 50% maka perusahaan dalam keadaan kurang baik karena perusahaan harus menjual atau 
	menagih hutang lainnya untuk membayar hutang jangka pendeknya atau disebut illikuid
	</div>
	</div>
	</div>
	';
}
}
?>
</div>
								
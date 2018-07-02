<?php include"koneksi/koneksi.php" ?>


<?php
$id_edit=$_GET['id_edit'];
	$query_edit=$koneksi->query("select * from rasiocepat where id_rasiocepat='".$id_edit."' ");
	$tampil_edit=$query_edit->fetch_assoc();
	
?>

<?php
if(isset($_POST['submit'])){
	$perusahaan=$_POST['perusahaan'];
	$tahun=$_POST['tahun'];
	@$aktiva_lancar=$_POST['aktiva_lancar'];
	@$persediaan=$_POST['persediaan'];
	@$utang_lancar=$_POST['utang_lancar'];
	@$rumus=($aktiva_lancar-$persediaan)/$utang_lancar;
	@$hasil=number_format($rumus,2);
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
  if (!empty($perusahaan && $tahun && $aktiva_lancar && $persediaan && $utang_lancar) ) {
$query_tambah=$koneksi->query("update rasiocepat set kode='".$perusahaan."', tahun='".$tahun."',aktiva_lancar='".$aktiva_lancar."',
persediaan='".$persediaan."',utang_lancar='".$utang_lancar."',hasil='".$hasil."',tingkat='".$tingkat."' where id_rasiocepat='".$id_edit."'");
echo '<div class="alert alert-success">Data  berhasil diedit</div>';
echo "<meta http-equiv=refresh content=2;url='?f1=rasiocepat&f2=rasiocepat'>";

  }else{
    echo '<div class="alert alert-danger">Data Kosong !!</div>';
echo "<meta http-equiv=refresh content=5;url='?f1=rasiocepat&f2=rasiocepat'>";
  }

}
?>

<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Kelola Rasio Cepat</h3>
            </div>
            <!-- /.box-header -->
			<?php
			$query_perusahaan=$koneksi->query("select * from perusahaan");
			?>
            <!-- form start -->
            <form role="form" action="" method="post">
            
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Perusahaan</label>
                <select class="form-control" name="perusahaan">
               
				<?php
				while($tampil_perusahaan=$query_perusahaan->fetch_assoc()){	?>
				<option value="<?=$tampil_perusahaan['kode']?>" <?=(($tampil_edit['kode'] == $tampil_perusahaan
				['kode'])? 'selected' : '');?>><?=$tampil_perusahaan['nama']?></option>
				<?php } ?>
				</select>
				 </div>
                <div class="form-group">
                  <label>Tahun</label>
                  <input type="text" class="form-control" value="<?=$tampil_edit['tahun'];?>" name="tahun" placeholder="tahun">
                </div>
				<div class="form-group">
                  <label>Aktiva Lancar</label>
                  <input type="text" class="form-control" value="<?=$tampil_edit['aktiva_lancar'];?>" name="aktiva_lancar" placeholder="aktiva_lancar">
                </div>
				<div class="form-group">
                  <label>Persediaan</label>
                  <input type="text" class="form-control" value="<?=$tampil_edit['persediaan'];?>" name="persediaan" placeholder="persediaan">
                </div>
				<div class="form-group">
                  <label>Utang Lancar</label>
                  <input type="text" class="form-control" value="<?=$tampil_edit['utang_lancar'];?>" name="utang_lancar" placeholder="utang_lancar">
                </div>
				
				
               
              
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
          </div>
<?php include"koneksi/koneksi.php" ?>


<?php
$id_edit=$_GET['id_edit'];
	$query_edit=$koneksi->query("select * from rasiokas where id_rasiokas='".$id_edit."' ");
	$tampil_edit=$query_edit->fetch_assoc();
	
?>

<?php
if(isset($_POST['submit'])){
	$perusahaan=$_POST['perusahaan'];
	$tahun=$_POST['tahun'];
	@$kas_bank=$_POST['kas_bank'];
	@$utang_lancar=$_POST['utang_lancar'];
	@$rumus=($kas_bank/$utang_lancar)*100;
	@$hasil=number_format($rumus,2);
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
  if (!empty($perusahaan && $tahun && $kas_bank && $utang_lancar) ) {
$query_tambah=$koneksi->query("update rasiokas set kode='".$perusahaan."', tahun='".$tahun."',kas_bank='".$kas_bank."',
utang_lancar='".$utang_lancar."',hasil='".$hasil."',tingkat='".$tingkat."' where id_rasiokas='".$id_edit."'");
echo '<div class="alert alert-success">Data  berhasil diedit</div>';
echo "<meta http-equiv=refresh content=2;url='?f1=rasiokas&f2=rasiokas'>";

  }else{
    echo '<div class="alert alert-danger">Data Kosong !!</div>';
echo "<meta http-equiv=refresh content=5;url='?f1=rasiokas&f2=rasiokas'>";
  }

}
?>

<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Kelola Rasio Kas</h3>
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
                  <label>Kas dan Bank</label>
                  <input type="text" class="form-control" value="<?=$tampil_edit['kas_bank'];?>" name="kas_bank" placeholder="kas_bank">
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
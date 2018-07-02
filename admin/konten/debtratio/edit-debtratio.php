<?php include"koneksi/koneksi.php" ?>


<?php
$id_edit=$_GET['id_edit'];
	$query_edit=$koneksi->query("select * from debtratio where id_debtratio='".$id_edit."' ");
	$tampil_edit=$query_edit->fetch_assoc();
	
?>

<?php
if(isset($_POST['submit'])){
	$perusahaan=$_POST['perusahaan'];
	$tahun=$_POST['tahun'];
	@$total_utang=$_POST['total_utang'];
	@$total_aset=$_POST['total_aset'];
	@$rumus=($total_utang/$total_aset)*100;
	@$hasil=number_format($rumus,2);
	if($tahun == "2014"){
            $angka=59.40;
          }
  elseif ($tahun == "2015") {
           $angka=60.43;
          }
  elseif ($tahun == "2016") {
          $angka=50.40;
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
 if (!empty($perusahaan && $tahun && $total_utang && $total_aset) ) {
$query_tambah=$koneksi->query("update debtratio set kode='".$perusahaan."', tahun='".$tahun."',total_utang='".$total_utang."',
total_aset='".$total_aset."',hasil='".$hasil."',tingkat='".$tingkat."' where id_debtratio='".$id_edit."'");
echo '<div class="alert alert-success">Data  berhasil diedit</div>';
echo "<meta http-equiv=refresh content=2;url='?f1=debtratio&f2=debtratio'>";

  }else{
    echo '<div class="alert alert-danger">Data Kosong !!</div>';
echo "<meta http-equiv=refresh content=5;url='?f1=debtratio&f2=debtratio'>";
  }

}
?>

<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Kelola Debt To Asset Ratio</h3>
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
                  <label>Total Utang</label>
                  <input type="text" class="form-control" value="<?=$tampil_edit['total_utang'];?>" name="total_utang" placeholder="total_utang">
                </div>
				<div class="form-group">
                  <label>Total Aset</label>
                  <input type="text" class="form-control" value="<?=$tampil_edit['total_aset'];?>" name="total_aset" placeholder="total_aset">
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
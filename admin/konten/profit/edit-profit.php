<?php include"koneksi/koneksi.php" ?>


<?php
$id_edit=$_GET['id_edit'];
	$query_edit=$koneksi->query("select * from profit where id_profit='".$id_edit."' ");
	$tampil_edit=$query_edit->fetch_assoc();
	
?>

<?php
if(isset($_POST['submit'])){
	$perusahaan=$_POST['perusahaan'];
	$tahun=$_POST['tahun'];
	@$EAIT=$_POST['EAIT'];
	@$penjualan=$_POST['penjualan'];
	@$rumus=($EAIT/$penjualan)*100;
	@$hasil=number_format($rumus,2);
	if($tahun == "2014"){
            $angka=1.44;
          }
    elseif ($tahun == "2015") {
           $angka=1.30;
          }
    elseif ($tahun == "2016") {
          $angka=6.70;
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
	
	if (!empty($perusahaan && $tahun && $EAIT && $penjualan ) ) {
$query_tambah=$koneksi->query("update profit set kode='".$perusahaan."', tahun='".$tahun."',EAIT='".$EAIT."',
penjualan='".$penjualan."',hasil='".$hasil."',tingkat='".$tingkat."' where id_profit='".$id_edit."'");
echo '<div class="alert alert-success">Data  berhasil diedit</div>';
echo "<meta http-equiv=refresh content=2;url='?f1=profit&f2=profit'>";

}else{
	echo '<div class="alert alert-danger">Data Kosong !!</div>';
	echo "<meta http-equiv=refresh content=5;url='?f1=profit&f2=profit'>";
	}
}
?>

<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Kelola Profit Margin On Sales</h3>
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
                  <label>EAIT</label>
                  <input type="text" class="form-control" value="<?=$tampil_edit['EAIT'];?>" name="EAIT" placeholder="EAIT">
                </div>
				<div class="form-group">
                  <label>Penjualan</label>
                  <input type="text" class="form-control" value="<?=$tampil_edit['penjualan'];?>" name="penjualan" placeholder="penjualan">
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
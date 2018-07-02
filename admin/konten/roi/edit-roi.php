<?php include"koneksi/koneksi.php" ?>


<?php
$id_edit=$_GET['id_edit'];
	$query_edit=$koneksi->query("select * from roi where id_roi='".$id_edit."' ");
	$tampil_edit=$query_edit->fetch_assoc();
	
?>

<?php
if(isset($_POST['submit'])){
	$perusahaan=$_POST['perusahaan'];
	$tahun=$_POST['tahun'];
	@$EAIT=$_POST['EAIT'];
	@$total_aset=$_POST['total_aset'];
	@$rumus=($EAIT/$total_aset)*100;
	@$hasil=number_format($rumus,2);
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
	
	if (!empty($perusahaan && $tahun && $EAIT && $total_aset ) ) {
		$query_tambah=$koneksi->query("update roi set kode='".$perusahaan."', tahun='".$tahun."',EAIT='".$EAIT."',
		total_aset='".$total_aset."',hasil='".$hasil."',tingkat='".$tingkat."' where id_roi='".$id_edit."'");
	echo '<div class="alert alert-success">data  berhasil diedit</div>';
	echo "<meta http-equiv=refresh content=2;url='?f1=roi&f2=roi'>";
	}else{
	echo '<div class="alert alert-danger">Data Kosong !!</div>';
	echo "<meta http-equiv=refresh content=5;url='?f1=roi&f2=roi'>";
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
<?php include"koneksi/koneksi.php" ?>


<?php
$id_edit=$_GET['id_edit'];
	$query_edit=$koneksi->query("select * from perusahaan where id_pt='".$id_edit."' ");
	$tampil_edit=$query_edit->fetch_assoc();
	
?>

<?php
if(isset($_POST['submit'])){
	$kode=$_POST['kode'];
	$nama=$_POST['nama'];
	
	if (!empty($kode && $nama ) ) {
$query_tambah=$koneksi->query("update perusahaan set kode='".$kode."', nama='".$nama."' where id_pt='".$id_edit."'");
if($query_tambah){
echo '<div class="alert alert-success">data  berhasil diedit</div>';
	echo "<meta http-equiv=refresh content=2;url='?f1=perusahaan&f2=perusahaan'>";
	}else{
    echo '<div class="alert alert-danger">Data gagal diedit !!</div>';
	echo "<meta http-equiv=refresh content=5;url='?f1=perusahaan&f2=perusahaan'>";
  }
}else{
    echo '<div class="alert alert-danger">Data Kosong !!</div>';
	echo "<meta http-equiv=refresh content=5;url='?f1=perusahaan&f2=perusahaan'>";
  }

}
?>

<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit perusahaan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post">
            
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode</label>
                  <input type="text" class="form-control" value="<?=$tampil_edit['kode'];?>" name="kode" placeholder="Enter kode">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" value="<?=$tampil_edit['nama'];?>" name="nama" placeholder="nama">
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
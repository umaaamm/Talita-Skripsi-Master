<?php include"koneksi/koneksi.php" ?>


<?php
$id_edit=$_GET['id_edit'];
	$query_edit=$koneksi->query("select * from admin where id_admin='".$id_edit."' ");
	$tampil_edit=$query_edit->fetch_assoc();
	
?>

<?php
if(isset($_POST['submit'])){
	$username=$_POST['user'];
	$password=$_POST['pass'];
	$level="admin";
	
if (!empty($username && $password ) ) {
$query_tambah=$koneksi->query("update admin set username='".$username."', password='".$password."',level='".$level."' where id_admin='".$id_edit."'");
	if($query_tambah){
	echo '<div class="alert alert-success">data  berhasil diedit</div>';
	echo "<meta http-equiv=refresh content=2;url='?f1=admin&f2=admin'>";
	}else{
    echo '<div class="alert alert-danger">Data gagal diedit !!</div>';
	echo "<meta http-equiv=refresh content=5;url='?f1=admin&f2=admin'>";
  }
}else{
    echo '<div class="alert alert-danger">Data Kosong !!</div>';
	echo "<meta http-equiv=refresh content=5;url='?f1=admin&f2=admin'>";
  }

}
?>

<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Kelola Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post">
            
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" value="<?=$tampil_edit['username'];?>" name="user" placeholder="Enter Username">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" class="form-control" value="<?=$tampil_edit['password'];?>" name="pass" placeholder="Password">
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
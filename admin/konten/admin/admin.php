<?php
$id_delete = $_GET['id_delete'];
if (!empty($id_delete)) {
    $query_hapus = $koneksi->query("delete from admin where id_admin='" . $id_delete . "' ");
    echo '<div class="alert alert-success">Data  berhasil dihapus</div>';
    echo "<meta http-equiv=refresh content=2;url='?f1=admin&f2=admin'>";
}
?>
<?php
if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $level = 'admin';
	
	if (!empty($user && $pass  ) ) {
    $query_tambah = $koneksi->query("insert into admin (username,password,level)values ('" . $user . "','" . $pass . "','" . $level . "')");
    echo '<div class="alert alert-success">Data  berhasil ditambah</div>';
    echo "<meta http-equiv=refresh content=2;url='?f1=admin&f2=admin'>";
}else{
		echo '<div class="alert alert-danger">Data Tidak Lengkap !</div>';
echo "<meta http-equiv=refresh content=5;url='?f1=admin&f2=admin'>";
	}
}
?>
<div class="row">
    <!-- left column -->
    <div class="col-md-4">
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
                        <input type="text" class="form-control" name="user" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="pass" placeholder="Password">
                    </div>


                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.box -->

    <div class="col-md-8">
        <?php
        $query = $koneksi->query("select * from admin");
        ?>
    <div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Daftar Admin</h3>
							</div>
							<div class="box-body">
							<table id="example1" class="table table-bordered table-striped">
							<thead>
                    <tr>
                        <th>no</th>
                        <th>username</th>
                        <th>password</th>
                        <th>level</th>
                        <th>action</th>
                    </tr>
                    </thead>

                    <?php
                    while ($tampil = $query->fetch_assoc()) {
                        $a++;
                        ?>
                        <tr>
                            <td><?= $a ?></td>
                            <td><?= $tampil['username'] ?></td>
                            <td><?= $tampil['password'] ?></td>
                            <td><?= $tampil['level'] ?></td>
                            <td><a href="javascript:;" data-id="<? echo $tampil['id_admin']?>" data-toggle="modal" data-target="#modal-konfirmasi" class="btn btn-success btn-danger fa fa-trash"></a>
                                <a href="?f1=admin&f2=edit-admin&id_edit=<?= $tampil['id_admin'] ?>"
                                   class="btn btn-success btn-primary fa fa-edit"></a></td>
                        </tr>

                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="modal-konfirmasi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                 
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Konfirmasi</h4>
            </div>
            <div class="modal-body btn-info">
                Apakah Anda yakin ingin menghapus data ini ?
            </div>
            <div class="modal-footer">
                <a href="javascript:;" class="btn btn-danger" id="hapus-true-data8">Hapus</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
            </div>
                 
                </div>
            </div>
        </div>
</div>

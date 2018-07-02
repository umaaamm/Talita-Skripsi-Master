<?php
	$id_pt=$_GET['id_delete'];
	if(!empty($id_pt)){
	$query_hapus=$koneksi->query("delete from perusahaan where id_pt='".$id_pt."' ");
	echo '<div class="alert alert-success">data  berhasil dihapus</div>';
	echo "<meta http-equiv=refresh content=2;url='?f1=perusahaan&f2=perusahaan'>";
}
	?>
<?php
if(isset($_POST['submit'])){
	$kode=$_POST['kode'];
	$nama=$_POST['nama'];
	
	if (!empty($kode && $nama ) ) {
	$query_tambah=$koneksi->query("insert into perusahaan (kode,nama)values ('".$kode."','".$nama."')");
	echo '<div class="alert alert-success">data  berhasil ditambah</div>';
	echo "<meta http-equiv=refresh content=2;url='?f1=perusahaan&f2=perusahaan'>";
	}else{
		echo '<div class="alert alert-danger">Data Kosong !!</div>';
	echo "<meta http-equiv=refresh content=5;url='?f1=perusahaan&f2=perusahaan'>";
	}
	}
?>
<div class="row">
        <!-- left column -->
        <div class="col-md-4">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Kelola Perusahaan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post">
            
              <div class="box-body">
                <div class="form-group">
                  <label >Kode</label>
                  <input type="text" class="form-control" name="kode" placeholder="Enter Kode">
                </div>
                <div class="form-group">
                  <label >Nama</label>
                  <input type="text" class="form-control" name="nama" placeholder="Nama">
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
				$query=$koneksi->query("select * from perusahaan");
				?>
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Daftar Perusahaan</h3>
							</div>
							<div class="box-body">
							<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
								<th>NO</th>
								<th>KODE PERUSAHAAN</th>
								<th>NAMA PERUSAHAAN</th>
								<th>ACTION</th>
								
								</tr>
							</thead>
							<?php
								while ($tampil=$query->fetch_assoc())
								{ $a++;
								?>
								<tr>
								<td><?=$a?></td>
								<td><?=$tampil['kode']?></td>
								<td><?=$tampil['nama']?></td>
								<td><a href="javascript:;" data-id="<? echo $tampil['id_pt']?>" data-toggle="modal" data-target="#modal-konfirmasi" class="btn btn-success btn-danger fa fa-trash"></a>
								<a href="?f1=perusahaan&f2=edit-perusahaan&id_edit=<?=$tampil['id_pt']?>" class="btn btn-success btn-primary fa fa-edit"></a></td>
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
                <a href="javascript:;" class="btn btn-danger" id="hapus-true-data9">Hapus</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
            </div>
                 
                </div>
            </div>
        </div>
</div>
								
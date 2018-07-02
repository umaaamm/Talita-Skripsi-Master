<?
	$id_delete=$_GET['id_delete'];
	if(!empty($id_delete)){
	$query_hapus=$koneksi->query("delete from debtratio where id_debtratio='".$id_delete."' ");
	echo '<div class="alert alert-success">data  berhasil dihapus</div>';
	echo "<meta http-equiv=refresh content=2;url='?f1=debtratio&f2=debtratio'>";
}
	?>
<?php
if(isset($_POST['submit'])){
	$kode=$_POST['perusahaan'];
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
	if (!empty($kode && $tahun && $total_utang && $total_aset ) ) {
	$query_tambah=$koneksi->query("insert into debtratio (kode,tahun,total_utang,total_aset,hasil,tingkat)values 
	('".$kode."','".$tahun."','".$total_utang."','".$total_aset."','".$hasil."','".$tingkat."')");
	echo '<div class="alert alert-success">data  berhasil ditambah</div>';
	echo "<meta http-equiv=refresh content=2;url='?f1=debtratio&f2=debtratio'>";
	
	}else{
		echo '<div class="alert alert-danger">Data Kosong !</div>';
echo "<meta http-equiv=refresh content=5;url='?f1=debtratio&f2=debtratio'>";
	}
	}
?>
<div class="row">
        <!-- left column -->
        <div class="col-md-4">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
			
              <h3 class="box-title">Kelola Debt To Asset Ratio</h3>
            </div>
            <!-- /.box-header -->
			<?php
			$query_combo=$koneksi->query("select * from perusahaan");
			?>
            <!-- form start -->
            <form role="form" action="" method="post">
            
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Perusahaan</label>
                  <select class="form-control" name="perusahaan" placeholder="Enter perusahaan">
				   <option>-- Pilih Perusahaan --</option>
				  <?php
				  while($tampil_kode=$query_combo->fetch_assoc()){
				  ?>
				  <option value="<?=$tampil_kode['kode']?>"><?=$tampil_kode['nama']?>
				  <?php } ?>
				  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tahun</label>
                  <select class="form-control" name="tahun" >
                  <option value="-"> --Pilih Tahun-- </option>
                  <option value="2014"> 2014 </option>
                  <option value="2015"> 2015 </option>
                  <option value="2016"> 2016 </option>
 				</select>
                </div>
				 <div class="form-group">
                  <label for="exampleInputPassword1">Total Utang</label>
                  <input type="text" onkeyup="angka(this);" class="form-control" name="total_utang" placeholder="$total_utang">
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">Total Aset</label>
                  <input type="text "onkeyup="angka(this);"  class="form-control" name="total_aset" placeholder="total_aset">
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
				$query=$koneksi->query("select * from debtratio");
				?>
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Dept to Asset Ratio</h3>
							</div>
							<div class="box-body">
							<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
								<th>No</th>
								<th>Perusahaan</th>
								<th>Tahun</th>
								<th>Total Utang</th>
								<th>Total Aset</th>
								<th>Hasil</th>
								<th>Tingkat</th>
								<th>Action</th>
					
								</tr>
							</thead>
							<?php
								while ($tampil=$query->fetch_assoc())
								{ $a++;
										$hasil_rupiah="Rp".number_format($tampil['total_utang'],2,',','.');
										$hasil="Rp".number_format($tampil['total_aset'],2,',','.');
								?>
								<tr>
								<td><?=$a?></td>
								<td><?=$tampil['kode']?></td>
								<td><?=$tampil['tahun']?></td>
								<td><?=$hasil_rupiah?></td>
								<td><?=$hasil?></td>
								<td><?=$tampil['hasil']?></td>
								<td><?=$tampil['tingkat']?></td>
								
								<td>
								<a href="javascript:;" data-id="<? echo $tampil['id_debtratio']?>" data-toggle="modal" data-target="#modal-konfirmasi" class="btn btn-success btn-danger fa fa-trash"></a>
								<a href="?f1=debtratio&f2=edit-debtratio&id_edit=<?=$tampil['id_debtratio']?>" class="btn btn-success btn-primary fa fa-edit"></a></td>
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
                <a href="javascript:;" class="btn btn-danger" id="hapus-true-data3">Hapus</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
            </div>
                 
                </div>
            </div>
        </div>
		</div>			
</div>
								
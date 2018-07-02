 <?
	$id_delete=$_GET['id_delete'];
	if(!empty($id_delete)){
	$query_hapus=$koneksi->query("delete from roe where id_roe='".$id_delete."' ");
	echo '<div class="alert alert-success">data  berhasil dihapus</div>';
	echo "<meta http-equiv=refresh content=2;url='?f1=roe&f2=roe'>";
}
	?>
<?php
if(isset($_POST['submit'])){
	$kode=$_POST['perusahaan'];
	$tahun=$_POST['tahun'];
	@$EAIT=$_POST['EAIT'];
	@$total_ekuitas=$_POST['total_ekuitas'];
	@$rumus=($EAIT/$total_ekuitas)*100;
	@$hasil=number_format($rumus,2);
	if($tahun == "2014"){
            $angka=3.90;
          }
    elseif ($tahun == "2015") {
           $angka= -7.57;
          }
    elseif ($tahun == "2016") {
          $angka= 13.75;
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
		if (!empty($kode && $tahun && $EAIT && $total_ekuitas ) ) {
	$query_tambah=$koneksi->query("insert into roe (kode,tahun,EAIT,total_ekuitas,hasil,tingkat)values 
	('".$kode."','".$tahun."','".$EAIT."','".$total_ekuitas."','".$hasil."','".$tingkat."')");
	echo '<div class="alert alert-success">data  berhasil ditambah</div>';
	echo "<meta http-equiv=refresh content=2;url='?f1=roe&f2=roe'>";
	}else{
	echo '<div class="alert alert-danger">Data Kosong !</div>';
	echo "<meta http-equiv=refresh content=5;url='?f1=roe&f2=roe'>";
	}
}
?>
<div class="row">
        <!-- left column -->
        <div class="col-md-4">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
			
              <h3 class="box-title">Kelola Return On Equity</h3>
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
                  <select class="form-control" name="tahun">
                  <option value="-"> --Pilih Tahun-- </option>
                  <option value="2014"> 2014 </option>
                  <option value="2015"> 2015 </option>
                  <option value="2016"> 2016 </option>
 				</select>
                </div>
				 <div class="form-group">
                  <label for="exampleInputPassword1">EAIT</label>
                  <input type="text" onkeyup="angka(this);" class="form-control" name="EAIT" placeholder="EAIT">
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">Total Ekuitas</label>
                  <input type="text " onkeyup="angka(this);" class="form-control" name="total_ekuitas" placeholder="total_ekuitas">
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
				$query=$koneksi->query("select * from roe");
				?>
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Return on Equity</h3>
							</div>
							<div class="box-body">
							<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
								<th>No</th>
								<th>Perusahaan</th>
								<th>Tahun</th>
								<th>EAIT</th>
								<th>Total Ekuitas</th>
								<th>Hasil</th>
								<th>Tingkat</th>
								<th>Action</th>
					
								</tr>
							</thead>
							<?php
								while ($tampil=$query->fetch_assoc())
								{ $a++;
										$hasil_rupiah="Rp".number_format($tampil['EAIT'],2,',','.');
										$hasil="Rp".number_format($tampil['total_ekuitas'],2,',','.');
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
								<a href="javascript:;" data-id="<? echo $tampil['id_roe']?>" data-toggle="modal" data-target="#modal-konfirmasi" class="btn btn-success btn-danger fa fa-trash"></a>
								<a href="?f1=roe&f2=edit-roe&id_edit=<?=$tampil['id_roe']?>" class="btn btn-success btn-primary fa fa-edit"></a></td>
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
                <a href="javascript:;" class="btn btn-danger" id="hapus-true-data7">Hapus</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
            </div>
                 
                </div>
            </div>
        </div>					
</div>
								
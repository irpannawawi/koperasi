<?php
if($_GET["aksi"] && $_GET["nmr"]){
include_once("../library/koneksi.php");
$edit = $server->query("select * from kas where kode='".$_GET["nmr"]."'");
$editDb = $edit->fetch_assoc();
	if($_POST["pasien"]){
			include_once("../library/koneksi.php");
			$server->query("update kas set  keterangan='".$_POST["nama"]."',  tgl='".$_POST["tgl"]."', keluar='".$_POST["usia"]."' where kode='".$_GET["nmr"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=kas_keluar'>";

	}
?>
<div class="span9">
	<div class="well" style="fixed:center;">
		<b>Edit Kas Keluar</b>
		<p style="margin-top:10px;">
			<form action="" method="post" class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-lg-4">Keterangan</label>
							<div class="col-lg-4">
								<input type="text" name="nama" value="<?php echo $editDb["keterangan"];?>" required class="form-control" />
							</div>
						</div>


						<div class="form-group">
							<label class="control-label col-lg-4" for="dp1">Tanggal</label>
							<div class="col-lg-4">
								<input type="date" required name="tgl" value="<?php echo $editDb["tgl"];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Jumlah</label>
							<div class="col-lg-4">
								<input type="number" required name="usia" value="<?php echo $editDb["keluar"];?>" class="form-control" />
							</div>
						</div>



						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="pasien" value="Simpan" class="btn btn-primary" /> <a href="?menu=kas_keluar" class="btn btn-warning">Batal</a>
						</div>

					</form>
	</div>
</div>
<?php } ?>

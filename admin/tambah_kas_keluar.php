<?php
session_start();
	if($_POST["pasien"]){
			include_once("../library/koneksi.php");
			$server->query("insert into kas set kode='".$_POST["kode"]."',keterangan='".$_POST["nama"]."', tgl='".$_POST["tgl"]."',jenis='Keluar',keluar='".$_POST["usia"]."'");

			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil menambah ke database!!</b>
			</div><center>";
	}else if(isset($_POST["pasien"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}
?>
<div class="box">
	<header>
		<h5>Kas Keluar</h5>
	</header>
		<div class="body">
			<form action="" method="post" class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-lg-4">Keterangan</label>
							<div class="col-lg-4">
								<input type="text" name="nama" autofocus required class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-4">Tanggal</label>
							<div class="col-lg-2">
								<input type="date" class="form-control" name="tgl" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Jumlah</label>
							<div class="col-lg-4">
								<input type="number" required name="usia" class="form-control" placeholder="Rp." />
							</div>
						</div>



						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="pasien" value="Simpan" class="btn btn-primary" /> <a href="?menu=kas_keluar" class="btn btn-warning">Back</a>
						</div>

					</form>
	</div>
</div>

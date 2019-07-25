<?php
include_once("../library/koneksi.php");

#untuk paging (pembagian halamanan)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM login";
$pageQry = $server->query($pageSql);
$jml	 = $pageQry->num_rows;
$max	 = ceil($jml/$row);
?>
<a href="#myModal" class="btn btn-primary btn-rect" data-toggle="modal"><i class='icon icon-white icon-plus'></i> Tambah User</a><p>
<?php
	if($_POST["user"]){
			include_once("../library/koneksi.php");
			$username 	= $_POST['username'];
			$password 	= $_POST['password'];
			$nama 		= $_POST['nama'];
			$alamat 	= $_POST['alamat'];
			$level 		= $_POST['level'];
			$sql 		= "INSERT INTO login(username, password, nama, alamat, level) VALUES('$username', '$password', '$nama', '$alamat', '$level')";
			$server->query($sql);
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil menambah ke database!!</b>
			</div><center>";
	}else if(isset($_POST["user"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}

user(); //memanggil function user
?>
<div class="panel panel-default">
	<div class="panel-heading">
		Daftar User
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Username</th>
						<th>Nama Lengkap</th>
						<th>Alamat</th>
						<th>Level</th>
						<th width="90">Aksi</th>
					</tr>
				</thead>
			<?php
				$usSql = "SELECT * FROM login ORDER BY kd_user DESC LIMIT $hal, $row";
				$usQry = $server->query($usSql);
				$nomor  = 0; 
				
				while ($us = $usQry->fetch_assoc()) {
					$nomor++;
			?>
				<tbody>
					<tr>
						<td><?php echo $nomor;?></td>
						<td><?php echo $us['username']; ?></td>
						<td><?php echo $us['nama']; ?></td>
						<td><?php echo $us['alamat']; ?></td>
						<td><?php echo $us['level']; ?></td>
						<td>
						  <div class='btn-group'>
						  <a href="?menu=user_del&aksi=hapus&nmr=<?php echo $us['kd_user']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><i class="icon-remove icon-white"></i></a>
						  </div>
						</td>
					</tr>
				</tbody>
			<?php } ?>
					<tr>
						<td colspan="6" align="right">
						<?php
						for($h = 1; $h <= $max; $h++){
							$list[$h] = $row*$h-$row;
							echo "<ul class='pagination pagination-sm'><li><a href='?menu=user&hal=$list[$h]'>$h</a></li></ul>";
						}
						?></td>
					</tr>
			</table>
		</div>
	</div>
</div>
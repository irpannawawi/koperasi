<?php
include_once("../library/koneksi.php");
include_once("../admin/tglindo.php");

#untuk paging (pembagian halamanan)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM kas";
$pageQry = $server->query($pageSql);
$jml	 = $pageQry->num_rows;
$max	 = ceil($jml/$row);
?>

<div class="panel panel-default">
	<div class="panel-heading">
		Manajemen Kas Rekapitulasi
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
					<th>No</th>
						<th>Keterangan</th>
						<th>Tanggal</th>
						<th>Jenis</th>
						<th>Masuk</th>
						<th>Keluar</th>
					</tr>
				</thead>
			<?php
				$pasienSql = "SELECT * FROM kas ORDER BY kode DESC LIMIT $hal, $row";
				$pasienQry = $server->query($pasienSql);
				$nomor  = 0;
				while ($pasien = $pasienQry->fetch_assoc()) {
				$nomor++;
			?>
				<tbody>
					<tr>
						<td><?php echo $nomor;?></td>
						<td><?php echo $pasien['keterangan'];?></td>
						<td><?php echo TanggalIndo($pasien['tgl']);?></td>
						<td><?php echo $pasien['jenis'];?></td>
						<td><?php echo empty($pasien['jumlah']) ? "" : "Rp.".number_format($pasien['jumlah']).",-"; ?></td>
						<td><?php echo empty($pasien['keluar']) ? "" : "Rp.".number_format($pasien['keluar']).",-"; ?></td>
					</tr>
				</tbody>
			<?php } ?>
					<tr>
						<td colspan="7" align="right">
						<?php
						for($h = 1; $h <= $max; $h++){
							$list[$h] = $row*$h-$row;
							echo "<ul class='pagination pagination-sm'><li><a href='?menu=kas_masuk&hal=$list[$h]'>$h</a></li></ul>";
						}
						?></td>
					</tr>
			</table>
		</div>
	</div>
</div>

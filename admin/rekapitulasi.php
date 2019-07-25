<?php
include_once("../library/koneksi.php");
include_once("tglindo.php");

#untuk paging (pembagian halamanan)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM kas";
$pageQry = $server->query($pageSql);
$jml	 = $pageQry->num_rows;
$max	 = ceil($jml/$row);
?>
<a href="?menu=tambah_kas" class="btn btn-primary btn-rect"><i class='icon icon-white icon-plus'></i> Entry</a><p>
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

						<th>Aksi</th>
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
						<td>Rp.<?php echo number_format($pasien['jumlah']) ?>,-</td>
						<td>Rp.<?php echo number_format($pasien['keluar']) ?>,-</td>
						<td>
						  <div class='btn-group'>
						  <a href="?menu=hapus_kas_masuk&aksi=hapus&nmr=<?php echo $pasien['kode']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><i class="icon-remove icon-white"></i></a>
						  <a href="?menu=edit_kas_masuk&aksi=edit&nmr=<?php echo $pasien['kode']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i> </a>
						  </div>
						</td>
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

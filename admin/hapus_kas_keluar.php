<?php
include_once("../library/koneksi.php");
if($_GET){
	if($_GET["aksi"] && $_GET["nmr"]){
		$del = "DELETE FROM kas WHERE kode='".$_GET["nmr"]."'";
		$delDb = $server->query($del);
		if($delDb){
			echo "<meta http-equiv='refresh' content='0; url=?menu=kas_keluar'>";
		}
	}else{
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Data yang dihapus tidak ada!!</b>
			</div><center>";
	}
}
?>
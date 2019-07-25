<body onLoad="javascript:print()">
<?php
include "../library/koneksi.php";
include "../admin/fungsi.php";
include_once("../admin/tglindo.php");
?>
<?php
$tgl=date('Y-m-d');
$tgl1=$_POST['tgl1'];
$bln1=$_POST['bln1'];
$thn1=$_POST['thn1'];
$tgl2=$_POST['tgl2'];
$bln2=$_POST['bln2'];
$thn2=$_POST['thn2'];

?>
<h3 align="center" class="style1">Laporan Rekapitulasi Kas Koperasi Gang Mawar </h3>

<div align="center">DARI TANGGAL  <?php echo"$tgl1";?> / <?php echo"$bln1";?>/ <?php echo"$thn1";?> SAMPAI DENGAN TANGGAL  <?php echo"$tgl2";?> / <?php echo"$bln2";?>/ <?php echo"$thn2";?></div>
<table border="1"  width="100%" align="center" cellpadding="3" cellspacing="1" bgcolor="#33CCFF" >
<tr>
<td width="29%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Keterangan </strong></td>
<td width="14%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Tanggal </strong></td>
<td width="12%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Jenis </strong></td>
<td width="18%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Jumlah </strong></td>
</tr>
<?php

$ambildata  = $server->query("SELECT * FROM kas WHERE tgl >= '$thn1-$bln1-$tgl1' AND tgl <= '$thn2-$bln2-$tgl2'");
if(!$ambildata){
  echo $server->error;
  die;
}
$cekdata    = $ambildata->num_rows;
if($cekdata=='0'){
echo "Maaf Data Yang anda cari tidak ada";
}
while($cetakdata=$ambildata->fetch_assoc()){
$total_masuk=$cetakdata['jumlah'];
@$hitung+=$total_masuk;
$total_keluar=$cetakdata['keluar'];
@$hitung1+=$total_keluar;
$keseluruhan=$hitung-$hitung1;

?>

<tr>
<td bgcolor="#FFFFFF"><?php echo $cetakdata['keterangan']?></td>
<td bgcolor="#FFFFFF"><?php echo TanggalIndo($cetakdata['tgl'])?></td>
<?php
if ($cetakdata['jenis'] == 'Masuk') {
?>
<td bgcolor="#FFFFFF" style="color:blue;"><?php echo $cetakdata['jenis']?></td>
  <td bgcolor="#FFFFFF" style="color:blue;"><?php echo "Rp.".number_format($cetakdata['jumlah']).",-"?></td>
  <?php
}
else{
?>
<td bgcolor="#FFFFFF" style="color:red;"><?php echo $cetakdata['jenis']?></td>
<td bgcolor="#FFFFFF" style="color:red;"><?php echo "Rp.".number_format($cetakdata['keluar']).",-"?></td>
<?php
}
 ?>
</tr>
<?php } ?>
<tr>
<td colspan="3" align="left" valign="middle" bgcolor="#71DCFF"><div align="left"><strong>Total Kas Masuk</strong></div>
  <div align="center"><strong></strong></div>  <div align="center"><strong></strong></div>  <div align="center"><strong> </strong></div>  <div align="center"><strong> </strong></div></td>
<td align="left" valign="middle" bgcolor="#71DCFF"><strong>Rp.<?php echo number_format(@$hitung);?>,- </strong></td>
</tr>
<tr>
<td colspan="3" align="left" valign="middle" bgcolor="#71DCFF"><strong>
  <div align="left"><strong>Total Kas Keluar   </strong></div></td>
<td align="left" valign="middle" bgcolor="#71DCFF"><strong>Rp.<?php echo number_format(@$hitung1);?>,-  </strong></td>
</tr>

<tr>
<td colspan="2" align="left" valign="middle" bgcolor="#71DCFF"><strong>
  <div align="left"><strong>Total Saldo Kas </strong></div></td>
  <td bgcolor="#71DCFF">Total Kas Masuk - Total Kas Keluar</td>
<td align="left" valign="middle" bgcolor="#71DCFF"><strong>Rp.<?php echo number_format(@$keseluruhan);?>,-  </strong></td>
</tr>
</table>

<br>
							  <div class="col-lg-12 col-md-4" align="right" style="font-style:italic;">
								gang mawar, <?php echo TanggalIndo($tgl); ?> <br/><br/><br/><br/>
								Koordinator, <br>
								EKO
							  </div>

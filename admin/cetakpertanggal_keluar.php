<?php

include "../library/koneksi.php";
include "fungsi.php";
include_once("tglindo.php");
?>
<?php


$tgl=date('Y-m-d');
$tglorder=$_POST['tanggal'];
$sql=$server->query("select * from kas
where tgl like '$_POST[tanggal]%' and jenis='Keluar' order by kode asc");
?>


<style type="text/css">
<!--
.style1 {font-size: 18px}
-->
</style>
<body onLoad="javascript:print()">
                            <table width="100%">
							<tr>
							<td><div align="center">
							  <h4 align="center" class="style1">Laporan Kas Keluar Koperasi Gang Mawar </h4></td>
							</tr>
							</table>
                        </div>
						<form name="sda" role="form" method="post">
                        <div class="panel-body">
						 <div class="col-lg-12">
                        	<div class="row">
							<CenteR>Laporan Kas Keluar Per-Tanggal :  <?php if ($_POST['tanggal'] == '') {echo "Semua Waktu";}else{ echo TanggalIndo($_POST['tanggal']);}?>
							</center>
										<br>
										   <div class="dataTable_wrapper">
                                <table width="100%" border="1" class='table table-bordered table-striped'>
                                    <thead>
                                        <tr>
                                            <th bgcolor="#CCCCCC">No</th>
											<th bgcolor="#CCCCCC">Tanggal</th>
                                            <th bgcolor="#CCCCCC">Keterangan</th>

											<th bgcolor="#CCCCCC">Jumlah</th>

                                        </tr>
                                    </thead>
                                    <tbody>
										<?php
										$no1=1;
										$total=0;

										while($data= $sql->fetch_assoc()){
										?>

										<tr>
											<td ><?php echo $no1; ?></td>
											<td><?php echo TanggalIndo($data['tgl']);?></td>
											 <td><?php echo $data['keterangan']; ?></td>
											 <td><?php echo  "Rp.".number_format($data['keluar']).",-" ?></td>

										</tr>
										<?php
											$no1++;
											$total=$total+$data['keluar'];
										}
										?>
										<Tr>
										<th colspan="3">Total Keseluruhaan</th>
										<td colspan="1"><b>Rp.<?php echo number_format($total) ; ?>,-</b></td>
										</tr>
                                    </tbody>
                                </table>
                            </div>
							</div>
						  </div>

<br>
							  <div class="col-lg-12 col-md-4" align="right" style="font-style:italic">
								Gang Mawar, <?php echo TanggalIndo($tgl); ?> <br/><br/><br/><br/>
								Koordinator,<br>
								EKO
							  </div>
</form>

                            <!-- /.row (nested) -->

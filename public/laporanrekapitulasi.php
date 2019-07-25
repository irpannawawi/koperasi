<style type="text/css">
<!--
.style1 {
	font-size: 16px;
	font-weight: bold;
}
-->
</style>
<div align="center"><span class="style1">Laporan Rekapitulasi Kas Koperasi GANG MAWAR</span><br /><br />
</div>
<div align="center">
<form id="form1" name="form1" method="post" action="cetak.php" target="_blank">
  <select name="tgl1" id="tgl1">
<option>	01	</option>
<option>	02	</option>
<option>	03	</option>
<option>	04	</option>
<option>	05	</option>
<option>	06	</option>
<option>	07	</option>
<option>	08	</option>
<option>	09	</option>
<option>	10	</option>
<option>	11	</option>
<option>	12	</option>
<option>	13	</option>
<option>	14	</option>
<option>	15	</option>
<option>	16	</option>
<option>	17	</option>
<option>	18	</option>
<option>	19	</option>
<option>	20	</option>
<option>	21	</option>
<option>	22	</option>
<option>	23	</option>
<option>	24	</option>
<option>	25	</option>
<option>	26	</option>
<option>	27	</option>
<option>	28	</option>
<option>	29	</option>
<option>	30	</option>
<option>	31	</option>

</select>
<select name="bln1" id="bln1">
<option	 value="01"	>	Januari	</option>
<option	 value="02"	>	Februari	</option>
<option	 value="03"	>	Maret	</option>
<option	 value="04"	>	April	</option>
<option	 value="05"	>	Mei	</option>
<option	 value="06"	>	Juni	</option>
<option	 value="07"	>	Juli	</option>
<option	 value="08"	>	Agustus	</option>
<option	 value="09"	>	September	</option>
<option	 value="10"	>	Oktober	</option>
<option	 value="11"	>	Nopember	</option>
<option	 value="12"	>	Desember	</option>

</select>
<select name="thn1" id="thn1">
<?php for($i=2017;$i<=date("Y");$i++){ ?>
<option><?php echo $i?></option>
<?php } ?>
</select>
S.d
<select name="tgl2" id="tgl2">
<option> 01 </option>
<option> 02 </option>
<option> 03 </option>
<option> 04 </option>
<option> 05 </option>
<option> 06 </option>
<option> 07 </option>
<option> 08 </option>
<option> 09 </option>
<option> 10 </option>
<option> 11 </option>
<option> 12 </option>
<option> 13 </option>
<option> 14 </option>
<option> 15 </option>
<option> 16 </option>
<option> 17 </option>
<option> 18 </option>
<option> 19 </option>
<option> 20 </option>
<option> 21 </option>
<option> 22 </option>
<option> 23 </option>
<option> 24 </option>
<option> 25 </option>
<option> 26 </option>
<option> 27 </option>
<option> 28 </option>
<option> 29 </option>
<option> 30 </option>
<option> 31 </option>
</select>
<select name="bln2" id="select2">
<option	 value="01"	> Januari </option>
<option	 value="02"	> Februari </option>
<option	 value="03"	> Maret </option>
<option	 value="04"	> April </option>
<option	 value="05"	> Mei </option>
<option	 value="06"	> Juni </option>
<option	 value="07"	> Juli </option>
<option	 value="08"	> Agustus </option>
<option	 value="09"	> September </option>
<option	 value="10"	> Oktober </option>
<option	 value="11"	> Nopember </option>
<option	 value="12"	> Desember </option>
</select>
<select name="thn2" id="select3">
<?php for($i=2017;$i<=date("Y");$i++){ ?>
<option>
<?php echo $i?>
</option>
<?php } ?>
</select>
<input type="submit" name="Submit" value="Cetak" class="btn btn-primary "/>
</form>
</div>

<?php
	$host 	= "localhost";
	$user 	= "root";
	$pass 	= "";
	$db		= "kas";	
	
/*
	$host 	= "sql101.epizy.com";
	$user 	= "epiz_24227658";
	$pass 	= "ZJQMQVYBFA1Rx3";
	$db		= "epiz_24227658_kas";
*/
	$server = new mysqli($host, $user, $pass, $db);

	
	if(!$server){
		echo "Maaf, Gagal tersambung dengan server !";
	}

?>
<?php
	require_once("includes/db.php");
	$gelen = $_GET['sayfa'];
	
	$sorgu = mysql_query("delete from tbl_iletisim where ilet_id='$gelen'");
	if($sorgu){
	echo "<script>alert('Bilgiler basariyla gonderildi..');</script>";
	header('refresh: 0; url=/admin/gelen_mesaj.php'); 
	exit();	
	}
?>
<?php
	require_once("includes/db.php");
	$gelen = $_GET['sayfa'];
	
	$sorgu = mysql_query("delete from sizden_gelen where siz_id='$gelen'");
	if($sorgu){
	echo "<script>alert('Yorum Silindi..');</script>";
	header('refresh: 0; url=/admin/yorumListe.php'); 
	exit();	
	}
?>
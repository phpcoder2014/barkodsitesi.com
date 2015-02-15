<?php
	require_once("includes/db.php");
	$gelen = $_GET['sayfa'];
	
	$sorgu = mysql_query("delete from tbl_makale where makale_id='$gelen'");
	if($sorgu){
	echo "<script>alert('Makale Silindi..');</script>";
	header('refresh: 0; url=/admin/index.php'); 
	exit();	
	}
?>
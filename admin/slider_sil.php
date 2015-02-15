<?php
	require_once("includes/db.php");
	$gelen = $_GET['sayfa'];
	
	$sorgu = mysql_query("delete from tbl_slider where slider_id='$gelen'");
	if($sorgu){
echo "<script>alert('Slider Silindi..');</script>";
header("Refresh: 1; url=sliderListe.php");
	exit();	
	}
?>
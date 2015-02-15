<meta charset="utf-8">
<?php
error_log("E_ALL");

include("includes/db.php");

$baslik = $_POST["baslik"];
$kisa_aciklama= $_POST["kisa_aciklama"];
$zaman= date("d.my.y H:i:s");
$import= $_FILES["import"]["name"];



$baglan = mysql_query("insert into tbl_slider (baslik,kisa_aciklama,resim,zaman) values('$baslik','$kisa_aciklama','$import','$zaman');") or die("Hata Kayit Eklenmedi");

$baglan = mysql_query("select slider_id from tbl_slider where baslik='".$baslik."' and kisa_aciklama='".$kisa_aciklama."' and zaman = '".$zaman."';") or die("Hata. Uyelik bulunamadı.");
           if($value=mysql_fetch_array($baglan)){
			$id=$value['slider_id'];
			$import=$id."_".$import;
			
			$target_path = "slider/";

		$target_path = $target_path . basename( $import); 

		if(move_uploaded_file($_FILES['import']['tmp_name'], $target_path)) {
			echo str_repeat("<br>", 8)."<center><h1>Slider Yükleniyor..</h1></center>";
			header("Refresh: 2; url=slider.php");
		} else{
			echo "işlemlerinizde hata var, lütfen tekrar deneyiniz.!";
		}
			
			$baglan = mysql_query("UPDATE tbl_slider SET resim = '$import' where slider_id='$id';") or die("Hata Kayit Eklenmedi");
	
			}
?>

<?php
		require("includes/db.php");
			$id = $_GET['guncelle'];
			$baslik			= $_POST['baslik'];
			$yazan 			= $_POST['yazan'];
			$detay_aciklama = $_POST['detay_aciklama'];
			$zaman 			= date("d.m.Y H:i");

			$sorgu = mysql_query ("UPDATE tbl_hakkimiz SET baslik='$baslik', yazan='$yazan', detay='$detay_aciklama', zaman='$zaman' WHERE hak_id='$id'");
			if($sorgu){
			echo "<script>alert('Hakkimizda guncellendi..');</script>";
			header('refresh: 1; url=/admin/hakkimiz_admin.php'); 
			exit();
			}
			
?>	
<?php
		require("includes/db.php");
			
			if($_GET['goster'] == "kaydet"){
			$baslik			= $_POST['baslik'];
			$yazan 			= $_POST['yazan'];
			$kisa_aciklama	= $_POST['kisa_aciklama'];
			$zaman 			= date("d.m.Y H:i");

			$sorgu = mysql_query("insert into sizden_gelen(baslik,spot,yazan,zaman) 
			values('$baslik','$yazan','$kisa_aciklama','$zaman')");
			if($sorgu){
			echo "<script>alert('Bilgiler basariyla gonderildi..');</script>";
			header('refresh: 1; url=/admin/yorum.php'); 
			exit();
			}
			}
?>	
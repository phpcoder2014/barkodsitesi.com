<?php
		require("includes/db.php");
			
			if($_GET['goster'] == "kaydet"){
			$baslik			= $_POST['baslik'];
			$yazan 			= $_POST['yazan'];
			$etiket 		= $_POST['etiket'];
			$kisa_aciklama	= $_POST['kisa_aciklama'];
			$detay_aciklama = $_POST['detay_aciklama'];
			$zaman 			= date("d.m.Y H:i");

			$sorgu = mysql_query("insert into tbl_makale(baslik,yazan,etiket,spot,detay,zaman) 
			values('$baslik','$yazan','$etiket','$kisa_aciklama','$detay_aciklama','$zaman')");
			if($sorgu){
			echo "<script>alert('Bilgiler basariyla gonderildi..');</script>";
			header('refresh: 1; url=/admin/index.php'); 
			exit();
			}
			}
?>	
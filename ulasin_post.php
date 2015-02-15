<?php
		require("includes/db.php");

		$adi		= $_POST['adi'];
		$email 		= $_POST['email'];
		$telefon	= $_POST['telefon'];
		$mesaj_turu = $_POST['mesaj_turu'];
		$mesaj_konu = $_POST['mesaj_konu'];
		$mesaj 		= $_POST['mesaj'];
		$zaman 		= date("d.m.Y H:i");

			$sorgu = mysql_query("insert into tbl_iletisim(adi,email,telefon,mesaj_turu,mesaj_konu,mesaj,zaman) 
			values('$adi','$email','$telefon','$mesaj_turu','$mesaj_konu','$mesaj','$zaman')");
			if($sorgu){
				echo "<script>alert('Bilgiler basariyla gonderildi..');</script>";
				header('refresh: 1; url=/barkod/ulasin.php'); 
				exit();
			}

?>
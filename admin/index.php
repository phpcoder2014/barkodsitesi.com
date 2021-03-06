<?php require_once("includes/db.php");?>
<?php  session_start();
  if(!isset($_SESSION["login"])){
	echo str_repeat("<br>", 8)."<center><h1> Sisteme Yonleniyor..</h1></center>";
	header("Refresh: 2; url=login.php");
  }else{
?>
<!doctype html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	
	<title>Patent Tescil Ofisi Yönetim</title>
	
	<meta name="description" content="">
	<meta name="author" content="revaxarts.com">
	
	
	<!-- Google Font and style definitions -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:regular,bold">
	<link rel="stylesheet" href="css/style.css">
	
	<!-- include the skins (change to dark if you like) -->
	<link rel="stylesheet" href="css/light/theme.css" id="themestyle">
	<!-- <link rel="stylesheet" href="css/dark/theme.css" id="themestyle"> -->
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css">
	<![endif]-->
	
	<!-- Apple iOS and Android stuff -->
	<meta name="apple-mobile-web-app-capable" content="no">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
	
	<!-- Apple iOS and Android stuff - don't remove! -->
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,maximum-scale=1">
	
	<!-- Use Google CDN for jQuery and jQuery UI -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js"></script>
	
	<!-- Loading JS Files this way is not recommended! Merge them but keep their order -->
	
	<!-- some basic functions -->
	<script src="js/functions.js"></script>
		
	<!-- all Third Party Plugins and Whitelabel Plugins -->
	<script src="js/plugins.js"></script>
	<script src="js/editor.js"></script>
	<script src="js/calendar.js"></script>
	<script src="js/flot.js"></script>
	<script src="js/elfinder.js"></script>
	<script src="js/datatables.js"></script>
	<script src="js/wl_Alert.js"></script>
	<script src="js/wl_Autocomplete.js"></script>
	<script src="js/wl_Breadcrumb.js"></script>
	<script src="js/wl_Calendar.js"></script>
	<script src="js/wl_Chart.js"></script>
	<script src="js/wl_Color.js"></script>
	<script src="js/wl_Date.js"></script>
	<script src="js/wl_Editor.js"></script>
	<script src="js/wl_File.js"></script>
	<script src="js/wl_Dialog.js"></script>
	<script src="js/wl_Fileexplorer.js"></script>

	<script src="js/wl_Gallery.js"></script>
	<script src="js/wl_Multiselect.js"></script>
	<script src="js/wl_Number.js"></script>
	<script src="js/wl_Password.js"></script>
	<script src="js/wl_Slider.js"></script>
	<script src="js/wl_Store.js"></script>
	<script src="js/wl_Time.js"></script>
	<script src="js/wl_Valid.js"></script>
	<script src="js/wl_Widget.js"></script>
	
	<!-- configuration to overwrite settings -->
	<script src="js/config.js"></script>
		
	<!-- the script which handles all the access to plugins etc... -->
	<script src="js/script.js"></script>
	
	
</head>
<body>
				<div id="pageoptions">
			<ul>
				<li><a href="logout.php">Güvenli Çıkış</a></li>
				<li><a href="#" id="wl_config">DB Ayarları</a></li>
				<li><a href="#">Ayarlar</a></li>
			</ul>
			<div>
						<h3>Place for some configs</h3>
						<p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores.</p>
			</div>
		</div>

			<header>
		<div id="logo">
			<a href="index.php">Deneme Yazı</a>
		</div>
		<div id="header">
		</div>
	</header>
<?php include_once("includes/menu.php");?>	
		<section id="content">			
			<div class="g12">
			<h1>Makale <span><a href="#" class="small">acilbarkod.com</a></span></h1>		
			<p>Tüm makale işlemlerinizi buradan yapabilirsiniz<br>
			Makale Listeleri ve Kayıt İşlemleri</p>
				<form id="form" action="makale_ekle.php?goster=kaydet" method="post" autocomplete="off">
					<fieldset>
						<label>YENI MAKALE KAYDI</label>
						<section><label for="text_field">Başlık</label>
							<div><input type="text" name="baslik"></div>
						</section>
						<section><label for="required_field">Yazan</label>
							<div><input type="text" name="yazan" title="Yazanın Adı"></div>
						</section>						
						<section><label for="required_field">Etiketler</label>
							<div><input type="text" name="etiket" title="Yazanın Adı"></div>
						</section>
						<section><label for="required_field">Kısa Açıklama<br><span>Lütfen kısa açıklama giriniz..</span></label>
							<div><textarea name="kisa_aciklama"></textarea>
							</div>
						</section>
						<section><label for="required_field">Detaylı Açıklama<br><span>Lütfen detaylı açıklama giriniz..</span></label>
							<div><textarea id="textarea_wysiwyg" name="detay_aciklama" class="html" rows="12"></textarea></div>
							
						</section>
						<section>
							<div>
							<button class="reset">Temizle</button>
							<button type="submit" class="big" >Makale Gönder</button>
							</div>
						</section>
					</fieldset>			
				</form>
			</div>
		</section><!-- end div #content -->
<footer>Copyright by Patent tescil ofisi 2014</footer>
</body>
</html>
<?php } ?>	
<?php 
$sayfada = 5; // sayfada gösterilecek içerik miktarını belirtiyoruz.
 
$sorgu = mysql_query('SELECT COUNT(*) AS toplam FROM mesajlar');
$sonuc = mysql_fetch_assoc($sorgu);
$toplam_icerik = $sonuc['toplam'];
 
$toplam_sayfa = ceil($toplam_icerik / $sayfada);
 
$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
 
if($sayfa < 1) $sayfa = 1; 
if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 
 
$limit = ($sayfa - 1) * $sayfada;
$sorgu = mysql_query('SELECT * FROM mesajlar LIMIT ' . $limit . ', ' . $sayfada);
 
while($icerik = mysql_fetch_assoc($sorgu)) {
   // ...
}
 
for($s = 1; $s <= $toplam_sayfa; $s++) {
   if($sayfa == $s) { // eğer bulunduğumuz sayfa ise link yapma.
      echo $s . ' '; 
   } else {
      echo '<a href="?sayfa=' . $s . '">' . $s . '</a> ';
   }
}
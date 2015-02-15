<?php include_once("includes/header.php"); ?>
<?php include_once("includes/menu.php"); ?>	
<script src="js/wl_Form.js"></script>
		<section id="content">			
			<div class="g12">
			<h1>Makale Listeleri<span><a href="#" class="small">acilbarkod.com</a></span></h1>		
			<p>Tüm makale işlemlerinizi buradan yapabilirsiniz<br>
			Makale Listeleri ve Kayıt İşlemleri</p>
				<form id="form" action="makale_ekle.php?goster=kaydet" method="post" autocomplete="off">
					<fieldset>
						<label>Makale Listeleri</label>
					<div class="g12">
				<table class="datatable">
				<thead>
					<tr>
						<th>Sıra ID</th><th>Başlık</th><th>Kısa Açıklama</th><th>RESIM</th><th>Durum</th>
					</tr>
				</thead>
				<tbody>
				<?php 				
				$sorgu = mysql_query("select * from tbl_slider order by slider_id desc");
						while($row = mysql_fetch_assoc($sorgu)){
				?>
					<tr class="gradeX">
						<td><?php echo $row['slider_id']; ?></td><td><?php echo $row['baslik']; ?></td><td><?php echo $row['kisa_aciklama']; ?></td><td class="c"><img src="slider/<?php echo $row['resim']; ?>" width="100" height="50" /></td><td class="c"><a href="slider_sil.php?sayfa=<?php echo $row['slider_id']; ?>"><label class="btn red">SIL</label></td>
					</tr>
				<?php } ?>				
				</tbody>
				</table>
					</div>
					</fieldset>		
				</form>
			</div>
		</section><!-- end div #content -->
<?php include_once("includes/footer.php"); ?>		
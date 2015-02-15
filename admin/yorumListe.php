<?php include_once("includes/header.php"); ?>
<?php include_once("includes/menu.php"); ?>	
<script src="js/wl_Form.js"></script>
		<section id="content">			
			<div class="g12">
			<h1>Yorum Listeleri<span><a href="#" class="small">acilbarkod.com</a></span></h1>		
			<p>Tüm yorum işlemlerinizi buradan yapabilirsiniz<br>
			Yorum Listeleri ve Kayıt İşlemleri</p>
				<form id="form" action="makale_ekle.php?goster=kaydet" method="post" autocomplete="off">
					<fieldset>
						<label>Yorum Listeleri</label>
					<div class="g12">
				<table class="datatable">
				<thead>
					<tr>
						<th>Sıra ID</th><th>Başlık</th><th>Kısa Açıklama</th><th>Zaman</th><th>Yazan</th><th>Durum</th>
					</tr>
				</thead>
				<tbody>
				<?php 				
				$sorgu = mysql_query("select * from sizden_gelen order by siz_id desc");
						while($row = mysql_fetch_assoc($sorgu)){
				?>
					<tr class="gradeX">
						<td><?php echo $row['siz_id']; ?></td><td><?php echo $row['baslik']; ?></td><td><?php echo $row['spot']; ?></td><td class="c"><?php echo $row['zaman']; ?></td><td class="c"><?php echo $row['yazan']; ?></td><td class="c"><a href="yorum_sil.php?sayfa=<?php echo $row['siz_id']; ?>"><label class="btn red">SIL</label></td>
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
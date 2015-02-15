<?php include("includes/header.php"); ?>  
    <div id="k-body"><!-- content wrapper -->
    
    	<div class="container"><!-- container -->
        
        	<div class="row"><!-- row -->
            
                <div id="k-top-search" class="col-lg-12 clearfix"><!-- top search -->
                
                    <form action="#" id="top-searchform" method="get" role="search">
                        <div class="input-group">
                            <input type="text" name="s" id="sitesearch" class="form-control" autocomplete="off" placeholder="Type in keyword(s) then hit Enter on keyboard" />
                        </div>
                    </form>
                    
                    <div id="bt-toggle-search" class="search-icon text-center"><i class="s-open fa fa-search"></i><i class="s-close fa fa-times"></i></div><!-- toggle search button -->
                
                </div><!-- top search end -->
            
            	<div class="k-breadcrumbs col-lg-12 clearfix"><!-- breadcrumbs -->
                
                	<ol class="breadcrumb">
                    	<li><a href="#">Anasayfa</a></li>
                        <li class="active">Barkod nedir?</li>
                    </ol>
                    
                </div><!-- breadcrumbs end -->
                
            </div><!-- row end -->
<?php include("includes/slider.php"); ?>
            <div class="row no-gutter"><!-- row -->
                
              
                
                <div class="row no-gutter"><!-- row -->
                
                <div class="col-lg-8 col-md-8"><!-- doc body wrapper -->
                	
                    <div class="col-padded"><!-- inner custom column -->
                    
                    	<div class="row gutter"><!-- row -->
                        
                        	<div class="col-lg-12 col-md-12">
                    
                            	<h1 class="page-title">Barkod hakkında bilmedikleriniz</h1><!-- category title -->
                            
                            </div>
                        
                        </div><!-- row end -->
                    
                    	<div class="row gutter"><!-- row -->
                        
                        	<div class="col-lg-12 col-md-12">
                            	<?php 
								$sayfada = 5;
								$sorgu = mysql_query('SELECT COUNT(*) AS toplam FROM tbl_makale order by makale_id desc');
								$sonuc = mysql_fetch_assoc($sorgu);
								$toplam_icerik = $sonuc['toplam'];
								$toplam_sayfa = ceil($toplam_icerik / $sayfada);
								$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;								 
								if($sayfa < 1) $sayfa = 1; 
								if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 								
								$limit = ($sayfa - 1) * $sayfada;
								$sorgu = mysql_query('SELECT * FROM tbl_makale LIMIT ' . $limit . ', ' . $sayfada);
								while($row = mysql_fetch_assoc($sorgu)){	

								?>
                            	<div class="up-event-wrapper"><!-- event summary -->
                                
                                    <h1 class="title-median"><a href="makale_detay.php?sayfa=<?php echo $row['makale_id']; ?>" title="Annual alumni game"><?php echo $row['baslik']; ?></a></h1>
                                    
                                    <div class="up-event-meta clearfix">
                                        <div class="up-event-date"><?php echo $row['zaman']; ?></div><div class="up-event-time">Abdurrahman Taşçı</div>
                                    </div>
                                    
                                    <p><?php echo $row['spot']; ?></p>
                                
                                </div><!-- event summary end -->
								<?php } ?>
                            </div>
                        
                        </div><!-- row end --> 
                        
                        <div class="row gutter"><!-- row -->
                        
                        	<div class="col-lg-12">
                        
                                <ul class="pagination pull-right"><!-- pagination -->
								<?php for($s = 1; $s <= $toplam_sayfa; $s++) {
								   if($sayfa == $s) { // eğer bulunduğumuz sayfa ise link yapma.
									  echo '<li><a href="?sayfa=' . $s . '">' . $s . '</a></li> ';
								   } else {
									  echo '<li><a href="?sayfa=' . $s . '">' . $s . '</a></li> ';
								   }
								} ?>
														
                                </ul><!-- pagination end -->
                            </div>
                            
                        </div><!-- row end -->                 
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- doc body wrapper end -->
                
                <div class="col-lg-4 col-md-4"><!-- misc wrapper -->
                	
                    <div class="col-padded col-shaded"><!-- inner custom column -->
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_course_search"><!-- widget -->
                            
                            	<h1 class="title-titan" style="font-family: 'Poiret One', cursive; color:#000; font-size:32px;">0(212) 664 76 54</h1>
                                <span class="help-block">* 7 / 24 müşteri desteğimiz için arayabilirsiniz.</span>
                                <form role="search" method="get" id="course-finder" action="#">
                                    <div class="input-group">
                                        <input type="text" placeholder="E-Posta adresin..." autocomplete="off" class="form-control" id="find-course" name="find-course" />
                                        <span class="input-group-btn"><button type="submit" class="btn btn-default">GIT!</button></span>										
                                    </div>
									<span class="help-block">* Kampanyalarımızdan haberlerimizden anlık haberdar olmak istiyorsanız bize katılın.</span>
                                </form>                           
                            </li><!-- widget end -->  
							
                            <li class="widget-container widget_text"><!-- widget -->                            
                            	<a href="#" class="custom-button cb-green" title="How to apply?">
                                	<i class="custom-button-icon fa fa-check-square-o"></i>
                                    <span class="custom-button-wrap">
                                    	<span class="custom-button-title">Belge ve arastırma</span>
                                        <span class="custom-button-tagline">Araştırma için evrak ve bilgi</span>
                                    </span>
                                    <em></em>
                                </a>
                                
                            	<a href="#" class="custom-button cb-gray" title="Campus tour">
                                	<i class="custom-button-icon fa  fa-play-circle-o"></i>
                                    <span class="custom-button-wrap">
                                    	<span class="custom-button-title">Kayıt islemleri</span>
                                        <span class="custom-button-tagline">Kayıt işlemleri aşamaları...</span>
                                    </span>
                                    <em></em>
                                </a>
                                
                            	<a href="#" class="custom-button cb-yellow" title="Prospectus">
                                	<i class="custom-button-icon fa  fa-leaf"></i>
                                    <span class="custom-button-wrap">
                                    	<span class="custom-button-title">Sonuçlandırma</span>
                                        <span class="custom-button-tagline">Tecil kaydı sonuçlandırma!</span>
                                    </span>
                                    <em></em>
                                </a>
                            
                            </li><!-- widget end -->
                            
                            <li class="widget-container widget_sofa_twitter"><!-- widget -->
                            
                            	<ul class="k-twitter-twitts list-unstyled">
                                
                                    <li class="twitter-twitt">
                                    	<p>
                                        <div class="fb-facepile" data-href="https://www.facebook.com/FacebookDevelopers" data-max-rows="1" data-colorscheme="light" data-size="medium" data-show-count="true"></div>
                                        </p>
                                    </li>                                
                                </ul>
<?php include("includes/footer.php"); ?>
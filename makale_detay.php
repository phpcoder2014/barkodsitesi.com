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
                                <?php 
								$detay = $_GET['sayfa'];
								$sorgu = mysql_query("SELECT * FROM tbl_makale where makale_id='$detay'");
								while($row = mysql_fetch_assoc($sorgu)){	
								?> 
                            	<h1 class="page-title"><?php echo $row['baslik']; ?></h1><!-- category title -->
                            
                            </div>
                        
                        </div><!-- row end -->
                    
                    	<div class="row gutter"><!-- row -->
                        
                        	<div class="col-lg-12 col-md-12">

                            	<div class="up-event-wrapper"><!-- event summary -->                                  
                                    <div class="up-event-meta clearfix">
                                        <div class="up-event-date"><?php echo $row['zaman']; ?></div><div class="up-event-time">Abdurrahman Taşçı</div>
                                    </div>                                  
                                    <p><?php echo $row['detay']; ?></p><br/><br/><br/><p><?php echo $row['etiket']; ?></p><br/>
									<div class="col-lg-12">              
                            </div>
                                <!-- Go to www.addthis.com/dashboard to customize your tools -->
								<!-- Go to www.addthis.com/dashboard to generate a new set of buttons -->
<a href="https://api.addthis.com/oexchange/0.8/forward/facebook/offer?url=Barkod&pubid=ra-526ff17e48b40f1a&ct=1&title=Patent%20Tescil%20Ofisi&pco=tbxnj-1.0" target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/facebook.png" border="0" alt="Facebook"/></a>
<a href="https://api.addthis.com/oexchange/0.8/forward/twitter/offer?url=Barkod&pubid=ra-526ff17e48b40f1a&ct=1&title=Patent%20Tescil%20Ofisi&pco=tbxnj-1.0" target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/twitter.png" border="0" alt="Twitter"/></a>
<a href="https://www.addthis.com/bookmark.php?source=tbx32nj-1.0&v=300&url=Barkod&pubid=ra-526ff17e48b40f1a&ct=1&title=Patent%20Tescil%20Ofisi&pco=tbxnj-1.0" target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/addthis.png" border="0" alt="Addthis"/></a>
<a href="https://api.addthis.com/oexchange/0.8/forward/pinterest/offer?url=Barkod&pubid=ra-526ff17e48b40f1a&ct=1&title=Patent%20Tescil%20Ofisi&pco=tbxnj-1.0" target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/pinterest.png" border="0" alt="Pinterest"/></a>
<a href="https://api.addthis.com/oexchange/0.8/forward/google_plusone_share/offer?url=Barkod&pubid=ra-526ff17e48b40f1a&ct=1&title=Patent%20Tescil%20Ofisi&pco=tbxnj-1.0" target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/google_plusone_share.png" border="0" alt="Google+"/></a>
<a href="https://api.addthis.com/oexchange/0.8/forward/linkedin/offer?url=Barkod&pubid=ra-526ff17e48b40f1a&ct=1&title=Patent%20Tescil%20Ofisi&pco=tbxnj-1.0" target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/linkedin.png" border="0" alt="LinkedIn"/></a>

                                </div><!-- event summary end -->

                            </div>
                        <?php } ?>
                        </div><!-- row end --> 
                        
                        <div class="row gutter"><!-- row -->
                        
                        	<div class="col-lg-12">
				
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
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
                
                <div class="col-lg-4 col-md-4"><!-- upcoming events wrapper -->
                	
                    <div class="col-padded col-shaded"><!-- inner custom column -->
                    
                    	<ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_up_events"><!-- widgets list -->
                    
                                <h1 class="title-widget">Sizlerden Gelenler</h1>
                                
                                <ul class="list-unstyled">
								<?php $guery = mysql_query("select * from sizden_gelen limit 5");
									  while($row = mysql_fetch_array($guery)){
								?>                               
                                    <li class="up-event-wrap">
                                
                                        <h1 class="title-median"><a href="#" title="Annual alumni game"><?php echo $row['baslik'];?></a></h1>
                                        
                                        <div class="up-event-meta clearfix">
                                            <div class="up-event-date"><?php echo $row['zaman'];?></div><div class="up-event-time">Yorum</div>
                                        </div>                                      
                                        <p><?php echo $row['spot'];?></p>                                   
                                    </li>
									
                                <?php } ?>                                
                                </ul>
                            
                            </li><!-- widgets list end -->
                        
                        </ul><!-- widgets end -->
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- upcoming events wrapper end -->
                
                <div class="col-lg-4 col-md-4"><!-- recent news wrapper -->
                	
                    <div class="col-padded"><!-- inner custom column -->
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_recent_news"><!-- widgets list -->
                    
                                <h1 class="title-widget">Öne Çıkanlar</h1>
                                
                                <ul class="list-unstyled">
								
								<?php $guery = mysql_query("select * from tbl_makale limit 5");
									  while($row = mysql_fetch_array($guery)){
								?>
                                
									<li class="recent-news-wrap">
                                
                                        <h1 class="title-median"><a href="makale_detay.php?sayfa=<?php echo $row['makale_id']; ?>" title="<?php echo $row['baslik']; ?>"><?php echo $row['baslik']; ?></a></h1>
                                        
                                        <div class="recent-news-meta">
                                            <div class="recent-news-date"><?php echo $row['zaman']; ?></div>
                                        </div>
                                        
                                        <div class="recent-news-content clearfix">
                                            <figure class="recent-news-thumb">
                                                <a href="makale_detay.php?sayfa=<?php echo $row['makale_id']; ?>" title="<?php echo $row['baslik']; ?>"><img src="img/barcode.jpg" class="attachment-thumbnail wp-post-image" alt="Thumbnail 1" /></a>
                                            </figure>
                                            <div class="recent-news-text">
                                                <p>
                                              <?php echo $row['spot']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    
                                    </li>
                                <?php } ?> 
								
                                </ul>
                                
                            </li>
							<!-- widgets list end -->
                        
                        </ul><!-- widgets end -->
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- recent news wrapper end -->
                
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
                                    	<span class="custom-button-title">Marka Tescili Alma</span>
                                        <span class="custom-button-tagline">Marka tescili alma işlemleri</span>
                                    </span>
                                    <em></em>
                                </a>
                                
                            	<a href="#" class="custom-button cb-gray" title="Campus tour">
                                	<i class="custom-button-icon fa  fa-check-square-o"></i>
                                    <span class="custom-button-wrap">
                                    	<span class="custom-button-title">Patent Tescili Alma</span>
                                        <span class="custom-button-tagline">Patent tescili alma işlemleri</span>
                                    </span>
                                    <em></em>
                                </a>
                                
                            	<a href="#" class="custom-button cb-yellow" title="Prospectus">
                                	<i class="custom-button-icon fa  fa-check-square-o"></i>
                                    <span class="custom-button-wrap">
                                    	<span class="custom-button-title">İsim Hakkı Alma</span>
                                        <span class="custom-button-tagline">İsim hakkı alma işlemleri</span>
                                    </span>
                                    <em></em>
                                </a>
								
                            	<a href="#" class="custom-button cb-gray" title="Campus tour">
                                	<i class="custom-button-icon fa  fa-check-square-o"></i>
                                    <span class="custom-button-wrap">
                                    	<span class="custom-button-title">Amble Tescili Alma</span>
                                        <span class="custom-button-tagline">Amble tescili alma işlemleri</span>
                                    </span>
                                    <em></em>
                                </a>
								
                            	<a href="#" class="custom-button cb-green" title="How to apply?">
                                	<i class="custom-button-icon fa fa-check-square-o"></i>
                                    <span class="custom-button-wrap">
                                    	<span class="custom-button-title">İsim Tescili Alma</span>
                                        <span class="custom-button-tagline">İsim tescili alma işlemleri</span>
                                    </span>
                                    <em></em>
                                </a>
								
                            	<a href="#" class="custom-button cb-yellow" title="Prospectus">
                                	<i class="custom-button-icon fa  fa-check-square-o"></i>
                                    <span class="custom-button-wrap">
                                    	<span class="custom-button-title">Slogan Tescili Alma</span>
                                        <span class="custom-button-tagline">Slogan tescili alma işlemleri</span>
                                    </span>
                                    <em></em>
                                </a>
								
                            	<a href="#" class="custom-button cb-gray" title="Campus tour">
                                	<i class="custom-button-icon fa  fa-check-square-o"></i>
                                    <span class="custom-button-wrap">
                                    	<span class="custom-button-title">TSE Belgesi Alma</span>
                                        <span class="custom-button-tagline">tse belgesi alma işlemleri</span>
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
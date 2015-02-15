<?php include("includes/header.php"); ?>  
    <div id="k-body"><!-- content wrapper -->
    
    	<div class="container"><!-- container -->
        
        	<div class="row"><!-- row -->
          
            	<div class="k-breadcrumbs col-lg-12 clearfix"><!-- breadcrumbs -->
                
                	<ol class="breadcrumb">
                    	<li><a href="#">Hakkımızda</a></li>
                        <li class="active">Bizi yakından tanıyın</li>
                    </ol>
                    
                </div><!-- breadcrumbs end -->
                
            </div><!-- row end -->

            <div class="row no-gutter"><!-- row -->
                
                <div class="col-lg-8 col-md-8"><!-- doc body wrapper -->
                	
                    <div class="col-padded"><!-- inner custom column -->
                    
                    	<div class="row gutter"><!-- row -->
                        
                        	<div class="col-lg-12 col-md-12">
                                
                                <div class="course-title-meta clearfix"><!-- course meta -->
                                    <h1 class="page-title">Sirket Portföy</h1>
                                    <dl class="dl-horizontal course-meta">
                                    </dl>
                                </div><!-- course meta end -->
                                
                                <div class="news-body clearfix"><!-- course content -->
								<?php $guery = mysql_query("select * from tbl_hakkimiz");
									  while($row = mysql_fetch_array($guery)){
										echo $row['baslik']. "<br/>";
										echo $row['detay']. "<br/>";
										echo $row['zaman'];
									  }
								?>
								<p></p>
									<dl class="dl-horizontal course-meta">
                                        <p>Saygılarımla</p>
                                        <p>Abdurrahman Taşçı</p>
                                        <p>Patent Mühendisi</p>
                                    </dl>

                                    <hr />
                                    
                                    <h6>Barkod resmi evrakları</h6>
                                    
                                    <ul class="list-unstyled list-downloads"><!-- downloads list -->
                                    	<li>
                                        	<i class="fa fa-cloud-download"></i>
                                        	<a href="http://www.patenttescilofisi.com/belgeler/OnBarkod.doc" title="Course Materials" class="download-link">
                                            	<span class="dwnld-title">10 Barkod taahutnamesi</span>
                                            	<span class="help-block">10 barkod taahutnamesini buradan bilgisayarınıza indirebilirsiniz.</span>
                                            </a>
                                        </li>
                                    	<li>
                                        	<i class="fa fa-cloud-download"></i>
                                        	<a href="http://www.patenttescilofisi.com/belgeler/YuzBarkod.doc" title="Course Materials" class="download-link">
                                            	<span class="dwnld-title">100 Barkod taahutnamesi</span>
                                            	<span class="help-block">100 barkod taahutnamesini buradan bilgisayarınıza indirebilirsiniz.</span>
                                            </a>
                                        </li>
                                    </ul><!-- downloads list end -->
                                    
                                </div><!-- course content end -->
                            
                            </div>
                        
                        </div><!-- row end -->               
                    
                    </div><!-- inner custom column end -->					
                    
                </div><!-- doc body wrapper end -->
				<div id="k-sidebar" class="col-lg-4 col-md-4"><!-- sidebar wrapper -->
                	
                    <div class="col-padded col-shaded"><!-- inner custom column -->
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_nav_menu"><!-- widget -->
                    
                                <h1 class="title-widget">SOSYAL MEDYA</h1>
                                
                                <ul>
<div class="fb-like-box" data-href="https://www.facebook.com/FacebookDevelopers" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>

                                </ul>
                    
							</li>
                            
                        	<li class="widget-container widget_recent_news"><!-- widgets list -->
                    
                                <h1 class="title-widget">EN SON OKUNANLAR</h1>
                                
                                <ul class="list-unstyled">
                                <?php $guery = mysql_query("select * from tbl_makale order by rand() limit 6");
									  while($row = mysql_fetch_array($guery)){										
								?>
									<li class="recent-news-wrap news-no-summary">
                                        
                                        <div class="recent-news-content clearfix">
                                            <figure class="recent-news-thumb">
                                                <a href="#" title="<?php echo $row['baslik']; ?>"><img src="img/barcode.jpg" class="attachment-thumbnail wp-post-image" alt="<?php echo $row['baslik']; ?>" /></a>
                                            </figure>
                                            <div class="recent-news-text">
                                                <div class="recent-news-meta">
                                                    <div class="recent-news-date"><?php echo $row['zaman']; ?></div>
                                                </div>
                                                <h1 class="title-median"><a href="makale_detay.php?sayfa=<?php echo $row['makale_id'];?>" title="<?php echo $row['baslik']; ?>"><?php echo $row['baslik']; ?></a></h1>
                                            </div>
                                        </div>
                                    
                                    </li>
								<?php } ?>
                                </ul>
                                
                            </li><!-- widgets list end -->
                            
                            <li class="widget-container widget_sofa_twitter"><!-- widget -->
                            
                            	<ul class="k-twitter-twitts list-unstyled">
                                
                                    <li class="twitter-twitt">
                                    	<p>
                                        <div class="fb-facepile" data-href="https://www.facebook.com/FacebookDevelopers" data-max-rows="1" data-colorscheme="light" data-size="medium" data-show-count="true"></div>
                                        </p>
                                    </li>
                                </ul>
                           
            </div><!-- row end -->
			
        
        </div><!-- container end -->
		
    
    </div><!-- content wrapper end -->
    
<?php include("includes/footer.php"); ?>
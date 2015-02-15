<?php include("includes/header.php"); ?>      
    <div id="k-body"><!-- content wrapper -->
    
    	<div class="container"><!-- container -->
        
        	<div class="row"><!-- row -->
           
            	<div class="k-breadcrumbs col-lg-12 clearfix"><!-- breadcrumbs -->
                
                	<ol class="breadcrumb">
                    	<li><a href="index-2.html">Home</a></li>
                        <li class="active">Sorularınız için?</li>
                    </ol>
                    
                </div><!-- breadcrumbs end -->               
                
            </div><!-- row end -->
            
            <div class="row no-gutter"><!-- row -->
                
                <div class="col-lg-8 col-md-8"><!-- doc body wrapper -->
                	
                    <div class="col-padded"><!-- inner custom column -->
                    
                    	<div class="row gutter"><!-- row -->
                        
                        	<div class="col-lg-12 col-md-12">
                            
                                <div id="k-contact-map" class="clearfix"><!-- map -->
                                    <div 
                                    id="g-map-1" 
                                    class="map" 
                                    data-gmaptitle="Contact" 
                                    data-gmapzoom="15" 
                                    data-gmaplon="28.984363" 
                                    data-gmaplat="41.073992" 
                                    data-gmapmarker="" 
                                    data-cname="Patent Tescil Ofisi" 
                                    data-caddress="Esenyurt / ISTANBUL" 
                                    data-ccity="Esenyurt" 
                                    data-cstate="TR" 
                                    data-czip="34000" 
                                    data-ccountry="TR">
                                    </div>
                                </div>
                                
                                <h1 class="page-title">Sorularınız için?</h1>
								<div class="col-lg-6 col-md-6 col-sm-12">
                                        	<h6 class="remove-margin-bottom" style="margin-top:15px;">Telefon Numaramız</h6>
											<p class="small">Tel: 0(212) 664 76 54   |   Fax: 0(212) 664 76 54</p>
                                            
											<h6 class="remove-margin-top remove-margin-bottom">Adres Bilgilerimiz</h6>
											<p class="small">Yeşilkent Mah.Nazım Hikmet Bulvarı<br/>2011.Sk. İnnovia 3.Etap A Blok Kat:12 D:146<br/>Esenyurt / İSTANBUL</p>
                                        </div>
                   
                                <div class="news-body">
                                
                                    <p>
                                     Her türlü merak ettiğiniz sorularınız ve önerilerinizi bizimle payşabilirsiniz. Size en yakın süre içerisinde geri dönüş yapılacaktır. Bizi tercih ettiğiniz için teşekkür ederiz. 
                                    </p>
                                   
                                    <hr />
                              
                                    <h6>Bi notum var</h6>
                                    
                                    <form id="contactform" method="post" action="ulasin_post.php">
                                        <div class="row"><!-- starts row -->
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="contactName"><span class="required">*</span> Adınız</label>
                                                <input type="text" aria-required="true" size="30" value="" name="adi" id="contactName" class="form-control requiredField" />
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="email"><span class="required">*</span> E-mail</label>
                                                <input type="text" aria-required="true" size="30" value="" name="email" id="email" class="form-control requiredField" />
                                            </div>
                                        </div><!-- ends row -->
                                        
                                        <div class="row"><!-- starts row -->
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="contactPhone">Telefon No</label>
                                                <input type="text" aria-required="true" size="30" value="" name="telefon" id="contactPhone" class="form-control" />
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="contactSchool">Mesaj türü</label>
                                                <select name="mesaj_turu" id="contactSchool" class="form-control">
                                                    <option value="öneri mesajı">Barkod almak istiyorum</option>
                                                    <option value="şikayet mesajı">Lütfen beni arayınız</option>
                                                </select>
                                            </div>
                                        </div><!-- ends row -->
                                        
                                        <div class="row"><!-- starts row -->
                                            <div class="form-group col-lg-12">
                                                <label for="contactSubject">Mesaj konusu</label>
                                                <input type="text" aria-required="true" size="30" value="" name="mesaj_konu" id="contactSubject" class="form-control" />
                                            </div>
                                        </div><!-- ends row -->
                                        
                                        <div class="row"><!-- starts row -->
                                            <div class="form-group clearfix col-lg-12">
                                                <label for="comments"><span class="required">*</span> Mesajınız</label>
                                                <textarea aria-required="true" rows="5" cols="45" name="mesaj" id="comments" class="form-control requiredField mezage"></textarea>
                                            </div>
                            
                                            <div class="form-group clearfix col-lg-12 text-right remove-margin-bottom">
                                                <input type="hidden" name="submitted" id="submitted" value="true" />
                                                <input type="submit" value="Mesaj Gönder" id="submit" name="submit" class="btn btn-default" />
                                            </div>
                                        </div><!-- ends row -->
                                    </form>
                                    
                                </div>
                            
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
                                                <a href="#" title="<?php echo $row['baslik']; ?>"><img src="img/barcode.jpg" class="attachment-thumbnail wp-post-image" alt="Thumbnail 1" /></a>
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
                                
 <?php include("includes/footer.php"); ?>
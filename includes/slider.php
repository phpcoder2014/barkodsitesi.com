<div class="row no-gutter fullwidth"><!-- row -->
            
                <div class="col-lg-12 clearfix"><!-- featured posts slider -->
                
                    <div id="carousel-featured" class="carousel slide" data-interval="4000" data-ride="carousel"><!-- featured posts slider wrapper; auto-slide -->
                    
                        <ol class="carousel-indicators"><!-- Indicators -->
                            <li data-target="#carousel-featured" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-featured" data-slide-to="1"></li>
                            <li data-target="#carousel-featured" data-slide-to="2"></li>
                            <li data-target="#carousel-featured" data-slide-to="3"></li>
                            <li data-target="#carousel-featured" data-slide-to="4"></li>
                        </ol><!-- Indicators end -->
						                 
                        <div class="carousel-inner"><!-- Wrapper for slides -->	
						<?php $sorgu = mysql_query("select * from tbl_slider ORDER  BY RAND() limit 1"); $row = mysql_fetch_array($sorgu);{ ?>  
                            <div class="item active">
                                <img src="admin/slider/<?php echo $row['resim']; ?>" alt="Image slide 3" />
                                <div class="k-carousel-caption pos-1-3-right scheme-dark">
                                	<div class="caption-content">
                                        <h3 class="caption-title"><?php echo $row['baslik']; ?></h3>
                                        <p>
                                        	<?php echo $row['kisa_aciklama']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
						<?php $sorgu = mysql_query("select * from tbl_slider"); while($row = mysql_fetch_assoc($sorgu)){?>
				
                            <div class="item">
                                <img src="admin/slider/<?php echo $row['resim']; ?>" alt="Image slide 3" />
                                <div class="k-carousel-caption pos-1-3-right scheme-dark">
                                	<div class="caption-content">
                                        <h3 class="caption-title"><?php echo $row['baslik']; ?></h3>
                                        <p>
                                        	<?php echo $row['kisa_aciklama']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>                                              
                        <?php } ?> 
					</div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-featured" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                        <a class="right carousel-control" href="#carousel-featured" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                        <!-- Controls end -->
                        
                    </div><!-- featured posts slider wrapper end -->
                        
                </div><!-- featured posts slider end -->
                
            </div><!-- row end -->
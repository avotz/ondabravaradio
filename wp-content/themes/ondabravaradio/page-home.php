<?php
/*
    Template Name: Page Home
     */

get_header(); ?>

	<section class="main">

			<div class="player-container">
				<div class="player">
					<span class="text-play">Dale play para escuchar <i class="fa fa-play"></i></span>
					<audio controls="" preload="none" autoplay="true"><source src="http://158.69.225.238:3040/Live" type="audio/mpeg"></audio>

				</div>
				<div id="playlist" class="playlist">
					<iframe id="iframePlaylist"	src="http://moon.wavestreamer.com:3040/played.html" frameborder="0" scrolling="no"></iframe>
				</div>
				<br />
				<div class="tunein">
                   Escúchenos tambien en <a href="http://tunein.com/station/?StationId=110194" target="_blank"><img src="<?php echo get_template_directory_uri();  ?>/img/tunein.png" alt="Tune In Radio"></a>
                 </div>
				
			</div>
			
	  	  
	  	
			
			<div class="news">
				<div class="owl-carousel owl-theme">
				<?php
                        $args = array(
                          'post_type' => 'post',
                          'post_per_page' => 5                 
                        );
                        $news = new WP_Query( $args );
                        if( $news->have_posts() ) {
                          while( $news->have_posts() ) {
                            $news->the_post();
                            
            
                            $url = rwmb_meta( 'rw_ad_url');
                            ?>
                               <div class="item news-post">
						  	  	
						  	  		
                                    <?php                               
                                        if($url) : ?>
                                        	<a href="<?php echo $url; ?>" target="_blank" title="<?php the_title(); ?>"></a>
                                     	<?php endif ?>
 											 <div class="news-post-image">
 											     <?php the_post_thumbnail( 'full',["class" => "news-img"]); ?>
                                              </div>
                                               <div class="news-post-info">
                                                   <?php the_content(); ?>
												</div>
                                               
                                    
                                       
                                  

						  	  		
						  	  	
						  	  </div>
                                 


                              
                            <?php
                          }
                        }
                        
                      ?>
				</div>
			</div>

			<div class="ads">
				<div class="owl-carousel owl-theme">
				<?php
                                        $args = array(
                                          'post_type' => 'anuncio',
                                                          
                                        );
                                        $ads = new WP_Query( $args );
                                        if( $ads->have_posts() ) {
                                          while( $ads->have_posts() ) {
                                            $ads->the_post();
                                            
                            
                                            $url = rwmb_meta( 'rw_ad_url');
                                            ?>
                                               <div class="item ads-slide">
										  	  	
										  	  		<a href="<?php echo $url; ?>" target="_blank" title="<?php the_title(); ?>">
                                                    <?php                               
                                                        
                                                     

                                                                 the_post_thumbnail( 'full',["class" => "ads-img"]); 
                                                                    
                                                                ?>
                                                    
                                                       
                                                    </a>
										  	  		
										  	  	
										  	  </div>
                                                 


                                              
                                            <?php
                                          }
                                        }
                                        
                                      ?>
                    </div>
			</div>

			
			

	</section><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
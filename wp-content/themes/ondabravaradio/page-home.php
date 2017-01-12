<?php
/*
    Template Name: Page Home
     */

get_header(); ?>

	<section class="main">

			<div class="player-container">
				<div class="player">
					<span class="text-play">Dale play para escuchar <i class="fa fa-play"></i></span>
					<audio controls="" preload="none" autoplay="true" ><source src="http://167.114.210.232:8221/Live" type="audio/mpeg"></audio>
          <!--<div class="cc_player" data-skin="darkconsole" data-width="190" data-height="62" data-username="ritmodig">Cargando ...</div>
          <div id="cc_recenttracks_ritmodig" class="cc_recenttracks_list">Cargando ...</div>
          <script language="javascript" type="text/javascript" src="https://ca.radioboss.fm:2199/system/recenttracks.js"></script>
          <script language="javascript" type="text/javascript" src="https://ca.radioboss.fm:2199/system/player.js"></script>-->
      
      <!--<iframe id="flexible-radio-playing" src="http://api.mycloudserver.info/?apitype=flexibleradioplayer&lkey=1059_1679&skin=sq_BlkPnk" scrolling="no" frameborder="0" width="345" height="355"></iframe>-->
				</div>
				<div id="playlist" class="playlist">
					<iframe id="iframePlaylist"	src="http://167.114.210.232:8221/played.html?sid=1" frameborder="0" scrolling="no"></iframe>
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

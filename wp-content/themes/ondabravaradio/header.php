<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ondabravaradio
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();  ?>/img/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();  ?>/img/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();  ?>/img/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php echo get_template_directory_uri();  ?>/img/favicons/manifest.json">
<link rel="mask-icon" href="<?php echo get_template_directory_uri();  ?>/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
		
			
			<!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo"><img src="<?php echo get_template_directory_uri();  ?>/img/logo.png" alt="Onda Brava Radio"></a> -->
			<div class="tunein">
				Escúchenos tambien en <a href="http://tunein.com/station/?StationId=110194" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/tunein.png" alt="Tune In Radio"></a>
				</div>
			<div class="header-social">
                <a href="https://twitter.com/ondabravaradio" target="_blank" class="icon-twitter"></a>
                <a href="https://www.facebook.com/radioondabrava" target="_blank" class="fab fa-facebook"></a>
                <!--<a href="https://plus.google.com/u/0/106393867091599207273/" target="_blank" class="icon-googleplus"></a>-->
                <a href="https://www.youtube.com/user/OndaBravaRadio" target="_blank" class="icon-youtube"></a>
                <a href="http://tunein.com/station/?StationId=110194" target="_blank" class="icon-tunein"></a>
				 <a href="#" target="_blank" class="fab fa-instagram"></a>


            </div>
			<?php wp_nav_menu( array(
	                     'theme_location' => 'primary',
	                     'menu_id' => 'primary-menu',
	                     'container'       => 'nav',
		                'container_class' => 'header-menu',
		                'container_id'    => '',
		                'menu_class'      => 'header-menu-ul',
	                      ) 
                      ); 
                      ?>
			 <button id="btn-menu" class="header-btn-menu">
	            <i class="icon-menu"></i>
	        </button>

	         
		
	</header>
	<div class="number-header">
		<i class="fa fa-phone"></i> Cabina (+506) 6053 1041
	</div>
	

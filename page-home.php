<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * Template Name: Page Home
 * @package ondabravaradio
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="flex flex-col items-center justify-center min-h-adap">
			
			<a href="<?php echo esc_url(home_url('/promocionate')); ?>" class="mt-4 mb-4 text-4xl text-white bg-red-600 hover:bg-red-800 px-6 py-3 rounded" rel="noopener noreferrer">Promocionate con nosotros</a>
			<a href="#" class="w-64 "><img src="<?php echo get_template_directory_uri(); ?>/img/logo-ondabrava.png" alt="Ondabrava Radio" class="object-cover"></a>
			
			<div class="mt-4 w-64">
				<?php dynamic_sidebar('sidebar-player'); ?>
				<!-- <?php /*get_template_part( 'template-parts/player');*/ ?> -->

			</div>
			<div class="mt-4 w-full">
				<?php get_template_part( 'template-parts/banner'); ?>
			</div>
		

		</div>

	</main><!-- #main -->

<?php

get_footer();

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
 * Template Name: Page Promotion
 * @package ondabravaradio
 */

get_header();
?>

	<main id="primary" class="site-main bg-white py-4">

		<div class="max-w-2xl mx-auto flex flex-col items-center justify-center min-h-adap p-8 bg-cover bg-center bg-no-repeat relative rounded-3xl" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/pbcl-bg.png')">
			<div class="bg-white/60 w-32 h-10 absolute top-0 rounded-b-xl"></div>
			<h2 class="text-white uppercase my-8">Formulario</h2>
			<?php dynamic_sidebar('sidebar-promotion'); ?>
			
			<div>
				<img src="<?php echo get_template_directory_uri();  ?>/img/logo-ondabrava.png" alt="Ondabrava Radio" class="w-32">
			</div>
			<div class="absolute right-4 bottom-1">
				
			</div>
		</div>

	</main><!-- #main -->

<?php

get_footer();

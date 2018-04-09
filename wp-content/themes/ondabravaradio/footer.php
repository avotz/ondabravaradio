<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ondabravaradio
 */

?>

	<div class="current-song">
      <div class="current-song-container">
       <?php dynamic_sidebar('sidebar-current-song'); ?>
      </div>
    </div>

	<!-- <footer id="colophon" class="footer" role="contentinfo">
		<span>Onda Brava © Diseñado por <a href="http://avotz.com"><i class="icon-avotz"></i></a>	</span>
	</footer> -->

<?php get_template_part( 'template-parts/float', 'contact' ); ?>

<?php wp_footer(); ?>

</body>
</html>

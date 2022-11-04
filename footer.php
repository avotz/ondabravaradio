<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ondabravaradio
 */

?>
<?php if (is_home()) : ?>
	<footer id="colophon" class="site-footer bg-black text-2xl text-white py-2 px-2 text-center fixed inset-x-0 bottom-0">
		<div class="current-song">
			<div class="current-song-container">
				<?php dynamic_sidebar('sidebar-current-song'); ?>

			</div>
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>

<?php get_template_part('template-parts/float', 'contact'); ?>
<?php get_template_part('template-parts/float', 'promotion'); ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
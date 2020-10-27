<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vivenda
 */

?>
<div class="modal hidden js-modal bg-black bg-opacity-75 fixed h-full w-full inset-0 flex flex-col justify-center items-center z-50">
	<?php rewind_posts(); ?>
	  <?php query_posts( 'post_type=page&page_id=18' ); ?>
	    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			   <?php the_title( '<h3 class="text-3xl md:text-5xl text-red-600 font-bold">', '</h3>' ); ?>
			   <div class="modal-content bg-white px-8 py-8 max-w-screen-sm mx-4 relative z-10">
					<button class="js-close  text-primary absolute right-0 top-0 mr-4 mt-2"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
					
					<?php the_content(); ?>
					
				</div>
    		  

	        <?php endwhile; ?>
	        <!-- post navigation -->
	      
	    <?php endif; ?>

</div>



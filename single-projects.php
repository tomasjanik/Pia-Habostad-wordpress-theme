<?php
/**
 * The template for displaying all single posts.
 *
 * @package piahabostad2015
 */

get_header(); ?>


		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'project' ); ?>


		<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>

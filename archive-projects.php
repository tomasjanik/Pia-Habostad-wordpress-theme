<?php
/**
 * The template for displaying archive pages.
 * Template Name: Forside
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package piahabostad2015
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container-fluid">
			
			<div class="project-intro intro">
				<div class="container-fluid project-intro">
					<div class="project-intro cell">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-sm-offset-3 intro--title">
								<?php the_title('<h1 class="title">', '</h1>');?>
							</div>
						</div>
							<div class="row">
								<div class="col-xs-12 col-sm-5 col-sm-offset-4 intro--description">
									<h3><?php the_content(); ?></h3>
								</div>
							</div>
						</div>
					</div>
			</div>
			<div class="row cell">
			<article>
						<?php
			//WordPress loop for custom post type
			 $args = array(
				'post_type'      => 'projects',
				'orderby'        => 'date',
				'order'          => 'DESC',
				'posts_per_page' => -1
				);
			 $projects = new WP_Query($args);
			      while ($projects->have_posts()) : $projects->the_post(); ?>
			      					      <div class="col-xs-10 col-xs-offset-1">
			      <div class="project--front">
					      	<div class="col-xs-12 col-sm-4">
					      		<h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
					      	</div>
					      	<div class="col-xs-12 col-sm-8 intro--description">
					      		<h3><?php the_field('meta--description'); ?></h3>
					      	</div>
					      </div>
					    </div>
			      			<?php endwhile;  wp_reset_query(); ?>
			</article>
						    </div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

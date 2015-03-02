<?php
/**
 * The template for displaying archive pages.
 * Template Name: Forside m/ Packery
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package piahabostad2015
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

					<?php
			//WordPress loop for custom post type
			 $args = array(
				'post_type'      => 'projects',
				'orderby'        => 'rand',
				'posts_per_page' => 1
				);
			 $project = new WP_Query($args);
			      while ($project->have_posts()) : $project->the_post();
			       ?>
			      <div class="background" style="background:URL('<?php the_field('meta--image');?>')">

					      </div>
						    
			      			<?php endwhile;  wp_reset_query(); ?>
			<div class="container-fluid showcase">
			
			<div class="project-intro intro">
				<div class="container-fluid project-intro">
					<div class="project-intro cell">
						<div class="row">
							<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 intro--title">
								<?php the_title('<h1 class="title">', '</h1>');?>
							</div>
						</div>
							<div class="row">
								<div class="col-xs-10 col-xs-offset-1 col-sm-5 col-sm-offset-4 intro--description">

										<?php while ( have_posts() ) : the_post(); ?>



			<?php endwhile; // end of the loop. ?>
									<h3><?php the_content(); ?></h3>
								</div>
							</div>
						</div>
					</div>
			</div>
			<article>
				<div class="col-xs-12 col-sm-11 col-sm-offset-1" id="container">
						<?php
			//WordPress loop for custom post type
			 $args = array(
				'post_type'      => 'projects',
				'orderby'        => 'rand',
				'posts_per_page' => -1
				);
			 $projects = new WP_Query($args);
			      while ($projects->have_posts()) : $projects->the_post(); ?>
			      			
					      		<h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>

						    
			      			<?php endwhile;  wp_reset_query(); ?>
			      			</div>
				</article>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

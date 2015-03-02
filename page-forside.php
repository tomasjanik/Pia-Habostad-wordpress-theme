<?php
/**
 * The template for displaying archive pages.
 * Template Name: Index
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package piahabostad2015
 */

get_header(); ?>

			<div class="container-fluid">
			
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
				<div class="col-xs-12 front--list">
						<?php
			//WordPress loop for custom post type
			 $args = array(
				'post_type'      => 'projects',
				'orderby'        => 'rand',
				'posts_per_page' => -1
				);
			 $post_counter = 0;
			 $projects = new WP_Query($args);

			      while ($projects->have_posts()) : $projects->the_post(); ?>
			      			<?php 
			      			$post_counter++;
							$total_posts = $projects->post_count;
			      			$background = get_field('meta--image');
			      			$size = 'large';
			      			$medium = $background['sizes'][ $size ];?>
			      					      <div class="col-xs-12 col-lg-6 projectlist-item <?php if( ( $post_counter == $total_posts ) && ( $total_posts ===  4 || $total_posts == 7 || $total_posts == 10 || $total_posts == 13 || $total_posts == 16 ) ) : echo 'last--long'; elseif( ( $post_counter == $total_posts ) && ( $total_posts ===  5 || $total_posts == 8 || $total_posts == 11 || $total_posts == 14 || $total_posts == 17 ) ) : echo 'last--tall'; endif;?>" style="background:URL('<?php echo $medium; ?>')">
			     <a href="<?php the_permalink();?>"> <div class="project--front">
					      	<div class="col-xs-12 col-lg-5">
					      		<h1><?php the_title(); ?></h1>
					      	</div>
					      	<div class="col-xs-12 col-lg-7 intro--description">
					      		<h3><?php the_field('meta--description'); ?></h3>
					      	</div>
					      </div></a>
					    </div>
						    
			      			<?php endwhile;  wp_reset_query(); ?>
			      			</div>
				</article>
			</div>

<?php get_footer(); ?>

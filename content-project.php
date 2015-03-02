<?php
/**
 * @package piahabostad2015
 */
?>
<section class="gallery" style="background:<?php the_field('meta--bgcolor');?>">
<div class="close"></div>
<div class="inner"></div>

</section>
<section class="intro">
	<div class="container-fluid project-intro" style="background:<?php the_field('meta--bgcolor');?>;color:<?php the_field('meta--textcolor');?>">
		<div class="project-intro cell">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 intro--title">
						<?php the_title('<h1 class="title">', '</h1>');?>
						<?php

						$collaborators = get_field('meta--collaborators');
						 if( !empty($collaborators) ) { ?>
						<span class="collaborators">In collaboration with

						<?php   while ( have_rows('meta--collaborators') ) : the_row(); ?>

				<?php echo get_sub_field('meta--collaborator')?>
						 			<?php endwhile; ?>

						</span>
						<?php }  ?>
				</div>
			</div>
			<div class="row">
				<div class="hidden-xs col-sm-1 col-sm-offset-3 downarrow">&#8615;</div>
				<div class="col-xs-12 col-sm-5 intro--description">
					<h3><?php the_field('meta--description');?></h3>
					<div class="row">
						<div class="col-sm-4 meta-content">
							<?php the_field('meta--type');?></div>
						<div class="col-sm-4 meta-content">
							<?php the_field('meta--year');?></div>
						<div class="col-sm-4 meta-content">
							<?php the_field('meta--timespent');?></div>
					</div>

					<?php

						$awards = get_field('meta--awards');
						 if( !empty($awards) ) { ?>
						<div class="row awards">
						<div class="col-xs-10-col-xs-offset-1"><h4>Awards & Honors</h4>

						<?php   while ( have_rows('meta--awards') ) : the_row(); ?>
				<div class="col-xs-4 col-sm-4 col-lg-6">		
				<em><?php the_sub_field('meta--award')?></em>
				<?php the_sub_field('meta--awardinformation')?>
				</div>
						 			<?php endwhile; ?>

						</span>
						</div>
						<?php }  ?>
				</div>
			</div>
			</div>

		
	</div>


</section>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container-fluid showcase">
<!-- 							<div class="row">
								<div class="col-xs-12 col-sm-6 col-sm-offset-3">
									<div class="col-xs-4 meta-content">
									<div class="col-xs-12">
										<h3>Project type</h3>
									</div>
										<?php the_field('meta--type');?>
									</div>
									<div class="col-xs-12">
										<h3>Year finished</h3>
									</div>
									<div class="col-xs-4 meta-content">
										<?php the_field('meta--year');?>
									</div>
									<div class="col-xs-12">
										<h3>Time spent</h3>
									</div>
									<div class="col-xs-4 meta-content">
										<?php the_field('meta--timespent');?>
									</div>
								</div>
							</div> -->
		<?php while(the_flexible_field("showcase")): ?>

	<?php if(get_row_layout() == "showcase--text"): // layout: Brødtekst ?>

		<?php if( get_sub_field('showcase--leftright') == 'left' ) { ?>

			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<?php if( get_sub_field('showcase--editor--innholdstyper') == 'text' ) {

						the_sub_field('showcase--editor');

					} elseif( get_sub_field('showcase--editor--innholdstyper') == 'image' ) {
						?>
						<img src="/wp-content/themes/piahabostad2015/assets/media/placeholder.png" data-src="<?php the_sub_field('showcase--image');?>"><?php 

					} else{} ?>
				</div>
			</div> <?php 
		}  elseif( get_sub_field('showcase--leftright') == 'right' ) { ?>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-offset-6">
					<?php if( get_sub_field('showcase--editor--innholdstyper') == 'text' ) {

						the_sub_field('showcase--editor');

					} elseif( get_sub_field('showcase--editor--innholdstyper') == 'image' ) {

						?>
						<img src="/wp-content/themes/piahabostad2015/assets/media/placeholder.png" data-src="<?php the_sub_field('showcase--image');?>"><?php 

					} else{} ?>

				</div>
			</div><?php 

		} elseif( get_sub_field('showcase--width') == '1' ) { ?>
					<div class="row">
				<div class="col-xs-12">
					<?php if( get_sub_field('showcase--editor--innholdstyper') == 'text' ) {

						the_sub_field('showcase--editor');

					} elseif( get_sub_field('showcase--editor--innholdstyper') == 'image' ) {

						?>
						<img src="/wp-content/themes/piahabostad2015/assets/media/placeholder.png" data-src="<?php the_sub_field('showcase--image');?>"><?php 

					} else{} ?>

				</div>
			</div>
			<?php

		} elseif( get_sub_field('showcase--editor--innholdstyper') == 'texttext' ) { ?>
				<div class="row">
					<div class="col-xs-12 col-sm-6"><?php the_sub_field('showcase--editor')?></div>
					<div class="col-xs-12 col-sm-6"><?php the_sub_field('showcase--editor--2nd')?></div>
				</div> <?php 
			} elseif( get_sub_field('showcase--editor--innholdstyper') == 'textimage' ) { ?>
				<div class="row">
					<div class="col-xs-12 col-sm-5"><?php the_sub_field('showcase--editor')?></div>
					<div class="col-xs-12 col-sm-7"><img src="/wp-content/themes/piahabostad2015/assets/media/placeholder.png" data-src="<?php the_sub_field('showcase--image');?>"></div>
				</div> <?php 
			} elseif( get_sub_field('showcase--editor--innholdstyper') == 'imageimage' ) { ?>
				<div class="row">
					<div class="col-xs-12 col-sm-6 padding--right"><img src="/wp-content/themes/piahabostad2015/assets/media/placeholder.png" data-src="<?php the_sub_field('showcase--image');?>"></div>
					<div class="col-xs-12 col-sm-6 padding--left"><img src="<?php the_sub_field('showcase--image--2nd');?>"></div>
				</div> <?php 
			} elseif( get_sub_field('showcase--editor--innholdstyper') == 'imagetext' ) { ?>
				<div class="row">
					<div class="col-xs-12 col-sm-5 col-sm-push-7"><?php the_sub_field('showcase--editor')?></div>
					<div class="col-xs-12 col-sm-7 col-sm-pull-5"><img src="/wp-content/themes/piahabostad2015/assets/media/placeholder.png" data-src="<?php the_sub_field('showcase--image');?>"></div>
				</div> <?php 
			} endif; ?>

<?php endwhile; ?>
	<div class="row projectnavigation">
					    	<div class="col-xs-12 col-sm-6">
		<?php
			$previous_post = get_previous_post();
				if (!empty( $previous_post )): ?>
				<div class="project--front">
							<div class="col-xs-12">
								<h3>Previous project</h3>
							</div>
					      	<div class="col-xs-12 col-sm-6">
					      		<h1><a href="<?php echo get_permalink( $previous_post->ID ); ?>"><?php echo $previous_post->post_title; ?></a></h1>
					      	</div>
					      	<div class="hidden-xs col-sm-6 intro--description">
					      		<h3><?php $var = get_post_meta( $previous_post->ID, 'meta--description'); echo $var['0']; ?></h3>
					      	</div>
					      </div>
					      <?php endif; ?>

					    </div>
	<div class="col-xs-12 col-sm-6">
		<?php
			$next_post = get_next_post();
				if (!empty( $next_post )): ?>
				<div class="project--front">
							<div class="col-xs-12">
								<h3>Next project</h3>
							</div>
					      	<div class="col-xs-12 col-sm-6">
					      		<h1><a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo $next_post->post_title; ?></a></h1>
					      	</div>
					      	<div class="hidden-xs col-sm-6 intro--description">
					      		<h3><?php $var = get_post_meta( $next_post->ID, 'meta--description'); echo $var['0']; ?></h3>
					      	</div>
					      </div>
					      <?php endif; ?>

					    </div>

	</div>
	</div>
	
</article><!-- #post-## -->

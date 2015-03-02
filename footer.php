<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package piahabostad2015
 */
?>



				<div class="container-fluid about">
				<?php 
			$page = get_page_by_title( 'About', 'content' );
			$content = $page->post_content;
			$phone = get_post_meta( $page->ID, 'about--telephone' );
			$mail = get_post_meta( $page->ID, 'about--mail' );
			$instagram = get_post_meta( $page->ID, 'about--instagram' );
			$linkedin = get_post_meta( $page->ID, 'about--linkedin' );

		?>
		<div class="row">
		<div class="col-xs-12 col-xs-offset-0 col-md-5 nopadding">
			<div class="col-xs-12 nopadding" id="about">
				<h1>About</h1>
				<?php the_field('about--information', $page->ID); ?>
			</div>

		</div><?php 

		// check if the repeater field has rows of data
		if( have_rows('about--education', $page->ID) ):
			?>
			<div class="col-xs-12 col-md-5 col-sm-offset-1">
						<div class="col-xs-12"  id="contact">
				<h1>Contact</h1>
			</div></div>
			</div>
			<div class="row" id="education">
			<div class="col-xs-12 nopadding">
				<h1>Education</h1><?php
		 	// loop through the rows of data
		    while ( have_rows('about--education', $page->ID) ) : the_row();

		        // display a sub field value
			?>
			<div class="col-xs-12 col-md-6 col-lg-4 school">
				<div class="col-xs-12">
					
					<h2><?php the_sub_field('education--name',$page->ID); ?><span class="level"><?php the_sub_field('education--level', $page->ID); ?></span></h2>
					<h3><?php  the_sub_field('education--school', $page->ID); ?></h3>
					<h4><?php  the_sub_field('education--time', $page->ID); ?></h4>
					<p><?php  the_sub_field('education--description', $page->ID); ?></p>
					<?php 
					if( have_rows('education--courses', $page->ID) ):
						?>
						<h4 class="list-head">Selected courses</h4>
						<ul> <?php 
						while ( have_rows('education--courses', $page->ID) ) : the_row();
						?><li><?php
						the_sub_field('course--description', $page->ID);
						?></li><?php
						endwhile;
					endif;
					?>
				</div>
		      

			</div>
			<?php
		    endwhile;
		    ?>			</div>
		    			</div>
		    </div><?php
		else :

		    // no rows found

		endif;


		?>
		</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

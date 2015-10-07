<?php
/*
	Template Name: Home Page
*/
?>
<?php get_header(); ?>

		<?php
			$args = array(
				'post_type' => 'page'
				);
			$query = new WP_Query( $args );
		?>

			<!-- TAGLINE if editable can be grabbed from editable php file-->


<!-- MAIN BANNER - SLIDER -->
	<section class="main-banner">


		<ul class="rslides" >

		<?php 
				$home_slide_one = 'home-slide-one';
				$home_slide_two = 'home-slide-two';
				$home_slide_three = 'home-slide-three';
			?>

			<li>
			<a href="#">
			<div class="video-container">
			<video src="<?php bloginfo('template_directory'); ?>/vids/traffic-2.webm" width="100%" height="auto" loop autoplay></video>
			</div>
			<a class="main-cta" href="<?php bloginfo('url'); ?>/<?php the_field('slide-one-page'); ?>/">View Our <?php the_field('slide-one-page'); ?> <span>►</span></a>
			</a>
			</li>

			<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>

			<?php if ( get_field($home_slide_one) ) { ?>
			<li>
			<a href="<?php bloginfo('url'); ?>/<?php the_field('slide-one-page'); ?>/">
			<img src="<?php the_field('home-slide-one'); ?>">
			<a class="main-cta" href="<?php bloginfo('url'); ?>/<?php the_field('slide-one-page'); ?>/">View Our <?php the_field('slide-one-page'); ?> <span>►</span></a>
			</a>
			</li>
			<?php } ?>

			<?php if ( get_field($home_slide_two) ) { ?>
			<li>
			<a href="<?php bloginfo('url'); ?>/<?php the_field('slide-two-page'); ?>/">
			<img src="<?php the_field('home-slide-two'); ?>">
			<a class="main-cta" href="<?php bloginfo('url'); ?>/<?php the_field('slide-two-page'); ?>/">View Our <?php the_field('slide-two-page'); ?> <span>►</span></a>
			</a>
			</li>
			<?php } ?>

			<?php if ( get_field($home_slide_three) ) { ?>
			<li>
			<a href="<?php bloginfo('url'); ?>/<?php the_field('slide-three-page'); ?>/">
			<img src="<?php the_field('home-slide-three'); ?>">
			<a class="main-cta" href="<?php bloginfo('url'); ?>/<?php the_field('slide-three-page'); ?>/">View Our <?php the_field('slide-three-page'); ?> <span>►</span></a>
			</a>
			</li>
			<?php } ?>
		  
		  	<?php endwhile;  endif; wp_reset_postdata(); ?>
		  
		</ul>

	</section>

<section class="main-content">

	<!--  MAIN CONTENT AREA  -->

	<div class="content-col">
		<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
		<?php the_field('home-content-main'); ?>
		<?php the_field('home-content-cta'); ?>
		<?php endwhile;  endif; wp_reset_postdata(); ?>
	</div>

	<div class="content-col">
		<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
		<?php the_field('home-twitter-title'); ?>
		<?php the_field('home-twitter-plugin'); ?>
		<?php endwhile;  endif; wp_reset_postdata(); ?>
		<?php get_sidebar('homepage'); ?>
	</div>

</section>


<?php get_footer(); ?>
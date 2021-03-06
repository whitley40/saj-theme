<?php
/*
	Template Name: Home Page
*/
	?>
	<?php get_header(); ?>

	<style>
  .slide-one { background-image: url(<?php the_field('home-slide-one'); ?>); }
  .slide-two { background-image: url(<?php the_field('home-slide-two'); ?>); }
  .slide-three { background-image: url(<?php the_field('home-slide-three'); ?>); }
</style>

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

			

			<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>

				<?php if ( get_field($home_slide_one) ) { ?>
				<li class="slide-one">
					<a class="hit-me" href="<?php bloginfo('url'); ?>/<?php the_field('slide-one-page'); ?>/">
						<h1>Transport Consultants</h1>
					</a>
				</li>
				<?php } ?>

				<?php if ( get_field($home_slide_two) ) { ?>
				<li class="slide-two">
					<a class="hit-me" href="<?php bloginfo('url'); ?>/<?php the_field('slide-two-page'); ?>/">
					<h1>Planning for Developments</h1>
					</a>
				</li>
				<?php } ?>

				<?php if ( get_field($home_slide_three) ) { ?>
				<li class="slide-three">
					<a class="hit-me" href="<?php bloginfo('url'); ?>/<?php the_field('slide-three-page'); ?>/">
					<h1>Promoting Sustainable Travel</h1>
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
			<h1>Over 30 years experience.</h1>

			<div class="minigrid">
			<section class="home-tab">
				<a href="<?php bloginfo('url'); ?>/services/#site-appraisal" class="tab-link">
					<span class="icon-map"></span>
					<h1>Site Appraisal</h1>
				</a>
			</section>
			<section class="home-tab">
				<a href="<?php bloginfo('url'); ?>/services/#transport-planning" class="tab-link">
					<span class="icon-file-text"></span>
					<h1>Transport Planning & Policy</h1>
				</a>
			</section>
			</div>

			<div class="minigrid">
			<section class="home-tab">
				<a href="<?php bloginfo('url'); ?>/services/#transport-assessment" class="tab-link">
				<span class="icon-clipboard"></span>
					<h1>Transport Assessment</h1>
				</a>
			</section>
			<section class="home-tab">
				<a href="<?php bloginfo('url'); ?>/services/#travel-plan-services" class="tab-link">
				<span class="icon-android-bicycle"></span>
					<h1>Travel Plan Services</h1>
				</a>
			</section>
			</div>

			<!-- <p><a href="#">View all of our services &raquo </a></p> -->
		</div>

	</section>


	<?php get_footer(); ?>
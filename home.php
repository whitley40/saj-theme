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

			<!-- TAGLINE -->
	<section class="main-tagline large-12">
	<div class="centered group">
		<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
		 <?php the_field('home-tagline'); ?>
		 <?php endwhile;  endif; wp_reset_postdata(); ?>
		<div class="readme"><span class="readmore"></span></div>
		</div>
	</section>


<!-- MAIN BANNER - SLIDER -->
	<section class="main-banner large-12">

		<div class="centered group">
		<ul class="rslides" >

		<?php 
				$home_slide_one = 'home-slide-one';
				$home_slide_two = 'home-slide-two';
				$home_slide_three = 'home-slide-three';
			?>

			<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>

			<?php if ( get_field($home_slide_one) ) { ?>
			<li><img src="<?php the_field('home-slide-one'); ?>"></li>
			<?php } ?>

			<?php if ( get_field($home_slide_two) ) { ?>
			<li><img src="<?php the_field('home-slide-two'); ?>"></li>
			<?php } ?>

			<?php if ( get_field($home_slide_three) ) { ?>
			<li><img src="<?php the_field('home-slide-three'); ?>"></li>
			<?php } ?>
		  
		  	<?php endwhile;  endif; wp_reset_postdata(); ?>

		  
		</ul>
		</div>

	</section>

<section class="main-content large-12">
	<div class="centered group">

	
	<!--  MAIN CONTENT AREA  -->


	<section class="general-columns large-6 medium-12">
		<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
		<?php the_field('home-content-main'); ?>
		<?php the_field('home-content-cta'); ?>
		<?php endwhile;  endif; wp_reset_postdata(); ?>
	</section>

	<section class="general-columns large-6 medium-12">
		<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
		<?php the_field('home-twitter-title'); ?>
		<?php the_field('home-twitter-plugin'); ?>
		<?php endwhile;  endif; wp_reset_postdata(); ?>
		<?php get_sidebar('homepage'); ?>
	</section>

	</div>
</section>


<?php get_footer(); ?>
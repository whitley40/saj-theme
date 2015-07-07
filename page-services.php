<?php
/*
	Template Name: Services Page
*/
?>
<?php get_header(); ?>

<section class="main-content large-12">
	<div class="centered group">

	<header class="large-12 general-columns">
		 <h1><?php the_title(); ?> </h1>
	</header>

	<section class="general-columns large-12">
		
		<?php the_field('service-description'); ?>

		<?php the_field('service-secondary-title'); ?>

	</section>

	<section class="general-columns large-12">
		
		<?php
		$args = array(
			'post_type' => 'page'
			);
		$query = new WP_Query( $args );
		?>

			<!-- column one - ul inside the custom field -->
			<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
			
			<?php the_field('service-col-one'); ?>

			<?php endwhile;  endif; wp_reset_postdata(); ?>

			<!-- column two - ul inside the custom field -->
			<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
			
			<?php the_field('service-col-two'); ?>

			<?php endwhile;  endif; wp_reset_postdata(); ?>

			<!-- column two - ul inside the custom field -->
			<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
			
			<?php the_field('service-col-three'); ?>

			<?php endwhile;  endif; wp_reset_postdata(); ?>


	</section>

	<section class="general-columns large-12">
	<a class="main-cta" href="#">Find out more information <span>&#9658;</span></a>
	</section>
			

	</div>
</section>


<?php get_footer(); ?>
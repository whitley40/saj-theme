<?php
/*
	Template Name: About Page
*/
?>
<?php get_header(); ?>

		<?php
			$args = array(
				'post_type' => 'page'
				);
			$query = new WP_Query( $args );
		?>

<section class="main-content large-12">
	<div class="centered group">

	<header class="large-12 general-columns">
		 <h1><?php the_title(); ?> </h1>
		 <?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
		 <?php the_field('about-intro'); ?>
		 <?php endwhile;  endif; wp_reset_postdata(); ?>
	</header>

	<section class="general-columns large-6 medium-12">

	<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
	<?php the_field('team-title'); ?>
	<?php the_field('team-image'); ?>	
	<?php the_field('team-intro'); ?>
	<?php endwhile;  endif; wp_reset_postdata(); ?>

	</section>

	<section class="general-columns large-6 medium-12">
	<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
	<?php the_field('about-content'); ?>
	<?php endwhile;  endif; wp_reset_postdata(); ?>	
	</section>

	</div>
</section>


<?php get_footer(); ?>
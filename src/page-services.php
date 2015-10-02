<?php
/*
	Template Name: Services Page
*/
?>
<?php get_header(); ?>

<section class="main-content">

	<header>
		 <h1><?php the_title(); ?> </h1>
		 <?php the_field('service-description'); ?>
		 <?php the_field('service-secondary-title'); ?>
	</header>

	<section class="all-services">
		
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

	<section class="content-cta">
	<a class="main-cta" href="<?php bloginfo('url'); ?>/contact/">Find out more information <span>&#9658;</span></a>
	</section>
			

</section>


<?php get_footer(); ?>
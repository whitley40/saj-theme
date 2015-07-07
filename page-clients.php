<?php
/*
	Template Name: Clients Page
*/
?>
<?php get_header(); ?>

<section class="main-content large-12">
	<div class="centered group">

	<header class="large-12 general-columns">
		 <h1><?php the_title(); ?> </h1>
		 <p>We work hard to ensure our clients get the quality product they deserve.</p>
	</header>

	<!-- our clients -->

	<?php
		$args = array(
			'post_type' => 'page'
			);
		$query = new WP_Query( $args );
		?>


	<section class="general-columns large-6 medium-12">
		<h2 class="large-12">Our Clients Include</h2>
			

			<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
				
			<?php the_field('main'); ?>

			<?php endwhile;  endif; wp_reset_postdata(); ?>
	

		<h2 class="large-12">Architects</h2>

			<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
			
			<?php the_field('architect'); ?>

			<?php endwhile;  endif; wp_reset_postdata(); ?>

	</section>

	<section class="general-columns large-6 medium-12">
		
		<h2 class="large-12">Consultants & Engineers</h2>
		<ul class="clients-list large-12">

			<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
			
			<?php the_field('consultant'); ?>

			<?php endwhile;  endif; wp_reset_postdata(); ?>

		</ul>
		<h2 class="large-12">Landscape Architects</h2>
		<ul class="clients-list large-12">

			<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
			
			<?php the_field('landscape'); ?>

			<?php endwhile;  endif; wp_reset_postdata(); ?>

		</ul>
		<h2 class="large-12">Planners</h2>
		<ul class="clients-list large-12">

			<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
			
			<?php the_field('planner'); ?>

			<?php endwhile;  endif; wp_reset_postdata(); ?>

		</ul>
	</section>

	<section class="large-12 general-columns">
		 <a class="main-cta" href="#">Become a client <span>&#9658;</span></a>
	</section>


	</div>
</section>


<?php get_footer(); ?>
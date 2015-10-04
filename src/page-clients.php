<?php
/*
	Template Name: Clients Page
*/
?>
<?php get_header(); ?>

<section class="main-content">

	<header>
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


	<section class="all-clients">
		<h2>Our Clients Include:</h2>
			

			<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
				
			<?php the_field('main'); ?>

			<?php endwhile;  endif; wp_reset_postdata(); ?>
	

		<h2>Architects</h2>

			<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
			
			<?php the_field('architect'); ?>

			<?php endwhile;  endif; wp_reset_postdata(); ?>

		
		<h2>Consultants & Engineers</h2>
		<ul class="clients-list">

			<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
			
			<?php the_field('consultant'); ?>

			<?php endwhile;  endif; wp_reset_postdata(); ?>

		</ul>
		<h2>Landscape Architects</h2>
		<ul class="clients-list">

			<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
			
			<?php the_field('landscape'); ?>

			<?php endwhile;  endif; wp_reset_postdata(); ?>

		</ul>
		<h2>Planners</h2>
		<ul class="clients-list">

			<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
			
			<?php the_field('planner'); ?>

			<?php endwhile;  endif; wp_reset_postdata(); ?>

		</ul>
	</section>

	<section class="content-cta">
		 <a class="main-cta" href="<?php bloginfo('url'); ?>/contact/">Start Collaborating with us Today!<span>&#9658;</span></a>
	</section>


</section>


<?php get_footer(); ?>
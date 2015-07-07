<?php
/*
	Template Name: Careers Page
*/
?>
<?php get_header(); ?>

<section class="main-content large-12">
	<div class="centered group">

	<header class="large-12 general-columns">
		 <h1><?php the_title(); ?></h1>
		 <p>Check out our latest opportunities below.</p>
	</header>

	<!-- Jobs -->

	<?php
		$args = array(
			'post_type' => 'career'
			);
		$query = new WP_Query( $args );
		?>

		<!--<?php the_post_thumbnail(); ?> this will get me the featured image in the query loop -->

		<!-- Job Posts  -->
		<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>

			<section class="general-columns large-12 job-section" style=" padding: 20px; margin-bottom: 20px; background-color: #eee; border-radius: 8px;">
				<h2><?php the_title(); ?></h2>
				<?php the_field('job-description'); ?>
				<a href="<?php the_field('job-pdf')  ?>" target="_blank" class="main-cta">Full Job Specification (PDF) <span>&#9658;</span></a>
				<a href="mailto:info@sajconultants.com" target="_blank" class="main-cta">Apply Today <span>&#9658;</span></a>
			</section>

		<?php endwhile;  endif; wp_reset_postdata(); ?>

		


	</div>
</section>


<?php get_footer(); ?>
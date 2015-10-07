<?php
/*
	Template Name: Careers Page
*/
?>
<?php get_header(); ?>

<section class="main-content">

	<header>
		 <h1><?php the_title(); ?></h1>
		 <p>Check out our latest opportunities below. Or return to <a href="<?php bloginfo('url'); ?>/about/">about us.</a></p>
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

			<section class="job-section">
				<h2><?php the_title(); ?></h2>
				<?php the_field('job-description'); ?>
				<section class="content-cta">
					<a href="<?php the_field('job-pdf')  ?>" target="_blank" class="main-cta">Full Job Specification (PDF) <span>&#9658;</span></a>
					<a href="mailto:info@sajconultants.com" target="_blank" class="main-cta">Apply Today <span>&#9658;</span></a>
				</section>
			</section>

			<?php endwhile;  else : ?>  

			<section class="no-opportunities">
				<p>Whilst we don't have any opportunities right now, send us your CV and we'll happily consider you when future opportunities arise.</p>
				<p>Simply send your CV to <a href="mailto:info@saj-consultants.com" target="_blank">info@saj-consultants.com</a></p>
			</section>
		

		<?php endif; wp_reset_postdata(); ?>



</section>


<?php get_footer(); ?>
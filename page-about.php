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
		 <?php the_field('about-intro'); ?>
	</header>

	<section class="general-columns large-6 medium-12">

	<?php the_field('team-title'); ?>
	<img src='<?php the_field('team-image'); ?>' width="100%">
	<?php the_field('team-intro'); ?>

	</section>

	<section class="general-columns large-6 medium-12">
	<?php the_field('about-content'); ?>
	</section>

	</div>
</section>


<?php get_footer(); ?>
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

<section class="main-content">

	<header>
		 <h1><?php the_title(); ?> </h1>
		 <?php the_field('about-intro'); ?>
	</header>

	<div class="content-col">

		<?php the_field('team-title'); ?>
		<img src='<?php the_field('team-image'); ?>' >
		<?php the_field('team-intro'); ?>

	</div>

	<div class="content-col">

		<?php the_field('about-content'); ?>

	</div>

	<section class="content-cta">
	<a class="main-cta" href="<?php bloginfo('url'); ?>/contact/">Get in touch with us today <span>&#9658;</span></a>
	</section>

</section>


<?php get_footer(); ?>
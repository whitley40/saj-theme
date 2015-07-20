<?php
/*
	Template Name: Blank Two Column
*/
?>
<?php get_header(); ?>

		<?php
			$args = array(
				'post_type' => 'page'
				);
			$query = new WP_Query( $args );
		?>

<?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

<!-- if there is a featured image then stick it in here -->
		<?php if( get_the_post_thumbnail() ) : ?>
			<section class="saj-article-header large-12">
				<?php the_post_thumbnail('large'); ?>
			</section>
		<?php endif; ?>
<!-- //end header-->		

<section class="blank-page main-content large-12">
	<div class="centered group">

	<header class="large-12 general-columns">
		 <h1><?php the_field('blank-title'); ?></h1>
	</header>

	<section class="general-columns large-6 medium-12">
		<?php the_field('blank-content'); ?>
	</section>

	<section class="general-columns large-6 medium-12">
		<?php the_field('blank-content-two'); ?>
	</section>

	</div>
</section>

<?php endwhile;  endif; ?>


<?php get_footer(); ?>
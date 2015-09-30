<?php
/*
	Template Name: Projects Page
*/
?>
<?php get_header(); ?>

<section class="main-content large-12">
	<div class="centered group">

	<header class="large-12 general-columns">
		 <h1><?php the_title(); ?></h1>
	</header>

	<!-- Projects -->

	<?php
		$args = array(
			'post_type' => 'project'
			);
		$query = new WP_Query( $args );
		?>

		<!--<?php the_post_thumbnail(); ?> this will get me the featured image in the query loop -->

		

		<!-- Project Lead in -->
		<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
			<!-- this gets the featured image object and stores the array in a variable - its then echoed out in the background -->
			<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '', false, '' ); ?>
		<div class="project-wrap large-4 medium-12">	
			<a class="project-holder" href="<?php the_permalink(); ?>" style="background: url('<?php echo($src[0]) ?>') no-repeat;
  background-size: cover; background-position: center;">
				<div class="project-texttop">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="project-text">
					<h2><?php the_title(); ?></h2>
					<p>More Details <span>&#9658;</span></p>
				</div>
			</a>
		</div>
		<?php endwhile;  endif; wp_reset_postdata(); ?>

		


	</div>
</section>


<?php get_footer(); ?>
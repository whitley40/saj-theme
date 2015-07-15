<?php
/*
	Template Name: Single Project
*/
?>
<?php get_header(); ?>

<section class="main-content large-12">
	<div class="centered group">

	<header class="large-12 general-columns">
		 <h1><?php the_title(); ?></h1>
		 <p><?php the_field('project-excerpt'); ?></p>
		 <section class="project-banner large-12">
				<ul class="rslides" >
				  <li><img src="<?php the_field('project-image'); ?>"></li>
				</ul>
		</section>
	</header>

	<section class="large-12 medium-12">

		<section class="general-columns large-8 medium-12">
			<?php the_field('project-intro'); ?>
		</section>

		<section class="general-columns large-4 medium-12">
			<?php the_field('project-pricing'); ?>
		</section>

	</section>


	<section class="general-columns large-8 medium-12">
		<?php the_field('project-conclusion'); ?>
		<!-- <?php previous_post_link(); ?> add this in to link between projects-->
		
		<ul class="project-links">
		<li><a class="main-cta" href="<?php bloginfo('url'); ?>/contact">Get in touch <span>&#9658;</span></a></li>
		<li><a class="secondary-cta" href="<?php bloginfo('url'); ?>/projects/">Back to projects </a></li>
			<li><a class="main-cta" href="<?php bloginfo('url'); ?>/contact">Download PDF<span>&#9658;</span></a></li>
		</ul>
		<!-- <?php next_post_link(); ?> add this in to link between projects-->

	</section>

	



	</div>
</section>


<?php get_footer(); ?>
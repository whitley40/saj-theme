<?php
/*
	Template Name: Single Project
*/
?>
<?php get_header(); ?>

<section class="main-content single-project-page">

<div class="constraint-content">

	<header>
		 <h1><?php the_title(); ?></h1>
		 <p><?php the_field('project-excerpt'); ?></p>
	</header>

		<section class="project-intro">
			<?php the_field('project-intro'); ?>
		</section>

		<?php if ( get_field('project-logo') ) { ?>
		<section class="project-logos">
						<?php the_field('project-logo'); ?>
		</section>
		<?php } ?>

			<section class="project-share">
			<?php the_field('project-share'); ?>
		</section>


	<section class="project-link-area">
		<!-- <?php previous_post_link(); ?> add this in to link between projects-->
		
		<ul class="project-links">
			<!-- <li><a class="main-cta" href="<?php bloginfo('url'); ?>/contact">Get in touch <span>&#9658;</span></a></li> -->
			<li><a class="secondary-cta" href="<?php bloginfo('url'); ?>/projects/">Back to projects </a></li>
		</ul>
		<!-- <?php next_post_link(); ?> add this in to link between projects-->

	</section>



	</div>


</section>


<?php get_footer(); ?>
<?php get_header(); ?>



<?php if( have_posts() ): while( have_posts() ) : the_post(); ?>


<!-- if there is a featured image then stick it in here -->
		<?php if( get_the_post_thumbnail() ) : ?>
			<section class="saj-article-header large-12">
				<?php the_post_thumbnail('large'); ?>
			</section>
		<?php endif; ?>
<!-- //end header-->

<section class="main-content large-12">
	<div class="centered group">

		<section class="saj-article-content general-columns large-8 medium-12">	
		<a class="saj-blog-link" href="<?php bloginfo('url'); ?>/blog/">&laquo Back to blog</a>
		<h1><?php the_title(); ?></h1>
		<p><?php the_content(); ?></p>
		</section>

	</div>
</section>

<?php endwhile;  endif; ?>


<?php get_footer(); ?>
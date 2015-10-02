<?php get_header(); ?>



<?php if( have_posts() ): while( have_posts() ) : the_post(); ?>


<!-- if there is a featured image then stick it in here -->
		<?php if( get_the_post_thumbnail() ) : ?>
			<section class="saj-article-header">
				<?php the_post_thumbnail('large'); ?>
			</section>
		<?php endif; ?>
<!-- //end header-->

<section class="main-content">

		<section class="saj-article-content">	
		<a class="saj-blog-link" href="<?php bloginfo('url'); ?>/blog/">&laquo Back to blog</a>
		<h1><?php the_title(); ?></h1>
		<p><?php the_content(); ?></p>
		</section>

</section>

<?php endwhile;  endif; ?>


<?php get_footer(); ?>
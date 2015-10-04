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
		<div class="saj-author-block">
				<span class="saj-avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 24); ?></span>
				<span class="article-author"><?php the_author_posts_link(); ?></span>
				<p class="saj-article-time"><?php the_time('F j, Y'); ?></p>
				</div>
		<p><?php the_content(); ?></p>
		<section class="content-cta">
		 <a class="main-cta" href="<?php bloginfo('url'); ?>/contact/">Learn more about SAJ<span>&#9658;</span></a>
	</section>
		</section>



</section>

<?php endwhile;  endif; ?>


<?php get_footer(); ?>
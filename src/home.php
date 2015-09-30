<?php get_header(); ?>


<section class="main-content large-12">
	<div class="centered group">



	
	<!--  MAIN BLOGLIST AREA  -->


	<section class="articlelist general-columns large-8 medium-12">
			<h1>SAJ Transport Consultants Blog</h1>

		<?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

			<div class="saj-article-item">

				<h2><a class="article-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p class="saj-article-time"><?php the_time('F j, Y'); ?></p>
				<!--  simple if test will see if there is a featured image - if not this section wont display  -->
				<?php if( get_the_post_thumbnail() ) : ?>
					<div class="saj-article-thumb">
						<a class="article-link" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
					</div>
				<?php endif; ?>
				<p><?php echo strip_tags(get_the_excerpt()); ?></p>
				<!--<?php the_content(); ?>-->
				<!--<?php the_date(); ?>-->

				<div class="saj-author-block group">
				<span class="saj-avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 24); ?></span>
				<span class="article-author"><?php the_author_posts_link(); ?></span>
				</div>

				<!--<?php the_category(); ?>-->

			</div>

		 <?php endwhile;  else : ?>  

		<h1>Sorry, we don't have any posts right now.</h1>

		<?php endif; ?>
	</section>

	<!--  //END MAIN BLOGLIST AREA  -->


	</div>
</section>


<?php get_footer(); ?>
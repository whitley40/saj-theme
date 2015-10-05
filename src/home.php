<?php get_header(); ?>


<section class="main-content blog">


<header>
		 <h1>SAJ Transport Consultants Blog</h1>
	</header>

<!-- sort your blog list out -->

<section>
	<form>
			  <label class="p-type selected"><input type="radio" name="blog-type" value="All" checked><i>All Projects</i></label>
		<?php 
				$terms = get_terms( 'category' );
						 if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
						     echo '';
						     foreach ( $terms as $term ) {
						       echo '<label class="p-type">'. '<input type="radio" name="blog-type"' . 'value="' . $term->name . '">' . '<i>' . $term->name . '</i>' . '</label>';
						        
						     }
						     echo '';
		 					}
 		?>
 		</form>
 		</section>


	<!--  MAIN BLOGLIST AREA  -->


	<section class="articlelist">
			

		<?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

			<?php $blogcat = strip_tags(get_the_term_list( $post->ID, 'category', '', ' ', '')); ?>

			<div class="saj-article-item  All <?php echo($blogcat); ?>">

				<h2><a class="article-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="saj-author-block">
				<span class="saj-avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 24); ?></span>
				<span class="article-author"><?php the_author_posts_link(); ?></span>
				<p class="saj-article-time"><?php the_time('F j, Y'); ?></p>
				</div>
				
				<!--  simple if test will see if there is a featured image - if not this section wont display  -->
				<?php if( get_the_post_thumbnail() ) : ?>
					<div class="saj-article-thumb">
						<a class="article-link" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
					</div>
				<?php endif; ?>
				<p><?php echo strip_tags(get_the_excerpt()); ?></p>
				<!--<?php the_content(); ?>-->
				<!--<?php the_date(); ?>-->

				<!--<?php the_category(); ?>-->

			</div>

		 <?php endwhile;  else : ?>  

		<h1>Sorry, we don't have any posts right now.</h1>

		<?php endif; ?>

		<section class="content-cta">
		 <a class="main-cta" href="<?php bloginfo('url'); ?>/contact/">Learn more about SAJ<span>&#9658;</span></a>
	</section>

	</section>

	<!--  //END MAIN BLOGLIST AREA  -->

	

</section>


<?php get_footer(); ?>
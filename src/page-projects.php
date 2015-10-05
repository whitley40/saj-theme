<?php
/*
	Template Name: Projects Page
*/
?>
<?php get_header(); ?>



<section class="main-content project-page">

	<header>
		 <h1><?php the_title(); ?></h1>
	</header>

	<!-- Dynamic List based on project types -->

	<section>
	<form>
			  <label class="p-type selected"><input type="radio" name="project-type" value="All" checked><i>All Projects</i></label>
		<?php 
				$terms = get_terms( 'project-type' );
						 if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
						     echo '';
						     foreach ( $terms as $term ) {
						       echo '<label class="p-type">'. '<input type="radio" name="project-type"' . 'value="' . $term->name . '">' . '<i>' . $term->name . '</i>' . '</label>';
						        
						     }
						     echo '';
		 					}
 		?>
 		</form>
	</section>



<?php
		$args = array(
			'post_type' => 'project'
			);
		$query = new WP_Query( $args );
		?>



	

		<!--<?php the_post_thumbnail(); ?> this will get me the featured image in the query loop -->

		
		<section class="all-projects">


					<!-- Project Lead in -->
					<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>

						<!-- testing getting the cats -->
						
						<!-- this gets the featured image object and stores the array in a variable - its then echoed out in the background -->
						<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '', false, '' ); ?>
						<!-- get the category type for project posts -->
						<?php $project = strip_tags(get_the_term_list( $post->ID, 'project-type', '', ' ', '')); ?>
	
					<section class="single-project All <?php echo($project); ?>">	
						<a class="project-holder" href="<?php the_permalink(); ?>" style="background: #2e2e2e url('<?php echo($src[0]) ?>') no-repeat;
			  background-size: cover; background-position: center;">

							<div class="project-text">
								<h2><?php the_title(); ?></h2>
								<p>More Details &raquo</p>
							</div>
						</a>
					</section>
					<?php endwhile;  endif; wp_reset_postdata(); ?>
		</section>

		
</section>


<?php get_footer(); ?>
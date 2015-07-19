<section class="main-tagline large-12">
	<div class="centered group">
		<?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
		 <?php the_field('home-tagline'); ?>
		 <?php endwhile;  endif; wp_reset_postdata(); ?>
		<div class="readme"><span class="readmore"></span></div>
		</div>
	</section>
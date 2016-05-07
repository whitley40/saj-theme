<?php
/*
	Template Name: About Page
*/
?>
<?php get_header(); ?>

		<?php
			$args = array(
				'post_type' => 'page'
				);
			$query = new WP_Query( $args );
		?>

<section class="main-content">

	<div class="content-col">
		<?php the_field('team-intro'); ?>
	</div>

	<div class="content-col">
		<?php the_field('about-content'); ?>
	</div>

	<section class="our-people">
	<h1><?php the_field('people-title'); ?></h1>
	<p><?php the_field('people-intro'); ?></p>
	<div class="profiles">

  <?php
    $args = array(
      'post_type' => 'people'
      );
    $query = new WP_Query( $args );
    ?>

    <?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>
		
  <!-- start profile -->
  <a href="mailto:<?php the_field('people-card-email-address') ?>" class="profile-link">
    <img src="<?php the_field('people-card-profile-image') ?>
" alt="avatar" class="pic" />
    <h1><?php the_field('people-card-title'); ?></h1>
    <h2><?php the_field('people-card-role'); ?></h2>
    <div class="info">

      <?php the_field('people-card-info'); ?>

    </div>
    <button class="main-cta"><?php the_field('people-card-email-name'); ?></button>
  </a>
  <!-- //end profile -->

  <?php endwhile;  else : ?>  

      <section>
        <p>We do have people who work for us, honest!</p>
      </section>
    

    <?php endif; wp_reset_postdata(); ?>


	</div>
</section>

	

</section>




<?php get_footer(); ?>
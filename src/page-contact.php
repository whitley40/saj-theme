<?php
/*
	Template Name: Contact Page
*/
?>
<?php get_header(); ?>

<section class="main-content contact-page">

	<header>
		 <h1><?php the_title(); ?> </h1>
	</header>

	<div class="content-col">
	<?php
		$args = array(
			'post_type' => 'page'
			);
		$query = new WP_Query( $args );
	?>


	<?php the_field('contact_info'); ?>


	</div>

	<div class="content-col contact-map">

	<h2>On the Map</h2>

	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2290.198565867729!2d-1.6183929000000001!3d54.9696169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487e70b5205e5c6d%3A0x37bf951fdcf37fee!2sNewcastle+upon+Tyne%2C+Tyne+and+Wear+NE1+5DW%2C+UK!5e0!3m2!1sen!2sus!4v1433266361635" width="100%" height="450" frameborder="0" style="border:0"></iframe>
	</div>


</section>


<?php get_footer(); ?>
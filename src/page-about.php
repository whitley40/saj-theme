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

	<section class="content-cta">
	<a class="main-cta" href="<?php bloginfo('url'); ?>/contact/">Get in touch with us today <span>&#9658;</span></a>
	</section>

	<section class="our-people">
	<h1>Our People</h1>
	<p>A big list of our people.</p>
	<div class="profiles">
		
  <!-- start profile -->
  <a href="#" class="profile-link">
    <img src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAK4AAAAJDA4OWJmZGExLTgyMDItNDY3My05ZjIyLTIzMzQzNjVmZGE2Ng.jpg
" alt="avatar" class="pic" />
    <h1>Steve Jobey</h1>
    <h2>Director</h2>
    <div class="info">

      <p>Steve was previously a Technical Director at an international engineering and environmental consultancy responsible for civil engineering and transportation. </p>
      <p>With over 30 years of experience in development planning, Steve has been involved in numerous major developments across the country, advising clients at strategic levels.</p>
      <p>Steve is a Chartered Civil Engineer and is a Member of the Chartered Institution of Highways and Transportation.</p>

    </div>
    <span>Email Steve</span>
  </a>
  <!-- //end profile -->

  <!-- start profile -->
  <a href="#" class="profile-link">
    <img src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAKGAAAAJDMzNDJhYmE3LTk0YzUtNDcxOS05MDZhLWEyOWUyNjM5Zjk0Mg.jpg" alt="avatar" class="pic" />
    <h1>Patrick Wong</h1>
    <h2>Associate Director</h2>
    <div class="info">

      <p>Patrick is an experienced transport planner and transport modeller, with an MSc in Transport Engineering and Operations.</p>
      <p>With over 15 years of experience in transport planning, Patrick has involved in many major developments across the country. 
      </p>
      <p>Patrick is a Member of the Chartered Institution of Highways and Transportation and a committee member of the industrial panel at Transport Operations and Research Group at Newcastle University.</p>

    </div>
    <span>Email Patrick</span>
  </a>
  <!-- //end profile -->


	</div>
</section>

	

</section>




<?php get_footer(); ?>
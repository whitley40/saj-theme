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

<!-- 	<section class="content-cta">
	<a class="main-cta" href="<?php bloginfo('url'); ?>/contact/">Get in touch with us today <span>&#9658;</span></a>
	</section> -->

	<section class="our-people">
	<h1>Our People</h1>
	<p>Get in touch with our team!</p>
	<div class="profiles">
		
  <!-- start profile -->
  <a href="#" class="profile-link">
    <img src="<?php bloginfo('template_directory'); ?>/imgs/pro-sj.jpg
" alt="avatar" class="pic" />
    <h1>Steve Jobey</h1>
    <h2>Director</h2>
    <div class="info">

      <p>Steve was previously a Technical Director at an international engineering and environmental consultancy responsible for civil engineering and transportation. </p>
      <p>With over 30 years of experience in development planning, Steve has been involved in numerous major developments across the country, advising clients at strategic levels.</p>
      <p>Steve is a Chartered Civil Engineer and is a Member of the Chartered Institution of Highways and Transportation.</p>

    </div>
    <button class="main-cta">Email Steve</button>
  </a>
  <!-- //end profile -->

  <!-- start profile -->
  <a href="#" class="profile-link">
    <img src="<?php bloginfo('template_directory'); ?>/imgs/pro-pwong.jpg
" alt="avatar" class="pic" />
    <h1>Patrick Wong</h1>
    <h2>Associate Director</h2>
    <div class="info">

      <p>Patrick is an experienced transport planner and transport modeller, with an MSc in Transport Engineering and Operations.</p>
      <p>With over 15 years of experience in transport planning, Patrick has involved in many major developments across the country. 
      </p>
      <p>Patrick is a Member of the Chartered Institution of Highways and Transportation and a committee member of the industrial panel at Transport Operations and Research Group at Newcastle University.</p>

    </div>
    <button class="main-cta">Email Patrick</button>
  </a>
  <!-- //end profile -->

  <!-- start profile -->
  <a href="#" class="profile-link">
    <img src="<?php bloginfo('template_directory'); ?>/imgs/pro-pb.jpg
" alt="avatar" class="pic" />
    <h1>Paul Bigg</h1>
    <h2>Principal Transport Consultant</h2>
    <div class="info">
<p>Paul Bigg is an experienced transport engineer and transport planner, with over 30 years of experience in transport planning. Having moved to the North East for 4 years, Paul has been involved in numerous developments across the country. Paul is a Member of the Chartered Institution of Highways and Transportation.</p>
    </div>
    <button class="main-cta">Email Paul B</button>
  </a>
  <!-- //end profile -->

  <!-- start profile -->
  <a href="#" class="profile-link">
    <img src="<?php bloginfo('template_directory'); ?>/imgs/pro-pw.jpg
" alt="avatar" class="pic" />
    <h1>Paul Whitley</h1>
    <h2>Senior Transport Consultant</h2>
    <div class="info">

      <p>Paul Whitley is a transport planner with a MSc in Transport Planning and Policy. With over 8 years of experience, Paul has developed a broad range of transport planning skills and involved in many successful developments. Paul is a Member of Transport Planning Society.</p>

    </div>
    <button class="main-cta">Email Paul W</button>
  </a>
  <!-- //end profile -->

  <!-- start profile -->
  <a href="#" class="profile-link">
    <img src="<?php bloginfo('template_directory'); ?>/imgs/pro-lw.jpg
" alt="avatar" class="pic" />
    <h1>Lewis Walker</h1>
    <h2>Transport Engineer</h2>
    <div class="info">

      <p>Lewis is a graduate engineer with a BSc (Hons) in Geography. Formerly working at a major engineering firm, Lewis undertakes technical engineering design and prepares transport models. Lewis is a Member of Transport Planning Society.</p>

    </div>
    <button class="main-cta">Email Lewis</button>
  </a>
  <!-- //end profile -->

  <!-- start profile -->
  <a href="#" class="profile-link">
    <img src="<?php bloginfo('template_directory'); ?>/imgs/pro-jw.jpg
" alt="avatar" class="pic" />
    <h1>Joana Wong</h1>
    <h2>Role</h2>
    <div class="info">

      <p>Role Desciption</p>

    </div>
    <button class="main-cta">Email Joana</button>
  </a>
  <!-- //end profile -->



	</div>
</section>

	

</section>




<?php get_footer(); ?>
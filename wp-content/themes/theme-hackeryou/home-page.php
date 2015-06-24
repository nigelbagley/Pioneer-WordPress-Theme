<?php

/*
	Template Name: Home-Page
*/

get_header();  ?>

<div class="landing-header">
	<div class="orange-boxes">
		<div class="orange-box-social">
			<img src="<?php bloginfo('template_directory') ?>/img/flickrWhite.png"alt="">
		</div>
		<div class="orange-box-social">
			<img src="<?php bloginfo('template_directory') ?>/img/twitterWhite.png" alt="">
		</div>
		<div class="orange-box-social">
			<img src="<?php bloginfo('template_directory') ?>/img/dribbbleWhite.png"  alt="">
		</div>
	</div>


	<!-- <h2>Pioneer Creative Studio</h2> -->


</div>

 <div class="main">
  <div class="container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>

  </div> 
</div>   

<?php get_footer(); ?>
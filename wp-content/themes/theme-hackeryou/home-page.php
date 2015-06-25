<?php

/*
	Template Name: Home-Page
*/

get_header();  ?>

<div class="landing-header">
	<div class="header-container">
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
		<h2>Pioneer <span>Creative</span> Studio</h2>
		<h3><span>Music Production</span> <span>Graphic Design</span> <span>Web Design</span> <span>Photography</span></h3>
	</div>
</div>

 <div class="main">
  <div class="container">
<div class="services-container">
   <h3>Services</h3>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus accusantium repellendus consequatur dolor aperiam molestiae error. Pariatur, consequatur molestias temporibus.</p>
</div>
<div class="services-description">
	<div class="description-box">
		<div class="description-icon">
			<img src="<?php bloginfo('template_directory') ?>/img/musicIcon.jpg" alt="">
		</div>
		<div class="description">
			<h3>Music Production</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, praesentium!</p>
			<a href="#">Read More</a>
		</div>
	</div>
	<div class="description-box">
	<div class="description-icon">
		<img src="<?php bloginfo('template_directory') ?>/img/photoIcon.jpg" alt="">
	</div>
		<div class="description">
			<h3>Photo Editing</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, praesentium!</p>
			<a href="#">Read More</a>
		</div>
	</div>
	<div class="description-box">
	<div class="description-icon">
		<img src="<?php bloginfo('template_directory') ?>/img/graphicDesignIcon.jpg" alt="">
	</div>
		<div class="description">
			<h3>Graphic Design</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, praesentium!</p>
			<a href="#">Read More</a>
		</div>
	</div>
</div>
<div class="services-container">
	 <a href="#">Contact Us</a>
	 <h3>Portfolio</h3>
	 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem vitae explicabo rem voluptatibus tempora. Aspernatur, iusto consectetur maxime modi cum!</p>
 </div>
</div>
<div class="portfolio">
	<div class="services-container">
		<a href="#">Production</a>
		<a href="#">Design</a>
		<a href="#">Photography</a>
		<a href="#">Production</a>
	</div>
	<div class="portoflio-pieces">
		<div class="portfolio-boxes">
			<img src="http://www.fillmurray.com/350/350" alt="">
		</div>
		<div class="portfolio-boxes">
			<img src="http://www.fillmurray.com/350/350" alt="">
		</div>
		<div class="portfolio-boxes">
			<img src="http://www.fillmurray.com/350/350" alt="">
		</div>
		<div class="portfolio-boxes">
			<img src="http://www.fillmurray.com/350/350" alt="">
		</div>
		<div class="portfolio-boxes">
			<img src="http://www.fillmurray.com/350/350" alt="">
		</div>
		<div class="portfolio-boxes">
			<img src="http://www.fillmurray.com/350/350" alt="">
		</div>
		<div class="portfolio-boxes">
			<img src="http://www.fillmurray.com/350/350" alt="">
		</div>
		<div class="portfolio-boxes">
			<img src="http://www.fillmurray.com/350/350" alt="">
		</div>

	</div>
</div>   
.<div class="services-container">
<h3>Our Team</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora voluptas, cumque ullam consequuntur iusto dolore minus. Quod repudiandae error, rerum.</p>
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
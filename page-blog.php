<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>

	<section id="cd-timeline" class="cd-container">
		<div class="cd-timeline-block">
<?php get_header();
$query = new WP_Query( array (
	'post_type' => 'actualite',
	'posts_per_page' => -1,
	'orderby' => 'date',
	'order' => 'DESC',
));
	if ($query->have_posts()){
			while ($query->have_posts()){
					$query->the_post();

?>
<!--@TODO: Voir pourl'aternance des box (Gauche / Droite) -->
	<section id="cd-timeline" class="cd-container">
		<div class="cd-timeline-block">
			<!--@TODO : Voir avec Luca pour le pictogramme -->
			<div class="cd-timeline-img cd-picture">
				<img src="<?php bloginfo('template_url'); ?>/build/img/cd-icon-picture.svg" alt="Picture">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>The Day I Met The Action Sports Scene</h2>
				<p>he Hexo+ booth was located in Hall A1 together with the action sports industry. Around us in the BRANDNEW village, innovative products that had been selected and identified as the best 50 start ups and put in the spotlight. It gave us the chance to present Hexo+ to some of you backers, and also the industry and we saw stars in people’s eyes, from world top riders to video makers and journalists.</p>
				<a href="#0" class="cd-read-more">Read more</a>
				<span class="cd-date">Feb 10</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-movie">
				<img src="<?php bloginfo('template_url'); ?>/build/img/cd-icon-movie.svg" alt="Movie">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>ISPO here we come!</h2>
				<p>On the heels of the Consumer Electronic Show in Las Vegas where the HEXO+ system and companion app won 3 awards from the tech scene after media demos in the desert, part of our team is getting ready to meet the action sports scene at ISPO - Munich, Germany, @Munich Messe 5-8th Feb</p>
				<a href="#0" class="cd-read-more">Read more</a>
				<span class="cd-date">Jan 29</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<img src="<?php bloginfo('template_url'); ?>/build/img/cd-icon-picture.svg" alt="Picture">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>CES Presentation</h2>
				<a href="#0" class="cd-read-more">Read more</a>
				<span class="cd-date">Jan 24</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-location">
				<img src="<?php bloginfo('template_url'); ?>/build/img/cd-icon-location.svg" alt="Location">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>Bluetooth: it is flying!</h2>
				<p>It is now time to update you about where we stand with regards to the communication link between the smartphone and the drone. Technically, the solution widely used today is telemetry dongles at different frequency bands depending on the country you are located (433MHz, 868MHz or 915Mhz). This however requires to have an additional piece of hardware connected on the smartphone. This is why we have investigated an other solution to have a direct connection with the drone without additionnal piece of hardware: Bluetooth.</p>
				<a href="#0" class="cd-read-more">Read more</a>
				<span class="cd-date">Jan 12</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<img src="<?php bloginfo('template_url'); ?>/build/img/cd-icon-picture.svg" alt="Picture">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>My first CES: that’s a wrap baby, that’s a wrap!</h2>
				<a href="#0" class="cd-read-more">Read more</a>
				<span class="cd-date">Jan 9</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-movie">
				<img src="<?php bloginfo('template_url'); ?>/build/img/cd-icon-movie.svg" alt="Movie">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>Let the show begin</h2>
				<p>Here we are, D-Day has come and we’re ready to face the most tech savvy and hot products hunters present at the CES. All the consumer electronics products that will be hot in 2015 are at CES and we gotta stand out. I’ve been going to CES for 6 years and always get very excited to confront what we’ve been developing and get feedback from future customers, users, press, investors, all in one place, it’s a great place to learn about your audience and get instant feedback on their needs, what’s cool ,what’s not.</p>
				<span class="cd-date">Jan 5</span>
				<h2><?php the_title() ?></h2>
				<p><?php the_field('chapeau') ?></p>
				<a href="<?php the_permalink() ?>" class="cd-read-more">Lire plus</a>
				<span class="cd-date"><?php the_date() ?></span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
	</section> <!-- cd-timeline -->

<?php get_footer(); ?>
<?php
		}
	}
get_footer(); ?>

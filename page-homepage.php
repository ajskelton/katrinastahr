<?php
/*
 Template Name: Homepage
*/
?>

<?php get_header(); ?>

<?php $about_image = get_field('about_image'); $parallax_1 = get_field('parallax_1'); $parallax_2 = get_field('parallax_2');  ?>

	<div id="hero">
		<div class="parallax">
			<div class="parallax__layer parallax__layer--back-hero"></div>
			<div class="parallax__layer parallax__layer--base-hero">
				<p class="hero">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus corrupti dicta odit perspiciatis, at harum sit perferendis aspernatur numquam error iure odio pariatur, eius laboriosam cupiditate eligendi alias id dolor.</p>
			</div>
		</div>
	</div>

		<div id="about" class="cf">
			<div class="m-all t-1of2 d-1of2">
				<img src="<?php echo $about_image['url']; ?>" alt="">
			</div>
			<div class="m-all t-1of2 d-1of2 last-col">
				<p>
					<?php the_field('about_section'); ?>
				</p>
			</div>
		</div>

	<div class="parallax">
		<div class="parallax__layer parallax__layer--back" style="background: url('<?php echo $parallax_1['url']; ?>') center center fixed"></div>
		<div class="parallax__layer parallax__layer--base"></div>
	</div>

		<div id="music" class="cf">
			<h2>Music</h2>
			<div class="wrap">
				<?php the_field('music_section'); ?>
			</div>
		</div>

	<div class="parallax">
		<div class="parallax__layer parallax__layer--back" style="background: url('<?php echo $parallax_2['url']; ?>') center center fixed"></div>
		<div class="parallax__layer parallax__layer--base"></div>
	</div>

		<div id="shows" class="cf">
			<h2>Upcoming Shows</h2>
			<div class="wrap">
				<?php the_field('shows_section'); ?>
			</div>
			<h3>Recent Shows</h3>
			<div class="wrap">
				<?php the_field('shows_archive'); ?>
			</div>
		</div>

	<div class="parallax">
		<div class="parallax__layer parallax__layer--back"></div>
		<div class="parallax__layer parallax__layer--base"></div>
	</div>

		<div id="videos">
			
		</div>

	<div class="parallax">
		<div class="parallax__layer parallax__layer--back"></div>
		<div class="parallax__layer parallax__layer--base"></div>
	</div>

		<div id="contact">
			<h2>Contact Me</h2>
			<div class="wrap">
				<?php echo do_shortcode( '[contact-form-7 id="887" title="Contact form 1"]' ); ?>
			</div>
		</div>

<?php get_footer(); ?>

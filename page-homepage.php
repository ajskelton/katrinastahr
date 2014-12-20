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
				<p class="hero">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus corrupti dicta odit perspiciatis.</p>
			</div>
		</div>
	</div>

		<section id="about" name="about" class="entry-content cf">
			<header><h2>About Katrina</h2></header>
			<div class="wrap">
				<!-- <div class="m-all t-1of2 d-1of2">
					<img src="<?php echo $about_image['url']; ?>" alt="">
				</div>
				<div class="m-all t-1of2 d-1of2 last-col"> -->
					<!-- <p> -->
						<?php the_field('about_section'); ?>
					<!-- </p> -->
				<!-- </div> -->
			</div>
		</section>

	<div class="parallax">
		<div class="parallax__layer parallax__layer--back" style="background: url('<?php echo $parallax_1['url']; ?>') center center fixed"></div>
		<div class="parallax__layer parallax__layer--base"></div>
	</div>

		<section id="music" name="music" class="entry-content cf">
			<h2>Music</h2>
			<div class="wrap">
				<?php the_field('music_section'); ?>
			</div>
		</section>

	<div class="parallax">
		<div class="parallax__layer parallax__layer--back" style="background: url('<?php echo $parallax_2['url']; ?>') center center fixed"></div>
		<div class="parallax__layer parallax__layer--base"></div>
	</div>

		<section id="shows" name="shows" class="entry-content cf">
			<h2>Upcoming Shows</h2>
			<div class="wrap">
				<?php the_field('shows_section'); ?>
			</div>
			<h3>Past Shows</h3>
			<div class="wrap">
				<?php the_field('shows_archive'); ?>
			</div>
		</section>

	<div class="parallax">
		<div class="parallax__layer parallax__layer--back"></div>
		<div class="parallax__layer parallax__layer--base"></div>
	</div>

		<section id="videos" name="videos" class="entry-content cf">
			<div class="wrap">
				
			</div>
		</section>

	<div class="parallax">
		<div class="parallax__layer parallax__layer--back"></div>
		<div class="parallax__layer parallax__layer--base"></div>
	</div>

		<section id="contact" name="contact">
			<h2>Contact Me</h2>
			<div class="wrap">
				<?php echo do_shortcode( '[contact-form-7 id="887" title="Contact form 1"]' ); ?>
			</div>
		</section>

<?php get_footer(); ?>

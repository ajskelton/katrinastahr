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
			<header>
				<h2>About Katrina</h2>
			</header>
			<div class="wrap">
				<?php the_field('about_section'); ?>				
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

		<section id="gallery" name="gallery" class="entry-content cf">
			<header>
				<h2>Gallery</h2>		
			</header>
			<div class="wrap">
				<?php echo do_shortcode( '[si_feed size=medium limit=16]' ); ?>
			</div>
		</section>

	<div class="parallax">
		<div class="parallax__layer parallax__layer--back"></div>
		<div class="parallax__layer parallax__layer--base"></div>
	</div>

		<section id="connect" name="connect">
			<h2>Connect With Katrina</h2>
			<div class="wrap cf">
				<div class="left-half">
					<?php echo do_shortcode( '[contact-form-7 id="887" title="Contact form 1"]' ); ?>					
				</div>
				<div class="right-half">
					<?php the_field('connect'); ?>
					<div class="social">
						<div class="icon-wrap">
							<a href="https://www.facebook.com/katrinastahr" target="_blank">
								<svg class="icon">
									<use xlink:href="#shape-facebook" />
								</svg>
							</a>
						</div>
						<div class="icon-wrap">
							<a href="https://twitter.com/KatrinaStahr" target="_blank">
								<svg class="icon">
									<use xlink:href="#shape-twitter" />
								</svg>
							</a>
						</div>
						<div class="icon-wrap">
							<a href="#">
								<svg class="icon">
									<use xlink:href="#shape-instagram" />
								</svg>
							</a>
						</div>
						<div class="icon-wrap">
							<a href="https://soundcloud.com/katrina-stahr">
								<svg class="icon">
									<use xlink:href="#shape-soundcloud" />
								</svg>
							</a>
						</div>
					</div>
				</div>

			</div>
		</section>

<?php get_footer(); ?>

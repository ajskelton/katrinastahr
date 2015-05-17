<?php
/*
 Template Name: Homepage
*/
?>

<?php get_header(); ?>

<?php  $image = get_field('main_image'); 
		$about_image = get_field('about_image');
		$parallax_1 = get_field('parallax_1');
		$parallax_2 = get_field('parallax_2');
		$parallax_3 = get_field('parallax_3');
		$parallax_4 = get_field('parallax_4');
		$parallax_5 = get_field('parallax_5');
 ?>

	 <div id="header-image" class="header-image"style="background: url('<?php echo $image['url']; ?>') no-repeat center center; background-size:cover;">
		<p>
			New album coming soon
			<svg class="itunes">
				<use xlink:href="#shape-itunes-preorder" />
			</svg>
		</p>
	</div>
	<div class="newsletter cf">
		<?php echo do_shortcode('[mc4wp_form]'); ?>
	</div>

	<div id="hero">
		<div class="parallax">
			<div class="parallax__layer parallax__layer--back-hero"></div>
			<div class="parallax__layer parallax__layer--base-hero">
				<h3 class="hero-parallax main-hero"><?php the_field('hero_statement');?></h3>
			</div>
		</div>
	</div>

		<section id="about" name="about" class="entry-content cf">
			<header>
				<h2>About Katrina</h2>
			</header>
			<div class="wrap">
				<?php the_field('about_section'); ?>
				<h3>Latest Twitter Feed</h3>
					<div class="cf">
						<?php db_twitter_feed() ?>				
					</div>
				<div class="quick-links">
					<p>Follow Katrina on</p>
					<div class="icon-wrap">
						<a href="https://www.facebook.com/katrinastahr">
							<svg class="icon facebook">
								<use xlink:href="#shape-facebook" />
							</svg>
						</a>
					</div>
					<p>and</p>
					<div class="icon-wrap">
						<a href="https://twitter.com/KatrinaStahr">
							<svg class="icon twitter">
								<use xlink:href="#shape-twitter" />
							</svg>
						</a>
					</div>
				</div>				
			</div>
		</section>

	<div class="parallax">
		<div class="parallax__layer parallax__layer--back" style="background-image: url('<?php echo $parallax_1['url']; ?>');background-size:cover;"></div>
		<div class="parallax__layer parallax__layer--base"></div>
	</div>

		<section id="music" name="music" class="entry-content cf">
			<h2>Music</h2>
			<div class="wrap">
				<?php the_field('music_section'); ?>
				<div class="quick-links">
					<p>Hear more music on</p>
					<div class="icon-wrap">
						<a href="https://soundcloud.com/katrina-stahr">
							<svg class="icon soundcloud">
								<use xlink:href="#shape-soundcloud" />
							</svg>
						</a>
					</div>
					<div class="icon-wrap">
						<a href="#" id="">
							<svg class="icon spotify">
								<use xlink:href="#shape-spotify" />
							</svg>
						</a>
					</div>
				</div>
			</div>
		</section>

		<?php 
			$palette = colorPalette($parallax_2['url'], 10, 4); 
			$text_color = getContrast50($palette[0]);
		?>

	<div class="parallax">
		<h3 class="hero-parallax" style="color:<?php echo $text_color; ?>">Fall into my trap forever carry that torch for me sink into my velvet lips lose yourself in me fancy cars and diamond rings oh how you spoil me little do you know your trapped eternaly with me I'm your gatsby girl</h3>
		<div class="parallax__layer parallax__layer--back" style="background-image: url('<?php echo $parallax_2['url']; ?>');background-size:cover;"></div>
		<div class="parallax__layer parallax__layer--base"></div>
	</div>

		<section id="shows" name="shows" class="entry-content cf">
			<h2>Upcoming Shows</h2>
			<div class="wrap">
				<?php the_field('shows_section'); ?>
			</div>
			<!-- <?php echo '<pre>'; print_r( _get_cron_array() ); echo '</pre>'; ?> -->
			<h3>Past Shows</h3>
			<div class="wrap">
				<?php the_field('shows_archive'); ?>
				<div class="quick-links">
				<p>View more past shows on</p>
					<div class="icon-wrap">
						<a href="http://www.bandsintown.com/KatrinaStahr">
							<svg class="icon bandsintown-social">
								<use xlink:href="#shape-bandsintown" />
							</svg>
						</a>
					</div>
				</div>
			</div>
		</section>

		<?php 
			$palette = colorPalette($parallax_3['url'], 10, 4); 
			$text_color = getContrast50($palette[0]);
		?>

	<div class="parallax">
		<div class="parallax__layer parallax__layer--back" style="background-image: url('<?php echo $parallax_3['url']; ?>');background-size:cover;"></div>
		<div class="parallax__layer parallax__layer--base"></div>
	</div>

		<section id="photos" name="photos" class="entry-content cf">
			<header>
				<h2>Photos</h2>		
			</header>
			<div class="wrap">
			<p class="center">Check out Katrina's most recent Instagram photos.</p>

                <?php echo do_shortcode( '[si_feed size=medium limit=16 user=1803529525]' ); ?>
				<div class="quick-links">
					<p>See more photos on</p>
					<div class="icon-wrap">
	                    		<a href="https://instagram.com/katrinastahr">
	                         	 	<svg class="icon instagram">
	                                		<use xlink:href="#shape-instagram" />
	                            	</svg>
						</a>
					</div>
				</div>
			</div>
		</section>

		<?php 
			$palette = colorPalette($parallax_4['url'], 10, 4); 
			$text_color = getContrast50($palette[0]);
				
		?>

	<div class="parallax">
		<h3 class="hero-parallax" style="color:<?php echo $text_color; ?>">I feel pain when you drink it rumbles through my soul lightening is gonna strike with your last sip from the bottle lord knows it's killing me inside but I keep holding on</h3>
		<div class="parallax__layer parallax__layer--back" style="background-image: url('<?php echo $parallax_4['url']; ?>');background-size:cover;"></div>
		<div class="parallax__layer parallax__layer--base"></div>
	</div>

	<section id="videos" name="videos" class="entry-content cf">
		<header>
			<h2>Videos</h2>		
		</header>
		<div class="wrap videos">
			<?php the_field('videos'); ?>
			<div class="quick-links">
					<p>See more videos on</p>
					<div class="icon-wrap">
	                    		<a href="https://www.youtube.com/channel/UCU2yXKuaarmTtg9d6EqEIXQ">
	                         	 	<svg class="icon youtube">
	                                		<use xlink:href="#shape-youtube" />
	                            	</svg>
						</a>
					</div>
				</div>
		</div>
	</section>

	<div class="parallax">
		<h3 class="hero-parallax" style="color:<?php echo $text_color; ?>">Your favorite perfume ruby red lipstick I'm waiting so patiently mood music's playing red wine and candles lit now is the time tonight is our night</h3>
		<div class="parallax__layer parallax__layer--back" style="background-image: url('<?php echo $parallax_5['url']; ?>');background-size:cover;"></div>
		<div class="parallax__layer parallax__layer--base"></div>
	</div>

		<section id="connect" name="connect">
			<h2>Connect With Katrina</h2>
			<div class="wrap squeeze cf">
				<div class="">
					<?php the_field('connect'); ?>
					<h3>Get Social</h3>
					<div class="social">
						<div class="icon-wrap">
							<a href="https://www.facebook.com/katrinastahr" target="_blank">
								<svg class="icon facebook">
									<use xlink:href="#shape-facebook" />
								</svg>
							</a>
						</div>
						<div class="icon-wrap">
							<a href="https://twitter.com/KatrinaStahr" target="_blank">
								<svg class="icon twitter">
									<use xlink:href="#shape-twitter" />
								</svg>
							</a>
						</div>
						<div class="icon-wrap">
							<a href="https://instagram.com/KatrinaStahr" target="_blank">
								<svg class="icon instagram">
									<use xlink:href="#shape-instagram" />
								</svg>
							</a>
						</div>
						<div class="icon-wrap">
							<a href="https://soundcloud.com/katrina-stahr">
								<svg class="icon soundcloud">
									<use xlink:href="#shape-soundcloud" />
								</svg>
							</a>
						</div>
						<div class="icon-wrap">
							<a href="http://www.bandsintown.com/KatrinaStahr">
								<svg class="icon bandsintown-social">
									<use xlink:href="#shape-bandsintown" />
								</svg>
							</a>
						</div>
						<div class="icon-wrap">
							<a href="http://www.reverbnation.com/katrinastahr">
								<svg class="icon reverbnation">
									<use xlink:href="#shape-reverbnation" />
								</svg>
							</a>
						</div>
						<div class="icon-wrap">
							<a href="https://www.youtube.com/channel/UCU2yXKuaarmTtg9d6EqEIXQ">
								<svg class="icon youtube">
									<use xlink:href="#shape-youtube" />
								</svg>
							</a>
						</div>
						<div class="icon-wrap">
							<a href="#" id="">
								<svg class="icon spotify">
									<use xlink:href="#shape-spotify" />
								</svg>
							</a>
						</div>
					</div>
				</div> <!-- end left-half -->
			</div>
		</section>

<?php get_footer(); ?>

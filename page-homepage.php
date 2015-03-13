<?php
/*
 Template Name: Homepage
*/
?>

<?php get_header(); ?>

<?php  $about_image = get_field('about_image');
		$parallax_1 = get_field('parallax_1');
		$parallax_2 = get_field('parallax_2');
		$parallax_3 = get_field('parallax_3');
		$parallax_4 = get_field('parallax_4');
 ?>

	<div id="hero">
		<div class="parallax">
			<div class="parallax__layer parallax__layer--back-hero"></div>
			<div class="parallax__layer parallax__layer--base-hero">
				<p class="hero" data-bottom-top="margin-top:-200px;" data-top-bottom="margin-top:100px;"><?php the_field('hero_statement');?></p>
			</div>
		</div>
	</div>

		<section id="about" name="about" class="entry-content cf">
			<header>
				<h2>About Katrina</h2>
			</header>
			<div class="wrap">
				<?php the_field('about_section'); ?>
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
		<div class="parallax__layer parallax__layer--back" style="background: url('<?php echo $parallax_1['url']; ?>') center 120px fixed"></div>
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
				</div>
			</div>
		</section>

		<?php 
			$palette = colorPalette($parallax_2['url'], 10, 4); 
			$text_color = getContrast50($palette[0]);
		?>

	<div class="parallax">
		<h3 class="hero-parallax" style="color:<?php echo $text_color; ?>" data-bottom-top="margin-top:-100px;" data-top-bottom="margin-top:100px;">Meet me under the moon tonight where I'll seduce you with a wink of an eye</h3>
		<div class="parallax__layer parallax__layer--back" style="background: url('<?php echo $parallax_2['url']; ?>') center 120px fixed"></div>
		<div class="parallax__layer parallax__layer--base"></div>
	</div>

		<section id="shows" name="shows" class="entry-content cf">
			<h2>Upcoming Shows</h2>
			<div class="wrap">
				<?php the_field('shows_section'); ?>
				<div class="widget_iframe" style="display:inline-block;width:100%;height:550px;margin:0;padding:0;border:0;"><iframe class="widget_iframe" src="http://www.reverbnation.com/widget_code/html_widget/artist_4211802?widget_id=52&pwc[design]=default&pwc[background_color]=%23333333&pwc[layout]=detailed&pwc[show_map]=0%2C1&pwc[size]=fit" width="100%" height="100%" frameborder="0" scrolling="no"></iframe><div class="footer_branding" style="margin-top:-5px;font-size:10px;font-family:Arial;"><center><a href="http://www.reverbnation.com/band-promotion/how-to-sell-music-on-itunes?utm_campaign=a_features_distribution&utm_medium=widget&utm_source=HTML5_Show_Schedule&utm_content=widgetfooter_Sell music on Amazon at ReverbNation.com" target="_blank" style="text-decoration:none;color:#444;">Sell music on Amazon at ReverbNation.com</a></center></div></div>
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
		<h3 class="hero-parallax" style="color:<?php echo $text_color; ?>" data-bottom-top="margin-top:-100px;" data-top-bottom="margin-top:100px;">I glimpse the white light then I felt the chains arise spirit arise a voice says this place isn't done with you yet my second chance has arrived I'm singing AIAIA</h3>
		<div class="parallax__layer parallax__layer--back" style="background: url('<?php echo $parallax_3['url']; ?>') center 120px fixed"></div>
		<div class="parallax__layer parallax__layer--base"></div>
	</div>

		<section id="gallery" name="gallery" class="entry-content cf">
			<header>
				<h2>Gallery</h2>		
			</header>
			<div class="wrap">
				<?php echo do_shortcode( '[si_feed size=medium limit=16]' ); ?>
				<div class="quick-links">
				<p>See more photos on</p>
					<div class="icon-wrap">
						<a href="https://soundcloud.com/katrina-stahr">
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
		<h3 class="hero-parallax" style="color:<?php echo $text_color; ?>" data-bottom-top="margin-top:-150px;" data-top-bottom="margin-top:100px;">I see you near your crystal clear I feel you near I have no fear lift me up take me home with you  I have no fear</h3>
		<div class="parallax__layer parallax__layer--back" style="background: url('<?php echo $parallax_4['url']; ?>') center 120px fixed"></div>
		<div class="parallax__layer parallax__layer--base"></div>
	</div>

		<section id="connect" name="connect">
			<h2>Connect With Katrina</h2>
			<div class="wrap cf">
				<div class="left-half">
					<?php the_field('connect'); ?>
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
							<a href="#">
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
					</div>
				</div> <!-- end left-half -->
				<div class="right-half">
					<?php echo do_shortcode( '[contact-form-7 id="887" title="Contact form 1"]' ); ?>					
				</div> <!-- end right-half -->

			</div>
		</section>

<?php get_footer(); ?>

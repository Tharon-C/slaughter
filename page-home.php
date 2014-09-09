<?php /* Template Name:Home Page */ get_header(); ?>
<div class="hide show-m-and-below mobile-header">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="flex logo-img">
						</a>
						<div class="mobile-wdgt">
							<?php dynamic_sidebar('mobile'); ?>
						</div>
                    </div>
	<main role="main">
		<!-- section -->
		<section>
			

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article class="content-home" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
			<video autoplay loop id="bgvid">
				<source src="<?php echo get_template_directory_uri(); ?>/videos/home-bkg-2.webm" type="video/home-bkg.webm"> 
				<source src="<?php echo get_template_directory_uri(); ?>/video/home-bkg-2.mp4" type="video/mp4">
			</video>
				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

			</div>
			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>

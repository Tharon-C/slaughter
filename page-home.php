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
			
		<button class="btn-1 mute-btn m-hide" type="button" id="mute" >Mute <i class="fa fa-volume-up"></i></button>
           <?php if (have_posts()): while (have_posts()) : the_post(); ?>			
			<article class="content-home" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
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
<script type="text/javascript">
	jQuery(function($) {
    var BV = new $.BigVideo();
    BV.init();
    if (Modernizr.touch) {
		BV.show('<?php echo get_template_directory_uri(); ?>/img/calendar-slide2.jpg');
	} else {
    	BV.show('<?php echo get_template_directory_uri(); ?>/video/home-bkg-3.mp4');
	}
	BV.getPlayer().loop('true');
	});
</script>

<script type="text/javascript">
window.onload = function() {

  	// Video
 	var video = document.getElementById("big-video-vid_html5_api");

  	// Buttons
  	var muteButton = document.getElementById("mute");
  	// Event listener for the mute button
	muteButton.addEventListener("click", function() {
	  	if (video.muted == false) {
		    // Mute the video
		    video.muted = true;

		    // Update the button text
	 	muteButton.innerHTML = "Unmute";
	 	} else {
		    // Unmute the video
		    video.muted = false; 

		    // Update the button text
		    muteButton.innerHTML = "Mute";
	  	}
	});
 
}

</script>
	</main> 

<?php get_footer(); ?> 

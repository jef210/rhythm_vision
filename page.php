<?php get_header(); ?>
	<div id="content_wrap">
		<div id="content" style="margin-left: 103px;">
			<div id="top_links">
				<a href="<?php echo esc_url(home_url( '/' )); ?>index.php/programs" class="tlink">
          Programs
        </a>
        <a href="<?php echo esc_url(home_url( '/' )); ?>index.php/about-us" class="tlink" style= "position: relative; left: 10px;">
          About Us
        </a>
        <a href="<?php echo esc_url(home_url( '/' )); ?>index.php/proof" class="tlink" style= "position: relative; left: 5px;">
          Proof
        </a>
        <a href="<?php echo esc_url(home_url( '/' )); ?>index.php/schools" class="tlink" style= "position: relative; left: -5px;">
          Schools
        </a>
        <a href="<?php echo esc_url(home_url( '/' )); ?>index.php/business" class="tlink"style= "position: relative; left: -5px;">
          Business
        </a>
        <a href="<?php echo esc_url(home_url( '/' )); ?>index.php/community" class="tlink"style= "position: relative; left: 5px;">
          Community
        </a>
			</div>
		</div>
		<div id="content" style="margin-left: 103px;">
			<div id="page_content_wrap">
				<div id="page_content_wrap_before"></div>
				<div class="page_content_col">
					<div class="inner">
						<div class="page_header">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<h><?php the_title(); ?></h>
							<?php the_content(); ?>
						<?php endwhile; endif; ?>
						</div>
					</div>
				</div>
				<div id="page_content_wrap_after"></div>
			</div>
			<div id="page_sidebar">
				<div id="page_menu_box">
					<a href="<?php echo esc_url(home_url( '/' )); ?>index.php/news" class="sidelink" style="padding-top: 25px;">
	          News
	        </a>
	        <a href="<?php echo esc_url(home_url( '/' )); ?>index.php/features" class="sidelink">
	          Features
	        </a>
	        <a href="<?php echo esc_url(home_url( '/' )); ?>index.php/students" class="sidelink">
	          Students
	        </a>
	        <a href="<?php echo esc_url(home_url( '/' )); ?>index.php/teachers" class="sidelink">
	          Teachers
	        </a>
	        <a href="<?php echo esc_url(home_url( '/' )); ?>index.php/our-story" class="sidelink">
	          Our Story
	        </a>
	        <a href="<?php echo esc_url(home_url( '/' )); ?>index.php/what-we-do" class="sidelink">
	          What We Do
	        </a>
	        <a href="<?php echo esc_url(home_url( '/' )); ?>index.php/faqs" class="sidelink">
	          FAQ's
	        </a>
	        <a href="<?php echo esc_url(home_url( '/' )); ?>index.php/events" class="sidelink">
	          Events
	        </a>
	        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=info%40rhythmvision%2eorg&lc=US&no_note=0&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donate_SM%2egif%3aNonHostedGuest" alt="PayPal donations" target="_blank" class="sidelink">
	          Donate
	        </a>
	        <span class='st_sharethis' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='Share'></span>
	        <a href="<?php echo esc_url(home_url( '/' )); ?>index.php/contact-us" class="sidelink">
	          Contact
	        </a>
				</div>
<div>				
<a href="<?php echo esc_url(home_url( '/' )); ?>index.php/wheel-of-courage">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/page_circle_grey.png"/ style="position: relative; left: -12px;">
       </div>
</div>	
	
<?php get_footer(); ?>
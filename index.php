<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script( 'comment-reply' ); ?>
  <title><?php scaffold_title(); ?></title>

  <?php wp_head(); ?>
</head>
<body <?php body_class( get_theme_mod('scaffold_sidebar') ); ?>>
  <div id="wrapper">
    <div id="header_wrap">
      <div id="header">
        <a href="<?php echo esc_url(home_url( '/' )); ?>" class="logo">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/rv_header2.png"/>
        </a>
      </div>
    </div>
	<div id="content_wrap">		
		<div class="content top_cols">
			<div class="col top_side" style="position: relative; z-index: 999;">
				<a href="<?php echo esc_url(home_url( '/' )); ?>contact-us" class="tcol_link" style="position: relative; left: 5px">Contact Us</a>
				&nbsp;&nbsp;&nbsp;
				<a href="<?php echo esc_url(home_url( '/' )); ?>faqs" class="tcol_link" style="position: relative; left: 5px">FAQ's</a>
				<div class="page_nav">
					<div class="anchor_nav anchor_left">
						<a href="<?php echo esc_url(home_url( '/' )); ?>process" class="tcol_link">
							Process
						</a><br />
						<a href="<?php echo esc_url(home_url( '/' )); ?>offerings" class="tcol_link">
							Offerings
						</a><br />
						<a href="<?php echo esc_url(home_url( '/' )); ?>specifics" class="tcol_link">
							Specifics
						</a><br />
						<a href="<?php echo esc_url(home_url( '/' )); ?>our-clients" class="tcol_link">
							Our Clients
						</a>
					</div>
					<a href="<?php echo esc_url(home_url( '/' )); ?>programs">
	          <img src="<?php bloginfo('template_directory'); ?>/assets/images/programs.png"/>
	        </a>	
				</div>
				<div class="page_nav">
					<div class="anchor_nav anchor_left"  style="margin-top: 15px;">
						<a href="<?php echo esc_url(home_url( '/' )); ?>testimonials" class="tcol_link">
							Testimonials
						</a><br />
						<a href="<?php echo esc_url(home_url( '/' )); ?>data/" class="tcol_link">
							Data
						</a><br />
						<a href="<?php echo esc_url(home_url( '/' )); ?>health-benefits" class="tcol_link">
							Health Benefits
						</a><br />
						<a href="<?php echo esc_url(home_url( '/' )); ?>published-research" class="tcol_link">
							Published Research
						</a><br />
					</div>
	        <a href="<?php echo esc_url(home_url( '/' )); ?>proof" class="col_img_pad">
	          <img src="<?php bloginfo('template_directory'); ?>/assets/images/proof.png"/>
	        </a>
	      </div>
	      <div class="page_nav">
					<div class="anchor_nav anchor_left" style="margin-top: 15px;">
						<a href="<?php echo esc_url(home_url( '/' )); ?>what-we-do" class="tcol_link">
							What We Do
						</a><br />
						<a href="<?php echo esc_url(home_url( '/' )); ?>history" class="tcol_link">
							History
						</a><br />
						<a href="<?php echo esc_url(home_url( '/' )); ?>about-us" class="tcol_link">
							Vision/Mission
						</a><br />
						<a href="<?php echo esc_url(home_url( '/' )); ?>great-stories" class="tcol_link">
							Great Stories
						</a><br />
						<a href="<?php echo esc_url(home_url( '/' )); ?>our-team" class="tcol_link">
							Our Team
						</a><br />
					</div>
	        <a href="<?php echo esc_url(home_url( '/' )); ?>about-us" class="col_img_pad">
	          <img src="<?php bloginfo('template_directory'); ?>/assets/images/about_us.png"/>
	        </a>
	      </div>
			</div>
			<div class="col top_center" style="position: relative; top: -40;">
				<div id="top_center_img">
<div id="slideshow">
				<?php if (function_exists('rslider')) { rslider(1); }?>
			</div>
	
		</a>
			</div>
				<p class="top_center">
				</p>
			</div>
			<div class="col top_side">
<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=info%40rhythmvision%2eorg&lc=US&no_note=0&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donate_SM%2egif%3aNonHostedGuest" class="tcol_link" style="position: relative; left: 5px; margin-right: -5px;" alt="PayPal donations" target="_blank">Donate</a>
				&nbsp;&nbsp;&nbsp;
				<!-- <a href="<?php echo esc_url(home_url( '/' )); ?>share" class="tcol_link" style="position: relative; left: -5px">Share</a> -->
				<span class='st_sharethis' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='Share'></span>
				<div class="page_nav">
					<div class="anchor_nav anchor_right">
						<a href="<?php echo esc_url(home_url( '/' )); ?>for-drummers" class="tcol_link">
							For Drummers
						</a><br />
						<a href="<?php echo esc_url(home_url( '/' )); ?>for-teachers" class="tcol_link">
							For Teachers
						</a><br />
						<a href="<?php echo esc_url(home_url( '/' )); ?>decision-makers" class="tcol_link">
							Decision Makers
						</a><br />
						<a href="<?php echo esc_url(home_url( '/' )); ?>get-involved" class="tcol_link">
							Get Involved
						</a><br />
						<a href="<?php echo esc_url(home_url( '/' )); ?>links" class="tcol_link">
							Links
						</a><br />
					</div>
				<a href="<?php echo esc_url(home_url( '/' )); ?>schools">
	          <img src="<?php bloginfo('template_directory'); ?>/assets/images/schools_button.png"/>
	        </a>
	      </div>
	      <div class="page_nav">
					<div class="anchor_nav anchor_right"  style="margin-top: 15px;">
						<a href="<?php echo esc_url(home_url( '/' )); ?>training" class="tcol_link">
							Facilitator
						</a><br />
						<a href="<?php echo esc_url(home_url( '/' )); ?>training" class="tcol_link">
							Teacher
						</a><br />
						<a href="<?php echo esc_url(home_url( '/' )); ?>training" class="tcol_link">
							Employment
						</a><br />
					</div>
	        <a href="<?php echo esc_url(home_url( '/' )); ?>business" class="col_img_pad">
	          <img src="<?php bloginfo('template_directory'); ?>/assets/images/buisness_button.png"/>
	        </a>
	      </div>
	      <div class="page_nav">
					<div class="anchor_nav anchor_right"  style="margin-top: 15px;">
						<a href="<?php echo esc_url(home_url( '/' )); ?>photo-archive" class="tcol_link">
							Photo Gallery
						</a><br />
						<a href="<?php echo esc_url(home_url( '/' )); ?>video-archive" class="tcol_link">
							Video
						</a><br />
						<a href="<?php echo esc_url(home_url( '/' )); ?>audio-archive" class="tcol_link">
							Audio
						</a><br />
					</div>
	        <a href="<?php echo esc_url(home_url( '/' )); ?>community" class="col_img_pad">
	          <img src="<?php bloginfo('template_directory'); ?>/assets/images/community_button.png"/>
	        </a>
	      </div>
			</div>
		</div>
		
		<div class="content bottom_cols">
			<div class="col bottom_left">
				<h2 style="font-family: trebuchet ms; position: relative; left: 20px;"><u>Our Story</u></h2>
				<p style="font-family: palatino linotype; font-size: 17px; position: relative; top: -20px;">RhythmVision’s beginnings can be traced to 2003, when the founders began conducting drum circles and other music-based activities at a local magnet school. School officials were looking for ways to help their elementary... <br /></p>
				<a href="<?php echo esc_url(home_url( '/' )); ?>our-story" class="read_more" style="font-family: palantino linotype; font-size: 17px; position: relative; top: -35px; float: left;">Read more</a>
				<h2 style="font-family: trebuchet ms; position: relative; left: -60px;"><u>What We Do</u></h2>
				<p style="font-family: palatino linotype; font-size: 17px; position: relative; top: -20px;">From our classrooms to the dinner table, every child needs experiences that foster creativity and collaboration. RhythmVision designs and implements expressive arts-based programs that nurture the human potential. <br /></p>
				<a href="<?php echo esc_url(home_url( '/' )); ?>what-we-do" class="read_more" style="font-size: 17px; font-family: palantino linotype; position: relative; top: -40px; float: left;">Read more</a>
			</div>
			<div class="col bottom_center">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/our_story.png"/>
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/what_we_do.png"/>
			</div>
			<div class="col bottom_right">
				<div id="side_field">
					<a href="<?php echo esc_url(home_url( '/' )); ?>events" >
	          <img src="<?php bloginfo('template_directory'); ?>/assets/images/eventsicon.png" style="margin: 15px 5px;"/>
	        </a>
	        <hr class="foot_bar" style="width: 70%; box-shadow: 2px 2px 2px black;"/>
<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=info%40rhythmvision%2eorg&lc=US&no_note=0&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donate_SM%2egif%3aNonHostedGuest" alt="PayPal donations" target="_blank">	          
<img src="<?php bloginfo('template_directory'); ?>/assets/images/donatebutton.png" style="margin: 15px 19px;">
	        </a>
				</div>
			</div>
		</div>
		<div class="content">
			<div id="bottom_links">
				<div class="link_box">
					
					<h2 style="position: relative; left: 0px"><u>News</u></h2>
					<p id="link_box_para">Check out what's <br> currently happening <br> with us here at <br> RhythmVision</p>
						<a href="<?php echo esc_url(home_url( '/' )); ?>News" class="read_more" style="font-family: palantino linotype; font-size: 19px; position: relative; top: -17px; left: -95px;">Read more</a>
					<div class="link_box_divider"></div>
				</div>
				
				<div class="link_box">
					<h2 style="position: relative; left: 0px"><u>Features</u></h2>
					<p id="link_box_para">All great things that<br> pique our interest.<br> Check out some more <br> cool stuff we like.</p>
				<a href="<?php echo esc_url(home_url( '/' )); ?>features" class="read_more" style="font-size: 19px; position: relative; top: -17px; left: -85px;">Read more</a>
				<div class="link_box_divider" style="left: 90px"></div>
				</div>
				<div class="link_box">
					<h2 style="position: relative; left: 0px"><u>Students</u></h2>
				<p id="link_box_para">Got a question from <br> class, or a story to <br> share? Let us know.</p>
				<a href="<?php echo esc_url(home_url( '/' )); ?>Students/" class="read_more" style="font-size: 19px; position: relative; top: -17px; left: -92px;">Talk to us</a>
				<div class="link_box_divider" style="position: relative; top: -100px"></div>
				</div>
				<div class="link_box">
					<h2 style="position: relative; left: 0px"><u>Teachers</u></h2>
				<p id="link_box_para">Have an idea or an <br> experience to share? <br> Got a question or <br> need some help?</p>
				<a href="<?php echo esc_url(home_url( '/' )); ?>Teachers/" class="read_more" style="font-size: 19px; position: relative; top: -17px; left: -90px;">Talk to us</a>
				</div>
			</div>
		</div>
		
		
		<div class="sponsors">		
		<hr class="foot_bar" style="width: 100%;"/>
<div>
<a href="http://www.roxyrhythm.com/default2.htm" alt="Roxy Rhythm" target="_blank" style="position: relative; top: -5px; left: 32px;">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/roxylogo.png"/>
      </a>
      <a href="http://www.townhallartscenter.com" alt="Town Hall Arts Center" target="_blank" style="display: inline-block; position: relative; left: 96px;">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/townhalllogo.png"/>
      </a>
      <a href="http://www.dmns.org" alt="Denver Museum Of Nature And Science" target="_blank" style="display: inline-block; position: relative; top: -10px; left: 156px;">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/dmnslogo.png"/>
      </a>
<a href="http://denver.improv.com/" alt="Denver Improv" target="_blank" style="display: inline-block; position: relative; top: -5px; left: 220px;">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/improvlogo.png"/>
      </a>
 </a>
<a href="http://www.tatteredcover.com/" alt="Tattered Cover Book Store" target="_blank" style="display: inline-block; position: relative; left: 280px;">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/tcbslogo.png"/>
      </a>
</div>
<div>
<a href="http://thebarncastlerock.com/" alt="The Barn" target="_blank" style="display: inline-block; position: relative; top: -10px; left: 80px;">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/barnlogo.png"/>
      </a>
<a href="http://www.applebees.com" alt="Apllebee's" target="_blank" style="display: inline-block; position: relative;  left: 155px;">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/applebeeslogo.png"/>
      </a>
<a href="http://www.worldofharmonymusic.com/" alt="World Of Harmony Music" target="_blank" style="display: inline-block; position: relative;  left: 240px;">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/wohlogo.png"/>
      </a>
<a href="http://www.thebundtshoppe.com/" alt="The Bundt Shoppe" target="_blank" style="display: inline-block; position: relative;  left: 330px;">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/bundtlogo.png"/>
      </a>
<a href="http://www.travelport.com" alt="Travel Port" target="_blank" style="display: inline-block; position: relative;  left: 420px;">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/trvlportlogo.png"/>
      </a>
<div>
</div>
<div>
<a href="http://www.americandl.com/" alt="American Design And Landscape" target="_blank" style="display: inline-block; position: relative; top: -5px; left: 60px;">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/americandlogo.png"/>
      </a>
<a href="http://www.twistandshout.com" alt="Twist and Shout" target="_blank" style="display: inline-block; position: relative;  left: 180px;">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/twistshoutlogo.png"/>
      </a>
<a href="http://www.rolandus.com/" alt="Roland" target="_blank" style="display: inline-block; position: relative;  left: 300px;">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/rolandlogo.png"/>
      </a>
<a href="http://artforthenations.org/" alt="Art For The Nations" target="_blank" style="display: inline-block; position: relative;  left: 400px;">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/aftnlogo.png"/>
      </a>
</div>
		</div>
	</div>
<?php get_footer(); ?>
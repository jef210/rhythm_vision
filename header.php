<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
  <title><?php scaffold_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class( get_theme_mod('scaffold_sidebar') ); ?>>
  <!-- BEGIN #wrapper -->
  <div id="wrapper">
    <div id="header_wrap">
      <div id="header">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/rv_header2.png"/>
        </a>
	
      </div>
    </div>
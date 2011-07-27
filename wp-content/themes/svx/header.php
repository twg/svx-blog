<?php
/**
 * @package SVX
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'toolbox' ), max( $paged, $page ) );

	?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php bloginfo( 'template_directory' ); ?>/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id='top'></div>
<div class='container'>
  <div class='body_header'>
    <div class='wrapper'>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="logo"></a>
      <ul class='account_nav'>
        <li class='about'>
          <a href="http://svx.twg.ca/about">About</a>
        </li>
        <li class='how_it_works'>
          <a href="http://svx.twg.ca/how-it-works">How it Works</a>
        </li>
        <li class='search'>
          <a href="http://svx.twg.ca/user/profiles">Directory</a>
        </li>
        <li class='account_menu'>
          <div class='account_photo'></div>
          <div class='account_name'>
            <a href="http://svx.twg.ca/login" class="account_menu_link">My Account</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
  
  <div class='main_area'>
    <div class='wrapper'>
      <div class='flash_wrapper'></div>
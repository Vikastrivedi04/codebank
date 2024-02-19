<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package monst
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/owl.theme.default.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary">
			<?php esc_html_e('Skip to content', 'monst'); ?>
		</a>	

		<header id="masthead" class="site-header ">
			<div class="wrap header--wrap">
				<div class="site-logo">
					<a href=""><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/
/monst-logo (1).svg" alt="loading"></a>
				</div>

				<nav class="navbar">
					
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'container' => false,
							'menu_id' => 'primary-menu',

						)
					);
					?>
				</nav><!-- #site-navigation -->
				<div class="second-navbar">
					<a href="#" class="btn btn--transparent">Log in</a>
					<a href="#" class="btn btn--yellow">sign-up</a>
				</div>
				<button class="toggle-menu md">
					<span></span>
				</button>
			</div>
		</header><!-- #masthead -->
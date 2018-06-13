<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alterego
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'alterego' ); ?></a>

	<!-- here we grab the custom field from our category and display the color
	an inline style -->
	<header id="masthead" class="site-header flex" style="<?php category_header_background(); ?>">
		<!-- push the items to the end vertically using flexbox -->
		<nav id="site-navigation" class="main-navigation flex flex-auto items-end relative">

			<!-- here we have a link with our logo that goes 
			back to the homepage -->
			<a href="<?php echo get_site_url(); ?>" class="absolute top-0 left-0 logo">
				<img src="<?php echo get_template_directory_uri() . '/images/alter-ego-logo.svg'; ?>" class="db">
			</a>

			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'menu_class'		 => 'main-menu ma0 pa0 list'
			) );
			?>
		</nav><!-- #site-navigation -->

		<div class="site-branding">
			<!-- our featured image will go in here -->
			<?php echo wp_get_attachment_image(80, 'full'); ?>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

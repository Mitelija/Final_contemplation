<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package final_350
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<?php wp_enqueue_script("jquery"); ?>

<?php wp_head(); 


?>

</head>



<body <?php body_class(); ?>>
<div id="wrapper">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'final_350' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">

		<h2>Meditation for all</h2>
			
			<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'final_350' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">


<!--<nav id="site-navigation" class="main-navigation" role="navigation">
	<button class="menu-toggle" aria-controls="primary menu" aria-expanded="false">Primary Menu</button>
	<div class="menu">
		<ul aria-expanded="false" class="nav-menu">
			<li class="page_item page-item-112">
				<a href="https://wpmmp.bmcc.cuny.edu/~dmatsako/">Home</a>
			</li>
			<li class="page_item page-item-83">
				<a href="https://wpmmp.bmcc.cuny.edu/~dmatsako/guides">Meditation guides</a>
			</li>
			<li class="page_item page-item-93">
				<a href="https://wpmmp.bmcc.cuny.edu/~dmatsako/use">How to use this website</a>
			</li>
			<li class="page_item page-item-100">
				<a href="https://wpmmp.bmcc.cuny.edu/~dmatsako/benefits">Benefits</a>
			</li>
			<li class="page_item page-item-80">
				<a href="https://wpmmp.bmcc.cuny.edu/~dmatsako/contact">Contact us</a>
			</li>
		</ul>
	</div>
</nav>-->			












		
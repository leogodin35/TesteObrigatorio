<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package resto
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>

<title>Resto</title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'resto' ); ?></a>

	<header>
		<div class="wrapper">
			<div class="logotipo">
				<h1 class="logo">Resto</h1>
			</div>
			<nav role="navigation">

				<div class="nav-itens">
					<h2>Navegação Principal</h2>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</div>
			</nav><!-- #site-navigation -->
		</div><!-- .wrapper -->
	</header><!-- header -->

	<div id="content" class="site-content">

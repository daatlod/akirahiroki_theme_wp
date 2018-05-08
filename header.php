<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Rock+Salt" rel="stylesheet">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrapper">
	<div class="content-site clearfix">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>


		<!--begin akira hiroki page-->		

		<div class="bg-leafs"></div>
		<div class="bg-shadow-one"></div>
		<div class="bg-shadow-two"></div>

		<!--end akira hiroki page -->

		<?php if ( !is_home() &&  !is_front_page() ) : ?>	

			<!--menu-iternal begin-->

			<div class="menu-site" id="menuSite">
				<a href="../" class="logo home-link"><img src="<?php bloginfo('template_directory'); ?>/images/logo-menu.png"></a>
				<a href="#" class="menu_show"></a>
				<ul class="menu-list clearfix">
					<li>
						<a href="/" class="home-link">
							<span class="bkg-circle">
								<img src="<?php bloginfo('template_directory'); ?>/images/icon-home.svg" />
							</span>
							<span class="text">Inicio</span>
							</a>
					</li>
					<li>
						<a href="/el-dojo" class="dojo-link">
							<span class="bkg-circle">
								<img src="<?php bloginfo('template_directory'); ?>/images/icon-dojo.svg" />
							</span>
							<span class="text">El Dojo</span></a>
					</li>
					<li>
						<a href="/eventos" class="eventos-link">
							<span class="bkg-circle">
								<img src="<?php bloginfo('template_directory'); ?>/images/icon-eventos.svg" />
							</span>
							<span class="text">Eventos</span></a>
					</li>
				</ul>
			</div>

			<!--menu-iternal end-->

		<?php endif; ?>

<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Viraltop
 */

?>



<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'viraltop' ); ?></a>

	<header class="site-header" role="banner">

<!--		NAVBAR-->

		<div class="navbar-wrapper">

			<div class="navbar navbar-inverse" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo esc_url(home_url('/'));?>">

							<img src="<?php echo header_image(); ?>" alt="">
						</a>
					</div>

					<?php
					/**
					 * Displays a navigation menu
					 * @param array $args Arguments
					 */
					$args = array(
						'theme_location' => 'primary',
						'container' => 'nav',
						'container_class' => 'navbar-collapse collapse',
						'menu_class' => 'nav navbar-nav navbar-right'
						// 'container_id' => '',
						// 'menu_id' => '',
						// 'echo' => true,
						// 'fallback_cb' => 'wp_page_menu',
						// 'menu' => '',
						// 'before' => '',
						// 'after' => '',
						// 'link_before' => '',
						// 'link_after' => '',
						// 'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
						// 'depth' => 0,
						// 'walker' => ''
					);

					wp_nav_menu( $args );

					?>

				</div>
			</div>

		</div>

	</header><!-- #masthead -->



	<div id="content" class="site-content">

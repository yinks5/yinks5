<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kortez_portfolio
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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'kortez-portfolio' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
        	<div class="site-branding">
        		<div class="site-logo"><?php the_custom_logo(); ?></div>

        		<div class="site-details">
					<?php if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$kortez_portfolio_description = get_bloginfo( 'description', 'display' );
					if ( $kortez_portfolio_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $kortez_portfolio_description; ?></p>
					<?php endif; ?>
				</div><!-- .site-details -->
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="main-navigation-toggle"></button>
				
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
		    				'container' 	 => false,
						)
					);
				?>
			</nav><!-- #site-navigation -->
		</div><!-- .container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div id="header-media" class="container">
			<?php the_custom_header_markup(); ?>
		</div><!-- #header-media -->
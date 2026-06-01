<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#primary">
	<?php esc_html_e( 'Skip to content', 'wacool-info-on-the-net' ); ?>
</a>

<div class="site-wrapper container-fluid">

	<div class="row site-content-area container mx-auto px-0">

		<header class="col-xl-12 site-header" role="banner">
			<?php
			if ( has_custom_logo() ) {
				the_custom_logo();
			}
			if ( get_header_image() ) {
				echo '<img src="' . esc_url( get_header_image() ) . '" width="' . esc_attr( get_custom_header()->width ) . '" height="' . esc_attr( get_custom_header()->height ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '">';
			}
			?>
		</header>

		<nav class="col-xl-2 site-navigation navbar-expand-xl" id="site-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'wacool-info-on-the-net' ); ?>">

			<button
				class="menu-toggle navbar-toggler"
				type="button"
				aria-controls="primary-menu"
				aria-expanded="false"
				aria-label="<?php esc_attr_e( 'Toggle navigation menu', 'wacool-info-on-the-net' ); ?>"
			>
				<i class="fas fa-bars" aria-hidden="true"></i>
			</button>

			<div class="collapse navbar-collapse flex-column" id="primary-menu">
				<?php
				if ( has_nav_menu( 'primary' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu-list',
							'menu_class'     => 'nav flex-column',
							'container'      => false,
							'depth'          => 3,
						)
					);
				} else {
					wp_list_pages(
						array(
							'title_li' => '',
						)
					);
				}
				?>
			</div>

		</nav><!-- #site-navigation -->

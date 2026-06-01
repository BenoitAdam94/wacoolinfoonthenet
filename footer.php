		<aside class="col-xl-2 site-sidebar" role="complementary" aria-label="<?php esc_attr_e( 'Sidebar', 'wacool-info-on-the-net' ); ?>">
			<div class="p-2">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div>
		</aside>

	</div><!-- .row -->

</div><!-- .site-wrapper -->

<div>&nbsp;</div>

<footer class="site-footer container-fluid" role="contentinfo">
	<div class="row site-footer-wrapper container mx-auto">

		<div class="col-md-4 p-3 d-flex justify-content-center align-items-center footer-col">
			<?php dynamic_sidebar( 'footer-1' ); ?>
		</div>

		<div class="col-md-4 p-3 d-flex justify-content-center align-items-center footer-col">
			<?php dynamic_sidebar( 'footer-2' ); ?>
		</div>

		<div class="col-md-4 p-3 d-flex justify-content-center align-items-center footer-col">
			<?php
			if ( has_nav_menu( 'socialmenu' ) ) {
				wp_nav_menu(
					array(
						'theme_location'  => 'socialmenu',
						'menu_class'      => 'social-icons',
						'container'       => 'nav',
						'container_class' => 'social-menu',
						'container_attrs' => array(
							'aria-label' => esc_html__( 'Social Media Links', 'wacool-info-on-the-net' ),
						),
						'depth'           => 1,
						'link_before'     => '<span class="screen-reader-text">',
						'link_after'      => '</span>',
					)
				);
			}
			?>
		</div>

		<div class="col-12 text-center py-2 footer-col">
			<small>
				&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php bloginfo( 'name' ); ?>
				</a>
				&mdash;
				<?php
				printf(
					/* translators: %s: WordPress link */
					esc_html__( 'Powered by %s', 'wacool-info-on-the-net' ),
					'<a href="https://wordpress.org">WordPress</a>'
				);
				?>
			</small>
		</div>

	</div><!-- .row -->
</footer>

<?php wp_footer(); ?>

</body>
</html>

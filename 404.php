<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package wacool-info-on-the-net
 */

get_header();
?>

<main id="primary" class="col-xl-8 site-main" role="main">

	<div class="p-4 text-center">

		<h1 class="card-title"><?php esc_html_e( '404', 'wacool-info-on-the-net' ); ?></h1>

		<p><?php esc_html_e( 'Oops! That page cannot be found.', 'wacool-info-on-the-net' ); ?></p>

		<p>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">
				<?php esc_html_e( 'Return to Home', 'wacool-info-on-the-net' ); ?>
			</a>
		</p>

		<div class="mt-4">
			<?php get_search_form(); ?>
		</div>

	</div>

</main><!-- #primary -->

<?php get_footer(); ?>

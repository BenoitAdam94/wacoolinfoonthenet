<?php
/**
 * The template for displaying all pages
 *
 * @package wacool-info-on-the-net
 */

get_header();
?>

<main id="primary" class="col-xl-8 site-main" role="main">

	<!-- Breadcrumb -->
	<nav class="breadcrumb-nav" aria-label="<?php esc_attr_e( 'Breadcrumb', 'wacool-info-on-the-net' ); ?>">
		<?php wacool_info_on_the_net_breadcrumb(); ?>
	</nav>

	<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- Thumbnail -->
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="text-center p-2">
					<?php the_post_thumbnail( 'medium', array( 'class' => 'img-fluid' ) ); ?>
				</div>
			<?php endif; ?>

			<!-- Title -->
			<header class="p-3">
				<h1 class="card-title"><?php the_title(); ?></h1>
			</header>

			<!-- Content -->
			<div class="entry-content p-3">
				<?php
				the_content();

				wp_link_pages(
					array(
						'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'wacool-info-on-the-net' ),
						'after'       => '</div>',
						'link_before' => '<span class="page-link">',
						'link_after'  => '</span>',
					)
				);
				?>
			</div><!-- .entry-content -->

		</article><!-- #post-<?php the_ID(); ?> -->

	<?php endwhile; ?>

</main><!-- #primary -->

<?php get_footer(); ?>

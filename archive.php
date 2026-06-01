<?php
/**
 * The template for displaying archive pages
 *
 * @package wacool-info-on-the-net
 */

get_header();
?>

<main id="primary" class="col-xl-8 site-main" role="main">

	<header class="p-3">
		<?php the_archive_title( '<h1>', '</h1>' ); ?>
		<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
	</header>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-3' ); ?>>

				<p class="post-title-link mb-0">
					<a href="<?php the_permalink(); ?>">
						<i class="far fa-newspaper" aria-hidden="true"></i>
						<?php the_title(); ?>
						<span class="post-meta">
							&mdash;
							<?php echo esc_html( get_the_date() ); ?>
							<?php esc_html_e( 'by', 'wacool-info-on-the-net' ); ?>
							<?php echo esc_html( get_the_author() ); ?>
						</span>
					</a>
				</p>

				<div class="post-content p-2">
					<?php the_excerpt(); ?>
				</div>

			</article>

		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

	<?php else : ?>

		<div class="p-3">
			<p><?php esc_html_e( 'No posts found.', 'wacool-info-on-the-net' ); ?></p>
		</div>

	<?php endif; ?>

</main><!-- #primary -->

<?php get_footer(); ?>

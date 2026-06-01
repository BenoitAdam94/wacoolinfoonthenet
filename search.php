<?php
/**
 * The template for displaying search results pages
 *
 * @package wacool-info-on-the-net
 */

get_header();
?>

<main id="primary" class="col-xl-8 site-main" role="main">

	<?php if ( have_posts() ) : ?>

		<header class="p-3">
			<h1>
				<?php
				printf(
					/* translators: %s: search query */
					esc_html__( 'Search Results for: %s', 'wacool-info-on-the-net' ),
					'<span>' . esc_html( get_search_query() ) . '</span>'
				);
				?>
			</h1>
		</header>

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'p-3 mb-2' ); ?>>
				<h2>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
				<div class="post-meta mb-2">
					<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
						<?php echo esc_html( get_the_date() ); ?>
					</time>
				</div>
				<div class="post-content">
					<?php the_excerpt(); ?>
				</div>
			</article>

		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

	<?php else : ?>

		<div class="p-4 text-center">
			<p><?php esc_html_e( 'Sorry, nothing found for your search. Try a different search term.', 'wacool-info-on-the-net' ); ?></p>
			<?php get_search_form(); ?>
		</div>

	<?php endif; ?>

</main><!-- #primary -->

<?php get_footer(); ?>

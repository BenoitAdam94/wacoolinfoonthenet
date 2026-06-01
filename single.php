<?php
/**
 * The template for displaying all single posts
 *
 * @package wacool-info-on-the-net
 */

get_header();
?>

<main id="primary" class="col-xl-8 site-main" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="p-3">
				<h1><?php the_title(); ?></h1>

				<div class="post-meta mb-2">
					<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
						<?php echo esc_html( get_the_date() ); ?>
					</time>

					<?php
					the_tags(
						'<span class="tags ms-2"><i class="fa fa-tag" aria-hidden="true"></i> ',
						'</span><span class="tags"><i class="fa fa-tag" aria-hidden="true"></i> ',
						'</span>'
					);
					?>
				</div>
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="text-center p-2">
					<?php the_post_thumbnail( 'medium', array( 'class' => 'img-fluid' ) ); ?>
				</div>
			<?php endif; ?>

			<div class="entry-content post-content p-2">
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

		<nav class="post-navigation p-3" aria-label="<?php esc_attr_e( 'Post navigation', 'wacool-info-on-the-net' ); ?>">
			<?php the_post_navigation(); ?>
		</nav>

		<section class="comments-area p-3" id="comments">
			<a href="#comments">
				<i class="fa fa-comment" aria-hidden="true"></i>
				<?php comments_number(); ?>
			</a>

			<?php
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			?>
		</section>

	<?php endwhile; ?>

</main><!-- #primary -->

<?php get_footer(); ?>

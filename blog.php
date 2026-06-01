<?php
/**
 * The template for displaying the blog page
 *
 * @package wacool-info-on-the-net
 */

get_header();
?>

<main id="primary" class="col-xl-8 site-main" role="main">

	<div class="row p-2">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="col-md-4 mb-3">
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-card h-100' ); ?>>

						<?php if ( has_post_thumbnail() ) : ?>
							<div class="card-thumbnail text-center p-2">
								<?php the_post_thumbnail( 'medium', array( 'class' => 'img-fluid' ) ); ?>
							</div>
						<?php endif; ?>

						<div class="card-body">
							<h2>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>

							<p class="card-text"><?php the_excerpt(); ?></p>

							<a href="<?php the_permalink(); ?>" class="btn btn-primary" aria-label="<?php echo esc_attr( sprintf( __( 'Read more about %s', 'wacool-info-on-the-net' ), get_the_title() ) ); ?>">
								<span>&#x1F4F0;</span>
								<?php esc_html_e( 'Read more', 'wacool-info-on-the-net' ); ?>
							</a>
						</div>

					</article><!-- #post-<?php the_ID(); ?> -->
				</div>

			<?php endwhile; ?>

		<?php else : ?>

			<div class="col-12 p-3">
				<p><?php esc_html_e( 'No posts found.', 'wacool-info-on-the-net' ); ?></p>
			</div>

		<?php endif; ?>

	</div><!-- .row -->

</main><!-- #primary -->

<?php get_footer(); ?>

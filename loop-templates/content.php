<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header class="entry-header">

        <a href="<?php echo get_the_permalink();?>">
	        <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
        </a>
		<?php
		the_title(
			sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h1>'
		, );
		?>

		<?php if ( 'post' === get_post_type() ) : ?>

			<div class="entry-meta">
				<?php echo get_the_date('d/m/Y');?>

                <a href="<?php echo get_author_posts_url(get_the_author_meta('id'))?>">
	                <?php echo get_the_author_meta('display_name');?>
                </a>



			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->



	<footer class="entry-footer text-center">
        <a href="<?php echo get_the_permalink();?>">
            Lire la suite
        </a>
	</footer><!-- .entry-footer -->

</article>

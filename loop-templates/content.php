<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class('default-card'); ?> id="post-<?php the_ID(); ?>">
	<header class="entry-header">
        <div class="thumbnail-wrapper">
            <a href="<?php echo get_the_permalink();?>">
                <?php
                    $imgUrl =  get_the_post_thumbnail_url( get_the_ID(), 'medium' );
                    if(false === $imgUrl) {
	                    $imgUrl = get_stylesheet_directory_uri() . '/screenshot.png';
                    }
                ?>
                <img
                        src="<?php echo $imgUrl;?>"
                        alt="<?php echo get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', true)?>">

            </a>
        </div>
    </header><!-- .entry-header -->
    <div class="entry-content">
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
    </div>






	<footer class="entry-footer text-center">
        <a class="btn btn-primary" href="<?php echo get_the_permalink();?>">
            Lire la suite
        </a>
	</footer><!-- .entry-footer -->

</article>

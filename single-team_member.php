<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">
                <h1>
                    <?php echo get_the_title()?>
                </h1>

                <ul>
                    <?php if(!empty(get_field('phone'))): ?>
                    <li>
                        <strong>Téléphone: </strong>
                        <?php echo get_field('phone')?>
                    </li>
                    <?php endif; ?>

	                <?php if(!empty(get_field('professionnal_mail'))): ?>
                        <li>
                            <strong>Email pro: </strong>
			                <?php echo get_field('professionnal_mail')?>
                        </li>
	                <?php endif; ?>

	                <?php if(!empty(get_field('quote'))): ?>
                        <li>
                            <strong>Citation favorite: </strong>
			                <?php echo get_field('quote')?>
                        </li>
	                <?php endif; ?>
                </ul>

				<?php
				$imgUrl =  get_the_post_thumbnail_url( get_the_ID(), 'medium' );
				if(false === $imgUrl) {
					$imgUrl = get_stylesheet_directory_uri() . '/screenshot.png';
				}
				?>
                <img
                        src="<?php echo $imgUrl;?>"
                        alt="<?php echo get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', true)?>">

            </main>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();

<?php
/* Template Name: About us */

$args    = [
	'post_type'      => 'team_member',
	'posts_per_page' => 8
];
$members = new WP_Query( $args );


get_header();
?>
    <div class="wrapper" id="page-wrapper">
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>
							<?php echo get_the_title(); ?>
                        </h1>
                    </div>

                    <div class="col-12">
						<?php the_content(); ?>
                    </div>
                </div>

                <div class="row">
					<?php if ( $members->have_posts() ) : ?>
                        <!-- pagination here -->

                        <!-- the loop -->
						<?php
						while ( $members->have_posts() ) :
							$members->the_post();
							?>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <?php get_template_part('partials/card/card', 'member');?>
                            </div>

						<?php endwhile; ?>
                        <!-- end of the loop -->

                        <!-- pagination here -->

						<?php wp_reset_postdata(); ?>

					<?php else : ?>
                        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>

                </div>
            </div>
        </main>
    </div>

<?php
get_footer();

<?php
/* Template Name: About us */

$querySections = [
	'formateur' => 'Formateurs',
	'apprenant' => 'Apprenants'
];


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

				<?php foreach ( $querySections as $term => $title ):
					$args = [
						'post_type'      => 'team_member',
//						'posts_per_page' => -1,
						'tax_query'      => [
							[
								'taxonomy' => 'member_type',
								'field'    => 'slug',
								'terms'    => $term,
							]
						],
					];
					$members = new WP_Query( $args );


					?>

                    <div class="row">
						<?php if ( $members->have_posts() ) : ?>
                            <!-- pagination here -->
                        <div class="col-12">
                            <h2><?php echo $title;?></h2>
                        </div>
                            <!-- the loop -->
							<?php
							while ( $members->have_posts() ) :
								$members->the_post();
								?>
                                <div class="col-lg-3 col-md-4 col-sm-6">
									<?php get_template_part( 'partials/card/card', 'member' ); ?>
                                </div>

								<?php
								wp_reset_postdata();
							    endwhile;
							?>
                            <!-- end of the loop -->

							<?php wp_reset_postdata(); ?>

						<?php else : ?>
                            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>

                    </div>
				<?php endforeach; ?>
            </div>
        </main>
    </div>

<?php


get_footer();

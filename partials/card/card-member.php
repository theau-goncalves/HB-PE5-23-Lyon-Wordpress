<?php
$imgUrl =  get_the_post_thumbnail_url( get_the_ID(), 'medium' );
if(false === $imgUrl) {
	$imgUrl = get_stylesheet_directory_uri() . '/screenshot.png';
}
?>

<div class="member-card">
	<img
		src="<?php echo $imgUrl;?>"
		alt="<?php echo get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', true)?>"
	>
	<?php the_title( '<h2>', '</h2>' ); ?>
</div>
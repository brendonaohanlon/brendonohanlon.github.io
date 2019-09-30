<?php 
if (!isset($featured_images)) {
$featured_images = get_post_meta(get_the_ID(), 'featured_images', true);
$featured_images = $featured_images == false ? array() : $featured_images;
} ?>
<?php if (count($featured_images) > 0) { ?>
	<div class="container-fluid">
		<div class="row">
			<div id="tt-carousel-gallery">
				<ul>
					<?php foreach ($featured_images as $thumbnail_id) { ?>
						<li><img src="<?php echo wp_get_attachment_image_url($thumbnail_id, 'full', true); ?>"></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
<?php } ?>
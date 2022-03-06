<?php
$classname = "author-block";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_attr($classname) ?>">
	<div class="author-card">
		<div class="container">
			<div class="author-heading">
				<div class="col-5">
					<div class="flex-box author-info">
						<div class="author-img">
							<?php $logo = get_field('photo'); ?>
							<?php if ($logo) :  ?>
								<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
							<?php endif; ?>
						</div>
						<div class="author-data">
							<p class="name mt-0 mb-0"><?php echo get_field('personal_data')['name']; ?></p>
							<p class="position mt-0 mb-0"><?php echo get_field('personal_data')['position']; ?></p>
							<div class="link">
								<?php $read_more = get_field('read_more_link_below'); ?>
									<?php if ($read_more) :  ?>
									<?php $link = get_field('read_more');?>
										<?php if ($link) : ?>
											<a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
										<?php endif; ?>
									<?php endif; ?>
							</div>
						</div>
					</div>
		</div>
				<div class="author-socials">
				<?php $social_allow = get_field('social_links_allow'); ?>
                    <?php if ($social_allow) :  ?>
					<?php $link = get_field('social_links');?>
					<a href="<?php echo $url['url']; ?>" target="_blank">
            			<?php foreach ($link as $li): ?>
            				<?php $icon = $li['social_icon'];?>
							<?php $url = $li['url'];?>
            					<?php if ($icon) :  ?>
            						<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" title="<?php echo $icon['title']; ?>">
            					<?php endif; ?>
            			<?php endforeach; ?>
					</a>
					<?php endif; ?>
        		</div>
			</div>
			<?php $quote = get_field('text');?>
			<div class="quote">
				<p><?php echo $quote; ?></p>
			</div>
		</div>
	</div>
</div>

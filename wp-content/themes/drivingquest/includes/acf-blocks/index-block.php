<?php
$classname = "author-block";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_attr($classname) ?>">
	<div class="flex-box">
        <div class="author-card">
    		<div class="author-img">
    			<?php $logo = get_field('photo'); ?>
    			<?php if ($logo) :  ?>
    				<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
    			<?php endif; ?>
    		</div>
			<div class="author-data">
    			<p class="h6 mb-0"><?php echo get_field('personal_data')['name']; ?></p>
    			<p class=""><?php echo get_field('personal_data')['position']; ?></p>
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

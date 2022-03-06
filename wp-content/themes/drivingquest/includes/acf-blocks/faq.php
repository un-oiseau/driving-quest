<?php
$classname = "faq";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$data = get_field('faq');
?>
<div class="<?php echo esc_attr($classname) ?>">
	<?php foreach ($data as $faq) { ?>
		<div class="faq-item">
			<h3 class="faq-question"><?php echo $faq['faq_item']['question']; ?></h3>
			<div class="article-text faq-answer">
				<?php echo $faq['faq_item']['answer']; ?>
		</div>
		</div>
	<?php } ?>
</div>



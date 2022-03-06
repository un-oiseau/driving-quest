<?php
$classname = "related-articles";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$article = get_field('article');
?>
<div class="<?php echo esc_attr($classname) ?>">
	<?php foreach ($article as $a): ?>
	<div class="rel-article">
		<div>
			<?php $title = $a['article_link']; ?>
			<a href="<?php echo $title['url']; ?>"><?php echo $title['title']; ?></a>
		</div>
		<p class="short-desc h5"><?php echo $a['short_description']; ?></p>
	</div>
	<?php endforeach; ?>
</div>


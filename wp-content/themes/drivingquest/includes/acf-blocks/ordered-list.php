<?php
$classname = "";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$data = get_field('list');
?>
<ol class="<?php echo esc_attr($classname) ?>">
	<?php foreach ($data as $item) { ?>
		<li></li>
	<?php } ?>
</ol>

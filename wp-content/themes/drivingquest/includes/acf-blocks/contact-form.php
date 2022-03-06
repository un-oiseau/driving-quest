<?php
$classname = "";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$data = get_field('casinos');
?>
<div class="<?php echo esc_attr($classname) ?>">

</div>

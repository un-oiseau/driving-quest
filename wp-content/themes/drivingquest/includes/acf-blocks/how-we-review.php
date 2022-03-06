<?php
$classname = "brand-page";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$data = get_field('brand_data');
?>
<div class="<?php echo esc_attr($classname) ?>">

</div>

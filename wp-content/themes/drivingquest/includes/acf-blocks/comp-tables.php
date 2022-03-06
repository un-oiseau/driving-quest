<?php
$classname = "";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$green_data = get_field('green_list');
$red_data = get_field('red_list');
?>
<div class="<?php echo esc_attr($classname) ?>">

</div>

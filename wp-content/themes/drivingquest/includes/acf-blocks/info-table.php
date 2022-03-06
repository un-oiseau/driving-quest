<?php
$classname = "slot-page";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$data = get_field('slot_data');
?>
<div class="<?php echo esc_attr($classname) ?>">

</div>

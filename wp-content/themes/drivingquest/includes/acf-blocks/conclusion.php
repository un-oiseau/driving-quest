<?php
$classname = "conclusion-block";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
?>
<div class="<?php echo esc_attr($classname) ?>">
<div class="conclusion">
    <p><?php echo get_field('text'); ?></p>
</div>
</div>

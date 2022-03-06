<?php
$classname = "important-info";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
?>
<div class="<?php echo esc_attr($classname) ?>">

    <div class="w-100">
        <p><?php echo get_field('text'); ?></p>
    </div>
</div>

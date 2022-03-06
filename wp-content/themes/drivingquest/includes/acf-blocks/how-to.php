<?php
$classname = "how-to";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$steps = get_field('steps');
$link = get_field('see_more');
?>
<div class="<?php echo esc_attr($classname) ?>">
    <ol>
        <?php foreach ($steps as $s): $step = $s; ?>
            <li class="step">
            <?php $item = $step['step_item']; ?>
                <h3 class=""><?php echo $item['step']; ?></h3>
                <p class=""><?php echo $item['description']; ?></p>
            </li>
        <?php endforeach; ?>
    </ol>
</div>
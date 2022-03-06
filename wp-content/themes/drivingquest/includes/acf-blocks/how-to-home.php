<?php
$classname = "how-to-home";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$steps = get_field('steps');
$link = get_field('read_more');
?>
<div class="<?php echo esc_attr($classname) ?>">
    <div class="container">
        <div class="how-to-container">
            <div class="row">
                <?php foreach ($steps as $s): $step = $s; ?>
                    <div class="col-3">
                        <div class="step">
                            <?php $item = $step['step_item']; ?>
                                <p class="step-item text-center"><?php echo $item['step']; ?></p>
                            <div class="step-text mb-0 mt-0">
                                    <p class="description"><?php echo $item['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
            <?php if ($link) : ?>
                <div class="btn-block">
                <button type="button" class="btn-article btn-crypto how-to-btn" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
                </div>
            <?php endif; ?>
    </div>
</div>

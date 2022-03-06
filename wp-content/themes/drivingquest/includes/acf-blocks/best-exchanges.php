<?php
$classname = "best-exchanges";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}

?>
<div class="<?php echo esc_attr($classname) ?>">
    <?php $crypto = get_field('cryptocurrencies');?>
        <div class="container">
            <div class="exchanges-row row">
                <?php foreach ($crypto as $c): $item = $c; ?>
                <div class="col-3">
                    <div class="exchanges-cards text-center">
                        <div class="ex-card-header">
                            <?php $icon = $item['icon']; ?>
                                <?php if ($icon) :  ?>
                                    <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" title="<?php echo $icon['title']; ?>">
                                <?php endif; ?>
                        </div>
                        <div class="ex-card-body">
                            <p class="mb-0"><?php echo $item['title']; ?></p>
                            <p class="text-left text-standard"><?php echo $item['text']; ?></p>
                        </div>
                        </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

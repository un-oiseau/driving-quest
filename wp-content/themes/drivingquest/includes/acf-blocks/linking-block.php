<?php
$classname = "linking-block";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}

?>
<div class="<?php echo esc_attr($classname) ?>">
    <?php $crypto = get_field('cryptocurrencies');?>
    <div class="container">
        <div class="linking-row row">
        <?php foreach ($crypto as $c): $item = $c; ?>
            <div class="col-3">
                <div class="linking-cards text-center">
                    <div class="linking-card-header">
                    <?php $icon = $item['icon']; ?>
                        <?php if ($icon) :  ?>
                            <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" title="<?php echo $icon['title']; ?>">
                        <?php endif; ?>
                        </div>
                            <div class="linking-card-body">
                                <p class="mb-0"><?php echo $item['title']; ?></p>
                                <p class="text-left text-standard"><?php echo $item['text']; ?></p>
                            </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
    <?php $link = get_field('more_link');?>
    <?php if ($link) : ?>
    <div class="linking-more text-center">
        <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
    </div>
    <?php endif; ?>
</div>

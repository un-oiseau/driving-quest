<?php
$classname = "btc-block flex-box";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$btc = get_field('btc');
?>
<div class="<?php echo esc_attr($classname) ?>">
<?php foreach ($btc as $b): ?>
    <div class="flex-box">
        <p class="btc-1"><?php echo $b['btc_item']['text']; ?></p>
        <p class="btc-2 "><?php echo $b['btc_item']['exchange_number']; ?></p>
        <div class="btc-triangle text-center">
            <?php $image = $b['btc_item']['triangle']; ?>
            <?php if ($image) :  ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
            <?php endif; ?>
        </div>
        
    </div>
<?php endforeach; ?>
</div>

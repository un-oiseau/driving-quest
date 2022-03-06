<?php
$classname = "hero-inner";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
?>
<div class="<?php echo esc_attr($classname) ?>">
<?php $content = get_field('block_1');?>
    <div class="hero-content">
        <h1><?php echo $content['title']; ?></h1>

        <p><?php echo $content['subtitle']; ?></p>
            <?php $link = $content['button']; ?>
            <div class="btn-hero-inner">
                <?php if ($link) : ?>
                    <button type="button" class="btn-crypto btn-block" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
                <?php endif; ?>
            </div>
    </div>

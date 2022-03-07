<?php
$classname = "hero";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
?>
<div class="<?php echo esc_attr($classname) ?>">
<?php $content = get_field('block_1');?>
    <div class="hero-content">
        <h1><?php $content = get_field('title');?></h1>
        <p><?php $content = get_field('text');?></p>
            <?php $link = get_field('button'); ?>
            <div class="btn-hero">
                <?php if ($link) : ?>
                    <button type="button" class="btn btn-block" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
                <?php endif; ?>
            </div>

            <?php 
            $video = get_field('video_button');
            $link = $video['video_link'];
            if( $link ): ?>
                <a class="btn" href="<?php echo esc_url( $link ); ?>"></a>
            <?php endif; ?>
    </div>
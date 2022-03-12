<?php
$classname = "enter-workforce";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_attr($classname) ?>">
    <div class="container">
        <div class="row">
            <div class="workforce-left col-lg-6">
                <div class="workforce-img-1">
                    <?php $img1 = get_field('image_1');?>
                        <?php if ($img1 ) :  ?>
                            <img src="<?php echo $img1 ['url']; ?>" alt="<?php echo $img1 ['alt']; ?>" title="<?php echo $img1['title']; ?>">
                        <?php endif; ?>
                </div>
                <div class="workforce-img-2">
                    <?php $img2 = get_field('image_2');?>
                        <?php if ($img2 ) :  ?>
                            <img src="<?php echo $img2 ['url']; ?>" alt="<?php echo $img2 ['alt']; ?>" title="<?php echo $img2['title']; ?>">
                        <?php endif; ?>
                </div>
            </div>
            <div class="workforce-right col-lg-6">
                <h2><?php echo get_field('title');?></h2>
                <h4><?php echo get_field('subtitle');?></h4>
                <p><?php echo get_field('text_1');?></p>
                <?php $badge1 = get_field('badge_1');?>
                    <?php if ($badge1 ) :  ?>
                        <img class="badge-1" src="<?php echo $badge1 ['url']; ?>" alt="<?php echo $badge1 ['alt']; ?>" title="<?php echo $badge1['title']; ?>">
                    <?php endif; ?>
                <span><?php echo get_field('text_2');?></span>
                <?php echo get_field('content');?>
                <?php $badge2 = get_field('badge_2');?>
                    <?php if ($badge2 ) :  ?>
                        <img class="badge-2" src="<?php echo $badge2 ['url']; ?>" alt="<?php echo $badge2 ['alt']; ?>" title="<?php echo $badge2['title']; ?>">
                    <?php endif; ?>
                <?php $badge3 = get_field('badge_3');?>
                <?php if ($badge3 ) :  ?>
                    <img src="<?php echo $badge3 ['url']; ?>" alt="<?php echo $badge3 ['alt']; ?>" title="<?php echo $badge3['title']; ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
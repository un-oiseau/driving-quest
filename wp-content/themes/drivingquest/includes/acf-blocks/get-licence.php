<?php
$classname = "get-license";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$benefits = get_field('benefits_list');
?>

<div class="<?php echo esc_attr($classname) ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="get-licence-image">
                    <?php $licence_img = get_field('image');?>
                    <?php if ($licence_img) :  ?>
                        <img src="<?php echo $licence_img['url']; ?>" alt="<?php echo $licence_img['alt']; ?>" title="<?php echo $licence_img['title']; ?>">
                <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="get-license-right">
                    <h2><?php echo get_field('title_top');?></h2>
                    <h2><?php echo get_field('title_bottom');?></h2>
                    <p><?php echo get_field('text');?></p>
                    <h4><?php echo get_field('subtitle');?></h4>
                    <?php foreach ($benefits  as $b): $benefit = $b['benefit_item']; ?>
                    <ul>
                        <li><?php echo $benefit;?></li>
                    </ul>
                    <?php endforeach?>
                </div>
            </div>
        </div>
    </div>
</div>
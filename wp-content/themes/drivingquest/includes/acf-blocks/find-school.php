<?php
$classname = "ed-programs";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_attr($classname) ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="find-place">
                    <div class="house-img">
                        <?php $house = get_field('house_icon');?>
                        <?php if ($house) :  ?>
                            <img src="<?php echo $house['url']; ?>" alt="<?php echo $house['alt']; ?>" title="<?php echo $house['title']; ?>">
                        <?php endif; ?>
                    </div>
                    <h2><?php echo get_field('form_title');?></h2>
                    <?php $form = get_field('form');
                    Ninja_Forms()->display($form->get_id(2));?>
                </div>
            </div>
        </div> 
    </div>
<div>
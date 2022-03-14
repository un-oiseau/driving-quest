<?php
$classname = "find-school container-small text-white";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_attr($classname) ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="find-place">
                    <div class="house-img">
                        <?php $house = get_field('house_icon');?>
                        <?php if ($house) :  ?>
                            <img src="<?php echo $house['url']; ?>" alt="<?php echo $house['alt']; ?>" title="<?php echo $house['title']; ?>">
                        <?php endif; ?>
                    </div>
                    <h2 class="text-center"><?php echo get_field('form_title');?></h2>
                    <div class="find-form">
                        <div class="container campus-value row align-items-start">
                            <div class="col-lg-6 col-md-12">
                                <?php echo get_field( 'form' ); ?>
                            </div>
                            <div class="col-lg-6 col-md-12 pt-4">
                                <p class="selected-v">Selected Campus:</p>
                                <p class="empty-value text-center">_ _</p>
                                <p class="selected-value"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
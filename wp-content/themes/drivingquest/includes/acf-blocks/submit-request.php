<?php
$classname = "submit-request";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_attr($classname) ?>">
    <div class="container-small">
        <h2 class="text-center"><?php echo get_field('title');?></h2>
        <h4 class="text-center"><?php echo get_field('description');?></h4>
        <div class="container d-flex justify-content-center">
            <?php echo get_field( 'form' ); ?>
        </div>
    </div>
</div>
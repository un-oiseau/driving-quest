<?php
$classname = "container submit-request";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_attr($classname) ?>">
    <div class="container">
        <h2 class="text-center"><?php echo get_field('title');?></h2>
        <h4 class="text-center"><?php echo get_field('description');?></h4>
        <div class="d-flex justify-content-center">
            <?php $form = get_field('form');
            Ninja_Forms()->display($form->get_id(3));?>
        </div>
    </div>
</div>
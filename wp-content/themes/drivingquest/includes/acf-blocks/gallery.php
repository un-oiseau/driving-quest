<?php
$classname = "gallery";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$data = get_field('image_item');
?>
<div class="<?php echo esc_attr($classname) ?>">
<div class="container flex-box">
    <?php foreach ($data as $d): $image = $d['image']; ?>
 
            <?php if ($image) :  ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
            <?php endif; ?>
      
    <?php endforeach; ?>
</div>
</div>

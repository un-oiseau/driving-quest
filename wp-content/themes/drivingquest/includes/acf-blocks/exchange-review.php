<?php
$classname = "exchange-review";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$reviews = get_field('reviews');
?>
<div class="<?php echo esc_attr($classname) ?>">


<div class="container">
                <?php foreach ($reviews as $r): ?>
                    <?php $review = $r['review']; ?>
                    
                    <div class="row rev-item">
                            <div class="col-4">
                                <div class="rev-image">
                                <?php $image = $review['image']; ?>
                                    <?php if ($image) :  ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
                                    <?php endif; ?>
                                </div>
                            </div><div class="col-8">
                                <div class="article-body">
                                    <p class="h4"><?php echo $review['title']; ?></p>
                                    <p class="ex-content mt-0"><?php echo $review['text']; ?></p>
                                    <?php $btn = $review['button']; ?>
                                        <?php if ($btn) : ?>
                                            <button type="button" class="btn-article btn-block" onclick="window.location='<?php echo $btn['url']; ?>';"><?php echo $btn['title']; ?></button>
                                        <?php endif; ?>    
                                </div>
                            </div>
                        </div>
                <?php endforeach; ?>
        </div>
  
</div>

                    
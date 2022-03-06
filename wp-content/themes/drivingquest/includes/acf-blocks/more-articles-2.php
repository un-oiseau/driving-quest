<?php
$classname = "more-articles-2";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$article = get_field('article');
?>
<div class="<?php echo esc_attr($classname) ?>">
    <div class="container">
        <?php foreach ($article as $a): ?>
            <?php $item = $a['article_item']; ?>


                    <div class="article-item-2">
                        <div class="row">
                                <div class="col-3">
                                    <div class="article-thumbnail">
                                        <?php $image = $item['image'];?>
                                        <?php if ($image) :  ?>
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
                                        <?php endif; ?>
                                    </div>
                                </div>
                                
                                <div class="col-8">
                                    <div class="flex-box article-info">
                                        <p class="article-author text-small"><?php echo $item['author']; ?></p>
                                        <p class="read-time text-small"><?php echo $item['publishing_data']; ?></p>
                                    </div>
                                    <div class="article-title">
                                        <?php $link = $item['article_title']; ?>
                                            <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                                    </div>
                                </div>
                        </div>
                    </div>    
        <?php endforeach; ?>
    </div>
</div>
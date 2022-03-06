<?php
$classname = "authors-article";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$articles = get_field('articles');
?>
<div class="<?php echo esc_attr($classname) ?>">
    <div class="container">
    <div class="article-card">
    <div class="row">
            <?php foreach ($articles as $a): ?>
            
                <?php $i = 1; ?>
                <?php $article = $a['article']; ?>
                <div class="<?php if($i++ == 1 || $i++ == 2){ echo "col-4";}else{echo"col-3";}?>">
                        <div class="article">
                                <div class="article-thumb mb-0">
                                <?php $art_img = $article['thumbnail']; ?>
                                    <?php if ($art_img) :  ?>
                                        <img src="<?php echo $art_img['url']; ?>" alt="<?php echo $art_img['alt']; ?>" title="<?php echo $art_img['title']; ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="article-body">
                                    <div class="flex-box mb-0">
                                        <p class="article-author text-small mb-0"><?php echo $article['publishing_date']; ?></p>
                                        <p class="read-time text-small mb-0"><?php echo $article['reading_time']; ?></p>
                                    </div>
                                    <div class="article-title">
                                        <?php $title = $article['title']; ?>
                                            <a href="<?php echo $title['url']; ?>"><?php echo $title['title']; ?></a>
                                    </div>
                                </div>
                        </div>
                </div>   
            
            <?php endforeach; ?>
            </div>
    </div>
</div>

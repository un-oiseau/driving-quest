<?php
$classname = "more-articles";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$slider = get_field('slider');
$article = get_field('post');
?>
<div class="<?php echo esc_attr($classname) ?>">
<div class="container article-container">
<div class="row">
    <div class="col-8">
        <div class="slide owl-carousel owl-theme">
            <?php foreach ($slider as $s): ?>
                <?php $slide = $s['slide']; ?>
                <div class="item">
                    <?php $slide_img = $slide['slide_image']; ?>
                    <div class="carousel-img">
                        <?php if ($slide_img) :  ?>
                            <img src="<?php echo $slide_img['url']; ?>" alt="<?php echo $slide_img['alt']; ?>" title="<?php echo $slide_img['title']; ?>">
                        <?php endif; ?>
                        <div class="carousel-text">
                            <?php $slide_txt = $slide['slide_text']; ?>
                            <p class="slide-title"><?php echo $slide_txt; ?></p>
                            <?php $slide_date = $slide['date']; ?>
                            <p class="date mb-0"><?php echo $slide_date; ?></p>
                        </div>
                    </div>                 
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="col-4">
        <?php foreach ($article as $p): ?>
            <?php $item = $p['post_item']; ?>
                <div class="article-item">
                <div class="flex-box">
                    <p class="article-author text-small"><?php echo $item['post_author']; ?></p>
                    <p class="read-time text-small uppercase"><?php echo $item['reading_time']; ?></p>
                </div>
                    <p class="article-title"><?php echo $item['post_title']; ?></p>
                <div class="flex-box">
                    <div class="row">
                        <div class="col-6">
                        <p class="date mb-0"><?php echo $item['date']; ?></p>
                        </div>
                        <div class="col-6">
                        <p class="date mb-0"><?php echo $item['time']; ?></p>
                        </div>
                    </div>
                    <div class="read-more">
                        <?php $link = $item['read_more_link']; ?>
                            <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                    </div>
                    </div>
                </div>
        <?php endforeach; ?>
            </div>

        </div>
    </div>
</div>
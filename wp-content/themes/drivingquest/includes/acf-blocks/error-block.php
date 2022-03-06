<?php
$classname = "error-block";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$data = get_field('hero_section');
$art_title = get_field('title');
$articles = get_field('related_article');
?>
<div class="<?php echo esc_attr($classname) ?>">
    <div class="error-signal flex-box">
        <div class="err-note">
            <h1 class="main-blue err-title"><?php echo $data['title']; ?></h1>
            <p class="h3"><?php echo $data['subtitle']; ?></p>
                <?php $btn = $data['button']; ?>
            <?php if ($btn) : ?>
                <button type="button" class="btn-crypto btn-block" onclick="window.location='<?php echo $btn['url']; ?>';"><?php echo $btn['title']; ?></button>
            <?php endif; ?>
        </div>
        <div class="err-img">
            <?php $image = $data['hero_image']; ?>
                <?php if ($image) :  ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
                <?php endif; ?>
            </div>
    </div>
    <p class="h3"><?php echo $art_title; ?></p>
    <div class="rel-articles flex-box">
        <?php foreach ($articles as $a): ?>
            <div class="article-single">
                <div class="article-data flex-box">
                    <p class="article-author text-small"><?php echo $a['author']; ?></p>
                    <p class="read-time text-small"><?php echo $a['reading_time']; ?></p>
                </div>
                <?php $title = $a['article_title']; ?>
                    <p>
                        <a href="<?php echo $title['url']; ?>"><?php echo $title['title']; ?></a>
                    </p>
            </div>
        <?php endforeach; ?>
    </div>
</div>

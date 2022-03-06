<?php
$classname = "hero-block";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
?>

    <div class="<?php echo esc_attr($classname) ?>">

    <?php $content = get_field('block_1');?>
    
    <div class="row home-container">
            <div class="col-6">
                <div class="hero-content">
                    <h1><?php echo $content['title']; ?></h1>
                    <p><?php echo $content['subtitle']; ?></p>
                        <?php $link = $content['button']; ?>
                            <?php if ($link) : ?>
                                <button type="button" class="btn-crypto btn-block" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
                            <?php endif; ?>
                </div>
            </div>

        <?php $faq = get_field('block_2');?>
            <div class="col-6">
                <div class="hero-faq">
                    <p class="blue-heading"><?php echo $faq['title']; ?></p>
                    <p class="text-medium"><?php echo $faq['text']; ?></p>
                        <?php $link = $faq['link']; ?>
                        <ul>
                                <?php foreach ($link as $li): ?>
                                    <li><a href="<?php echo $li['link_item']['url']; ?>"><?php echo $li['link_item']['title']; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                </div>
            </div>
    </div>
            <?php $hero_cards = get_field('block_3');?>
            <div class="container">
                <div class="row">
                    <?php foreach ($hero_cards as $c): $icon = $c['icon']; ?>
                        <div class="col-3">
                            <div class="hero-cards text-center">
                                    <?php if ($icon) :  ?>
                                            <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" title="<?php echo $icon['title']; ?>">
                                        <?php endif; ?>
                                            <p class="hero-card-name"><?php echo $c['title']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        <div class="hero-read-more text-center">
                <?php $link = get_field('explore_link');?>
                        <?php if ($link) : ?>
                            <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                        <?php endif; ?>
        </div>
    </div>

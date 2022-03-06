<?php
$classname = "follow-us";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$title = get_field('title');
$button = get_field('social_button');
?>
<div class="<?php echo esc_attr($classname) ?>">
    <div class="container follow">
        <div class="row">
            <div class="col-4">
                <h2><?php echo $title; ?></h2>
            </div>
            <div class="col-7">
    <div class="flex-box social-icons">
            <?php foreach ($button as $b): ?>
                <?php $icon = $b['social_icon']; ?>
                    <?php $link = $b['social_link']; ?> 
                    <div class="follow-btn">
                        <?php if ($link['title']) :  ?>
                        <a href="<?php echo $link['url']; ?>"><span class="at-text"><?php echo $link['title']; ?></span>
                        <?php endif; ?>
                            <?php if ($icon) :  ?>
                                <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" title="<?php echo $icon['title']; ?>">
                            <?php endif; ?>
                        </a>
                    </div>
                    
            <?php endforeach; ?>   
            </div>
        </div>
            
        </div>
    </div>
</div>

       

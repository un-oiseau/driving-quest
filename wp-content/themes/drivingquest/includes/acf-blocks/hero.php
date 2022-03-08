<?php
$classname = "hero";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$elements = get_field('header_icon_elements');
?>

<div class="<?php echo esc_attr($classname) ?>">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1><?php get_field('title');?></h1>
                <p><?php get_field('text');?></p>
                <?php $button = get_field('button'); ?>
                <div class="">
                    <?php if ($button) : ?>
                        <button type="button" class="btn btn-block" onclick="window.location='<?php echo $button['url']; ?>';"><?php echo $button['title']; ?></button>
                    <?php endif; ?>
                    <?php 
                    $video = get_field('video_button');
                    $vlink = $video['video_link'];
                    if( $vlink ): ?>
                        <button type="button" class="btn btn-block" onclick="window.location='<?php echo $vlink['url']; ?>';"><?php echo $vlink['title']; ?>
                    <?php endif; ?>
                    <?php
                        $vimage = $video['video_button_image'];
                        if( !empty( $vimage ) ): ?>
                            <img src="<?php echo $vimage['url']; ?>" alt="<?php echo $vimage['alt']; ?>" title="<?php echo $vimage['title']; ?>"> 
                        <?php endif; ?>
                    </button>
                    <p><?php echo $vimage['title'];?></p>
                </div>
                <div class="license">
                    <?php $license = get_field('license'); ?>
                    <h5><?php echo $license['license_heading'];?></h5>
                    <?php $license_img = $license['profile_image'];
                    if( !empty( $license_img ) ): ?>
                        <img src="<?php echo $license_img['url']; ?>" alt="<?php echo $license_img['alt']; ?>" title="<?php echo $license_img['title']; ?>">
                    <?php endif; ?>
                </div>
                <div class="skills">
                    <?php $skills = get_field('skills'); ?>
                        <h5><?php echo $skills['skills_heading'];?></h5>
                    <?php $skills_img = $skills['skills_bar'];
                    if( !empty( $skills_img ) ): ?>
                        <img src="<?php echo $skills_img['url']; ?>" alt="<?php echo $skills_img['alt']; ?>" title="<?php echo $skills_img['title']; ?>">
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-6">
                <div class="hero-img">
                <?php 
                $hero_image = get_field('header_image');
                if( !empty( $hero_image ) ): ?>
                    <img src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>" title="<?php echo $hero_image['title']; ?>">
                <?php endif; ?>
                </div>
                <?php foreach ($elements  as $e): $el = $e['image_element']; ?>
                    <?php if ($el) :  ?>
                        <img src="<?php echo $el['url']; ?>" alt="<?php echo $el['alt']; ?>" title="<?php echo $el['title']; ?>">
                    <?php endif; ?>
                <?php endforeach?>
            </div>    
        </div>
    </div>
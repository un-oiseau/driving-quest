<?php
$classname = "container hero";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$video = get_field('video_button');
?>

<div class="<?php echo esc_attr($classname) ?>">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 cards">
                <h2 class="new"><?php echo get_field('title_top');?></h2>
                <h1 class=""><?php echo get_field('title_middle');?></h1>
                <h1 class="pb-3"><?php echo get_field('title_bottom');?></h1>
                <p><?php echo get_field('text');?></p>
                <?php $button = get_field('button'); ?>
                <div class="row align-items-center pt-4">
                    <div class="col-6">
                        <?php if ($button) : ?>
                            <button type="button" class="btn btn-block hero-btn" onclick="window.location='<?php echo $button['url']; ?>';"><?php echo $button['title']; ?></button>
                        <?php endif; ?>
                    </div>
                    <div class="col-6">
                        <?php $vlink = $video['video_link'];?>
                        <?php if ($vlink) : ?>
                            <button type="button" class="btn btn-block play-btn d-flex align-items-center" onclick="window.location='<?php echo $vlink['url']; ?>';">
                        <?php endif; ?>
                    <?php
                        $vimage = $video['video_button_image'];
                        if( !empty( $vimage ) ): ?>
                        <span class="play-img">
                            <img src="<?php echo $vimage['url']; ?>" alt="<?php echo $vimage['alt']; ?>" > 
                            <?php endif; ?>
                        </span>
                        <?php echo $vlink['title']; ?>
                        </button>
                    </div>
                <div>
            </div>
                <div class="license">
                    <?php $license = get_field('license'); ?>
                    <h5><span><?php echo $license['license_heading'];?></span></h5>
                    <?php $license_img = $license['profile_image'];
                    if( !empty( $license_img ) ): ?>
                    <div class="license-body">
                        <img src="<?php echo $license_img['url']; ?>" alt="<?php echo $license_img['alt']; ?>" title="<?php echo $license_img['title']; ?>">
                    </div> 
                    <?php endif; ?>
                </div>
                <div class="skills">
                    <?php $skills = get_field('skills'); ?>
                        <h5><span><?php echo $skills['skills_heading'];?></span></h5>
                    <?php $skills_img = $skills['skills_bar'];
                    if( !empty( $skills_img ) ): ?>
                    <div class="skills-body text-center">
                        <img src="<?php echo $skills_img['url']; ?>" alt="<?php echo $skills_img['alt']; ?>" title="<?php echo $skills_img['title']; ?>">
                        <?php endif; ?>
                    </div> 
                </div>
            </div>   
        </div>
        <div class="col-lg-6">
                <div class="hero-img d-flex justify-content-center">
                <?php 
                $hero_image = get_field('header_image');
                if( !empty( $hero_image ) ): ?>
                    <img src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>" title="<?php echo $hero_image['title']; ?>">
                <?php endif; ?>
                </div>
                <?php $el1 = get_field('element_1');
                if( !empty( $el1 ) ): ?>
                    <img class="el-1" src="<?php echo $el1['url']; ?>" alt="<?php echo $el1['alt']; ?>" title="<?php echo $el1['title']; ?>">
                <?php endif; ?>
                <?php $el2 = get_field('element_2');
                if( !empty( $el2 ) ): ?>
                    <img class="el-2" src="<?php echo $el2['url']; ?>" alt="<?php echo $el2['alt']; ?>" title="<?php echo $el2['title']; ?>">
                <?php endif; ?>
                <?php $el3 = get_field('element_3');
                if( !empty( $el3 ) ): ?>
                    <img class="el-3" src="<?php echo $el3['url']; ?>" alt="<?php echo $el3['alt']; ?>" title="<?php echo $el3['title']; ?>">
                <?php endif; ?>
                <?php $el4 = get_field('element_4');
                if( !empty( $el4 ) ): ?>
                    <img class="el-4" src="<?php echo $el4['url']; ?>" alt="<?php echo $el4['alt']; ?>" title="<?php echo $el4['title']; ?>">
                <?php endif; ?>
                <?php $el5 = get_field('element_5');
                if( !empty( $el5 ) ): ?>
                    <img class="el-5" src="<?php echo $el5['url']; ?>" alt="<?php echo $el5['alt']; ?>" title="<?php echo $el5['title']; ?>">
                <?php endif; ?>
                <?php $el6 = get_field('element_6');
                if( !empty( $el6 ) ): ?>
                    <img class="el-6" src="<?php echo $el6['url']; ?>" alt="<?php echo $el6['alt']; ?>" title="<?php echo $el6['title']; ?>">
                <?php endif; ?>
                <?php $el7 = get_field('element_7');
                if( !empty( $el7 ) ): ?>
                    <img class="el-7" src="<?php echo $el7['url']; ?>" alt="<?php echo $el7['alt']; ?>" title="<?php echo $el7['title']; ?>">
                <?php endif; ?>
                <?php $el8 = get_field('element_8');
                if( !empty( $el8 ) ): ?>
                    <img class="el-8" src="<?php echo $el8['url']; ?>" alt="<?php echo $el8['alt']; ?>" title="<?php echo $el8['title']; ?>">
                <?php endif; ?>
            </div> 
        </div>
    </div>
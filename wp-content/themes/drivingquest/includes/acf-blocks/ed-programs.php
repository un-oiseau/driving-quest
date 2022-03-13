<?php
$classname = "ed-programs";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}

$single = get_field('how_it_works');
?>

<div class="<?php echo esc_attr($classname) ?>">
    <div class="container-small container-sm">
        <h2><?php echo get_field('title');?></h2>
        <h3><?php echo get_field('subtitle');?></h3>
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="card card-1">
                    <div class="card-cap w-100 text-center">
                        <?php $program1 = get_field('program_1');?>
                        <?php $photo1 = $program1['photo'] ;?>
                        <?php if ($photo1) :  ?>
                            <img src="<?php echo $photo1['url']; ?>" alt="<?php echo $photo1['alt']; ?>" title="<?php echo $photo1['title']; ?>">
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $program1['program_title']; ?></h5>
                        <p class="card-text"><?php echo $program1['description']; ?></p>
                        <div class="mb-1">
                            <?php $stars_sm1 = $program1['rating']; ?>
                            <div class="stars-sm">
                                <?php for ($i=0; $i<$stars_sm1; $i++) { ?>
                                    <span class="star-sm"></span>
                                <?php } ?>
                                <?php for ($i=0; $i<5-$stars_sm1; $i++) { ?>
                                    <span class="star-sm empty"></span>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card card-2">
                    <div class="card-cap w-100 text-center">
                        <?php $program2 = get_field('program_2');?>
                        <?php $photo2 = $program2['photo'] ;?>
                        <?php if ($photo2) :  ?>
                            <img src="<?php echo $photo2['url']; ?>" alt="<?php echo $photo2['alt']; ?>" title="<?php echo $photo2['title']; ?>">
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $program2['program_title']; ?></h5>
                        <p class="card-text"><?php echo $program2['description']; ?></p>
                        <div class="mb-1">
                            <?php $stars_sm2 = $program2['rating']; ?>
                            <div class="stars-sm">
                                <?php for ($i=0; $i<$stars_sm2; $i++) { ?>
                                    <span class="star-sm"></span>
                                <?php } ?>
                                <?php for ($i=0; $i<5-$stars_sm2; $i++) { ?>
                                    <span class="star-sm empty"></span>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-12">
                <div class="card card-3">
                    <div class="card-cap w-100 text-center">
                        <?php $program3 = get_field('program_3');?>
                        <?php $photo3 = $program3['photo'] ;?>
                        <?php if ($photo3) :  ?>
                            <img src="<?php echo $photo3['url']; ?>" alt="<?php echo $photo3['alt']; ?>" title="<?php echo $photo3['title']; ?>">
                        <?php endif; ?>
                        </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $program3['program_title']; ?></h5>
                        <p class="card-text"><?php echo $program3['description']; ?></p>
                        <div class="mb-1">
                            <?php $stars_sm3 = $program3['rating']; ?>
                            <div class="stars-sm">
                                <?php for ($i=0; $i<$stars_sm3; $i++) { ?>
                                    <span class="star-sm"></span>
                                <?php } ?>
                                <?php for ($i=0; $i<5-$stars_sm3; $i++) { ?>
                                    <span class="star-sm empty"></span>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="container">
            <div class="display-card card">
                <?php $arrow = get_field('arrow'); ?>
                <?php if ($arrow) :  ?>
                    <img class="green-arrow" src="<?php echo $arrow['url']; ?>" alt="<?php echo $arrow['alt']; ?>" title="<?php echo $arrow['title']; ?>">
                <?php endif; ?>
                <div class="card-body">
                    <div class="card-body-row row">
                        <div class="col-lg-3 d-flex align-items-center justify-content-center">
                            <div class="display-card-intro d-flex flex-column">
                                <div class="display-card-intro-cap text-center">
                                    <?php $photo = $single['course_image'] ;?>
                                    <?php if ($photo) :  ?>
                                        <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" title="<?php echo $photo['title']; ?>">
                                    <?php endif; ?>
                                </div>
                                <h5><?php echo $single['course_name']; ?></h5>
                            </div>
                        </div>
                        <div class="col-lg-4 display-card-block-middle">
                            <h2><?php echo $single['course_heading']; ?></h2>
                            <?php $listing = $single['course_listing'];?>
                            <?php foreach ($listing  as $list): $l_item = $list['list_item']; ?>
                            <ul>
                                <li><?php echo $l_item;?></li>
                            </ul>
                            <?php endforeach?>
                        </div>
                        <div class="col-lg-5 display-card-block-last">
                            <h3><?php echo $single['tip_title']; ?></h3>
                            <?php $tips = $single['tip_list'];?>
                            <?php foreach ($tips  as $t): $tip = $t['tip_list_item']; ?>
                            <ul>
                                <li><?php echo $tip;?></li>
                            </ul>
                            <?php endforeach?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
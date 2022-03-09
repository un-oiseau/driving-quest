<?php
$classname = "ed-programs";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$programs = get_field('programs');
$single = get_field('how_it_works');
?>

<div class="<?php echo esc_attr($classname) ?>">
    <div class="container">
        <h2><?php echo get_field('title');?></h2>
        <h3><?php echo get_field('subtitle');?></h3>
        <div class="row">
            <?php foreach ($programs  as $item): $program = $item['program']; ?>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="w-100">
                            <?php $photo = $program['photo'] ;?>
                                <?php if ($photo) :  ?>
                                    <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" title="<?php echo $photo['title']; ?>">
                                <?php endif; ?>
                        </div>
                        <h5 class="card-title"><?php echo $program['program_title']; ?></h5>
                        <p class="card-text"><?php echo $program['description']; ?></p>
                        <div class="mb-1">
                            <?php $stars_sm = $program['rating']; ?>
                            <div class="stars-sm">
                                <?php for ($i=0; $i<$stars_sm; $i++) { ?>
                                    <span class="star-sm"></span>
                                <?php } ?>
                                <?php for ($i=0; $i<5-$stars_sm; $i++) { ?>
                                    <span class="star-sm empty"></span>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach?>
        </div>
        <div class="green-arrow">
            <?php $arrow = get_field('arrow'); ?>
                <?php if ($arrow) :  ?>
                    <img src="<?php echo $arrow['url']; ?>" alt="<?php echo $arrow['alt']; ?>" title="<?php echo $arrow['title']; ?>">
                <?php endif; ?>
        </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex flex-column">
                                <?php $photo = $single['course_image'] ;?>
                                    <?php if ($photo) :  ?>
                                        <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" title="<?php echo $photo['title']; ?>">
                                    <?php endif; ?>
                                <h5><?php echo $single['course_name']; ?></h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h3><?php echo $single['course_heading']; ?></h3>
                            <?php $listing = $single['course_listing'];?>
                                <?php foreach ($listing  as $list): $l_item = $list['list_item']; ?>
                                <ul>
                                    <li><?php echo $l_item;?></li>
                                </ul>
                                <?php endforeach?>
                        </div>
                        <div class="col-md-4">
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
    </div>
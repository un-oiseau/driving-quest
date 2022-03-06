<?php
$classname = "rec-offer";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$author = get_field('author');
$status = get_field('post_status');
$offer = get_field('best_offer');
?>
<div class="<?php echo esc_attr($classname) ?>">
<div class="offer-container container">
	<div class="row">
        <div class="col-6">
            <div class="author-card row">
                <div class="col-7">
                    <div class="author-data">
                        <div class="author-img m-0">
                            <?php $image = $author['image']; ?>
                            <?php if ($image) : ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
                            <?php endif; ?>
                        </div>
                        <?php $info = $author['personal_info']; ?>
                        <div class="author-info m-0">
                            <p class="h6 mb-0 mt-0"><?php echo $info['name']; ?></p>
                            <p class="rec-position mt-0 mb-0"><?php echo $info['position']; ?></p>
                        </div>
                        <?php $social = $author['social_links']; ?>
                        <div class="author-socials m-0">
                            <?php foreach ($social as $s): ?>
                                <?php $group = $s['link_group']; ?>  
                            <a href="<?php echo $group['icon_url']['url']; ?>" target="_blank">
                                <?php $icon = $group['social_icon']; ?>
                                <?php if ($icon) :  ?>
                                    <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" title="<?php echo $icon['title']; ?>">
                                <?php endif; ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div> 
                    <div class="col-5">
                        <div class="post-status">
                            <p class="h4"><?php echo $status['updated']; ?></p>
                            <?php $link = $status['change'];?>
                                <?php if ($link) : ?>
                                    <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                            <?php endif; ?>
                        </div>
                    </div> 
                </div>
            </div>
        </div>  
        <div class="best-offer row">
            <div class="col-4">
                <div class="offer-logo-btn">
                    <?php $logo = $offer['logo']; ?>
                    <?php if ($logo) :  ?>
                        <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
                    <?php endif; ?>
                    <div class="offer-btn">
                        <?php $btn = $offer['button']; ?>
                        <?php if ($btn) : ?>
                            <button type="button" class="btn-article btn-block" onclick="window.location='<?php echo $btn['url']; ?>';"><?php echo $btn['title']; ?></button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
                    <div class="col-8">
                        <div class="flex-box rate-and-review">
                            <div class="offer-review">
                                    <div>
                                        <h3 class="mt-0"><?php echo $offer['title']; ?></h3>
                                        <div class="offer-rating">
                                            <?php $stars = $offer['rating']; ?>
                                            <div class="stars flex-box">
                                                <p class='rate-number text-center'> <?php echo $stars; ?></p>
                                                <span class="rate-text"><p><?php echo $offer['rating_text']; ?></p></span>
                                                <?php $s = $stars/2; for ($i=0; $i<(int)$s; $i++) { ?>
                                                    <span class="star"></span>
                                                    <?php } ?>
                                                    <?php if (strlen(substr(strrchr($s, "."), 1)) != 0) { ?>
                                                        <span class="star empty half half-<?php echo substr(strrchr($s, "."), 1); ?>"><span></span></span>
                                                    <?php } ?>
                                                    <?php for ($i=0; $i<(int) (5-$s); $i++) { ?>
                                                    <span class="star empty"></span>
                                        <?php } ?>
                                            </div>
                                                
                                        </div>
                                        </div>
                                        <div class="flags">
                                            <?php $flags = $offer['flags']; ?>
                                            <?php foreach ($flags as $f): ?>
                                                <?php $flag = $f['flag'];?>
                                                <?php $f_image = $flag['flage_image'];?>
                                                <?php if ($f_image) :  ?>
                                                <div>
                                                    <div >
                                                        <img src="<?php echo $f_image['url']; ?>" alt="<?php echo $f_image['alt']; ?>" title="<?php echo $f_image['title']; ?>"> 
                                                    </div>
                                                    <div>
                                                    <?php $f_name = $flag['flag_name'];?>
                                                        <span class="text-small mb-0 w-100"><?php echo $f_name; ?></span>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>                              
                                <!--  Bar Chart Goes Here -->
                                <div class="bar-chart">
                                    <?php $chart = $offer['bar_chart']; ?>
                                        <?php foreach ($chart as $c): ?>
                                        <div class="bar-rating flex-box">
                                        <p class=""><?php echo $c['metric']; ?></p>
                                            <?php $bar = $c['chart_item']; ?>
                                            <span> <?php echo $bar; ?></span>
                                            <div class="bar">
                                            <?php for ($i=0; $i<$bar; $i++) { ?>
                                                    <span class="bar-full"></span>
                                                <?php } ?>
                                                <?php for ($i=0; $i<5-$bar; $i++) { ?>
                                                    <span class="bar-empty"></span>
                                                <?php } ?>
                                            </div>
                                           
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                                <div class="offer-text">
                                    <p class=""><?php echo $offer['plain_text']; ?></p>
                                </div>
                            </div>
                        
                    </div>
         
    </div>
</div>

    
                <div class="flex-box">
                    <?php $chart = $offer['bar_chart'] ?> 
                    <div class="bar-rating flex-box">
                    <?php foreach ($chart as $c): ?>
                     
                            <p class=""><?php echo $c['metric']; ?></p>
                            <p class=""><?php echo $c['chart_item']; ?></p>
                    <?php endforeach; ?>
                        </div>
                   
                    
                    <div class="progress-track">
                        <div class="progress-fill">
                        <?php foreach ($chart as $c): ?>
                            <span><?php echo $c; ?>0%</span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                        
                   
                
            
        

               
                        
                   
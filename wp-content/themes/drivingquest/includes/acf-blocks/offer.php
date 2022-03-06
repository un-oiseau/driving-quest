<?php
$classname = "offer";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}

$offer = get_field('best_offer');
?>

<div class="<?php echo esc_attr($classname) ?>">
    
    <div class = "offer-header text-center">
        <p class="uppercase"><?php echo $offer['broker_text']; ?></p>
    </div>
        <div class="offer-body">
        <div class="best-offer row">
          
                <div class="col-4">
                        <div class="offer-logo-btn">
                            <?php $logo = $offer['logo']; ?>
                            <?php if ($logo) :  ?>
                                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
                            <?php endif; ?>
                        </div>
                </div>
                <div class="col-4">
                    <div class="offer-review">
                        <h3 class="mt-1"><?php echo $offer['title']; ?></h3>
                        <div class="flex-box">
                               
                            <?php $logos = $offer['small_logos']; ?>
                            <div>
                                <?php foreach ($logos as $l): ?>
                                <?php $s_logo = $l['logo_image'];?>
                                    <?php if ($s_logo) :  ?>
                                        <img src="<?php echo $s_logo['url']; ?>" alt="<?php echo $s_logo['alt']; ?>" title="<?php echo $s_logo['title']; ?>">
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                            <span><p><?php echo $offer['small_logo_text']; ?></p></span> 
                        </div>
                        <div class="flags">
                            <?php $flags = $offer['flags']; ?>
                            <?php foreach ($flags as $f): ?>
                                <?php $flag = $f['flag'];?>
                                <?php $f_image = $flag['flage_image'];?>
                                <?php if ($f_image) :  ?>
                                <div>
                                    <div>
                                        <img src="<?php echo $f_image['url']; ?>" alt="<?php echo $f_image['alt']; ?>" title="<?php echo $f_image['title']; ?>"> 
                                    </div class="flex-box">
                                    <div>
                                    <?php $f_name = $flag['flag_name'];?>
                                        <span class="text-small mb-0 w-100"><?php echo $f_name; ?></span>
                                    </div>
                                </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>  
                <div class="col-4">
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
                        <div class="offer-btn">
                            <?php $btn = $offer['button']; ?>
                            <?php if ($btn) : ?>
                                <button type="button" class="btn-article btn-block" onclick="window.location='<?php echo $btn['url']; ?>';"><?php echo $btn['title']; ?></button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="pros-cons">
                    <div class="pros"><?php echo $offer['pros']; ?></div>
                    <div class="pros"><?php echo $offer['cons']; ?></div>
                </div>
        </div>  
    </div>
</div>
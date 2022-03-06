<?php
$classname = "aff-table";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$bitcoin = get_field('bicoin');
?>

<div class="<?php echo esc_attr($classname) ?>">
    <div class="container">
            <?php foreach ($bitcoin  as $b): $data = $b['bitcoin_item']; ?>
            <div class="row aff-item">
                    <div class="col-5">
                        <div class="row">
                            <div class="col-5">
                                    <?php $logo = $data['image']; ?>
                                    <div class="aff-logo w-100">
                                        <?php if ($logo) :  ?>
                                            <img class="w-100" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
                                        <?php endif; ?>
                                    </div>
                                <div class="flex-box">
                                    <?php $stars = $data['rating']; ?>
                                    <div class="rate-star w-100">
                                        
                                            <?php $s = $stars/2; for ($i=0; $i<(int)$s; $i++) { ?>
                                            <span class="star"></span>
                                            <?php } ?>
                                            <?php if (strlen(substr(strrchr($s, "."), 1)) != 0) { ?>
                                                <span class="star empty half half-<?php echo substr(strrchr($s, "."), 1); ?>"><span></span></span>
                                            <?php } ?>
                                            <?php for ($i=0; $i<(int) (5-$s); $i++) { ?>
                                            <span class="star empty"></span>
                                        <?php } ?>
                                        <span class="main-blue rate-number"><?php echo $stars; ?></span>
                                    </div>
                                </div>
                        </div>
                        <div class="col-7">
                                <?php $withdrawal = $data['withdrawal']; ?>
                                <?php if ($withdrawal): ?>
                                <div class="withdrawal">
                                    <p class="h7 uppercase w-100 crypto-desc"><?php echo $withdrawal['text_1']; ?></p>
                                    <p class="aff-standard w-100"><?php echo $withdrawal['text_2']; ?></p>
                                    <?php if ($withdrawal['flags']): ?>
                                                <div class="flags">
                                                    <?php foreach ($withdrawal['flags'] as $flag): ?>
                                                        <div>
                                                            <div>
                                                                <img src="<?php echo $flag['flag_image']['url']; ?>" alt="<?php echo $flag['flag_image']['alt']; ?>" title="<?php echo $flag['flag_image']['title']; ?>"> 
                                                            </div class="flex-box">
                                                            <div>
                                                                <span class="text-small mb-0 w-100"><?php echo $flag['flag_name']; ?></span>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>
                        </div>
                    </div>
                    </div>
                    <div class="col-7">
                        <div class="row">
                            <div class="col-3">
                                    <div class="deposit text-center">
                                    <p class="h7 uppercase w-100"><?php echo $data['deposit_tilte']; ?></p>
                                    <?php $deposit = $data['deposit']; ?>
                                        <div class="aff-deposit">
                                            <ul>
                                                <?php foreach (($data['deposit']) as $d): ?>
                                                    <li><?php echo $d['deposit_item']; ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <ul class="checked-list">
                                    <p class="h7 uppercase w-100"><?php echo $data['list_title']; ?></p>
                                        <?php foreach ($data['green_list'] as $p): ?>
                                           <li> <span></span><?php echo $p['list_item']; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <div class="col-5">
                                <?php $btn = $data['button_link']; ?>
                                            <?php if ($btn) : ?>
                                                <button type="button" class="btn-article" onclick="window.location='<?php echo $btn['url']; ?>';"><?php echo $btn['title']; ?></button>
                                            <?php endif; ?>    
                                <?php $link = $data['link'];?>
                                <?php if ($link) : ?>
                                    <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
    </div>
</div>  




   


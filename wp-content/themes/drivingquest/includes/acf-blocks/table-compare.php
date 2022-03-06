<?php
$classname = "review-tables";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}

$data = get_field('head_block');
?>

<div class="<?php echo esc_attr($classname) ?>">
    <div class="container">
        <div class="check-rec"> 
            <div class="flex-box">
                <div class="rec-1">
                       
                    <?php if ( get_field('recommended') )  :  ?>
                        
                        <p class="text-standard text-center">Recommended</p>
                    <?php endif; ?>
                </div>
                <div class="rec-2">
                     
                    <?php if ( get_field('recommended2') )  :  ?>
                        <p class="text-standard text-center">Recommended</p>
                    <?php endif; ?> 
                </div>
            </div>  
        </div>
        <div class="row">
           
            <div class="">
                <div class="col-6 card-item">
                
                <?php $logo1 = $data['logo'] ?> 
                    <?php if ($logo1) :  ?>
                    <img src="<?php echo $logo1['url']; ?>" alt="<?php echo $logo1['alt']; ?>" title="<?php echo $logo1['title']; ?>">
                    <?php endif; ?>
                    <?php $button1 = $data['buton'] ?> 
                    <?php if ($button1) : ?>
                    <button type="button" class="btn-crypto-small" onclick="window.location='<?php echo $button1['url']; ?>';"><?php echo $button1['title']; ?></button>
                    <?php endif; ?>
                    <?php $text1 = $data['text'] ?> 
                    <p class="text-standard text-center mb-0"><?php echo $text1 ?></p>
                </div>
                </div>
            
          
             <div class="">
                <div class="col-6 card-item">
                    <?php $logo2 = $data['logo2'] ?> 
                        <?php if ($logo2) :  ?>
                        <img src="<?php echo $logo2['url']; ?>" alt="<?php echo $logo2['alt']; ?>" title="<?php echo $logo2['title']; ?>">
                        <?php endif; ?>
                        <?php $button2 = $data['buton2'] ?> 
                        <?php if ($button2) : ?>
                        <button type="button" class="btn-crypto-small" onclick="window.location='<?php echo $button2['url']; ?>';"><?php echo $button2['title']; ?></button>
                        <?php endif; ?>
                        <?php $text2 = $data['text2'] ?> 
                        <p class="text-standard text-center mb-0"><?php echo $text2 ?></p>
                </div>
             </div>
                
         
        </div>
            <div class="">
                <table class="smart-table">
                    <tbody>
                        <tr>
                            <td><h5>Rating</h5></td>
                            <td class="text-middle">
                                <?php $rating1 = $data['raiting'] ?> 
                                <?php $ratingTitle1 = $data['text_raiting'] ?> 
                                <?php $rating2 = $data['raiting2'] ?> 
                                <?php $ratingTitle2 = $data['text_raiting2'] ?> 
                                <?php $rate1 = $rating1/2; $rate2 = $rating2/2 ?>
                                <div class="stars">
                                    <?php for ($i=0; $i<(int)$rate1; $i++) { ?>
                                        <span class="star"></span>
                                    <?php } ?>
                                    <?php if (strlen(substr(strrchr($rate1, "."), 1)) != 0) { ?>
                                        <span class="star empty half half-<?php echo substr(strrchr($rate1, "."), 1); ?>">
                                            <span></span>
                                        </span>
                                    <?php } ?>
                                    <?php for ($i=0; $i<(int) (5-$rate1); $i++) { ?>
                                        <span class="star empty"></span>
                                    <?php } ?>
                                </div>
                                <span><?php echo $rating1; ?></span>
                                <span>( <?php echo $ratingTitle1; ?> )</span>
                            </td>
                            <td class="text-middle">
                                <div class="stars">
                                    <?php for ($i=0; $i<(int)$rate2; $i++) { ?>
                                            <span class="star"></span>
                                        <?php } ?>
                                        <?php if (strlen(substr(strrchr($rate2, "."), 1)) != 0) { ?>
                                            <span class="star empty half half-<?php echo substr(strrchr($rate2, "."), 1); ?>"><span></span></span>
                                        <?php } ?>
                                        <?php for ($i=0; $i<(int) (5-$rate2); $i++) { ?>
                                            <span class="star empty"></span>
                                        <?php } ?>
                                </div>
                                <span><?php echo $rating2; ?></span>
                                <span>( <?php echo $ratingTitle2; ?> )</span>
                            </td>
                        </tr>

                        <tr>
                            <td><h5>Fiat Currencies</h5></td>
                            <td>
                                <div class="flex-box">
                                    <?php $mobileRating1 = $data['mobile_raiting'] ?> 
                                    <?php $mobileRating2 = $data['mobile_raiting2'] ?> 
                                    <span><?php echo $mobileRating1; ?> / 10</span>
                                    <div class="progress-track">
                                        <div class="progress-fill">
                                            <span><?php echo $mobileRating1; ?>0%</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="flex-box">
                                    <span><?php echo $mobileRating2; ?> / 10</span>
                                    <div class="progress-track">
                                        <div class="progress-fill">
                                            <span><?php echo $mobileRating2; ?>0%</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <div class="main-table">
                            <?php $body = $data['section'] ?> 
                            <?php foreach ($body as $b): ?>
                            <tr>
                                    <td>
                                        <p class=""><?php echo $b['name'] ?></p>    
                                    </td>
                                    <td>
                                    <?php $rows = $b['rows'] ?> 
                                        <?php foreach ($rows as $r): ?> 
                                            <?php if ($r) : ?>
                                                <tr>
                                                    <td class=""><?php echo $r['name'] ?></td> 
                                                    <td class=""><?php echo $r['value_first_block'] ?></td> 
                                                    <td class=""><?php echo $r['value_to_block'] ?></td>
                                                </tr>
                                            <?php endif; ?>
                                            
                                        <?php endforeach; ?>
                                    </td>
                                <?php endforeach; ?>
                            </tr>
                        </div>
                       
                    </tbody>
                </table>
            </div>
    </div>
</div>






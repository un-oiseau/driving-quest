<?php
$classname = "list-exchanges";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$exchange = get_field('exchange');
?>
<div class="<?php echo esc_attr($classname) ?>">
	<div class="container">
        <div class="col-11">
            <ol class="list-group">
                <?php foreach ($exchange as $e): ?>
                    <?php $item = $e['exchange_item']; ?>
                    <li class="flex-box list-item">
                        <div class="flex-box">
                            <div class="list-img">
                                <?php $icon = $item['icon']; ?>
                                    <?php if ($icon) :  ?>
                                        <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" title="<?php echo $icon['title']; ?>">
                                    <?php endif; ?>
                            </div>    
                            <div class="list-title">
                                <p class="mb-0 mt-0"><?php echo $item['name']; ?></p>
                            </div>
                        </div>
                    

                                <?php $btn = $item['button']; ?>
                                <?php if ($btn) : ?>
                                    <button type="button" class="btn-list_ex" onmouseover="hover(this)" onmouseout="normal(this)" onclick="window.location='<?php echo $btn['url']; ?>';"><?php echo $btn['title']; ?></button>
                                <?php endif; ?>
                   
                    </li>
                <?php endforeach; ?>
            </ol>
        </div>
    </div>
</div>






    		

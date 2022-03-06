<?php
$classname = "affiliate-table";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$bicoin = get_field('bicoin');
?>
<div class="<?php echo esc_attr($classname) ?>">
	<?php foreach ($bicoin as $item): $data = $item['bitcoin_item']; ?>


	<div class="aff-item">

<div class="row">
	<div class="col-2-half">
		<?php $logo = $data['image']; ?>
		<div class="aff-table-logo">
			<?php if ($logo) :  ?>
				<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
			<?php endif; ?>
		</div>
	</div>

	<div class="col-2-half">
		<div class="crypto-rate">
			<?php $stars = $data['rating']; ?>
			<div class="rate-stars">
				<span><h6 class ="h7"><?php echo $stars; ?>/ 10</span></h6></br>
				<?php for ($i=0; $i<$stars; $i++) { ?>
					<span class="star"></span>
				<?php } ?>
				<?php for ($i=0; $i<10-$stars; $i++) { ?>
					<span class="star empty"></span>
				<?php } ?>

			</div>
		</div>
	</div>


        <div class="col-2-half">
    		<div class="text-middle">
    			<div class="withdrawal">
                    <?php $withdrawal = $data['withdrawal']; ?>
        				<p class="h6 uppercase"><?php echo $withdrawal['text_1']; ?></p>
                        <p class="h6 uppercase"><?php echo $withdrawal['text_2']; ?></p>
                    <?php foreach ($withdrawal['flags'] as $flag): ?>
                        <div class="flag-group">
                            <img src="<?php echo $flag['flag_image']['url']; ?>" alt="<?php echo $flag['flag_image']['alt']; ?>" title="<?php echo $flag['flag_image']['title']; ?>">
                            <p><?php echo $flag['flag_name']; ?></p>
                        </div>
                    <?php endforeach; ?>
                    <?php } ?>
    			</div>
    		</div>
    	</div>


	<div class="col-2-half">
		<div class="text-middle">
			<div class="bonus">
				<p class="h6"><?php echo $data['bonus']; ?></p>
			</div>
		</div>
	</div>


	<div class="col-2-half flex-box">
        <ul class="checked-list">
            <?php foreach ($data['pros'] as $p): ?>
                <li><?php echo $p['list_item']; ?></li>
            <?php endforeach; ?>
        </ul>
	</div>



	<div class="col-2-half">
		<div class="flex-box">
			<?php $link = $data['button_link']; ?>
			<?php if ($link) : ?>
				<button type="button" class="btn-tc btn-block" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
			<?php endif; ?>
		</div>
	</div>


</div>

</div>
<?php endforeach; ?>






</div>

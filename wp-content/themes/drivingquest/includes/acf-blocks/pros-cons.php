<?php
$classname = "pros-cons";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$green_data = get_field('green_list');
$red_data = get_field('red_list');
$g_list = get_field('title_green');
$r_list = get_field('title_red');
?>
<div class="<?php echo esc_attr($classname) ?>">
<div class="col-6">
    <div class="green-list">
				<p class="h6 list-title"><?php echo $g_list; ?></p>
			<ul>
				<?php foreach ($green_data as $green) { ?>
					<li><span></span><?php echo $green['list_item']; ?></li>
				<?php } ?>
			</ul>
    </div>
</div>
<div class="col-6">
    <div class="red-list">
                <p class="h6 list-title"><span></span><?php echo $r_list; ?>
			<ul>
				<?php foreach ($red_data as $red) { ?>
					<li><span></span><?php echo $red['list_item']; ?></li>
				<?php } ?>
			</ul>
		</div>
    </div>
</div>

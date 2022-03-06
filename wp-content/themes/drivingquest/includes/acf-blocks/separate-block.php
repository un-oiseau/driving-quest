<?php
$classname = "separate-block";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$data = get_field('block');
?>
<div class="<?php echo esc_attr($classname) ?>">
    <div class="container">
        <div class="separate-card">
            <div class="separate-header">
                <p class="verif-note text-center mb-0 mt-0"><?php echo $data['verification_note']; ?></p>
            </div>
            <div class="separate-body">
                <div class="row">
                    <div class="col-6">
                        <h2><?php echo $data['title']; ?></h2>
                        <p><?php echo $data['text']; ?></p>
                    </div>
                    <div class="col-6">
                        <div class="sep-image">
                        <?php $logo = $data['image']; ?>
                            <?php if ($logo) :  ?>
                                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

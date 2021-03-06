<?php
$classname = "container student-reviews";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$rev_block = get_field('review_block');
?>

<div class="<?php echo esc_attr($classname) ?>">
    <div class="container">
        <h2><?php echo get_field('title');?></h2>
    </div>
    <div class="row">
        <?php foreach ($rev_block  as $reviews): $review = $reviews['review_item']; ?>
        <div class="col-lg-4">
            <div class="card align-items-md-center justify-content-md-center">
                <div class="card-body">
                    <div class="card-top d-flex">
                        <div class="card-img">
                            <?php $avatar = $review['avatar'] ;?>
                                <?php if ($avatar) :  ?>
                                    <img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt']; ?>" title="<?php echo $avatar['title']; ?>">
                                <?php endif; ?>
                        </div>
                        <div class="text-left">
                            <h5><?php echo $review['full_name']; ?></h5>
                            <?php $insta = $review['insta_nickname'];?>
                            <?php if ($insta) : ?>
                                <a class="insta-link" href="<?php echo $insta['url']; ?>"><?php echo $insta['title']; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <h4 class="card-title text-center"><?php echo $review['review_title']; ?></h4>
                    <p class="card-text mb-2"><?php echo $review['review_text']; ?></p>
                    <div class="mb-1">
                        <?php $stars = $review['review_star']; ?>
                        <div class="stars text-center">
                            <?php for ($i=0; $i<$stars; $i++) { ?>
                                <span class="star"></span>
                            <?php } ?>
                            <?php for ($i=0; $i<5-$stars; $i++) { ?>
                                <span class="star empty"></span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach?>
    </div>
</div>

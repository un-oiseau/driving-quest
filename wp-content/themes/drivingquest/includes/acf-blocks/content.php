

<div class="content">
    <?php if (get_field('title')): ?>
        <p class="blue-title"><?php echo get_field('title'); ?><span class="toggller"></span></p>
    <?php endif; ?>
    <ul>
        <?php foreach (get_field('headings') as $li) { ?>
            <li><a href="<?php echo $li['heading']['url']; ?>"><?php echo $li['heading']['title']; ?></a></li>
        <?php } ?>
    </ul>
</div>




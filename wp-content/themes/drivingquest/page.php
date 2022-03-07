<?php
get_header(); ?>

<div class="page-content">
<?php if (!is_front_page()) : ?>

<div class="container">
	<div class="breadcrumbs">
		<a href="<?php echo get_home_url(); ?>"><?php echo get_the_title( get_option('page_on_front') ); ?></a>
		<img src="<?php echo get_template_directory_uri() . '/images/bread-icon.svg' ?>" alt="icon">
		<span><?php single_post_title(); ?></span>
	</div>
</div>

<?php endif; ?>
    <?php the_content(); ?>

</div>

<?php get_footer(); ?>

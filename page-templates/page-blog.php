<?php
/*
* Template Name: Blog template
*/ ?>

<?php get_header(); ?>

<div>
    <?php $featured_posts = get_field('relationship'); ?>
    <?php if ($featured_posts) : ?>

        <?php foreach ($featured_posts as $post) :
            setup_postdata($post); ?>
            <?php include get_theme_file_path('/include/sections/topList-1-3.php'); ?>
            <?php include get_theme_file_path('/include/sections/title_latest-top3.php'); ?>
            <?php include get_theme_file_path('/include/sections/list-3-essentialGuides.php'); ?>
            <?php include get_theme_file_path('/include/sections/top3-ofAllCategories.php'); ?>
        <?php endforeach; ?>

        <?php
        wp_reset_postdata(); ?>

    <?php endif; ?>
</div>

<?php get_footer(); ?>
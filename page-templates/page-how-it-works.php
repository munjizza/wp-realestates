<?php
/*
* Template Name: How it works template
*/
?>

<?php get_header(); ?>

<div class="homepage" id="homepage">
 test 
    <div class="sections">
        <?php $featured_posts = get_field('relationship'); ?>
        <?php if ($featured_posts) : ?>

            <?php foreach ($featured_posts as $post) :
                // Setup this post for WP functions (variable must be named $post).
                setup_postdata($post); ?>
                <?php include get_theme_file_path('/include/sections/investments.php'); ?>
            <?php endforeach; ?>

            <?php
            // Reset the global post object so that the rest of the page works correctly.
            wp_reset_postdata(); ?>

        <?php endif; ?>
    </div>

</div>

<?php get_footer(); ?>
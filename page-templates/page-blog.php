<?php
/*
* Template Name: Blog template
*/ ?>

<?php get_header(); ?>

    <div class="add-padding">
        <?php $featured_posts = get_field('relationship_blog'); ?>
        <?php if ($featured_posts) : ?>

            <?php foreach ($featured_posts as $post) :
                // Setup this post for WP functions (variable must be named $post).
                setup_postdata($post); ?>
                <?php include get_theme_file_path('/include/sections/section-blog-one.php'); ?>
                <?php include get_theme_file_path('/include/sections/section-blog-two.php'); ?>
                <?php include get_theme_file_path('/include/sections/section-blog-three.php'); ?>
                <?php include get_theme_file_path('/include/sections/section-blog-four.php'); ?>

            <?php endforeach; ?>

            <?php
            // Reset the global post object so that the rest of the page works correctly.
            wp_reset_postdata(); ?>

        <?php endif; ?>
    </div>






<?php get_footer(); ?>
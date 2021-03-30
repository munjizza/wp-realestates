<?php
/*
* Template Name: Sign Up template
*/ ?>

<?php get_header(); ?>
prijava

<div class="container">

        <?php $featured_posts = get_field('relationship'); ?>
        <?php if ($featured_posts) : ?>

            <?php foreach ($featured_posts as $post) :
                // Setup this post for WP functions (variable must be named $post).
                setup_postdata($post); ?>
                <!-- <?php include get_theme_file_path('/include/sections/section-contact.php'); ?> -->
                <?php include get_theme_file_path('/include/sections/section-questions.php'); ?>
            <?php endforeach; ?>

            <?php
            // Reset the global post object so that the rest of the page works correctly.
            wp_reset_postdata(); ?>

        <?php endif; ?>

</div>

<?php get_footer(); ?>
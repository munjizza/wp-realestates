<?php
/*
* Template Name: Home Page template
*/
?>

<?php get_header(); ?>

<div class="image-top-bgd text-center">
    <?php $bgd_image = get_field('blue_wave_bgd'); ?>
    <img src="<?php echo $bgd_image ?>" class="img-fluid" />
</div>

<div class="homepage" id="homepage">

    <div class="sections">
        <?php $featured_posts = get_field('relationship'); ?>
        <?php if ($featured_posts) : ?>

            <?php foreach ($featured_posts as $post) :
                // Setup this post for WP functions (variable must be named $post).
                setup_postdata($post); ?>
                <?php include get_theme_file_path('/include/sections/section-one.php'); ?>
                <?php include get_theme_file_path('/include/sections/section-two.php'); ?>
                <?php include get_theme_file_path('/include/sections/section-three.php'); ?>
                <?php include get_theme_file_path('/include/sections/section-four.php'); ?>
                <?php include get_theme_file_path('/include/sections/section-five.php'); ?>
                <?php include get_theme_file_path('/include/sections/section-six.php'); ?>
                <?php include get_theme_file_path('/include/sections/section-seven.php'); ?>
            <?php endforeach; ?>

            <?php
            // Reset the global post object so that the rest of the page works correctly.
            wp_reset_postdata(); ?>

        <?php endif; ?>
    </div>

</div>

<?php get_footer(); ?>
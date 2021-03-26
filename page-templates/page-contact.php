<?php
/*
* Template Name: Contact template
*/ ?>

<?php get_header(); ?>

<div class="container">

  <?php $featured_posts = get_field('relationship'); ?>
  <?php if ($featured_posts) : ?>

    <?php foreach ($featured_posts as $post) :
      // Setup this post for WP functions (variable must be named $post).
      setup_postdata($post); ?>
      <?php include get_theme_file_path('/include/sections/section-contact.php'); ?>
      <?php include get_theme_file_path('/include/sections/section-questions.php'); ?>
    <?php endforeach; ?>

    <?php
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>

  <?php endif; ?>
 
</div>


<?php get_footer(); ?>










 <!-- 
  <div class="contact-bottom-section">

  <?php $found_post = null;
    if ($posts = get_posts(array(
      'name' => 'test-contact',
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => 1
    ))) $found_post = $posts[0];

    // Now, we can do something with $found_post
    if (!is_null($found_post)) { ?>

      <div> <?php the_title(); ?>

        <?php if (have_rows('contact-bottom')) : ?>
          <?php while (have_rows('contact-bottom')) : the_row(); ?>
            <?php if (get_row_layout() == 'contact-bottom-section') : ?>

              <h2 class="content_title text-center mt-5"><?php the_sub_field('title'); ?></h2>

            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>

      </div>

    <?php } ?>
  </div> -->
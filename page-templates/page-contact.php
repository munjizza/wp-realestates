<?php
/*
* Template Name: Contact template
*/ ?>

<?php get_header(); ?>

<div class="container">
  <?php $featured_posts = get_field('relationship'); ?>
  <?php if ($featured_posts) : ?>

    <?php foreach ($featured_posts as $post) :
      setup_postdata($post); ?>
      <?php include get_theme_file_path('/include/sections/contactForm-titleText2links.php'); ?>
      <?php include get_theme_file_path('/include/sections/faq.php'); ?>
    <?php endforeach; ?>

    <?php
    wp_reset_postdata(); ?>

  <?php endif; ?>
</div>

<?php get_footer(); ?>
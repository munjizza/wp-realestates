<?php
/*
* Template Name: Category template
*/ 

get_header(); ?>

<div class="container pt-5">
  <h1 class="content_title text-center mt-5"> <?php single_cat_title('', true); ?> </h1>

  <?php
  if (have_posts()) : ?>
    <?php
    // Display optional category description
    if (category_description()) : ?>
      <div class="description"><?php echo category_description(); ?></div>
    <?php endif; ?>

    <div class="row align-items-start justify-content-between cards-top3">
      <!-- The Loop -->
      <?php
      while (have_posts()) : the_post(); ?>
        <div class="col-md-4 d-flex justify-content-center">

          <div class="card">
            <div class="card-img">
              <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url() ?>" class="img-fluid" />
              <?php endif; ?>
            </div>
            <div class="card-content">
              <a class="box-title card-title text-uppercase"><?php the_title(); ?></a>
              <?php $excerpt = get_the_excerpt(); ?>
              <p class="box-text card-text"><?php echo $excerpt ?></p>
              <a class="content-link" href="<?php the_permalink(); ?>">Read More</a>
            </div>
          </div>
          
        </div>
      <?php endwhile; ?>
    </div>

  <?php else : ?>
    <p>Sorry, no posts in this category.</p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
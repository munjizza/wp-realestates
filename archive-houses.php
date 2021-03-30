<?php
/*
* Template Name: Houses template
*/ ?>

<?php get_header(); ?>

<div class="container">

  <div class="row add-padding justify-content-start">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="col-lg-3 col-md-6 col-xs-12 d-flex justify-content-start">
          <a href="<?php echo get_permalink() ?>">
            <div class="card house-card">
              <div class="card-thumb">
                <div class="image-holder"><img src="<?php the_field('house_image'); ?>" class="img-fluid" /></div>
                <div class="image-info">
                  <p class="price"><?php the_field('price'); ?></p>
                  <p class="description"><span><?php the_field('beds'); ?></span>,<span><?php the_field('bathrooms'); ?> | <?php the_field('squareft'); ?></span></p>
                </div>
              </div>
              <div class="card-info">
                <div class="rent">
                  <p>rent</p>
                  <p><?php the_field('rent_value'); ?></p>
                </div>
                <div class="cap-rate">
                  <p>cap rate</p>
                  <p><?php the_field('cap_rate_value'); ?></p>
                </div>
                <div class="return">
                  <p>return</p>
                  <p><?php the_field('return_value'); ?></p>
                </div>
                <div class="neighborhood">
                  <p>neighborhood</p>
                  <?php
                  $ratingstar = get_field('stars');
                  ?>
                  <div class="rating-stars d-flex pt-2">
                    <span class="fa fa-star <?php if ($ratingstar >= 1) {
                                              echo 'checked';
                                            } ?>"></span>
                    <span class="fa fa-star <?php if ($ratingstar >= 2) {
                                              echo 'checked';
                                            } ?>"></span>
                    <span class="fa fa-star <?php if ($ratingstar >= 3) {
                                              echo 'checked';
                                            } ?>"></span>
                    <span class="fa fa-star <?php if ($ratingstar >= 4) {
                                              echo 'checked';
                                            } ?>"></span>
                    <span class="fa fa-star <?php if ($ratingstar == 5) {
                                              echo 'checked';
                                            } ?>"></span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

    <?php endwhile;
    endif; ?>
  </div>
</div>

<?php get_footer(); ?>
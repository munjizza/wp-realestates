<div class="home-section position-relative" id="section-six" style="background-image: url(<?php the_field('card-bgd_square'); ?>);">
  <div class="container d-flex flex-column">

    <div class="row align-items-start justify-content-between cards-top3 order-1">

      <?php $the_query = new WP_Query('posts_per_page=3'); ?>

      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

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

      <?php endwhile;
      wp_reset_postdata(); ?>
    </div>

    <?php if (have_rows('sections')) : ?>
      <?php while (have_rows('sections')) : the_row(); ?>
        <?php if (get_row_layout() == 'titleText_latest-top3_btn') : ?>

          <div class="row align-items-center justify-content-between order-0">
            <div class="col-md-6">
              <h2 class="content_title"><?php the_sub_field('content_title'); ?><br><span><?php the_sub_field('content_title_orange'); ?></span></h2>
            </div>
            <div class="col-md-6">
              <p class="content_lead"><?php the_sub_field('content_lead'); ?></p>
            </div>
          </div>

          <div class="content_link_btn text-center mt-5 order-2">
            <?php $link = get_sub_field('content_link'); ?>
            <a class="content-btn" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>
          </div>

        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>

  </div>
</div>
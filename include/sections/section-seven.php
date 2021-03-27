<?php if (have_rows('sections')) : ?>
  <?php while (have_rows('sections')) : the_row(); ?>
    <?php if (get_row_layout() == 'section_seven') : ?>
      <div class="home-section position-relative" id="section-seven">

        <div class="container row align-items-center justify-content-between">

          <div class=" col-md-6 content">
            <h2 class="content_title"><?php the_sub_field('content_title'); ?> <span><?php the_sub_field('content_title_orange'); ?></span></h2>
            <p class="content_lead"><?php the_sub_field('content_lead'); ?></p>
            <div class="form">
              <?php echo do_shortcode('[contact-form-7 id="405" title="Contact form homepage"]'); ?>
            </div>
          </div>

          <div class="image-bgd" style="background-image: url('<?php the_sub_field('blue_right_bgd'); ?>')"></div>

          <div class=" col-md-6 image-holder d-flex align-items-center justify-content-center">
            <img src="<?php the_sub_field('illustration_3'); ?>" class="img-fluid" />
          </div>

        </div>

      </div>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>
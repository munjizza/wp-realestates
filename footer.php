<footer>
  <div class="container">

    <div class="footer-top d-flex justify-content-between align-items-center">
      <div class="logo">
        <?php if (has_custom_logo()) {
          the_custom_logo();
        } else { ?>
          <h1 class="navbar-brand mb-0"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
        <?php } ?>
      </div>
      <div class="to-top">
        <a href="#" class="to-top-link"></a>
      </div>
    </div>

    <div class="row footer-middle">
      <div class="col-3 foter-text"><?php the_field('footer_text', 'option'); ?></div>
      <div class="col-3 footer-nav pages">
        <?php wp_nav_menu(array('theme_location' => 'footer_nav')); ?>
      </div>
      <div class="col-3 footer-nav terms">
        <?php wp_nav_menu(array('theme_location' => 'footer_nav_terms')); ?>
      </div>
      <div class="col-3 footer-nav social">
        <p class="copyright"><?php the_field('follow_us', 'option'); ?></p>

        <div class="social-links">
          <?php if (have_rows('repeater_social', 'option')) : while (have_rows('repeater_social', 'option')) : the_row(); ?>
              <li><a href="<?php the_sub_field('social_link'); ?>" target="blank"><i class="fab <?php the_sub_field('social_icon_class'); ?>"></i></a></li>
          <?php endwhile;
          endif; ?>
        </div>

      </div>
    </div>

    <div class="footer-bottom d-flex justify-content-between align-items-start">
      <p class="copyright"><?php the_field('copyright', 'option'); ?></p>
    </div>

  </div>
</footer>

<?php wp_footer(); ?>

</body>
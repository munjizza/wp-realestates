<!DOCTYPE html>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <title><?php bloginfo('name'); ?><?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>

  <?php wp_head(); ?>
</head>

<body class="<?php if (is_front_page()) {
                echo "body-home";
              } ?>">
  <header class="container-fluid p-0 position-absolute">
    <div class="container">

      <nav class="d-flex justify-content-between align-items-center header_nav">

        <div class="logo">
          <?php
          if (is_front_page()) {
            the_custom_logo();
          } else { ?>
            <a href="<?php echo esc_url(home_url('/')); ?>"> <img src="<?php the_field('orange-logo', 'option'); ?>" /></a>
          <?php } ?>
        </div>

        <div class="d-flex justify-content-between align-items-center">
          <?php
          if (is_front_page() or is_page(array('druga-str'))) {
            wp_nav_menu(array('theme_location' => 'header_nav'));
          } else {
            wp_nav_menu(array('theme_location' => 'header-black_nav'));
          }
          ?>
          <?php
          // Reset the global post object so that the rest of the page works correctly.
          wp_reset_postdata(); ?>
        </div>

      </nav>

    </div>
  </header>
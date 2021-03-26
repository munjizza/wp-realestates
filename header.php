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
  <header>
    <div class="container">

      <nav class="d-flex justify-content-between align-items-center header_nav">

        <div class="logo">
          <?php
          if (is_page(array('blog', 'contact', 'sign-up'))) { ?>
            <a href="<?php echo esc_url(home_url('/')); ?>"> <img src="<?php the_field('orange-logo', 'option'); ?>" /></a>
          <?php
          } else {
            the_custom_logo();
          } ?>
        </div>

        <div class="d-flex justify-content-between align-items-center">
          <?php
          if (is_page(array('blog', 'contact', 'sign-up'))) {
            wp_nav_menu(array('theme_location' => 'header-black_nav'));
          } else {
            wp_nav_menu(array('theme_location' => 'header_nav'));
          }
          ?>
        </div>

      </nav>

    </div>
  </header>
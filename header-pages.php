<!DOCTYPE html>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <title><?php bloginfo('name'); ?><?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>

  <?php wp_head(); ?>
</head>

<body class="<?php if (is_front_page()) {
                // This is the blog posts index
                echo "body-home";
              } ?>">
  <header class="header-pages">
    <div class="container">

      <nav class="d-flex justify-content-between align-items-center header_nav">

        <div class="logo">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php the_field('logo-pages', 'option'); ?>" class="logo-pages-img" />
          </a>
        </div>

        <div class="d-flex justify-content-between align-items-center">
          <?php wp_nav_menu(array('theme_location' => 'header_nav')); ?>

          <?php $link = get_field('login_btn', 'option'); ?>
          <a class="header_btn login-btn" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>

          <?php $link = get_field('signup_btn', 'option'); ?>
          <a class="header_btn signup-btn" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>

          <div class="lang"><?php the_field('lang', 'option'); ?></div>

        </div>

      </nav>

    </div>
  </header>
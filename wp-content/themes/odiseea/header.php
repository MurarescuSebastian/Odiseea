<!doctype html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>

  <nav class="container header-navbar">

    <?php
    if (function_exists('the_custom_logo')) {
      $custom_logo_id = get_theme_mod('custom_logo');
      $logo = wp_get_attachment_image_src($custom_logo_id);
    }
    ?>

    <a href="<?php echo get_bloginfo('url') ?>">
      <img width="90" height="90" loading="lazy" src='<?php echo get_template_directory_uri() ?>/assets/img/400JpgdpiLogoCropped.jpg'></img>
    </a>

    <div class="nav-group">
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'header-top-menu',
          'menu_class' => 'nav-menu [ js-nav-menu ]',
        )
      );
      ?>
    </div>
  </nav>

  <?php
  // Front Page
  if (is_front_page()) {
    get_template_part('template-parts/header', 'homepage');
  }

  // Page Contact
  if (is_page('contact')) {
    get_template_part('template-parts/header', 'contact');
  }
  if (is_page('despre')) {
    get_template_part('template-parts/header', 'aboutUs');
  }
  if (is_page('program-tarife')) {
    get_template_part('template-parts/header', 'programTarife');
  }
  if (is_page('blog')) {
    get_template_part('template-parts/header', 'blog');
  }

  // Single page
  if (is_single()) {
    get_template_part('template-parts/article', 'header');
  }

  ?>
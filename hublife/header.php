<!doctype html>
<html <?php language_attributes(); ?>>

  <head>
    <!-- Required meta tags -->
    <meta <?php bloginfo('charset'); ?>>
    <meta <?php bloginfo('name'); ?>>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.theme.default.min.css" />



    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/1e4507fb95.js" crossorigin="anonymous"></script>

    

    <?php wp_head(); ?>

</head>
  <body>

<!-- Navbar -->
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
            <a class="navbar-brand"> 
                <?php
                    $hublife_custom_logo = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($hublife_custom_logo, 'full');

                    if(has_custom_logo()) {
                        echo '<img src="' .  esc_url($logo[0]) . '">';
                    } else {
                        echo '<h1 class="m-0">' . get_bloginfo('name'). '</h1>';
                    }
                    
                ?>

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Serviços</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Sobre</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
              </ul>
              <a class="btn btn-primary"  href="#">Solicite um orçamento</a>
             </div>
        </div>
    </nav>
  </div>
<!-- Navbar Fim -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Universidad, estudia en línea, Maestría, Doctorado">
        <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T2GP32R');</script>
    <!-- End Google Tag Manager -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap" rel="preload" as="style" onload="this.rel='stylesheet'">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap" rel="preload" as="style" onload="this.rel='stylesheet'">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@100;200;300;400;500;600&display=swap" rel="preload" as="style" onload="this.rel='stylesheet'">
    <link href="https://fonts.googleapis.com/css2?family=Hepta+Slab:wght@100;200;300;400;500;600;700;800&display=swap" rel="preload" as="style" onload="this.rel='stylesheet'">
    <link href="https://use.typekit.net/bcx3rtu.css" rel="preload" as="style" onload="this.rel='stylesheet'">
    <script src="https://kit.fontawesome.com/0edce41d7a.js" defer="defer" crossorigin="anonymous"></script>
    <link href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" rel="preload" as="style" onload="this.rel='stylesheet'">
    <link type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="preload" as="style" onload="this.rel='stylesheet'">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/favicon-16x16.png">
    <link rel="manifest" href="<?php echo esc_url(get_template_directory_uri()) ?>/site.webmanifest">
    <link rel="mask-icon" href="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <?php
    if (is_product_category()){
      ?>
      <meta property="og:url"                content="<?php echo home_url($_SERVER['REQUEST_URI']) ?>" />
      <meta property="og:type"               content="book" />
      <meta property="og:title"              content="Tienda Editorial IEXE" />
      <meta property="og:description"        content="Visita nuestra sección de libros gratuitos" />
      <meta property="og:image"              content="https://iexe.edu.mx/wp-content/uploads/2022/02/bg_IEXE_politicas.jpg" />

      <?php
    }
     ?>

  <script charset="UTF-8" src="//web.webpushs.com/js/push/fb04d2eca64670c2d4d4f783909d33aa_1.js" async></script>
    <?php wp_head(); ?>
</head>
<body <?php iexe_unicorn_body() ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T2GP32R"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

  <nav id="blog-nav" class="navbar navbar-expand-lg bg-expost sticky-blog pt-2 pb-2">
    <div class="container">
        <a class="navbar-brand" href="https://www.iexe.edu.mx/blog-nuevo/"><img class="img-fluid header-logo-expost" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/expost-logo.png" alt="logo-expost" height="15"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                  <?php
                    wp_nav_menu( array(
                        'container' => '',
                        'theme_location' => 'menu_expost',
                        'menu_class' => 'navbar-nav',
                        'add_li_class' => 'nav-item',
                        'link_class'   => 'nav-link'
                    ) );
                    ?>
        <!-- <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Noticias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Lo más visto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Top entradas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Políticas Públicas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Gobierno</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Empresarial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Desarrollo Humano</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tecnología</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Derecho</a>
          </li>
        </ul> -->
      </div>
    </div>
</nav>
<style>
    .bg-expost{
        background: #273481;
    }
    .bg-expost a {
    color: #FFF;
    font-weight: 300;
    font-size: 14px;
}
.sticky-blog{
    display: flex;
    position: fixed;
    width: 100%;
    z-index: 4;
}
a.navbar-brand {
    width: unset;
    margin-right: 30px;
}
.header-logo-expost{
    height: 15px;
}
div#wpadminbar {
    display: none;
}
body#single{
  margin-top: 0px;
}
a.navbar-brand {
    width: unset;
    margin-right: 50px;
}
.sticky a.navbar-brand {
    width: unset;
    margin-right: 50px;
}
nav.navbar.sticky {
    background: #273481!important;
}
ul.navbar-nav{
  justify-content: space-arround;
  width: 88%;
}
</style>
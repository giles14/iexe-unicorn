<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="IEXE Universidad, tu mejor opción para estudiar en línea licenciatura, maestría o doctorado.">
    <meta name="keywords" content="Universidad, estudia en línea, Maestría, Doctorado">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0edce41d7a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <?php wp_head(); ?>
</head>
<body <?php iexe_unicorn_body() ?>>
    <!-- <nav id="nav-primaria">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="logo">
                        <img src="assets/img/logo.svg" alt="">
                    </div>
            
                    <div class="menu">
                        Menu
                        <img class="menu-boton" src="assets/img/menu.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        

    </nav> -->
    <nav class="navbar fixed-top
     navbar-expand-lg navbar-light bg-light">
        <div class="container">
            
          <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
             <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logo.svg"  alt="">
          </a>
            
            
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul> -->
          <div class="navegacion-botones">
            <img  src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/login.svg" alt="" class="accesos"> Accesos
            <img style="margin-left: 20px;" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/search.svg" alt="" class="busqueda"> Buscar
          </div>
                   
        </div>
        <div class="menu">
            <a href="javascript:void(0)" class="closebtn" onclick="openNav()">Menu <img class="menu-boton" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/menu.svg" alt=""></a>
        </div>
        </div>
      </nav>
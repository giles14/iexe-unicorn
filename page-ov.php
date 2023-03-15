<?php /* Template Name: Landing Test de Orientacion */ ?>
<!DOCTYPE html>
<html lang="es">
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
    <link href="https://fonts.googleapis.com/css2?family=Georama:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/bcx3rtu.css">
    <script src="https://kit.fontawesome.com/0edce41d7a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Mono:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/favicon-16x16.png">
    <link rel="manifest" href="<?php echo esc_url(get_template_directory_uri()) ?>/site.webmanifest">
    <link rel="mask-icon" href="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container" style="position: relative;">
            <div class="row">
                <div class="col-lg-6">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/orientacion-vocacional/azul-logo_iexe_hor_200px.png" alt="" class="logo mt-5">
                    <h1 class="cambia">¡Cambia tu futuro hoy!</h1>
                    <p class="texto-test">
                        Este test de orientación vocacional te ayudara a encontrar las áreas que más se adecuan a tus habilidades. De acuerdo con tus gustos y fortalezas, encontraremos tu carrera ideal. Te ayudamos a tomar una de las decisiones mas importantes de tu vida.
                    </p>
                    <a href="#test" id="haz-test" class="btn purpl mt-5 d-none d-lg-block sombra">Haz tu test</a>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/orientacion-vocacional/escudo-like.png" alt="" class="img-fluid escudo">
                </div>
            </div>
        </div>
    </header>
    <section id="test">
        <div class="container" style="position: relative;">
            <div class="row encuesta-frame no-gutters mostrar" data-step="0">
                <div class="col">
                    <div class="contenido-forma">
                        <div class="imagen d-none d-lg-block">
                            <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/orientacion-vocacional/iniciar.png" alt="">
                        </div>
                        <div class="texto-apoyo">
                            <div class="contenedor">
                                <h2 class="te-ayudamos mt-5 text-center">
                                    Te ayudamos a elegir la mejor carrera para  ti
                                </h2>
                                <p class="texto">
                                    Este test de orientación vocacional te ayudara a encontrar las áreas que más se adecuan a tus habilidades. De acuerdo con tus gustos y fortalezas, encontraremos tu carrera ideal. Te ayudamos a tomar una de las decisiones mas importantes de tu vida.
                                </p>
                                <a href="javascript:void(0)" onclick="tabsShow(1)" class="btn purpl mt-3 mt-lg-5 sombra">Empieza tu test</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row encuesta-frame no-gutters" data-step="1">
                <div class="col">
                    <div class="contenido-forma">
                        <div class="texto-apoyo">
                            <div class="contenedor">
                                <h2 class="te-ayudamos mt-3">
                                    Llena tus datos...
                                </h2>
                                <form id="contacto" method="POST" data-origen="voc-landing" action="" onsubmit="event.preventDefault();enviarFormulario(this,true,false,false,false); tabsShow(2)">
                                    <div class="form-group">
                                      <label for="nombre">Nombre completo*</label>
                                      <input type="text" name="nombre" placeholder="Ingresa aquí tu nombre" class="form-control" id="nombre" aria-describedby="emailHelp" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="correo">Correo electrónico*</label>
                                        <input name="email" type="email" placeholder="Ingresa aquí tu correo electrónico" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="telefono">Teléfono o celular*</label>
                                        <input name="telefono" type="tel" placeholder="Ingresa aquí tu número telefónico" class="form-control" id="telefono"  required>
                                        <input type="hidden" name="programa" value="SINA-LIC">
                                    </div>
                                    <div class="form-group">
                                        <p class="bachillerato">¿Tienes tu bachiller o Preparatoria concluida?</p>
                                            <input type="radio" id="concluida" name="escolaridad" value="Si" required="">
                                            <label for="concluida">Si</label>
                                            <input type="radio" id="no-concluida" name="escolaridad" value="No">
                                            <label for="no-concluida">No</label>
                                            <input type="radio" id="en-tramite" name="escolaridad" value="En-tramite">
                                            <label for="en-tramite">En trámite</label>
                                    </div>
                                    <div class="col-12 text-center">
                                        <!-- <button type="button" onclick="tabsShow(2)" class="btn purpl mt-2">Enviar registro <div class="ld ld-ring ld-spin"></div></button> -->
                                        <button type="submit" class="btn purpl mt-2">Empezar <div class="ld ld-ring ld-spin d-none"></div></button>

                                    </div>
                                  </form>
                            </div>
                        </div>
                        <div class="imagen d-none d-lg-block">
                            <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/orientacion-vocacional/tus-datos.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row encuesta-frame" data-step="2">
                <div class="col">
                    <form id="regForm" action="">
                        
                        <p class="pregs-inicial mb-4">El propósito de este examen es facilitar la exploración de tus habilidades e intereses para así poder identificar carreras potenciales que se ajusten a ellos. Tómate el tiempo necesario para responder cada pregunta con sinceridad.                                                                       </p>
                        <div class="tab" id="my-last">
                            <div class="row">
                                <div class="col">
                                    <p class="pregs">Antes de comenzar, elige un área de interés de las siguientes.</p>
                                    <p><select name="seleccion-interes" id="seleccion-de-interes">
                                        <option value="1">Artes</option>
                                        <option value="2">Ciencias Sociales</option>
                                        <option value="3">Economía</option>
                                        <option value="4">Finanzas</option>
                                        <option value="5">Tecnología</option>
                                        <option value="5">Negocios</option>
                                        <option value="5">Ninguna de las anteriores</option>
                                    </select></p>
                                </div>
                            </div>
                        </div>
                
                        <div style="overflow:auto;">
                        <div class="boton-siguiente">
                            <!-- <button type="button" id="prevBtn" onclick="nextPrev(-1)">Anterior</button> -->
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Siguiente</button>
                        </div>
                        </div>
                
                        <!-- Circles which indicates the steps of the form: -->
                        <div style="text-align:center;margin-top:40px; display: none;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        </div>
                
                    </form>
                </div>
            </div>
            <div class="row encuesta-frame es-resultado no-gutters" data-step="3">
                <div class="col">
                    <div class="container m-3 pr-5">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="felicidades mt-2 mb-5 text-center text-md-left">
                                    Felicidades, haz concluido tu test...
                                </h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="resultado w-100 text-center text-md-left">Tu resultado es:</p>
                            </div>
                            <div class="col-12 col-md-4 mx-auto">
                                <div class="chart-container" style="position: relative; height:100%; width:100%">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <p class="tu-perfil resultado mt-3 m-md-0">Tu perfil es: </h2>
                                <p id="texto-personalidad">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, laudantium. Laborum, recusandae? Quo optio accusamus voluptate possimus porro dicta necessitatibus veritatis quos, inventore fugiat deserunt, fuga nisi repellat debitis labore.</p>
                                <p class="resultado mt-3 m-md-0">Tus habilidades son:</h2>
                                <ul id="lista-habilidades">
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="row mt-md-5 mt-2 mb-5">
                            <div class="col-12 mb-3">
                                <p class="tu-perfil resultado mb-3">Basado en tu perfil, te recomendamos las siguientes carreras:</h2>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8 col-12 order-2 mb-4">
                                            <h2 class="resultado-carrera text-left text-md-left" id="resultado-licenciatura">Licenciatura en Seguridad Pública</h2>
                                            <p class="texto d-none"  id="resultado-text-licenciatura">
                                                Adquirirás las herramientas y competencias para tu óptimo desempeño en las instituciones encargadas de la investigación y reacción en contra de la delincuencia y.
                                            </p>
                                            <a href="#" id="link-resultado" class="btn purpl mt-0 mx-auto ml-md-0 mb-3 mb-md-0" target="_blank">Descubre</a>
                                        </div>
                                        <div class="col-md-4 col-12 order-1"><img class="img-fluid mt-0 d-none d-lg-block" id="resultado-img"  src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/orientacion-vocacional/escudo_ld.webp" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-none">
                                <div class="imagen d-none d-lg-block" style="padding: 10px 62px;">
                                    <img class="img-fluid mt-4" id="resultado-img"  src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/orientacion-vocacional/escudo_ld.webp" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8 col-12 order-2">
                                            <h2 class="resultado-carrera text-left text-md-left" id="resultado-licenciatura-2">Licenciatura en Seguridad Pública</h2>
                                            <p class="texto d-none"  id="resultado-text-licenciatura-2">
                                                Adquirirás las herramientas y competencias para tu óptimo desempeño en las instituciones encargadas de la investigación y reacción en contra de la delincuencia y.
                                            </p>
                                            <a href="#" id="link-resultado-2" class="btn purpl mt-0 mx-auto ml-md-0" target="_blank">Descubre</a>
                                        </div>
                                        <div class="col-12 col-md-4 order-1"><img class="img-fluid mt-0 d-none d-lg-block" id="resultado-img-2"  src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/orientacion-vocacional/escudo_ld.webp" alt=""></div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col d-none">
                                <div class="imagen d-none d-lg-block" style="padding: 10px 62px;">
                                    <img class="img-fluid mt-4" id="resultado-img"  src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/orientacion-vocacional/escudo_ld.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="img-rectangulo d-none d-lg-block">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/orientacion-vocacional/rectback.png" alt="" style="height: 680px;">
            </div>
        </div>
    </section>
    

    <section id="alumnos-opinan">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-4">Nuestros alumnos opinan…</h2>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="testimonial blanco">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/orientacion-vocacional/jessica.png" class="img-fluid d-block mx-auto" alt="">
                        <p class="nombre-alumno mt-3 mb-0">Jessica García Del Valle</p>
                        <p class="programa text-center">Licenciatura en Derecho</p>
                        <p class="testimonio">
                            Esta carrera me ha proporcionado una sólida base en las leyes y habilidades valiosas como pensamiento crítico y resolución de problemas. Estudiar de manera online ha sido muy conveniente y he disfrutado la experiencia. Si estás considerando inscribirte en la licenciatura en derecho, te recomiendo dar el paso. Estoy segura de que no te arrepentirás.
                        </p>
                    </div>
                    
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="testimonial azul">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/orientacion-vocacional/jose.png" class="img-fluid d-block mx-auto" alt="">
                        <p class="nombre-alumno mt-3 mb-0">José Alberto Hernández</p>
                        <p class="programa text-center">Licenciatura en Seguridad Pública</p>
                        <p class="testimonio">
                            Mi experiencia estudiando la licenciatura ha sido muy enriquecedora y me ha otorgado una sólida base en el campo de la seguridad y el orden público. He aprendido a proteger y servir a la comunidad y a tomar decisiones rápidas y efectivas en situaciones de emergencia. Además, estudiar de manera online ha sido muy conveniente para mí y me ha permitido equilibrar mis responsabilidades académicas y personales. Inscríbete, te animo a que lo hagas, te sentirás satisfecho y realizado.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="testimonial blanco">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/orientacion-vocacional/mariana.png" class="img-fluid d-block mx-auto" alt="">
                        <p class="nombre-alumno mt-3 mb-0">Mariana Martínez López</p>
                        <p class="programa text-center">Licenciatura en Administración de Empresas</p>
                        <p class="testimonio">
                            Muy contenta con este programa ha sido muy útil y beneficioso. He adquirido un conjunto de habilidades y conocimientos que me han resultado muy prácticos en mi carrera profesional, como la capacidad de tomar decisiones estratégicas, gestionar equipos y liderar proyectos. Si estás considerando inscribirte, te recomiendo encarecidamente que lo hagas. Creo que te sorprenderá lo mucho que puedes aprender a distancia y crecer a través de esta universidad.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="presencia-internacional">
        <div class="container">
            <div class="row">
                <div class="col text-center mb-4">
                    <h1 class="titulo bandera">En IEXE Universidad tenemos presencia en:</h1>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col text-center">
                    <img class="img-fluid bandera" src="https://www.iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/img/banderas-internacional.webp" alt="Nuestra presencia en el mundo">
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part( 'template-parts/footer-landing'); ?>

      <style>
        .background{
            background: rgb(0, 119, 182);
            background: rgb(0, 180, 216);
            background: rgb(144, 224, 239);
            background: rgb(3, 4, 94);
            background: rgb(0, 24, 255);
        } 
      </style>
      
      
      
      
    <style> @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500&display=swap'); </style>
    <!-- <script src="assets/js/script-tov.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script> -->

<script>
new Chart(document.getElementById("chartjs-3"),
    {
        "type":"radar",
        "data":{
            "labels":
                ["Eating","Drinking","Sleeping","Designing","Coding","Cycling","Running"],
    "datasets":
    [
        {
            "label":"My First Dataset",
            "data":[65,59,90,81,56,55,40],
            "fill":true,
            "backgroundColor":"rgba(255, 99, 132, 0.2)",
            "borderColor":"rgb(255, 99, 132)",
            "pointBackgroundColor":"rgb(255, 99, 132)",
            "pointBorderColor":"#fff",
            "pointHoverBackgroundColor":"#fff",
            "pointHoverBorderColor":"rgb(255, 99, 132)"
        },
        {
            "label":"My Second Dataset","data":[28,48,40,19,96,27,100],
            "fill":true,"backgroundColor":"rgba(54, 162, 235, 0.2)",
            "borderColor":"rgb(54, 162, 235)",
            "pointBackgroundColor":"rgb(54, 162, 235)",
            "pointBorderColor":"#fff",
            "pointHoverBackgroundColor":"#fff",
            "pointHoverBorderColor":"rgb(54, 162, 235)"
        }
]
},
    "options":{
        "elements": 
        {
            "line": {
            "tension":0,"borderWidth":3
            }
        }
    }
});
</script>
</body>
</html>

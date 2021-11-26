<?php /* Template Name: Generacion */ ?>
<?php get_template_part( 'template-parts/header-generacion'); ?>
<?php // get_header( ); ?>

<?php
    $cagb_votos_1 = get_field( "candidato_1", 26136 );
    $cagb_votos_2 = get_field( "candidato_2", 26136 );
    $cagb_votos_3 = get_field( "candidato_3", 26136 );
    $cagb_votos_4 = get_field( "candidato_4", 26136 );
    $cagb_votos_5 = get_field( "candidato_5", 26136 );
    $cagb_votos_6 = get_field( "candidato_6", 26136 );
    $cagb_votos_7 = get_field( "candidato_7", 26136 );
    $votos_totales = $cagb_votos_1 + $cagb_votos_2 + $cagb_votos_3 + $cagb_votos_4 + $cagb_votos_5 + $cagb_votos_6 + $cagb_votos_7;

?>
<div class="container ">
    <div class="row">
        <div class="col-md-6 d-none d-md-block">
            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/generacion-2021.png" alt="" class="img-fluid" style="position: absolute;top: 21vw;left: 20%;">
            
        </div>
    </div>
</div>
<section id="descripcion-awards">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="final-conteo">
                <div id="conteo"></div>
                <p class="finalizacion-votacion">El cierre para el periodo de votación será el día 22 de Noviembre de 2021 a las 20:00hrs Horario del centro de México</p>
            </div>
            
                <p style="color: #FFF">“IEXE AWARDS” es un proyecto dirigido a nuestra comunidad estudiantil, en donde se elige a los representantes egresados de la generación mediante el voto abierto. Los nominados al premio AWARDS están divididos en 3 categorías: Desempeño Académico, Amigos Embajadores y Trayectoria Profesional.</p>
                <p class="es-el-secundario" style="color: #001E42">Este premio le brindará la oportunidad a la persona ganadora de seguir desarrollando nuevas competencias para aplicarlas en el progreso de su carrera profesional; pues será acreedora a una beca del 80% en cualquiera de nuestros programas académicos (diplomado, maestría o doctorado) y un apoyo del 60% para el proceso de titulación.</p>
            </div>
        </div>
    </div>
</section>
<?php if(!is_user_logged_in()) {?>
<section id="formulario-interes-landing">
    <div class="container">
        
        <form>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Regístrate para votar</h1>
                </div>
                <div class="col-md-12 mt-3">
                    <a class="enviar-landing" href="/registro-votacion/">Ir a Registro rápido</a>
                </div>
                
                
            
                    <!-- <div class="col-md-3">
                        <label for="nombre">Nombre*</label>
                        <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Ingresa aquí tu nombre">
                    </div>

                    <div class="col-md-3">
                        <label for="correo">Correo electrónico*</label>
                        <input id="correo" name="correo" type="email" class="form-control" placeholder="Ingresa aquí tu correo">
                          <input type="hidden" id="programa" name="programa" value="lsp">
                    </div>
                
                    <div class="col-md-3">
                        <label for="telefono">Teléfono o celular*</label>
                        <input type="text" id="telefono" class="form-control" placeholder="Ingresa aquí tu número">
                    </div>
                    <div class="col-md-3">
                        <label class="invisible" for="enviar">espaciador</label>
                        <button type="button" class="enviar-landing">Enviar Voto</button>
                    </div>   -->
            </div>
            
        </form>
    </div>
    
</section>
<?php } ?>
<section id="area-votacion">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="categoria-nominacion">Desempeño Académico</h1>
                <h2 class="descripcion-nominacion">Nominados por la facultad de la universidad, gracias a su esfuerzo estudiantil.</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 text-center">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/generacion/javier-martinez.png" alt="" class="imagen-candidato">
                <h3 class="nombre-candidato">Javier Martínez Morales</h3>
                <h4 class="carrera-de">Doctorado en Políticas Públicas</h4>
                <p class="descripcion-nominacion">Por haber presentado una labor de investigación de tesis sobresaliente.</p>
                <p class="porcentaje-votacion"><?php echo round( $cagb_votos_1*100/$votos_totales,2) ?></p>
                <button class="boton-votar voto-1" type="button" role="button">Votar</button>
            </div>
            <div class="col-md-3 text-center">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/generacion/juan-carlos.png" alt="" class="imagen-candidato">
                <h3 class="nombre-candidato">Juan Carlos Aguirre García</h3>
                <h4 class="carrera-de">Maestría en Evaluación de Políticas Públicas</h4>
                <p class="descripcion-nominacion">Por mantener un promedio sobresaliente durante todo su programa académico y la mención <i>Summa Cum Laude.</i></p>
                <p class="porcentaje-votacion"><?php echo round( $cagb_votos_2*100/$votos_totales,2) ?></p>
                <button class="boton-votar voto-2" type="button" role="button">Votar</button>
            </div>
            <div class="col-md-3 text-center">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/generacion/cecilia-tremonisha.png" alt="" class="imagen-candidato">
                <h3 class="nombre-candidato">Cecilia Treemonisha Barros Ruiz</h3>
                <h4 class="carrera-de">Maestría en Administración de Políticas Públicas</h4>
                <p class="descripcion-nominacion">Por mantener un promedio sobresaliente durante todo su programa académico y la mención <i>Summa Cum Laude.</i></p>
                <p class="porcentaje-votacion"><?php echo round( $cagb_votos_3*100/$votos_totales,2) ?></p>
                <button class="boton-votar voto-3" type="button" role="button">Votar</button>
                 
            </div>
            <div class="col-md-3 text-center">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/generacion/diana-deubner.png" alt="" class="imagen-candidato">
                <h3 class="nombre-candidato">Diana Deubner Valenzuela</h3>
                <h4 class="carrera-de">Licenciatura en Administración de Empresas</h4>
                <p class="descripcion-nominacion">Por obtener el mejor promedio de su generación en licenciaturas y la mención <i>Summa Cum Laude.</i></p>
                <p class="porcentaje-votacion"><?php echo round( $cagb_votos_4*100/$votos_totales,2) ?></p>
                <button class="boton-votar voto-4" type="button" role="button">Votar</button>
            </div>
        </div>
    </div>
</section>
<section id="area-votacion">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
            <!-- <button class="my_button voto-1" type="button" role="button">Voto 1</button>
            <button class="my_button voto-2" type="button" role="button">Voto 2</button>
            <button class="my_button voto-3" type="button" role="button">Voto 3</button> -->
                <h1 class="categoria-nominacion">EMBAJADORES IEXE</h1>
                <h2 class="descripcion-nominacion">Nominados por ser portavoces de la universidad en las instituciones donde laboran.</h2>
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/generacion/isabel_guadarrama.png" alt="" class="imagen-candidato">
                        <h3 class="nombre-candidato">Isabel Guadarrama Bustamante</h3>
                        <h4 class="carrera-de">Maestría en Seguridad Pública</h4>
                        <p class="cargo-actual"></p>
                        <p class="descripcion-nominacion">Por llevar la filosofía de IEXE Universidad a su labor profesional en el Instituto Morelense de Procesos Electorales y Participación Ciudadana.</p>
                        <p class="porcentaje-votacion"><?php echo round( $cagb_votos_5*100/$votos_totales,2) ?></p>
                        <button class="boton-votar voto-5" type="button" role="button">Votar</button>
                        
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/generacion/ana-luz.png" alt="" class="imagen-candidato">
                        <h3 class="nombre-candidato">Ana Luz Jiménez Márquez</h3>
                        <h4 class="carrera-de">Maestría en Evaluación de Políticas Públicas</h4>
                        <p class="cargo-actual"></p>
                        <p class="descripcion-nominacion">Por llevar la filosofía de IEXE Universidad a su labor profesional en la Auditoría Superior del Estado de Guanajuato.</p>
                        <p class="porcentaje-votacion"><?php echo round( $cagb_votos_6*100/$votos_totales,2) ?></p>
                        <button class="boton-votar voto-6" type="button" role="button">Votar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <h1 class="categoria-nominacion">TRAYECTORIA PROFESIONAL</h1>
                <h2 class="descripcion-nominacion">Nominados por sus labores y desempeño en el ámbito profesional.</h2>
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/generacion/marcela-munoz.png" alt="" class="imagen-candidato">
                        <h3 class="nombre-candidato">Marcela Muñoz Martínez</h3>
                        <h4 class="carrera-de">Maestría en Seguridad Pública</h4>
                        <p class="cargo-actual">Secretaria de Seguridad Pública del Estado de Campeche</p>
                        <p class="descripcion-nominacion">Se ha desempeñado exitosamente en el servicio público por más de una década.</p>
                        <p class="porcentaje-votacion"><?php echo round( $cagb_votos_7*100/$votos_totales,2) ?></p>
                        <button class="boton-votar voto-7" type="button" role="button">Votar</button>
                         
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section id="ganador-anterior">
    <div class="container" id="bloque-ganador">
        <div class="row">
            <div class="col-md-6">
                <img style="margin-left: 120px; margin-top:50px;" src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/ulises-ganador.webp" alt="">
                <span class="descripcion-de">Ganador al premio</span>
                <span class="del-galardon">"Representante de la generación 2021”</span>
            </div>
            <div class="col-md-6">
                <h1 class="programa">MAESTRÍA EN ADMINISTRACIÓN Y POLÍTICAS PÚBLICAS</h1>
                <h2 class="nombre-ganador">Mtro. Ulises González Garduño</h2>
                <p class="su-discurso">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
                <div class="comparte">
                    <img src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/iconos-de-compartir.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section> -->
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <p class="condiciones-voto">Vota del 16 al 22 de noviembre con toda la comunidad IEXE para elegir al alumno de la generación.</p>
            <p class="condiciones-voto-2">El ganador será anunciado el 4 de diciembre en la ceremonia de graduación.</p>
         
        </div>
    </div>
</div>
<script>

    jQuery(".boton-votar.voto-1").click(function(){
    jQuery.get(ajaxurl,{'action': 'sayhello' , val : '1'}, 
    function (msg) {
         //alert(msg);
         if(!alert(msg)){window.location.reload();}
        });
    });
    jQuery(".boton-votar.voto-2").click(function(){
    jQuery.get(ajaxurl,{'action': 'sayhello' , val : '2'}, 
    function (msg) { if(!alert(msg)){window.location.reload();}});
    });
    jQuery(".boton-votar.voto-3").click(function(){
    jQuery.get(ajaxurl,{'action': 'sayhello' , val : '3'}, 
    function (msg) {if(!alert(msg)){window.location.reload();}});
    });
    jQuery(".boton-votar.voto-4").click(function(){
    jQuery.get(ajaxurl,{'action': 'sayhello' , val : '4'}, 
    function (msg) {if(!alert(msg)){window.location.reload();}});
    });
    jQuery(".boton-votar.voto-5").click(function(){
    jQuery.get(ajaxurl,{'action': 'sayhello' , val : '5'}, 
    function (msg) {if(!alert(msg)){window.location.reload();}});
    });
    jQuery(".boton-votar.voto-6").click(function(){
    jQuery.get(ajaxurl,{'action': 'sayhello' , val : '6'}, 
    function (msg) {if(!alert(msg)){window.location.reload();}});
    });
    jQuery(".boton-votar.voto-7").click(function(){
    jQuery.get(ajaxurl,{'action': 'sayhello' , val : '7'}, 
    function (msg) {if(!alert(msg)){window.location.reload();}});
    });

</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Georama:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
<style>
body#nominaciones {
    background: #D4E4F9;
    background-image: url(https://generacion.iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/img/graduacion-bg.webp);
    background-size: contain;
    background-repeat: no-repeat;
}
section#descripcion-awards {
    margin-top: 40%;
}
@media only screen and (max-width: 800px) {
  body#nominaciones {
    background-image: url(https://generacion.iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/img/graduacion-bg-movil.webp);
    background-size: contain;
    background-repeat: no-repeat;
  }
  section#descripcion-awards {
    margin-top: 90%;
    }
    #descripcion-awards p {
    font-size: 18px;
    padding: 0px 10px;
}

}
h1.categoria-nominacion {
    font-family: 'Georama';
    font-size: 36px;
    font-weight: 700;
    color: #001E42;
    letter-spacing: 0.54px;
    text-transform: uppercase;
}
h2.descripcion-nominacion {
    font-size: 16px;
    text-align: center;
    color: #001E42;
    height: 20px;
}
#descripcion-awards p {
    font-size: 21px;
}
section#formulario-interes-landing {
    background: var(--primario--azul-obscuro);
    padding: 12px 0px 51px;
}
#formulario-interes-landing h1 {
    font-weight: 300;
    letter-spacing: 0.86px;
    color: #FFF;
    font-family: 'Georama';
}
#formulario-interes-landing label {
    color: cyan;
}
.enviar-landing {
    background: linear-gradient( 
90deg, rgba(37,51,244,1) 0%, rgba(136,119,242,1) 100%);
    color: #FFF;
    font-weight: 600;
    border: none;
    border-radius: 25px;
    padding: 7px 55px;
    font-size: 18px;
    display: block;
    margin: 0 auto;
    width: 295px;
    text-aling: center;
}
button.enviar-landing {
    background: linear-gradient( 
90deg, rgba(37,51,244,1) 0%, rgba(136,119,242,1) 100%);
    color: #FFF;
    font-weight: 600;
    border: none;
    border-radius: 25px;
    padding: 7px 55px;
    font-size: 18px;
    text-aling: center;
}

a.enviar-landing:hover {
    text-decoration: none;
    color: blue;
    /* text-align: center; */
}
h3.nombre-candidato {
    font-size: 16px;
    font-weight: 600;
    text-align: center;
}
h4.carrera-de {
    font-weight: 300;
    font-size: 14px;
    text-align: center;
}
a.boton-votar {
    text-align: center;
    display: block;
    background: #001e42;
    width: 120px;
    margin: 0 auto;
    border-radius: 38px;
    padding: 2px;
    color: cyan;
    text-transform: uppercase;
    font-weight: 800;
    box-shadow: 0px 9px 6px #0c22f526;
}
.boton-votar {
    text-align: center;
    display: block;
    background: #001e42;
    width: 120px;
    margin: 0 auto;
    border-radius: 38px;
    padding: 2px;
    color: cyan;
    text-transform: uppercase;
    font-weight: 800;
    box-shadow: 0px 9px 6px #0c22f526;
    border: none;
    display: none;
}
.boton-votar:hover {
    color: #001e42;
    background: cyan;
}
#bloque-ganador {
    background: #FFF;
    border-radius: 15px;
    box-shadow: 8px 16px 32px #001c3a1f;
    padding: 0px 96px 81px 9px;
}
h2.nombre-ganador {
    font-family: 'Georama';
    font-size: 30px;
    color: var(--primario-azul);
    font-weight: 700;
}
p.su-discurso {
    color: #707070;
    font-size: 20px;
    line-height: 27px;
}
span.del-galardon {
    display: block;
    text-align: center;
    font-family: 'Georama';
    color: var(--primario-azul);
    font-size: 21px;
    font-weight: 200;
}
span.descripcion-de {
    font-size: 21px;
    color: var(--primario-azul);
    text-align: center;
    display: block;
    font-weight: 600;
    font-family: 'Georama';
}
button.enviar-landing {
    background: linear-gradient(
90deg, rgba(37,51,244,1) 0%, rgba(136,119,242,1) 100%);
    color: #FFF;
    font-weight: 600;
    border: none;
    border-radius: 25px;
    padding: 7px 55px;
    font-size: 18px;
}
p.descripcion-nominacion {
    text-align: center;
    min-height: 108px;
}
h4.carrera-de {
    min-height: 30px;
}

#ganador-anterior h1.programa {
    font-family: 'Georama';
    color: var(--primario--azul-obscuro);
    font-size: 34px;
    font-weight: 700;
    letter-spacing: -1px;
    padding-top: 51px;
}
p.porcentaje-votacion:after {
    content: " %";
}
p.porcentaje-votacion {
    text-align: center;
    font-weight: 600;
    display:none;
}
p.cargo-actual {
    height: 30px;
    font-weight: 700;
}
p.condiciones-voto {
    text-align: center;
    color: #001e42;
    font-size: 21px;
    font-weight: 500;
}
p.condiciones-voto-2 {
    font-weight: 700;
    font-size: 21px;
    text-align: center;
    color: #001e42;
}
p.finalizacion-votacion {
    color: var(--primario--azul-obscuro);
    font-size: 13px!important;
    text-align: center;
}
.conteo{
    text-align: center;
}
div#conteo {
    text-align: center;
    font-size: 32px;
    color: var(--primario--azul-obscuro);
}
.final-conteo {
    background: var(--primario-cyan);
    padding: 10px;
    margin: 0 auto 16px auto;
    width: 560px

}
@media only screen and (max-width: 800px) {
  body#nominaciones {
    background-image: url(https://generacion.iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/img/graduacion-bg-movil.webp);
    background-size: contain;
    background-repeat: no-repeat;
  }
  section#descripcion-awards {
    margin-top: 93%;
    }
    #descripcion-awards p {
    font-size: 18px;
    padding: 0px 10px;
    }
    #descripcion-awards p.es-el-secundario {
    padding-top: 90px;
}
    
}
</style>
<script>
// Set the date we're counting down to
var countDownDate = new Date("Nov 22, 2021 20:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  seconds = minTwoDigits(seconds);
  hours = minTwoDigits(hours);
  
  document.getElementById("conteo").innerHTML = hours + "h : "
  + minutes + "m : " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("conteo").innerHTML = "FINALIZADO";
  }
}, 1000);
function minTwoDigits(n) {
  return (n < 10 ? '0' : '') + n;
}
</script>
<?php get_footer(); ?>
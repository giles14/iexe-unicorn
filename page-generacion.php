<?php /* Template Name: Generacion */ ?>
<!-- <?php // get_template_part( 'template-parts/header-landing'); ?> -->
<?php get_header( ); ?>
<section id="descripcion-awards">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p style="color: #FFF">“IEXE AWARDS” es un proyecto dirigido a nuestra comunidad académica, en donde se buscan a los representantes egresados de la generación mediante el voto abierto. Los nominados al premio AWARDS de nuestros nominados, están divididos en 3 categorías: desempeño académico, amigos embajadores y trayectoria profesional. </p>
                <p style="color: #001E42">Éste premio le brindará la oportunidad a la persona ganadora de seguir desarrollando nuevas competencias, para aplicarlas en la construcción de su carrera profesional. Por lo que la persona ganadora, será acreedora de una beca del 80% en cualquiera de nuestros programas (diplomado, maestría o doctorado) y un apoyo del 60% para el proceso de titulación.</p>
            </div>
        </div>
    </div>
</section>
<section id="formulario-interes-landing">
    <div class="container">
        
        <form>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Regístrate para votar</h1>
                </div>
            
                    <div class="col-md-4">
                        <label for="nombre">Nombre*</label>
                        <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Ingresa aquí tu nombre">
                    </div>

                    <div class="col-md-4">
                        <label for="correo">Correo electrónico*</label>
                        <input id="correo" name="correo" type="email" class="form-control" placeholder="Ingresa aquí tu correo">
                          <input type="hidden" id="programa" name="programa" value="lsp">
                    </div>
                
                    <div class="col-md-4">
                        <label for="telefono">Teléfono o celular*</label>
                        <input type="text" id="telefono" class="form-control" placeholder="Ingresa aquí tu número">
                    </div>                
            </div>
            <button type="button" class="enviar-landing">Enviar Voto</button>
        </form>
    </div>
    
</section>
<section id="area-votacion">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="categoria-nominacion">Desempeño Académico</h1>
                <h2 class="descripcion-nominacion">Nominados por la facultad de la universidad, gracias a su esfuerzo estudiantil.</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/foto-participante.png" alt="" class="imagen-candidato">
                <h3 class="nombre-candidato">Juan Alberto Mendoza Delmonte</h3>
                <h4 class="carrera-de">Licenciatura en Ciencias Políticas y Administración Pública</h4>
                <a href="" class="boton-votar">Votar</a>
            </div>
            <div class="col-md-3">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/foto-participante.png" alt="" class="imagen-candidato">
                <h3 class="nombre-candidato">Juan Alberto Mendoza Delmonte</h3>
                <h4 class="carrera-de">Licenciatura en Ciencias Políticas y Administración Pública</h4>
                <a href="" class="boton-votar">Votar</a>
            </div>
            <div class="col-md-3">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/foto-participante.png" alt="" class="imagen-candidato">
                <h3 class="nombre-candidato">Juan Alberto Mendoza Delmonte</h3>
                <h4 class="carrera-de">Licenciatura en Ciencias Políticas y Administración Pública</h4>
                <a href="" class="boton-votar">Votar</a>
            </div>
            <div class="col-md-3">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/foto-participante.png" alt="" class="imagen-candidato">
                <h3 class="nombre-candidato">Juan Alberto Mendoza Delmonte</h3>
                <h4 class="carrera-de">Licenciatura en Ciencias Políticas y Administración Pública</h4>
                <a href="" class="boton-votar">Votar</a>
            </div>
        </div>
    </div>
</section>
<section id="area-votacion">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="categoria-nominacion">EMBAJADORES IEXE</h1>
                <h2 class="descripcion-nominacion">Nominados por ser portavoces de la universidad en las instituciones donde laboran.</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/foto-participante.png" alt="" class="imagen-candidato">
                <h3 class="nombre-candidato">Juan Alberto Mendoza Delmonte</h3>
                <h4 class="carrera-de">Licenciatura en Ciencias Políticas y Administración Pública</h4>
                <a href="" class="boton-votar">Votar</a>
            </div>
            <div class="col-md-3 offset-md-1">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/foto-participante.png" alt="" class="imagen-candidato">
                <h3 class="nombre-candidato">Juan Alberto Mendoza Delmonte</h3>
                <h4 class="carrera-de">Licenciatura en Ciencias Políticas y Administración Pública</h4>
                <a href="" class="boton-votar">Votar</a>
            </div>
            <div class="col-md-3 offset-md-1">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/foto-participante.png" alt="" class="imagen-candidato">
                <h3 class="nombre-candidato">Juan Alberto Mendoza Delmonte</h3>
                <h4 class="carrera-de">Licenciatura en Ciencias Políticas y Administración Pública</h4>
                <a href="" class="boton-votar">Votar</a>
            </div>
        </div>
    </div>
</section>
<section id="area-votacion">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="categoria-nominacion">TRAYECTORIA PROFESIONAL</h1>
                <h2 class="descripcion-nominacion">Nominados por sus labores y desempeño en el ámbito profesional.</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/foto-participante.png" alt="" class="imagen-candidato">
                <h3 class="nombre-candidato">Juan Alberto Mendoza Delmonte</h3>
                <h4 class="carrera-de">Licenciatura en Ciencias Políticas y Administración Pública</h4>
                <a href="" class="boton-votar">Votar</a>
            </div>
            <div class="col-md-3 offset-md-1">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/foto-participante.png" alt="" class="imagen-candidato">
                <h3 class="nombre-candidato">Juan Alberto Mendoza Delmonte</h3>
                <h4 class="carrera-de">Licenciatura en Ciencias Políticas y Administración Pública</h4>
                <a href="" class="boton-votar">Votar</a>
            </div>
            <div class="col-md-3 offset-md-1">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/foto-participante.png" alt="" class="imagen-candidato">
                <h3 class="nombre-candidato">Juan Alberto Mendoza Delmonte</h3>
                <h4 class="carrera-de">Licenciatura en Ciencias Políticas y Administración Pública</h4>
                <a href="" class="boton-votar">Votar</a>
            </div>
        </div>
    </div>
</section>
<section id="ganador-anterior">
    <div class="container" id="bloque-ganador">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ulises-ganador.webp" alt="">
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
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/iconos-de-compartir.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
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
    margin-top: 45%;
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
#ganador-anterior h1.programa {
    font-family: 'Georama';
    color: var(--primario--azul-obscuro);
    font-size: 34px;
    font-weight: 700;
    letter-spacing: -1px;
    padding-top: 51px;
}

</style>
<?php get_footer(); ?>
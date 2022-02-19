<?php /* Template Name: Landing modelo 1 */ ?>
<?php 
$image_principal = get_field('imagen_de_programa');
$file = get_field('informacion_descargable');
setlocale(LC_ALL,"es_ES");
$bg_image = "https://iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/img/landing-ssp.webp";
switch(get_field('tipo_de_programa')) {
    case "licenciatura":
        $bg_image = "https://iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/img/landing-ssp.webp";
        break;
    case "Maestría en línea":
        $bg_image = "https://iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/img/landing-maestrias.webp";
        break;
    case "doctorado":
        $bg_image = "";
        break;
}

//echo strftime("%A %d de %B del %Y",  strtotime("first monday of next month"));
?>
<?php get_template_part( 'template-parts/header-landing'); ?>
<style>
    body {
    background: url(<?php echo $bg_image ?>) 0% 0% / contain no-repeat rgb(239, 239, 239);
    background-size: contain;
    background-repeat: no-repeat;
    }
    @media only screen and (max-width: 900px){}
        body {
            background-size: inherit;
        }
}
</style>
<section id="informacion-general">
<div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <span class="descripcion"><?php the_field('tipo_de_programa'); ?></span>
                <h1 class="nombre-programa"><?php the_title();  ?></h1>
                <h2 class="frase-heroica"><?php the_field('frase_heroica'); ?></h2>
                <p class="descripcipn-programa">
                    <?php the_field('descripcion_de_programa'); ?>
                </p>
                <!-- <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <a href="<?php // echo ($file) ?  $file['url']  : "#"?>" target="_blank"><div class="bloque-descarga">
                            <p>Descarga el folleto <br>del programa</p><img class="icono-descargar" src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/icono_descargar_IEXE.webp" alt="">
                        </div></a>
                    </div>
                    <div class="col-md-8">
                        <!-- <img src="" alt="" class="certificado-unitar"><a href=""><img src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/icono_descargar_IEXE.webp" alt=""></a>
                    </div>
                </div> -->
                
            </div>
            <div class="col-md-5 d-none d-lg-block">
                <?php if( !empty( $image_principal ) ): ?>
                    <img src="<?php echo esc_url($image_principal['url']); ?>" alt="<?php echo esc_attr($image_principal['alt']); ?>" style="width: 550px" class="escudo-licenciatura"/>
                <?php endif; ?>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-sm-3">
                <div class="bloque-puntos-clave">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icono_horario_IEXE.webp" alt="" class="icono">
                    <h3 class="keypoint">Duración del programa</h3>
                    <span class="informacion-secundaria"><?php the_field('duracion'); ?></span>
                </div>
            </div>
            <div class="col-lg-2 col-sm-3">
                <div class="bloque-puntos-clave">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icono_Fecha_IEXE.webp" alt="" class="icono">
                    <h3 class="keypoint">Fechas de inicio</h3>
                    <span class="informacion-secundaria">01 de Marzo<?php // echo strftime("%A %d de %B del %Y",  strtotime("first monday of next month")); ?></span>
                </div>
            </div>
            <div class="col-lg-2 col-sm-3">
                <div class="bloque-puntos-clave">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icono_certificado_IEXE.webp" alt="" class="icono">
                    <h3 class="keypoint">Validez Oficial</h3>
                    <span class="informacion-secundaria en-rvoe">RVOE <br><?php the_field('rvoe'); ?></span>
                </div>
            </div>
            <div class="col-lg-2 col-sm-3">
                <div class="bloque-puntos-clave">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icono_Pragma_IEXE.webp" alt="" class="icono">
                    <h3 class="keypoint">Modelo Educativo</h3>
                    <span class="informacion-secundaria">Pragmaflex: </span><span class="en-pragmaflex">Cursa una materia la vez</span><p ></p>
                    
                </div>
            </div>
        </div>

    </div>

</section>
<section id="formulario-interes-landing">
    <div class="container">
        
        <form>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">¿Estás interesado en nuestro programa?</h1>
                </div>
            
                    <div class="col-md-4">
                        <label for="nombre">Nombre*</label>
                        <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Ingresa aquí tu nombre">
                    </div>

                    <div class="col-md-4">
                        <label for="correo">Correo electrónico*</label>
                        <input id="correo" name="correo" type="email" class="form-control" placeholder="Ingresa aquí tu correo">
                          <input type="hidden" id="programa" name="programa" value="<?php the_field("clave_programa") ?>">
                    </div>
                
                    <div class="col-md-4">
                        <label for="telefono">Teléfono o celular*</label>
                        <input type="text" id="telefono" class="form-control" placeholder="Ingresa aquí tu número">
                    </div>                
            </div>
            <button type="button" class="enviar-landing">Enviar registro</button>
        </form>
    </div>
    
</section>
<section id="por-que-elegir">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="podras">Podrás trabajar en:</h2>
                    <?php the_field('podras_trabajar') ?>
                </ul>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-md-3">
                <img src="" alt="" class="el-icono">
                <p class="texto-porque"><strong>Usa el tiempo a tu favor:</strong> <br> Concluye tu licenciatura en 3 años o maestría en 16 meses.</p>
            </div>
            <div class="col-md-3">
                <img src="" alt="" class="el-icono">
                <p class="texto-porque"><strong>Plataforma digital</strong><br> Concluye tu licenciatura en 3 años o maestría en 16 meses.</p>
            </div>
            <div class="col-md-3">
                <img src="" alt="" class="el-icono">
                <p class="texto-porque"><strong>Becas y beneficios:</strong><br>Becas y apoyos sin condiciones para tus estudios.</p>
            </div>
            <div class="col-md-3">
                <img src="" alt="" class="el-icono">
                <p class="texto-porque"><strong>Garantía de continuidad de estudios:</strong><br> infraestructura de vanguardia para garantizar la continuidad de tus estudios antes cualquier circunstancia.</p>
            </div>
        </div> -->
    </div>
</section>
<section id="el-por-que">
    <div class="container">
    <div class="row">
            <div class="col-md-12">
                <h1 class="text-center el-porque"><span class="pregunta-sin-enfasis">¿Por qué elegir</span> IEXE Universidad?</h1>
                <!-- <p class="texto-por-que text-center">La misión de IEXE universidad es y seguirá siendo ayudar a nuestros alumnos a crear<br> <strong>valor público</strong>, a través de la enseñanza de herramientas prácticas y modelos para la<br> <strong>toma de decisiones</strong> mediante una <strong>plataforma disponible las 24 horas del día.</strong></p> -->
            </div>
    </div>
    <div class="row">
        <div class="col-md-3 del-por-que">
            <img style="margin-bottom: 16px;" class="text-center img-fluid iconos" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/plataforma_IEXE.webp" alt="">
            <p>Plataforma disponible las <strong>24 horas del día, los 7 días</strong> de la semana.</p>
        </div>
        <div class="col-md-3 del-por-que">
            <img class="text-center img-fluid iconos" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/docentes_IEXE.webp" alt="">
            <p>Aprende de docentes con <strong>experiencia laboral relevante</strong> en su área de conocimiento.</p>
        </div>
        <div class="col-md-3 del-por-que">
            <img class="text-center img-fluid iconos" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/atencion_IEXE.webp" alt="">
            <p>Recibe <strong>atención personalizada</strong> de docentes, atención a alumnos, servicios escolares y soporte técnico.</p>
        </div>
    </div>
    </div>  
</section>
<?php if(is_page(18989)){
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center relacionados">Programas relacionados</h1>
            </div>
            <div class="row">
                <div class="col-md-3 offset-md-1 col-12 text-center text-sm-left">
                    <h2 class="sigla-programa">MSP</h2>
                    <h3 class="nombre">Maestría en <br> Seguridad Pública</h3>
                    <a href="/oferta-educativa" class="tipo-boton">¡Descúbrelo!</a>
                </div>
                <div class="col-md-2">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/escudo_MSP.webp" alt="" class="img-fluid d-none d-sm-block">
                </div>
                <div class="col-md-3 offset-md-1 col-12 text-center text-sm-left mt-3">
                    <h2 class="sigla-programa">DPP</h2>
                    <h3 class="nombre">Doctorado en<br> Políticas Públicas</h3>
                    <a href="/oferta-educativa" class="tipo-boton">¡Descúbrelo!</a>
                </div>
                <div class="col-md-2">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/escudo_DPP.webp" alt="" class="img-fluid d-none d-sm-block">
                </div>
                
            </div>
        </div>
    </div>
</section>
<?php
}else{
     get_template_part( 'template-parts/landing-relacionados');
}
 ?>



    
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/formulario.js"></script>
<?php get_template_part( 'template-parts/footer-landing'); ?>
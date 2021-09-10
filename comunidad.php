<?php /* Template Name: Comunidad */ ?>
<?php get_header( ); ?>
<section id="seleccion-categoria" class="buffer-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="titulo">Galardón Generación 2021</h1>
                <h2 class="description">Nuestros finalistas elegidos por la comunidad edicion 2021</h2>
            </div>
            <div class="col-md-3">
            </div>

            <div class="col-md-3">
                <div class="buscar"><input id="busqueda-blog" type="text" placeholder="Buscar"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="categoria-img">
                    <img class="generacion" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ulises-garduno.jpg" alt="">
                    <h2 class="nombre">Ulises González Garduño</h2>
                    <p class="nombre-progamna">Maestría en Finanzas Públicas</p>
                    
                </div>
            </div>
            <div class="col-md-3">
                <div class="categoria-img ">
                <img class="generacion" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/yovani-molina.jpg" alt="">
                    <h2 class="nombre">Mauricio Yovani Molina Medina</h2>
                    <p class="nombre-progamna">Maestría en Seguridad Pública y Políticas Públicas</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="categoria-img">
                    <img class="generacion" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/cecilia-oliva.jpg" alt="">
                    <h2 class="nombre">Cecilia Nohemi Olivia Juárez</h2>
                    <p class="nombre-progamna">Maestría en Evaluación de Políticas Públcias</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="categoria-img">
                    <img class="generacion" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/alejandro-gallardo.jpg" alt="">
                    <h2 class="nombre">Alejandro A. Gallardo</h2>
                    <p class="nombre-progamna">Maestría en Administración de Negocios</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="interes">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="titulo">¿Quieres ser parte de nuestra comunidad?</h1>
                </div>
            </div>
            <div class="row buffer-25">
                <div class="col-md-6">
                        <img class="img-fluid escudo" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/escudo_comunidad.webp" alt="">
                </div>
                <div class="fondo-x">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/x.png" alt="">
                </div>
                <div class="col-md-5">
                    <p class="interes-programa">Queremos que formes parte de nuestros embajadores. <br> Sigue estos sencillos pasos para iniciar tu proceso de ingreso a nuestra comunidad </p>
                    <form id="contacto">
                        <div class="form-group">
                          <label for="nombre">Nombre completo*</label>
                          <input type="text" placeholder="Ingresa aquí tu nombre" class="form-control" id="nombre" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo electrónico*</label>
                            <input type="email" placeholder="Ingresa aquí tu correo electrónico" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono o celular*</label>
                            <input type="tel" placeholder="Ingresa aquí tu número telefónico" class="form-control" id="telefono" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="interes">Programa académico de interés</label>
                            <select class="form-control" id="programa-interes" name="select">
                                <option value="value1" selected>Seleccionar programa</option>
                                <option value="value2">Value 2</option>
                                <option value="value3">Value 3</option>
                            </select>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primario mt-3">Enviar registro</button>
                        </div>
                      </form>

                </div>
            </div>
        </div>
    </section>
<section id="banner-libro">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="/producto/diseno-de-politicas-publicas/"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/banner_bestseller-politicas-publicas.webp" alt=""></a>
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/comunidad'); ?>
<section id="comunidad-internacional">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/banner_comunidad_internacional.webp" alt="Banner comunidad Internacional"></a>
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/vinculos'); ?>
<?php get_footer(); ?>
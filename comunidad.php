<?php /* Template Name: Comunidad */ ?>
<?php get_header( ); ?>
<section id="comunicados">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="titulo">Comunicados...</h1>
                <h2 class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/imagen-noticia.png" alt="">
            </div>
            <div class="col-md-9">
                <div class="aviso">
                    <span class="tipo">AVISO</span>
                    <div class="fecha">3 de Octubre del 2021</div>
                    <div class="titulo-aviso">
                        <h3>Encabezado principal o aviso relevante a la comunidad máximo de dos renglones y cortar texto…</h3>
                    </div>
                    <div class="descripcion-aviso">
                        <p>Quiere la boca exhausta vid, kiwi, piña y fugaz jamón. Fabio me exige, sin tapujos, que añada cerveza al whisky. Jovencillo emponzoñado de whisky, ¡qué figurota.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/imagen-noticia.png" alt="">
            </div>
            <div class="col-md-9">
                <div class="aviso">
                    <span class="tipo">NOTICIA</span>
                    <div class="fecha">3 de Octubre del 2021</div>
                    <div class="titulo-aviso">
                        <h3>Encabezado principal o aviso relevante a la comunidad máximo de dos renglones y cortar texto…</h3>
                    </div>
                    <div class="descripcion-aviso">
                        <p>Quiere la boca exhausta vid, kiwi, piña y fugaz jamón. Fabio me exige, sin tapujos, que añada cerveza al whisky. Jovencillo emponzoñado de whisky, ¡qué figurota.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/imagen-noticia.png" alt="">
            </div>
            <div class="col-md-9">
                <div class="aviso">
                    <span class="tipo">EVENTO</span>
                    <div class="fecha">3 de Octubre del 2021</div>
                    <div class="titulo-aviso">
                        <h3>Encabezado principal o aviso relevante a la comunidad máximo de dos renglones y cortar texto…</h3>
                    </div>
                    <div class="descripcion-aviso">
                        <p>Quiere la boca exhausta vid, kiwi, piña y fugaz jamón. Fabio me exige, sin tapujos, que añada cerveza al whisky. Jovencillo emponzoñado de whisky, ¡qué figurota.</p>
                    </div>
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
    <section id="podcast">
        <div class="container podcast">
            <div class="row">
                <div class="col-md-3">
                    <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/imagen-de-podcast.webp" alt="imágen de podcast">
                    <h2 class="titulo-podcast">El valor de X</h2>
                    <span class="tipo-de">Podcast</span>
                    <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/barra-progreso.svg" alt="">
                    <div class="controles-audio">
                        
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="container">   
                        <div class="row">
                            <div class="col-md-3">
                                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/miniatura-podcast.png" alt="">
                            </div>
                            <div class="col-md-9">
                                <h3 class="titulo-podcast">Podcast Uno: <strong>El valor de X</strong></h3>
                                <p class="descripcion-podcast">
                                    Someday is not a fucking day of the week. Whatever can be captured in words can be conquered with understanding. Defy fucking convention. If you don’t test your will against the dissent of the world, it can never grow stronger.
                                    <div class="links-podcast">
                                        <a href="">Ir a Spotify</a>
                                        <a href="">Ir a Youtube</a>
                                    </div>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/miniatura-podcast.png" alt="">
                            </div>
                            <div class="col-9">
                                <h3 class="titulo-podcast">Podcast Uno: <strong>El valor de X</strong></h3>
                                <p class="descripcion-podcast">
                                    Someday is not a fucking day of the week. Whatever can be captured in words can be conquered with understanding. Defy fucking convention. If you don’t test your will against the dissent of the world, it can never grow stronger.
                                    <div class="links-podcast">
                                        <a href="">Ir a Spotify</a>
                                        <a href="">Ir a Youtube</a>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
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
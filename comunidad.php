<?php /* Template Name: Comunidad */ ?>
<?php get_header( ); ?>
<section id="comunicados">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="titulo">¡Ponte al día!</h1>
                <h2 class="description">Estos son los comunicados más relevantes para toda la comunidad</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 d-none d-sm-block">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/de-comunidad-3.webp" alt="">
            </div>
            <div class="col-md-9">
                <div class="aviso">
                    <span class="tipo">AVISO</span>
                    <div class="fecha">7 de Octubre del 2021</div>
                    <div class="titulo-aviso">
                        <h3>¡Bienvenida Generación octubre 2021!</h3>
                    </div>
                    <div class="descripcion-aviso">
                        <p>Esperamos que tengan una excelente experiencia y aprovechen al máximo todas las herramientas que les brindamos por medio de la plataforma</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-none d-sm-block">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/de-comunidad-2.webp" alt="">
            </div>
            <div class="col-md-9">
                <div class="aviso">
                    <span class="tipo">EVENTO</span>
                    <div class="fecha">7 de Octubre del 2021</div>
                    <div class="titulo-aviso">
                        <h3>Masterclass de octubre</h3>
                    </div>
                    <div class="descripcion-aviso">
                        <p>Te esperamos en la semana de Masterclass del mes de Octubre. Recuerda agendar del 25 al 29 de Octubre. ¡No te la puedes perder!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-none d-sm-block">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/de-comunidad-1.webp" alt="">
            </div>
            <div class="col-md-9">
                <div class="aviso">
                    <span class="tipo">NOTICIA</span>
                    <div class="fecha">3 de Octubre del 2021</div>
                    <div class="titulo-aviso">
                        <h3>Pragmaflex</h3>
                    </div>
                    <div class="descripcion-aviso">
                        <p>Estudia una materia a la vez, ahora con el nuevo modelo educativo obtendrás mayor concentración, metas más claras y eficiencia en el manejo de tu tiempo. ¡Es más fácil!</p>
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
                        <img class="img-fluid escudo d-none d-sm-block" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/escudo_comunidad.webp" alt="">
                </div>
                <div class="fondo-x d-none d-sm-block">
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
                <div class="col-md-9">
                    <div class="container">   
                        <div class="row">
                            <div class="col-md-3 offset-md-1">
                                <img class="img-fluid foto-podcast" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/miniatura-podcast.png" alt="">
                            </div>
                            <div class="col-md-8">
                                <h3 class="titulo-podcast">Episodio Uno: <strong>El regreso a clases presencial</strong></h3>
                                <p class="descripcion-podcast">
                                    En este podcast platicamos sobre el regreso a clases presenciales. Con la compañía de profesores que están viviendo la situación, nos preguntamos ¿Es buen momento para regresar a las aulas? y ¿Cuál será el impacto que esto tendrá en las futuras generaciones? ¡Acompáñanos!
                                    <div class="links-podcast">
                                        <a target="_blank" class="icono-spotify" href="https://open.spotify.com/episode/01V6ky4wGTMCeD3GBblAvJ"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icono-spotify.webp" alt=""> Ir a Spotify</a>
                                        <a target="_blank" class="icono-youtube" href="https://www.youtube.com/watch?v=Vrml8ZtA4vw"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icono-youtube.webp" alt=""> Ir a Youtube</a>
                                    </div>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 offset-md-1">
                                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/miniatura-podcast.png" alt="">
                            </div>
                            <div class="col-md-8">
                                <h3 class="titulo-podcast">Episodio dos: <strong>Legalización del aborto (proximamente)</strong></h3>
                                <p class="descripcion-podcast">
                                    En este episodio hablamos de un tema de alta relevancia nacional, basado en el poder de decisión de las mujeres. Te invitamos a estar al pendiente este 11 de Ocrubre.</p>
                                    <div class="links-podcast">
                                        <a class="icono-spotify"  disabled><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icono-spotify.webp" alt=""> Ir a Spotify</a>
                                        <a class="icono-youtube"  disabled><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icono-youtube.webp" alt=""> Ir a Youtube</a>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="anuncio-tiktok">
        <div class="container">
            <div class="row">
                <div class="col col-md-5 tiktok">
                    <div class="texto">
                        Descubre y diviértete con nuestro nuevo canal de Tik tok IEXE
                        <a target="_blank" href="https://vm.tiktok.com/ZMRoQFFQC/" class="btn btn-primario" target="_blank">¡Descúbrelo!</a>
                    </div>

                </div>
                <div class="col-md-5 offset-md-1 generacion">
                    <img class="float-left escudo-comunidad" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/escudoComunidad.webp" alt="">
                    <div class="texto">
                        <h1>Alumno de la generación</h1>
                        <p>Esta dinámica le dará la oportunidad de ser representante de la generación al alumno más votado por la comunidad.</p>
                        <a target="_blank" href="https://generacion.iexe.edu.mx/" class="conocelos">¡Cónocelos!</a>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- <section id="video-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-4">
                    <h1>Videos testimoniales IEXE</h1>
                    <p>Someday is not a fucking day of the week. Whatever can be captured in words can be conquered with understanding. Defy fucking convention. If you don’t test your will against the dissent of the world, it can never grow stronger.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 offset-md-4">
                    <img src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/video-testimonial.png" alt="">
                    <h2 class="titulo-testimonial">Podcast Uno: <strong>El valor de X</strong></h2>
                </div>
                <div class="col-md-3 offset-md-1">
                    <img src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/video-testimonial.png" alt="">
                    <h2 class="titulo-testimonial">Podcast Uno: <strong>El valor de X</strong></h2>
                </div>
                <div class="col-md-1">

                </div>
            </div>
        </div>
    </section> -->
    <!-- <section id="mapa-comunidad">
        <div class="container">
            <div class="row">
                <img class="img-fluid internacional" src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/comunidad-internacional.png" alt="">
            </div>
            <div class="row">
                <div class="col-md">
                    <h1 class="titulo">Comunidad Internacional</h1>
                    <h2 class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="lista-pais">
                        <div class="bandera"></div>
                        <div class="nombre-pais">Ecuador</div>
                    </div>
                    <div class="lista-pais">
                        <div class="bandera"></div>
                        <div class="nombre-pais">Colombia</div>
                    </div>
                    <div class="lista-pais">
                        <div class="bandera"></div>
                        <div class="nombre-pais">Guatemala</div>
                    </div>
                    <div class="lista-pais">
                        <div class="bandera"></div>
                        <div class="nombre-pais">Estados Unidos</div>
                    </div>
                    <div class="lista-pais">
                        <div class="bandera"></div>
                        <div class="nombre-pais">México</div>
                    </div>
                    <div class="lista-pais">
                        <div class="bandera"></div>
                        <div class="nombre-pais">Argentina</div>
                    </div>
                    <div class="lista-pais">
                        <div class="bandera"></div>
                        <div class="nombre-pais">República Dominicana</div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

<section id="banner-libro">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="/producto/diseno-de-politicas-publicas/"><img class="img-fluid d-none d-sm-block" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/banner_bestseller-politicas-publicas.webp" alt=""></a>
                <a href="/producto/diseno-de-politicas-publicas/"><img class="img-fluid d-block d-sm-none" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/banner-comunidad-responsive.webp" alt=""></a>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/comunidad'); ?>
<section id="comunidad-internacional">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="/blog/validez-internacional-a-titulos-expedidos-por-iexe-universidad/"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/banner_comunidad_internacional.webp" alt="Banner comunidad Internacional"></a>
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/vinculos'); ?>
<?php get_footer(); ?>
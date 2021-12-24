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
                    <div class="fecha">20 de Diciembre del 2021</div>
                    <div class="titulo-aviso">
                        <h3>¡Bienvenida Generación Enero 2021!</h3>
                    </div>
                    <div class="descripcion-aviso">
                        <p>Esperamos que tengan una excelente experiencia y aprovechen al máximo todas las herramientas que les brindamos por medio de la plataforma.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-none d-sm-block">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/de-comunidad-2.webp" alt="">
            </div>
            <div class="col-md-9">
                <div class="aviso">
                    <span class="tipo">EVENTO</span>
                    <div class="fecha">8 de Noviembre del 2021</div>
                    <div class="titulo-aviso">
                        <h3>Masterclass de Noviembre</h3>
                    </div>
                    <div class="descripcion-aviso">
                        <p>Te esperamos en la semana de Masterclass del mes de noviembre. Recuerda agendar del 22 al 26 de noviembre. ¡No te la puedes perder!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-none d-sm-block">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/grad.webp" alt="">
            </div>
            <div class="col-md-9">
                <div class="aviso">
                    <span class="tipo">EVENTO</span>
                    <div class="fecha">20 de Diciembre del 2021</div>
                    <div class="titulo-aviso">
                        <h3>¡Llegó el momento de festejar en familia!</h3>
                    </div>
                    <div class="descripcion-aviso">
                        <p>IEXE Universidad, te desea ¡Felices Fiestas! en compañía de toda tu familia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-none d-sm-block">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/de-comunidad-1.webp" alt="">
            </div>
            <div class="col-md-9">
                <div class="aviso">
                    <span class="tipo">NOTICIA</span>
                    <div class="fecha">20 de Diciembre del 2021</div>
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
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/controles-podcast.webp" alt="Controles">
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
                                <h3 class="titulo-podcast">Episodio dos: <strong>Legalización del aborto (próximamente)</strong></h3>
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
                <div class="col col-md-11 tiktok">
                    <div class="texto">
                        Descubre y diviértete con nuestro nuevo canal de Tik tok IEXE
                        <a target="_blank" href="https://vm.tiktok.com/ZMRoQFFQC/" class="btn btn-primario" target="_blank">¡Descúbrelo!</a>
                    </div>

                </div>
                <!-- <div class="col-md-5 offset-md-1 generacion">
                    <img class="float-left escudo-comunidad" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/escudoComunidad.webp" alt="">
                    <div class="texto">
                        <h1>Alumno de la generación</h1>
                        <p>Esta dinámica le dará la oportunidad de ser representante de la generación al alumno más votado por la comunidad.</p>
                        <a target="_blank" href="https://generacion.iexe.edu.mx/" class="conocelos">¡Cónocelos!</a>
                    </div>

                </div> -->
            </div>
        </div>

    </section>

    <!-- <section id="video-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-4">
                    <h1>IEXALUMNOS</h1>
                    <p>Conoce algunas de las experiencias y la trayectoria de los alumnos de nuestra comunidad. Recuerda que tú podrías ser nuestro próximo embajador IEXE. Escríbenos para ser el siguiente participante: <a href="mailto:admisiones@iexe.edu.mx">admisiones@iexe.edu.mx</a></p>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 offset-md-4">
                    <div class="un-testimonio">
                        <img class="img-fluid" src="<?php  echo esc_url(get_template_directory_uri()) ?>/assets/img/Henry.png" alt="">
                        <button type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/Oq6xon0-0S4" data-target="#myModal">
                            <i class="fas fa-play"></i>
                        </button>
                    </div>
                    <h2 class="titulo-testimonial text-center">Henry Mario Rodriguez Zambrano</strong></h2>
                        
                    
                </div>
                <div class="col-md-3 offset-md-1 align-self-center">
                <div class="un-testimonio">
                    <img class="img-fluid" src="<?php  echo esc_url(get_template_directory_uri()) ?>/assets/img/Stephanie-Gomiciaga.png" alt="">
                    <button type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/9O6XqY1q1tE" data-target="#myModal">
                            <i class="fas fa-play"></i>
                    </button>
                </div>
                    <h2 class="titulo-testimonial text-center">Sandra Lucía Ruíz Hernández</strong></h2>
                </div>
                <div class="col-md-1 align-self-center float-right">
                        <a class="float-right" href=""><img src="<?php  echo esc_url(get_template_directory_uri()) ?>/assets/img/flecha-iexalumnos.svg" alt=""></a>
                </div>
            </div>
        </div>
    </section> -->
    <section id="mapa-comunidad">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img class="img-fluid internacional float-right" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/comunidad-internacional.png" alt="">
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-12 offset-md-1">
                    <h1 class="titulo">Comunidad Internacional</h1>
                    <h2 class="description">Tu también podrás ser parte de una comunidad estudiantil vibrante, incluyente y multicultural.</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1 un-bloque-azul">

                </div>
                <div class="col-md-4">
                    <div id="ecuador" class="lista-pais">
                        <div class="bandera"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/banderas-comunidad/ecuador.png" alt="bandera de Ecuador"></div>
                        <div class="nombre-pais my-auto">Ecuador</div>
                    </div>
                    <div id="colombia" class="lista-pais">
                        <div class="bandera"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/banderas-comunidad/colombia.png" alt="bandera de Colombia"></div>
                        <div class="nombre-pais my-auto">Colombia</div>
                    </div>
                    <!-- <div id="guatemala" class="lista-pais">
                        <div class="bandera"><img class="img-fluid" src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/banderas-comunidad/guatemala.png" alt="bandera de Guatemala"></div>
                        <div class="nombre-pais my-auto">Guatemala</div>
                    </div> -->
                    <div id="mexico" class="lista-pais">
                        <div class="bandera"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/banderas-comunidad/mexico.png" alt="bandera de México"></div>
                        <div class="nombre-pais my-auto">México</div>
                    </div>
                    <div id="elSalvador" class="lista-pais">
                        <div class="bandera"><img style="width: 52px;" class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/banderas-comunidad/el-salvador.webp" alt="bandera de El Salvador"></div>
                        <div class="nombre-pais my-auto">El Salvador</div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div id="mensaje-colombia" class="mensaje-pais">
                        <p class="estudiante-testimonio">“Estudiar en IEXE universidad, ha sido una experiencia bastante importante para mi formación profesional y academica, ya que la metodología de enseñanza es muy practica.”</p>
                        <div class="estudiante-autor">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Fenry_Alonso_Colombia.webp" alt="Fenry Alonso" class="autor-foto">
                            <span class="nombre-estudiante">Fenry Alonso Beltrán<br></span>
                            <span class="descripcion">Maestría en Administración y Políticas Públicas.</span>
                        </div>
                    </div>
                    <div id="mensaje-ecuador" class="mensaje-pais">
                        <p class="estudiante-testimonio">“Cursar mis estudios de Maestría en IEXE , gran experiencia, me permite organizar mi tiempo, cumplir mis actividades. Su excelente estructura digital me da la oportunidad de lograr mis objetivos.”</p>
                        <div class="estudiante-autor">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Ruth_Noemi_Ecuador.webp" alt="" class="autor-foto">
                            <span class="nombre-estudiante">Ruth Noemí Vernaza Casquete</span>
                            <span class="descripcion">Maestría en Administración y Políticas Públicas.</span>
                        </div>
                    </div>
                    <div id="mensaje-salvador" class="mensaje-pais">
                        <p class="estudiante-testimonio">“Estudiar en IEXE es la mejor experiencia, ya que los horarios de clases son autoadaptables y los docentes accesibles, las estrategias de evaluación son muy adecuadas y permite la experiencia de adquirir conocimientos y así en un futuro desarrollarte en el ámbito laboral.”</p>
                        <div class="estudiante-autor">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/sanda_ventura_el_salvador.webp" alt="" class="autor-foto">
                            <span class="nombre-estudiante">Sandra Elizabeth Ramos Ventura</span>
                            <span class="descripcion">Licenciatura Ciencias Políticas y Administración Pública</span>
                        </div>
                    </div>
                    <img class="img-fluid el-mundo" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/mundo_iexe.webp" alt="">
                </div>
            </div>
        </div>
    </section>

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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      
      <div class="modal-body">

       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>        
        <!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
</div>
        
        
      </div>

    </div>
  </div>
</div>
<?php get_template_part( 'template-parts/vinculos'); ?>
<?php get_footer(); ?>
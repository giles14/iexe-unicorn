<?php
/*
Template Name: Capacitaciones
*/
?>
<?php 
$unicorn_contador = 1;
$unicorn_grupo = 1;
$materiasMax = MAXIMAS_MATERIAS;
$imagenAsesor = get_field('imagen_coordinador');
$estiloPrograma = get_field('estilo_de_programa'); ?>
<?php get_header( ); ?>
<section id="header">
    <div id="informacion-programa" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="mask flex-center">
              <div class="container">
                  <div class="row">
                      <div id="desc-programa">
                          <div class="col-12 col-md-6">
                            <h2 class="tipo-oferta">Capacitaciones en línea</h2>
                              <a class="button-primary">Capacitación especializada</a>
                              <div class="descripcion-programa">
                                <p>Nuestras capacitaciones se basan en dos pilares:</p>
                                <ol>
                                    <li>La creación e impartición de conocimiento práctico y a la medida.</li>
                                    <li>La flexibilidad y adaptabilidad al estilo de vida de las personas y necesidades de las instituciones.</li>
                                </ol>
                                <p>Esto quiere decir que, además de contar con un amplio catálogo de cursos, podemos desarrollar contenido en múltiples áreas del conocimiento e impartirlo de manera presencial, a distancia o en modalidad mixta, lo que nos permite cubrir cualquier necesidad de capacitación del sector público y privado.</p>
                                
                              </div>
                          </div>
                          <div class="col-md-4 offset-md-2 d-none d-sm-block">
                              <div class="formulario">
                                  <div class="cabecera">
                                      <h1 class="interes">¿Estás interesado?</h1>
                                  </div>
                                  <div class="cuerpo">
                                      <form id="interes" method="POST" action="">
                                          <div class="form-group">
                                            <label for="nombre">Nombre completo*</label>
                                            <input type="text" placeholder="Ingresa aquí tu nombre" class="form-control" name="nombre" id="nombre" >
                                          </div>
                                          <div class="form-group">
                                              <label for="correo">Correo electrónico*</label>
                                              <input type="email" placeholder="Ingresa aquí tu correo electrónico" name="email" class="form-control" id="exampleInputEmail1">
                                          </div>
                                          <div class="form-group">
                                              <label for="telefono">Teléfono móvil*</label>
                                              <input type="tel" placeholder="Ingresa aquí tu teléfono móvil" class="form-control" name="telefono" id="telefono">
                                          </div>
                                          <div class="col-12 text-center">
                                                <input id="hiddenPrograma" name="hiddenPrograma" type="hidden" value="<?php echo (get_field('clave_del_programa')) ? get_field('clave_del_programa')  : 'SINA'; ?>">
                                              <button type="button" class="btn btn-primario mt-3">Enviar registro</button>
                                          </div>
                                        </form>
                                  </div>
              
                              </div>
                          </div>
          
                      </div>               
                  </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#informacion-programa" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#informacion-programa" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> 
      </div>
</section>
<section id="navegacion">
    <div class="container">
        <div class="row no-gutters">
           
        </div>
    </div>
</section>
<section id="modalidades">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                    <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/presencial.png" alt="">
                <div class="contenedor">
                    <h2 class="modalidad">Presencial</h2>
                    <p>
                        <strong>La modalidad presencial se basa en 4 características:</strong>
                    </p>
                    <ol>
                        <li>Docentes con amplia experiencia en el proceso de enseñanza aprendizaje, enfocados al desarrollo de competencias laborales de nuestros estudiantes.</li>
                        <li>Logística impecable para el desarrollo de la capacitación.</li>
                        <li>Cursos dinámicos y prácticos.</li>
                        <li>Materiales y recursos didácticos de apoyo para cada uno de los participantes.</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/especializada.png" alt="">
                <div class="contenedor">
                    <h2 class="modalidad">Especializada</h2>
                    <p>
                        <strong>La modalidad presencial se basa en 4 características:</strong>
                    </p>
                    <ol>
                        <li>Docentes con amplia experiencia en el proceso de enseñanza aprendizaje, enfocados al desarrollo de competencias laborales de nuestros estudiantes.</li>
                        <li>Logística impecable para el desarrollo de la capacitación.</li>
                        <li>Cursos dinámicos y prácticos.</li>
                        <li>Materiales y recursos didácticos de apoyo para cada uno de los participantes.</li>
                    </ol>
                </div>
            </div>
            
            <div class="col-md-4">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/mixta.png" alt="">
                <div class="contenedor">                
                    <h2 class="modalidad">Mixta</h2>
                    <p>
                        <strong>La modalidad presencial se basa en 4 características:</strong>
                    </p>
                    <ol>
                        <li>Docentes con amplia experiencia en el proceso de enseñanza aprendizaje, enfocados al desarrollo de competencias laborales de nuestros estudiantes.</li>
                        <li>Logística impecable para el desarrollo de la capacitación.</li>
                        <li>Cursos dinámicos y prácticos.</li>
                        <li>Materiales y recursos didácticos de apoyo para cada uno de los participantes.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="ventajas">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Ventajas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>Los cursos son diseñados con base en un Diagnóstico de Necesidades de Capacitación.</p>
                <p>Además, esto permite impartir contenido fundamentado en casos reales de la institución.</p> 
                <p>A través de los cursos se cumplen las obligaciones en materia de capacitación de la STPS (DC3 y DC4), para instituciones privadas.</p> 
                <p>La inversión en capacitación es deducible de impuestos.</p>
                <p>La modalidad en línea no afecta el tiempo productivo, además de permitir la capacitación masiva y simultánea.</p>
            </div>
        </div>
    </div>
</section>
<section id="experiencia">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Experiencia</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <p>IEXE Universidad ha llevado acabo 296 capacitaciones especializadas a nivel nacional e internacional desde el año 2004. Esa experiencia nos ha permitido perfeccionar los procesos de logística y de aprendizaje para personas que trabajan en el servicio público y sector privado. A continuación se muestran algunos ejemplos de distintos formatos de capacitación presencial que IEXE ha realizado en los últimos 20 años.</p>
            </div>
            
        </div>
    </div>
</section>
<section id="nuestros-clientes">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Nuestros clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>Durante 20 años IEXE Universidad ha desarrollado exitosos proyectos de capacitación presencial dirigidos a personas que trabajan en el servicio público de todos los niveles en México y organismos multilaterales, con base a nuestro modelo de educación presencial, en línea y mixto.</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/GobiernoClientes-IEXEpresidencia.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/GobiernoClientes-IEXEsre.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/GobiernoClientes-IEXEshcp.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/GobiernoClientes-IEXEsader.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/GobiernoClientes-IEXEse.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/GobiernoClientes-IEXEsep.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/GobiernoClientes-IEXEsedatu.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/GobiernoClientes-IEXEsct.jpg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/GobiernoClientes-IEXEstps.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/GobiernoClientes-IEXEfuncionpublica.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/GobiernoClientes-IEXEceav.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/GobiernoClientes-IEXEconagua.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/GobiernoClientes-IEXEconafor.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/GobiernoClientes-IEXEjfca.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/GobiernoClientes-IEXEagroasemex.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/GobiernoClientes-IEXEban-bras.jpg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/GobiernoClientes-IEXEpemex.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/GobiernoClientes-IEXEinegi.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/GobiernoClientes-IEXEinfonavit.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/GobiernoClientes-IEXEinstituto.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/GobiernoClientes-IEXE-ran.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/GobiernoClientes-IEXEcanal22.jpg" alt="">
            </div>
            <div class="col">
                
            </div>
            <div class="col">
                
            </div>
        </div>
    </div>
</section>
<section id="gobierno-federal">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Gobierno Federal</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/banderitas-Clientes-IEXE-Aguascalientes.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/banderitas-Clientes-IEXE-Baja-california-sur.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/banderitas-Clientes-IEXE-Chiapas.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/banderitas-Clientes-IEXE-Chihuahua.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/banderitas-Clientes-IEXE-Durango.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/banderitas-Clientes-IEXE-Estado-de-mexico.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/banderitas-Clientes-IEXE-Guanajuato.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/banderitas-Clientes-IEXE-Hidalgo.jpg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/banderitas-Clientes-IEXE-Jalisco.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/banderitas-Clientes-IEXE-Puebla.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/banderitas-Clientes-IEXE-queretaro.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/banderitas-Clientes-IEXE-Sinaloa.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/banderitas-Clientes-IEXE-Tabasco.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos/banderitas-Clientes-IEXE-Tlaxcala.jpg" alt="">
            </div>
            <div class="col"></div>
            <div class="col"></div>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/botones-accion'); ?>
<?php get_template_part( 'template-parts/comunidad', 'comunidad-iexe' ); ?>
<?php get_template_part( 'template-parts/vinculos'); ?>
<?php get_footer( ); ?>
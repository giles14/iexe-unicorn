<?php
/*
Template Name: Admisiones
*/
?>
<?php 
    $banner = get_field('banner_admisiones', 3505);
    $bannerMovil = get_field('banner_admisiones_movil', 3505);
    $link_banner = esc_url(get_field('link_banner_2', 3505));
?> 
<?php get_header( ); ?>
<section id="header">
    <div id="informacion-programa" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="mask flex-center">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <img style="margin-top: 30px;" class="img-fluid d-none d-sm-block" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slider-admisiones.webp" alt="">
                          <img style="margin-top: 30px;" class="img-fluid d-block d-sm-none" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/admisiones-movil.webp" alt="">
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="mask flex-center">
              <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                          <img style="margin-top: 17px;" class="img-fluid d-none d-sm-block" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slider-admisiones-pasos.webp" alt="">
                          <img style="margin-top: 35px;" class="img-fluid d-block d-sm-none" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/admisones-pasos-movil.webp" alt="">
                      </div>           
                  </div>
              </div>
      
            </div>
          </div>
        </div>
        <!-- <a class="carousel-control-prev" href="#informacion-programa" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#informacion-programa" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>  -->
      </div>
</section>
<section id="navegacion">
    <div class="container">
        <div class="row no-gutters">
            <div class="col"><a data-target="#informacion-programa" data-slide-to="0" class="active"><div class="col d-table"><div class="contenido d-table-cell align-middle">ADMISIONES</div></div></a></div>
            <div class="col"><a data-target="#informacion-programa" data-slide-to="1"><div class="col d-table"><div class="contenido d-table-cell align-middle">PROCESO</div></div></a></div>
            <div class="col d-none"><a href="https://iexe.edu.mx/alianzas-academicas" target="_blank"><div class="col d-table"><div class="contenido d-table-cell align-middle">CONVENIOS</div></div></a></div>
            <!-- <div class="col"><a data-target="#informacion-programa" data-slide-to="3"><div class="col d-table"><div class="contenido d-table-cell align-middle">CRÉDITOS ANTICIPADOS</div></div></a></div> -->
        </div>
    </div>
</section>
<section id="requisitos-inscripcion">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="titulo">Requisitos de inscripción</h1>
                <h2 class="description">¡Tu camino empieza aquí! Elige el programa de tu preferencia y comienza tu proceso.</h2>
            </div>
        </div>
    </div>
    <section id="licenciaturas">
        <div class="container">
            <div class="row contenedor-admision los-requisitos">
                    <div class="col-md-6">
                        <h1 class="nombre-programa"><i class="cyan uil uil-angle-right"></i>Licenciaturas</h1>
                        <ul class="requisitos">
                            <li>Acta de nacimiento original.</li>
                            <li>Copia de CURP.</li>
                            <li>Certificado de término de bachillerato o preparatoria, debidamente legalizado (en caso de que se encuentre en trámite, constancia reciente donde lo avale).</li>
                        </ul>
                    </div>
                    <div class="inicia-proceso">
                        <a>Quiero inscribirme</a>
                    </div>
                    <div class="col-md-6">
                    </div>
            </div>
            <div class="row contenedor-admision el-formulario" style="display: none">
                    <div class="col-md-4"><h1 class="nombre-programa"><i class="cyan uil uil-angle-right"></i>Licenciaturas</h1></div>
                    <div class="col-md-8">
                        
                        <form id="inscripcion" class="formulario-crm" method="POST" data-origen="inicia-tu-proceso" action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="nombre">Nombre completo*</label>
                                    <input type="nombre" placeholder="Ingresa aquí tu nombre" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="correo">Correo electrónico*</label>
                                        <input type="email" placeholder="Ingresa aquí tu correo electrónico" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="telefono">Teléfono o celular*</label>
                                        <input type="tel" placeholder="Ingresa aquí tu número telefónico" name="telefono" class="form-control" id="telefono" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="interes">Programa académico de interés</label>
                                        <select name="programa" class="form-control" id="interes" name="programa">
                                            <option selected="">Seleccionar programa</option>
                                            <option value="LCP">Ciencias Políticas y Administración Pública</option>
                                            <option value="LSP">Seguridad Pública</option>
                                            <option value="LD">Derecho</option>
                                            <option value="LAE">Administración de Empresas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6  d-flex align-items-end">
                                    <button style="display:block; margin: 0 auto; margin-bottom: 24px;" type="button" onclick="enviarFormulario(this)" class="btn btn-primario mt-3 al-crm ld-ext-right">Enviar registro<div class="ld ld-ring ld-spin"></div></button>
                                </div>
                            </div>
                        </form>
                            
                        </div>
                        <div class="regresa-requisitos">
                        <a>< Regresar</a>
                    </div>
            </div>
                    
            </div>
        </div>  
    </section>
    <section id="maestrias">
        <div class="container">
            <div class="row contenedor-admision los-requisitos">
                <div class="col-md-6">
                    <h1 class="nombre-programa"><i class="cyan uil uil-angle-right"></i>Maestrías</h1>
                    <ul class="requisitos">
                        <li>Acta de nacimiento original.</li>
                        <li>Copia de CURP.</li>
                        <li>Copia de título profesional de licenciatura (en caso de que se encuentre en trámite, constancia de titulación en trámite y copia de acta de examen profesional).</li>
                        <li>Copia de cédula profesional de licenciatura (en caso de que se encuentre en trámite, constancia de titulación en trámite).</li>
                        <li>El/la aspirante que ingresa a la maestría como opción de titulación de la licenciatura, deberá entregar además los 2 siguientes requisitos:</li>
                            <ul>
                                <li>A) Certificado original de término de la licenciatura debidamente legalizado.</li>
                                <li>B) Carta OTEM original (oficio de su universidad de procedencia donde le autoriza titularse por estudios de maestría).</li>
                            </ul>
                    </ul>
                </div>
                <div class="inicia-proceso">
                    <a>Quiero inscribirme</a>
                </div>
            </div>
            <div class="row contenedor-admision el-formulario" style="display: none">
                    <div class="col-md-4"><h1 class="nombre-programa"><i class="cyan uil uil-angle-right"></i>Maestrías</h1></div>
                    <div class="col-md-8">
                            <form id="inscripcion" method="POST" data-origen="inicia-tu-proceso" action="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="nombre">Nombre completo*</label>
                                        <input type="nombre" placeholder="Ingresa aquí tu nombre" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="correo">Correo electrónico*</label>
                                            <input type="email" placeholder="Ingresa aquí tu correo electrónico" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="telefono">Teléfono o celular*</label>
                                            <input type="tel" placeholder="Ingresa aquí tu número telefónico" name="telefono" class="form-control" id="telefono-maestria" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="interes">Programa académico de interés</label>
                                            <select class="form-control" id="interes" name="programa">
                                                <option selected="">Seleccionar programa</option>
                                                <option value="MBAT">Administración de Negocios</option>
                                                <option value="MITIC">Ingeniería en Tecnologías de la Información</option>
                                                <option value="MAPP">Administración y Políticas Públicas</option>
                                                <option value="MEPP">Evaluación de Políticas Públicas</option>
                                                <option value="MFP">Finanzas Públicas</option>
                                                <option value="MSPP">Seguridad Pública y Políticas Públicas</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6  d-flex align-items-end">
                                        <button style="display:block; margin: 0 auto; margin-bottom: 24px;" onclick="enviarFormulario(this)" type="button" class="btn btn-primario mt-3 al-crm ld-ext-right">Enviar registro<div class="ld ld-ring ld-spin"></div></button>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                        
                        <div class="regresa-requisitos">
                        <a>< Regresar</a>
                    </div>
            </div>
        </div>  
    </section>
    <section id="doctorado">
        <div class="container">
            <div class="row contenedor-admision los-requisitos">
                <div class="col-md-6">
                    <h1 class="nombre-programa"><i class="cyan uil uil-angle-right"></i>Doctorado</h1>
                    <ul class="requisitos">
                        <li>Acta de nacimiento original.</li>
                        <li>Copia de CURP.</li>
                        <li>Copia de grado de maestría (en caso de que se encuentre en trámite constancia de titulación en trámite y copia de acta de examen de grado).</li>
                        <li>Copia de cédula profesional de maestría (en caso de que se encuentre en trámite constancia de titulación en trámite).</li>
                    </ul>
                </div>
                <div class="col-md-6">
                </div>
                <div class="inicia-proceso">
                    <a>Quiero inscribirme</a>
                </div>
            </div>
            <div class="row contenedor-admision el-formulario" style="display: none">
                    <div class="col-md-4"><h1 class="nombre-programa"><i class="cyan uil uil-angle-right"></i>Doctorado</h1></div>
                    <div class="col-md-8">
                        <form id="inscripcion" method="POST" data-origen="inicia-tu-proceso" action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombre">Nombre completo*</label>
                                        <input type="nombre" placeholder="Ingresa aquí tu nombre" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="correo">Correo electrónico*</label>
                                        <input type="email" placeholder="Ingresa aquí tu correo electrónico" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="telefono">Teléfono o celular*</label>
                                        <input type="tel" placeholder="Ingresa aquí tu número telefónico" name="telefono" class="form-control" id="telefono-doctorado" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="interes">Programa académico de interés</label>
                                        <select class="form-control" id="interes" name="programa">
                                            <option value="DPP" selected="">Políticas Públicas</option>
                                            <option value="DSP" selected="">Seguridad Pública</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex align-items-end">
                                <button style="display:block; margin: 0 auto; margin-bottom: 24px;" onclick="enviarFormulario(this)" type="button" class="btn btn-primario mt-3 al-crm ld-ext-right">Enviar registro<div class="ld ld-ring ld-spin"></div></button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                        
                        <div class="regresa-requisitos">
                        <a>< Regresar</a>
                    </div>
            </div>
        </div>  
    </section>
</section>
<section id="proceso-revalidacion">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="titulo">Proceso de convalidación internacional</h1>
                <h2 class="description">En los siguientes enlaces podrás encontrar la información necesaria de cada país para realizar tu proceso de convalidación.</h2>
            </div>
        </div>
        <div class="row banderas">
            <div class="col">
                <span class="nombre-pais">Ecuador</span>
                <span class="nombre-institucion">SENECYT</span>
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/revalidacion/ecuador.png" alt="">
                <a class="mostrar-mas azul-primario-color" target="_blank" href="https://www.gob.ec/senescyt/tramites/reconocimiento-general-titulos-extranjero">Ver información</a>
            </div>
            <div class="col">
                <span class="nombre-pais">Colombia</span>
                <span class="nombre-institucion">MINEDUCAC</span>
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/revalidacion/colombia.png" alt="">
                <a class="mostrar-mas azul-primario-color" target="_blank" href="https://www.mineducacion.gov.co/portal/convalidaciones/Convalidaciones-Educacion-Superior/355353:Preguntas-Frecuentes">Ver información</a>
                
            </div>
            <div class="col">
                <span class="nombre-pais">Guatemala</span>
                <span class="nombre-institucion">USAC</span>
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/revalidacion/guatemala.png" alt="">
                <a class="mostrar-mas azul-primario-color" target="_blank" href="https://registro.usac.edu.gt/index.php?equi=1">Ver información</a>
                
            </div>
            <div class="col">
                <span class="nombre-pais">El Salvador</span>
                <span class="nombre-institucion">MINED</span>
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/revalidacion/el-salvador.png" alt="">
                <a class="mostrar-mas azul-primario-color" target="_blank" href="https://www.mined.gob.sv/servicios/incorporacion-de-titulos-de-educacion-superior-procedentes-del-extranjero/ ">Ver información</a>
                
            </div>
            <div class="col">
                <span class="nombre-pais">Panamá</span>
                <span class="nombre-institucion">MEDUCA</span>
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/revalidacion/panama.png" alt="">
                <a class="mostrar-mas azul-primario-color" target="_blank" href="https://www.panamatramita.gob.pa/es/tramite/solicitud-de-rev%C3%A1lida-de-t%C3%ADtulos">Ver información</a>
                
            </div>
            <div class="col ultimo">
                <span class="nombre-pais">Perú</span>
                <span class="nombre-institucion">MINEDU</span>
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/revalidacion/peru.png" alt="">
                <a class="mostrar-mas azul-primario-color" target="_blank" href="https://www.sunedu.gob.pe/procedimiento-de-reconocimiento-de-grados-y-titulos-extranjeros/#ver-la-lista">Ver información</a>
                
            </div>
        </div>
    </div>
</section>
<!-- <section id="eres-parte">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="titulo">Ya eres parte de IEXE Universidad</h1>
                <h2 class="description">En breve tu hacer concejero administrativo te familiarizará con todo ¡Felicicades!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
</section> -->

<section id="banners">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <?php
                        if( !empty( $banner ) ): ?>
                            <a href="<?php echo $link_banner ?>" target="_blank"><img loading="lazy" src="<?php echo esc_url($banner['url']); ?>" class="d-none d-sm-block img-fluid banners" alt="<?php echo esc_attr($banner['alt']); ?>" /></a>
                        <?php endif; ?>
                        <?php
                        if( !empty( $bannerMovil ) ): ?>
                            <a href="<?php echo $link_banner ?>" target="_blank"><img loading="lazy" src="<?php echo esc_url($bannerMovil['url']); ?>" class="d-block d-sm-none img-fluid banners" alt="<?php echo esc_attr($bannerMovil['alt']); ?>" /></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php get_template_part( 'template-parts/calcula-beca-alt', null, array(
    'porcentaje' =>  $porcentajeBeca
)); ?>
<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="/blog/validez-internacional-a-titulos-expedidos-por-iexe-universidad/">
                    <img class="img-fluid banners d-none d-sm-block" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/banner_admisiones.webp" alt="">
                    <img class="img-fluid banners d-block d-sm-none" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/banner_admisiones_movil.webp" alt="">
                </a>
            </div>
        </div>
    </div>
</section>
<section id="preguntas-frecuentes">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h1 class="preguntas-frecuentes">Preguntas frecuentes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p class="preguntas">Conoce toda la información necesaria para pertenecer a nuestra <strong>comunidad estudiantil.</strong></p>
                <h2 class="tipo-beca">Categorías</h2>
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="opcion-tipo-becas active" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Generales</a>
                    <a class="opcion-tipo-becas" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Titulación</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div id="accordion" class="myaccordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            ¿Cómo es la experiencia de estudiar en línea?
                                            <span class="text-right ver-mas"><i class="uil uil-plus"></i><i class="uil uil-minus"></i></span>
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Tomarás clases a través de una plataforma interactiva, abierta las <strong>24 horas del día</strong>, los <strong>365 días del año.</strong> Además, a través de ella, podrás tener interacción con docentes excepcionales.</p>
                                    </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="d-flex align-items-start justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        ¿Todos sus programas cuentan con validación por parte de la SEP?
                                        <span class="text-right ver-mas"><i class="uil uil-plus"></i><i class="uil uil-minus"></i></span>
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Las licenciaturas, maestrías, doctorado y diplomados cuentan con el aval de la <strong>Secretaría de Educación Pública de México</strong>. Puedes consultar el Reconocimiento de Validez Oficial de Estudios (RVOE) en: www.sirvoes.sep.gob.mx</p>
                                    </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        ¿Es necesario tener conexión a internet?
                                        <span class="text-right ver-mas"><i class="uil uil-plus"></i><i class="uil uil-minus"></i></span>
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Para ingresar a la plataforma es necesario tener conexión a internet, sin embargo existe <stron>material descargable</strong> para ser utilizado <strong>sin conexión.</strong></p>
                                    </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                        ¿Me pueden revalidar materias?
                                        <span class="text-right ver-mas"><i class="uil uil-plus"></i><i class="uil uil-minus"></i></span>
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Sí, <strong>comunícate con nuestros(os) asesores(as)</strong> para brindarte atención personalizada.</p>
                                    </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                    <h2 class="mb-0">
                                        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                        ¿Estudiar en línea es accesible?
                                        <span class="text-right ver-mas"><i class="uil uil-plus"></i><i class="uil uil-minus"></i></span>
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Sí, contamos con un sistema <strong>flexible de pagos</strong> y un excelente <strong>plan de becas.</strong></p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                     </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div id="accordion-2" class="myaccordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne-2">
                                    <h2 class="mb-0">
                                        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne-2" aria-expanded="false" aria-controls="collapseOne-2">
                                            ¿Cuáles son las opciones de titulación?
                                            <span class="text-right ver-mas"><i class="uil uil-plus"></i><i class="uil uil-minus"></i></span>
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseOne-2" class="collapse" aria-labelledby="headingOne-2" data-parent="#accordion-2">
                                    <div class="card-body">
                                    <p>Contamos con múltiples opciones de titulación. Concluye tu programa y elige la mejor opción para ti.</p><p>Opciones de titulación (Licenciatura):<br>I.- Elaboración de tesis con sustento de examen profesional<br>II.- Memoria de experiencia profesional con sustentación de examen profesional<br>III.- Escolaridad por promedio mínimo general de nueve punto cero (9.0)<br>IV.- Obtención de título profesional de licenciatura por estudios de maestría</p><p>Opciones de titulación (Maestría):<br>I.- Elaboración de tesis con sustento de examen profesional<br>II.- Escolaridad por promedio mínimo general de nueve punto cero (9.0)<br>III.- Obtención de grado de maestría por estudios de doctorado</p><p>Opciones de titulación (Doctorado):<br>I.- Elaboración de tesis con sustento de examen profesional</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                

            </div>
        </div>
    </div>
</section>
<script>
    jQuery(document).ready(function($){
        $(".submit").click(function(){
            return false;
        });
        $(".GaugeMeter").gaugeMeter();
        $("#generar-resultado").click(function(){
            $("#medidorBeca").gaugeMeter({percent:<?php echo $porcentajeBeca /*round(rand(50 , 70), -1)*/ ?>});
        });
    });   
</script>
<?php get_template_part( 'template-parts/comunidad' ) ?>
<?php get_template_part( 'template-parts/vinculos' ); ?>
<?php get_footer(); ?>
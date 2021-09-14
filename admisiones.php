<?php
/*
Template Name: Admisiones
*/
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
                          <img style="margin-top: 30px;" class="img-fluid" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slider-admisiones.webp" alt="">
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
                          <img style="margin-top: 17px;" class="img-fluid" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/slider-admisiones-pasos.webp" alt="">
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
            <div class="col"><a href="https://iexe.edu.mx/alianzas-academicas" target="_blank"><div class="col d-table"><div class="contenido d-table-cell align-middle">CONVENIOS</div></div></a></div>
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
                            <li>Certificado de término de bachillerato o preparatoria.</li>
                            <li>Certificado de término de bachillerato o preparatoria, debidamente legalizado (en caso de que se encuentre en trámite, constancia reciente donde lo avale).</li>
                        </ul>
                    </div>
                    <div class="inicia-proceso">
                        <a>Inicia tu proceso con un asesor</a>
                    </div>
                    <div class="col-md-6">
                    </div>
            </div>
            <div class="row contenedor-admision el-formulario" style="display: none">
                    <div class="col-md-4"><h1 class="nombre-programa"><i class="cyan uil uil-angle-right"></i>Licenciaturas</h1></div>
                    <div class="col-md-4">
                        <form id="inscripcion">
                            <div class="form-group">
                            <label for="nombre">Nombre completo*</label>
                            <input type="nombre" placeholder="Ingresa aquí tu nombre" class="form-control" id="nombre" aria-describedby="emailHelp">
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
                                <select class="form-control" id="interes" name="select">
                                    <option value="value1" selected="">Seleccionar programa</option>
                                    <option value="value2">Ciencias Políticas y Administración Pública</option>
                                    <option value="value3">Seguridad Pública</option>
                                    <option value="value4">Derecho</option>
                                    <option value="value5">Administración de Empresas</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4  d-flex align-items-end">
                            <button style="display:block; margin: 0 auto; margin-bottom: 24px;" type="submit" class="btn btn-primario mt-3">Enviar registro</button>
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
                        <li>Copia de título profesional de licenciatura (en caso de que se encuentre en trámite constancia de titulación en trámite y copia de acta de examen profesional).</li>
                        <li>Copia de cédula profesional de licenciatura (en caso de que se encuentre en trámite, constancia de titulación en trámite).</li>
                        <li>El/la aspirante que ingresa a la maestría como opción de titulación de la licenciatura, deberá entregar además los 2 siguientes requisitos:</li>
                            <ul>
                                <li>A) Certificado original de término de la licenciatura debidamente legalizado.</li>
                                <li>B) Carta OTEM original (oficio de su universidad de procedencia donde le autoriza titularse por estudios de maestría).</li>
                            </ul>
                    </ul>
                </div>
                <div class="inicia-proceso">
                    <a>Inicia tu proceso con un asesor</a>
                </div>
            </div>
            <div class="row contenedor-admision el-formulario" style="display: none">
                    <div class="col-md-4"><h1 class="nombre-programa"><i class="cyan uil uil-angle-right"></i>Maestrías</h1></div>
                    <div class="col-md-4">
                        <form id="inscripcion">
                            <div class="form-group">
                            <label for="nombre">Nombre completo*</label>
                            <input type="nombre" placeholder="Ingresa aquí tu nombre" class="form-control" id="nombre" aria-describedby="emailHelp">
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
                                <select class="form-control" id="interes" name="select">
                                    <option value="value1" selected="">Seleccionar programa</option>
                                    <option value="value2">Administración de Negocios</option>
                                    <option value="value3">Ingeniería en Tecnologías de la Información</option>
                                    <option value="value4">Administración y Políticas Públicas</option>
                                    <option value="value5">Evaluación de Políticas Públicas</option>
                                    <option value="value6">Finanzas Públicas</option>
                                    <option value="value7">Seguridad Pública y Políticas Públicas</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4  d-flex align-items-end">
                            <button style="display:block; margin: 0 auto; margin-bottom: 24px;" type="submit" class="btn btn-primario mt-3">Enviar registro</button>
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
                    <a>Inicia tu proceso con un asesor</a>
                </div>
            </div>
            <div class="row contenedor-admision el-formulario" style="display: none">
                    <div class="col-md-4"><h1 class="nombre-programa"><i class="cyan uil uil-angle-right"></i>Doctorado</h1></div>
                    <div class="col-md-4">
                        <form id="inscripcion">
                            <div class="form-group">
                            <label for="nombre">Nombre completo*</label>
                            <input type="nombre" placeholder="Ingresa aquí tu nombre" class="form-control" id="nombre" aria-describedby="emailHelp">
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
                                <select class="form-control" id="interes" name="select">
                                    <option value="politicas publicas" selected="">Políticas Públicas</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4  d-flex align-items-end">
                            <button style="display:block; margin: 0 auto; margin-bottom: 24px;" type="submit" class="btn btn-primario mt-3">Enviar registro</button>
                         </form>
                        </div>
                        <div class="regresa-requisitos">
                        <a>< Regresar</a>
                    </div>
            </div>
        </div>  
    </section>
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
<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img class="img-fluid" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/banner_admisiones.webp" alt="">
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/calcula-beca'); ?>
<section id="revalidacion">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
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
                                        <p>Así es, puedes consultar el <strong>Reconocimiento de Validez Oficial de Estudios (RVOE)</strong> en: www.sirvoes.sep.gob.mx</p>
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
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div id="accordion-3" class="myaccordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne-3">
                                    <h2 class="mb-0">
                                        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne-3" aria-expanded="false" aria-controls="collapseOne-3">
                                            ¿Encabezado o título de la pregunta que se debe responder?
                                            <span class="text-right ver-mas"><i class="uil uil-plus"></i><i class="uil uil-minus"></i></span>
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseOne-3" class="collapse" aria-labelledby="headingOne-3" data-parent="#accordion-3">
                                    <div class="card-body">
                                        <p>Quiere la boca exhausta vid, kiwi, piña y fugaz jamón. Fabio me exige, sin tapujos, que añada cerveza al whisky. Jovencillo emponzoñado de whisky, ¡qué figurota exhibes! La cigüeña tocaba cada vez mejor el saxofón y el búho pedía kiwi y queso. El jefe buscó el éxtasis en un imprevisto baño de whisky y gozó como un duque. Exhíbanse politiquillos zafios, con orejas kilométricas y uñas de gavilán. El cadáver de Wamba, rey godo de España, fue exhumado y trasladado en una caja de zinc que pesó un kilo.</p>
                                    </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo-3">
                                    <h2 class="mb-0">
                                        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo-3" aria-expanded="false" aria-controls="collapseTwo-3">
                                        ¿Encabezado o título de la pregunta que se debe responder?
                                        <span class="text-right ver-mas"><i class="uil uil-plus"></i><i class="uil uil-minus"></i></span>
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseTwo-3" class="collapse" aria-labelledby="headingTwo-3" data-parent="#accordion-3">
                                    <div class="card-body">
                                        <p>Quiere la boca exhausta vid, kiwi, piña y fugaz jamón. Fabio me exige, sin tapujos, que añada cerveza al whisky. Jovencillo emponzoñado de whisky, ¡qué figurota exhibes! La cigüeña tocaba cada vez mejor el saxofón y el búho pedía kiwi y queso. El jefe buscó el éxtasis en un imprevisto baño de whisky y gozó como un duque. Exhíbanse politiquillos zafios, con orejas kilométricas y uñas de gavilán. El cadáver de Wamba, rey godo de España, fue exhumado y trasladado en una caja de zinc que pesó un kilo.</p>
                                    </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree-3">
                                    <h2 class="mb-0">
                                        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree-3" aria-expanded="false" aria-controls="collapseThree-3">
                                        ¿Encabezado o título de la pregunta que se debe responder?
                                        <span class="text-right ver-mas"><i class="uil uil-plus"></i><i class="uil uil-minus"></i></span>
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseThree-3" class="collapse" aria-labelledby="headingThree-3" data-parent="#accordion-3">
                                    <div class="card-body">
                                        <p>Quiere la boca exhausta vid, kiwi, piña y fugaz jamón. Fabio me exige, sin tapujos, que añada cerveza al whisky. Jovencillo emponzoñado de whisky, ¡qué figurota exhibes! La cigüeña tocaba cada vez mejor el saxofón y el búho pedía kiwi y queso. El jefe buscó el éxtasis en un imprevisto baño de whisky y gozó como un duque. Exhíbanse politiquillos zafios, con orejas kilométricas y uñas de gavilán. El cadáver de Wamba, rey godo de España, fue exhumado y trasladado en una caja de zinc que pesó un kilo.</p>
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
<?php get_template_part( 'template-parts/comunidad' ) ?>
<?php get_template_part( 'template-parts/vinculos' ); ?>
<?php get_footer(); ?>
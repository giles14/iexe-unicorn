<?php
/*
Template Name: Becas
*/
?>
<?php get_header( ); ?>
<section id="header">
    <div id="informacion-programa" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="mask flex-center">
              <div class="container">
                  <div class="row">
                            <div class="col-md-12 d-none d-sm-block"><img style="margin-top: -103px;width: 90%;" class="img-fluid" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/becas-slide.webp" alt=""></div>
                            <div class="col-md-12 d-block d-sm-none"><img style="margin-top: -110px;width: 100%;" class="img-fluid" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/becas-bg-movil.webp" alt=""></div>
                            
                  </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="mask flex-center">
              <div class="container">
                  <div class="row">
                                   
                  </div>
              </div>
      
            </div>
          </div>
          <div class="carousel-item">
            <div class="mask flex-center">
              
              <div class="container">
                  <div class="row">
            
                  </div>
              </div>
      
            </div>
          </div>
          <div class="carousel-item">
              <div class="mask flex-center">
                
                <div class="container">
                    <div class="row">
                                   
                    </div>
                </div>
        
              </div>
            </div>
        </div>
      </div>
</section>
<section id="navegacion">
    <div class="container">
        <div class="row no-gutters">
            <div class="col"><a data-target="#informacion-programa" data-slide-to="0" class="active"><div class="col d-table"><div class="contenido d-table-cell align-middle">BECAS<br>INSTITUCIONALES</div></div></a></div>
            <div class="col"><a data-target="#informacion-programa" data-slide-to="2"><div class="col d-table"><div class="contenido d-table-cell align-middle">CONVENIOS <br> IEXE</div></div></a></div>
            <div class="col"><a data-target="#informacion-programa" data-slide-to="3"><div class="col d-table"><div class="contenido d-table-cell align-middle">CRÉDITOS ANTICIPADOS</div></div></a></div>
        </div>
    </div>
</section>
<section id="becas-slider">
            <div class="sliding">
                <div>
                    <div class="container">
                                <div class="row">
                                    <div class="col-md-6 offset-md-6">
                                        <!-- <h1 class="titulo">Beca Institucional IEXE</h1> -->
                                        <!-- <h2 class="description"></h2> -->
                                    </div>
                                </div>
                                <div class="row con-x">
                                    <div class="col-2 col-md-1 align-self-center"><img class="boton-atras" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/flecha-atras.png" alt=""></div>
                                    <div class="col-md-3 d-none d-sm-block">
                                        <img src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/beca_1.webp" alt="" class="beca">
                                    </div>
                                    <div class="col-8 col-md-5 offset-md-2">
                                        <h1 class="titulo">Beca Institucional IEXE</h1>
                                        <p class="descripcion-beca">Pensada en apoyar a los alumnos(as) sobresalientes,
                                            la Beca IEXE otorga un porcentaje que va del 20% al 70% en las colegiaturas de licenciaturas,
                                            maestrías y doctorado. Nuestros estudiantes y aspirantes pueden solicitarla todo el año.</p>
                                        <div class="botones-beca">
                                            <a class="btn btn-primario mt-3" href="#" data-toggle="modal" data-target="#modal-beca-IEXE">Solicítala aquí</a>
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-1 align-self-center float-right"><img class="boton-adelante float-right" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/flecha-adelante.png" alt=""></div>
                                </div>
                    </div>
                </div>
                <div>
                    <div class="container">
                                <div class="row">
                                    <div class="col-md-6 offset-md-5">
                                        <!-- <h1 class="titulo">Beca SEP</h1>
                                        <h2 class="description"></h2> -->
                                    </div>
                                </div>
                                <div class="row con-x">
                                    <div class="col-2 col-md-1 align-self-center"><img  class="boton-atras" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/flecha-atras.png" alt=""></div>
                                    <div class="col-md-3 d-none d-sm-block">
                                        <img src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/beca_4.webp" alt="" class="beca">
                                    </div>
                                    <div class=" col-8 col-md-3 offset-md-1">
                                        <h1 class="titulo">Beca SEP</h1>
                                        <p  class="descripcion-beca">Promovida por la Secretaría de Educación Pública,
                                             la convocatoria de la Beca SEP es publicada una vez al año y
                                              otorga porcentajes que van desde el 25% al 75% sobre la colegiatura.
                                              </p>
                                        <div class="botones-beca d-block d-sm-none">
                                            <a class="btn btn-primario mt-3 azules float-right" target="_blank" href="/wp-content/uploads/2021/09/CONVOCATORIA-FIRMADA-POR-EL-C.-SRIO.pdf">Convocatoria SEP</a>
                                            <a class="btn btn-primario mt-3 azules float-right" target="_blank" href="/wp-content/uploads/2021/09/FORMATO_DE_SOLICITUD_DE_BECA_CICLO_2021-2022-2.docx">Formato de solicitud</a>
                                            <a id="boton-sep" class="btn btn-primario mt-3 float-right" href="#" data-toggle="modal" data-target="#modal-beca-SEP">Solicítala aquí</a>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3 d-none d-sm-block">
                                        <div class="botones-beca">
                                            <a class="btn btn-primario mt-3 azules float-right" target="_blank" href="/wp-content/uploads/2021/09/CONVOCATORIA-FIRMADA-POR-EL-C.-SRIO.pdf">Convocatoria SEP</a>
                                            <a class="btn btn-primario mt-3 azules float-right" target="_blank" href="/wp-content/uploads/2021/09/FORMATO_DE_SOLICITUD_DE_BECA_CICLO_2021-2022-2.docx">Formato de solicitud</a>
                                            <a class="btn btn-primario mt-3 float-right" href="#" data-toggle="modal" data-target="#modal-beca-SEP">Solicítala aquí</a>
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-1 align-self-center float-right"><img class="boton-adelante float-right" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/flecha-adelante.png" alt=""></div>
                                </div>
                    </div>
                </div>
                <div>
                    <div class="container">
                                <div class="row">
                                    <div class="col-md-6 offset-md-6">
                                        <!-- <h1 class="titulo">Beca Embajadores IEXE</h1>
                                        <h2 class="description"></h2> -->
                                    </div>
                                </div>
                                <div class="row con-x">
                                    <div class="col-2 col-md-1 align-self-center"><img  class="boton-atras" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/flecha-atras.png" alt=""></div>
                                    <div class="col-md-3 d-none d-sm-block">
                                        <img src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/beca_3.webp" alt="" class="beca">
                                    </div>
                                    
                                    <div class="col-8 col-md-5 offset-md-2">
                                        <h1 class="titulo">Beca Embajadores IEXE</h1>
                                        <p  class="descripcion-beca">Diseñada para apoyar a los integrantes de la Comunidad IEXE,
                                            la Beca de embajadores IEXE otorga a nuestros alumnos(as) un beneficio acumulable
                                            por cada referido inscrito, por lo que se puede otorgar hasta un 100% de beca.</p>
                                            <div class="botones-beca">
                                                <a class="btn btn-primario mt-3" href="#" data-toggle="modal" data-target="#modal-beca-embajadores">Solicítala aquí</a>
                                        </div>
                                    </div>
                                    
                                    <div class="col-2 col-md-1 align-self-center"><img class="boton-adelante float-right" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/flecha-adelante.png" alt=""></div>
                                </div>
                    </div>
                </div>
                <div>
                    <div class="container">
                                <div class="row">
                                    <div class="col-md-6 offset-md-6">
                                        <!-- <h1 class="titulo">Beca Alianzas Estratégicas</h1>
                                        <h2 class="description"></h2> -->
                                    </div>
                                </div>
                                <div class="row con-x">
                                    <div class="col-2 col-md-1 align-self-center"><img  class="boton-atras" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/flecha-atras.png" alt=""></div>
                                    <div class="col-md-3 d-none d-sm-block">
                                        <img src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/beca_2.webp" alt="" class="beca">
                                    </div>
                                    <div class="col-8 col-md-5 offset-md-2">
                                        <h1 class="titulo">Beca Alianzas Estratégicas</h1>
                                        <p  class="descripcion-beca">Hemos realizado alianzas académicas con distintas instituciones públicas y privadas. Si perteneces a alguna de ellas, tú y tus familiares pueden solicitar una beca por medio de un convenio estratégico entre la universidad con la empresa donde laboras.</p>
                                        <div class="botones-beca">
                                            <a class="btn btn-primario mt-3" target="_blank" href="https://iexe.edu.mx/alianzas-academicas">Solicítala aquí</a>
                                        </div>
                                    </div>
                                    
                                    <div class="col-2 col-md-1 align-self-center"><img class="boton-adelante float-right" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/flecha-adelante.png" alt=""></div>
                                </div>
                    </div>
                </div>
            </div>  
    
</section>
<!-- <section id="inscripcion">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="bloque-inscripcion">
                    <h2 class="titulo">Requisitos de admisión</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy:</p>
                    <ul class="requisitos">
                        <li>Acta de nacimiento original.</li>
                        <li>Copia de CURP.</li>
                        <li>Certificado de término de bachillerato o preparatoria, debidamente legalizado (en caso de que se encuentre en trámite, constancia reciente donde lo avale).</li>
                    </ul>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="bloque-inscripcion azul">
                    <h2 class="titulo">Proceso de inscripción</h2>
                    <p>El primer paso para ingresar al programa es completar el formulario de inscripción. Una vez recibido nos pondremos en contacto para coordinar la entrevista (online).</p>
                    <p class="text-center">
                        <button type="submit" class="btn btn-primario mt-3">Quiero inscribirme</button>
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</section> -->

<?php get_template_part( 'template-parts/calcula-beca'); ?>

<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col col-md-12">
                <a class="d-none d-sm-block" href="/admisiones"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/banner_becas.webp" alt=""></a>
                <a class="d-block d-sm-none" href="/admisiones"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/banner-becas-movil.webp" alt=""></a>
            </div>
        </div>
    </div>
</section>

<!-- <section id="preguntas-frecuentes">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h1 class="preguntas-frecuentes">Preguntas frecuentes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p class="preguntas">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</p>
                <h2 class="tipo-beca">Categorías</h2>
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="opcion-tipo-becas active" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Becas</a>
                    <a class="opcion-tipo-becas" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Convenios</a>
                    <a class="opcion-tipo-becas" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Créditos Anticipados</a>
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
                                            ¿Encabezado o título de la pregunta que se debe responder?
                                            <span class="text-right ver-mas"><i class="uil uil-plus"></i><i class="uil uil-minus"></i></span>
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Quiere la boca exhausta vid, kiwi, piña y fugaz jamón. Fabio me exige, sin tapujos, que añada cerveza al whisky. Jovencillo emponzoñado de whisky, ¡qué figurota exhibes! La cigüeña tocaba cada vez mejor el saxofón y el búho pedía kiwi y queso. El jefe buscó el éxtasis en un imprevisto baño de whisky y gozó como un duque. Exhíbanse politiquillos zafios, con orejas kilométricas y uñas de gavilán. El cadáver de Wamba, rey godo de España, fue exhumado y trasladado en una caja de zinc que pesó un kilo.</p>
                                    </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        ¿Encabezado o título de la pregunta que se debe responder?
                                        <span class="text-right ver-mas"><i class="uil uil-plus"></i><i class="uil uil-minus"></i></span>
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Quiere la boca exhausta vid, kiwi, piña y fugaz jamón. Fabio me exige, sin tapujos, que añada cerveza al whisky. Jovencillo emponzoñado de whisky, ¡qué figurota exhibes! La cigüeña tocaba cada vez mejor el saxofón y el búho pedía kiwi y queso. El jefe buscó el éxtasis en un imprevisto baño de whisky y gozó como un duque. Exhíbanse politiquillos zafios, con orejas kilométricas y uñas de gavilán. El cadáver de Wamba, rey godo de España, fue exhumado y trasladado en una caja de zinc que pesó un kilo.</p>
                                    </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        ¿Encabezado o título de la pregunta que se debe responder?
                                        <span class="text-right ver-mas"><i class="uil uil-plus"></i><i class="uil uil-minus"></i></span>
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Quiere la boca exhausta vid, kiwi, piña y fugaz jamón. Fabio me exige, sin tapujos, que añada cerveza al whisky. Jovencillo emponzoñado de whisky, ¡qué figurota exhibes! La cigüeña tocaba cada vez mejor el saxofón y el búho pedía kiwi y queso. El jefe buscó el éxtasis en un imprevisto baño de whisky y gozó como un duque. Exhíbanse politiquillos zafios, con orejas kilométricas y uñas de gavilán. El cadáver de Wamba, rey godo de España, fue exhumado y trasladado en una caja de zinc que pesó un kilo.</p>
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
                                            ¿Encabezado o título de la pregunta que se debe responder?
                                            <span class="text-right ver-mas"><i class="uil uil-plus"></i><i class="uil uil-minus"></i></span>
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseOne-2" class="collapse" aria-labelledby="headingOne-2" data-parent="#accordion-2">
                                    <div class="card-body">
                                        <p>Quiere la boca exhausta vid, kiwi, piña y fugaz jamón. Fabio me exige, sin tapujos, que añada cerveza al whisky. Jovencillo emponzoñado de whisky, ¡qué figurota exhibes! La cigüeña tocaba cada vez mejor el saxofón y el búho pedía kiwi y queso. El jefe buscó el éxtasis en un imprevisto baño de whisky y gozó como un duque. Exhíbanse politiquillos zafios, con orejas kilométricas y uñas de gavilán. El cadáver de Wamba, rey godo de España, fue exhumado y trasladado en una caja de zinc que pesó un kilo.</p>
                                    </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo-2">
                                    <h2 class="mb-0">
                                        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
                                        ¿Encabezado o título de la pregunta que se debe responder?
                                        <span class="text-right ver-mas"><i class="uil uil-plus"></i><i class="uil uil-minus"></i></span>
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseTwo-2" class="collapse" aria-labelledby="headingTwo-2" data-parent="#accordion-2">
                                    <div class="card-body">
                                        <p>Quiere la boca exhausta vid, kiwi, piña y fugaz jamón. Fabio me exige, sin tapujos, que añada cerveza al whisky. Jovencillo emponzoñado de whisky, ¡qué figurota exhibes! La cigüeña tocaba cada vez mejor el saxofón y el búho pedía kiwi y queso. El jefe buscó el éxtasis en un imprevisto baño de whisky y gozó como un duque. Exhíbanse politiquillos zafios, con orejas kilométricas y uñas de gavilán. El cadáver de Wamba, rey godo de España, fue exhumado y trasladado en una caja de zinc que pesó un kilo.</p>
                                    </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree-2">
                                    <h2 class="mb-0">
                                        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree-2" aria-expanded="false" aria-controls="collapseThree-2">
                                        ¿Encabezado o título de la pregunta que se debe responder?
                                        <span class="text-right ver-mas"><i class="uil uil-plus"></i><i class="uil uil-minus"></i></span>
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapseThree-2" class="collapse" aria-labelledby="headingThree-2" data-parent="#accordion-2">
                                    <div class="card-body">
                                        <p>Quiere la boca exhausta vid, kiwi, piña y fugaz jamón. Fabio me exige, sin tapujos, que añada cerveza al whisky. Jovencillo emponzoñado de whisky, ¡qué figurota exhibes! La cigüeña tocaba cada vez mejor el saxofón y el búho pedía kiwi y queso. El jefe buscó el éxtasis en un imprevisto baño de whisky y gozó como un duque. Exhíbanse politiquillos zafios, con orejas kilométricas y uñas de gavilán. El cadáver de Wamba, rey godo de España, fue exhumado y trasladado en una caja de zinc que pesó un kilo.</p>
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
</section> -->
<div class="container">
    <div class="row">
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-beca-IEXE">
        Botón
    </button> -->

<!-- Modal BECA IEXE-->
<div class="modal fade" id="modal-beca-IEXE" tabindex="-1" aria-labelledby="modal-beca-IEXELabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title titulo" id="modal-beca-IEXELabel">Formulario Beca IEXE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <p class="description">Rellena el siguiente formulario y recibirás un mail de confirmación. Toda solicitud de beca debe ser avalada y aprobada por la institución correspondiente.</p>
                </div>
            </div>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                <input placeholder="Tu Nombre completo*" type="text" class="form-control" name="nombre" id="nombre" required>
                </div>
                <div class="form-group col-md-6">
                <input type="email" class="form-control" placeholder="Tu Correo electrónico*" name="email" id="correo" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <input placeholder="Teléfono móvil*" id="telefono-iexe" type="text" class="form-control" name="telefono" required>
                </div>
                <div class="form-group col-md-6">
                <select class="form-control" name="programa" required>
                    <option value="">- Programa académico de interés -</option>
                    <optgroup label="Licenciaturas">              
                        <option value="Licenciatura en Ciencias Políticas y Administración Pública">Ciencias Políticas y Administración Pública</option>
                        <option value="Licenciatura en Seguridad Pública">Seguridad Pública</option>
                        <option value="Licenciatura en Administración de Empresas">Administración de Empresas</option>
                        <option value="Licenciatura en Derecho">Derecho</option>
                    </optgroup>          
                    <optgroup label="Maestrías">  
                        <option value="Maestría en Finanzas Públicas">Finanzas Públicas</option>
                        <option value="Maestría en Administración y Políticas Públicas">Administración y Políticas Públicas</option>
                        <option value="Maestría en Evaluación de Políticas Públicas">Evaluación de Políticas Públicas</option>
                        <option value="Maestría en Seguridad Pública y Políticas Públicas">Seguridad Pública y Políticas Públicas</option>
                        <option value="Maestría en Administración de Negocios">Administración de Negocios</option>
                        <option value="Maestría en Tecnologías de la Información">Tecnologías de la Información</option>
                    </optgroup>
                    <optgroup label="Diplomados">
                        <option value="Diplomado en Alta Dirección en la Función Pública">Alta Dirección en la Función Pública</option>
                        <option value="Diplomado en Análisis y Diseño de Políticas Públicas">Análisis y Diseño de Políticas Públicas</option>																
                        <option value="Diplomado Evaluación de Políticas Publicas">Evaluación de Políticas Públicas</option>
                        <option value="Diplomado Disciplina Financiera y Fiscalización">Disciplina Financiera y Fiscalización</option>
                        <option value="Diplomado en Presupuesto basado en Resultados y Sistema de Evaluación del Desempeño">Presupuesto basado en Resultados y Sistema de Evaluación del Desempeño</option>
                        <option value="Diplomado en Habilidades Gerenciales">Diplomado en habilidades Gerenciales y Liderazgo</option>
                    </optgroup>
                    <optgroup label="Doctorado">
                        <option value="Doctorado en Políticas Públicas">Doctorado en Políticas Públicas</option>
                    </optgroup>
                    <optgroup label="Master">
                        <option value="Innovación y Gestión Educativa">Innovación y Gestión Educativa</option>
                        <option value="Ciencia de Datos Aplicada">Ciencia de Datos Aplicada</option>
                    </optgroup>
                </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primario float-right">Enviar</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal BECA SEP-->
<div class="modal fade" id="modal-beca-SEP" tabindex="-1" aria-labelledby="modal-beca-SEPLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title titulo" id="modal-beca-SEPLabel">Formulario Beca SEP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <p class="description">Rellena el siguiente formulario y recibirás un mail de confirmación. Toda solicitud de beca debe ser avalada y aprobada por la institución correspondiente.</p>
                </div>
            </div>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                <input placeholder="Tu Nombre completo*" type="text" class="form-control" name="nombre" id="nombre" required>
                </div>
                <div class="form-group col-md-6">
                <input type="email" class="form-control" placeholder="Tu Correo electrónico*" name="email" id="correo" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <input placeholder="Teléfono móvil*" id="telefono-sep" type="text" class="form-control" name="telefono" required>
                </div>
                <div class="form-group col-md-6">
                <select class="form-control" name="programa" required>
                    <option value="">- Programa académico de interés -</option>
                    <optgroup label="Licenciaturas">              
                        <option value="Licenciatura en Ciencias Políticas y Administración Pública">Ciencias Políticas y Administración Pública</option>
                        <option value="Licenciatura en Seguridad Pública">Seguridad Pública</option>
                        <option value="Licenciatura en Administración de Empresas">Administración de Empresas</option>
                        <option value="Licenciatura en Derecho">Derecho</option>
                    </optgroup>          
                    <optgroup label="Maestrías">  
                        <option value="Maestría en Finanzas Públicas">Finanzas Públicas</option>
                        <option value="Maestría en Administración y Políticas Públicas">Administración y Políticas Públicas</option>
                        <option value="Maestría en Evaluación de Políticas Públicas">Evaluación de Políticas Públicas</option>
                        <option value="Maestría en Seguridad Pública y Políticas Públicas">Seguridad Pública y Políticas Públicas</option>
                        <option value="Maestría en Administración de Negocios">Administración de Negocios</option>
                        <option value="Maestría en Tecnologías de la Información">Tecnologías de la Información</option>
                    </optgroup>
                    <optgroup label="Diplomados">
                        <option value="Diplomado en Alta Dirección en la Función Pública">Alta Dirección en la Función Pública</option>
                        <option value="Diplomado en Análisis y Diseño de Políticas Públicas">Análisis y Diseño de Políticas Públicas</option>																
                        <option value="Diplomado Evaluación de Políticas Publicas">Evaluación de Políticas Públicas</option>
                        <option value="Diplomado Disciplina Financiera y Fiscalización">Disciplina Financiera y Fiscalización</option>
                        <option value="Diplomado en Presupuesto basado en Resultados y Sistema de Evaluación del Desempeño">Presupuesto basado en Resultados y Sistema de Evaluación del Desempeño</option>
                        <option value="Diplomado en Habilidades Gerenciales">Diplomado en habilidades Gerenciales y Liderazgo</option>
                    </optgroup>
                    <optgroup label="Doctorado">
                        <option value="Doctorado en Políticas Públicas">Doctorado en Políticas Públicas</option>
                    </optgroup>
                    <optgroup label="Master">
                        <option value="Innovación y Gestión Educativa">Innovación y Gestión Educativa</option>
                        <option value="Ciencia de Datos Aplicada">Ciencia de Datos Aplicada</option>
                    </optgroup>
                </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primario float-right">Enviar</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal BECA Embajadores-->
<div class="modal fade" id="modal-beca-embajadores" tabindex="-1" aria-labelledby="modal-beca-embajadoresLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title titulo" id="modal-beca-embajadoresLabel">Formulario Beca Embajadores IEXE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <p class="description">Rellena el siguiente formulario y recibirás un mail de confirmación. Toda solicitud de beca debe ser avalada y aprobada por la institución correspondiente.</p>
                </div>
            </div>
        <form>
            <div class="form-row">
                <div class="form-group col-md-5">
                <input placeholder="Tu Nombre completo*" type="text" class="form-control" name="nombre" id="nombre" required>
                </div>
                <div class="form-group col-md-3">
                    <input type="email" class="form-control" placeholder="Tu Correo electrónico*" name="email" id="correo" required>
                </div>
                <div class="form-group col-md-4">
                    <input placeholder="Teléfono móvil*" id="telefono-embajadores" type="tel" class="form-control" name="telefono" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <input placeholder="Nombre del Estudiante que te recomienda*" type="text" class="form-control" name="estudiante-recomendado" required>
                </div>
                <div class="form-group col-md-7">
                    <select class="form-control" name="programa" required>
                        <option value="">- Programa académico de interés -</option>
                        <optgroup label="Licenciaturas">              
                            <option value="Licenciatura en Ciencias Políticas y Administración Pública">Ciencias Políticas y Administración Pública</option>
                            <option value="Licenciatura en Seguridad Pública">Seguridad Pública</option>
                            <option value="Licenciatura en Administración de Empresas">Administración de Empresas</option>
                            <option value="Licenciatura en Derecho">Derecho</option>
                        </optgroup>          
                        <optgroup label="Maestrías">  
                            <option value="Maestría en Finanzas Públicas">Finanzas Públicas</option>
                            <option value="Maestría en Administración y Políticas Públicas">Administración y Políticas Públicas</option>
                            <option value="Maestría en Evaluación de Políticas Públicas">Evaluación de Políticas Públicas</option>
                            <option value="Maestría en Seguridad Pública y Políticas Públicas">Seguridad Pública y Políticas Públicas</option>
                            <option value="Maestría en Administración de Negocios">Administración de Negocios</option>
                            <option value="Maestría en Tecnologías de la Información">Tecnologías de la Información</option>
                        </optgroup>
                        <optgroup label="Diplomados">
                            <option value="Diplomado en Alta Dirección en la Función Pública">Alta Dirección en la Función Pública</option>
                            <option value="Diplomado en Análisis y Diseño de Políticas Públicas">Análisis y Diseño de Políticas Públicas</option>																
                            <option value="Diplomado Evaluación de Políticas Publicas">Evaluación de Políticas Públicas</option>
                            <option value="Diplomado Disciplina Financiera y Fiscalización">Disciplina Financiera y Fiscalización</option>
                            <option value="Diplomado en Presupuesto basado en Resultados y Sistema de Evaluación del Desempeño">Presupuesto basado en Resultados y Sistema de Evaluación del Desempeño</option>
                            <option value="Diplomado en Habilidades Gerenciales">Diplomado en habilidades Gerenciales y Liderazgo</option>
                        </optgroup>
                        <optgroup label="Doctorado">
                            <option value="Doctorado en Políticas Públicas">Doctorado en Políticas Públicas</option>
                        </optgroup>
                        <optgroup label="Master">
                            <option value="Innovación y Gestión Educativa">Innovación y Gestión Educativa</option>
                            <option value="Ciencia de Datos Aplicada">Ciencia de Datos Aplicada</option>
                        </optgroup>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primario float-right">Enviar</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>

    </div>
</div>
<script>
    var input = document.querySelector("#telefono-iexe");
    window.intlTelInput(input, {
      localizedCountries: { 'us': 'Estados Unidos' },
      preferredCountries: ['mx','co', 'cr', 'py', 'pe' , 'ec', 'us' ],
      separateDialCode: true,
      utilsScript: "<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/utils.js",
    });
    var input = document.querySelector("#telefono-sep");
    window.intlTelInput(input, {
      localizedCountries: { 'us': 'Estados Unidos' },
      preferredCountries: ['mx','co', 'cr', 'py', 'pe' , 'ec', 'us' ],
      separateDialCode: true,
      utilsScript: "<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/utils.js",
    });
    var input = document.querySelector("#telefono-embajadores");
    window.intlTelInput(input, {
      localizedCountries: { 'us': 'Estados Unidos' },
      preferredCountries: ['mx','co', 'cr', 'py', 'pe' , 'ec', 'us' ],
      separateDialCode: true,
      utilsScript: "<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/utils.js",
    });
  </script>
<?php get_template_part( 'template-parts/comunidad', 'comunidad-iexe' ); ?>
<?php get_template_part( 'template-parts/vinculos'); ?>
<?php get_footer( ); ?>
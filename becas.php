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
        <a class="carousel-control-prev" href="#informacion-programa" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#informacion-programa" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> 
      </div>
</section>
<section id="navegacion">
    <div class="container">
        <div class="row no-gutters">
            <div class="col"><a data-target="#informacion-programa" data-slide-to="0" class="active"><div class="col d-table"><div class="contenido d-table-cell align-middle">BECAS<br>INSTITUCIONALES</div></div></a></div>
            <div class="col"><a data-target="#informacion-programa" data-slide-to="1"><div class="col d-table"><div class="contenido d-table-cell align-middle">PREGUNTAS FRECUENTES</div></div></a></div>
            <div class="col"><a data-target="#informacion-programa" data-slide-to="2"><div class="col d-table"><div class="contenido d-table-cell align-middle">CONVENIOS <br> IEXE</div></div></a></div>
            <div class="col"><a data-target="#informacion-programa" data-slide-to="3"><div class="col d-table"><div class="contenido d-table-cell align-middle">CRÉDITOS ANTICIPADOS</div></div></a></div>
        </div>
    </div>
</section>
<section id="beca-institucional">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="titulo-plan text-center">Beca institucional IEXE</h1>
                <h2 class="description text-center">Elige el programa en el que desas inscribirte para ver todo el proceso.</h2>
            </div>
        </div>
        <div class="row">
        

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

<section id="calcula-beca">
    <div class="container">
        <div class="row beca">
            <div class="col">
                <h1 class="titulo">¡Calcula el monto de tu beca!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/escudo-becas.webp" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <p>Someday is not a fucking day of the week. Whatever can be captured in words can be conquered with understanding. Defy fucking convention. If you don’t test your will against the dissent of the world, it can never grow stronger.</p>
                <div id="pasos-formulario" class="">
                    <ul id="progressbar">
                        <li class="active">Paso</li>
                        <li>Paso</li>
                        <li>Paso</li>
                    </ul>

                </div>
                <form id="calcula-beca">
                    <!-- progressbar -->
                    <!-- <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <label class="fieldlabels">Nombre</label> <input type="text" name="uname" placeholder="Ingresa aquí tu nombre" /><label class="fieldlabels">Email: *</label> <input type="email" name="email" placeholder="Ingresa aquí tu correo electrónico" /><label class="fieldlabels">Teléfono: *</label> <input type="email" name="email" placeholder="Ingresa aquí tu número telefónico" />
                            <div class="row">
                                <div class="col-7">
                                    <!-- <h2 class="fs-title">Account Information:</h2> -->
                                </div>
                                <div class="col-5">
                                    <!-- <h2 class="steps">Paso 1 - 4</h2> -->
                                </div>
                            </div> 
                        </div> 
                        
                        <button type="button" name="next" class="next btn btn-primario float-right mt-3">Siguiente</button>
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            
                            <label class="fieldlabels">Nombre: *</label> <input type="text" name="fname" placeholder="Nombre" /> <label class="fieldlabels">Apellido *</label> <input type="text" name="apellido" placeholder="Last Name" /> <label class="fieldlabels">Teléfono: *</label> <input type="text" name="tel" placeholder="Teléfono" />
                            <div class="row">
                                <div class="col-7">
                                    <!-- <h2 class="fs-title">Personal Information:</h2> -->
                                </div>
                                <div class="col-5">
                                    <!-- <h2 class="steps">Paso 2 - 4</h2> -->
                                </div>
                            </div>
                        </div>
                        <button type="button" name="next" class="next btn btn-primario float-right mt-3">Siguiente</button> <!--<button type="button" name="previous" class="previous btn btn-primario float-right mt-3">Anterior</button>  -->
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <!-- <h2 class="fs-title">Image Upload:</h2> -->
                                </div>
                                <div class="col-5">
                                    <!-- <h2 class="steps">paso 3 - 4</h2> -->
                                </div>
                            </div> <label class="fieldlabels">Tu INE:</label> <input type="file" name="pic" accept="image/*"> <label class="fieldlabels">Tu comprobante:</label> <input type="file" name="pic" accept="image/*">
                        </div> 
                         <button type="button" name="next" class="next btn btn-primario float-right mt-3">Generar</button><!-- <input type="button" name="next" class="next action-button" value="Generar" /> <input type="button" name="previous" class="previous action-button-previous" value="Anterior" /> -->
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <h2 class="text-center"><strong>Esta es la beca a la que podrás acceder</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>

                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="text-center">*Sujeto a la revisión del equipo correspondiente de IEXE</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
                
            </div>
        </div>
    </div>
</section>
<section id="anuncio">
    <div class="container">
        <div class="row">
            <div class="col">
            <a href="#"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/banner.webp" class="img-fluid" alt=""></a>
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
                <p class="preguntas">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</p>
                <h2 class="tipo-beca">Categorías</h2>
                <a class="opcion-tipo-becas" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Becas</a><br>
                <a class="opcion-tipo-becas" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Convenios</a><br>
                <a class="opcion-tipo-becas" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Créditos Anticipados</a><br>
            </div>
            <div class="col-md-8">
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
                <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">Becas</div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">Convenios</div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">Créditos Anticipados</div>
    </div>

            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/comunidad', 'comunidad-iexe' ); ?>
<?php get_template_part( 'template-parts/vinculos'); ?>
<?php get_footer( ); ?>
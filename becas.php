<?php
/*
Template Name: Becas
*/
?>
<?php get_header( ); ?>
<?php 
$banner = get_field('banner_pagina_principal', 3505);
$bannerMovil = get_field('banner_pagina_principal_movil', 3505);
?>
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
          <!-- <div class="carousel-item">
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
            </div> -->
        </div>
      </div>
</section>
<section id="navegacion">
    <div class="container">
        <div class="row no-gutters">
            <div class="col"><a data-target="#informacion-programa" data-slide-to="0" class="active"><div class="col d-table"><div class="contenido d-table-cell align-middle">BECAS<br>INSTITUCIONALES</div></div></a></div>
            <div class="col"><a data-target="#informacion-programa" data-slide-to="2"><div class="col d-table"><div class="contenido d-table-cell align-middle">CONVENIOS <br> IEXE</div></div></a></div>
            <div class="col"><a data-target="#informacion-programa" data-slide-to="3"><div class="col d-table"><div class="contenido d-table-cell align-middle">CR??DITOS ANTICIPADOS</div></div></a></div>
        </div>
    </div>
</section>
<section id="becas-slider">
            <div class="sliding">
                <div>
                    <div class="container">
                                <div class="row con-x">
                                    <div class="col-2 col-md-1 align-self-center"><img  class="boton-atras" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/flecha-atras.svg" alt=""></div>
                                    <div class="col-md-3 d-none d-sm-block">
                                        <img src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/beca_convenios.webp" alt="" class="beca">
                                    </div>
                                    <div class="col-8 col-md-5 offset-md-2">
                                        <h1 class="titulo">Beca por Convenio IEXE</h1>
                                        <p  class="descripcion-beca">Contamos con diversos <strong>convenios</strong> tanto con <strong>instituciones p??blicas</strong> como <strong>privadas</strong>, si perteneces a alguna, podr??s obtener <strong>becas especiales</strong> para ti y tu familia, as?? como otros beneficios ??Consulta la lista de convenios y con??celos!</p>
                                        <div class="botones-beca">
                                            <a class="btn mt-3 btn-primario" href="#" data-toggle="modal" data-target="#modal-beca-convenios">??Cont??ctanos!</a>
                                        </div>
                                    </div>
                                    
                                    <div class="col-2 col-md-1 align-self-center"><img class="boton-adelante float-right" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/flecha-adelante.svg" alt=""></div>
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
                                        <div class="col-2 col-md-1 align-self-center"><img  class="boton-atras" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/flecha-atras.svg" alt=""></div>
                                        <div class="col-md-3 d-none d-sm-block">
                                            <img src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/beca_4.webp" alt="" class="beca">
                                        </div>
                                        <div class=" col-8 col-md-3 offset-md-1">
                                            <h1 class="titulo">Beca SEP</h1>
                                            <p  class="descripcion-beca">Promovida por la Secretar??a de Educaci??n P??blica,
                                                la convocatoria de la Beca SEP es publicada una vez al a??o y
                                                otorga porcentajes que van <strong> desde el 25% al 75% sobre la colegiatura. </strong>
                                                </p>
                                            <div class="botones-beca d-block d-sm-none">
                                                <a class="btn btn-primario mt-3 azules float-right" target="_blank" href="/wp-content/uploads/2022/05/SEP_convocatoria_particulares_2022-2023_-1.pdf">Convocatoria SEP</a>
                                                <a class="btn btn-primario mt-3 azules float-right" target="_blank" href="/wp-content/uploads/2022/05/10.-SOLICITUD-DE-BECA-PARA-EL-CICLO-ESCOLAR-2022-2023.pdf">Formato de solicitud</a>
                                                <a id="boton-sep" class="btn btn-primario mt-3 float-right" href="#" data-toggle="modal" data-target="#modal-beca-SEP">Solic??tala aqu??</a>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-3 d-none d-sm-block">
                                            <div class="botones-beca">
                                                <a class="btn btn-primario mt-3 azules float-right" target="_blank" href="/wp-content/uploads/2022/05/SEP_convocatoria_particulares_2022-2023_-1.pdf">Convocatoria SEP</a>
                                                <a class="btn btn-primario mt-3 azules float-right" target="_blank" href="/wp-content/uploads/2022/05/10.-SOLICITUD-DE-BECA-PARA-EL-CICLO-ESCOLAR-2022-2023.pdf">Formato de solicitud</a>
                                                <a class="btn btn-primario mt-3 float-right" href="#" data-toggle="modal" data-target="#modal-beca-SEP">Solic??tala aqu??</a>
                                            </div>
                                        </div>
                                        <div class="col-2 col-md-1 align-self-center float-right"><img class="boton-adelante float-right" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/flecha-adelante.svg" alt=""></div>
                                    </div>
                        </div>
                </div>
                <div>
                    <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 offset-md-6">
                                            <!-- <h1 class="titulo">Beca Institucional IEXE</h1> -->
                                            <!-- <h2 class="description"></h2> -->
                                        </div>
                                    </div>
                                    <div class="row con-x">
                                        <div class="col-2 col-md-1 align-self-center"><img class="boton-atras" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/flecha-atras.svg" alt=""></div>
                                        <div class="col-md-3 d-none d-sm-block">
                                            <img src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/beca_1.webp" alt="" class="beca">
                                        </div>
                                        <div class="col-8 col-md-5 offset-md-2">
                                            <h1 class="titulo">Beca Institucional IEXE</h1>
                                            <p class="descripcion-beca">Pensada en apoyar a los alumnos sobresalientes,
                                                la Beca IEXE otorga un porcentaje que va <strong>del 20% al 70% en las colegiaturas de licenciaturas,
                                                maestr??as, m??steres y doctorado.</strong> Nuestros estudiantes y aspirantes pueden solicitarla todo el a??o.</p>
                                            <div class="botones-beca">
                                                <a class="btn btn-primario mt-3" href="#" data-toggle="modal" data-target="#modal-beca-IEXE">Solic??tala aqu??</a>
                                            </div>
                                        </div>
                                        <div class="col-2 col-md-1 align-self-center float-right"><img class="boton-adelante float-right" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/flecha-adelante.svg" alt=""></div>
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
                                    <div class="col-2 col-md-1 align-self-center"><img  class="boton-atras" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/flecha-atras.svg" alt=""></div>
                                    <div class="col-md-3 d-none d-sm-block">
                                        <img src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/beca_3.webp" alt="" class="beca">
                                    </div>
                                    
                                    <div class="col-8 col-md-5 offset-md-2">
                                        <h1 class="titulo">Beca Embajadores IEXE</h1>
                                        <p  class="descripcion-beca">Dise??ada para apoyar a los integrantes de la Comunidad IEXE,
                                            la Beca de embajadores IEXE otorga a nuestros alumnos un beneficio acumulable
                                            por cada referido inscrito, por lo que se <strong> puede otorgar hasta un 100% de beca.</strong></p>
                                            <div class="botones-beca">
                                                <a class="btn btn-primario mt-3" href="#" data-toggle="modal" data-target="#modal-beca-embajadores">Solic??tala aqu??</a>
                                        </div>
                                    </div>
                                    
                                    <div class="col-2 col-md-1 align-self-center"><img class="boton-adelante float-right" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/flecha-adelante.svg" alt=""></div>
                                </div>
                    </div>
                </div>
                <!-- <div>
                    <div class="container">
                                <div class="row">
                                    <div class="col-md-6 offset-md-6">
                                         <h1 class="titulo">Beca Alianzas Estrat??gicas</h1>
                                        <h2 class="description"></h2> 
                                    </div>
                                </div>
                                <div class="row con-x">
                                    <div class="col-2 col-md-1 align-self-center"><img  class="boton-atras" src="<?php // echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/flecha-atras.svg" alt=""></div>
                                    <div class="col-md-3 d-none d-sm-block">
                                        <img src="<?php // echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/beca_2.webp" alt="" class="beca">
                                    </div>
                                    <div class="col-8 col-md-5 offset-md-2">
                                        <h1 class="titulo">Beca Alianzas Estrat??gicas</h1>
                                        <p  class="descripcion-beca">Hemos realizado alianzas acad??micas con <strong>distintas instituciones p??blicas y privadas.</strong>  Si perteneces a alguna de ellas, t?? y tus familiares pueden solicitar una beca por medio de un convenio estrat??gico entre la universidad y la empresa donde laboras.</p>
                                        <div class="botones-beca">
                                            <a class="btn btn-primario mt-3" target="_blank" href="https://iexe.edu.mx/alianzas-academicas">Solic??tala aqu??</a>
                                        </div>
                                    </div>
                                    
                                    <div class="col-2 col-md-1 align-self-center"><img class="boton-adelante float-right" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/flecha-adelante.svg" alt=""></div>
                                </div>
                    </div>
                </div> -->
                
            </div>  
    
</section>
    <section id="banners">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <?php
                        if( !empty( $banner ) ): ?>
                            <a href="/admisiones"><img loading="lazy" src="<?php echo esc_url($banner['url']); ?>" class="d-none d-sm-block img-fluid banners" alt="<?php echo esc_attr($banner['alt']); ?>" /></a>
                        <?php endif; ?>
                        <?php
                        if( !empty( $bannerMovil ) ): ?>
                            <a href="/admisiones"><img loading="lazy" src="<?php echo esc_url($bannerMovil['url']); ?>" class="d-block d-sm-none img-fluid banners" alt="<?php echo esc_attr($bannerMovil['alt']); ?>" /></a>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php get_template_part( 'template-parts/calcula-beca', null, array(
    'porcentaje' =>  $porcentajeBeca
)); ?>

<section id="banner-xpresa">
    <div class="container">
        <div class="row">
            <div class="col col-md-12">
                <a class="d-none d-sm-block" href="https://www.tiktok.com/@iexeuniversidad" target="_blank"><img class="img-fluid redondear" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Banner_IEXE_Interno-TikTok.webp" alt=""></a>
                <a class="d-block d-sm-none" href="https://www.tiktok.com/@iexeuniversidad" target="_blank"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Banner_r_TikTok.webp" alt=""></a>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-beca-IEXE">
        Bot??n
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
                    <p class="description">Rellena el siguiente formulario y recibir??s un mail de confirmaci??n. Toda solicitud de beca debe ser avalada y aprobada por la instituci??n correspondiente.</p>
                </div>
            </div>
            <form id="beca-iexe" method="POST" data-origen="Formulario Beca IEXE" action="">
            <div class="form-row">
                <div class="form-group col-md-6">
                <input placeholder="Tu Nombre completo*" type="text" class="form-control" name="nombre" id="nombre" required>
                </div>
                <div class="form-group col-md-6">
                <input type="email" class="form-control" placeholder="Tu Correo electr??nico*" name="email" id="correo" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <input placeholder="Tel??fono m??vil*" id="telefono-beca-iexe" type="text" class="form-control" name="telefono" required>
                </div>
                <div class="form-group col-md-6">
                <select class="form-control" name="programa" required>
                    <option name="programa" value="">- Programa acad??mico de inter??s -</option>
                    <optgroup label="Licenciaturas">              
                        <option value="LCP">Ciencias Pol??ticas y Administraci??n P??blica</option>
                        <option value="LSP">Seguridad P??blica</option>
                        <option value="LAE">Administraci??n de Empresas</option>
                        <option value="LD">Derecho</option>
                    </optgroup>          
                    <optgroup label="Maestr??as">  
                        <option value="MFP">Finanzas P??blicas</option>
                        <option value="MAPP">Administraci??n y Pol??ticas P??blicas</option>
                        <option value="MEPP">Evaluaci??n de Pol??ticas P??blicas</option>
                        <option value="MSPP">Seguridad P??blica y Pol??ticas P??blicas</option>
                        <option value="MBAT">Administraci??n de Negocios</option>
                        <option value="MITIC">Tecnolog??as de la Informaci??n</option>
                    </optgroup>
                    <optgroup label="Diplomados">
                        <option value="DADFP">Alta Direcci??n en la Funci??n P??blica</option>
                        <option value="DADPP">An??lisis y Dise??o de Pol??ticas P??blicas</option>																
                        <option value="MEPP">Evaluaci??n de Pol??ticas P??blicas</option>
                        <option value="DDFF">Disciplina Financiera y Fiscalizaci??n</option>
                        <option value="DPRSED">Presupuesto basado en Resultados y Sistema de Evaluaci??n del Desempe??o</option>
                        <option value="DHG">Diplomado en habilidades Gerenciales y Liderazgo</option>
                    </optgroup>
                    <optgroup label="Doctorado">
                        <option value="DOC">Doctorado en Pol??ticas P??blicas</option>
                    </optgroup>
                    <optgroup label="Master">
                        <option value="MMPOP">Marketing Pol??tico y Opini??n P??blica</option>
                        <option value="MAG">Auditor??a Gubernamental</option>
                        <option value="MSPAJ">Sistema Penal Acusatorio y Juicio Oral </option>
                        <option value="MAIS">Administraci??n de Instituciones de Salud</option>
                        <option value="MGPM">Gesti??n P??blica Municipal</option>
                        <option value="MCDA">Ciencia de Datos Aplicada</option>
                        <option value="MIGE">Innovaci??n y Gesti??n Educativa</option>
                    </optgroup>
                </select>
                </div>
            </div>
            <button type="button" onclick="enviarFormulario(this)" class="btn btn-primario float-right ld-ext-right">Enviar<div class="ld ld-ring ld-spin"></div></button>
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
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="description">Rellena el siguiente formulario y recibir??s un mail de confirmaci??n. Toda solicitud de beca debe ser avalada y aprobada por la instituci??n correspondiente.</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <form id="forma-beca-SEP" method="POST" data-origen="formulario Beca SEP" action="">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <input placeholder="Tu Nombre completo*" type="text" class="form-control" name="nombre" id="nombre" required>
                        </div>
                        <div class="form-group col-md-6">
                        <input type="email" class="form-control" placeholder="Tu Correo electr??nico*" name="email" id="correo" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <input placeholder="Tel??fono m??vil*" id="telefono-sep" type="text" class="form-control" name="telefono" required>
                        </div>
                        <div class="form-group col-md-6">
                            <select class="form-control" name="programa" required>
                                <option name="programa" value="">- Programa acad??mico de inter??s -</option>
                                <optgroup label="Licenciaturas">              
                                    <option value="LCP">Ciencias Pol??ticas y Administraci??n P??blica</option>
                                    <option value="LSP">Seguridad P??blica</option>
                                    <option value="LAE">Administraci??n de Empresas</option>
                                    <option value="LD">Derecho</option>
                                </optgroup>          
                                <optgroup label="Maestr??as">  
                                    <option value="MFP">Finanzas P??blicas</option>
                                    <option value="MAPP">Administraci??n y Pol??ticas P??blicas</option>
                                    <option value="MEPP">Evaluaci??n de Pol??ticas P??blicas</option>
                                    <option value="MSPP">Seguridad P??blica y Pol??ticas P??blicas</option>
                                    <option value="MBAT">Administraci??n de Negocios</option>
                                    <option value="MITIC">Tecnolog??as de la Informaci??n</option>
                                </optgroup>
                                <optgroup label="Diplomados">
                                    <option value="DADFP">Alta Direcci??n en la Funci??n P??blica</option>
                                    <option value="DADPP">An??lisis y Dise??o de Pol??ticas P??blicas</option>																
                                    <option value="MEPP">Evaluaci??n de Pol??ticas P??blicas</option>
                                    <option value="DDFF">Disciplina Financiera y Fiscalizaci??n</option>
                                    <option value="DPRSED">Presupuesto basado en Resultados y Sistema de Evaluaci??n del Desempe??o</option>
                                    <option value="DHG">Diplomado en habilidades Gerenciales y Liderazgo</option>
                                </optgroup>
                                <optgroup label="Doctorado">
                                    <option value="DOC">Doctorado en Pol??ticas P??blicas</option>
                                </optgroup>
                                <optgroup label="Master">
                                    <option value="MMPOP">Marketing Pol??tico y Opini??n P??blica</option>
                                    <option value="MAG">Auditor??a Gubernamental</option>
                                    <option value="MSPAJ">Sistema Penal Acusatorio y Juicio Oral </option>
                                    <option value="MAIS">Administraci??n de Instituciones de Salud</option>
                                    <option value="MGPM">Gesti??n P??blica Municipal</option>
                                    <option value="MCDA">Ciencia de Datos Aplicada</option>
                                    <option value="MIGE">Innovaci??n y Gesti??n Educativa</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <button type="button" onclick="enviarFormulario(this)" class="btn btn-primario float-right ld-ext-right">Enviar<div class="ld ld-ring ld-spin"></div></button>
                </form>
                </div>
            </div>
        
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
                    <p class="description">Rellena el siguiente formulario y recibir??s un mail de confirmaci??n. Toda solicitud de beca debe ser avalada y aprobada por la instituci??n correspondiente.</p>
                </div>
            </div>
        <form id="forma-embajadores" method="POST" data-origen="formulario embajadores" action="">
            <div class="form-row">
                <div class="form-group col-md-5">
                <input placeholder="Tu Nombre completo*" type="text" class="form-control" name="nombre" id="nombre" required>
                </div>
                <div class="form-group col-md-3">
                    <input type="email" class="form-control" placeholder="Tu Correo electr??nico*" name="email" id="correo" required>
                </div>
                <div class="form-group col-md-4">
                    <input placeholder="Tel??fono m??vil*" id="telefono-embajadores" type="tel" class="form-control" name="telefono" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <input placeholder="Nombre del Estudiante que te recomienda*" type="text" class="form-control" name="estudiante-recomendado" required>
                </div>
                <div class="form-group col-md-7">
                        <select class="form-control" name="programa" required>
                            <option name="programa" value="">- Programa acad??mico de inter??s -</option>
                            <optgroup label="Licenciaturas">              
                                <option value="LCP">Ciencias Pol??ticas y Administraci??n P??blica</option>
                                <option value="LSP">Seguridad P??blica</option>
                                <option value="LAE">Administraci??n de Empresas</option>
                                <option value="LD">Derecho</option>
                            </optgroup>          
                            <optgroup label="Maestr??as">  
                                <option value="MFP">Finanzas P??blicas</option>
                                <option value="MAPP">Administraci??n y Pol??ticas P??blicas</option>
                                <option value="MEPP">Evaluaci??n de Pol??ticas P??blicas</option>
                                <option value="MSPP">Seguridad P??blica y Pol??ticas P??blicas</option>
                                <option value="MBAT">Administraci??n de Negocios</option>
                                <option value="MITIC">Tecnolog??as de la Informaci??n</option>
                            </optgroup>
                            <optgroup label="Diplomados">
                                <option value="DADFP">Alta Direcci??n en la Funci??n P??blica</option>
                                <option value="DADPP">An??lisis y Dise??o de Pol??ticas P??blicas</option>																
                                <option value="MEPP">Evaluaci??n de Pol??ticas P??blicas</option>
                                <option value="DDFF">Disciplina Financiera y Fiscalizaci??n</option>
                                <option value="DPRSED">Presupuesto basado en Resultados y Sistema de Evaluaci??n del Desempe??o</option>
                                <option value="DHG">Diplomado en habilidades Gerenciales y Liderazgo</option>
                            </optgroup>
                            <optgroup label="Doctorado">
                                <option value="DOC">Doctorado en Pol??ticas P??blicas</option>
                            </optgroup>
                            <optgroup label="Master">
                                <option value="MMPOP">Marketing Pol??tico y Opini??n P??blica</option>
                                <option value="MAG">Auditor??a Gubernamental</option>
                                <option value="MSPAJ">Sistema Penal Acusatorio y Juicio Oral </option>
                                <option value="MAIS">Administraci??n de Instituciones de Salud</option>
                                <option value="MGPM">Gesti??n P??blica Municipal</option>
                                <option value="MCDA">Ciencia de Datos Aplicada</option>
                                <option value="MIGE">Innovaci??n y Gesti??n Educativa</option>
                            </optgroup>
                        </select>
                </div>
            </div>
            <button type="button" onclick="enviarFormulario(this)" class="btn btn-primario float-right">Enviar</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal BECA Convenios -->
<div class="modal fade" id="modal-beca-convenios" tabindex="-1" aria-labelledby="modal-beca-convenios" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title titulo" id="modal-beca-embajadoresLabel">Formulario Beca Convenios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <p class="description">Rellena el siguiente formulario y recibir??s un mail de confirmaci??n. Toda solicitud de beca debe ser avalada y aprobada por la instituci??n correspondiente.</p>
                </div>
            </div>
        <form id="forma-convenio" method="POST" data-origen="formulario convenios" action="">
            <div class="form-row">
                <div class="form-group col-md-5">
                <input placeholder="Tu Nombre completo*" type="text" class="form-control" name="nombre" id="nombre" required>
                </div>
                <div class="form-group col-md-3">
                    <input type="email" class="form-control" placeholder="Tu Correo electr??nico*" name="email" id="correo" required>
                </div>
                <div class="form-group col-md-4">
                    <input placeholder="Tel??fono m??vil*" id="telefono-convenios" type="tel" class="form-control" name="telefono" required>
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-5" id="lista-convenios">
                        <select class="form-control" name="convenios" id="idConvenios">
                            <?php
                                $url = "https://iexe.app/api/";
                                $json = file_get_contents($url);
                                $json_data = json_decode($json, true);
                                echo '<option value="0">-- Selecciona un convenio --</option>';
                                foreach($json_data as $form){
                                    echo '<option value="' . $form['idConvenio'] . '">' . $form['nombre'] . '</option>';
                                }
                            ?>
                        </select>
            </div>
                <div class="form-group col-md-7">
                        <select class="form-control" name="programa" required>
                            <option name="programa" value="">- Programa acad??mico de inter??s -</option>
                            <optgroup label="Licenciaturas">              
                                <option value="LCP">Ciencias Pol??ticas y Administraci??n P??blica</option>
                                <option value="LSP">Seguridad P??blica</option>
                                <option value="LAE">Administraci??n de Empresas</option>
                                <option value="LD">Derecho</option>
                            </optgroup>          
                            <optgroup label="Maestr??as">  
                                <option value="MFP">Finanzas P??blicas</option>
                                <option value="MAPP">Administraci??n y Pol??ticas P??blicas</option>
                                <option value="MEPP">Evaluaci??n de Pol??ticas P??blicas</option>
                                <option value="MSPP">Seguridad P??blica y Pol??ticas P??blicas</option>
                                <option value="MBAT">Administraci??n de Negocios</option>
                                <option value="MITIC">Tecnolog??as de la Informaci??n</option>
                                <option value="MAIS">Administraci??n de Instituciones de Salud</option>
                                <option value="MCDA">Ciencia de Datos Aplicada</option>
                                <option value="MIGE">Innovaci??n y Gesti??n Educativa</option>
                            </optgroup>
                            <optgroup label="Diplomados">
                                <option value="DADFP">Alta Direcci??n en la Funci??n P??blica</option>
                                <option value="DADPP">An??lisis y Dise??o de Pol??ticas P??blicas</option>																
                                <option value="MEPP">Evaluaci??n de Pol??ticas P??blicas</option>
                                <option value="DDFF">Disciplina Financiera y Fiscalizaci??n</option>
                                <option value="DPRSED">Presupuesto basado en Resultados y Sistema de Evaluaci??n del Desempe??o</option>
                                <option value="DHG">Diplomado en habilidades Gerenciales y Liderazgo</option>
                            </optgroup>
                            <optgroup label="Doctorado">
                                <option value="DOC">Doctorado en Pol??ticas P??blicas</option>
                            </optgroup>
                            <optgroup label="Master">
                                <option value="MMPOP">Marketing Pol??tico y Opini??n P??blica</option>
                                <option value="MAG">Auditor??a Gubernamental</option>
                                <option value="MSPAJ">Sistema Penal Acusatorio y Juicio Oral </option>
                                <option value="MGPM">Gesti??n P??blica Municipal</option>
                            </optgroup>
                        </select>
                </div>
                <style>
                    label.form-check-label{
                        color: #FFF;
                    }
                </style>
            </div>
            <button type="button" onclick="enviarFormulario(this)" class="btn sin-form float-right btn-primario ld-ext-right">Enviar<div class="ld ld-ring ld-spin"></div></button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>

    </div>
</div>
<script>
    
    var input = document.querySelector("#telefono-sep");
    var iti4 = window.intlTelInput(input, {
      localizedCountries: { 'us': 'Estados Unidos' },
      preferredCountries: ['mx','co', 'cr', 'py', 'pe' , 'ec', 'us' ],
      separateDialCode: true,
      utilsScript: "<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/utils.js",
    });
    var input = document.querySelector("#telefono-beca-iexe");
    var iti5 = window.intlTelInput(input, {
      localizedCountries: { 'us': 'Estados Unidos' },
      preferredCountries: ['mx','co', 'cr', 'py', 'pe' , 'ec', 'us' ],
      separateDialCode: true,
      utilsScript: "<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/utils.js",
    });
    var input = document.querySelector("#telefono-embajadores");
    var iti2 = window.intlTelInput(input, {
      localizedCountries: { 'us': 'Estados Unidos' },
      preferredCountries: ['mx','co', 'cr', 'py', 'pe' , 'ec', 'us' ],
      separateDialCode: true,
      utilsScript: "<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/utils.js",
    });
    var input = document.querySelector("#telefono-convenios");
    var iti = window.intlTelInput(input, {
      localizedCountries: { 'us': 'Estados Unidos' },
      preferredCountries: ['mx','ec'],
      separateDialCode: true,
      utilsScript: "<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/utils.js",
    });
    var input = document.querySelector("#telefono-beca");
    var iti3 = window.intlTelInput(input, {
      localizedCountries: { 'us': 'Estados Unidos' },
      preferredCountries: ['mx','co', 'cr', 'py', 'pe' , 'ec', 'us' ],
      separateDialCode: true,
      utilsScript: "<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/utils.js",
    });
  </script>
  
  <script>
    jQuery(document).ready(function($){
        $(".submit").click(function(){
            return false;
        });
        $(".GaugeMeter").gaugeMeter();
        $("#generar-resultado").click(function(){
            $("#medidorBeca").gaugeMeter({percent:<?php echo $porcentajeBeca ?>});
        });
    });   
</script>

<?php get_template_part( 'template-parts/comunidad', 'comunidad-iexe' ); ?>
<?php get_template_part( 'template-parts/vinculos'); ?>
<?php get_footer( ); ?>
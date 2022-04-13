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
            <div class="col"><a data-target="#informacion-programa" data-slide-to="3"><div class="col d-table"><div class="contenido d-table-cell align-middle">CRÉDITOS ANTICIPADOS</div></div></a></div>
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
                                        <p  class="descripcion-beca">Contamos con diversos <strong>convenios</strong> tanto con <strong>instituciones públicas</strong> como <strong>privadas</strong>, si perteneces a alguna, podrás obtener <strong>becas especiales</strong> para ti y tu familia, así como otros beneficios ¡Consulta la lista de convenios y conócelos!</p>
                                        <div class="botones-beca">
                                            <a class="btn mt-3 btn-primario" href="#" data-toggle="modal" data-target="#modal-beca-convenios">¡Contáctanos!</a>
                                        </div>
                                    </div>
                                    
                                    <div class="col-2 col-md-1 align-self-center"><img class="boton-adelante float-right" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/flecha-adelante.svg" alt=""></div>
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
                                            maestrías, másteres y doctorado.</strong> Nuestros estudiantes y aspirantes pueden solicitarla todo el año.</p>
                                        <div class="botones-beca">
                                            <a class="btn btn-primario mt-3" href="#" data-toggle="modal" data-target="#modal-beca-IEXE">Solicítala aquí</a>
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-1 align-self-center float-right"><img class="boton-adelante float-right" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/flecha-adelante.svg" alt=""></div>
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
                                        <p  class="descripcion-beca">Promovida por la Secretaría de Educación Pública,
                                             la convocatoria de la Beca SEP es publicada una vez al año y
                                              otorga porcentajes que van <strong> desde el 25% al 75% sobre la colegiatura. </strong>
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
                                        <p  class="descripcion-beca">Diseñada para apoyar a los integrantes de la Comunidad IEXE,
                                            la Beca de embajadores IEXE otorga a nuestros alumnos un beneficio acumulable
                                            por cada referido inscrito, por lo que se <strong> puede otorgar hasta un 100% de beca.</strong></p>
                                            <div class="botones-beca">
                                                <a class="btn btn-primario mt-3" href="#" data-toggle="modal" data-target="#modal-beca-embajadores">Solicítala aquí</a>
                                        </div>
                                    </div>
                                    
                                    <div class="col-2 col-md-1 align-self-center"><img class="boton-adelante float-right" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/flecha-adelante.svg" alt=""></div>
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
                                    <div class="col-2 col-md-1 align-self-center"><img  class="boton-atras" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/flecha-atras.svg" alt=""></div>
                                    <div class="col-md-3 d-none d-sm-block">
                                        <img src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/beca_2.webp" alt="" class="beca">
                                    </div>
                                    <div class="col-8 col-md-5 offset-md-2">
                                        <h1 class="titulo">Beca Alianzas Estratégicas</h1>
                                        <p  class="descripcion-beca">Hemos realizado alianzas académicas con <strong>distintas instituciones públicas y privadas.</strong>  Si perteneces a alguna de ellas, tú y tus familiares pueden solicitar una beca por medio de un convenio estratégico entre la universidad y la empresa donde laboras.</p>
                                        <div class="botones-beca">
                                            <a class="btn btn-primario mt-3" target="_blank" href="https://iexe.edu.mx/alianzas-academicas">Solicítala aquí</a>
                                        </div>
                                    </div>
                                    
                                    <div class="col-2 col-md-1 align-self-center"><img class="boton-adelante float-right" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/flecha-adelante.svg" alt=""></div>
                                </div>
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
            <form id="beca-iexe" method="POST" data-origen="Formulario Beca IEXE" action="">
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
                <input placeholder="Teléfono móvil*" id="telefono-beca-iexe" type="text" class="form-control" name="telefono" required>
                </div>
                <div class="form-group col-md-6">
                <select class="form-control" name="programa" required>
                    <option name="programa" value="">- Programa académico de interés -</option>
                    <optgroup label="Licenciaturas">              
                        <option value="LCP">Ciencias Políticas y Administración Pública</option>
                        <option value="LSP">Seguridad Pública</option>
                        <option value="LAE">Administración de Empresas</option>
                        <option value="LD">Derecho</option>
                    </optgroup>          
                    <optgroup label="Maestrías">  
                        <option value="MFP">Finanzas Públicas</option>
                        <option value="MAPP">Administración y Políticas Públicas</option>
                        <option value="MEPP">Evaluación de Políticas Públicas</option>
                        <option value="MSPP">Seguridad Pública y Políticas Públicas</option>
                        <option value="MBAT">Administración de Negocios</option>
                        <option value="MITIC">Tecnologías de la Información</option>
                    </optgroup>
                    <optgroup label="Diplomados">
                        <option value="DADFP">Alta Dirección en la Función Pública</option>
                        <option value="DADPP">Análisis y Diseño de Políticas Públicas</option>																
                        <option value="MEPP">Evaluación de Políticas Públicas</option>
                        <option value="DDFF">Disciplina Financiera y Fiscalización</option>
                        <option value="DPRSED">Presupuesto basado en Resultados y Sistema de Evaluación del Desempeño</option>
                        <option value="DHG">Diplomado en habilidades Gerenciales y Liderazgo</option>
                    </optgroup>
                    <optgroup label="Doctorado">
                        <option value="DOC">Doctorado en Políticas Públicas</option>
                    </optgroup>
                    <optgroup label="Master">
                        <option value="MMPOP">Marketing Político y Opinión Pública</option>
                        <option value="MAG">Auditoría Gubernamental</option>
                        <option value="MSPAJ">Sistema Penal Acusatorio y Juicio Oral </option>
                        <option value="MAIS">Administración de Instituciones de Salud</option>
                        <option value="MGPM">Gestión Pública Municipal</option>
                        <option value="MCDA">Ciencia de Datos Aplicada</option>
                        <option value="MIGE">Innovación y Gestión Educativa</option>
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
                    <p class="description">Rellena el siguiente formulario y recibirás un mail de confirmación. Toda solicitud de beca debe ser avalada y aprobada por la institución correspondiente.</p>
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
                        <input type="email" class="form-control" placeholder="Tu Correo electrónico*" name="email" id="correo" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <input placeholder="Teléfono móvil*" id="telefono-sep" type="text" class="form-control" name="telefono" required>
                        </div>
                        <div class="form-group col-md-6">
                            <select class="form-control" name="programa" required>
                                <option name="programa" value="">- Programa académico de interés -</option>
                                <optgroup label="Licenciaturas">              
                                    <option value="LCP">Ciencias Políticas y Administración Pública</option>
                                    <option value="LSP">Seguridad Pública</option>
                                    <option value="LAE">Administración de Empresas</option>
                                    <option value="LD">Derecho</option>
                                </optgroup>          
                                <optgroup label="Maestrías">  
                                    <option value="MFP">Finanzas Públicas</option>
                                    <option value="MAPP">Administración y Políticas Públicas</option>
                                    <option value="MEPP">Evaluación de Políticas Públicas</option>
                                    <option value="MSPP">Seguridad Pública y Políticas Públicas</option>
                                    <option value="MBAT">Administración de Negocios</option>
                                    <option value="MITIC">Tecnologías de la Información</option>
                                </optgroup>
                                <optgroup label="Diplomados">
                                    <option value="DADFP">Alta Dirección en la Función Pública</option>
                                    <option value="DADPP">Análisis y Diseño de Políticas Públicas</option>																
                                    <option value="MEPP">Evaluación de Políticas Públicas</option>
                                    <option value="DDFF">Disciplina Financiera y Fiscalización</option>
                                    <option value="DPRSED">Presupuesto basado en Resultados y Sistema de Evaluación del Desempeño</option>
                                    <option value="DHG">Diplomado en habilidades Gerenciales y Liderazgo</option>
                                </optgroup>
                                <optgroup label="Doctorado">
                                    <option value="DOC">Doctorado en Políticas Públicas</option>
                                </optgroup>
                                <optgroup label="Master">
                                    <option value="MMPOP">Marketing Político y Opinión Pública</option>
                                    <option value="MAG">Auditoría Gubernamental</option>
                                    <option value="MSPAJ">Sistema Penal Acusatorio y Juicio Oral </option>
                                    <option value="MAIS">Administración de Instituciones de Salud</option>
                                    <option value="MGPM">Gestión Pública Municipal</option>
                                    <option value="MCDA">Ciencia de Datos Aplicada</option>
                                    <option value="MIGE">Innovación y Gestión Educativa</option>
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
        <form id="forma-embajadores" method="POST" data-origen="formulario embajadores" action="">
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
                            <option name="programa" value="">- Programa académico de interés -</option>
                            <optgroup label="Licenciaturas">              
                                <option value="LCP">Ciencias Políticas y Administración Pública</option>
                                <option value="LSP">Seguridad Pública</option>
                                <option value="LAE">Administración de Empresas</option>
                                <option value="LD">Derecho</option>
                            </optgroup>          
                            <optgroup label="Maestrías">  
                                <option value="MFP">Finanzas Públicas</option>
                                <option value="MAPP">Administración y Políticas Públicas</option>
                                <option value="MEPP">Evaluación de Políticas Públicas</option>
                                <option value="MSPP">Seguridad Pública y Políticas Públicas</option>
                                <option value="MBAT">Administración de Negocios</option>
                                <option value="MITIC">Tecnologías de la Información</option>
                            </optgroup>
                            <optgroup label="Diplomados">
                                <option value="DADFP">Alta Dirección en la Función Pública</option>
                                <option value="DADPP">Análisis y Diseño de Políticas Públicas</option>																
                                <option value="MEPP">Evaluación de Políticas Públicas</option>
                                <option value="DDFF">Disciplina Financiera y Fiscalización</option>
                                <option value="DPRSED">Presupuesto basado en Resultados y Sistema de Evaluación del Desempeño</option>
                                <option value="DHG">Diplomado en habilidades Gerenciales y Liderazgo</option>
                            </optgroup>
                            <optgroup label="Doctorado">
                                <option value="DOC">Doctorado en Políticas Públicas</option>
                            </optgroup>
                            <optgroup label="Master">
                                <option value="MMPOP">Marketing Político y Opinión Pública</option>
                                <option value="MAG">Auditoría Gubernamental</option>
                                <option value="MSPAJ">Sistema Penal Acusatorio y Juicio Oral </option>
                                <option value="MAIS">Administración de Instituciones de Salud</option>
                                <option value="MGPM">Gestión Pública Municipal</option>
                                <option value="MCDA">Ciencia de Datos Aplicada</option>
                                <option value="MIGE">Innovación y Gestión Educativa</option>
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
                    <p class="description">Rellena el siguiente formulario y recibirás un mail de confirmación. Toda solicitud de beca debe ser avalada y aprobada por la institución correspondiente.</p>
                </div>
            </div>
        <form id="forma-convenio" method="POST" data-origen="formulario convenios" action="">
            <div class="form-row">
                <div class="form-group col-md-5">
                <input placeholder="Tu Nombre completo*" type="text" class="form-control" name="nombre" id="nombre" required>
                </div>
                <div class="form-group col-md-3">
                    <input type="email" class="form-control" placeholder="Tu Correo electrónico*" name="email" id="correo" required>
                </div>
                <div class="form-group col-md-4">
                    <input placeholder="Teléfono móvil*" id="telefono-convenios" type="tel" class="form-control" name="telefono" required>
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
                            <option name="programa" value="">- Programa académico de interés -</option>
                            <optgroup label="Licenciaturas">              
                                <option value="LCP">Ciencias Políticas y Administración Pública</option>
                                <option value="LSP">Seguridad Pública</option>
                                <option value="LAE">Administración de Empresas</option>
                                <option value="LD">Derecho</option>
                            </optgroup>          
                            <optgroup label="Maestrías">  
                                <option value="MFP">Finanzas Públicas</option>
                                <option value="MAPP">Administración y Políticas Públicas</option>
                                <option value="MEPP">Evaluación de Políticas Públicas</option>
                                <option value="MSPP">Seguridad Pública y Políticas Públicas</option>
                                <option value="MBAT">Administración de Negocios</option>
                                <option value="MITIC">Tecnologías de la Información</option>
                                <option value="MAIS">Administración de Instituciones de Salud</option>
                                <option value="MCDA">Ciencia de Datos Aplicada</option>
                                <option value="MIGE">Innovación y Gestión Educativa</option>
                            </optgroup>
                            <optgroup label="Diplomados">
                                <option value="DADFP">Alta Dirección en la Función Pública</option>
                                <option value="DADPP">Análisis y Diseño de Políticas Públicas</option>																
                                <option value="MEPP">Evaluación de Políticas Públicas</option>
                                <option value="DDFF">Disciplina Financiera y Fiscalización</option>
                                <option value="DPRSED">Presupuesto basado en Resultados y Sistema de Evaluación del Desempeño</option>
                                <option value="DHG">Diplomado en habilidades Gerenciales y Liderazgo</option>
                            </optgroup>
                            <optgroup label="Doctorado">
                                <option value="DOC">Doctorado en Políticas Públicas</option>
                            </optgroup>
                            <optgroup label="Master">
                                <option value="MMPOP">Marketing Político y Opinión Pública</option>
                                <option value="MAG">Auditoría Gubernamental</option>
                                <option value="MSPAJ">Sistema Penal Acusatorio y Juicio Oral </option>
                                <option value="MGPM">Gestión Pública Municipal</option>
                            </optgroup>
                        </select>
                </div>
                <style>
                    label.form-check-label{
                        color: #FFF;
                    }
                </style>
            </div>
            <button type="button" onclick="enviarFormulario(this)" class="btn sin-form float-right btn-primario">Enviar</button>
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
<script>
      $(document).ready(function(){

$('#modal-beca-IEXE button.btn.btn-primario').click(function(){    
    $('#modal-beca-IEXE button.btn.btn-primario').removeClass("error exito"); 
    $('#modal-beca-IEXE button.btn.btn-primario').attr("disabled", true);
    var nombre = $("[name='nombre']").val();
    var correo = $("[name='email']").val();
    
    if($('input#hiddenPrograma').val()){
        var programa = $('input#hiddenPrograma').val();
        console.log(programa);
    }else{
        var programa = $("[name='programa']").val();
        console.log(programa);
    }
    //var telefono = $("#telefono").val();
    var telefono = iti.getNumber(crossOriginIsolated);
    var data;           
    // var formData = new FormData(forma);
    // formData.append('telefono', String(iti.getNumber(crossOriginIsolated)));
    $.ajax({
    url: 'https://api.redisoft.dev/Leads/web',
    type: 'post',
    data: "nombre=" + nombre + "&correo=" + correo + "&telefono=" + telefono + "&programa=" + programa + "&referencia=" + $(location).attr('href') + "&charifaz=" + navigator.userAgent,
    success: function(data){
        console.log(data);
        if(data == true || data == "saved"){
            console.log("se salvó :)");
            $("#problemaModal").modal('show');
            $('#interes button.btn.btn-primario').addClass("error");

        }else if(data == "duplicated"){
            console.log("Ya hay un registro con este correo electrónico");
        } else{
            $("#guardadoModal").modal('show');
            $('#interes button.btn.btn-primario').removeClass("error");
            $('#interes button.btn.btn-primario').addClass("exito");
        }
        $('#interes button.btn.btn-primario').attr("disabled", false);
        
    },
    error: function(data){
        console.log("No se logró contactar al servidor");
        console.log(data);
        $('#interes button.btn.btn-primario').attr("disabled", false);
        $('#interes button.btn.btn-primario').addClass("error");
        // $("#modalFracaso").modal('show');
        // $("#error-alerta").html("El servidor remoto no se pudo contactar, por favor intente más tarde");
    }
});
});
});
  </script>
<?php get_template_part( 'template-parts/comunidad', 'comunidad-iexe' ); ?>
<?php get_template_part( 'template-parts/vinculos'); ?>
<?php get_footer( ); ?>
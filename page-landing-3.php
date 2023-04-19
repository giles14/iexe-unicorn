<?php /* Template Name: Landing modelo 3 */ ?>
<?php 
$image_principal = get_field('imagen_de_programa');
$file = get_field('informacion_descargable');
setlocale(LC_ALL,"es_ES");
$bg_image = "https://iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/img/landing_v3/bg_landingiexe_LAE2.webp";
switch(get_field('tipo_de_programa')) {
    case "licenciatura":
        $bg_image = "https://iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/img/landing-ssp.webp";
        break;
    case "Maestría en línea":
        $bg_image = "https://iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/img/landing-maestrias.webp";
        break;
    case "doctorado":
        $bg_image = "";
        break;
}
if(get_field('tipo_de_programa') == "Licenciatura en línea") {
    $cagb_estudio_mensaje = "¿Tienes tu bachiller o preparatoria concluida?";
}elseif(get_field('tipo_de_programa') == "Maestría en línea"){
    $cagb_estudio_mensaje = "¿Tienes tu licenciatura o tercer nivel concluido?";
} elseif(get_field('tipo_de_programa') == "Doctorado en línea"){
    $cagb_estudio_mensaje = "¿Tienes tu maestría concluida?";
}
//echo strftime("%A %d de %B del %Y",  strtotime("first monday of next month"));
?>
<?php get_template_part( 'template-parts/header-landing'); ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T2GP32R"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script>
    window.dataLayer = window.dataLayer || [];
</script>
<style>
    body {
    background: url(<?php echo $bg_image ?>) 0% 0% / contain no-repeat rgb(211, 243, 253);
    background-size: contain;
    background-repeat: no-repeat;
    }
    @media only screen and (max-width: 900px){
        body {
            background-size: inherit;
        }
}
</style>
<section id="landing-principal">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-9">
                <div class="container">
                    <div class="row">
                        <div class="col-8 bloque-sup">
                            <h2 class="tipo">LICENCIATURA EN LÍNEA</h2>
                            <h1 class="programa-academico mb-4">Ciencias Políticas y Administración Pública hasta tres renglones</h1>
                            <p class="frase-iexe">Ve más alla de tus límites y<br> alcanza tus metas con IEXE</p>
                            <p class="descripcion-programa">
                                Adquirirás las herramientas y competencias para tu óptimo desempeño en las instituciones encargadas de la investigación y reacción en contra de la delincuencia y comportamientos criminales en términos de las leyes vigentes dentro de un entorno social determinado. Implementarás modelos de prevención del delito, combate a la delincuencia organizada, técnicas y sistemas de información, derechos humanos y ciencias penales, para generar procesos y estrategias alineadas al análisis de políticas públicas en materia de seguridad pública.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="bloques-principales">
                                <div class="bloque-ico">
                                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/landing_v3/reloj.svg" alt="" class="ico">
                                </div>
                                <p class="el-elemento">Duracion del programa</p>
                                <span class="line-sep"></span>
                                <span class="elemento-respuesta">3 años</span>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="bloques-principales">
                                <div class="bloque-ico">
                                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/landing_v3/calendar.svg" alt="" class="ico">
                                </div>
                                <p class="el-elemento">Fechas de inicio</p>
                                <span class="line-sep"></span>
                                <span class="elemento-respuesta">1 Diciembre</span>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="bloques-principales">
                                <div class="bloque-ico">
                                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/landing_v3/birrete.svg" alt="" class="ico">
                                </div>
                                <p class="el-elemento">Validez Oficial</p>
                                <span class="line-sep"></span>
                                <span class="elemento-respuesta">SEP-SES /21/ 114/01/2044 /2017</span>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="bloques-principales">
                                <div class="bloque-ico">
                                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/landing_v3/iexe_logo.svg" alt="" class="ico">
                                </div>
                                <p class="el-elemento">Modelo Educativo</p>
                                <span class="line-sep"></span>
                                <span class="elemento-respuesta">Pragmaflex: Cursa una materia a la vez</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bloque-info-podras">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-7 pr-4">
                                            <h1 class="podras">Podrás trabajar en:</h1>
                                            <p class="podras-texto">Podrás desempeñarte en alguna de las instituciones pertenecientes al Sistema Nacional de Seguridad Pública, en el orden federal, estatal y municipal, tales como: la Secretaría de Gobernación, la Guardia Nacional, la Fiscalía General de la República, las fiscalías generales de los estados, las subsecretarías de investigación policial, las direcciones municipales de seguridad y el sistema penitenciario. Asimismo, puedes desarrollarte en consultoría especializada en instancias privadas de seguridad.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mb-80">
                        <div class="col-md-12 mt-5 mb-3"><h1 class="por-que-elegir">¿Por qué elegir IEXE Universidad?</h1></div>
                        <div class="col-md-4"><div class="bloque-gde">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/landing_v3/atencion.svg" class="img-fluid ico-pq" alt="">
                            <p class="texto-del-por-que">Plataforma disponible las <strong>24 horas del día, los 7 días</strong> de la semana.</p></div></div>
                        <div class="col-md-4"><div class="bloque-gde">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/landing_v3/plataforma.svg" class="img-fluid ico-pq" alt="">
                            <p class="texto-del-por-que">Aprende de docentes con <strong>experiencia laboral relevante</strong> en su área de conocimiento.</p></div></div>
                        <div class="col-md-4"><div class="bloque-gde">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/landing_v3/servicios-escolares.svg" class="img-fluid ico-pq" alt="">
                            <p class="texto-del-por-que">Recibe <strong>atención personalizada</strong> de docentes, atención a alumnos, servicios escolares y soporte técnico.</p></div></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="programas-relacionados mb-5">
                                Programas relacionados
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <p class="sigla-prog">DSP</p>
                            <p class="nombre-prog mb-5">Doctorado en Ciencias Políticas y Administración Pública</p>
                            <a href="#" class="boton-descubrelo">¡DESCÚBRELO!</a>
                        </div>
                        <div class="col-3">
                            <img src="https://www.iexe.edu.mx/wp-content/uploads/2022/01/Escudo_LCPA_IEXE.webp" class="img-fluid" alt="">
                        </div>
                        <div class="col-3">
                            <p class="sigla-prog">DSP</p>
                            <p class="nombre-prog mb-5">Doctorado en Ciencias Políticas y Administración Pública</p>
                            <a href="#" class="boton-descubrelo">¡DESCÚBRELO!</a>
                        </div>
                        <div class="col-3">
                            <img src="https://www.iexe.edu.mx/wp-content/uploads/2022/01/Escudo_LCPA_IEXE.webp" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="formulario">
                    <div class="cabecera">
                        <h1 class="interes">¡REGÍSTRATE!</h1>
                    </div>
                    <div class="cuerpo">
                    <form id="form-interes-landing" class="form-interes-landing" onsubmit="event.preventDefault(); enviarFormulario(this); fillDataLayer()" data-origen="Landing">
                        <div class="row">
                                <div class="col-md-12">
                                    <label for="nombre">Nombre completo*</label>
                                    <input id="nombre" name="nombre" type="text" class="form-control nombre-landing" placeholder="Ingresa aquí tu nombre" required="">
                                </div>
                                <div class="col-md-12">
                                    <label for="correo">Correo electrónico*</label>
                                    <input id="correo" name="email" type="email" class="form-control" placeholder="Ingresa aquí tu correo" required="">
                                    <input type="hidden" class="programa-landing" id="programa" name="programa" value="LD">
                                </div>
                                <div class="col-md-12">
                                    <label for="telefono">Teléfono o celular*</label>
                                    <input type="text" id="telefono" class="form-control telefono-landing" placeholder="Ingresa aquí tu número" required="">
                                </div>                
                        </div>
                        <div class="row">
                            <div id="escolar" class="col-sm-12 mx-auto text-center">
                                <p class="pregunta-bachiller">¿Tienes tu bachiller o preparatoria concluida?</p>
                                <input type="radio" id="concluida" name="escolaridad" value="Si" required="">
                                <label for="concluida">Si</label>
                                <input type="radio" id="en-tramite" name="escolaridad" value="En-tramite">
                                <label for="en-tramite">En trámite</label>
                                <input type="radio" id="no-concluida" name="escolaridad" value="No">
                                <label for="no-concluida">No</label>
                            </div>
                        </div>
                                    <button type="submit" id="boton-enviar" class="enviar-landing btn sin-form btn-primario esp ld-ext-right">Enviar registro<div class="ld ld-ring ld-spin"></div></button>
                    </form>
                        <span class="disclaimer">Al ingresar tus datos, aceptas nuestro <a href="https://iexe.edu.mx/aviso-de-privacidad/" target="_blank">Aviso de Privacidad</a>.</span>
                    </div>

                </div>
            </div>
            
        </div>
    </div>      
</section>
<section id="relacionados">
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
</section>

<style>
    section#relacionados {
        background-color: #FFF;
    }
    .bloque-ico {
        text-align: right;
    }
    .bloques-principales {
        background: var(--primario--azul-obscuro);
        border-radius: 15px;
        color: #FFF;
        height: 185px;
        width: 185px;
        padding: 15px;
        box-shadow: -15px 20px 30px #001C3A5C;
        margin-bottom: 73px;
    }
    .bloque-ico {
        text-align: right;
    }
    .bloque-info-podras {
        background: var(--primario--azul-obscuro);
        background: url('<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/landing_v3/foto_sec_lsp.webp');
        border-radius: 15px;
        color: #fff;
        padding: 15px 31px;
        background-repeat: no-repeat;
        background-position-x: right;
        background-color: var(--primario--azul-obscuro);
        margin-right: 15px;
    }
    h1.podras {
        font-weight: 800;
        font-family: var(--familia-titulos);
        font-size: 30px;
        letter-spacing: 0.72px;
        margin-bottom: 16px;
    }
    p.podras-texto {
        font-weight: 100;
        font-size: 16px;
        line-height: 22px;
        letter-spacing: 0.14px;
        padding-bottom: 26px;
    }
    p.el-elemento {
        font-weight: 800;
        font-size: 18px;
        line-height: 20px;
        letter-spacing: 0.28px;
        width: 80%;
    }
    span.elemento-respuesta {
        color: #00ffe8;
        font-weight: 300;
        font-size: 15px;
        letter-spacing: 0.25px;
    }
    span.line-sep {
        width: 60%;
        background: linear-gradient(90deg, rgba(0,255,232,1) 0%, rgba(255,255,255,0) 100%);
        height: 2px;
        display: block;
        margin-bottom: 5px;
    }
    p.el-elemento {
        font-weight: 800;
        font-size: 18px;
        line-height: 20px;
        letter-spacing: 0.28px;
        width: 80%;
        margin-bottom: 8px;
    }
    h2.tipo {
        color: #00ffe8;
        font-weight: 800;
        font-size: 24px;
        font-family: 'aktiv-grotesk-extended';
    }
    h1.programa-academico {
        font-weight: 300;
        color: #FFF;
        font-size: 48px;
        line-height: 55px;
    }
    h1.programas-relacionados{
        font-weight: 800;
        color: #0018ff;
        font-size: 36px;
        line-height: 43px;
        font-family: var(--familia-titulos);
        text-align: center;
    }
    h1.por-que-elegir {
        font-family: var(--familia-titulos);
        font-size: 30px;
        letter-spacing: 0.72px;
        line-height: 36px;
        color: #001e42;
        text-align: center;
    }
    p.frase-iexe {
        font-size: 24px;
        font-weight: 800;
        font-family: var(--familia-titulos);
        line-height: 36px;
        color: #FFF;
    }
    #landing-principal p.descripcion-programa {
        color: #FFF;
        font-weight: 200;
        font-size: 16px;
        letter-spacing: 0.14px;
        line-height: 22px;
        max-width: 380px;
    }
    .bloque-gde {
        background: var(--primario--azul-obscuro);
        border-radius: 15px;
        padding: 23px;
        height: 260px;
        color: #FFF;
        font-weight: 200;
        font-size: 15px;
        text-align: center;
        padding-top: 34px;
    }
    .ico-pq{
        margin-bottom: 24px;
        max-height: 105px;
    }
    p.sigla-prog {
        font-family: var(--familia-titulos);
        font-size: 30px;
        font-weight: 800;
        color: #001e42;
        letter-spacing: 0.72px;
    }
    p.nombre-prog {
        font-size: 18px;
        font-weight: 200;
        color: #001e42;
        line-height: 24px;
    }
    a.boton-descubrelo {
        text-align: center;
        background: var(--primario--azul-obscuro);
        border-radius: 25px;
        padding: 8px 50px;
        color: #FFF;
        text-decoration: none;
        font-weight: 600;
        font-size: 14px;
        box-shadow: 0px 9px 6px #0c22F526;
    }
    .bloque-sup{
        margin-bottom: 60px;
    }
    .mb-80{
        margin-bottom: 80px;
    }
    p.pregunta-bachiller {
        font-size: 12px;
        letter-spacing: 0.22px;
        color: #001e42;
        font-weight: 800;
    }
    #landing-principal .formulario input[type=text], #landing-principal .formulario input[type=email] {
        border: none;
        border-bottom: 1px solid;
        border-radius: 0px;
        padding: 0px;
        font-size: 12px;
        height: unset;
    }
    #landing-principal .formulario input[type=text]::placeholder, #landing-principal .formulario input[type=email]::placeholder {
        color: #0018ff;
    }
    #form-interes-landing.form-interes-landing label {
        margin-bottom: 0px;
        margin-top: 0.7em;
        font-size: 15px;
        font-weight: 700;
        letter-spacing: 0.27px;
    }
    button.btn.btn-primario.esp {
        background: #0018ff;
        color: #FFF;
        border-radius: 25px;
        padding: 4px 50px;
        font-weight: bold;
        font-size: 18px;
        -webkit-box-shadow: 0px 9px 6px 0px rgb(12 34 245 / 15%);
        box-shadow: 0px 9px 6px 0px rgb(12 34 245 / 15%);
        border: 0px;
        margin-bottom: 12px;
        margin-top: 0px;
    }
    #form-interes-landing.form-interes-landing label[for=en-tramite] {
        margin-bottom: 10px!important;
    }
    .formulario .cuerpo {
        padding: 5px 22px;
    }
</style>
<script>
    function fillDataLayer(){
        nombre = document.getElementById('nombre').value;
        correo = document.getElementById('correo').value;
        telefono = document.getElementById('telefono').value;
        escolaridad = document.querySelector('input[name="escolaridad"]:checked').value
        dataLayer.push({
            "nombre": nombre,
            "correo": correo,
            "telefono": telefono,
            "escolaridad": escolaridad,
            "pruebaF":"en efecto"
        });
    }
</script>
    

<?php get_template_part( 'template-parts/footer-landing'); ?>
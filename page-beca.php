<?php /* Template Name: Landing becas */ ?>
<?php // get_header( ); ?>
<?php get_template_part( 'template-parts/header-landing'); ?>
<link rel="stylesheet" href="https://use.typekit.net/kec4kzw.css">
<section id="calcula-beca" class="landing-calcula pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mb-4">
                <h1 class="titulo">¡Calcula el monto de tu beca y colegiatura!</h1>
                <p class="descripcion-de-becas">Obtén una Beca Académica IEXE hasta del 65%*
                    Estudia 100% en línea, elige el programa que se adapte a tus necesidades.
                </p>
                <p><strong>¡Tu futuro no se detiene!</strong></p>
                <div id="iconos-calculadora" class="container">
                    <div class="row">
                        <div class="col-4 text-center">
                            <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/plataformamoodle-iexe.png" alt="">
                            <span class="icon-text">Plataforma<br> MOODLE</span>
                        </div>
                        <div class="col-4 text-center">
                            <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/img-diplo.png" alt="">
                            <span class="icon-text">Validez<br> Oficial SEP</span>
                        </div>
                        <div class="col-4 text-center">
                            <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/img-calc.png" alt="">
                            <span class="icon-text">Costos<br> Accesibles</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <!-- <p>Sigue unos sencillos pasos para calcular el monto de tu beca. ¡Tenemos una especialmente diseñada para ti!</p> -->
                <form id="calcular-beca" method="POST" data-origen="calcula-beca" action="">
                    <!-- progressbar -->
                    <!-- <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="fieldlabels">Nombre* </label>
                                    <input type="text" name="nombre" placeholder="Ingresa aquí tu nombre" required/>
                                </div>
                                <div class="col-md-12">
                                    <label class="fieldlabels">Email: *</label>
                                    <input type="email" name="email" placeholder="Ingresa aquí tu correo electrónico" required/>
                                </div>
                                <div class="col-md-7">
                                    <label class="fieldlabels">Celular: *</label>
                                    <input id="telefono-beca" type="tel" name="telefono" placeholder="Ingresa aquí tu teléfono móvil" required  minlength="7" pattern="[0-9]+" maxlength="11"/>
                                </div>
                                <div class="col-md-5">
                                    <label class="fieldlabels" for="promedio">Promedio: *</label>
                                    <input id="promedio" type="number" name="promedio" placeholder="Ingresa aquí tu promedio" required  step="0.1" min="1" max="10.0"/>
                                </div>
                                <input id="pje-beca" name="porcentaje-2" type="hidden" value="" />
                                <div style="margin-top: 15px" class="col-md-12">
                                    <label for="programa-interesB">Selecciona un programa</label>
                                    <?php
                                    // get_template_part( 'template-parts/selectProgramas', null, array(
                                    //     'diplomados' => true,
                                    //     'programas' => array("licenciaturas" , "maestrias" , "doctorados")
                                    // ));
                                        
                                        if(get_the_ID() == 3922 || get_the_ID() == 3923){
                                            get_template_part( 'template-parts/selectProgramas', null, array(
                                                'programas' => array("doctorados")
                                            )); 
                                        }elseif(get_the_ID() == 3918 || get_the_ID() == 3919){
                                            get_template_part( 'template-parts/selectProgramas', null, array(
                                                'programas' => array("maestrias" , "masters")
                                            )); 
                                        }elseif(get_the_ID() == 3914 || get_the_ID() == 3915){
                                            get_template_part( 'template-parts/selectProgramas', null, array(
                                                'programas' => array("licenciaturas")
                                            )); 
                                        }else{
                                            get_template_part( 'template-parts/selectProgramas', null, array(
                                                'diplomados' => true,
                                                'programas' => array("licenciaturas" , "maestrias" , "doctorados", "masters")
                                            ));
                                        }
                                    ?>
                                </div>
                            </div>

                        </div>

                        <button type="button" onclick="actualizaTarifas();enviarFormulario(this,true,false,false,false,valida())" name="next" id="crm" class="next btn btn-primario float-right mt-3 ld-ext-right">Siguiente<div class="ld ld-ring ld-spin"></div></button>
                    </fieldset>
                    <fieldset>
                        <div class="form-card resultado">
                            <div class="row justify-content-center">
                                <h2 class="text-center obtenido"><strong>Esta es la beca que has obtenido:</strong></h2> <br>
                                    <div class="recuadro-beca">
                                        <div class="row">
                                            <div class="col-12 col-lg-8">
                                                <p class="nombre-valor">Beca Académica</p>
                                                <div id="beca-academica-pje" class="el-valor"></div>
                                                <p  class="nombre-valor">Pago Mensual</p>
                                                <div id="pago-mensual" class="el-valor"></div>
                                                <p  class="nombre-valor">Ahorro total de</p>
                                                <div id="ahorro-total" class="el-valor"></div>
                                                <!-- <p class="text-center">Este porcentaje representa el monto de beca que puedes obtener.</p> -->
                                            </div>
                                            <div class="col-12 col-lg-4 d-flex justify-content-end">
                                                <button type="button" onclick="window.open(
                                                    'https://bit.ly/3FMBIE',
                                                    '_blank'
                                                    );" name="next" id="crm2" class="next btn btn-primario float-right mt-3 ld-ext-right align-self-end">Regístrate</button>
                                            </div>
                                        </div>
                                    </div>

                            <div class="row justify-content-center">
                                <div class="col-12 text-center">
                                    <h5 class="text-center beca-restricciones mt-3">*Sujeto a revisión, aplican términos y condiciones</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div>
        </div>
    </div>
</section>
<!-- <section id="logos">
    <div class="container">
        <div class="row lo">
            <div class="col-12 text-center">
                    <p class="nuestras-alianzas">Nuestras Alianzas</p>
            </div>
            <div class="col-sm-12 d-flex justify-content-around align-items-center">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-becas/rvoe.png" alt="">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-becas/sep.png" alt="">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-becas/unitar.png" alt="">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-becas/amazon.png" alt="">
                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-becas/cambridge-prep.png" alt="">
            </div>
        </div>
    </div>
</section> -->
<section id="logos">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                    <p class="nuestras-alianzas">Nuestras Alianzas</p>
            </div>
            <div class="row lo d-flex justify-content-between align-items-center text-center" style="width: 100%">
                <div class="col-12 col-md mb-5 mb-sm-5 mb-md-0"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-becas/rvoe.png" alt=""></div>
                <div class="col-12 col-md mb-5 mb-sm-5 mb-md-0"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-becas/sep.png" alt=""></div>
                <div class="col-12 col-md mb-5 mb-sm-5 mb-md-0"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-becas/unitar.png" alt=""></div>
                <div class="col-12 col-md mb-5 mb-sm-5 mb-md-0"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-becas/amazon.png" alt=""></div>
                <div class="col-12 col-md mb-5 mb-sm-5 mb-md-0"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-becas/cambridge-prep.png" alt=""></div>
                <div class="col-12 col-md mb-5 mb-sm-5 mb-md-0"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-becas/cisco-academy.png" alt=""></div>
            </div>
        </div>
    </div>
</section>
<section id="frase-motivacional">
    <div class="container">
        <div class="row">
            <div class="col-12 pt-4 pb-4">
                    <p class="la-frase">Súmate a los más de 9,000 egresados y sigue<br> avanzando en tu preparación con IEXE Universidad</p>
            </div>
        </div>
    </div>
</section>
<!-- <section id="solicita-tu-beca">
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="mb-4">Solicita tu beca, hoy</h1>
                    </div>
                </div>
            </div>

        </div>
        <div class="row solicita">
            <div class="container">
                <div class="row">
                        <div class="col-md-5 offset-md-4 opts-check">
                        <h2 class="mb-5">Obtén tu descuento</h2>
                        <p><img class="check-li" src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/check.png" alt="">No esperes a trámites burocráticos, con nuestra calculadora de becas podrás conocer el monto de tu colegiatura, hoy.</p>
                        <p><img class="check-li" src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/check.png" alt="">Aparta tu lugar en nuestra universidad en sólo 1 paso con la mejor beca.</p>
                        <p><img class="check-li" src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/check.png" alt=""><span class="text-fix-p">Contacta con un asesor para despejar todas tus dudas.</span></p>
                        <a class="btn mt-3 btn-primario" href="#calcula-beca" tabindex="0">Calcula tu beca</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> -->
<section id="solicita-tu-beca">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4">Solicita tu beca, hoy</h1>
            </div>

        </div>
        <div class="row solicita">
            <!-- <div class="full-bg"></div> -->
                        <div class="col-xl-5 offset-xl-6 col-lg-8 offset-lg-2 col-md-10 offset-md-1 opts-check">
                        <h2 class="mb-3 mt-5">Obtén tu descuento</h2>
                        <!-- <ul class="obten-tu-descuento mb-4">
                            <li>No esperes a trámites burocráticos, con nuestra calculadora de becas podrás conocer el monto de tu colegiatura, hoy.</li>
                            <li> Aparta tu lugar en nuestra universidad en sólo 1 paso con la mejor beca.</li>
                            <li>Contacta con un asesor para despejar todas tus dudas.</li>
                        </ul> -->
                        <p><img class="check-li" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/check.png" alt="">No esperes a trámites burocráticos, con nuestra calculadora de becas podrás conocer el monto de tu colegiatura, hoy.</p>
                        <p><img class="check-li" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/check.png" alt="">Aparta tu lugar en nuestra universidad en sólo 1 paso con la mejor beca.</p>
                        <p><img class="check-li" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/check.png" alt=""><span class="text-fix-p">Contacta con un asesor para despejar todas tus dudas.</span></p>
                        <a class="btn mt-3 btn-primario" href="#calcula-beca" tabindex="0" style="
    margin: 0 auto;
    text-align: center;width: 80%; display: block;">Calcula tu beca</a>
                    </div>
        </div>
    </div>
</section>
<section id="nuestros-testimonios-becas">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Nuestros alumnos opinan...</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4 text-center">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/noemi-vernaza.png" alt="" class="escudo-test img-fluid">
                <h2 class="nombre-alumna">Ruth Noemí Vernaza Casquette</h2>
                <span class="plan-academico">Maestría en Administración Pública</span>
                <div class="frase-estudiante">“Cursar mis estudios de Maestría en IEXE, es de las mejores experiencias que he tenido”</div>
            </div>
            <div class="col-12 col-lg-4 text-center">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/maria-alejandra-bustamante.png" alt="" class="escudo-test img-fluid">
                <h2 class="nombre-alumna">María Alejandra Bustamante Jiménez</h2>
                <span class="plan-academico">Licenciatura en Administración Pública</span>
                <div class="frase-estudiante">“Nunca es tarde para aprender. Gracias por todo IEXE.”</div>
            </div>
            <div class="col-12 col-lg-4 text-center">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/peter-nigel.png" alt="" class="escudo-test img-fluid">
                <h2 class="nombre-alumna">Peter Nigel Skerrett</h2>
                <span class="plan-academico">Maestría en Administración Pública</span>
                <div class="frase-estudiante">“Formar parte de una universidad dinámica, versátil y que se adapta a mis necesidades”</div>
            </div>
        </div>
    </div>
</section>
<section id="parte-nuestra-red">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="titulo text-center mt-5 mb-5">¡Sé parte de nuestra comunidad internacional!</h1>

            </div>
            <div class="col-10 offset-1">
                <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/736691022?h=44db8cbff2&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Ecuador_v004"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
            </div>
        </div>
    </div>
</section>
<section id="presencia-internacional">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="titulo bandera">En IEXE Universidad tenemos presencia en:</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img class="img-fluid bandera" src="https://www.iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/img/banderas-internacional.webp" alt="Nuestra presencia en el mundo">
            </div>
        </div>
    </div>
</section>


<style>
    #solicita-tu-beca h1{
        font-weight: 800;
        font-family: var(--familia-titulos);
        color: var(--primario-azul);
    }
    #calcula-beca h1.titulo {
    font-weight: 900;
    letter-spacing: -2px;
    }
    div#iconos-calculadora {
    padding: 0px 30px;
    }
    p.descripcion-de-becas {
    font-size: 18px;
    padding: 0px 12px 0px 0px;
    }
    span.icon-text {
    font-weight: 700;
}
    #medidorBeca{
        margin: 0 auto;
    }
  .el-valor {
    font-size: 36px;
    font-weight: 800;
    font-size: 36px;
    margin-bottom: 22px;
}
  .nombre-valor {
    font-size: 25px;
    line-height: 24px;
    margin-bottom: -5px;
    font-weight: 300;
}
div#beca-academica-pje {
    color: var(--primario-cyan);
}
.recuadro-beca {
    background: url('<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/bg-calculadora.webp') var(--primario--azul-obscuro);
    background-repeat: no-repeat;
    border-radius: 15px;
    color: #fFF;
    padding: 42px;
    display: inherit;
    background-position-x:right;
    padding-bottom: 20px;
}
#pago-mensual small, #ahorro-total small {
    font-size: 21px;
    font-weight: 200;
}
h2.obtenido {
    font-family: var(--familia-titulos);
    font-size: 18px;
}
h5.text-center.beca-restricciones.mt-3 {
    font-size: 14px;
}
section#logos .row.lo {
    background: #FFF;
    border-radius: 15px;
    padding: 37px 40px;
    box-shadow: 0px 3px 6px #0017ff26;
}
#calcula-beca.landing-calcula {
    background: #FFF;
    /* margin-top: 94px; */
    box-shadow: 0px 6px 9px #042A5D1F;
}
body#privado\:\ calculadora\ de\ becas {
    background: url('<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/bg_becas_iexe.webp') #F5F5F5;
    background-repeat: no-repeat;
    background-position: top center;

}
.navegacion-botones {
    display: none;
}
.menu.gradient-border {
    display: none;
}


body#calculadora\ de\ becas{
    background: url('<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/bg_becas_iexe.webp') #F5F5F5;
    background-repeat: no-repeat;
    background-position: top center;
    margin-top: none;
}
body#calculadora\ becas{
    background: url('<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/bg_becas_iexe.webp') #F5F5F5;
    background-repeat: no-repeat;
    background-position: top center;
    margin-top: none;
}
.el-whatsapp {
    display: none;
}
section#parte-nuestra-red {
    background: linear-gradient(180deg, rgba(205,220,245,1) 0%, rgba(245,245,245,1) 55%);
}

section#calcula-beca {
    background: unset;
    padding-bottom: 20px;
}

/* section#logos .row{
    background: #FFF;
    border-radius: 15px;
    padding: 37px 40px;
    box-shadow: 0px 3px 6px #0017ff26;
} */
.full-bg {
    height: 152px;
    background: #FFF;
    width: 40%;
    position: absolute;
    z-index: 0;
    position: absolute;
    right: 0;
    box-shadow: 0px 6px 9px #0017ff1f;
}
.row.solicita {
    background: url(https://www.iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/img/fondo-solicita.webp) #FFF;
    z-index: 10;
    box-shadow: 0px 6px 9px #0017ff1f;
    border-radius: 30px;
    height: 428px;
    background-repeat: no-repeat;
}
@media only screen and (max-width: 1199px) {
    .row.solicita {
    background: #FFF;
    height: 428px;
    }
}

.nuestras-alianzas{
    font-weight: 100;
    font-size: 24px;
    text-transform: uppercase;
}
#iconos-calculadora .col-4 .img-fluid {
    display: block;
    margin: 0 auto;
}
section#frase-motivacional {
    background: var(--primario--azul-obscuro);
    color: #FFF;
    text-align: center;
}
section#frase-motivacional p {
    font-weight: 800;
    font-size: 30px;
}
#solicita-tu-beca h2 {
    font-weight: 800;
}
#solicita-tu-beca li {
    font-size: 18px;
    font-weight: 400;
    margin-bottom: 30px;
    list-style-image: url('<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/check.png');
}
.check-li{
    display: block;
    float: left;
    padding: 6px 10px 25px 20px;
}
span.text-fix-p {
    padding-top: 12px;
    display: block;
}
.opts-check p {
    font-size: 18px;
}
#calcula-beca input {
    background: #FFF;
}
#calcula-beca select#programa-interes {
    background: #FFF;
}
h2.nombre-alumna {
    font-weight: 300;
    font-size: 18px;
    text-align: center;
}
span.plan-academico {
    width: 100%;
    display: block;
    text-align: center;
    color: var(--primario-azul);
    font-weight: 700;
    font-size: 15px;
}
h2.nombre-alumna {
    font-size: 18px;
    font-weight: 300;
    text-align: center;
}
span.plan-academico {
    font-weight: 700;
    text-align: center;
    color: var(--primario-azul);
    font-size: 15px;
    display: block;
}
.frase-estudiante {
    box-shadow: 0px 3px 6px #0017ff26;
    display: block;
    border-radius: 15px;
    padding: 15px 12px;
    margin: 0px 20px;
    height: 130px;
    font-weight: 700;
    font-size: 21px;
    line-height: 24px;
    letter-spacing: -0.63px;
    background: #FFF;
}
#nuestros-testimonios-becas h1 {
    font-family: var(--familia-titulos);
    font-weight: 800;
    letter-spacing: -2px;
    font-size: 36px;
}

</style>
<script>
        function actualizaTarifas(){
            this.Licenciaturas = 3852;
            this.Maestrías = 6955;
            this.Doctorados = 9000;
            let tipo = document.querySelector('select[name="programa"] option:checked').parentElement.label;
            let promedio = document.getElementById('promedio');
            let programa = document.getElementById('programa-interes');
            promedio = promedio.value;
            var mensaje = calculaPorcentajeBeca(promedio);
            document.getElementById("beca-academica-pje").innerHTML = mensaje + "% de Descuento*";
            document.getElementById("pago-mensual").innerHTML = "$" + (comaSep(Math.round(this[tipo] * ((100-mensaje)/100)))) + "<small> Pesos mexicanos</small>";
            document.getElementById("ahorro-total").innerHTML = "$" + (comaSep(Math.round(this[tipo] - (this[tipo] * ((100-mensaje)/100))))) +  "<small> Pesos mexicanos</small>" ;

        }
        function comaSep(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }


    function calculaPorcentajeBeca(promedio){
        const primero = 45;
        const segundo = 50;
        const tercero = 55;
        const cuarto = 60;
        const quinto = 65;
        var mensaje = "Promedio insuficiente";
        if (promedio >= 7 && promedio < 8){
            mensaje = primero;
        } else if (promedio >= 8 && promedio <= 8.5){
            mensaje = segundo;
        } else if (promedio >= 8.6 && promedio < 9.0){
            mensaje = tercero;
        } else if (promedio >= 9.0 && promedio <= 9.5) {
            mensaje = cuarto;
        } else if (promedio >= 9.6 && promedio <= 10){
            mensaje = quinto;
        }
        var pje = document.getElementById('pje-beca');
        pje.value = mensaje;
        return mensaje;
    }
    function valida(){
        var formulario = $("#calcular-beca");
        console.log(formulario);
        formulario.validate();
        var res = formulario.valid();
        console.log(res);
        return res
    }
</script>
<?php get_template_part( 'template-parts/footer-landing'); ?>
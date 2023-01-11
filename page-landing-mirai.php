<?php /* Template Name: Landing Mirai */ ?>
<?php 
$image_principal = get_field('imagen_de_programa');
$file = get_field('informacion_descargable');
setlocale(LC_ALL,"es_ES");
$bg_image = "https://iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/img/landing-ssp.webp";
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

//echo strftime("%A %d de %B del %Y",  strtotime("first monday of next month"));
?>
<?php get_template_part( 'template-parts/header-landing-mirai'); ?>
<style>
    body {
    background-size: contain;
    background-repeat: no-repeat;
    background-color:#DEE2EF;
    }
    @media only screen and (max-width: 900px){
        body {
            background-size: inherit;
        }
}
.el-contenedor-gde {
    background: #FFF;
    border-radius: 9px;
    padding: 99px;
    box-shadow: 0px 3px 9px #08469a4d;
}
p.que-es-mirai{
    font-size: 24px;
    font-weight: 200;
    color: #001e42;
    line-height: 32px;
}
#acerca-mirai h1 {
    font-weight: 800;
    font-size: 36px;
    text-transform: uppercase;
    color: #56C0F0;
    font-family: 'Red Hat Mono', monospace;
}
.el-contenedor-gde{
    position: relative;
    padding: 55px 98px;
}
.el-contenedor-gde::before {
    width: 20px;
    background: blue;
    height: 100%;
    position: absolute;
    content: ' ';
    left: 0;
    top: 0;
    overflow: hidden;
    border-radius: 9px 0px 0px 9px;
}
img.mirai-contenedor{
    position: absolute;
}
img.mirai-contenedor {
    position: absolute;
    top: -85px;
    right: -220px;
}
#formulario-interes-landing{
    background: #033785
}
#formulario-interes-landing h1{
    font-family: 'Red Hat Mono', monospace;
    font-weight: 800;
    color: #FFF;
    font-size: 36px;
}
.pildora-sem {
    background: #FFF;
    border-radius: 9px;
    padding: 10px;
    padding-left: 45px;
    margin-bottom: 58px;
    box-shadow: 0px 3px 9px #08469a4d;
    position: relative;
    overflow: hidden;
    min-height: 116px;
    box-shadow: 0px 6px 6px #0017ff26;
}
.pildora-sem::before {
    content: ' ';
    width: 20px;
    height: 100%;
    position: absolute;
    left: 0px;
    top: 0px;
}
.pildora-sem.az::before{
    background: #00A0D2;
}
.pildora-sem.mora::before{
    background: #BBC1EB;
}
.pildora-sma {
    background: #FFF;
    border-radius: 9px;
    box-shadow: 0px 6px 6px #0017ff26;
    height: 72px;
}
.pildora-sma p {
    margin: 0;
    text-align: center;
    padding: 12px;
    font-family: 'Red Hat Mono', monospace;
    width: 100%;
}
h2.nombre-pildora{
    font-family: 'Red Hat Mono', monospace;
    font-size: 16px;
    color: #001e42;
    font-weight: 800;
}
p.ponente{
    font-family: 'Red Hat Mono', monospace;
    font-size: 16px;
    font-weight: 100;
    margin-bottom: 0px;
}
#temas-interes{
    background: #BBC1EB;
}
#temas-interes h1{
    font-family: 'Red Hat Mono', monospace;
    color: #0a2874;
    font-size:36px;
    font-weight: 200;
}
#seminarios-talleres h1 {
    background: #00A0D2;
    padding: 25px;
    color: #FFF;
    font-weight: 700;
    font-size: 48px;
    font-family: 'Red Hat Mono', monospace;
}
#calendario-eventos h1 {
    background: #033785;
    padding: 25px;
    color: #FFF;
    font-weight: 700;
    font-size: 48px;
    font-family: 'Red Hat Mono', monospace;
    text-transform: uppercase;
}
p.seminarios-inst {
    font-size: 30px;
    font-family: 'Red Hat Mono', monospace;
    font-size: 30px;
    color: #0a2874;
}
.dia-cal {
    background: rgba(255, 255, 255, 0.4);
    padding: 15px;
    margin: 0 10px;
    display: inherit;
    padding-bottom: 45px;
    padding-top: 20px;
    border-radius: 10px;
}
#calendario-eventos p.ponente {
    margin: 0px;
}
#calendario-eventos .pildora-sem {
    margin-bottom: 20px;
}
#calendario-eventos p.ponente{
    font-size: 14px;
}
#calendario-eventos .pildora-sem {
    padding-left: 25px;
}

h2.dia-del-evento {
    font-size: 30px;
    font-family: 'Red Hat Mono', monospace;
    color: #0A2874;
    border-bottom: 1px solid #00A0D2;
    padding-bottom: 15px;
    margin-bottom: 14px;
}
.un-paquete {
    background: #FFF;
    border-radius: 15px;
    overflow: hidden;
    text-align: center;
}

#inversion-programa h2 {
    width: 100%;
    text-align: center;
    font-size: 24px;
    background: #ABC5F7;
    font-family: 'Red Hat Mono', monospace;
    font-weight: 800;
    padding: 15px 0px;
}
#inversion-programa p.el-precio {
    font-size: 36px;
    font-weight: 600;
    font-family: 'Red Hat Mono', monospace;
}
p.incluye {
    font-family: 'Red Hat Mono', monospace;
}
#inversion-programa p.el-precio {
    font-size: 36px;
    font-weight: 600;
    font-family: 'Red Hat Mono', monospace;
    line-height: 32px;
}
span.precio-usd {
    font-family: 'Red Hat Mono', monospace;
    font-size: 30px;
    line-height: 40px;
}
#inversion-programa h1 {
    background: #00A0D2;
    padding: 25px;
    color: #FFF;
    font-weight: 700;
    font-size: 48px;
    font-family: 'Red Hat Mono', monospace;
    text-transform: uppercase;
}
.el-contenedor-gde-ch {
    background: #FFF;
    border-radius: 9px;
    padding: 99px;
    box-shadow: 0px 3px 9px #08469a4d;
}
section#acerca-christian{
    font-family: 'Red Hat Mono', monospace;
}
p.pre-texto-entrada {
    color: #4323ff;
    font-size: 18px;
    font-weight: 300;
    line-height: 23px;
}
section#acerca-christian p.narrativa {
    font-size: 15px;
}
img.christian-pena {
    position: absolute;
    top: 75px;
    right: -300px;
}
#acerca-christian h1 {
    font-weight: 800;
}
#formulario-interes-landing label {
    color: cyan;
}
section#leyenda-mirai {
    background: #033785;
}
section#leyenda-mirai p{
    font-family: 'Red Hat Mono', monospace;
    font-weight: 200;
    font-size: 24px;
    line-height: 36px;
    color: #f6f6f6;
}
#leyenda-mirai h1 {
    color: #f6f6f6;
    font-family: 'Red Hat mono', monospace;
    font-weight: 200;
}
img.el-icono {
    width: 50px;
}
.el-whatsapp {
    position: relative;
}
span.de-contacto {
    position: absolute;
    color: #FFF;
    font-size: 16px;
    width: 150px;
    left: 110px;
}
span.el-telefono {
    font-weight: 800;
    font-family: 'Georama';
    font-size: 30px;
    color: #FFF;
    position: absolute;
    width: 220px;
    top: 10px;
}
.col-lg-12.slide-1 {
    height: 123vh;
    background: url('<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Landingpage_MIRAI_.webp');
    background-size: cover;
    background-repeat: no-repeat;
    background-position-x: center;
}
h1.desc-azul {
    background: #00A0D2;
    padding: 25px;
    color: #FFF;
    font-weight: 700;
    font-size: 30px;
    font-family: 'Red Hat Mono', monospace;
}
p.educacion{
    font-family: 'Red Hat Mono', monospace;
    color: #0a2874;
    font-size: 21px;
    line-height: 27px;
}
h2.sigla-programa {
    font-family: 'Red Hat Mono', monospace;
    font-size: 32px;
    font-weight: 800;
    color: #0018ff;
}
h3.nombre {
    font-family: 'Red Hat Mono',monospace;
    font-size: 21px;
    font-weight: 300;
}
p.texto-disclaimer{
    font-size: 18px;
    font-weight: 400;
    font-family: 'Red Hat Mono', monospace;
}
@media only screen and (max-width: 600px){
    .el-contenedor-gde {
        position: relative;
        padding: 10px 5px 10px 25px;
    }
    p.que-es-mirai {
        font-size: 17px;
        font-weight: 200;
        color: #001e42;
        line-height: 27px;
    }
    p.educacion {
        font-family: 'Red Hat Mono', monospace;
        color: #0a2874;
        font-size: 16px;
        line-height: 24px;
    }
    .col-lg-12.slide-1 {
        height: 104vh;
        background: url(https://www.iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/img/Landingpage_MIRAI_.webp);
        background-size: contain;
        background-repeat: no-repeat;
    }
    .pildora-sem {
    margin-bottom: 18px;
    }
    .el-contenedor-gde-ch {
    padding: 19px;
    }
    section#leyenda-mirai p {
    font-family: 'Red Hat Mono', monospace;
    font-weight: 200;
    font-size: 16px;
    line-height: 36px;
    color: #f6f6f6;
    }
    section#leyenda-mirai p {
    font-size: 16px;
    }
}

</style>
<div class="container-fluid" style="margin-top: -83px;">
        <div class="row slider">
            <div class="col-lg-12 slide-1">
                <div class="container-fluid" style="height: 100%;">
                    <div class="row" style="height: 100%">
                        <!-- <div class="col-lg-6 offset-lg-5 col-10 offset-1 align-self-end">
                            <h1 class="desc-azul">¿SABÍAS QUE IEXE UNIVERSIDAD SERÁ SEDE DIGITAL DE EMFUTECH 2022?</h1>
                            <p class="educacion mb-5">Gracias al convenio firmado entre MIRAI Innovation en colaboración con IEXE Universidad, se busca impulsar la carrera de más profesionales en Latinoamérica por medio de workshops y conferencias enfocadas al sector de Innovación, Desarrollo y Tecnología.</p>
                        </div> -->
                    </div>
                </div>
                    <!-- <img class="img-fluid slide-1" src="assets/img/slide_1.png" alt=""> -->

            </div>
        </div>
</div>
<section id="sabias-que">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-10 d-block mx-auto align-self-end">
                <h1 class="desc-azul">¿SABÍAS QUE IEXE UNIVERSIDAD SERÁ SEDE DIGITAL DE EMFUTECH 2022?</h1>
                <p class="educacion mb-5">Gracias al convenio firmado entre MIRAI Innovation en colaboración con IEXE Universidad, se busca impulsar la carrera de más profesionales en Latinoamérica por medio de workshops y conferencias enfocadas al sector de Innovación, Desarrollo y Tecnología.</p>
            </div>
        </div>
    </div>
</section>
<section id="acerca-mirai">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10">
                <div class="el-contenedor-gde">
                    <h1 class="mb-4">¿QUÉ ES MIRAI?</h1>
                    <p class="que-es-mirai">
                        El Instituto de Investigación de la Innovación MIRAI, situado en Osaka (Japón), es una empresa especializada en el desarrollo tecnológico, la investigación, consultoría y el entrenamiento académico. Fue fundada por el Dr. Christian Peñaloza, Doctor en Neurociencia Cognitiva Robótica por la Universidad de Osaka y Maestro en Robótica e Innovación de Sistemas por la misma institución.
                    </p>
                    <img class="mirai-contenedor d-none d-md-block" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/mirai/foto_MIRAI.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="formulario-interes-landing" class="pb-5">
    <div class="container">
        
        <form id="form-interes-landing" class="form-interes-landing" onsubmit="event.preventDefault(); enviarFormulario(this)" data-origen="Landing">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center pt-5 pb-3">¿Estás interesado en EMFUTECH?</h1>
                </div>
            
                    <div class="col-md-4">
                        <label for="nombre">Nombre*</label>
                        <input id="nombre" name="nombre" type="text" class="form-control nombre-landing" placeholder="Ingresa aquí tu nombre" required>
                    </div>

                    <div class="col-md-4">
                        <label for="correo">Correo electrónico*</label>
                        <input id="correo" name="email" type="email" class="form-control" placeholder="Ingresa aquí tu correo" required>
                    </div>
                    
                    <div class="col-md-4">
                        <label for="telefono">Teléfono o celular*</label>
                        <input type="text" id="telefono" class="form-control telefono-landing" placeholder="Ingresa aquí tu número" required>
                        <input id="hiddenPrograma" value="SINA" name="programa" type="hidden">
                        <input id="hiddenConvenio" name="convenios" type="hidden" value="125">                        
                    </div>                
            </div>
            <button type="submit"  class="enviar-landing btn sin-form btn-primario mt-3 ld-ext-right mx-auto d-block text-uppercase">Enviar registro<div class="ld ld-ring ld-spin"></div></button>
        </form>
        <span class="disclaimer text-white mt-3">Al ingresar tus datos, aceptas nuestro <a href="https://iexe.edu.mx/aviso-de-privacidad/" target="_blank">Aviso de Privacidad</a>.</span>
    </div>
    
</section>
<section id="seminarios-talleres">
    <div class="container">
        <div class="row">
                <h1 class="mb-5">SEMINARIOS & TALLERES</h1>
        </div>
        <div class="row">
            <div class="col">
                <!-- <p class="seminarios-inst"><span class="circulo mor"></span>SEMINARIOS <span class="circulo az"></span>TALLERES Duración: 3h</p> -->
            </div>
                
        </div>
        <div class="row">
            <div class="col-md-5 col-12">
                <div class="pildora-sem mora">
                    <h2 class="nombre-pildora">Neurotechnology -Advances and Future Applications</h2>
                    <p class="ponente">Ponente: Christian Peñaloza, PhD.</p>
                </div>
                <div class="pildora-sem mora">
                    <h2 class="nombre-pildora">Performance Improvement through Neuroscience Approaches</h2>
                    <p class="ponente">Ponente: Carlos Trenado, PhD.</p>
                </div>
                <div class="pildora-sem az">
                    <h2 class="nombre-pildora">Building a Brain-Machine Interface System</h2>
                    <p class="ponente">Ponente: Christian Peñaloza, PhD.</p>
                </div>
                <div class="pildora-sem mora">
                    <h2 class="nombre-pildora">Understanding the Consumer Decisions through Neuroscience</h2>
                    <p class="ponente">Ponente: Karla Quintana, Msc.</p>
                </div>
            </div>
            <div class="col-md-5 offset-md-1 col-12">
                <div class="pildora-sem az">
                    <h2 class="nombre-pildora">Human Assistive Technologies for Rehabilitation and Daily Life</h2>
                    <p class="ponente">Ponente: Alvaro Rios, PhD.</p>
                </div>
                <div class="pildora-sem az">
                    <h2 class="nombre-pildora">Introduction to Artificial Intelligence and Applications of AI in real time Along with Phases of an Artificial Intelligence Project Development</h2>
                    <p class="ponente">Ponente: Eng. Nagaraju Dasari</p>
                </div>
                <div class="pildora-sem az">
                    <h2 class="nombre-pildora">Data Preparation and Processing</h2>
                    <p class="ponente">Ponente: Eng. Nagaraju Dasari</p>
                </div>
                <div class="pildora-sem az">
                    <h2 class="nombre-pildora">Unsupervised Machine Learning Algorithms</h2>
                    <p class="ponente">Ponente: Eng. Nagaraju Dasari</p>
                </div>
        </div>
    </div>
</section>
<section id="temas-interes" class="pb-4 pt-4">
    <div class="container">
        <div class="row">
            <h1 class=" mx-auto mb-3">TEMAS DE INTERÉS</h1>
        </div>
        <div class="row pb-3">
            <div class="col-6 mb-1 col-sm-2"><div class="pildora-sma d-flex"><p class="align-self-center text-center">Neurotecnología</p></div></div>
            <div class="col-6 mb-1 col-sm-2"><div class="pildora-sma d-flex"><p class="align-self-center text-center">Inteligencia Artificial</p></div></div>
            <div class="col-6 mb-1 col-sm-2"><div class="pildora-sma d-flex"><p class="align-self-center text-center">Sistemas Robóticos</p></div></div>
            <div class="col-6 mb-1 col-sm-2"><div class="pildora-sma d-flex"><p class="align-self-center text-center">Tecnología Aeroespacial</p></div></div>
            <div class="col-6 mb-1 col-sm-2"><div class="pildora-sma d-flex"><p class="align-self-center text-center">Blockchain</p></div></div>
            <div class="col-6 mb-1 col-sm-2"><div class="pildora-sma d-flex"><p class="align-self-center text-center">Nanotecnología y Biotecnología</p></div></div>
        </div>
    </div>
</section>
<section id="calendario-eventos">
    <div class="container">
        <div class="row">
            <h1 class="mb-5">Calendario de eventos</h1>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="dia-cal">
                    <h2 class="dia-del-evento text-center"> 12 de Septiembre</h2>
                    <div class="pildora-sem az">
                        <h2 class="nombre-pildora">Introduction to Artificial Intelligence and Applications of AI in real time Along with Phases of an Artificial Intelligence Project Development</h2>
                        <p class="ponente">Ponente: Nagarau Dasari, PhD</p>
                        <p class="ponente">01:00 - 02:30 hrs</p>
                        
                    </div>
                    <div class="pildora-sem mora">
                        <h2 class="nombre-pildora">Aerial-Terrestrial-Aquatic (ATA) Robot for ATA Extreme Environment</h2>
                        <p class="ponente">Ponente: Photchara Ratsamee, PhD</p>
                        <p class="ponente">02:45 - 04:15 hrs</p>
                    </div>
                    <div class="pildora-sem az">
                        <h2 class="nombre-pildora">Virtual Reality: Hands on and training</h2>
                        <p class="ponente">Ponente: Victor Valencia, PhD</p>
                        <p class="ponente">06:30 - 07:45 hrs</p>
                    </div>
                    <div class="pildora-sem mora">
                        <h2 class="nombre-pildora">Virtual Reality: Hands on and training</h2>
                        <p class="ponente">Ponente: Victor Valencia, PhD</p>
                        <p class="ponente">08:00 - 09:30 hrs</p>
                    </div>
                    <div class="pildora-sem az">
                        <h2 class="nombre-pildora">Neurotechnology: Advances and Future Applications</h2>
                        <p class="ponente">Ponente: Christian Penaloza, PhD</p>
                        <p class="ponente">23:00 - 00:30 hrs</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="dia-cal">
                    <h2 class="dia-del-evento text-center"> 13 de Septiembre</h2>
                    <div class="pildora-sem mora">
                        <h2 class="nombre-pildora">Python Programming Basics and Setting up Machine Learning Environment</h2>
                        <p class="ponente">Ponente: Nagarau Dasari, PhD</p>
                        <p class="ponente">01:00 - 02:30 hrs</p>
                    </div>
                    <div class="pildora-sem az">
                        <h2 class="nombre-pildora">Python Programming Basics and Setting up Machine Learning Environment</h2>
                        <p class="ponente">Ponente: Nagarau Dasari, PhD</p>
                        <p class="ponente">02:45 - 04:15 hrs</p>
                    </div>
                    <div class="pildora-sem mora">
                        <h2 class="nombre-pildora">Building a Brain-Machine Interface System </h2>
                        <p class="ponente">Ponente: Christian Penaloza, PhD</p>
                        <p class="ponente">18:30 - 19:45 hrs</p>
                    </div>
                    <div class="pildora-sem az">
                        <h2 class="nombre-pildora">Building a Brain-Machine Interface System </h2>
                        <p class="ponente">Ponente: Christian Penaloza, PhD</p>
                        <p class="ponente">20:00 - 21:30 hrs</p>
                    </div>
                    <div class="pildora-sem mora">
                        <h2 class="nombre-pildora">Data Preparation and Processing</h2>
                        <p class="ponente">Ponente: Nagarau Dasari, PhD</p>
                        <p class="ponente">23:00 - 00:30 hrs</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="dia-cal">
                    <h2 class="dia-del-evento text-center"> 14 de Septiembre</h2>
                    <div class="pildora-sem az">
                        <h2 class="nombre-pildora">Data Preparation and Processing</h2>
                        <p class="ponente">Ponente: Nagarau Dasari, PhD</p>
                        <p class="ponente">01:00 - 02:30 hrs</p>
                    </div>
                    <div class="pildora-sem mora">
                        <h2 class="nombre-pildora">Innovative Technology for the Industry</h2>
                        <p class="ponente">Ponente: Nabil Azar, PhD</p>
                        <p class="ponente">02:45 - 04:15 hrs</p>
                    </div>
                    <div class="pildora-sem az">
                        <h2 class="nombre-pildora">Blockchain, Digital Assets and Cryptocurrencies</h2>
                        <p class="ponente">Ponente: Mauricio Corona, PhD</p>
                        <p class="ponente">18:30 - 19:45 hrs</p>
                    </div>
                    <div class="pildora-sem mora">
                        <h2 class="nombre-pildora">Innovation in satellites</h2>
                        <p class="ponente">Ponente: Jose Miguel Ramirez, PhD</p>
                        <p class="ponente">20:00 - 21:30 hrs</p>
                    </div>
                    <div class="pildora-sem az">
                        <h2 class="nombre-pildora">Supervised Machine Learning Algorithms </h2>
                        <p class="ponente">Ponente: Nagarau Dasari, PhD</p>
                        <p class="ponente">23:00 - 00:30 hrs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section id="inversion-programa">
    <div class="container">
        <div class="row">
            <div class="col-12"><h1 class="mb-5">Inversión del programa</h1></div>
            <p class="texto-disclaimer"> - 20% de Descuento exclusivo a nuestra comunidad de estudiantes.</p>
            
        </div>
        <div class="row d-flex justify-content-between mb-md-5">
                    <div class="col-md-3 col-sm-6 col-12 mb-2">
                        <div class="un-paquete">
                            <h2>PAQUETE BIT</h2>
                            <p class="el-precio">
                                <span class="num-precio">$600</span>
                                <span class="pesos">pesos</span>
                            </p>
                            <span class="precio-usd">$30 USD</span>
                            <p class="incluye">
                                <strong>Incluye:</strong><br>
                                2 - Conferencias <br>
                                0 - Talleres <br>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12 mb-2">
                        <div class="un-paquete">
                            <h2>PAQUETE BYTE</h2>
                            <p class="el-precio">
                                <span class="num-precio">$1,000</span>
                                <span class="pesos">pesos</span>
                            </p>
                            <span class="precio-usd">$50 USD</span>
                            <p class="incluye">
                                <strong>Incluye:</strong><br>
                                5 - Conferencias <br>
                                0 - Talleres <br>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12 mb-2">
                        <div class="un-paquete">
                            <h2>PAQUETE KILOBYTE</h2>
                            <p class="el-precio">
                                <span class="num-precio">$1,600</span>
                                <span class="pesos">pesos</span>
                            </p>
                            <span class="precio-usd">$80 USD</span>
                            <p class="incluye">
                                <strong>Incluye:</strong><br>
                                5 - Conferencias <br>
                                1 - Talleres <br>
                            </p>
                        </div>
                    </div>
        </div>
        <div class="row d-flex justify-content-between  mb-md-5">
                    <div class="col-md-3 col-sm-6 col-12 mb-2">
                        <div class="un-paquete">
                            <h2>PAQUETE MEGABYTE</h2>
                            <p class="el-precio">
                                <span class="num-precio">$2,500</span>
                                <span class="pesos">pesos</span>
                            </p>
                            <span class="precio-usd">$125 USD</span>
                            <p class="incluye">
                                <strong>Incluye:</strong><br>
                                6 - Conferencias <br>
                                3 - Talleres <br>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12 mb-2">
                        <div class="un-paquete">
                            <h2>PAQUETE GIGABYTE</h2>
                            <p class="el-precio">
                                <span class="num-precio">$5,000</span>
                                <span class="pesos">pesos</span>
                            </p>
                            <span class="precio-usd">$250 USD</span>
                            <p class="incluye">
                                <strong>Incluye:</strong><br>
                                9 - Conferencias <br>
                                6 - Talleres <br>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12 mb-2">
                        <div class="un-paquete">
                            <h2>PAQUETE TERABYTE</h2>
                            <p class="el-precio">
                                <span class="num-precio">$6,500</span>
                                <span class="pesos">pesos</span>
                            </p>
                            <span class="precio-usd">$325 USD</span>
                            <p class="incluye">
                                <strong>Incluye:</strong><br>
                                14 - Conferencias <br>
                                10 - Talleres <br>
                            </p>
                        </div>
                    </div>
        </div>
        <div class="row d-flex justify-content-between  mb-md-5">
                    <div class="col-md-3 col-sm-6 col-12 mb-2">
                        <div class="un-paquete">
                            <h2>PAQUETE PETABYTE</h2>
                            <p class="el-precio">
                                <span class="num-precio">$7,000</span>
                                <span class="pesos">pesos</span>
                            </p>
                            <span class="precio-usd">$350 USD</span>
                            <p class="incluye">
                                <strong>Incluye:</strong><br>
                                17 - Conferencias <br>
                                 0 - Talleres <br>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12 mb-2">
                        <div class="un-paquete">
                            <h2>PAQUETE EXABYTE</h2>
                            <p class="el-precio">
                                <span class="num-precio">$9,000</span>
                                <span class="pesos">pesos</span>
                            </p>
                            <span class="precio-usd">$450 USD</span>
                            <p class="incluye">
                                <strong>Incluye:</strong><br>
                                0 - Conferencias <br>
                                25 - Talleres <br>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12 mb-2">
                        <div class="un-paquete">
                            <h2>PAQUETE ZETTABYTE</h2>
                            <p class="el-precio">
                                <span class="num-precio">$13,000</span>
                                <span class="pesos">pesos</span>
                            </p>
                            <span class="precio-usd">$650 USD</span>
                            <p class="incluye">
                                <strong>Incluye:</strong><br>
                                17 - Conferencias <br>
                                25 - Talleres <br>
                            </p>
                        </div>
                    </div>
        </div>

    </div>
</section>
<section id="acerca-christian">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="el-contenedor-gde-ch">
                    <h1 class="mb-4">CHRISTIAN PEÑALOZA, PH.D.</h1>
                    <p class="pre-texto-entrada">
                        CEO of Mirai Innovation Research Institute, Ph.D. in Cognitive Neuroscience applied to Robotics from Osaka University.
                    </p>
                    <p class="narrativa">
                        Investigador en las áreas de aprendizaje automático y neurociencia cognitiva aplicada a interfaces cerebro-com-putadora (BCI) y robótica. Actualmente investiga la implementación de algoritmos de aprendizaje profundo para mejorar la clasificación de los comandos basados en EEG de una BCI. <br>
                         Apasionado del desarrollo de nuevas tecnologías que puedan contribuir a una mejor sociedad en el futuro.
                    </p>
                    <p class="narrativa">
                        Sus objetivos profesionales son dos:
                    </p>
                    <ul>
                        <li>Desarrollar algoritmos novedosos que puedan usarse para mejorar la operatividad de la interfaz cerebro-máquina.</li>
                        <li>Diseñar técnicas novedosas para entrenar a los usuarios a generar actividad cerebral adecuada para poder operar un BMI.</li>
                    </ul>
                    <p>Es Doctor en Neurociencia Cognitiva Robótica por la Universidad de Osaka y Maestro en Robótica e Innovación de Sistemas por la misma institución.</p>
                    <img class="christian-pena d-none d-md-block" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/christian_iexe_mirai.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="leyenda-mirai" class="pb-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mb-4">¿Quieres ser parte de <strong>MIRAI</strong>?</h1>
            </div>
            <div class="col-12">
                <p class="text-center">
                    La misión de IEXE Universidad es y seguirá siendo ayudar a nuestros alumnos a crear <strong>valor público</strong>, a través de la enseñanza de herramientas prácticas y modelos para la <strong>toma de decisiones</strong> mediante una <strong>plataforma disponible las 24 horas del día.</strong>
                </p>
            </div>               
        </div>
        <div class="row">
                <div class="col-10 col-md-3 mx-auto"><a href="https://forms.gle/8c1RWD8KGHtXnE2r9" class="enviar-landing btn sin-form btn-primario mt-3 ld-ext-right mx-auto d-block text-uppercase text-center">ENVIAR REGISTRO</a></div>
        </div> 
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center relacionados">Programas relacionados</h1>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-md-6 offset-md-2 col-12 text-center text-sm-left mt-3">
                            <h2 class="sigla-programa">MCDA</h2>
                            <h3 class="nombre">Maestría en <br> Ciencia de Datos <br> Aplicada</h3>
                            <a href="/oferta-educativa" class="enviar-landing btn sin-form btn-primario mt-3 ld-ext-right mx-auto d-block text-uppercase text-center" >¡DESCÚBRELA!</a>
                        </div>
                        <div class="col-md-4">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Escudo_MCDA.webp" alt="" class="img-fluid d-none d-sm-block">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-md-6 offset-md-2 col-12 text-center text-sm-left mt-3">
                            <h2 class="sigla-programa">MITI</h2>
                            <h3 class="nombre">Maestría en<br> Ciencia de Datos <br> Aplicada</h3>
                            <a href="/oferta-educativa" class="enviar-landing btn sin-form btn-primario mt-3 ld-ext-right mx-auto d-block text-uppercase text-center" >¡DESCÚBRELA!</a>
                        </div>
                        <div class="col-md-4">
                            <img src="https://www.iexe.edu.mx/wp-content/uploads/2022/01/Escudo_MITI.webp" alt="" class="img-fluid d-none d-sm-block">
                        </div>
                    </div>
                    
                </div>
                
                
                
            </div>
        </div>
    </div>
</section>   
<?php get_template_part( 'template-parts/footer-landing'); ?>
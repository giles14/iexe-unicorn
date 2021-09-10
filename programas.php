<?php
/*
Template Name: Programas
*/
?>
<?php get_header( ); ?>
<!-- <section id="principal">
    <div class="imagen-principal-completa">
        
    </div> 
</section> -->
<section id="todos-los-programas-academicos buffer-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="titulo">Programas académicos 100% en línea</h1>
                <h2 class="description">Nuestros programas académicos, están diseñados para proporcionarte conocimiento valioso y verdaderamente práctico. Conócelos:</h2>
            </div>
        </div>
    </div>
    <section id="licenciaturas">
        <div class="container">
            <div class="row contenedor-programa">
                <div class="col-md-6">
                    <h1 class="nombre-programa"><i class="cyan uil uil-angle-right"></i>Licenciaturas</h1>
                    <ul class="licenciaturas">
                        <li><a href="/oferta-educativa/licenciatura-en-administracion-de-empresas/">Administración de Empresas</a> </li>
                        <li><a href="/oferta-educativa/licenciatura-en-ciencias-politicas-y-administracion-publica/">Ciencias Políticas y Administración Pública</a> </li>
                        <li><a href="/oferta-educativa/licenciatura-en-seguridad-publica/licenciatura-en-seguridad-publica">Seguridad Pública</a> </li>
                        <li><a href="/oferta-educativa/licenciatura-en-derecho/">Derecho</a> </li>
                    </ul>
                </div>
            </div>
        </div>  
    </section>
    <section id="maestrias">
        <div class="container">
            <div class="row contenedor-programa">
                <div class="col-md-6 offset-md-6">
                    <h1 class="nombre-programa"><i class="cyan uil uil-angle-right"></i>Maestrías</h1>
                    <ul class="maestrias">
                        <li><a href="#">Administración de Negocios</a> </li>
                        <li><a href="#">Ingeniería en Tecnologías de la Información</a> </li>
                        <li><a href="/oferta-educativa/maestria-en-administracion-y-politica-publicas">Administración y Políticas Públicas</a></li>
                        <li><a href="/oferta-educativa/maestria-en-evaluacion-de-politicas-publicas">Evaluación de Políticas Públicas</a></li>
                        <li><a href="/oferta-educativa/maestrias-en-finanzas-publicas">Finanzas Públicas</a></li>
                        <li><a href="/oferta-educativa/maestria-en-seguridad-publica-y-politicas-publicas">Seguridad Pública y Políticas Públicas</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>  
    </section>
    <section id="doctorado">
        <div class="container">
            <div class="row contenedor-programa">
                <div class="col-md-6">
                    <h1 class="nombre-programa"><i class="cyan uil uil-angle-right"></i>Doctorado</h1>
                    <ul class="doctorados">
                        <li><a href="/oferta-educativa/doctorado-en-politicas-publicas">Políticas Públicas</a> </li>
                    </ul>
                </div>  
            </div>
        </div>
    </section>
    <section id="masters">
        <div class="container">
            <div class="row contenedor-programa">
                <div class="col-md-6 offset-md-6">
                    <h1 class="nombre-programa"><i class="cyan uil uil-angle-right"></i>Másters</h1>
                    <ul class="masters">
                        <li><a href="/oferta-educativa/master-en-innovacion-y-gestion-educativa">Innovación y Gestión Educativa</a> </li>
                        <li><a href="#">Ciencia de Datos Aplicada</a> </li>
                        <li><a href="#">Inteligencia Artificial Aplicada</a> </li>
                    </ul>
                </div>  
            </div>
        </div>
    </section>
    <section id="diplomados">
        <div class="container">
            <div class="row contenedor-programa">
                <div class="col-md-6">
                    <h1 class="nombre-programa"><i class="cyan uil uil-angle-right"></i>Diplomados</h1>
                    <ul class="displomados">
                        <li><a href="/oferta-educativa/diplomado-en-disciplina-financiera-y-fiscalizacion/">Disciplina Financiera y Fiscalización</a> </li>
                        <li><a href="/oferta-educativa/diplomado-en-fundamentos-de-administracion-publica/">Fundamentos de Administración Pública</a> </li>
                        <li><a href="/oferta-educativa/diplomado-en-habilidades-gerenciales-y-liderazgo/">Habilidades Gerenciales y Liderazgo</a> </li>
                        <li><a href="/oferta-educativa/d-analisis-y-diseno-y-de-politicas-publicas/">Análisis y Diseño de Políticas Públicas</a> </li>
                        <li><a href="/oferta-educativa/diplomado-en-alta-direccion-en-la-funcion-publica/">Alta Dirección en la Función Pública</a></li>
                            
                    </ul>
                </div>
            </div>
        </div>  
    </section>
    <section id="capacitaciones">
        <div class="container">
            <div class="row contenedor-programa">
                <div class="col-md-6 offset-md-6">
                    <h1 class="nombre-programa"><i class="cyan uil uil-angle-right"></i>Capacitaciones</h1>
                    <ul class="capacitaciones">
                        <li><a href="#">Próximamente</a> </li>
                    </ul>
                </div>  
            </div>
        </div>
    </section>
</section>

<?php get_template_part( 'template-parts/interes'); ?>
<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="/admisiones"><img src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/banner-oferta.webp" alt="" class="img-fluid"></a>
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/vinculos'); ?>
<?php get_footer( ); ?>

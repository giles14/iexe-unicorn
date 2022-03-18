<?php /* Template Name: Testing template*/ ?>
<?php get_header( ); ?>
<style>
    body {
    background: url(<?php echo esc_url($image_principal['url']);  ?>) 0% 0% / contain no-repeat rgb(239, 239, 239);
    background-repeat: no-repeat;
    }
</style>
<section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Prueba de Formularios</h1>
                </div>
            </div>
        </div>
    </section>
<section id="interes">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="titulo">¿Deseas conocer alguno de nuestros programas?</h1>
                </div>
            </div>
            <div class="row buffer-60">
                <div class="col-md-6 d-none d-sm-block">
                        <img class="img-fluid escudo" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/escudo.webp" alt="">
                </div>
                <div class="fondo-x d-none d-sm-block">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/x.png" alt="">
                </div>
                <div class="col-md-5">
                    <p class="interes-programa">Estudia uno de nuestros programas académicos totalmente digital y adaptable. No descuides el resto de tus actividades gracias a una plataforma abierta las 24 horas del día, todos los días. Pertenece a una institución con dos décadas de experiencia en educación en línea.</p>
                    <form id="contacto">
                        <div class="form-group">
                          <label for="nombre">Nombre completo*</label>
                          <input type="text" name="nombre" placeholder="Ingresa aquí tu nombre" class="form-control" id="nombre" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo electrónico*</label>
                            <input name="email" type="email" placeholder="Ingresa aquí tu correo electrónico" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono móvil*</label>
                            <input name="telefono" type="tel" placeholder="Ingresa aquí tu número telefónico" class="form-control" id="telefono" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="programa-interes">Selecciona un programa</label>
                            <?php get_template_part( 'template-parts/selectProgramas'); ?>
                        </div>
                        
                            <?php get_template_part( 'template-parts/formularios-convenios'); ?>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primario mt-3">Enviar registro</button>
                        </div>
                      </form>

                </div>
            </div>
        </div>
    </section>
    <?php get_footer( ); ?>
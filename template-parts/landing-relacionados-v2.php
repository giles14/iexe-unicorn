

            <?php 
                
                $featured_posts = get_field('programa_relacionado_1');
                if( $featured_posts ): ?>
                    
                    <section id="programas-relacionados" class="d-block mt-40">
                        <div class="container">
                            <div class="row">
                                <div class="fondo-blanco"></div>
                                <div class="col-md-12">
                                    <h1 class="programas-relacionados mb-5">
                                        Programas relacionados
                                    </h1>
                                </div>
                            </div>
                        
                        <div class="row">
                            <?php foreach( $featured_posts as $featured_post ): 
                                $elTipos = get_field('tipo_de_programa', $featured_post->ID);
                                $elTipos = explode(" " , $elTipos);
                                $permalink = get_permalink( $featured_post->ID );
                                $title = get_the_title( $featured_post->ID );
                                $clave_programa = get_field( 'clave_programa', $featured_post->ID );
                                $image_principal = get_field('imagen_de_programa', $featured_post->ID);
                                ?>
                        <div class="col-6 col-md-2 offset-md-1">
                            <p class="sigla-prog"><?php echo esc_html( $clave_programa ); ?></p>
                            <p class="nombre-prog mb-5"><?php echo ($elTipos[0]) ?> en <br> <?php echo esc_html( $title ); ?></p>
                            <a href="<?php echo esc_url( $permalink ); ?>" class="boton-descubrelo mb-3">¡DESCÚBRELO!</a>
                        </div>
                        <div class="col-6 col-lg-2">
                            <?php if( !empty( $image_principal ) ): ?>
                                <img src="<?php echo esc_url($image_principal['url']); ?>" alt="<?php echo esc_attr($image_principal['alt']); ?>" class="img-fluid d-none d-sm-block">
                            <?php endif; ?>
                        </div>                        
                    <?php endforeach; ?>

                    <?php  elseif(empty($featured_posts)): ?>
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="text-center relacionados">Programas relacionados</h1>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 offset-md-1 col-12 text-center text-sm-left">
                                        <h2 class="sigla-programa">MSP</h2>
                                        <h3 class="nombre">Maestría en <br> Seguridad Pública</h3>
                                        <a href="/oferta-educativa" class="tipo-boton">¡Descúbrelo!</a>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/escudo_MSP.webp" alt="" class="img-fluid d-none d-sm-block">
                                    </div>
                                    <div class="col-md-3 offset-md-1 col-12 text-center text-sm-left mt-3">
                                        <h2 class="sigla-programa">DPP</h2>
                                        <h3 class="nombre">Doctorado en<br> Políticas Públicas</h3>
                                        <a href="/oferta-educativa" class="tipo-boton">¡Descúbrelo!</a>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/escudo_DPP.webp" alt="" class="img-fluid d-none d-sm-block">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
                
                <!-- <div class="col-md-3 offset-md-1 col-12 text-center text-sm-left mt-3">
                    <h2 class="sigla-programa">DPP</h2>
                    <h3 class="nombre">Doctorado en<br> Políticas Públicas</h3>
                    <a href="/oferta-educativa" class="tipo-boton">¡Descúbrelo!</a>
                </div>
                <div class="col-md-2">
                    <img src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/escudo_DPP.webp" alt="" class="img-fluid d-none d-sm-block">
                </div> -->
                
            </div>
        </div>
    </div>
</section>
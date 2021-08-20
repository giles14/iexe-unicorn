<?php get_header( ); ?>
<section id="seleccion-categoria" class="buffer-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="titulo">Categorías</h1>
                <h2 class="description">Elige el programa en el que deseas inscribirte para ver todo el proceso</h2>
            </div>
            <div class="col-md-2">
            </div>

            <div class="col-md-4">
                <div class="buscar">Buscar</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="categoria-img seguridad">
                    <h2>Seguridad Pública</h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="categoria-img politicas">
                    <h2>Políticas Públicas</h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="categoria-img liderazgo">
                    <h2>Liderazgo</h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="categoria-img internacionales">
                    <h2>Internacionales</h2>
                </div>
            </div>
        </div>
    </div>
</section>

    
    <!-- <section id="ultimas-entradas">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="titulo">Entradas de Blog</h1>
                    <h2 class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</h2>
                </div>  
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="bloque-entrada-blog">
                        <img class="entrada-destacada img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/blogMiniatura.webp" alt="Alternativo de la imagen desplegada">
                        <div class="bloque-flecha"></div>
                        <div class="bloque-entrada">
                            <span class="meta fecha">15 Junio, 2021</span>
                            <span class="meta categoria">Blog</span>
                            <h2 class="titulo">Encabezado principal de la noticia hasta tres renglones de descripción</h2>
                            <p>Quiere la boca exhausta vid, kiwi, piña y fugaz jamón. Fabio me exige, sin tapujosm que añada cerveza al whisky. Jovencillo emponzoñado de whisky, ¡que figurota exhibes!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="bloque-entrada-blog">
                        <img class="entrada-destacada img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/blogMiniatura.webp" alt="Alternativo de la imagen desplegada">
                        <div class="bloque-flecha"></div>
                        <div class="bloque-entrada">
                            <span class="meta fecha">15 Junio, 2021</span>
                            <span class="meta categoria">Blog</span>
                            <h2 class="titulo">Encabezado principal de la noticia hasta tres renglones de descripción</h2>
                            <p>Quiere la boca exhausta vid, kiwi, piña y fugaz jamón. Fabio me exige, sin tapujosm que añada cerveza al whisky. Jovencillo emponzoñado de whisky, ¡que figurota exhibes!</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                <div class="bloque-entrada-blog">
                        <img class="entrada-destacada img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/blogMiniatura.webp" alt="Alternativo de la imagen desplegada">
                        <div class="bloque-flecha"></div>
                        <div class="bloque-entrada">
                            <span class="meta fecha">15 Junio, 2021</span>
                            <span class="meta categoria">Blog</span>
                            <h2 class="titulo">Encabezado principal de la noticia hasta tres renglones de descripción</h2>
                            <p>Quiere la boca exhausta vid, kiwi, piña y fugaz jamón. Fabio me exige, sin tapujosm que añada cerveza al whisky. Jovencillo emponzoñado de whisky, ¡que figurota exhibes!</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> -->

    <section id="ultimas-entradas">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="titulo">Entradas de Blog</h1>
                    <h2 class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</h2>
                </div>  
            </div>
            <div class="row">
            <?php 
                // Define our WP Query Parameters
                //$the_query = new WP_Query( 'posts_per_page=3' ); 
                $the_query = new WP_Query( array( 'category_name' => 'blog',
                                                    'posts_per_page' => 3
                
                                            ) ); ?>
                
                <?php 
                while ($the_query -> have_posts()) : $the_query -> the_post(); 
                ?>
                <div class="col-md-4">
                    <div class="bloque-entrada-blog">
                        <?php the_post_thumbnail('ultimas-archivo', array('class' => 'img-fluid')); ?>
                        <div class="bloque-flecha"></div>
                        <div class="bloque-entrada">
                            <span class="meta fecha"><?php echo get_the_date('j F\, Y'); ?></span>
                            <span class="meta categoria">Blog</span>
                            <h2 class="titulo"><a href="<?php the_permalink() ?>"><?php echo mb_strimwidth(get_the_title(), 0, 62, '...'); ?></a></h2>
                            <p><?php echo wp_trim_excerpt() ?></p>
                        </div>
                    </div>
                </div>
                <?php 
                // Repeat the process and reset once it hits the limit
                endwhile;
                wp_reset_postdata();
                ?>
            
            </div>
                
        </div>
    </section>

    <section id="ultimas-noticias">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="titulo">Últimas noticias..</h1>
                    <h2 class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="bloque-entrada-blog">
                        <img class="entrada-destacada img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/blogMiniatura.webp" alt="Alternativo de la imagen desplegada">
                        <div class="bloque-flecha"></div>
                        <div class="bloque-entrada">
                            <span class="meta fecha">15 Junio, 2021</span>
                            <span class="meta categoria">Blog</span>
                            <h2 class="titulo">Encabezado principal de la noticia hasta tres renglones de descripción</h2>
                            <p>Quiere la boca exhausta vid, kiwi, piña y fugaz jamón. Fabio me exige, sin tapujosm que añada cerveza al whisky. Jovencillo emponzoñado de whisky, ¡que figurota exhibes!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="bloque-entrada-blog">
                        <img class="entrada-destacada img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/blogMiniatura.webp" alt="Alternativo de la imagen desplegada">
                        <div class="bloque-flecha"></div>
                        <div class="bloque-entrada">
                            <span class="meta fecha">15 Junio, 2021</span>
                            <span class="meta categoria">Blog</span>
                            <h2 class="titulo">Encabezado principal de la noticia hasta tres renglones de descripción</h2>
                            <p>Quiere la boca exhausta vid, kiwi, piña y fugaz jamón. Fabio me exige, sin tapujosm que añada cerveza al whisky. Jovencillo emponzoñado de whisky, ¡que figurota exhibes!</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                <div class="bloque-entrada-blog">
                        <img class="entrada-destacada img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/blogMiniatura.webp" alt="Alternativo de la imagen desplegada">
                        <div class="bloque-flecha"></div>
                        <div class="bloque-entrada">
                            <span class="meta fecha">15 Junio, 2021</span>
                            <span class="meta categoria">Blog</span>
                            <h2 class="titulo">Encabezado principal de la noticia hasta tres renglones de descripción</h2>
                            <p>Quiere la boca exhausta vid, kiwi, piña y fugaz jamón. Fabio me exige, sin tapujosm que añada cerveza al whisky. Jovencillo emponzoñado de whisky, ¡que figurota exhibes!</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
    </section>
    <section id="noticia-destacada">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><h1 class="titulo">Noticia destacada IEXE</h1></div>
                <div class="col-md-12"><h2 class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</h2></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="titulo-entrada-destacada">Titulo de la nota</h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/destacada.png" alt=""></div>
                <div class="col-md-6" style="margin-left: -1px;">
                    <div class="destacada-post">
                        <div class="autor-destacada">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/autor.png" alt="" class="autor-foto" style="border: 1px solid cyan; border-radius: 40px;">
                            <div class="meta-informacion">
                                <span class="nombre">Name Surname</span>
                                <span class="redes">@johndoe</span>
                            </div>
                        </div>
                        <div class="resumen-destacada">
                            <div class="post-texto"><p> Quiere la boca exhausta vid, kiwi, piña y fugaz jamón. Fabio me exige, sin tapujos, que añada cerveza al whisky. Jovencillo emponzoñado de whisky, ¡qué figurota exhibes! La cigüeña tocaba cada vez mejor.</p>
                            <button type="submit" class="btn btn-primario mt-3 float-right">Ver más</button>
                        </div>

                        </div>

                    </div>
                    
                </div>

            </div>
            
        </div>
    </section>
 
    <?php // get_template_part( 'template-parts/vinculos'); ?>
    <?php get_footer( ); ?>
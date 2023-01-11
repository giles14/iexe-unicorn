<?php /* Template Name: Pagina Blog */ ?>
<?php 
    $banner = get_field('banner_pagina_principal', 3505);
    $bannerMovil = get_field('banner_pagina_principal_movil', 3505);
?>
<?php get_header( ); ?>
<section id="seleccion-categoria" class="buffer-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="titulo">Categorías</h1>
                <h2 class="description">Traemos la información más reciente en Políticas Públicas y otros temas de interés.</h2>
            </div>
            <div class="col-md-3">
            </div>

            <div class="col-md-3">
                <!-- <div class="buscar"><input id="busqueda-blog" type="text" placeholder="Buscar"></div> -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <a class="boton-categoria" href="/category/Destacado/">
                    <div class="categoria-img seguridad">
                        <h2>Destacado</h2>
                    </div>
                </a>
            </div>
            <!-- <div class="col-md-3">
                <a href="/category/infografia/">
                    <div class="categoria-img politicas">
                        <h2>Infografía</h2>
                    </div>
                </a>
            </div> -->
            <div class="col-md-3">
                <a class="boton-categoria" href="/category/Noticias/">
                    <div class="categoria-img liderazgo">
                        <h2>Noticias</h2>
                    </div>
                </a>
                
            </div>
            <div class="col-md-3">
                <a class="boton-categoria" href="/category/politicas-publicas/">
                    <div class="categoria-img internacionales">
                        <h2>Políticas Públicas</h2>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
    <section id="ultimas-entradas">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="titulo">Entradas de Blog</h1>
                    <h2 class="description">Aquí encontrarás información de interés en temas IEXE y más.</h2>
                </div>  
            </div>
            <div class="row">
            <?php 
                // Parametros de WP_Query
                $the_query = new WP_Query( array( 'category_name' => 'blog',
                                                    'posts_per_page' => 3
                
                                            ) ); ?>
                
                <?php 
                while ($the_query -> have_posts()) : $the_query -> the_post(); 
                ?>
                <div class="col-md-4">
                    <div class="bloque-entrada-blog">
                        <?php the_post_thumbnail('ultimas-archivo', array('class' => 'img-fluid')); ?>
                        <div class="bloque-flecha d-none d-sm-block"><a href="<?php the_permalink() ?>"><i class="uil uil-angle-right link-flecha"></i></a></div>
                        <div class="bloque-entrada">
                            <span class="meta fecha"><?php echo get_the_date('j F\, Y'); ?></span>
                            <span class="meta categoria">Blog</span>
                            <h2 class="titulo"><a href="<?php the_permalink() ?>"><?php echo wp_trim_words(get_the_title(), 9, '...'); ?></a></h2>
                            <p><?php echo get_the_excerpt() ?></p>
                            <div class="meta-iconos">
                                0 <i class="uil uil-comment-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                endwhile;
                wp_reset_postdata();
                ?>
            
            </div>
                
        </div>
    </section>
    <!-- <section id="banner" style="background: #EEEEEE; margin-top: auto">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="https://www.tiktok.com/@iexeuniversidad"><img class="img-fluid d-none d-sm-block redondear" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Banner_IEXE_Interno-TikTok.webp" alt=""></a>
                    <a href="https://www.tiktok.com/@iexeuniversidad"><img class="img-fluid d-block d-sm-none" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Banner_r_TikTok.webp" alt=""></a>
                </div>
            </div>
        </div>
    </section> -->
    <section id="banners" style="background: #EEEEEE; margin-top: auto">
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
    <section id="ultimas-noticias">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="titulo">Últimas noticias..</h1>
                    <h2 class="description">Conoce a detalle todo lo que ha acontecido estos últimos días.</h2>
                </div>
            </div>
            <div class="row">
            <?php 
                // Parametros de WP_Query
                $the_query = new WP_Query( array( 'category_name' => 'noticias',
                                                    'posts_per_page' => 3
                
                                            ) ); ?>
                
                <?php 
                while ($the_query -> have_posts()) : $the_query -> the_post(); 
                ?>
                <div class="col-md-4">
                    <div class="bloque-entrada-blog">
                        <?php the_post_thumbnail('ultimas-archivo', array('class' => 'img-fluid')); ?>
                        <div class="bloque-flecha d-none d-sm-block"><a href="<?php the_permalink() ?>"><i class="uil uil-angle-right link-flecha"></i></a></div>
                        <div class="bloque-entrada">
                            <span class="meta fecha"><?php echo get_the_date('j F\, Y'); ?></span>
                            <span class="meta categoria">Noticias</span>
                            <h2 class="titulo"><a href="<?php the_permalink() ?>"><?php echo wp_trim_words(get_the_title(), 8, '...'); ?></a></h2>
                            <p><?php echo get_the_excerpt() ?></p>
                            <div class="meta-iconos">
                                0 <i class="uil uil-comment-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
        
    </section>
    
    <section id="noticia-destacada">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><h1 class="titulo">Noticia destacada IEXE</h1></div>
                <div class="col-md-12"><h2 class="description">¡Esto es de lo que todos están hablando! No te lo pierdas</h2></div>
            </div>
            <div class="row">
            <?php 
                // Parametros de WP_Query
                $the_query = new WP_Query( array( 'category_name' => 'noticias',
                                                    'posts_per_page' => 1
                
                                            ) ); ?>
                
                <?php 
                while ($the_query -> have_posts()) : $the_query -> the_post(); 
                ?>
                <div class="col-md-12">
                    <h2 class="titulo-entrada-destacada"><a href="<?php the_permalink() ?>"><?php echo wp_trim_words(get_the_title(), 10, '...'); ?></a> </h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6">
                    <?php the_post_thumbnail('destacada-archivo', array('class' => 'img-fluid')); ?></div>
                <div class="col-md-6" style="margin-left: -1px;">
                    <div class="destacada-post">
                        <div class="autor-destacada">
                            <img src="/wp-content/uploads/2022/03/iexe_staff-webp.webp" alt="" class="autor-foto" style="border: 1px solid cyan; border-radius: 40px;">
                            <div class="meta-informacion">
                                <span class="nombre"><?php // echo get_the_author() ?>IEXE Staff</span>
                                </div>
                        </div>
                        <div class="resumen-destacada">
                            <div class="post-texto"><p><?php echo get_the_excerpt() ?></p>
                                <a class="btn btn-primario mt-3 float-right" href="<?php the_permalink() ?>">Ver más</a>
                            </div>

                        </div>

                    </div>
                    
                </div>

            </div>
                <?php 
                endwhile;
                wp_reset_postdata();
                ?>
            
        </div>
    </section>
    <section id="integrate">
    <div class="container">
        <div class="row beca">
            <div class="col">
                <h1 class="titulo">Intégrate a la comunidad IEXE</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/escudo-blog.webp" alt="" class="img-fluid d-none d-sm-block">
            </div>
            <div class="col-md-6">
                <p class="interes-programa">¡Seguimos creciendo y queremos que tú seas parte de esto!<br> Descubre como IEXE tiene presencia nacional e internacional.</p>
                    <form id="contacto">
                        <div class="form-group">
                          <label for="nombre">Nombre completo*</label>
                          <input type="nombre" placeholder="Ingresa aquí tu nombre" class="form-control" id="nombre" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo electrónico*</label>
                            <input type="email" placeholder="Ingresa aquí tu correo electrónico" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono o celular*</label>
                            <input type="tel" placeholder="Ingresa aquí tu número telefónico" class="form-control" id="telefono" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="interes">Programa académico de interés</label>
                            <?php get_template_part( 'template-parts/selectProgramas'); ?>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primario mt-3">Enviar registro</button>
                        </div>
                      </form>
                
            </div>
        </div>
    </div>
</section>
    <?php get_template_part( 'template-parts/vinculos'); ?>
    <?php get_footer( ); ?>
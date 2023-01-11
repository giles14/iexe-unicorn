<section id="blog">
        <div class="overlay-img">
        <div class="container">
            <div class="row">
            <?php 
                // Parametros de WP_Query
                $the_query = new WP_Query( array( 'category_name' => 'principal',
                                                    'posts_per_page' => 1
                
                                            ) ); ?>
                <div class="col-10 offset-1">
                     <div class="bloque-moderno izquierda">
                        <!--<div class="bloque-azul">    
                        </div>
                            <div class="bloque-neon">
                                <h3 class="titulos">Hablemos de...</h3>
                            </div> -->
                            <a href="/blog" class="button-primary">En el blog IEXE, hablamos de...</a>
                    </div>
                    
                </div>
                <div class="clearfix"></div>
            </div>
            <?php 
                while ($the_query -> have_posts()) : $the_query -> the_post(); 
            ?>
            <div class="row quick-quit">
                    <div class="col-md-1 align-self-center">
                        <div class="boton-izquierdo"> <!-- <a href="#"><img src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/boton-izquierda.png" alt=""></a> --></div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="imagen-blog">
                            <?php the_post_thumbnail('destacada-archivo', array('class' => 'img-fluid')); ?>
                            <!-- <img loading="lazy" src="<?php// echo esc_url(get_template_directory_uri()) ?>/assets/img/convenio-haya.webp" alt="" class="img-fluid"> -->
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="autor d-none d-sm-block">
                            <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Lily_Villegas_Valle.webp" alt="" class="autor-foto">
                            <div class="meta-informacion">
                                <span class="nombre">Lily Villegas</span>
                                <span class="redes">Experta UX/UI</span>
                            </div>
                            
                        </div>
                        <div class="post">
                            <a href="<?php the_permalink() ?>"><h2 class="titulo"><?php echo wp_trim_words(get_the_title(), 10, '...'); ?></h2></a>
                            <div class="entrada">
                                <a href="<?php the_permalink() ?>"><p><?php echo get_the_excerpt() ?></p></a>
                            </div>
                            <div class="iconos">
                                <!-- <i class="fas fa-heart primero"></i>90<i class="fas fa-comment-alt"></i>78<i class="fas fa-sync-alt"></i>12<i class="fas fa-bookmark ultimo"></i>34 -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 align-self-center">
                        <div class="boton-derecha"><!-- <a href="#"><img src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/boton-derecha.png" alt=""></a> --></div>
                    </div>

            </div>
        </div>
        </div>
        <?php 
                endwhile;
                wp_reset_postdata();
                ?>
    </section>
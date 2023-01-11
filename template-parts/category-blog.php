<?php // get_template_part('template-parts/top-entradas') ?>
    <?php
        //$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    ?>
<?php 
    if (is_search( )){
        $s=get_search_query();
        $args = array(
                's' =>$s,
                'post_type' => 'post',
                'posts_per_page' =>8,
                'cat' => $category,
                'paged' => $paged
            );
        $the_query = new WP_Query( $args );
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    }
    

?>
<?php if(is_search( )) { ?>
<section id="main-posts" style="padding-top: 80px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                    <h2 class="nombre-de-categoria mb-4"><?php echo (is_category()) ? single_cat_title() : "Resultado de búsqueda" ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 p-3">
                <div class="container">
                    <div class="row">
                    <?php if( $the_query->have_posts() ):
                        while( $the_query->have_posts() ): $the_query->the_post(); ?>
                        <div class="un-single-post mb-5">
                        <div class="col-12 col-md-4 text-center">
                                <?php the_post_thumbnail( 'ultimas-archivo', array( 'class' => 'img-fluid lista-archivo' ) ); ?>
                            </div>
                            <div class="col-12 col-md-8 pl-4">
                                <h2 class="titulo-noticia-categoria"><a href="<?php the_permalink() ?>"><?php the_title();  ?></a></h2>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                            <div class="col-12 col-md-8 offset-md-4 no-gutters" style="margin-top: -16px;">
                                <p class="meta-info d-flex d-md-none w-100 justify-content-around mb-5"><img class="img-fluid pl-3 d-none" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-calendar.png" alt="icono de calendario"><span class="fecha pl-0"><?php  echo get_the_date('d\/m\/Y') ?></span><img class="pl-1 pl-md-3" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-clock.png" alt=""><span class="min-lectura  pl-1"><?php echo get_post_meta($post->ID,'time_to_read',true) . " min" ?></span><img class="img-fluid pl-3" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-like.png" alt="icono de calendario"><span class="likes-noticia pl-1">300</span><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-commen.png" class="img-fluid pl-3" alt="icono de calendario"> <span class="comentarios pl-1"><?php echo get_comments_number() ?></span><span class="pl-5"><a href="<?php the_permalink()?>" class="link-ver-mas text-right">Ver más</a></span></p>
                                <p class="meta-info d-none d-md-block"><img class="img-fluid pl-3 d-none d-md-inline" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-calendar.png" alt="icono de calendario"><span class="fecha pl-3"><?php  echo get_the_date('d\/m\/Y') ?></span><img class="pl-0 pl-md-3" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-clock.png" alt=""><span class="min-lectura  pl-3"><?php echo get_post_meta($post->ID,'time_to_read',true) . " min de lectura" ?></span><img class="img-fluid pl-3" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-like.png" alt="icono de calendario"><span class="likes-noticia pl-3">300</span><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-commen.png" class="img-fluid pl-3" alt="icono de calendario"> <span class="comentarios pl-3"><?php echo get_comments_number() ?></span></p>
                                <p class="text-right d-none d-md-block"><a href="<?php the_permalink()?>" class="link-ver-mas text-right">Ver más</a></p>
                            </div>
                        </div>
                                <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
                <?php wp_boostrap_4_pagination(); ?>
            </div>
            <div class="col-sm-4 p-3">
                <?php
                    if(is_category()){
                        get_template_part('template-parts/sidebar-expost');
                    }else{
                        get_template_part('template-parts/sidebar-expost-simplificada');
                    }

                  ?>
            </div>
        </div>
        
    </div>
</section>
<?php } else { ?>
<section id="main-posts" style="padding-top: 80px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                    <h2 class="nombre-de-categoria mb-4"><?php echo (is_category()) ? single_cat_title() : "Resultado de búsqueda" ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-8 p-3">
                <div class="container">
                    <div class="row">
                    <?php if( have_posts() ):
                        while( have_posts() ): the_post(); ?>
                        <div class="un-single-post mb-5">
                            <div class="col-12 col-md-4 text-center">
                                <?php the_post_thumbnail( 'ultimas-archivo', array( 'class' => 'img-fluid lista-archivo' ) ); ?>
                            </div>
                            <div class="col-12 col-md-8 pl-4">
                                <h2 class="titulo-noticia-categoria"><a href="<?php the_permalink() ?>"><?php the_title();  ?></a></h2>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                            <div class="col-12 col-md-8 offset-md-4 no-gutters" style="margin-top: -16px;">
                                <p class="meta-info d-flex d-md-none w-100 justify-content-around mb-5"><img class="img-fluid pl-3 d-none" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-calendar.png" alt="icono de calendario"><span class="fecha pl-0"><?php  echo get_the_date('d\/m\/Y') ?></span><img class="pl-1 pl-md-3" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-clock.png" alt=""><span class="min-lectura  pl-1"><?php echo get_post_meta($post->ID,'time_to_read',true) . " min" ?></span><img class="img-fluid pl-3" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-like.png" alt="icono de calendario"><span class="likes-noticia pl-1">300</span><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-commen.png" class="img-fluid pl-3" alt="icono de calendario"> <span class="comentarios pl-1"><?php echo get_comments_number() ?></span><span class="pl-5"><a href="<?php the_permalink()?>" class="link-ver-mas text-right">Ver más</a></span></p>
                                <p class="meta-info d-none d-md-block"><img class="img-fluid pl-3 d-none d-md-inline" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-calendar.png" alt="icono de calendario"><span class="fecha pl-3"><?php  echo get_the_date('d\/m\/Y') ?></span><img class="pl-0 pl-md-3" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-clock.png" alt=""><span class="min-lectura  pl-3"><?php echo get_post_meta($post->ID,'time_to_read',true) . " min de lectura" ?></span><img class="img-fluid pl-3" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-like.png" alt="icono de calendario"><span class="likes-noticia pl-3">300</span><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-commen.png" class="img-fluid pl-3" alt="icono de calendario"> <span class="comentarios pl-3"><?php echo get_comments_number() ?></span></p>
                                <p class="text-right d-none d-md-block"><a href="<?php the_permalink()?>" class="link-ver-mas text-right">Ver más</a></p>
                            </div>
                        </div>
                                <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
                <?php wp_boostrap_4_pagination(); ?>
            </div>
            <div class="col-12 col-md-4 p-3">
                <?php
                    if(is_category()){
                        get_template_part('template-parts/sidebar-expost');
                    }else{
                        get_template_part('template-parts/sidebar-expost-simplificada');
                    }

                  ?>
            </div>
        </div>
        
    </div>
</section>
<?php } ?>
<style>
    h2.nombre-de-categoria{
        text-transform: uppercase;
    }
    #los-mas-leidos h1.titulo {
        font-weight: 200;
        font-family: 'Nunito Sans';
        color: #001e42;
        text-transform: uppercase;
        font-size: 30px;
    }
    body#archive {
        background: url(https://www.iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/img/blog-bg.png);
        background-repeat-x: repeat;
        background-repeat-y: no-repeat;
    }
    input.busqueda-blog {
        padding-left: 20%;
    }
</style>
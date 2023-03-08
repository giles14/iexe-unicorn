<?php switch($args['tipo']) {

    case "a":
        ?>
    <section class="mt-0 pb-5 <?php echo ($args['classes']) ? $args['classes'] : " "?>">
        <div class="container pt-5">
            <div class="row mb-5 mt-4">
                <div class="col-9">
                    <h1 class="nombre-categoria text-uppercase"><a href="<?php echo get_category_link($args['categoria'] ) ?>"><?php echo get_cat_name( $args['categoria'] ); ?></a></h1>
                </div>
                <div class="col-lg-3 col-3 text-right"><a href="<?php echo get_category_link($args['categoria'] ) ?>" class="link-ver-mas text-right">Ver más</a></div>
            </div>
            <?php
                    $argus = [
                        'post_type' => 'post',
                        'offset' => 0,
                        'post_status' => 'publish',
                        'posts_per_page' => 4,
                        'category__not_in' => array(1),
                        'cat' => $args['categoria'],
                        'post__not_in' => array(4171)
                    ];
                    $the_query = new WP_Query( $argus ); 
                ?>
                <div class="row justify-content-between">
                    <?php if ( have_posts() ) : ?>
                        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>    
                            <div class="col-md-3 un-post-min">
                                <div class="entrada-min">
                                    <?php the_post_thumbnail( 'ultimas-archivo', array( 'class' => 'img-fluid d-block mx-auto' ) ); ?>
                                    
                                    <div class="info-post-min">
                                        <p class="tiempo"><?php echo get_post_meta($post->ID, 'time_to_read', true) . " min de lectura" ?></p>
                                        <h2 class="titulo-noticia"><a href="<?php the_permalink() ?>"><?php the_title();  ?></a></h2>
                                        <p class="meta-info"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-calendar.png" alt="icono de calendario"><span class="fecha"><?php the_date('d\/m\/Y') ?></span><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-like.png" alt="icono de calendario"><span class="likes-noticia"><?php echo cagb_count_likes_post($post->ID); ?></span><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-commen.png" alt="icono de calendario"> <span class="comentarios"><?php echo get_comments_number() ?></span></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
        </div>
    </section>
    <?php
        break;
    case "b":
        ?>
        <section class="tipo-b pb-5 <?php echo ($args['classes']) ? $args['classes'] : " "?>">
            <div class="container pt-5">
                    <?php
                        $argus = [
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'cat' => $args['categoria'],
                            'category__not_in' => array(1)  
                        ];
                        $query = new WP_Query( $argus ); 
                    ?>
                <div class="row mb-5 mt-4 ">
                    <div class="col-lg-9 col-9">
                            <h1 class="nombre-categoria text-uppercase"><a href="echo get_category_link($args['categoria'] ) ?>"><?php echo get_cat_name( $args['categoria'] ); ?></a></h1>
                    </div>
                    <div class="col-lg-3 col-3 text-right"><a href="<?php echo get_category_link($args['categoria'] ) ?>" class="link-ver-mas text-right">Ver más</a></div>
                </div>
                <div class="row">
                        <?php if( $query->have_posts() ):
                            while( $query->have_posts() ): $query->the_post(); ?>
                                <div class="col-12 col-md-6 mb-4">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'ultimas-archivo', array( 'class' => 'img-fluid thumb-small' ) ); ?></a>
                                        </div>
                                        <div class="col-8 pl-3 pr-3">
                                        <?php // the_category(); ?>
                                        <h2 class="titulo-noticia mb-2"><a href="<?php the_permalink() ?>"><?php the_title();  ?></a></h2>
                                        <p class="meta-info"><img class="img-fluid pl-0" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-calendar.png" alt="icono de calendario"><span class="fecha pl-2"><?php the_date('d\/m\/Y') ?></span><img class="img-fluid pl-2" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-clock.png" alt="icono de reloj"><span class="reloj pl-1"><?php echo get_post_meta($post->ID, 'time_to_read', true) . ' min de lectura' ?></span><img class="img-fluid pl-2" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-like.png" alt="icono de calendario"><span class="likes-noticia pl-1"><?php echo cagb_count_likes_post($post->ID); ?></span><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-commen.png" class="img-fluid pl-2" alt="icono de calendario"> <span class="comentarios pl-1"><?php echo get_comments_number() ?></span></p>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
    <?php
        break;
} ?>
<?php get_template_part('template-parts/header-blog') ?>
<section id="tag-top">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Mostrando entradas por tag</h1>
                <p>Tag: <?php single_tag_title(); ?></p>
            </div>
        </div>
            <div class="row justify-content-between">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>    
                        <div class="col-md-3 un-post-min">
                            <div class="entrada-min">
                                <?php the_post_thumbnail( 'ultimas-archivo', array( 'class' => 'img-fluid' ) ); ?>
                                <?php the_category(); ?>
                                <div class="info-post-min">
                                    <p class="tiempo"><?php echo get_post_meta($post->ID, 'time_to_read', true) . " min de lectura" ?></p>
                                    <h2 class="titulo-noticia"><a href="<?php the_permalink() ?>"><?php the_title();  ?></a></h2>
                                    <p class="meta-info"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-calendar.png" alt="icono de calendario"><span class="fecha"><?php the_date('d\/m\/Y') ?></span><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-like.png" alt="icono de calendario"><span class="likes-noticia">300</span><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-commen.png" alt="icono de calendario"> <span class="comentarios"><?php echo get_comments_number() ?></span></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
    </div>
</section>
<section id="los-mas-leidos">
    <div class="container">
        <div class="row">
        <?php
                $cagb_it = 0;
                $args = [
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'category__in' => [ 3 ],  
                  ];
                  $query = new WP_Query( $args ); 
            ?>
                <?php if( $query->have_posts() ):
                    while( $query->have_posts() ): $query->the_post(); ?>
            <div class="col-md-3">
                <span class="numero"><?php echo ++$cagb_it; ?></span>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                <p class="meta-info"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-calendar.png" alt="icono de calendario"><span class="fecha"><?php the_date('d\/m\/Y') ?></span><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-like.png" alt="icono de calendario"><span class="likes-noticia">300</span><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-commen.png" alt="icono de calendario"> <span class="comentarios"><?php echo get_comments_number() ?></span></p>
            </div>
                <?php endwhile; ?>
            <?php endif; ?>
                <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<section class="tipo-b">
    <div class="container">
        <div class="row">
            <div class="col-12">
                    <h1 class="titulo mb-4"><?php single_tag_title(); ?></h1>
            </div>
        </div>
        <div class="row">
            <?php
                $args = [
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'category__in' => [ 3 ],  
                  ];
                  $query = new WP_Query( $args ); 
            ?>
                <?php if( $query->have_posts() ):
                    while( $query->have_posts() ): $query->the_post(); ?>
                        <div class="col-6 mb-4">
                            <div class="row">
                                <div class="col-4">
                                        <?php the_post_thumbnail( 'ultimas-archivo', array( 'class' => 'img-fluid thumb-small' ) ); ?>
                                </div>
                                <div class="col-8 pl-3 pr-3">
                                <?php the_category(); ?>
                                <h2 class="titulo-noticia"><a href="<?php the_permalink() ?>"><?php the_title();  ?></a></h2>
                                <p class="meta-info"><img class="img-fluid pl-0" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-calendar.png" alt="icono de calendario"><span class="fecha pl-2"><?php the_date('d\/m\/Y') ?></span><img class="img-fluid pl-2" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-clock.png" alt="icono de reloj"><span class="reloj pl-1"><?php echo get_post_meta($post->ID, 'time_to_read', true) . ' min de lectura' ?></span><img class="img-fluid pl-2" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-like.png" alt="icono de calendario"><span class="likes-noticia pl-1">300</span><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-commen.png" class="img-fluid pl-2" alt="icono de calendario"> <span class="comentarios pl-1"><?php echo get_comments_number() ?></span></p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<section id="main-posts">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                    <h2 class="nombre-de-categoria mb-4">POLÍTICAS PÚBLICAS</h2>
            </div>
            <div class="col-sm-3">

            </div>
        </div>
        <div class="row">
            <div class="col-sm-9">
                    <div class="row">
                    <?php
                            $args = [
                                'post_type' => 'post',
                                'posts_per_page' => 6,
                                'category__in' => [ 3 ],  
                            ];
                            $query = new WP_Query( $args ); 
                    ?>
                    <?php if( $query->have_posts() ):
                        while( $query->have_posts() ): $query->the_post(); ?>
                        <div class="un-single-post mb-5">
                            <div class="col-4">
                                <?php the_post_thumbnail( 'ultimas-archivo', array( 'class' => 'img-fluid lista-archivo' ) ); ?>
                            </div>
                            <div class="col-8">
                                <h2 class="titulo-noticia-categoria"><a href="<?php the_permalink() ?>"><?php the_title();  ?></a></h2>
                                <p><?php the_excerpt(); ?></p>
                                <p class="meta-info"><img class="img-fluid pl-3" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-calendar.png" alt="icono de calendario"><span class="fecha pl-3"><?php the_date('d\/m\/Y') ?></span><img class="pl-3" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-clock.png" alt=""><span class="min-lectura  pl-3"><?php echo get_post_meta($post->ID,'time_to_read',true) . " min de lectura" ?></span><img class="img-fluid pl-3" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-like.png" alt="icono de calendario"><span class="likes-noticia pl-3">300</span><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-commen.png" class="img-fluid pl-3" alt="icono de calendario"> <span class="comentarios pl-3"><?php echo get_comments_number() ?></span></p>
                                <p class="text-right"><a href="<?php the_permalink()?>" class="link-ver-mas text-right">Ver más</a></p>
                            </div>
                        </div>
                                <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col">
                <div class="pagination">
                        <?php 
                            echo paginate_links( array(
                                'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                'total'        => $query->max_num_pages,
                                'current'      => max( 1, get_query_var( 'paged' ) ),
                                'format'       => '?paged=%#%',
                                'show_all'     => false,
                                'type'         => 'plain',
                                'end_size'     => 2,
                                'mid_size'     => 1,
                                'prev_next'    => true,
                                'prev_text'    => sprintf( '<i></i> %1$s', __( 'Siguiente', 'text-domain' ) ),
                                'next_text'    => sprintf( '%1$s <i></i>', __( 'Anterior', 'text-domain' ) ),
                                'add_args'     => false,
                                'add_fragment' => '',
                            ) );

                            echo paginate_links(array(
                                'total'        => $query->max_num_pages,
                                'current'      => max( 1, get_query_var( 'paged' ) ),
                                'format'       => '?paged=%#%',
                                'show_all'     => false,
                                'type'         => 'plain',
                                'end_size'     => 2,
                                'mid_size'     => 1,
                                'prev_next'    => true,
                                'prev_text'    => sprintf( '<i></i> %1$s', __( 'Siguiente', 'text-domain' ) ),
                                'next_text'    => sprintf( '%1$s <i></i>', __( 'Anterior', 'text-domain' ) ),

                            ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="autores-destacados">
    <div class="container">
        <div class="row">
            <div class="col-12"> <h1 class="mb-3">AUTORES DESTACADOS...</h1></div>
        </div>
        <div class="row justify-content-between">
            <div class="col-sm-3">
                <div class="un-autor">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Julio_Franco_Corzo_iexe_universidad.png" alt="" class="img-fluid fo-autor d-block mx-auto mt-3 mb-3">
                    <span class="tema-autor">TECNOLOGÍA</span>
                    <p class="descripcion-autor">
                        Las sequías en México y la mayor crisis de agua, ¿a dónde vamos a parar? 
                    </p>
                    <div class="redes-sociales-autor">
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/fb.png" alt="" class="autor-red"></a>
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/instagram.png" alt="" class="autor-red"></a>
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/tw.png" alt="" class="autor-red"></a>
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/linkedin.png" alt="" class="autor-red"></a>
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/yt.png" alt="" class="autor-red"></a>
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/spotify.png" alt="" class="autor-red"></a>
                    </div>
                </div>
                
            </div>
            <div class="col-sm-3">
                <div class="un-autor">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Julio_Franco_Corzo_iexe_universidad.png" alt="" class="img-fluid fo-autor d-block mx-auto mt-3 mb-3">
                    <span class="tema-autor">TECNOLOGÍA</span>
                    <p class="descripcion-autor">
                        Las sequías en México y la mayor crisis de agua, ¿a dónde vamos a parar? 
                    </p>
                    <div class="redes-sociales-autor">
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/fb.png" alt="" class="autor-red"></a>
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/instagram.png" alt="" class="autor-red"></a>
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/tw.png" alt="" class="autor-red"></a>
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/linkedin.png" alt="" class="autor-red"></a>
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/yt.png" alt="" class="autor-red"></a>
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/spotify.png" alt="" class="autor-red"></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="un-autor">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Julio_Franco_Corzo_iexe_universidad.png" alt="" class="img-fluid fo-autor d-block mx-auto mt-3 mb-3">
                    <span class="tema-autor">TECNOLOGÍA</span>
                    <p class="descripcion-autor">
                        Las sequías en México y la mayor crisis de agua, ¿a dónde vamos a parar? 
                    </p>
                    <div class="redes-sociales-autor">
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/fb.png" alt="" class="autor-red"></a>
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/instagram.png" alt="" class="autor-red"></a>
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/tw.png" alt="" class="autor-red"></a>
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/linkedin.png" alt="" class="autor-red"></a>
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/yt.png" alt="" class="autor-red"></a>
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/spotify.png" alt="" class="autor-red"></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="un-autor">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Julio_Franco_Corzo_iexe_universidad.png" alt="" class="img-fluid fo-autor d-block mx-auto mt-3 mb-3">
                    <span class="tema-autor">TECNOLOGÍA</span>
                    <p class="descripcion-autor">
                        Las sequías en México y la mayor crisis de agua, ¿a dónde vamos a parar? 
                    </p>
                    <div class="redes-sociales-autor">
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/fb.png" alt="" class="autor-red"></a>
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/instagram.png" alt="" class="autor-red"></a>
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/tw.png" alt="" class="autor-red"></a>
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/linkedin.png" alt="" class="autor-red"></a>
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/yt.png" alt="" class="autor-red"></a>
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/spotify.png" alt="" class="autor-red"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<style>
    .logo-pie-expost{
        margin-top: -60px;
    }
    .detalles-quienes{
        font-size: 18px;
        font-weight: 200;
        color: #F6f6f6;
    }
    h1.quienes-somos{
        font-size: 24px;
        font-weight: 800;
        font-family: 'aktiv-grotesk-extended';
    }
    section#tag-top{
        background: #F5F6FE;
        padding: 25px 0px
    }
    h2.titulo-noticia{
        font-size: 18px;
        font-weight: 600;
        height: 80px;
    }
    h2.titulo-noticia a{
        color: #001E42;
    }
    ul.post-categories {
    display: inline-flex;
    width: 100%;
    justify-content: space-around;
    text-transform: uppercase;
    list-style: none;
    padding-inline-start: 0px;
    margin-bottom: 0.4rem;
}
ul.post-categories li a {
    color: #9AA4FF;
    font-weight: 700;
}
p.tiempo {
    font-size: 13px;
    font-weight: 800;
}
span.fecha {
    color: #B1B6D2;
    font-weight: 600;
    font-size: 13px;
}
span.reloj {
    color: #001e42;
    font-weight: 800;
    font-size: 13px;
}
span.likes-noticia {
    font-weight: 700;
    font-size: 13px;
    color: #273481;
}
span.comentarios {
    font-size: 13px;
    font-weight: 700;
}
.entrada-min{
    background: #FFF;
    border-radius: 0px 0px 15px 15px;
    padding: 0px 0px;
    box-shadow: 0px 0px 10px #ccc;
}
.meta-info img{
    height: 100%;
}
.col-md-3.entrada-min {
    margin: 0 10px;
} 
.un-post-min {
    padding-right: 14px;
    height: 400px;
} 
.info-post-min {
    padding: 12px;
    position: relative;
    height: 190px;
}
p.meta-info{
    width: 90%;
    display: flex;
    justify-content: space-around;
    position: absolute;
    bottom: 0;
}
.thumb-small {
    border-radius: 10px;
    box-shadow: 0px 3px 6px #0017ff4d;
}
.tipo-b h2.titulo-noticia {
    font-weight: 300;
    height: 100px;
}
.tipo-b p.meta-info {
    width: 90%;
    display: flex;
    justify-content: flex-start;
    position: absolute;
    bottom: 0;
}
.tipo-b h1.titulo {
    font-weight: 200;
    font-family: 'Nunito Sans';
    color: #001e42;
    text-transform: uppercase;
    font-size: 30px;
}
span.tema-autor {
    font-size: 13px;
    font-weight: 700;
    color: #99a3ff;
    text-transform: uppercase;
    font-family: 'aktiv-grotesk-extended';
}
p.descripcion-autor {
    font-weight: 200;
    font-size: 18px;
    color: #f6f6f6;
}
.un-autor {
    height: 396px;
    background: #02194E;
    border-radius: 15px;
    opacity: 0.9;
    padding: 12px;
    position: relative;
}
.redes-sociales-autor {
    display: flex;
    justify-content: space-evenly;
    position: absolute;
    bottom: 20px;
    width: 92%;
}
section.autores-destacados {
    background: #313A81;
    background-size: auto;
    padding: 33px 0px 70px 0px;
}
section.autores-destacados h1{
    font-size: 30px;
    color: #f6f6f6;
}
.un-post-destacado{
    position: relative;
    height: 408px;
}
.detalle-destacado{
    position: absolute;
}
section#blog-sub-footer{
    background: #25317A;
}
.bloque-img {
    position: relative;
    width: 84%;
    overflow: hidden;
    text-align: center;
    margin: 0 auto;
}
.quien-tag {
    position: absolute;
    bottom: -3px;
    width: 100%;
    font-size: 21px;
    text-align: center;
    overflow: hidden;
    opacity: 1;
    font-weight: 800;
    font-family: 'aktiv-grotesk-extended', sans-serif;
    font-size: 16px;
    color: #FFF;
}
.shadow {
    width: 100%;
    background: #001E42;
    height: 26px;
    position: absolute;
    bottom: 0px;
    opacity: 0.9;
}
section#sub-pie {
    padding-bottom: 10px;
    color: #f6f6f6;
}
#los-mas-leidos h2 {
    font-weight: 800;
    font-size: 18px;
    color: #001e42;
    height: 80px;
}
#los-mas-leidos h2 a{
    color: #001e42;
}
#los-mas-leidos span.numero {
    font-weight: 800;
    font-family: 'aktiv-grotesk-extended';
    font-size: 36px;
    color: #99a3ff;
}
#los-mas-leidos p.meta-info {
    position: relative;
    filter: invert(45%) sepia(58%) saturate(6296%) hue-rotate(225deg) brightness(104%) contrast(101%);
}
h2.titulo-noticia-categoria a{
    font-size: 21px;
    font-weight: 600;
    letter-spacing: 0.13px;
    color: #001E42;
}
.un-single-post{
    font-weight: 300;
    letter-spacing: -0.13px;
    font-size: 18px;
}
.un-single-post{
    display: inherit;
}
.un-single-post p.meta-info {
    position: relative;
    justify-content: flex-start;
}
span.min-lectura {
    font-size: 13px;
    font-weight: 700;
}
a.link-ver-mas.text-right {
    text-decoration: underline;
    font-weight: 800;
    font-size: 16px;
    color: #0018ff;
}
img.lista-archivo {
    border-radius: 9px;
    box-shadow: 0px 3px 9px #0017ff36;
}
#info-autor .container{
    background: gray;
    border-radius: 15px;
    padding: 25px;
}
section#blog-sub-footer {
    margin-top: 0;
}
</style>
<?php get_template_part('template-parts/footer-blog') ?>
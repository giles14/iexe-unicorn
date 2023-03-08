
<?php if(!is_user_logged_in( )){
    ?>
    <?php get_header( ); ?>
    <?php  cagb_setPostViews(get_the_ID()); ?>
    
    
    <?php  while ( have_posts() ) : the_post(); ?>
<section id="entrada-blog">
    <div class="container">
    <?php
    if(is_user_logged_in( )){
        {
            if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
              }
        }
    }

        $post_tags = get_the_tags();
    if ( ! empty( $post_tags ) ) {
        echo '<div class="las-tags d-flex align-items-center">';
        echo '<img src="'. esc_url(get_template_directory_uri()) .'/assets/img/icons/aw-tags.png'.'" class="img-fluid ico" /><ul class="in-single-tag">';
        foreach( $post_tags as $post_tag ) {
            echo '<li><a href="' . get_tag_link( $post_tag ) . '">' . $post_tag->name . '</a></li>';
        }
        echo '</ul>';
        ?>
        <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-calendar.png" alt="icono de calendario"><span class="fecha pl-3"><?php the_date('d\/m\/Y') ?></span> <img class="pl-3" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-clock.png" alt=""><span class="min-lectura  pl-3"><?php echo get_post_meta($post->ID,'time_to_read',true) . " min de lectura" ?></span>
        <?php
        echo "</div>";
    }
?>
        <div class="row">
            <div class="col-md-12">
                <?php if(isset(get_the_category()[0]->cat_ID)){ ?>
                <h1 class="titulo navegacion"><a href="/blog">Blog</a> / <a href="<?php echo get_category_link( get_the_category()[0]->cat_ID ) ?>"><?php echo get_the_category()[0]->name  ?></a> / <a href="<?php the_permalink() ?>"> <?php echo wp_trim_words(get_the_title(), 4, '...'); ?></a></h1>
                <?php if ( category_description(get_the_category()[0]->cat_ID) ) : ?>
                    <!-- <h2 class="description">Navegación</h2> -->
                <?php endif; ?>
                <?php } ?>
            </div>
            </div>
        <?php if( !is_woocommerce() ) { ?>
        <div class="row">
            <div class="col-md-9">
                    
                    <div class="archivo-thumb">
                        <?php the_post_thumbnail('destacada-post-header', array('class' => 'img-fluid')); ?>
                        <div class="archivo-fecha">
                                <span class="numero"><?php echo get_the_date('d') ?></span>
                                <span class="mes"><?php echo get_the_date('F') ?></span>
                                
                        </div>
                    </div>
                <div class="meta-articulo"></div>
                
            </div>
            <div class="col-md-3 d-none d-sm-block">
                <?php get_template_part( 'template-parts/lateral-blog'); ?>
            </div>
        </div>
        <?php } ?>
        <div class="row">
            <div class="col-md-9">
                <h1 class="post-titulo"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
                <?php if(!is_woocommerce() ) { ?>
                    <span class="meta-blog-autor"><?php echo get_the_author() ?></span>
                    <?php echo (get_post_meta($post->ID, 'time_to_read') ? '<strong>Tiempo de lectura: ' . get_post_meta($post->ID, 'time_to_read',true) .' minutos</strong> <br>': '');
                     ?>
                <?php } ?>
                <div class="contenido-post">
                    <?php the_content(); ?>
                </div>
                <?php if(get_field('notas')): ?>
                    <div class="notas mt-5">
                        <h2 >Notas</h2>
                        <?php the_field('notas') ?>
                    </div>
                <?php endif; ?>
                <?php if(get_field('referencias')): ?>
                    <div class="referencias mt-5">
                        <h2>Referencias</h2>
                        <?php the_field('referencias'); ?>
                    </div>
                <?php endif; ?>
                <?php get_template_part( 'template-parts/info-autor'); ?>
            </div>
            <div class="col-md-3 ">
                <div class="banner text-center mt-5 pl-3" style="position: sticky;display: block;top: 100px;">
                    <a href="https://www.youtube.com/@iexeuniversidad" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()) .'/assets/img/BannerBlog_Youtebue_iexe.webp' ?>" alt="" class="img-fluid"></a>
                </div>
                    <div class="wrapper-x d-block d-sm-none">
                        <?php if(is_single()){
                        get_template_part( 'template-parts/lateral-blog');
                    }  ?>
                    </div>
               
                
                <?php if ( is_active_sidebar( 'sidebar-producto' ) && is_woocommerce() ) { ?>
                    
                        <?php dynamic_sidebar('sidebar-producto'); ?>
                    
                <?php } ?>
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-4">
              <span class="compartir">Compartir:</span>  <?php echo do_shortcode( '[social]' ); ?>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</section>


<section id="comentarios">
    <?php
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif; 
    ?>
</section>

<?php
    if(!is_woocommerce()) {
        get_template_part( 'template-parts/interesar'); 
    }
 ?>

    <!-- Agregar banner publicidad -->
<?php get_template_part( 'template-parts/vinculos'); ?>
<?php get_footer( ); ?>
<?php
} else{

    // BLOG v2
?>
    <?php get_template_part('template-parts/header-blog') ?>
    <?php $cagb_like_voted = check_if_voted(get_the_ID(), $_SERVER['REMOTE_ADDR'], get_current_user_id()); ?>
    
    <!-- <div class="container">
        <div class="row fix">

        </div>
    </div> -->
    <div class="topics-top">
        <a onclick="nav_toggle();" class="bandera-topics"><img class="la-bandera" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/bandera-topics.png" alt=""></a>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-1 d-none d-lg-flex">
                <div class="menu-nav pt-5">
                    <a href="/blog-nuevo"><span aria-label="Inicio" data-microtip-position="right" role="tooltip"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/ico-home.svg" alt="" class="icono-menu-blog"></span></a>
                    <a onclick="likePost()" style="position: relative;"><span aria-label="Me gusta" data-microtip-position="right" role="tooltip"><svg xmlns="http://www.w3.org/2000/svg" width="27.978" height="23.497" viewBox="0 0 27.978 23.497">
                        <path id="Icon_awesome-heart" class="awesome-heart <?php echo ($cagb_like_voted) ? "filled" : ""?>" data-name="Icon awesome-heart" d="M24.356,3.777a7.494,7.494,0,0,0-9.831.679L13.487,5.469,12.449,4.456a7.493,7.493,0,0,0-9.831-.679A6.915,6.915,0,0,0,2.1,14.156L12.291,24.13a1.716,1.716,0,0,0,2.387,0l10.195-9.975a6.91,6.91,0,0,0-.516-10.379Z" transform="translate(0.502 -1.745)" fill="none" stroke="#273482" stroke-width="1"/>
                        </svg></span><span class="num-come"><?php echo cagb_count_likes_post(); ?></span>
                    </a>
                    
                    <a data-toggle="modal" data-target="#modal-compartir"><span aria-label="Compartir" data-microtip-position="right" role="tooltip"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/ico-share.svg" alt="" class="icono-menu-blog"></span></a>
                    <a onclick="copyRichText()"><span aria-label="Citar" data-microtip-position="right" role="tooltip"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/ico-quo.svg" alt="" class="icono-menu-blog"></span></a>
                    <a href="#comentarios"  onclick="document.getElementById('comment').focus();"><span aria-label="Comentar" data-microtip-position="right" role="tooltip"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/ico-comments.svg" alt="" class="icono-menu-blog"></span></a>
                    <a href="#top"><span aria-label="Ir arriba" data-microtip-position="right" role="tooltip"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/ico-up.svg" alt="" class="icono-menu-blog"></span></a>
                    <a href="#sub-pie"><span aria-label="ir abajo" data-microtip-position="right" role="tooltip"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/ico-down.svg" alt="" class="icono-menu-blog"></span></a>
                </div>
            </div>
            <div class="col-12 col-lg-7 pt-4" style="padding:0px 3%">
                <?php  while ( have_posts() ) : the_post(); ?>
                <section id="entrada-blog">
                    <div class="container-fluid">
                    <?php
                    if(is_user_logged_in( )){
                        {
                            if ( function_exists('yoast_breadcrumb') ) {
                                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                            }
                        }
                    }
                    ?>
                    <h1 class="post-titulo pt-3"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
                    <div class="row">
                        <div class="col-1 d-none d-md-block text-center">
                            <?php echo get_avatar( get_the_author_meta('user_email') , 300, '', 'Imagen de autor', $args = array('class' => 'img-fluid minuatura-autor')); ?>
                            <!-- <img src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/mini-autor.png" alt="" class="minuatura-autor"> -->
                        </div>
                        <div class="col-6 mb-4">
                            <p class="meta-autor-mini">Por <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" style="text-transform: uppercase"><?php echo get_the_author_meta( 'display_name', $post->post_author ); ?></a></p>
                            <p class="meta-autor-mini">Redactor en <a href="">EXPOST</a></p>
                        </div>
                    </div>
                    <div class="las-tags d-flex align-items-center mb-4">
                    <?php
                    $post_tags = get_the_tags();
                    if ( $post_tags ) {
                        echo '<img src="'. esc_url(get_template_directory_uri()) .'/assets/img/icons/aw-tags.png'.'" class="img-fluid ico" /><ul class="in-single-tag">';
                        foreach( $post_tags as $post_tag ) {
                            echo '<li><a href="' . get_tag_link( $post_tag ) . '">' . $post_tag->name . '</a></li>';
                        }
                        echo '</ul>';
                        ?>
                        
                        <?php
                        
                        }
                        ?>
                        <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-calendar.png" alt="icono de calendario"><span class="fecha pl-3"><?php the_date('d\/m\/Y') ?></span> <img class="pl-3" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-clock.png" alt=""><span class="min-lectura  pl-3"><?php echo get_post_meta($post->ID,'time_to_read',true) . " min de lectura" ?></span>
                        </div>
                        
                        <div class="archivo-thumbs text-center mb-5">
                            <?php the_post_thumbnail('destacada-post-header', array('class' => 'img-fluid')); ?>
                        </div>
                        <div class="contenido-post">
                                <?php the_content(); ?>
                                <span class="pilldor"></span>
                                <?php get_template_part( 'template-parts/single-button'); ?>
                        </div>
                            <?php if(get_field('notas')): ?>
                                <div class="notas mt-5">
                                    <h2 >Notas</h2>
                                    <?php the_field('notas') ?>
                                </div>
                            <?php endif; ?>
                            <?php if(get_field('referencias')): ?>
                                <div class="referencias mt-5">
                                    <h2>Referencias</h2>
                                    <?php the_field('referencias'); ?>
                                </div>
                            <?php endif; ?>
                                <!-- <div class="row">
                                    <div class="col-md-6 mt-4">
                                    <span class="compartir">Compartir:</span>  <?php // echo do_shortcode( '[social]' ); ?>
                                    </div>
                                </div> -->
                                <?php endwhile; ?>
                            </div>
                            <div class="mis-tags mb-4 mt-5">
                                <h2 class="topics mb-4">TAGS</h2>
                                <?php echo cagb_tag_cloud(); ?>
                                
                            </div>
                        
                    </section>
                    <?php get_template_part( 'template-parts/info-autor'); ?>
                    <section id="comentarios">
                        <?php
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif; 
                        ?>
                    </section>

                </div>
            <div class="col-12 col-lg-3">
                <?php get_template_part('template-parts/sidebar-expost') ?>
            </div>
            <div class="col-1">
                
            </div>
        </div>
    </div>
    <!-- Agregar banner publicidad -->
    <?php get_template_part('template-parts/footer-blog') ?>
<style>
    h1.post-titulo {
    font-size: 32px;
    font-weight: 800;
    color: #273481;
    text-transform: uppercase;
    line-height: 42px;
    }
    .post-titulo a {
    color: #273481;
    }
    section#entrada-blog {
    padding-top: 0px;
    }
    .contenido-post {
    color: #273481;
    }
    body#single {
    background: url(<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/blog-bg.png);
    background-repeat: repeat-x;
    margin-top: 0px;
    }
    aside {
        margin-top: 85px;
        padding: 0 14px;
    }
    ul.in-cloud-tag {
    margin-bottom: 0;
    padding-inline-start: 0px;
    }
    .in-cloud-tag li {
        display: inline;
        margin-right: 16px;
    }
    .in-cloud-tag li a {
        text-decoration: underline;
        color: #273481;
        font-size: 14px;
        font-weight: 800;
    }
    .in-cloud-tag li::after {
        content: ',';
        font-weight: 600;
        font-size: 16px;
    }
    .in-cloud-tag li:last-child::after {
        content: '';
        font-weight: 600;
        font-size: 16px;
    }
    .container-widget h2.titulo-sidebar {
        font-size: 25px;
        font-weight: 800;
        color: #273481;
    }
    h2.titulo-sidebar {
        font-size: 25px;
        font-weight: 800;
        color: #273481;
    }
    h2.titulo-entrada a {
    font-size: 16px;
    font-weight: 700;
    color: #273481;
    text-decoration: underline;
    }
    /* .menu-nav {
        width: 100%;
        background: #FFF;
        height: 100%;
        border-right: 1px solid #273481;
    } */
    .menu-nav {
    width: 100%;
    background: #FFF;
    height: 100vh;
    border-right: 1px solid #273481;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    text-align: center;
    position: sticky;
    top: 0;
    padding-top:53px;
    }
    section#blog-sub-footer{
    background: #25317A;
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
    .referencias.mt-5 {
    background: #EBEEFF;
    color: #273481;
    padding: 15px;
    }
    .referencias h2 {
    font-size: 15px;
    }
    a.tag-cloud-link {
    padding: 3px 5px;
    box-shadow: 0px 2px 7px #2a47eb57;
    border-radius: 6px;
    color: #273481;
    margin: 0 5px;
}
.container-widget.azul {
    background: #3051FF;
    padding: 25px;
    border-radius: 15px;
    color: #fff;
}
.container-widget p {
    font-size: 14px;
    font-weight: 300;
}
.container-widget h2 {
    font-size: 25px;
    font-weight: 800;
    color: #273481;
}
.widget {
    margin: 1em 0px 3em 0px;
    border-radius: 15px;
}
.cagb-poll {
    color: #fff;
    padding: 28px 32px;
}
.cagb-poll h3.pregunta-poll {
    font-size: 14px;
    text-align: center;
    line-height: 19px;
    font-weight: 700;
    padding: 0px 60px;
}
ul.respuestas li {
    margin-bottom: 30px;
    font-size: 19px;
    list-style: none;
}
ul.respuestas {
    font-weight: 100;
    margin-top: 60px;
}
h2.topics {
    background: #273481;
    width: 152px;
    color: #FFF;
    font-size: 16px;
    font-weight: 200;
    padding: 4px 20px;
    box-shadow: 0px 5px 8px #00000029;
}
.c-sombra{
    box-shadow: -3px 20px 30px #00000029;
}
p.meta-autor-mini {
    margin-bottom: 5px;
    color: #757786;
}
.meta-autor-mini a {
    color: #273481;
    font-weight: 700;
}
html {
    margin-top: 0px !important;
}
img.la-bandera {
    width: 44px;
    filter: drop-shadow(0px 5px 8px #00000029);
}
.hid{
    display: none;
}
a.bandera-topics {
    cursor: pointer;
}
.modal-content.bg-blanco{
    background: #FFF;
}
.widget.container-widget.azul h2 {
    color: #FFF;
}
</style>
<script>
    function nav_toggle(){
        navbar = document.getElementById("blog-nav");
        navbar.classList.toggle("hid");
    }
</script>
<?php get_template_part('template-parts/compartir'); ?>
<?php
}
?>

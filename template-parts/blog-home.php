<?php 
    $bannerBlog = get_field('banner_principal_del_blog', 3505);
?>
<section id="header-blog">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-5  d-flex align-self-center flex-wrap">
            <img id="logo-navbar" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/expost-az-g.svg" class="sm-logo img-fluid mb-5 mt-5 hidden" alt="">
                <h1 class="mb-4">EL REFERENTE ACADÉMICO <br> Y TECNOLÓGICO DE <br> LAS UNIVERSIDADES</h1>
                <form action="" class="w-100 mb-5">
                    <input onclick="initBusqueda()" class="busqueda-blog" type="text" placeholder="¿Qué son las Políticas Públicas?">
                </form>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div class="row">
                    <img src="<?php echo esc_url($bannerBlog);  ?>" class="img-fluid" style="margin-top: 64px;" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/top-entradas') ?>

<section id="tag-top" class="grad-desc" style="position: relative;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="nombre-categoria mb-4 mt-4 mb-5">ÚLTIMOS POSTS</h1>
            </div>
        </div>
        <?php
                $args = [
                    'post_type' => 'post',
                    'offset' => 0,
                    'post_status' => 'publish',
                    'posts_per_page' => 8,
                    'post__not_in' => array(4171),
                    'category__not_in' => 1                
                  ];
                  $the_query = new WP_Query( $args ); 
            ?>
            <div class="row">
                    <div class="splide" style="display: contents">
                        <div class="splide__track">
                            <div class="splide__list">
                            <?php if ( have_posts() ) : ?>
                                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                                <div class="col-md-3 un-post-min mb-4 splide__slide">
                                        <div class="entrada-min">
                                            <a href="<?php the_permalink() ?>">
                                                <?php the_post_thumbnail( 'ultimas-archivo', array( 'class' => 'img-fluid d-block mx-auto' ) ); ?>
                                            </a>
                                        
                                        <?php exclude_post_categories(); ?>
                                        <div class="info-post-min">
                                            <p class="tiempo"><?php echo get_post_meta($post->ID, 'time_to_read', true) . " min de lectura" ?></p>
                                            <h2 class="titulo-noticia"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                                            <p class="meta-info"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-calendar.png" alt="icono de calendario"><span class="fecha"><?php echo get_the_date('d\/m\/Y') ?></span><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-like.png" alt="icono de calendario"><span class="likes-noticia"><?php echo cagb_count_likes_post($post->ID); ?></span><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-commen.png" alt="icono de calendario"> <span class="comentarios"><?php echo get_comments_number() ?></span></p>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</section>
<?php get_template_part('template-parts/bloques-home', null, array(
    'tipo' => 'b',
    'categoria' => '31',
    'classes' => ''
)); ?>
<section class="autores-destacados">
    <div class="container">
        <div class="row">
            <div class="col-12"> <h1 class="mb-3">AUTORES DESTACADOS...</h1></div>
        </div>
        <div class="row justify-content-between">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mt-3">
                <div class="un-autor">
                    <img src="https://www.iexe.edu.mx/wp-content/uploads/2022/11/Screenshot_15.jpg" alt="" class="img-fluid fo-autor d-block mx-auto mt-3 mb-3">
                    <span class="tema-autor">JULIO FRANCO C.</span>
                    <p class="descripcion-autor">
                    Consultor internacional en políticas públicas. Por más de 20 años se ha dedicado a asesorar a gobiernos de América Latina en el diseño, evaluación e implementación de políticas públicas. Autor del libro Diseño de Políticas Públicas y rector de IEXE Universidad. 
                    </p>
                    <div class="redes-sociales-autor">
                        <a href="https://www.facebook.com/JulioFrancoC/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/fb.png" alt="" class="autor-red"></a>
                        <a href="https://www.instagram.com/juliofrancorzo/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/instagram.png" alt="" class="autor-red"></a>
                        <a href="https://twitter.com/juliofrancorzo" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/tw.png" alt="" class="autor-red"></a>
                        <a href="https://www.linkedin.com/in/juliofrancorzo/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/linkedin.png" alt="" class="autor-red"></a>
                        <!-- <a href=""><img src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/yt.png" alt="" class="autor-red"></a> -->
                        <!-- <a href=""><img src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/spotify.png" alt="" class="autor-red"></a> -->
                    </div>
                </div>
                
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mt-3">
                <div class="un-autor">
                    <img src="https://www.iexe.edu.mx/wp-content/uploads/2022/11/WhatsApp-Image-2022-11-03-at-12.06.26-PM.jpeg" alt="" class="img-fluid fo-autor d-block mx-auto mt-3 mb-3">
                    <span class="tema-autor">LILY VILLEGAS V.</span>
                    <p class="descripcion-autor">
                        MBE, MSc, PhD y más títulos rimbombantes. Es creadora de estrategias para web, mkt y PYMES. Le encanta desarrollar filtros para Snapchat, Tiktok o Meta. En su tiempo libre trata de hacer la tesis en Energías Renovables y prefiere compartir artículos científicos. 
                    </p>
                    <div class="redes-sociales-autor">
                        <a href="https://www.facebook.com/ilviva90" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/fb.png" alt="" class="autor-red"></a>
                        <a href="https://www.instagram.com/ilviva/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/instagram.png" alt="" class="autor-red"></a>
                        <a href="https://twitter.com/ilviva" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/tw.png" alt="" class="autor-red"></a>
                        <a href="https://www.linkedin.com/in/ilviva/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/linkedin.png" alt="" class="autor-red"></a>
                        <!-- <a href=""><img src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/yt.png" alt="" class="autor-red"></a>
                        <a href=""><img src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/spotify.png" alt="" class="autor-red"></a> -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mt-3">
                <div class="un-autor">
                    <img src="https://www.iexe.edu.mx/wp-content/uploads/2022/11/765754677777.jpg" alt="" class="img-fluid fo-autor d-block mx-auto mt-3 mb-3">
                    <span class="tema-autor">LUISA GUZMÁN</span>
                    <p class="descripcion-autor">
                        Fan from hell de The Office, Bowie y de los michis. Mamá de tiempo completo. Aspirante a escribir cuentos cortos y correr un maratón. Alguien me dijo que si fuera música sería post-punk. (Acabo de escribir mi descripción en Bumble). 
                    </p>
                    <div class="redes-sociales-autor">
                        <a href="http://www.facebook.com" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/fb.png" alt="" class="autor-red"></a>
                        <a href="https://www.instagram.com/luisarhayader/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/instagram.png" alt="" class="autor-red"></a>
                        <a href="http://twitter.com" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/tw.png" alt="" class="autor-red"></a>
                        <a href="https://www.linkedin.com/in/mar%C3%ADa-luisa-guzm%C3%A1n-v%C3%A1zquez-154955175?miniProfileUrn=urn%3Ali%3Afs_miniProfile%3AACoAACmb85AB-IyJkn6qQQpozZKxL6yTNXQkASQ&lipi=urn%3Ali%3Apage%3Ad_flagship3_search_srp_all%3B0mY8TDngTUCZ7XVCzBHYNg%3D%3D" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/linkedin.png" alt="" class="autor-red"></a>
                        <!-- <a href=""><img src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/yt.png" alt="" class="autor-red"></a>
                        <a href=""><img src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/spotify.png" alt="" class="autor-red"></a> -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mt-3">
                <div class="un-autor">
                    <img src="https://www.iexe.edu.mx/wp-content/uploads/2022/11/DALL%C2%B7E-2022-10-25-10.43.00.png" alt="" class="img-fluid fo-autor d-block mx-auto mt-3 mb-3">
                    <span class="tema-autor">RUY RENAU</span>
                    <span class="tema-autor"></span>
                    <p class="descripcion-autor">
                        Comunicólogo, unfluencer, dog dad, emprendedor de 5 cifras, traumado con la IA y el dominio de las máquinas. Melómano, cinéfilo, lector, gamer, arte, contracultura y re-curioso. Ultra puntual en todo siempre y cero despistado. Valores cristianos. 
                    </p>
                    <div class="redes-sociales-autor">
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/fb.png" alt="" class="autor-red"></a>
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/instagram.png" alt="" class="autor-red"></a>
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/tw.png" alt="" class="autor-red"></a>
                        <a href=""><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/linkedin.png" alt="" class="autor-red"></a>
                        <!-- <a href=""><img src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/yt.png" alt="" class="autor-red"></a> -->
                        <!-- <a href=""><img src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/ico-redes/spotify.png" alt="" class="autor-red"></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<?php get_template_part('template-parts/bloques-home', null, array(
    'tipo' => 'a',
    'categoria' => '58',
    'classes' => 'grad-desc'
)); ?>
<?php get_template_part('template-parts/bloques-home', null, array(
    'tipo' => 'a',
    'categoria' => '57',
    'classes' => 'grad-asc'
)); ?>
<?php get_template_part('template-parts/bloques-home', null, array(
    'tipo' => 'b',
    'categoria' => '59',
    'classes' => 'solid-blue-soft'
)); ?>
<?php get_template_part('template-parts/bloques-home', null, array(
    'tipo' => 'b',
    'categoria' => '62',
    'classes' => ''
)); ?>

<section id="opinion-lectores">
    <div class="container">
        <div class="row"></div>
    </div>
</section>
<?php get_template_part('template-parts/bloques-home', null, array(
    'tipo' => 'a',
    'categoria' => '63',
    'classes' => 'grad-desc'
)); ?>
<?php get_template_part('template-parts/bloques-home', null, array(
    'tipo' => 'a',
    'categoria' => '4',
    'classes' => 'grad-asc'
)); ?>
<script>
    function nav_toggle(){
        navbar = document.getElementById("blog-nav");
        navbar.classList.toggle("hid");
    }
</script>
<!-- <div class="container">
    <div class="row">
        <div class="col">
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <?php /*  $categories = wp_list_categories(array('exclude' => array(3,1),
                    'style' => 'list',
                    'title_li' => "",
                    'echo' => 0
                ))  ?>
                <?php if($categories) {
                    foreach($categories as $category){
                        ?>
                    <li class="class">
                    <a 
                        href="<?php echo get_category_link($category->term_id); ?>"
                        >
                        <?php echo $category->name; ?>
                    </a>
                    </li>    
                <?php 
                    }
                } */ ?>
                </ul>
            </div>
        </div>
    </div>
</div> -->
<?php get_template_part('template-parts/footer-blog') ?>
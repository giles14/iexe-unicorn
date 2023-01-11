<section id="header-blog">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-8  d-flex align-self-center flex-wrap">
            <img id="logo-navbar" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/expost-az-g.svg" class="sm-logo img-fluid mb-5 mt-5 hidden" alt="">
                <h1 class="mb-4">EL REFERENTE ACADÉMICO <br> Y TECNOLÓGICO DE <br> LAS UNIVERSIDADES</h1>
                <form action="" class="w-100 mb-5">
                    <input onclick="initBusqueda()" class="busqueda-blog" type="text" placeholder="¿Qué son las Políticas Públicas?">
                </form>
            </div>
            <!-- <div class="col-lg-4">
                <div class="row">
                <svg id="tagi" x="0px" y="0px" width="920px" height="324px" viewBox="0 0 920 324">
                    <text transform="matrix(1 0 0 1 497.4292 293.7129)" class="st17 st0">SALES</text>
                    <text transform="matrix(1 0 0 1 727.8999 191.9316)" class="st17 st20">CPC</text>
                    <text id="XMLID_2_" transform="matrix(1 0 0 1 433.0854 82.7407)" class="st17 st8">LEADS</text>
                    <text transform="matrix(1 0 0 1 188.187 144.3555)" class="st5 st17 st22">CLICKS</text>
                    <text transform="matrix(1 0 0 1 380.8301 145.1353)" class="st17 st29">ADWORDS</text>
                    <text transform="matrix(1 0 0 1 378.8799 54.6626)" class="st5 st28 st6">BING</text>
                    <text transform="matrix(1 0 0 1 247.0718 191.1514)" class="st5 st28 st18">YANDEX</text>
                    <text transform="matrix(1 0 0 1 0 129.9268)" class="st5 st28 st30">vKONTAKTE</text>
                    <text transform="matrix(1 0 0 1 250.9712 76.1118)" class="st5 st28 st14">REMARKETING</text>
                    <text transform="matrix(1 0 0 1 229.9131 169.5225)" class="st5 st28 st25">MARKETING</text>
                    <text transform="matrix(1 0 0 1 472.4722 105.3691)" class="st5 st28 st27">LOOKALIKE</text>
                    <text transform="matrix(1 0 0 1 735.7007 163.4639)" class="st5 st28 st1">BIG DATA</text>
                    <text transform="matrix(1 0 0 1 128.9111 264.4697)" class="st5 st28 st26">REKLAMA EFEKTYWNOŚCIOWA</text>
                    <text transform="matrix(1 0 0 1 191.3057 102.2393)" class="st5 st28 st24">PERFORMANCE</text>
                    <text transform="matrix(1 0 0 1 318.4351 289.0342)" class="st5 st28 st1">AUTOMATION</text>
                    <text transform="matrix(1 0 0 1 740.77 211.4307)" class="st5 st28 st21">ATTRIBUTION</text>
                    <text transform="matrix(1 0 0 1 683.0542 230.5381)" class="st5 st28 st19">BEHAVIORAL</text>
                    <text transform="matrix(0.9244 0 0 1 632.7485 97.0288)" class="st5 st28 st16">E-COMMERCE</text>
                    <text transform="matrix(1 0 0 1 663.5552 139.2856)" class="st5 st28 st3">KONWERSJE</text>
                    <text transform="matrix(1 0 0 1 251.3608 240.4502)" class="st5 st17 st31">SHOPPING CAMPAIGNS</text>
                    <text transform="matrix(1 0 0 1 217.0439 54.2744)" class="st5 st28 st11">PRODUCT FEED</text>
                    <text transform="matrix(1 0 0 1 119.9526 240.2871)" class="st5 st28 st13">TRACKING</text>
                    <text transform="matrix(1 0 0 1 444.0044 34.7744)" class="st5 st17 st4">KEYWORDS</text>
                    <text transform="matrix(1 0 0 1 125.4019 129.147)" class="st5 st28 st15">CTR</text>
                    <text transform="matrix(1 0 0 1 350.8022 207.5303)" class="st17 st2">REVENUE</text>
                    <text transform="matrix(1 0 0 1 81.5249 212.6006)" class="st17 st9">ROI</text>
                    <text transform="matrix(1 0 0 1 545.0063 316.7061)" class="st5 st28 st23">COSTS</text>
                    <text transform="matrix(1 0 0 1 638.2075 66.7529)" class="st5 st28 st12">AD GROUPS</text>
                    <text transform="matrix(1 0 0 1 185.8467 282.4043)" class="st5 st28 st10">OPTIMIZATION</text>
                    <text transform="matrix(1 0 0 1 34.1494 150.5947)" class="st5 st28 st7">TARGETING</text>
                </svg>
                </div>
            </div> -->
        </div>
    </div>
</section>

<?php get_template_part('template-parts/top-entradas') ?>

<section id="tag-top" class="grad-desc">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="nombre-categoria mb-4 mt-4">ÚLTIMOS POSTS</h1>
            </div>
        </div>
        <?php
                $args = [
                    'post_type' => 'post',
                    'offset' => 0,
                    'post_status' => 'publish',
                    'posts_per_page' => 4,
                    'post__not_in' => array(4171)
                    
                  ];
                  $the_query = new WP_Query( $args ); 
            ?>
            <div class="row justify-content-between">
                <?php if ( have_posts() ) : ?>
                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>    
                        <div class="col-md-3 un-post-min mb-4">
                            <div class="entrada-min">
                                <?php the_post_thumbnail( 'ultimas-archivo', array( 'class' => 'img-fluid d-block mx-auto' ) ); ?>
                                <?php the_category(); ?>
                                <div class="info-post-min">
                                    <p class="tiempo"><?php echo get_post_meta($post->ID, 'time_to_read', true) . " min de lectura" ?></p>
                                    <h2 class="titulo-noticia"><a href="<?php the_permalink() ?>"><?php the_title();  ?></a></h2>
                                    <p class="meta-info"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-calendar.png" alt="icono de calendario"><span class="fecha"><?php the_date('d\/m\/Y') ?></span><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-like.png" alt="icono de calendario"><span class="likes-noticia">0</span><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-commen.png" alt="icono de calendario"> <span class="comentarios"><?php echo get_comments_number() ?></span></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
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
                        Comunicólogo, unfluencer, dog dad, emprendedor de 5 cifras, traumado con la IA y el dominio de las maquinas. Melómano, cinéfilo, lector, gamer, arte, contra cultura y re curioso. Ultra puntual en todo siempre y 0 despistado. Valores cristianos. 
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
    'categoria' => '62',
    'classes' => 'grad-asc'
)); ?>
<?php get_template_part('template-parts/bloques-home', null, array(
    'tipo' => 'b',
    'categoria' => '59',
    'classes' => 'solid-blue-soft'
)); ?>
<?php get_template_part('template-parts/bloques-home', null, array(
    'tipo' => 'b',
    'categoria' => '4',
    'classes' => ''
)); ?>

<section id="opinion-lectores">
    <div class="container">
        <div class="row"></div>
    </div>
</section>
<?php get_template_part('template-parts/bloques-home', null, array(
    'tipo' => 'a',
    'categoria' => '57',
    'classes' => 'grad-desc'
)); ?>
<?php get_template_part('template-parts/bloques-home', null, array(
    'tipo' => 'a',
    'categoria' => '63',
    'classes' => 'grad-asc'
)); ?>
<script>
    function nav_toggle(){
        navbar = document.getElementById("blog-nav");
        navbar.classList.toggle("hid");
    }
</script>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <?php  $categories = wp_list_categories(array('exclude' => array(3,1),
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
                } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('template-parts/footer-blog') ?>
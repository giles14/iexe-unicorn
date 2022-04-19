<?php /* Template Name: Editorial */ ?>
<?php get_header( ); ?>
<section id="seleccion-categoria" class="buffer-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 style="color: #001E42;" class="titulo">Los más vendidos</h1>
                <h2 class="description tienda">Los libros de IEXE Editorial son número 1 en ventas porque brindan metodologías de aplicación práctica.</h2>
            </div>
            <div class="col-md-1">
            </div>

            <div class="col-md-3">
                <!-- <div class="buscar"><input id="busqueda-blog" type="text" placeholder="Buscar"></div> -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <a href="/producto/el-pais-de-los-elefantes-blancos/">
                <div class="categoria-img elefantes-blancos">
                    <h2>El País de los Elefantes Blancos</h2>
                </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="/producto/la-campana/">
                <div class="categoria-img la-campana">
                    <h2>La Campaña</h2>
                </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="/producto/diseno-de-politicas-publicas/">
                <div class="categoria-img politicas-publicas">
                    <h2>Diseño de Políticas Públicas</h2>
                </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="/producto/capitalismo-natural-y-economia-circular//">
                <div class="categoria-img crisis-viral">
                    <h2>Capitalismo Natural y Economía Circular</h2>
                </div>
                </a>
            </div>
        </div>
    </div>
</section>
<img rel="preload" as="image" class="d-none" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/campana-bg.webp" alt="">
<img rel="preload" as="image" class="d-none" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/crisis-bg.webp" alt="">
<img rel="preload" as="image" class="d-none" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/dpp-bg.webp" alt="">

    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <h1 class="titulo-editorial" id="post-<?php the_ID(); ?>"><?php the_title();?></h1>
            <h2 class="description">Nuestras obras se han convertido en libros de texto en universidades y de consulta obligada en instituciones públicas y privadas.</h2>
            <div class="entrytext">
            <?php the_content(); ?>
            </div>
            <?php endwhile; endif; ?>

            </div>
            <div class="col-md-4 sidebar-woocommerce">
                
            <?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
                
                    <?php dynamic_sidebar('sidebar-1'); ?>
                
            <?php } ?>
            </div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function($){
        $('.la-campana').hover(function(){
            $('body#editorial').addClass('editorial-2');
        }, function(){
            $('body#editorial').delay( 1800 ).removeClass('editorial-2');
        });
        $('.politicas-publicas').hover(function(){
            $('body#editorial').addClass('editorial-3');
        }, function(){
            $('body#editorial').delay( 1800 ).removeClass('editorial-3');
        });
        $('.crisis-viral').hover(function(){
            $('body#editorial').addClass('editorial-1');
        }, function(){
            $('body#editorial').delay( 1800 ).removeClass('editorial-1');
        });
    });
    </script>            


<?php get_footer(); ?>
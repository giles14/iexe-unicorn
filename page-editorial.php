<?php /* Template Name: Editorial */ ?>
<?php get_header( ); ?>
<section id="seleccion-categoria" class="buffer-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="titulo">Best Sellers</h1>
                <h2 class="description">Elige el programa en el que deseas inscribirte para ver todo el proceso</h2>
            </div>
            <div class="col-md-3">
            </div>

            <div class="col-md-3">
                <div class="buscar"><input id="busqueda-blog" type="text" placeholder="Buscar"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="categoria-img la-campana">
                    <h2>La Campaña</h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="categoria-img crisis-viral">
                    <h2>Crisis Viral</h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="categoria-img politicas-publicas">
                    <h2>Diseño de Políticas Públicas</h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="categoria-img elefantes-blancos">
                    <h2>El país de los elefantes blancos</h2>
                </div>
            </div>
        </div>
    </div>
</section>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <h1 class="titulo-editorial" id="post-<?php the_ID(); ?>"><?php the_title();?></h1>
            <h2 class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</h2>
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



<?php get_footer(); ?>
<?php get_header( ); ?>
<section id="entrada-blog">
    <div class="container">
        <?php  while ( have_posts() ) : the_post(); ?>
        <div class="row">
            <h1 class="titulo"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
        </div>
        <div class="row">
            <div class="col-md-9">
                    <div class="archivo-thumb">
                        <?php the_post_thumbnail('destacada-post-header', array('class' => 'img-fluid')); ?>
                        <div class="archivo-fecha">
                                <span class="numero"><?php echo get_the_date('d') ?></span>
                                <span class="mes"><?php echo get_the_date('F') ?></span>
                                
                        </div>
                    </div>
                <div class="meta-articulo">Categoría COLABORACIONES, Emprendimiento, MiPyme Ibero, Talleres CEDE17 junio, 2021AdminIberoBlogs109 Visitas0 commentarios</div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <h1 class="post-titulo"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
                <span class="meta-blog-autor"><?php echo get_the_author() ?></span>
                <div class="contenido-post">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-md-3">
                <h2 class="post-categorias">Categorías</h2>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</section>
<?php get_template_part( 'template-parts/interesar'); ?>

    <!-- Agregar banner publicidad -->

<?php get_template_part( 'template-parts/vinculos'); ?>
<?php get_footer( ); ?>
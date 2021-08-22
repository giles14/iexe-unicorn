<?php get_header( ); ?>
<section id="entrada-blog">
    <div class="container">
        <?php  while ( have_posts() ) : the_post(); ?>
        <div class="row">
            <div class="col-md-8">
                    <?php the_post_thumbnail('destacada-archivo'); ?>
                    <img src="" alt="">
                <div class="meta-articulo"></div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h1 class="post-titulo"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
                <span class="meta-blog-autor"><?php echo get_the_author() ?></span>
                <div class="contenido-post">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-md-4">
                <h2 class="post-categorias">Categorías</h2>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</section>
<?php get_footer( ); ?>
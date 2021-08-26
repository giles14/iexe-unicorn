<?php get_header( ); ?>
<section id="entrada-blog">
    <div class="container">
        <?php  while ( have_posts() ) : the_post(); ?>
        <div class="row">
            <div class="col-md-12">
                <h1 class="titulo"><a href="<?php echo esc_url(home_url()) ?>">Inicio</a> / <a href="<?php echo get_category_link( get_the_category()[0]->cat_ID ) ?>"><?php echo get_the_category()[0]->name  ?></a> / <a href="<?php the_permalink() ?>"> <?php echo wp_trim_words(get_the_title(), 4, '...'); ?></a></h1>
                <?php if ( category_description(get_the_category()[0]->cat_ID) ) : ?>
                    <h2 class="description"><?php echo category_description(get_the_category()[0]->cat_ID); ?></h2>
                <?php endif; ?>
                </div>
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
                <div class="meta-articulo"></div>
            </div>
            <div class="col-md-3">
                <?php get_template_part( 'template-parts/lateral-blog'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <h1 class="post-titulo"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
                <span class="meta-blog-autor"><?php echo get_the_author() ?></span>
                <div class="contenido-post">
                    <?php the_content(); ?>
                </div>
                <?php if(get_field('notas')): ?>
                    <div class="notas">
                        <h2 >Notas</h2>
                        <?php the_field('notas') ?>
                    </div>
                <?php endif; ?>
                <?php if(get_field('notas')): ?>
                    <div class="referencias">
                        <h2>Referencias</h2>
                        <?php the_field('referencias'); ?>
                    </div>
                <?php endif; ?>
                
            </div>
            <div class="col-md-3">
                
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
<?php get_template_part( 'template-parts/interesar'); ?>

    <!-- Agregar banner publicidad -->

<?php get_template_part( 'template-parts/vinculos'); ?>
<?php get_footer( ); ?>
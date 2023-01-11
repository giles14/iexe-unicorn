<?php if(!is_user_logged_in( )){
    ?>
<?php get_header( ); ?>
<section id="archivo-posts">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1 class="titulo"><?php single_cat_title(); ?>...</h1>
                <?php if ( category_description() ) : ?>
                    <h2 class="description"><?php echo category_description(); ?></h2>
                <?php endif; ?>                    
            </div>
            <div class="col col-md-3">
                <?php get_template_part( 'template-parts/categoriaLista'); ?>
            </div>
        </div>
            <?php if ( have_posts() ) : ?>
                <?php
 
                // The Loop
                while ( have_posts() ) : the_post();  ?>
            <div class="row un-post">
                    <div class="col-md-6">
                        <div class="archivo-thumb">
                            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('archivo-thumb', array('class' => 'img-fluid')); ?></a>
                            <div class="archivo-fecha">
                                <span class="numero"><?php echo get_the_date('d') ?></span>
                                <span class="mes"><?php echo get_the_date('F') ?></span>
                                
                            </div>
                            
                        </div>
                    </div>
                <div class="col-md-6">
                    <h1 class="blog-titulo">
                        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                    </h1>
                    <span class="meta-blog-autor"><?php the_author_posts_link() ?></span>
                    <p><?php echo get_the_excerpt(); ?></p>
                    <a class="leer-mas" href="<?php the_permalink() ?>">Leer más</a>
                </div>

            </div>
            <?php endwhile; 
         else: ?>
            <p>Sorry, no posts matched your criteria.</p>
            
            
            <?php endif; ?>
            <?php the_posts_pagination(); ?>
                    
        </div>

</section>

<?php get_footer( ); ?>
<?php
}else{
?>
<?php get_template_part('template-parts/header-blog') ?>
<div class="topics-top">
    <a onclick="nav_toggle();" class="bandera-topics"><img class="la-bandera" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/bandera-topics.png" alt=""></a>
</div>
<?php get_template_part('template-parts/top-entradas') ?>
<?php get_template_part('template-parts/category-blog') ?>
<style>
    html {
    margin-top: 0px !important;
    }
</style>
<?php get_template_part('template-parts/footer-blog') ?>
<?php } ?>
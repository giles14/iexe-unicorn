<section id="blogs">
    <div class="container">
        <div class="row text-center">
                <a href="/blog" target="_blank" class="button-primary">NOTICIAS Y BLOG IEXE</a>
            </div>
        <div class="row">
        <?php 
                // Parametros de WP_Query
                $the_query = new WP_Query( array( 'category_name' => 'blog,noticias',
                                                    'posts_per_page' => 3
                
                                            ) ); ?>
                
                <?php 
                while ($the_query -> have_posts()) : $the_query -> the_post(); 
                ?>
            <div class="col-lg-4 mb-3">
                <div class="blog-post-front">
                    <a target="_blank" href="<?php the_permalink() ?>"><?php the_post_thumbnail('destacada-nuevo-bloque', array('class' => 'img-fluid')); ?></a>
                    <div class="area-de-texto">
                        <a href="<?php the_permalink() ?>"><h1><?php echo wp_trim_words(get_the_title(), 16, '...');  ?></h1></a>
                        <p><?php echo get_the_excerpt() ?></p>
                        <div class="extra-data">
                            <span><img class="img-fluid mr-2" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/autor_iexe.png" alt=""> <?php echo get_author_name(); ?></span>
                        </div>
                        <a target="_blank" href="<?php the_permalink() ?>" class="link-boton-blog"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/link-circ.png" alt=""></a>
                    </div>
                </div>
            </div>
            <?php 
                endwhile;
                wp_reset_postdata();
                ?>
        </div>
    </div>
</section>
<style>
    .blog-post-front h1 {
    font-weight: 600;
    font-size: 16px;
    color: #f6f6f6;
    line-height: 18px;
    margin-bottom: 20px;
    height: 54px;
    }
    .blog-post-front p{
        font-weight: 200;
        font-size: 14px;
        color: #f6f6f6;
        margin-bottom: 48px;
        height: 105px;
    }
    .blog-post-front {
    background: var(--primario--azul-obscuro);
    border-radius: 0px 0px 10px 10px;
    padding: 0px;
    width: 90%;
    overflow: hidden;
    position: relative;
    margin: 0 auto;
    }
    .area-de-texto {
        padding: 27px;
        padding-bottom:22px;
        border-top: 3px solid blue;
    }
    .extra-data {
    font-size: 12px;
    color: #F6f6f6;
    }
    a.link-boton-blog {
    display: block;
    position: absolute;
    bottom: 12px;
    right: 12px;
    }
    #blogs a.button-primary {
    display: block;
    margin: 0 auto 36px auto;
    max-width: unset;
    }

    @media only screen and (max-width: 600px){
    .bandera {
        height: unset;
    }
}
</style>
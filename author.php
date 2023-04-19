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
<?php //get_template_part('template-parts/top-entradas') ?>
<div class="container">
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="fix-top" style="padding-top: 80px;"></div>
            <?php get_template_part( 'template-parts/info-autor'); ?>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/category-blog') ?>
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
<style>
    html {
    margin-top: 0px !important;
    }
</style>
<?php get_template_part('template-parts/footer-blog') ?>
<?php } ?>
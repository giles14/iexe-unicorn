<section id="interesar">
    <div class="container">
        <div class="row">
            <h2 class="interesar">Tambien te podría interesar</h2>
        </div>
        <div class="row">
        <?php 
                // Parametros de WP_Query
                $the_query = new WP_Query( array( 'post_type' => 'post',
                                                  'orderby'   => 'rand',
                                                  'posts_per_page' => 3
                
                                            ) ); ?>
                
                <?php 
                while ($the_query -> have_posts()) : $the_query -> the_post(); 
                ?>
            <div class="col-md-4">
                <?php the_post_thumbnail('destacada-interesar', array('class' => 'img-fluid post-destacada')); ?>
                <h2 class="titulo-entrada"><a href="<?php the_permalink() ?>"><?php echo wp_trim_words(get_the_title(), 7, '...'); ?></a></h2>
                <span class="fecha"><?php echo get_the_date('j \d\e F\ \d\e\l Y'); ?></span>
            </div>
            <?php 
                endwhile;
                wp_reset_postdata();
            ?>
        </div>
    </div>
    <h1 class="titulo">
    </h1>
</section>

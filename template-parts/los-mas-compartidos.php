<div class="widget container-widget">
        <h2 class="titulo-sidebar">Los más compartidos</h2>
        <?php 
                // Parametros de WP_Query
                $the_query = new WP_Query( array( 'post_type' => 'post',
                                                  'orderby'   => 'rand',
                                                  'posts_per_page' => 3
                
                                            ) ); ?>
                
                <?php 
                while ($the_query -> have_posts()) : $the_query -> the_post(); 
                ?>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('destacada-nuevo-sidebar', array('class' => 'img-fluid')); ?>
                </a>
                <h2 class="titulo-entrada mb-4"><a href="<?php the_permalink() ?>"><?php echo wp_trim_words(get_the_title(), 7, '...'); ?></a></h2>
            <?php 
                endwhile;
                wp_reset_postdata();
            ?>
</div>
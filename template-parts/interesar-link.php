
<div class="widget container-widget">
    <h2 class="mb-4">Te podría interesar:</h2>
    <?php 
                // Parametros de WP_Query
            $the_query = new WP_Query( array( 'post_type' => 'post',
                                              'orderby'   => 'rand',
                                              'posts_per_page' => 7
            
                                        ) ); ?>
                
            <?php 
            while ($the_query -> have_posts()) : $the_query -> the_post(); 
            ?>
            <h3 class="interesar titulo-entrada"><a href="<?php the_permalink() ?>"><?php echo wp_trim_words(get_the_title(), 7, '...'); ?></a></h2>
        <?php 
            endwhile;
            wp_reset_postdata();
        ?>
</div>
<style>
    h3.interesar.titulo-entrada a {
    color: #273481;
    font-size: 14px;
    line-height: 1;
    font-weight: 400;
    }    
</style>
        

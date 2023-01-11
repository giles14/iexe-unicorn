<section id="los-mas-leidos">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="nombre-categoria mb-4 mt-4">TOP ENTRADAS</h1>
            </div>
        </div>
        <div class="row">
        <?php
                $cagb_it = 0;
                $args = [
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'category__in' => [ 61 ],  
                  ];
                  $query = new WP_Query( $args ); 
            ?>
                <?php if( $query->have_posts() ):
                    while( $query->have_posts() ): $query->the_post(); ?>
            <div class="col-md-3">
                <span class="numero"><?php echo '0' . ++$cagb_it; ?></span>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                <p class="meta-info"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-calendar.png" alt="icono de calendario"><span class="fecha"><?php the_date('d\/m\/Y') ?></span><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-like.png" alt="icono de calendario"><span class="likes-noticia">0</span><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-commen.png" alt="icono de calendario"> <span class="comentarios"><?php echo get_comments_number() ?></span></p>
            </div>
                <?php endwhile; ?>
            <?php endif; ?>
                <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>
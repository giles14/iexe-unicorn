<section id="los-mas-leidos" class="pt-5" style="position: relative;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="nombre-categoria mb-4 mt-4">TOP ENTRADAS</h1>
            </div>
        </div>
                    
        <div class="row meu">
        <?php
                $cagb_it = 0;
                $args = [
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'category__in' => [ 61],
                    'category__not_in' => [4]
                    //'category_name' => 'noticias'
                  ];
                  $query = new WP_Query( $args ); 
            ?>
            <div class="splideTop" style="display: contents">
                        <div class="splide__track">
                            <div class="splide__list">
                <?php if( $query->have_posts() ):
                    while( $query->have_posts() ): $query->the_post(); ?>
            <div class="col-md-3 splide__slide">
                <span class="numero"><?php echo '0' . ++$cagb_it; ?></span>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                <p class="meta-info"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-calendar.png" alt="icono de calendario"><span class="fecha"><?php the_date('d\/m\/Y') ?></span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 27.978 23.497">
                        <path id="Icon_awesome-heart" class="awesome-heart filled" data-name="Icon awesome-heart" d="M24.356,3.777a7.494,7.494,0,0,0-9.831.679L13.487,5.469,12.449,4.456a7.493,7.493,0,0,0-9.831-.679A6.915,6.915,0,0,0,2.1,14.156L12.291,24.13a1.716,1.716,0,0,0,2.387,0l10.195-9.975a6.91,6.91,0,0,0-.516-10.379Z" transform="translate(0.502 -1.745)" fill="none" stroke="#273482" stroke-width="1"></path>
                        </svg><span class="likes-noticia"><?php echo cagb_count_likes_post($post->ID); ?></span><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/aw-commen.png" alt="icono de calendario"> <span class="comentarios"><?php echo get_comments_number() ?></span></p>
            </div>
                <?php endwhile; ?>
            <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                </div>
            </div>
          </div>
        </div>
    </div>
</section>
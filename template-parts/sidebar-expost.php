<aside>
        <div class="banner-interno-blog mb-4 text-center">
            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/banner-doctorado.png" class="img-fluid" alt="">
        </div>
        <h2 class="titulo-sidebar">Explora</h2>
        <ul class="in-cloud-tag">    
            <?php
                $cagbe_count = 0;
                $tags = get_tags('post_tag'); //taxonomy=post_tag
                shuffle($tags);
                if ( $tags ) :
                    foreach ( $tags as $tag ) : ?>
                        <li class="tag-item-manually mb-3"><a class="tag" href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a></li>
                        <?php 
                            $cagbe_count++;
                            if( $cagbe_count > 11 ) break;
                        ?>
                    <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    <div class="widget container-widget azul">
        <h2>¡Entérate de todo!</h2>
        <p>Si quieres ser el primero en enterarte de todas las novedades.</p>
        <p class="text-right">¡SÍGUEME!</p>
        <div class="d-block text-right"><a href="https://www.linkedin.com/newsletters/expost-6995555099250999296/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24.922" height="27.992" viewBox="0 0 24.922 27.992">
            <path id="Icon_awesome-linkedin" data-name="Icon awesome-linkedin" d="M23.142,2.25H1.775A1.91,1.91,0,0,0,0,4.268V28.224a1.91,1.91,0,0,0,1.775,2.018H23.142a1.915,1.915,0,0,0,1.78-2.018V4.268A1.915,1.915,0,0,0,23.142,2.25ZM7.532,26.243H3.838V12.884h3.7V26.243ZM5.685,11.06A2.286,2.286,0,0,1,3.544,8.654,2.286,2.286,0,0,1,5.685,6.249,2.29,2.29,0,0,1,7.827,8.654,2.282,2.282,0,0,1,5.685,11.06ZM21.378,26.243H17.685v-6.5c0-1.55-.028-3.543-1.919-3.543-1.925,0-2.22,1.687-2.22,3.43v6.611H9.852V12.884H13.4v1.824h.05a3.836,3.836,0,0,1,3.5-2.156c3.738,0,4.434,2.768,4.434,6.367Z" transform="translate(0 -2.25)" fill="#fff"/>
            </svg></a> 
        </div>
    </div>
    <?php get_template_part('template-parts/los-mas-compartidos');  ?>
    <?php get_template_part('template-parts/interesar-link');  ?>
</aside>
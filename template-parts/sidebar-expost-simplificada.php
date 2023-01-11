<aside>
    <h2 class="titulo-sidebar">Explora</h2>
    <ul class="in-cloud-tag mb-4">    
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

        <div class="banner-interno-blog mb-4 text-center">
            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/banner-doctorado.png" class="img-fluid" alt="">
        </div>
</aside>
<style>
    aside {
        margin-top: 0px;
    }
</style>
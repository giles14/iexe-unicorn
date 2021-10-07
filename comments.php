<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div id="comments" class="comments-area">
 
            <?php if ( have_comments() ) : ?>
                <h2 class="comments-title">
                    <?php
                        printf( _nx( 'Un comentario', '%1$s comentarios', get_comments_number(), 'comments title', 'iexe-unicorn' ),
                            number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
                    ?>
                </h2>
            
                <ol class="comment-list">
                    <?php
                        wp_list_comments( array(
                            'style'       => 'ol',
                            'short_ping'  => true,
                            'avatar_size' => 74,
                        ) );
                    ?>
                </ol><!-- .comment-list -->
            
                <?php
                    // Are there comments to navigate through?
                    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
                ?>
                <nav class="navigation comment-navigation" role="navigation">
                    <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'iexe-unicorn' ); ?></h1>
                    <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'iexe-unicorn' ) ); ?></div>
                    <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'iexe-unicorn' ) ); ?></div>
                </nav><!-- .comment-navigation -->
                <?php endif; // Check for comment navigation ?>
            
                <?php if ( ! comments_open() && get_comments_number() ) : ?>
                <p class="no-comments"><?php _e( 'Comentarios cerrados' , 'iexe-unicorn' ); ?></p>
                <?php endif; ?>
            
            <?php endif; // have_comments() ?>
            
            <?php if(!is_woocommerce()) {
                comment_form(array('title_reply' => 'Deja un comentario'));
            }else{
                comment_form(array('title_reply' => 'Deja una opinión'));
            }
            ?>
            
            </div><!-- #comments -->
        </div>
    </div>
</div>
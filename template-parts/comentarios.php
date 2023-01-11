<section id="comentarios">
    <div class="row">
        <div class="col">
        <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif; 
        ?>
        </div>
    </div>
    
</section>
<?php get_header( ); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>
            <div class="entrytext">
            <?php the_content(); ?>
            </div>
            <?php endwhile; endif; ?>

            </div>
        </div>
    </div>



<?php get_footer(); ?>
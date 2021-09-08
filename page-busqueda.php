<?php /* Template Name: Busqueda */ ?>
<?php get_header( ); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>
            <div class="entrytext">
            <?php the_content(); ?>
            </div>
            <?php endwhile; endif; ?>
            <select class="selectpicker">
                <option>Mustard</option>
                <option>Ketchup</option>
                <option>Barbecue</option>
            </select>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            <select class="selectpicker" data-live-search="true">
                <option>Mustard</option>
                <option>Ketchup</option>
                <option>Relish</option>
            </select>

            </div>
        </div>
    </div>



<?php get_footer(); ?>
<?php get_template_part('template-parts/header-blog') ?>
<div class="topics-top">
    <a onclick="nav_toggle();" class="bandera-topics"><img class="la-bandera" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/bandera-topics.png" alt=""></a>
</div>
<?php get_template_part('template-parts/category-blog') ?>
<style>
    html {
    margin-top: 0px !important;
    }
</style>
<?php get_template_part('template-parts/footer-blog') ?>
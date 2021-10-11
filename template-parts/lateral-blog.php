<div class="lateral-categorias">
    <h2 class="post-categorias">Categorías</h2>
    <ul>

    </ul>
    <?php
    $allowed_this = array(32,6);
     $lateralCategorias = get_categories(array(
        'exclude' => $allowed_this
    )); 
        foreach ($lateralCategorias as $categoria){
        echo "<li><a href=" . get_category_link( $categoria->term_id ) .">$categoria->name</a></li>";
    }
    ?>
</div>

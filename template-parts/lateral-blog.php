<div class="lateral-categorias">
    <h2 class="post-categorias">Categorías</h2>
    <ul>

    </ul>
    <?php $lateralCategorias = get_categories(array(
        'exclude' => 32
    )); 
        foreach ($lateralCategorias as $categoria){
        echo "<li><a href=" . get_category_link( $categoria->term_id ) .">$categoria->name</a></li>";
    }
    ?>
</div>

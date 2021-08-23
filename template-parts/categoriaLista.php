<?php $categorias = get_categories(); 
$categoria_actual = get_queried_object();
$categoria_actual->term_id;
?>

<select id="seleccionperiodo" class="categoria-sel">
    <?php foreach($categorias as $categoria) {
        $seleccionado = ($categoria_actual->term_id == $categoria->term_id) ? 'selected' : '';
        echo '<option value"' . $categoria->name .'" ' . $seleccionado .'>' .  $categoria->name . '</option>';
    }
    ?>
</select>

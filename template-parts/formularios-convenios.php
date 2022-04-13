<div class="form-group form-check mt-4">
    <input type="checkbox" class="form-check-input" id="tienes-convenio">
    <label class="form-check-label" for="tienes-convenio">¿Cuentas con algún convenio?</label>
</div>
<div class="form-group" id="lista-convenios">
        <label for="idConvenios">Selecciona un convenio</label>
        
            <select class="form-control" name="convenios" id="idConvenios">
                <?php
                    $url = "https://iexe.app/api/";
                    $json = file_get_contents($url);
                    $json_data = json_decode($json, true);
                    echo '<option value="0">-- Selecciona un convenio --</option>';
                    foreach($json_data as $form){
                        echo '<option value="' . $form['idConvenio'] . '">' . $form['nombre'] . '</option>';

                    }
                ?>
            </select>
        
</div>
<script>
        jQuery("#lista-convenios").hide();
        jQuery(document).ready(function(){
            jQuery('input[type="checkbox"]').click(function(){
                if($(this).prop("checked") == true){
                    jQuery("#lista-convenios").show();
                }
                else if($(this).prop("checked") == false){
                    jQuery("#lista-convenios").hide();
                }
            });
    });
</script>
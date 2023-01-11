<section id="calcula-beca">
    <div class="container">
        <div class="row beca">
            <div class="col">
                <h1 class="titulo">¡Calcula el monto de tu beca!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/escudo-becas.webp" alt="" class="img-fluid d-none d-sm-block">
            </div>
            <div class="col-md-7">
                <!-- <p>Sigue unos sencillos pasos para calcular el monto de tu beca. ¡Tenemos una especialmente diseñada para ti!</p> -->
                <form id="calcular-beca" method="POST" data-origen="calcula-beca" action="">
                    <!-- progressbar -->
                    <!-- <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="fieldlabels">Nombre <?php echo $porcentajeBeca ?></label> 
                                    <input type="text" name="nombre" placeholder="Ingresa aquí tu nombre" required/>
                                </div>
                                <div class="col-md-12">
                                    <label class="fieldlabels">Email: *</label>
                                    <input type="email" name="email" placeholder="Ingresa aquí tu correo electrónico" required/>
                                </div>
                                <div class="col-md-7">
                                    <label class="fieldlabels">Celular: *</label>
                                    <input id="telefono-beca" type="tel" name="telefono" placeholder="Ingresa aquí tu teléfono móvil" required  minlength="7" maxlength="11"/>
                                </div>
                                <div class="col-md-5">
                                    <label class="fieldlabels" for="promedio">Promedio: *</label>
                                    <input id="promedio" type="number" name="promedio" placeholder="Ingresa aquí tu promedio" required  step="0.1" min="1" max="10.0"/>
                                </div>
                                <input id="pje-beca" name="porcentaje-2" type="hidden" value="" />

                                <div style="margin-top: 15px" class="col-md-12">
                                    <label for="programa-interesB">Selecciona un programa</label>
                                    <?php get_template_part( 'template-parts/selectProgramas', null, array(
                                        'diplomados' => true,
                                    )); ?>
                                </div>
                            </div>
                            
                        </div> 
                        
                        <button type="button" onclick="actualizaTarifas();enviarFormulario(this,true,false,false,false,valida())" name="next" id="crm" class="next btn btn-primario float-right mt-3 ld-ext-right">Siguiente<div class="ld ld-ring ld-spin"></div></button>
                    </fieldset>
                    <fieldset>
                        <div class="form-card resultado">
                            <div class="row justify-content-center">
                                <h2 class="text-center obtenido"><strong>Esta es la beca que has obtenido:</strong></h2> <br>
                                    <div class="recuadro-beca">
                                        <div class="row">
                                            <div class="col-12 col-lg-8">
                                                <p class="nombre-valor">Beca Académica</p>
                                                <div id="beca-academica-pje" class="el-valor"></div>
                                                <p  class="nombre-valor">Pago Mensual</p>
                                                <div id="pago-mensual" class="el-valor"></div>
                                                <p  class="nombre-valor">Ahorro total de</p>
                                                <div id="ahorro-total" class="el-valor"></div>
                                                <!-- <p class="text-center">Este porcentaje representa el monto de beca que puedes obtener.</p> -->
                                            </div>
                                            <div class="col-12 col-lg-4 d-flex justify-content-end">
                                                <button type="button" onclick="window.open(
                                                    'https://bit.ly/3FMBIE',
                                                    '_blank'
                                                    );" name="next" id="crm2" class="next btn btn-primario float-right mt-3 ld-ext-right align-self-end">Regístrate</button>
                                            </div>
                                        </div>
                                    </div>
                                
                            <div class="row justify-content-center">
                                <div class="col-12 text-center">
                                    <h5 class="text-center beca-restricciones mt-3">*Sujeto a la revisión del equipo correspondiente de IEXE, aplican términos y condiciones</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
                
            </div>
        </div>
    </div>
</section>
<?php // wp_enqueue_script('iexe-unicorn-silent-formulario');  ?>
<script src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/GaugeMeter.js"></script>

<style>
    #medidorBeca{
        margin: 0 auto;
    }
  .GaugeMeter{
    Position:        Relative;
    Text-Align:      Center;
    Overflow:        Hidden;
    Cursor:          Default;
  }

  .GaugeMeter SPAN,
  .GaugeMeter B{
    Margin:          0 23%;
    Width:           54%;
    Position:        Absolute;
    Text-align:      Center;
    Display:         Inline-Block;
    Color:           RGBa(0,0,0,.8);
    Font-Weight:     100;
    Font-Family:     "Open Sans", Arial;
    Overflow:        Hidden;
    White-Space:     NoWrap;
    Text-Overflow:   Ellipsis;
  }
  .GaugeMeter[data-style="Semi"] B{
    Margin:          0 10%;
    Width:           80%;
  }

  .GaugeMeter S,
  .GaugeMeter U{
    Text-Decoration: None;
    Font-Size:       .5em;
    Opacity:         .5;
  }

  .GaugeMeter B{
    Color:           Black;
    Font-Weight:     300;
    Font-Size:       .5em;
    Opacity:         .8;
  }
  .el-valor {
    font-size: 36px;
    font-weight: 800;
    font-size: 36px;
    margin-bottom: 22px;
}
  .nombre-valor {
    font-size: 25px;
    line-height: 24px;
    margin-bottom: -5px;
    font-weight: 300;
}
div#beca-academica-pje {
    color: var(--primario-cyan);
}
.recuadro-beca {
    background: url('<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/bg-calculadora.webp') var(--primario--azul-obscuro);
    background-repeat: no-repeat;
    border-radius: 15px;
    color: #fFF;
    padding: 42px;
    display: inherit;
    background-position-x:right;
    padding-bottom: 20px;
}
#pago-mensual small, #ahorro-total small {
    font-size: 21px;
    font-weight: 200;
}
h2.obtenido {
    font-family: var(--familia-titulos);
    font-size: 18px;
}
h5.text-center.beca-restricciones.mt-3 {
    font-size: 14px;
}
</style>
<script>
        function actualizaTarifas(){
            this.Licenciaturas = 3852;
            this.Maestrías = 6955;
            this.Doctorados = 9000;
            let tipo = document.querySelector('select[name="programa"] option:checked').parentElement.label;
            let promedio = document.getElementById('promedio');
            let programa = document.getElementById('programa-interes');
            promedio = promedio.value;
            var mensaje = calculaPorcentajeBeca(promedio);
            document.getElementById("beca-academica-pje").innerHTML = mensaje + "% de Descuento*";
            document.getElementById("pago-mensual").innerHTML = "$" + (comaSep(Math.round(this[tipo] * ((100-mensaje)/100)))) + "<small> Pesos mexicanos</small>";
            document.getElementById("ahorro-total").innerHTML = "$" + (comaSep(Math.round(this[tipo] - (this[tipo] * ((100-mensaje)/100))))) +  "<small> Pesos mexicanos</small>" ;
            
        }
        function comaSep(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
        function valida(){
        var formulario = $("#calcular-beca");
        console.log(formulario);
        formulario.validate();
        var res = formulario.valid();
        console.log(res);
        return res
    }

    function calculaPorcentajeBeca(promedio){
        const primero = 45;
        const segundo = 50;
        const tercero = 55;
        const cuarto = 60;
        const quinto = 65;
        var mensaje = "Promedio insuficiente";
        if (promedio >= 7 && promedio < 8){
            mensaje = primero;
        } else if (promedio >= 8 && promedio <= 8.5){
            mensaje = segundo;
        } else if (promedio >= 8.6 && promedio < 9.0){
            mensaje = tercero;
        } else if (promedio >= 9.0 && promedio <= 9.5) {
            mensaje = cuarto;
        } else if (promedio >= 9.6 && promedio <= 10){
            mensaje = quinto;
        }
        var pje = document.getElementById('pje-beca');
        pje.value = mensaje;
        return mensaje;
    }    
</script>
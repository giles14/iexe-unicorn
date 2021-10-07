<section id="calcula-beca">
    <div class="container">
        <div class="row beca">
            <div class="col">
                <h1 class="titulo">¡Calcula el monto de tu beca!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/escudo-becas.webp" alt="" class="img-fluid d-none d-sm-block">
            </div>
            <div class="col-md-6">
                <p>Sigue unos sencillos pasos para calcular el monto de tu beca. ¡Tenemos una especialmente diseñada para ti!</p>
                <div id="pasos-formulario" class="">
                    <ul id="progressbar">
                        <li class="active">Paso</li>
                        <li>Paso</li>
                        <li>Paso</li>
                    </ul>

                </div>
                <form id="calcula-beca">
                    <!-- progressbar -->
                    <!-- <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <label class="fieldlabels">Nombre</label> 
                            <input type="text" name="nombre" placeholder="Ingresa aquí tu nombre" />
                            <label class="fieldlabels">Email: *</label>
                            <input type="email" name="email" placeholder="Ingresa aquí tu correo electrónico" />
                            <label class="fieldlabels">Celular: *</label>
                            <input id="telefono-beca" type="tel" name="telefono" placeholder="Ingresa aquí tu teléfono móvil" />
                            <div style="margin-top: 15px" class="form-group">
                                <label for="programa-interes">Selecciona un programa</label>
                                <?php get_template_part( 'template-parts/selectProgramas'); ?>
                            </div>
                            <div class="row">
                                <div class="col-7">
                                    <!-- <h2 class="fs-title">Account Information:</h2> -->
                                </div>
                                <div class="col-5">
                                    <!-- <h2 class="steps">Paso 1 - 4</h2> -->
                                </div>
                            </div> 
                        </div> 
                        
                        <button type="button" name="next" class="next btn btn-primario float-right mt-3">Siguiente</button>
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            
                            <label class="fieldlabels">Edad: *</label>
                            <input type="text" name="edad" placeholder="Coloque su edad" />
                            <label class="fieldlabels">Ocupación *</label>
                            <input type="text" name="ocupacion" placeholder="¿Cual es tu ocupación?" /> 
                            <label class="fieldlabels">Promedio de preparatoria/licenciatura/maestria: *</label>
                            <input type="text" name="promedio" placeholder="Proporcionanos tu último promedio académico" />
                            <div class="form-group">
                                <label for="dependientes" class="fieldlabels">¿Cuantas personas dependen económicamente de ti? *</label>
                                <select name="dependientes" id="dependientes">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4 o más</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-7">
                                    <!-- <h2 class="fs-title">Personal Information:</h2> -->
                                </div>
                                <div class="col-5">
                                    <!-- <h2 class="steps">Paso 2 - 4</h2> -->
                                </div>
                            </div>
                        </div>
                        <button type="button" name="next" class="next btn btn-primario float-right mt-3">Siguiente</button> <!--<button type="button" name="previous" class="previous btn btn-primario float-right mt-3">Anterior</button>  -->
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <!-- <h2 class="fs-title">Image Upload:</h2> -->
                                </div>
                                <div class="col-5">
                                    <!-- <h2 class="steps">paso 3 - 4</h2> -->
                                </div>
                            </div> 
                            <p style="margin-top:36px;">Entiendo que el valor de esta beca puede variar y únicamente será valida una vez que un asesor educativo haya corroborado la información que proporcionaste.</p>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="entiendo">
                                <label class="form-check-label" for="exampleCheck1">Estoy de acuerdo</label>
                            </div>
                        </div> 
                         <button id="generar-resultado" type="button" name="next" class="next btn btn-primario float-right mt-3">Generar</button><!-- <input type="button" name="next" class="next action-button" value="Generar" /> <input type="button" name="previous" class="previous action-button-previous" value="Anterior" /> -->
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row justify-content-center">
                                <h2 class="text-center"><strong>Esta es la beca a la que podrás acceder</strong></h2> <br>
                                <div class="col-12">
                                <div class="GaugeMeter" id="medidorBeca" data-append="%" data-size="200" data-theme="Red-Green" data-back="RGBa(0,0,0,.1)" data-animate_gauge_colors=true data-animate_text_colors=true data-width="15" data-label=null data-style="Arch" data-label_color="#006400"></div>    
                                <p class="text-center">Este porcentaje representa el monto de beca que puedes obtener.</p>
                                <a class="descubre-mas azul-primario-color text-center d-block" target="_blank" href="https://bit.ly/3kzGElO">Inicia el proceso contactando a un asesor.</a><br>
                                
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12 text-center">
                                    <h5 class="text-center">*Sujeto a la revisión del equipo correspondiente de IEXE</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
                
            </div>
        </div>
    </div>
</section>
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
</style>
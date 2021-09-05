<section id="calcula-beca">
    <div class="container">
        <div class="row beca">
            <div class="col">
                <h1 class="titulo">¡Calcula el monto de tu beca!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/escudo-becas.webp" alt="" class="img-fluid">
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
                            <label class="fieldlabels">Nombre</label> <input type="text" name="uname" placeholder="Ingresa aquí tu nombre" /><label class="fieldlabels">Email: *</label> <input type="email" name="email" placeholder="Ingresa aquí tu correo electrónico" /><label class="fieldlabels">Teléfono: *</label> <input type="email" name="email" placeholder="Ingresa aquí tu número telefónico" />
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
                            
                            <label class="fieldlabels">Nombre: *</label> <input type="text" name="fname" placeholder="Nombre" /> <label class="fieldlabels">Apellido *</label> <input type="text" name="apellido" placeholder="Last Name" /> <label class="fieldlabels">Teléfono: *</label> <input type="text" name="tel" placeholder="Teléfono" />
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
                            </div> <label class="fieldlabels">Tu INE:</label> <input type="file" name="pic" accept="image/*"> <label class="fieldlabels">Tu comprobante:</label> <input type="file" name="pic" accept="image/*">
                        </div> 
                         <button type="button" name="next" class="next btn btn-primario float-right mt-3">Generar</button><!-- <input type="button" name="next" class="next action-button" value="Generar" /> <input type="button" name="previous" class="previous action-button-previous" value="Anterior" /> -->
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <h2 class="text-center"><strong>Esta es la beca a la que podrás acceder</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>

                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
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
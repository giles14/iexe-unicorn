<section id="interes">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="titulo">¿Te interesa algún programa?</h1>
                </div>
            </div>
            <div class="row buffer-60">
                <div class="col-md-6">
                        <img class="img-fluid escudo" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/escudo.webp" alt="">
                </div>
                <div class="fondo-x">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/x.png" alt="">
                </div>
                <div class="col-md-5">
                    <p class="interes-programa">Estudia con nosotros sin descuidar tus actividades, acceso a nuestra plataforma 24 horas al día 7 días de la semana, oferta totalmente flexible y digital. <br> ¡20 años de experiencia forjando líderes nos respaldan!</p>
                    <form id="contacto">
                        <div class="form-group">
                          <label for="nombre">Nombre completo*</label>
                          <input type="text" placeholder="Ingresa aquí tu nombre" class="form-control" id="nombre" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo electrónico*</label>
                            <input type="email" placeholder="Ingresa aquí tu correo electrónico" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono o celular*</label>
                            <input type="tel" placeholder="Ingresa aquí tu número telefónico" class="form-control" id="telefono" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="interes">Programa académico de interés</label>
                            <select class="form-control" id="programa-interes" name="select">
                                <option value="value1" selected>Seleccionar programa</option>
                                <option value="value2">Value 2</option>
                                <option value="value3">Value 3</option>
                            </select>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primario mt-3">Enviar registro</button>
                        </div>
                      </form>

                </div>
            </div>
        </div>
    </section>
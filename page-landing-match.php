<?php /* Template Name: Landing Match*/ ?>
<?php get_template_part( 'template-parts/header-landing'); ?>
<section id="informacion-general">
<div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <p class="es-match"><span class="desc">IT'S A</span>MATCH</p>
                <h2 class="frase-heroica">¡Estás más cerca de hacer match con tu futuro!</h2>
                <p class="descripcipn-programa">
                Las personas mejor preparadas no sólo destacan en el mundo profesional, preséntale al mundo una mejor versión de ti mismo. Aprende de docentes expertos y especialistas en diversas áreas, <strong> IEXE Universidad te espera</strong>.
                </p>
                <h3 class="sub-tag mt-5">¡ACORTA TU CAMINO AL ÉXITO!</h3>
                <p class="extra-text">
                    Continúa preparándote en IEXE Universidad, una institución con presencia nacional e internacional, 100% en línea.
                </p>
                
                
            </div>
            <div class="col-md-4 offset-md-2">
            <div class="formulario">
                                  <div class="cabecera">
                                      <h1 class="interes">REGÍSTRATE y te <br> contactará un asesor</h1>
                                  </div>
                                  <div class="cuerpo">
                                      <form id="interes">
                                          <div class="form-group">
                                            <label for="nombre">Nombre completo*</label>
                                            <input type="nombre" placeholder="Ingresa aquí tu nombre" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp">
                                          </div>
                                          <div class="form-group">
                                              <label for="correo">Correo electrónico*</label>
                                              <input id="correo" name="email" type="email" class="form-control" placeholder="Ingresa aquí tu correo">
                                          </div>
                                          <div class="form-group">
                                              <label for="telefono">Teléfono o celular*</label>
                                              <input type="tel" placeholder="Ingresa aquí tu número telefónico" class="form-control" name="telefono" id="telefono" aria-describedby="emailHelp">
                                          </div>
                                          <div class="form-group">
                                              <label for="maestria-tipo">Elige tu maestría</label>
                                                <select id="maestria-tipo" name="programa">
                                                    <option value="MSPPP">Seguridad Pública y Políticas Públicas</option>
                                                    <option value="MAPP">Administración y Políticas Públicas</option>
                                                    <option value="MEPP">Evaluación de Políticas Públicas</option>
                                                    <option value="MFP">Finanzas Públicas</option>
                                                    <option value="MBA">Administración de Negocios (MBA)</option>
                                                    <option value="MCDA">Ciencia de Datos Aplicada</option>
                                                    <option value="MITI">Ingeniería en Tecnologías de la Información</option>
                                                    <option value="MADIS">Administración de Instituciones de Salud</option>
                                                    <option value="MIGE">Innovación y Gestión Educativa</option>
                                                </select>
                                          </div>
                                          <div class="form-check form-check-inline text-center">
                                                <input class="form-check-input" type="checkbox" id="aviso-privacidad" value="privacidad">
                                                <label class="form-check-label" for="aviso-privacidad">He leído el <a href="/aviso-de-privacidad/">aviso de privacidad</a></label>
                                            </div>
                                          <div class="col-12 text-center">
                                              <button onClick="miF(this)" type="submit" class="btn btn-primario mt-3">Deseo saber más</button>
                                          </div>
                                        </form>
                                  </div>
              
                              </div>
            </div>
        </div>
        <script>
            function envia(correop){
                var url = "https://api.redisoft.dev/Leads/web";

                var xhr = new XMLHttpRequest();
                xhr.open("POST", url);

                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    console.log(xhr.status);
                    console.log(xhr.responseText);
                }};

                var data = "nombre=CarlosPrueba&correo="+ correop +"%40iexe.edu.mx&telefono=%2B522226835059&programa=DADFP&referencia=https%3A%2F%2Fiexe.edu.mx%2F%23interes&charifaz=Mozilla%2F5.0%20(Windows%20NT%2010.0%3B%20Win64%3B%20x64)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F97.0.4692.99%20Safari%2F537.36&adicional=origen%3A%2Bformulario-home-conocer";

                xhr.send(data);
            }
            function enviaFormulario(formulario = this.partent){
                console.log(formulario);
                var url = "https://api.redisoft.dev/Leads/web";
                var xhttp = new XMLHttpRequest();
                xhttp.open("POST", url);
                xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhttp.onload = function(resp){

                    if(xhttp.response == 'duplicated'){
                        console.log("está duplicado");
                    };

                }
                var data = "nombre=CarlosPrueba&correo=giles.carlosasas%40iexe.edu.mx&telefono=%2B522226835059&programa=DADFP&referencia=https%3A%2F%2Fiexe.edu.mx%2F%23interes&charifaz=Mozilla%2F5.0%20(Windows%20NT%2010.0%3B%20Win64%3B%20x64)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F97.0.4692.99%20Safari%2F537.36&adicional=origen%3A%2Bformulario-home-conocer";
                
                xhttp.send(data);
                return console.log("esperando mensaje")
            }

            function enviarFormulario(parent, silent = false, strict = false){
                var elementos = parent.closest('form').getElementsByTagName("input");
                var programa = parent.closest('form').elements;
                var nombre = elementos.namedItem('nombre').value;
                var mail = elementos.namedItem('email').value;
                var telefono = elementos.namedItem('telefono').value;
                var programa = programa.namedItem('programa').value;

                console.log(programa);
                console.log(nombre);
                console.log(mail);
                console.log(telefono);
            }
            

        </script>
        <div class="row mt-5">
            <div class="col-lg-2 col-sm-3">
                <div class="bloque-puntos-clave">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icono_horario_IEXE.webp" alt="" class="icono">
                    <h3 class="keypoint">Duración del programa</h3>
                    <span class="informacion-secundaria">15 meses</span>
                </div>
            </div>
            <div class="col-lg-2 col-sm-3">
                <div class="bloque-puntos-clave">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icono_certificado_IEXE.webp" alt="" class="icono">
                    <h3 class="keypoint">Validez Oficial</h3>
                    <span class="informacion-secundaria">SEP - RVOE</span>
                </div>
            </div>
            <div class="col-lg-2 col-sm-3">
                <div class="bloque-puntos-clave">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icono_Fecha_IEXE.webp" alt="" class="icono">
                    <h3 class="keypoint">Maestrías 100%</h3>
                    <span class="informacion-secundaria">En línea</span>
                </div>
            </div>
            <div class="col-lg-2 col-sm-3">
                <div class="bloque-puntos-clave">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icono_Pragma_IEXE.webp" alt="" class="icono">
                    <h3 class="keypoint">Modelo Educativo</h3>
                    <span class="informacion-secundaria">Pragmaflex: </span><span class="en-pragmaflex">Cursa una materia la vez</span>
                </div>
            </div>
        </div>

    </div>

</section>
<section id="el-por-que">
    <div class="container">
    <div class="row">
            <div class="col-md-12">
                <h1 class="text-center el-porque"><span class="pregunta-sin-enfasis">¿Por qué elegir</span> IEXE Universidad?</h1>
            </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3 col-sm-12 del-por-que">
            <img style="margin-bottom: 16px;" class="text-center img-fluid iconos" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/plataforma_IEXE.webp" alt="">
            <p>Plataforma disponible las <strong>24 horas del día, los 7 días</strong> de la semana.</p>
        </div>
        <div class="col-md-3 col-sm-12 del-por-que">
            <img class="text-center img-fluid iconos" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/docentes_IEXE.webp" alt="">
            <p>Aprende de docentes con <strong>experiencia profesional y laboral relevante</strong> en su área de conocimiento.</p>
        </div>
        <div class="col-md-3 col-sm-12 del-por-que">
            <img class="text-center img-fluid iconos" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/atencion_IEXE.webp" alt="">
            <p>Recibe <strong>atención personalizada</strong> de docentes, atención a alumnos, servicios escolares y soporte técnico.</p>
        </div>
    </div>
    </div>  
</section>
<section id="por-que-elegir">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="podras mb-4">Maestría en línea:</h2>
                
            </div>
            <div class="col-md-6">
                <ul class="podras-trabajar-en">
                    <li>Seguridad Pública y Políticas Públicas</li>
                    <li>Administración y Políticas Públicas</li>
                    <li>Evaluación de Políticas Públicas</li>
                    <li>Finanzas Públicas</li>
                    <li>Administración de Negocios (MBA)</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="podras-trabajar-en">
                    <li>Ingeniería en Tecnologías de la Información</li>
                    <li>Innovación y Gestión Educativa</li>
                    <li>Administración de Instituciones de Salud</li>
                    <li>Ciencia de Datos Aplicada</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center relacionados">Programas relacionados</h1>
            </div>
            <div class="row">
                <div class="col-md-3 offset-md-1 col-12 text-center text-sm-left">
                    <h2 class="sigla-programa">MSP</h2>
                    <h3 class="nombre">Maestría en <br> Seguridad Pública</h3>
                    <a href="/oferta-educativa" class="tipo-boton">¡Descubrelo!</a>
                </div>
                <div class="col-md-2">
                    <img src="https://iexe.edu.mx/wp-content/uploads/2022/01/escudo-landing-ssp-2-1.webp" alt="" class="img-fluid d-none d-sm-block">
                </div>
                <div class="col-md-3 offset-md-1 col-12 text-center text-sm-left mt-3">
                    <h2 class="sigla-programa">MAPP</h2>
                    <h3 class="nombre">Maestría en Administración y Políticas Públicas</h3>
                    <a href="/oferta-educativa" class="tipo-boton">¡Descubrelo!</a>
                </div>
                <div class="col-md-2">
                    <img src="https://iexe.edu.mx/wp-content/uploads/2022/01/Escudo_MAPP_IEXE.webp" alt="" class="img-fluid d-none d-sm-block">
                </div>
                
            </div>
        </div>
    </div>
</section>

    

<?php get_template_part( 'template-parts/footer-landing'); ?>
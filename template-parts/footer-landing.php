<?php 
    $elOrigen = 'no-conocido';
    if(is_page_template('academicos.php')){
        $elOrigen = 'formulario-interesado-carrera';
    }elseif(is_home()) {
        $elOrigen = 'formulario-home-conocer';
    }elseif(is_page_template('comunidad.php')){
        $elOrigen = 'formulario-comunidad';
    }
?>
<section id="pie">
        <div class="overlay-img">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#"><img class="logo-abajo mx-auto img-fluid 	d-block d-sm-none" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logo.svg"  alt=""></a>
                    <a href="#"><img style="width:60%" class="logo-abajo mx-auto  d-none d-lg-block" id="logo-pie" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logo_vertical.svg" alt=""></a>
                    <!-- <span class="redes-sociales">SÍGUENOS EN</span> -->
                    
                </div>
                <style>
                  .logo-abajo {
                      margin-top: 36px;
                      margin-bottom: 30px;
                  }
                </style>
                <div class="col-md-3 order-4 offset-md-6">
                    <p class="telefono-mexico buffer d-none"><img class="whatsapp-logo" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/wa.svg" alt=""><a target="_blank" class="telefono-whatsapp" href="<?php the_field('link_whatsapp'); ?>">55-6814-0690</a></p>
                    <p class="telefono-puebla d-none"><img class="telefono-logo" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/telefono.svg" alt=""><a class="telefono-mexico" href="tel:800-286-84-64">800-286-84-64</a></p>
                    <!-- <a href="mailto:informes@iexe.edu.mx" class="e-mail">informes@iexe.edu.mx</a> -->
                    <!-- <div class="iconos-redes-sociales">
                        <a target="_blank" href="https://www.facebook.com/IEXE.Universidad/"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/facebook.svg" alt="" class="redes"></a><a target="_blank" href="https://twitter.com/IEXE_Uni"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/twitter.svg" alt="" class="redes"></a><a target="_blank" href="https://www.youtube.com/c/IexeEduMx"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/youtube.svg" alt="" class="redes"></a><a target="_blank" href="https://www.linkedin.com/school/iexeuniversidad/"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/linkedin.svg" alt="" class="redes"></a><a target="_blank" href="https://www.instagram.com/iexe_universidad"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/instagram.svg" alt="" class="redes"></a><a target="_blank" href="https://open.spotify.com/show/0UL42ohKAgBn2Sdse3VV5J"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/spotify.svg" alt="" class="redes"></a><a target="_blank" href="https://vm.tiktok.com/ZMRoQFFQC/"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/icons/tiktok.svg" alt="" class="redes"></a>
                    </div> -->
                    <p class="direccion" style="margin-top: 150px">Blvd. Esteban de Antuñano 2702,<br>C.P. 72160 Cd. de Puebla, México</p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="sub-pie">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="informacion-importante">
                        <div class="bloque">
                        
                            <p>Todos los derechos reservados IEXE 2021.
                            <?php
                            echo strip_tags(
                                wp_nav_menu( array(
                                    'container' => false,
                                    'echo' => false,
                                    'theme_location' => 'pie_principal',
                                    'menu_class' => 'menu-footer',
                                    'depth' => 0,
                                    'items_wrap' => '%3$s',
                                ) ), '<a>');
                            ?>
                            </p>
                        <!-- <p>Todos los derechos reservados IEXE 2021. </p> <a href="#"> Aviso de Privacidad</a> | <a href="#">Términos y condiciones</a> | <a href="#">Mapa del sitio</a> | <a href="#">Contacto</a> | -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </section>
    <a class="d-none" href="<?php the_field('link_whatsapp'); ?>" target="_blank">
      <div class="boton-flotante d-none">
        <div class="wa-el-boton d-none">
        </div>
      </a>
    </div>
    <?php  if(is_page_template('academicos.php')){ ?>
                            <a href="https://bit.ly/iexebf2021" target="_blank">
						<div style="color: #FFF;" class="inscribete-ya">
                            <h3 style="color: #FFF;">¡Una beca que se ajusta a tus necesidades!</h3>
                            <!-- <p class="postulate">Del 18 al 30 de junio, postulate ahora</p> -->
                                <a class="btn btn-primario" href="https://bit.ly/iexebf2021" target="_blank">¡Solicítala ahora!</a>
                            <p class="condiciones">*Válido únicamente para inscritos de nuevo ingreso en licenciaturas, maestrías, másteres o doctorado. Se aplican restricciones, contáctanos para más información.</p>
                        </div>
                        </a>

                        <?php
                        }
    ?>
                    <script>
                        jQuery(document).ready(function(){
                            jQuery(window).scroll(function(){
                                if(jQuery(document).scrollTop() > 300){
                                     jQuery(".inscribete-ya").fadeIn("fast");
                                }
                                });
                                jQuery(window).scroll(function(){
                                if(jQuery(window).scrollTop() < 300){
                                    jQuery(".inscribete-ya").fadeOut("fast");
                                }
                            });
                        });
                    
                    </script>


    <div id="overlay-menu"></div>
<script>
    var $ = jQuery;
    $(document).ready(function(){
        $(".oferta-bloque").click(function(){
            if($(this).hasClass('activo')){
                if($('.links-programas ul li > a').parent().click()){
                    $(this).removeClass('activo');
                }

            }else 
            if ( $(this).hasClass('activo') ){
                $(this).removeClass('activo')
            } else {
                $('.oferta-bloque').removeClass("activo");
                $(this).addClass( "activo" );
            }

        });
    });
    
</script>

<?php wp_footer(  )?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/localization/messages_es.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    var input = document.querySelector("#telefono");
    var iti = window.intlTelInput(input, {
      localizedCountries: { 'us': 'Estados Unidos' },
      preferredCountries: ['mx','co', 'cr', 'py', 'pe' , 'ec', 'us' ],
      separateDialCode: true,
      utilsScript: "<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/utils.js",
    });
    
</script>
  <script>
      $(document).ready(function(){

$('#interes button.btn.btn-primario').click(function(){    
    $('#interes button.btn.btn-primario').removeClass("error exito"); 
    $('#interes button.btn.btn-primario').attr("disabled", true);
    var nombre = $("[name='nombre']").val();
    var correo = $("[name='email']").val();
    var origen = '<?php echo $elOrigen; ?>';
    
    if($('input#hiddenPrograma').val()){
        var programa = $('input#hiddenPrograma').val();
        console.log(programa);
    }else{
        var programa = $("[name='programa']").val();
        console.log(programa);
    }
    var telefono = iti.getNumber(crossOriginIsolated);
    var data;           
    $.ajax({
    url: 'https://api.redisoft.dev/Leads/web',
    type: 'post',
    data: "nombre=" + nombre + "&correo=" + correo + "&telefono=" + telefono + "&programa=" + programa + "&referencia=" + $(location).attr('href') + "#interes" + "&charifaz=" + navigator.userAgent + "&adicional=origen:%20" + origen,
    success: function(data){
        console.log(data);
        if(data == true || data == "saved"){
            console.log("se salvó :)");
            $("#problemaModal").modal('show');
            $('#interes button.btn.btn-primario').addClass("error");

        }else if(data == "duplicated"){
            console.log("Ya hay un registro con este correo electrónico");
            $("#duplicadoModal").modal('show');
        } else{
            $("#guardadoModal").modal('show');
            $('#interes button.btn.btn-primario').removeClass("error");
            $('#interes button.btn.btn-primario').addClass("exito");
        }
        $('#interes button.btn.btn-primario').attr("disabled", false);
        
    },
    error: function(data){
        console.log("No se logró contactar al servidor");
        console.log(data);
        $('#interes button.btn.btn-primario').attr("disabled", false);
        $('#interes button.btn.btn-primario').addClass("error");
        // $("#modalFracaso").modal('show');
        // $("#error-alerta").html("El servidor remoto no se pudo contactar, por favor intente más tarde");
    }
});
});
});
  </script>
  <div class="modal fade" id="guardadoModal" tabindex="-1" aria-labelledby="guardadoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title titulo" id="guardadoModalLabel">Se han registrado sus datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p class="description">Nuestro equipo se pondrá en contácto con usted</p>
          <i class="far fa-check-circle"></i>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primario" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="problemaModal" tabindex="-1" aria-labelledby="problemaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title titulo" id="problemaModalLabel">Ha ocurrido un error</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p class="description">Por favor verifique que todos los campos fueron llenados y que la información proporcionada es correcta e intente de nuevo.</p>
          <!-- <span><i class="uil uil-exclamation-octagon"></i></span> -->
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="duplicadoModal" tabindex="-1" aria-labelledby="duplicadoModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title titulo" id="duplicadoModalLabel">Ha ocurrido un error</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p class="description">Sus datos ya se encuentran almacenados en el sistema si lo desea, puede contactarnos directamente a nuestro whastapp:<a href="https://bit.ly/3p4NXV9"><img style="width: 25px; margin-top:5px;" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/whatsapp.png" alt=""></a> <a target="_blank" href="https://bit.ly/3p4NXV9" style="color: #FFF; color: cyan; margin-top: 5px; display: block;">+52 222-460-35-89</a></p>
          <!-- <span><i class="uil uil-exclamation-octagon"></i></span> -->
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="servidorModal" tabindex="-1" aria-labelledby="servidorModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title titulo" id="servidorModalLabel">Ha ocurrido un error</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p class="description">El servidor remoto no ha podido contactarse, le rogamos vuelva a intentarlo y si el problema persiste por favor contactenos.</p>
          <!-- <span><i class="uil uil-exclamation-octagon"></i></span> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
</body>
</html>
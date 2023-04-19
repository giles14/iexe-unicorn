<?php /* Template Name: Landing convenios */ ?>
<?php get_header( ); ?>
<section id="slider-principal">
  <div class="container-fluid">
    <div class="row">
      <img class="w-100 d-none d-none d-md-block" src="<?php  echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/Slider-IEXE_convenios.png" alt="Convenios">
      <img class="w-100 d-none d-block d-md-none" src="<?php  echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/convenios-movil.png" alt="Convenios">
    </div>
  </div>
</section>
<section id="beneficios">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="titulo-principal">Estos son los beneficios nuestros convenios...</h1>
          </div>
        </div>
        <div class="row bloques-convenios d-block d-md-none">
          <div class="col-lg-3 col-md-6">
              <div class="beneficio primero mx-auto mb-3">
                <p>Nuestros descuentos no están sujetos a un promedio académico</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="beneficio segundo mx-auto mb-3">
                <p>Tu familia puede acceder a los mismos beneficios</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="beneficio tercero mx-auto mb-3">
                <p>Todos nuestros programas mantienen un costo fijo</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="beneficio cuarto mx-auto mb-3">
                <p>Costos preferenciales al adquirir algún ejemplar editorial</p>
              </div>
            </div>
        </div>
        <div class="row d-none d-md-flex">
          <div class="col-lg-3 col-md-6">
              <div class="beneficio primero mx-auto mb-3">
                <p>Nuestros descuentos no están sujetos a un promedio académico</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="beneficio segundo mx-auto mb-3">
                <p>Tu familia puede acceder a los mismos beneficios</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="beneficio tercero mx-auto mb-3">
                <p>Todos nuestros programas mantienen un costo fijo</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="beneficio cuarto mx-auto mb-3">
                <p>Costos preferenciales al adquirir algún ejemplar editorial</p>
              </div>
            </div>
        </div>
    </div>
</section>
<style>
  #beneficios .beneficio.primero {
    background: url('<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/bl-1.webp') #043A7D;
    background-repeat: no-repeat;
}
#beneficios .beneficio.segundo {
    background: url('<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/bl-2.webp') #043A7D;
    background-repeat: no-repeat;
}
#beneficios .beneficio.tercero {
    background: url('<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/bl-3.webp') #043A7D;
    background-repeat: no-repeat;
}
#beneficios .beneficio.cuarto {
    background: url('<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/bl-4.webp') #043A7D;
    background-repeat: no-repeat;
}
  #beneficios .beneficio {
    background: var(--primario--azul-obscuro);
    min-height: 389px;
    border-radius: 15px;
    padding: 0px 20px;
}
#beneficios p {
    padding-top: 250px;
    color: #f6f6f6;
    font-size: 24px;
    font-weight: 200;
    text-align: center;
}
  section#slider-principal {
    margin-top: unset;
}
input#myFilter2 {
    border-radius: 23px;
    height: 45px;
    border: 1px solid #707070;
}
input#myFilter2::placeholder {
    color: #000!important;
    padding-left: 0px;
}
input#myFilter2::placeholder {
    color: var(--azul--obscuro);
    padding-left: 0px;
    font-family: var(--familia-general);
}
section#no-cuenta {
    background: linear-gradient(90deg, rgba(0,35,255,1) 0%, rgba(0,30,66,1) 49%);
}
#no-cuenta h1 {
    color: #FFF;
    font-family: var(--familia-titulos);
    font-size: 30px;
}
section#no-cuenta {
    background: linear-gradient(90deg, rgba(0,35,255,1) 0%, rgba(0,31,106,1) 67%, rgba(0,30,66,1) 89%);
}
input#myFilter2 {
    background: url(<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/searchIcon.png);
    background-repeat: no-repeat;
    background-position-x: 10px;
    background-position-y: 8px;
    padding-left: 14px;
}
#no-cuenta h1 {
    font-family: var(--familia-titulos);
    font-size: 30px;
    color: #FFF;
}
#no-cuenta label {
    color: #FFF;
    font-size: 14px;
    letter-spacing: 0.25px;
}
#no-cuenta input::placeholder {
    color: var(--primario-azul);
    font-size: 14px;
}
.empresa-mensaje {
    background: #DCE8F8;
    border-radius: 15px;
    padding: 29px 54px;
    height: calc(100% + 18px);
}
textarea#mensaje-emprresa {
    width: 100%;
    border: 1px solid #9BA4F9;
}
#empresas .contactanos {
    padding: 29px 54px;
    background: var(--primario--azul-obscuro);
    color: #F6f6f6;
    font-family: var(--familia-general);
    font-weight: 300;
    border-radius:15px;
    min-height: 485px
}
.un-convenio {
    box-shadow: -12px 12px 21px #001c3a1f;
    border-radius: 15px;
}
.sprite {
    background-image: url(<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/landing-icons.png);
    background-repeat: no-repeat;
    display: block;
}

.sprite-lugar_iexe {
    width: 17px;
    height: 19px;
    background-position: -5px -5px;
    margin-bottom: 8px;
}

.sprite-mail_iexe {
    width: 24px;
    height: 24px;
    background-position: -32px -5px;
}

.sprite-tel_iexe {
    width: 16px;
    height: 29px;
    background-position: -66px -5px;
}
.elementos-landing li {
    margin-bottom: 20px;
}
ul.elementos-landing li {
    list-style: none;
}
.de-las{
  margin-bottom: 30px;
  margin-top: 10px;
}
.img-de-las{
    float: left;
    margin-left: 17%;
    margin-right:1%;
}
input#myFilter2 {
    padding-left: 50px;
}
button.btn-loadmore.d-block.mx-auto.btn.btn-danger {
    background: #00FFE8;
    font-weight: 800!important;
    font-size: 18px;
    line-height: 20px;
    cursor: pointer;
    border-radius: 20px;
    color: #0018FF!important;
    padding: 8px 25px;
    border: none;
}
.titulo-principal{
  font-family: var(--familia-titulos);
}

@media only screen and (max-width: 999px) {
  #beneficios .beneficio {
   max-width: 275px;
}
}
@media only screen and (max-width: 600px){
.bandera {
    height: unset;
}
.de-las {
    margin-bottom: 30px;
    margin-top: 10px;
    font-size: 28px;
    font-weight: 700;
}
ul.elementos-landing li {
    font-size: 12px;
}
}

</style>
<section id="logos-convenio">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
         <h1 class="mb-5 titulo-principal" style="font-weight: 800;">NUESTROS CONVENIOS</h1>
        </div>
      <div class="col-md-8 col-10 mb-5 mx-auto">
        <input type="text" id="myFilter2" class="form-control" onkeyup="myFunctionA();" placeholder="Aquí puedes buscar tu convenio">
      </div>
    </div>
    <div class="row contents" id="myItems2">
              <div class="col-lg-3 col-4 el-convenio mb-3" data-convenio="Voluntariado de la S.D.N SEDENA"><div class="un-convenio" ><a href="#" onclick="updateConvenio(this)"  data-toggle="modal" data-target="#modal-beca-convenios" data-idconv="77"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-convenios/voluntariadoSdn.png" alt="" class="container-fluid" ></a></div> </div>
              <div class="col-lg-3 col-4 el-convenio mb-3" data-convenio="Policía Federal protección"><div class="un-convenio" ><a href="#" onclick="updateConvenio(this)"  data-toggle="modal" data-target="#modal-beca-convenios" data-idconv="73"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-convenios/PF.png" alt="" class="container-fluid" ></a></div> </div>
              <div class="col-lg-3 col-4 el-convenio mb-3" data-convenio="Secretariado Ejecutivo del sistema nacional de seguridad pública"><div class="un-convenio" ><a href="#" onclick="updateConvenio(this)"  data-toggle="modal" data-target="#modal-beca-convenios" data-idconv="50"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-convenios/secretariadoEjecutivo.png" alt="" class="container-fluid" ></a></div> </div>
              <div class="col-lg-3 col-4 el-convenio mb-3" data-convenio="baja california bcs"><div class="un-convenio" ><a href="#" onclick="updateConvenio(this)"  data-toggle="modal" data-target="#modal-beca-convenios" data-idconv="103"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-convenios/bcs-nos-une.png" alt="" class="container-fluid" > </a></div> </div>
              <div class="col-lg-3 col-4 el-convenio mb-3" data-convenio="Fondo de la Vivienda del Instituto de Seguridad y Servicios Sociales de los Trabajadores del Estado (FOVISSSTE)"><div class="un-convenio" ><a href="#" onclick="updateConvenio(this)"  data-toggle="modal" data-target="#modal-beca-convenios" data-idconv="83"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-convenios/fovissste.png" alt="" class="container-fluid" ></a></div> </div>        
              <div class="col-lg-3 col-4 el-convenio mb-3" data-convenio="Secretaría de Seguridad Ciudadana de Tlaxcala"><div class="un-convenio"><a href="#" onclick="updateConvenio(this)" data-toggle="modal" data-target="#modal-beca-convenios" data-idconv="99"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-convenios/CES.png" alt="" class="container-fluid"></a></div></div>
              <div class="col-lg-3 col-4 el-convenio mb-3" data-convenio="Alcaldía Miguel Hidalgo"><div class="un-convenio" ><a href="#" onclick="updateConvenio(this)"  data-toggle="modal" data-target="#modal-beca-convenios" data-idconv="82"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-convenios/miguelHidalgo.png" alt="" class="container-fluid" ></a></div></div>
              <div class="col-lg-3 col-4 el-convenio mb-3" data-convenio="Gobierno de Chihuahua"><div class="un-convenio" ><a href="#" onclick="updateConvenio(this)"  data-toggle="modal" data-target="#modal-beca-convenios" data-idconv="39"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-convenios/gobChihuahua.png" alt="" class="container-fluid" ></a></div> </div>
              <div class="col-lg-3 col-4 el-convenio mb-3" data-convenio="Gobierno municipal de Puebla "><div class="un-convenio" ><a href="#" onclick="updateConvenio(this)"  data-toggle="modal" data-target="#modal-beca-convenios" data-idconv="79"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-convenios/Puebla.png" alt="" class="container-fluid" ></a></div> </div>
              <div class="col-lg-3 col-4 el-convenio mb-3" data-convenio="indep"><div class="un-convenio" ><a href="#" onclick="updateConvenio(this)"  data-toggle="modal" data-target="#modal-beca-convenios" data-idconv="118"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-convenios/indep.png" alt="" class="container-fluid" ></a></div> </div>
              <div class="col-lg-3 col-4 el-convenio mb-3" data-convenio="H. Ayuntamiento de Pachuca, Hidalgo"><div class="un-convenio" ><a href="#" onclick="updateConvenio(this)"  data-toggle="modal" data-target="#modal-beca-convenios" data-idconv="121"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-convenios/pachuca.png" alt="" class="container-fluid" ></a></div> </div>        
              <div class="col-lg-3 col-4 el-convenio mb-3" data-convenio="Gobierno del Estado de Hidalgo"><div class="un-convenio" ><a href="#" onclick="updateConvenio(this)"  data-toggle="modal" data-target="#modal-beca-convenios" data-idconv="97"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-convenios/gHidalgo.png" alt="" class="container-fluid" ></a></div> </div>
              <div class="col-lg-3 col-4 el-convenio mb-3" data-convenio="Gobierno de Quintana Roo Chetumal"><div class="un-convenio" ><a href="#" onclick="updateConvenio(this)"  data-toggle="modal" data-target="#modal-beca-convenios" data-idconv="116"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-convenios/chetumal.png" alt="" class="container-fluid" ></a></div> </div>
              <div class="col-lg-3 col-4 el-convenio mb-3" data-convenio="Banobras Banco nacional de obras y servicios públicos banobras"><div class="un-convenio" ><a href="#" onclick="updateConvenio(this)"  data-toggle="modal" data-target="#modal-beca-convenios" data-idconv="13"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-convenios/banobras.png" alt="" class="container-fluid" ></a></div> </div>
              <div class="col-lg-3 col-4 el-convenio mb-3" data-convenio="Infonavit"><div class="un-convenio" ><a href="#" onclick="updateConvenio(this)"  data-toggle="modal" data-target="#modal-beca-convenios" data-idconv="110"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-convenios/infonavit.png" alt="" class="container-fluid" ></a></div> </div>
              <div class="col-lg-3 col-4 el-convenio mb-3" data-convenio="Instituto Nacional Electoral (INE)"><div class="un-convenio" ><a href="#" onclick="updateConvenio(this)"  data-toggle="modal" data-target="#modal-beca-convenios" data-idconv="95"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-convenios/ine.png" alt="" class="container-fluid" ></a></div> </div>        
              <div class="col-lg-3 col-4 el-convenio mb-3" data-convenio="Comisión estatal de aguas Querétaro"><div class="un-convenio" ><a href="#" onclick="updateConvenio(this)"  data-toggle="modal" data-target="#modal-beca-convenios" data-idconv="26"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-convenios/CEA.png" alt="" class="container-fluid" ></a></div> </div>
              <div class="col-lg-3 col-4 el-convenio mb-3" data-convenio="Gobierno del Estado de Puebla"><div class="un-convenio" ><a href="#" onclick="updateConvenio(this)"  data-toggle="modal" data-target="#modal-beca-convenios" data-idconv="115"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-convenios/gobierno-puebla.png" alt="" class="container-fluid" ></a></div> </div>        
              <div class="col-lg-3 col-4 el-convenio mb-3" data-convenio="Conalep Puebla"><div class="un-convenio"><a href="#" onclick="updateConvenio(this)" data-toggle="modal" data-target="#modal-beca-convenios" data-idconv="90"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-convenios/conalePuebla.png" alt="" class="container-fluid"></a></div></div>
              <div class="col-lg-3 col-4 el-convenio mb-3" data-convenio="Secretaría de relaciones exteriores SRE"><div class="un-convenio"><a href="#" onclick="updateConvenio(this)"  data-toggle="modal" data-target="#modal-beca-convenios" data-idconv="96"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-convenios/sre.png" alt="" class="container-fluid"></a></div></div>
              <div class="col-lg-3 col-4 el-convenio mb-3" data-convenio="Fideicomiso fondo nacional de habitaciones populares fonhapo"><div class="un-convenio" ><a href="#" onclick="updateConvenio(this)"  data-toggle="modal" data-target="#modal-beca-convenios" data-idconv="4"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-convenios/fonhapo.png" alt="" class="container-fluid" ></a></div> </div>
              <div class="col-lg-3 col-4 el-convenio mb-3" data-convenio="Gobierno de Cuautitlán Izcalli"><div class="un-convenio" ><a href="#" onclick="updateConvenio(this)"  data-toggle="modal" data-target="#modal-beca-convenios" data-idconv="120"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-convenios/cuautitlanI.png" alt="" class="container-fluid" ></a></div> </div>
              <div class="col-lg-3 col-4 el-convenio mb-3" data-convenio="Gobierno municipal de Puebla "><div class="un-convenio" ><a href="#" onclick="updateConvenio(this)"  data-toggle="modal" data-target="#modal-beca-convenios" data-idconv="79"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-convenios/Puebla.png" alt="" class="container-fluid" ></a></div> </div>
              <div class="col-lg-3 col-4 el-convenio mb-3" data-convenio="Secretaría de administración de Puebla"><div class="un-convenio" ><a href="#" onclick="updateConvenio(this)"  data-toggle="modal" data-target="#modal-beca-convenios" data-idconv="107"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-convenios/secreteriaAdministracionPuebla.png" alt="" class="container-fluid" ></a></div> </div>
              
              
              <!-- <div class="col-lg-3 col-4 el-convenio mb-3" data-convenio="IISFAM Instituto de Seguridad Social para las Fuerzas Armadas Mexicanas"><div class="un-convenio" ><a href="#"  data-toggle="modal" data-target="#modal-beca-convenios" data-idconv="96"><img src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/logos-convenios/issfam.png" alt="" class="container-fluid" ></a></div> </div> -->
              
              
              
              
              
              
              
              
              
      </div>  
    </div>
  </div>
</section>
<script>
    function myFunction() {
    var input, filter, cards, cardContainer, h5, title, i;
    input = document.getElementById("myFilter");
    filter = input.value.toUpperCase();
    cardContainer = document.getElementById("myItems");
    cards = cardContainer.getElementsByClassName("card");
    for (i = 0; i < cards.length; i++) {
        title = cards[i].querySelector(".card-body h5.card-title a");
        if (title.innerText.toUpperCase().indexOf(filter) > -1) {
            cards[i].style.display = "";
        } else {
            cards[i].style.display = "none";
        }
    }
}

function myFunctionA() {
    var input, filter, cards, cardContainer, h5, title, i;
    input = document.getElementById("myFilter2");
    filter = input.value.toUpperCase();
    cardContainer = document.getElementById("myItems2");
    cards = cardContainer.getElementsByClassName("el-convenio");
    for (i = 0; i < cards.length; i++) {
        title = cards[i].dataset.convenio;
        if (title.toUpperCase().indexOf(filter) > -1) {
            cards[i].style.display = "";
        } else {
            cards[i].style.display = "none";
        }
    }
}
function updateConvenio(parent){
    document.getElementById("idConvenios").value=parent.dataset.idconv;
    //console.log(parent.dataset.idconv)
}
</script>
<section id="no-cuenta">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="mt-4 pt-3">¿Tu empresa no cuenta con algún convenio, no te preocupes solicítalo?</h1>
      </div>
      <form action="" method="POST" data-origen="landing-convenios" style="display: contents;">
          <div class="col-lg-4">
            <div class="form-group">
              <label for="nombre">Nombre completo*</label>
              <input type="text" class="form-control mb-5" id="nombre" name="nombre" placeholder="Ingresa aquí tu nombre">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label for="correo">Correo electrónico*</label>
              <input type="text" class="form-control mb-5" id="correo" name="email" placeholder="Ingresa aquí tu correo electrónico">
              <input type="hidden" type="hidden" name="telefono" value="NA"/>
              <input type="hidden" name="programa" value="SINA"/>
              <input type="hidden" name="mensaje" value="Deseo tener más información sobre los convenios IEXE"/>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label for="correo"><br></label>
              <button type="submit" onClick="enviarFormulario(this)" class="enviar-landing btn sin-form btn-primario ld-ext-right d-block mx-auto">Solicitar información<div class="ld ld-ring ld-spin"></div></button>
            </div>
          </div>
      </form>
    </div>
  </div>
</section>
<section id="empresas" class="mb-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-3">
        <div class="empresa-mensaje">
          <img class="img-fluid img-de-las mb-3 d-none d-md-block" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/empresasIco.png" alt="">
          <h1 class="de-las">Dependencias</h1>
          <p>Si tu empresa o dependencia no cuenta con un convenio con nosotros y estás interesado en tenerlo, puedes enviarnos un mensaje y te responderemos lo más pronto posible.</p>
          <form action="" method="POST" data-origen="landing-convenios"  style="display: contents;">
          <div class="form-group">
              <select name="mensaje" id="" class="form-control">
                  <option value="Deseo que mi empresa se beneficie con un convenio">Deseo que mi empresa se beneficie con un convenio.</option>
                  <option value="Deseo usar el beneficio que ofrece mi empresa">Deseo usar el beneficio que ofrece mi empresa.</option>
                  <option value="Deseo tener más información sobre los beneficios">Deseo tener más información sobre los beneficios.</option>
              </select>
          </div>
          <div class="form-group">
            <label for="correo">Correo electrónico*</label>
            <input type="text" class="form-control mb-5" id="correo" name="email" placeholder="Ingresa aquí tu correo electrónico">
            <input type="hidden" type="hidden" name="telefono" value="NA"/>
              <input type="hidden" name="programa" value="SINA"/>
              <input type="hidden" name="nombre" value="N/A"/>
          </div>
          <!-- <textarea placeholder="Escribe aquí tu mensaje..." name="mensaje" id="mensaje-emprresa" cols="30" rows="3"></textarea> -->
          <button type="submit" onClick="enviarFormulario(this)" class="enviar-landing btn sin-form btn-primario mt-3 ld-ext-right d-block mx-auto">Enviar mensaje<div class="ld ld-ring ld-spin"></div></button>
        </form>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="contactanos">
          <img class="img-fluid img-de-las mb-3 d-none d-md-block" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/contactanosIco.png" alt="">
          <h1 class="de-las" style="padding-bottom: 36px;">Contáctanos</h1>
          <p>Para más información como requisitos y costos contacta con Greta Beutelspacher de la Garza, nuestra Coordinadora de Convenios en IEXE Universidad.</p>
          <ul class="elementos-landing">
            <li><i class="sprite sprite-mail_iexe"></i>convenios@iexe.edu.mx</li>
            <li><i class="sprite sprite-tel_iexe"></i>(246) 107 4127</li>
            <li><i class="sprite sprite-lugar_iexe"></i>Blvd. Esteban de Antuñano #2707, <br> ciudad de Puebla, México</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="presencia-internacional">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="titulo bandera">En IEXE universidad, somos una comunidad internacional,<br> por ello tenemos presencia en:</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img class="img-fluid bandera" src="https://iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/img/banderas-internacional.webp" alt="Nuestra presencia en el mundo">
            </div>
        </div>
    </div>
</section>
<!-- Modal BECA Convenios -->
<div class="modal fade" id="modal-beca-convenios" tabindex="-1" aria-labelledby="modal-beca-convenios" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title titulo" id="modal-beca-embajadoresLabel">Formulario Beca Convenios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <p class="description">Rellena el siguiente formulario y recibirás un mail de confirmación. Toda solicitud de beca debe ser avalada y aprobada por la institución correspondiente.</p>
                </div>
            </div>
        <form id="forma-convenio" method="POST" data-origen="formulario convenios" action="">
            <div class="form-row">
                <div class="form-group col-md-5">
                <input placeholder="Tu Nombre completo*" type="text" class="form-control" name="nombre" id="nombre" required>
                </div>
                <div class="form-group col-md-3">
                    <input type="email" class="form-control" placeholder="Tu Correo electrónico*" name="email" id="correo" required>
                </div>
                <div class="form-group col-md-4">
                    <input placeholder="Teléfono móvil*" id="telefono-convenios" type="tel" class="form-control" name="telefono" required>
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-5" id="lista-convenios">
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
                <div class="form-group col-md-7">
                        <select class="form-control" name="programa" required>
                            <option name="programa" value="">- Programa académico de interés -</option>
                            <optgroup label="Licenciaturas">              
                                <option value="LCP">Ciencias Políticas y Administración Pública</option>
                                <option value="LSP">Seguridad Pública</option>
                                <option value="LAE">Administración de Empresas</option>
                                <option value="LD">Derecho</option>
                            </optgroup>          
                            <optgroup label="Maestrías">  
                                <option value="MFP">Finanzas Públicas</option>
                                <option value="MAPP">Administración y Políticas Públicas</option>
                                <option value="MEPP">Evaluación de Políticas Públicas</option>
                                <option value="MSPP">Seguridad Pública y Políticas Públicas</option>
                                <option value="MBAT">Administración de Negocios</option>
                                <option value="MITIC">Tecnologías de la Información</option>
                                <option value="MAIS">Administración de Instituciones de Salud</option>
                                <option value="MCDA">Ciencia de Datos Aplicada</option>
                                <option value="MIGE">Innovación y Gestión Educativa</option>
                            </optgroup>
                            <optgroup label="Diplomados">
                                <option value="DADFP">Alta Dirección en la Función Pública</option>
                                <option value="DADPP">Análisis y Diseño de Políticas Públicas</option>																
                                <option value="MEPP">Evaluación de Políticas Públicas</option>
                                <option value="DDFF">Disciplina Financiera y Fiscalización</option>
                                <option value="DPRSED">Presupuesto basado en Resultados y Sistema de Evaluación del Desempeño</option>
                                <option value="DHG">Diplomado en habilidades Gerenciales y Liderazgo</option>
                            </optgroup>
                            <optgroup label="Doctorado">
                                <option value="DOC">Doctorado en Políticas Públicas</option>
                                <option value="DSP">Doctorado en Seguridad Públicas</option>
                            </optgroup>
                            <optgroup label="Master">
                                <option value="MMPOP">Marketing Político y Opinión Pública</option>
                                <option value="MAG">Auditoría Gubernamental</option>
                                <option value="MSPAJ">Sistema Penal Acusatorio y Juicio Oral </option>
                                <option value="MGPM">Gestión Pública Municipal</option>
                            </optgroup>
                        </select>
                </div>
                <style>
                    label.form-check-label{
                        color: #FFF;
                    }
                </style>
            </div>
            <button type="button" onclick="enviarFormulario(this)" class="btn sin-form float-right btn-primario ld-ext-right">Enviar<div class="ld ld-ring ld-spin"></div></button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer( ); ?>
<script>
  $('.bloques-convenios').slick({
  dots: true,
  infinite: false,
  speed: 300,
  arrows: false,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
  ]
});
</script>
<script>
        $(document).ready( function() {
            $('.contents').btnLoadmore({
                showItem : 8,
                whenClickBtn : 16,
                textBtn : 'Cargar más...',
                classBtn : 'btn btn-danger'
            });
        });

    </script>

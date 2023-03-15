<div id="menuBlog" class="sidenav animate__bounceInRight"> 
        <a href="javascript:void(0)" class="closebtn" onclick="closeMen()">Cerrar <span>&times;</span></a>
        <a class="d-none d-sm-block" href=""><div class="logo">
            <i class="fas fa-home"></i>
            <!-- <img src="/assets/img/logo.svg" alt="Logo IEXE"> -->
        </div></a>
        <div class="menu-navegacion">
        <img class="img-fluid header-logo-expost" src="https://www.iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/img/expost-logo.png" alt="logo-expost" height="15">
            <div class="contenedor-menu">
              <?php 
              wp_nav_menu( array(
                'container' => '',
                'theme_location' => 'menu_expost',
                'menu_class' => 'programas-academicos',
                'add_li_class' => 'nav-item',
                'link_class'   => 'nav-link'
            ) );
              ?>
                <!-- <a class="menu-movil" href="/nosotros">Acerca de IEXE</a>
                <a class="menu-movil" href="/oferta-educativa">Oferta educativa</a>
                    <ul class="programas-academicos">
                        <li><a href="/oferta-educativa/#licenciaturas">Licenciaturas</a></li>
                        <li><a href="/oferta-educativa/#maestrias">Maestrías</a></li>
                        <li><a href="/oferta-educativa/#doctorado">Doctorados</a></li>
                        <li><a href="/oferta-educativa/#masters">Masters</a></li>
                        <li><a href="/oferta-educativa/#diplomados">Diplomados</a></li>
                        <li><a href="/capacitaciones/">Capacitaciones</a></li>
                    </ul>
                <a class="menu-movil" href="/admisiones">Admisiones</a>
                <a class="menu-movil" href="/becas">Becas</a>
                <a class="menu-movil" href="/comunidad">IEXE Comunidad</a>
                <a class="menu-movil" href="/blog">Blog y noticias</a> -->
            </div>
        </div>
    </div>
<script>
  var estado_menu_blog = false;
    const menuBlog = document.getElementById("menuBlog");
    //const overlay = document.getElementById('overlay-menu');
    var w = window.innerWidth;
    window.addEventListener('resize', function () { 
        "use strict";
        w = window.innerWidth; 
        console.log("se hizo resize");
    });
  function openMen() {
        
        if(w > 990){
            // document.getElementById("mySidenav").style.width = "66%";
            menuBlog.style.width = "66%";
            overlay.style.display = "block";
            //disableScroll();
        }else {
            $('nav.navbar.fixed-top.navbar-expand-lg.navbar-light.bg-light').addClass('sticky');
            // document.getElementById("mySidenav").style.width = "100%";
            menuBlog.style.width = "100%";
            //disableScroll();
        }
      
      estado_menu = true;
    }
    
    function closeMen() {
      menuBlog.style.width = "0";
      estado_menu_blog = false;
      enableScroll();
      overlay.style.display = "none";
      nav_toggle();
    }
    function nav_toggle(){
        navbar = document.getElementById("blog-nav");
        navbar.classList.toggle("hid");
        logo = document.getElementById("logo-navbar")
        logo.classList.toggle("hidden");
        logo.classList.toggle("show");

    }
    function buscar(){
            let termino = document.getElementById('busqueda');
            let spinner = document.getElementById('spinner');
            termino = termino.value;
            console.log(termino);
            const elC = document.getElementById('resultado');
            elC.innerHTML = "";
            if(spinner.classList.contains('hidden')){
                spinner.classList.remove('hidden');
                console.log('lo tiene');
            }
            fetch('https://iexe.edu.mx/wp-json/wp/v2/search/?subtype=page&per_page=10&subtype=post&search='+ termino).then(response => response.json()).then(function(myJson){
              elC.innerHTML = "";
              return myJson
            }).then(function(myJson) {
                myJson.forEach(myJson => {
                        elC.innerHTML += "<a href="+myJson['url']+">"+ myJson['title']+ "</a>"  + '<br>';
                        //console.log(myJson['title']);
                }); 
            }).then(function(){
              if(!spinner.classList.contains('hidden')){
                spinner.classList.add('hidden');
              }
            });

        }
    function clearBuscar(){
        let termino = document.getElementById('busqueda');
            termino.value = "";
        let resultados = document.getElementById('resultado');
        resultados.innerHTML = "";
    }
    function initBusqueda(){
        $('#busquedaModal').modal('show');
    }
</script>
<section id="blog-sub-footer" class="pt-5 pb-5">
    <div class="container">
        <div class="row mb-5 mt-4">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-3 text-white">
                <!-- <img src="<?php // echo esc_url(get_template_directory_uri()) ?>/assets/img/expost-pie.png" alt="" class="logo-pie-expost"> -->
                <h1 class="quienes-somos">¿Quiénes somos?</h1>
                <p class="detalles-quienes">Somos una comunidad de escritores, consultores, docentes y redactores de opinión pública, respaldados por la <strong>Universidad IEXE</strong>. 
                    En donde nuestro principal objetivo es “compartir conocimiento objetivo y estratégico que traspase fronteras”.</p>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-3"><div class="bloque-img"><a href="https://iexe.edu.mx/" target="_blank"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/footer/somos_iexe.webp" alt=""></a><!--<div class="shadow"><h2 class="quien-tag">IEXE Universidad</h2></div>--></div></div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-3"><div class="bloque-img"><a href="https://www.iexe.edu.mx/editorial/" target="_blank"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/footer/somos_editorial.webp" alt=""></a><!--<div class="shadow"><h2 class="quien-tag">IEXE Editorial</h2></div>--></div></div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-3"><div class="bloque-img"><a href="https://evaluare.mx/" target="_blank"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/footer/somos_evaluare.webp" alt=""></a><!--<div class="shadow"><h2 class="quien-tag">Evaluare</h2></div>--></div> </div>
        </div>
    </div>
</section>
    <section id="sub-pie">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="informacion-importante">
                        <div class="bloque">
                            <p>Todos los derechos reservados IEXE 2022 <a href="https://www.iexe.edu.mx/aviso-de-privacidad/"> Aviso de Privacidad</a>  <a href="javascript:void(0)" data-toggle="modal" data-target="#grid">Contacto</a> 
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <?php // if(is_page_template('academicos.php') || is_page_template('admisiones.php')){ 
        if(FALSE){ 
        ?>                           
						<div style="color: #FBB4F8;" class="inscribete-ya">
                            <div class="cerrar-inscribete-ya"><a>Cerrar [X]</a></div>
                            <a href="https://bit.ly/iexeANU" target="_blank">
                            <h3 style="color: #FFF;">¡Da el sí a tu futuro profesional y obtén una beca!</h3>
                            <!-- <p class="postulate">Del 18 al 30 de junio, postulate ahora</p> ¡Da click ahora!</a>-->
                            <button class="btn btn-primario mb-2 mt-2 rosa"> ¡HAZ MATCH! </button>
                            <p class="condiciones">*Válido únicamente del 11 al 17 de Febrero de 2022. Aplica para inscritos de nuevo ingreso en licenciaturas, maestrías o másteres. <br> *Se aplican restricciones, contáctanos para más información.</p>
                        </div>
                        </a>

                        <?php
                        }
    ?>
    <div id="overlay-menu"></div>
<script>    
    var estado_menu = false;
    const menu = document.getElementById("mySidenav");
    const acceso = document.getElementById("accesos");
    const overlay = document.getElementById('overlay-menu');
    var w = window.innerWidth;
    window.addEventListener('resize', function () { 
        "use strict";
        w = window.innerWidth; 
        console.log("se hizo resize");
    });
    function openNav() {
        
        if(w > 800){
            // document.getElementById("mySidenav").style.width = "66%";
            menu.style.width = "66%";
            overlay.style.display = "block";
            disableScroll();
        }else {
            $('nav.navbar.fixed-top.navbar-expand-lg.navbar-light.bg-light').addClass('sticky');
            // document.getElementById("mySidenav").style.width = "100%";
            menu.style.width = "100%";
            disableScroll();
        }
      
      estado_menu = true;
    }
    
    function preventDefault(e) {
        e.preventDefault();
    }

function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}

// modern Chrome requires { passive: false } when adding event
var supportsPassive = false;
try {
  window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
    get: function () { supportsPassive = true; } 
  }));
} catch(e) {}

var wheelOpt = supportsPassive ? { passive: false } : false;
var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';

// call this to Disable
function disableScroll() {
  window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
  window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
  window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
  window.addEventListener('keydown', preventDefaultForScrollKeys, false);
}

// call this to Enable
function enableScroll() {
  window.removeEventListener('DOMMouseScroll', preventDefault, false);
  window.removeEventListener(wheelEvent, preventDefault, wheelOpt); 
  window.removeEventListener('touchmove', preventDefault, wheelOpt);
  window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
}
    $(document).mouseup(function(e) 
        {
            var container = $("#mySidenav");
            var acceso = $("#accesos")

            // if the target of the click isn't the container nor a descendant of the container
            if (!container.is(e.target) && container.has(e.target).length === 0) 
            {
                //closeNav();
                //cierraAccesos();
            }
        });

</script>
<!-- <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
<script>
  document.addEventListener( 'DOMContentLoaded', function() {
    var splide = new Splide( '.splide',{
      type: 'loop',
      perPage: 4,
      perMove: 1,
      pagination: false,
      arrows: true,
      rewind : true,
      breakpoints: {
      990: {
        perPage: 3,
        },
      770: {
      perPage: 2,
      },
      660: {
      perPage: 1,
      },
      }
    } );
    splide.mount();
  } );
</script>
<script>
            // var splide = new Splide('.splide', {
            //     type: 'loop',
            //     perPage: 3,
            //     rewind: true,
            //     breakpoints: {
            //         640: {
            //             perPage: 2,
            //             gap: '.7rem',
            //             height: '12rem',
            //         },
            //         480: {
            //             perPage: 1,
            //             gap: '.7rem',
            //             height: '12rem',
            //         },
            //     },
            // });
            // splide.mount();
        </script>
<?php wp_footer(  )?>
<div class="modal fade" id="busquedaModal" tabindex="-1" aria-labelledby="guardadoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title titulo" id="guardadoModalLabel">Buscar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <form class="mb-1" role="search" method="get" id="searchform" action="https://www.iexe.edu.mx/">
                            <input name="s" id="busqueda" class="busqueda" type="text" onkeyup="buscar()" placeholder="Buscar en el blog">
                            <div id="spinner" class="spinner-border hidden" role="status">
                              <span class="sr-only">Loading...</span>
                            </div>
                            <button class="busc" type="submit">
                                <svg aria-labelledby="title" viewBox="0 0 24 24"><title>Buscar</title>
                                    <g>
                                        <path d="M24.06,23.22l-6.38-6.38a10.11,10.11,0,1,0-.85.85l6.37,6.37ZM1.2,10.13A8.93,8.93,0,1,1,10.13,19,8.94,8.94,0,0,1,1.2,10.13Z"></path>
                                    </g>
	                            </svg></button>
                                <a onclick="clearBuscar()" class="clear-search-box" js-target="clear-search-box">BORRAR</a>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="resultado"></div>
                    </div>
                </div>
                <div class="row mt-5">
                  <div class="col-md-12">
                    <ul class="lista-de-busqueda">
                      <li>Políticas Públicas</li>
                      <li>Tecnología</li>
                      <li>Lo más leido</li>
                      <li>Derecho</li>
                    </ul>
                  </div>
                </div>
          </div>
      </div>
    </div>
  </div>
</div>
<script>
  function copiarReferencia(){
    var referencia = "<?php echo str_replace(array('\r', '\n', "\r", "\n"),'' ,get_field('cita'))?>";
    navigator.clipboard.writeText(referencia);
    alert("Texto copiado al portapapeles: " + referencia);
  }
  function copyRichText() {
    var text = "<?php echo str_replace(array('\r', '\n', "\r", "\n"),'' ,get_field('cita'))?>";
  const listener = function(ev) {
      ev.preventDefault();
      ev.clipboardData.setData('text/html', text);
      ev.clipboardData.setData('text/plain', text);
    };
    document.addEventListener('copy', listener);
    document.execCommand('copy');
    document.removeEventListener('copy', listener);
    alert('Cita copiada al portapapeles');
}
</script>
<style>
    #grid .modal-content {
    background: linear-gradient(90deg, rgba(0,30,66,1) 50%, rgba(255,255,255,1) 50%);
    box-shadow: 0px 9px 18px #0C22F55C;
    outline: unset;
    overflow: hidden;
    outline: 0px;
    border: 1px;
}
#grid .modal .close {
    color: red;
    opacity: 1;
}
#grid .close{
    float: right;
    font-size: 18px;
    font-weight: 100;
    line-height: 0.5;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: .5;
    letter-spacing: -2px; 
}
#grid h2 {
    font-family: 'aktiv-grotesk-extended';
    font-size: 24px;
    font-weight: 200;
}
#grid p {
    font-family: 'Nunito Sans';
    font-weight: 300;
    font-size: 20px;
    letter-spacing: 0.38px;
}
.contenedor-modal {
    padding: 38px;
    position: relative;
}
.lay-fondo{
    bottom: -30px;
    position: absolute;
    right: 14px;
}
#grid #contacto .form-control {
    border: none;
    border-radius: unset;
    border-bottom: 1px solid var(--primario-azul);
    background: #FFF;
}
#grid p.terminos {
    font-size: 12px;
}
#grid ul li {
    font-size: 24px;
    font-weight: 200;
    margin-bottom: 12px;
    list-style: none;
}
#grid button.enviar-landing.btn.sin-form.btn-primario.mt-3.ld-ext-right {
    text-align: center;
    margin: 0 auto;
    display: block;
}
#grid ul {
    margin-block-start: 0px;
    padding-inline-start: 10px;
}
#grid ul img {
    margin-right: 12px;
}
a.solicitar-info{
    border: 1px solid;
    border-radius: 5px;
    padding: 5px 25px!important;
    margin-top: 15px;
    margin-left: 35px;
}
nav.navbar.sticky .navegacion-botones {
    color: #FFF;
    margin: 0 3% 0 10%;
    font-weight: 300;
    transition: all 0.5s ease-out;
}
.navegacion-botones {
    color: #FFF;
    margin: 0 3% 0 10%;
    font-weight: 300;
}
.navegacion-botones a {
    text-decoration: none;
    color: #fff;
    float: left;
    padding: 18px 10px;
    margin-left: 25px;
}
input#mi-busqueda {
    font-size: 16px;
    padding: 5px;
    border: none;
    border-radius: 0;
    background: rgba(0,30,66,0.01);
    /* border-bottom: 1px solid #FFF; */
    background-image: url(https://www.iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/img/buscar.svg);
    background-repeat: no-repeat;
}
#grid .close {
    background: blue;
    border-radius: 25px;
    opacity: 1;
    color: #FFF;
    font-size: 20px;
    margin: 0px;
}
div#navbarSupportedContent {
    flex-direction: row-reverse;
}
@media (max-width: 1199px){
nav.navbar.sticky .navegacion-botones {
    margin: 0 3% 0 10%;
}}
@media (max-width: 995px){
nav.navbar.sticky .navegacion-botones {
    margin: 0 3% 0 10%;
}
.navegacion-botones {
    color: #FFF;
    margin: 0px 3% 0 3%;
    font-weight: 300;
}
.navegacion-botones a {
    margin-left: 25px;
}
}
</style>
<script>
    $(document).ready(function() {

var
  words = $('#tagi text'),
  l = words.length,
  current = null,
  delay = 2000;

function clearBlink(o) {
  var
    ca = o.getAttribute('class').split(' '),
    i = ca.indexOf('blink');

  if (i !== -1) {
    ca.splice(i, 1);
    o.setAttribute('class', ca.join(' '));
  }
}

function addBlink(o) {
  var
    ca = o.getAttribute('class').split(' ');
  ca.push('blink');
  o.setAttribute('class', ca.join(' '));
}

function wordblink() {

  var e;

  if (current !== null) {
    clearBlink(words.eq(current)[0])
  }

  current = Math.floor(Math.random() * l);
  e = words.eq(current);
  addBlink(e[0]);

  setTimeout(wordblink, delay);
}

wordblink();

});

</script>
<style>
    svg text.blink {
  animation: blink 2s ease-out;
}


#tagi {
  width: 70%;
  margin: 250px auto;
}

@keyframes blink {
  0% {
    text-shadow: 0 0 20px rgba(226, 25, 45, 0);
  }
  20% {
    fill: rgba(226, 25, 45, 1);
    text-shadow: -5px -5px 20px rgba(226, 25, 45, 0.8), 5px -5px 20px rgba(226, 25, 45, 0.8), 5px 5px 20px rgba(226, 25, 45, 0.8), -5px 5px 20px rgba(226, 25, 45, 0.8);
    ;
  }
  30% {
    fill: rgba(226, 25, 45, 1);
    -5px -5px 20px rgba(226, 25, 45, 0.8), 5px -5px 20px rgba(226, 25, 45, 0.8), 5px 5px 20px rgba(226, 25, 45, 0.8), -5px 5px 20px rgba(226, 25, 45, 0.8);
  }
  100% {
    text-shadow: 0 0 20px rgba(226, 25, 45, 0);
  }
}

.st0 {
  font-size: 68px;
}

.st1 {
  font-size: 27px;
}

.st2 {
  font-size: 82px;
}

.st3 {
  font-size: 41px;
}

.st4 {
  font-size: 41px;
}

.st5 {
  fill: #808080;
}

.st6 {
  font-size: 24px;
}

.st7 {
  font-size: 24px;
}

.st8 {
  font-size: 62px;
}

.st9 {
  font-size: 86px;
}

.st10 {
  font-size: 18px;
}

.st11 {
  font-size: 18px;
}

.st12 {
  font-size: 25px;
}

.st13 {
  font-size: 25px;
}

.st14 {
  font-size: 25px;
}

.st15 {
  font-size: 32px;
}

.st16 {
  font-size: 32px;
}

.st17 {
  font-family: 'Open Sans';
  font-weight: 600;
  fill: #a0a0a0;
}

.st18 {
  font-size: 22px;
}

.st19 {
  font-size: 22px;
}

.st20 {
  font-size: 36px;
}

.st21 {
  font-size: 19px;
}

.st22 {
  font-size: 51px;
}

.st23 {
  font-size: 26px;
}

.st24 {
  font-size: 33px;
}

.st25 {
  font-size: 20px;
}

.st26 {
  font-size: 23px;
}

.st27 {
  font-size: 23px;
}

.st28 {
  font-family: 'Open Sans';
}

.st29 {
  font-size: 54px;
}

.st30 {
  font-size: 20px;
}

.st31 {
  font-size: 37px;
}
</style>
</body>
</html>
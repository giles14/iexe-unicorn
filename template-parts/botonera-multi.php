
<a href="javascript:void(0)" onclick="toggleOpen()">
<div class="cmp-botonera" id="botonera-es">
    <div class="cmp-botonera__boton-contenedor">
        <button class="cmp-botonera__boton">
            <span class="cmp-botonera__icono">
                <img src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/asistente.svg">
            </span>
        </button>
    </div>
    <div class="cmp-botonera__links-contenedor" style="cursor:pointer">
        <div class="cmp-botonera__links">

            <a href="tel:8002868464" id="openTel" class="cmp-botonera__link" style="transition-delay: 0.24s;">
                <span class="cmp-botonera__icono" style="transition-delay: 0.54s;">
                <img data-src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/llama-ico.png" class=" lazyloaded" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/llama-ico.png">
                </span>
                <span class="cmp-botonera__texto">Llámanos</span>
            </a>



            <a id="openChat" onclick="javascript:abrirchat();" class="cmp-botonera__link" style="transition-delay: 0.18s;">
                <span class="cmp-botonera__icono" style="transition-delay: 0.48s;">
                <img data-src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/chat-ico.png" class=" lazyloaded" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/chat-ico.png">
                </span>
                <span class="cmp-botonera__texto">Chatea con nosotros</span>
            </a>




            <a href="https://www.iexe.edu.mx/becas/#calcula-beca" class="cmp-botonera__link" style="transition-delay: 0.12s;">
                <span class="cmp-botonera__icono" style="transition-delay: 0.42s;">
                <img data-src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/calculadora-ico.png" class=" lazyloaded" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/calculadora-ico.png">
                </span>
                <span class="cmp-botonera__texto">Calcula tu beca</span>
            </a>


            <a data-toggle="modal" data-target="#grid" class="cmp-botonera__link" style="transition-delay: 0.06s;">
                <span class="cmp-botonera__icono" style="transition-delay: 0.36s;">
                <img data-src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/info-ico.png" class=" lazyloaded" alt="Solicita Información" src="<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/info-ico.png">
                </span>
                <span class="cmp-botonera__texto">Solicita Información</span>
            </a>

        </div>
    </div>
</div>
</a>
<style>
    .cmp-botonera {
        position: fixed;
        right: 0;
        /* top: 35%; */
        -webkit-transform: translateX(100%);
        transform: translateX(100%);
        -webkit-transition-duration: .3s;
        transition-duration: .3s;
        z-index: 3000;
}
.cmp-botonera.open {
    transform: translateX(0%);
}
.open .cmp-botonera__links {
    transform: translateX(0%);
}
.cmp-botonera__links .cmp-botonera__icono{
    margin-left: 20px;
}
.cmp-botonera__boton-contenedor {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    position: absolute;
    right: 42px;
    top: 85%;
    -webkit-transform: translate(-46px,-50%);
    transform: translate(-46px,-50%);
    -webkit-transition: .3s cubic-bezier(0,0,.2,1);
    transition: .3s cubic-bezier(0,0,.2,1);
    width: 100%;
}
.cmp-botonera__boton {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: #0018FF;
    border: 0;
    border-bottom-left-radius: 75pt;
    border-top-left-radius: 75pt;
    /* -webkit-box-shadow: 0 1px 6px 0 rgb(37 211 102 / 60%);
    box-shadow: 0 1px 6px 0 rgb(37 211 102 / 60%); */
    box-shadow: 1px 6px 12px 0 rgb(60 60 60 / 36%);
    cursor: pointer;
    height: 42px;
    padding: 3px 7px 3px 3px;
    width: 46px;
    border-radius: 50%;
}
.cmp-botonera__boton .cmp-botonera__icono {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    /* background-color: #fff; */
    border-radius: 75pt;
    /* -webkit-box-shadow: 0 1px 6px 0 rgb(0 48 83 / 60%);
    box-shadow: 0 1px 6px 0 rgb(0 48 83 / 60%); */
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    height: 36px;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin-right: 0;
    opacity: 1;
    padding: 6px;
    width: 36px;
}
.cmp-botonera__icono {
    display: block;
    height: 20px;
    margin-right: 15px;
    opacity: 1;
    -webkit-transition: .3s cubic-bezier(0,0,.2,1);
    transition: .3s cubic-bezier(0,0,.2,1);
    width: 20px;
}
.cmp-botonera__boton .cmp-botonera__icono img {
    display: block;
    max-height: 24px;
}
.cmp-botonera__icono img {
    max-height: 100%;
    max-width: 100%;
}
.cmp-botonera__links-contenedor {
    background-color: #fff;
    border-bottom-left-radius: 8px;
    border-top-left-radius: 8px;
    -webkit-box-shadow: 0 1px 6px 0 rgb(0 0 0 / 10%);
    box-shadow: 0 1px 6px 0 rgb(0 0 0 / 10%);
    padding: 17px 20px 1px 0px;
    position: relative;
    z-index: 2;
}
.cmp-botonera__links {
    -webkit-transform: translate(100%,5px);
    transform: translate(100%,5px);
}
.cmp-botonera__link {
    font-family: 'Nunito Sans', sans-serif;;
    font-weight: 600;
    -webkit-box-align: center;
    -ms-flex-align: center;
    /* align-items: center; */
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 20px;
    text-decoration: none;
    width: 100%;
    color: #001e42;
}
.cmp-botonera__link, .cmp-botonera__links {
    -webkit-transition: .3s cubic-bezier(0,0,.2,1);
    transition: .3s cubic-bezier(0,0,.2,1);
}
:root {
    --joinchat-ico: url("<?php echo esc_url(esc_url(get_template_directory_uri())) ?>/assets/img/whatsapp.svg");
}
.joinchat__button {
    box-shadow: 1px 6px 12px 0 rgb(60 60 60 / 36%);
}
@media (min-width: 768px){
    .cmp-botonera {
        bottom: 120px;
    }
    .cmp-botonera__boton {
    height: 60px;
    padding: 4px 4px 4px 4px;
    width: 60px;
}
.cmp-botonera__boton .cmp-botonera__icono {
    height: 50px;
    padding: 8px;
    width: 53px;
}
.cmp-botonera__boton .cmp-botonera__icono img {
    max-height: 35px;
}
}


</style>
<script>
    function toggleOpen(){
        var cont = document.getElementById('botonera-es');
        cont.classList.toggle("open");
    }
</script>
<!-- <script>
        var n = i(0);
        function openButton () {
            n(".cmp-botonera__boton").on("click", function () {
                n(".cmp-botonera__links-contenedor").css("display", "");
                var e = n(this).closest(".cmp-botonera"),
                    t = n(".cmp-botonera__link"),
                    i = e.css("transition-duration").split("s")[0];
                e.toggleClass("open"),
                    n(".cmp-botonera__link").on("click", function () {
                        e.removeClass("open");
                    }),
                    e.hasClass("open")
                        ? t.each(function (e) {
                              var t = (i * (e + 1)) / 5,
                                  a = (i * (e + 6)) / 5;
                              n(".cmp-botonera__link:nth-last-child(" + (e + 1) + ")", n(this).parent()).css("transition-delay", t + "s"),
                                  n(":nth-last-child(" + (e + 1) + ") .cmp-botonera__icono", n(this).parent()).css("transition-delay", a + "s");
                          })
                        : t.each(function (e) {
                              n(".cmp-botonera__link:nth-last-child(" + (e + 1) + ")", n(this).parent()).css("transition-delay", "0s"),
                                  n(":nth-last-child(" + (e + 1) + ") .cmp-botonera__icono", n(this).parent()).css("transition-delay", "0s");
                          });
            });
        };
</script> -->
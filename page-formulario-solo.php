<?php /* Template Name: Formulario Solo */ ?>
<?php get_header( ); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto" style="
    background: white;
    border-radius: 20px;
    padding: 30px;" >
            <p>Proporcione sus datos para poder generar tus constancia. La recibirá vía correo electrónico en máximo 48 horas.</p>
            <?php echo apply_shortcodes( '[contact-form-7 id="4026" title="Formulario Conferencia"]' ); ?>
        </div>
    </div>
</div>
<style>
    body#registro\ asistentes {
    margin-top: 130px;
    background: #001E42;
}
body#registro\ asistentes p {
    font-family: 'Nunito Sans';
    font-weight: 300;
    font-size: 20px;
    letter-spacing: 0.38px;
}
input.wpcf7-form-control.has-spinner.wpcf7-submit.btn.btn-primario {
    background: linear-gradient(90deg, rgba(37,51,244,1) 0%, rgba(136,119,242,1) 100%);
    color: #FFF;
    border-radius: 25px;
    padding: 10px 50px;
    font-weight: bold;
    font-size: 18px;
    -webkit-box-shadow: 0px 9px 6px 0px rgb(12 34 245 / 15%);
    box-shadow: 0px 9px 6px 0px rgb(12 34 245 / 15%);
    border: 0px;
    float: right;
}
label {
    font-weight: 700;
}
input#email::placeholder, input#nombre::placeholder {
    font-family: 'Nunito Sans', sans-serif!important;
    letter-spacing: 1px!important;
    font-weight: 300!important;
    font-style: normal!important;
}
</style>
<?php get_footer(); ?>
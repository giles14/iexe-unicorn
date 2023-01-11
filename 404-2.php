<?php /* Template Name: Pagina 404-2 */ ?>
<?php get_header( ); ?>
<section id="not-found">
  <div class="container" style="height: 100%">
    <div class="row align-items-center" style="height: 100%">
        <div class="col-md-6">
          <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/404_iexe.webp" alt="" class="img-fluid mb-3">
          <h1>Haz caído en otra dimensión...</h1>
          <p>La página solicitada no fue encontrada, pero te invitamos a visitar alguno de los siguientes enlaces.</p>
          <ul class="lista-link">
            <li><a href="https://www.iexe.edu.mx/oferta-educativa">Oferta Académica</a></li>
            <li><a href="https://www.iexe.edu.mx/admisiones">Admisiones</a></li>
            <li><a href="https://www.iexe.edu.mx/becas">Becas</a></li>
            <li><a href="javascript:void(0)" data-toggle="modal" data-target="#grid">Contacto</a></li>
          </ul>
          <a onclick="history.back()" class="boton-regresar" style="cursor: pointer; text-decoration: none">REGRESAR</a>
        </div>
    </div>
  </div>
</section>
<style>
  section#not-found {
    background: url(https://www.iexe.edu.mx/wp-content/uploads/2022/07/404.png);
    height: 75vh;
    margin-top:0px;
}
  #not-found h1 {
    font-family: 'aktiv-grotesk-extended';
    color: var(--primario-cyan);
    font-size: 34px;
}
#not-found p {
    color: #F6F6F6;
    font-size: 21px;
    font-weight: 100;
}
ul.lista-link li {
    display: inline;
}
a.boton-regresar {
    background: var(--primario--azul-obscuro);
    padding: 10px 55px;
    border-radius: 30px;
    color: #FFF;
    font-weight: 800;
    letter-spacing: 1.32px;
    font-size: 21px;
}
ul.lista-link {
    padding-inline-start: 0px;
}
ul.lista-link li a {
    color: var(--primario-cyan);
    font-weight: 600;
    font-size: 21px;
}
ul.lista-link li:after {
    content: "|";
    font-size: 20px;
    padding: 0px 6px;
    color: var(--primario-cyan);
}
</style>
<?php get_template_part( 'template-parts/vinculos'); ?>
<?php get_footer( ); ?>
<?php get_header( ); ?>
<section class="error-container">
  <span>4</span>
  <span><span class="screen-reader-text">0</span></span>
  <span>4</span>
</section>
<section id="error-404">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="titulo">Página no encontrada</h1>
                <p class="error">La página solicitada no fué encontrada, sin embargo te invitamos a visitar nuestro <a href="/blog/">blog</a> , navegar por nuestros <a href="/oferta-educativa/">programas académicos</a>  o visitar nuestra <a href="/editorial/">tienda editorial</a> .</p>
            </div>
        </div>
    </div>
</section>
<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,600,700');
@import url('https://fonts.googleapis.com/css?family=Catamaran:400,800');
section#error-404 {
    margin: unset;
}
.error-container {
  text-align: center;
  font-size: 180px;
  font-family: 'Catamaran', sans-serif;
  font-weight: 800;
}
.error-container > span {
  display: inline-block;
  line-height: 0.7;
  position: relative;
  color: #FFB485;
}
.error-container > span {
  display: inline-block;
  position: relative;
  vertical-align: middle;
}
.error-container > span:nth-of-type(1) {
  color: #D1F2A5;
  animation: colordancing 4s infinite;
}
.error-container > span:nth-of-type(3) {
  color: #F56991;
  animation: colordancing2 4s infinite;
}
.error-container > span:nth-of-type(2) {
  width: 120px;
  height: 120px;
  border-radius: 999px;
}
.error-container > span:nth-of-type(2):before,
.error-container > span:nth-of-type(2):after {
  border-radius: 0%;
  content:"";
  position: absolute;
  top: 0; left: 0;
  width: inherit; height: inherit;
  border-radius: 999px;
  box-shadow: inset 30px 0 0 rgba(209, 242, 165, 0.4),
        inset 0 30px 0 rgba(239, 250, 180, 0.4),
        inset -30px 0 0 rgba(255, 196, 140, 0.4), 
        inset 0 -30px 0 rgba(245, 105, 145, 0.4);
  animation: shadowsdancing 4s infinite;
}
.error-container > span:nth-of-type(2):before {
  -webkit-transform: rotate(45deg);
     -moz-transform: rotate(45deg);
      transform: rotate(45deg);
}

.screen-reader-text {
    position: absolute;
    top: -9999em;
    left: -9999em;
}
@keyframes shadowsdancing {
  0% {
    box-shadow: inset 30px 0 0 rgba(209, 242, 165, 0.4),
        inset 0 30px 0 rgba(239, 250, 180, 0.4),
        inset -30px 0 0 rgba(255, 196, 140, 0.4), 
        inset 0 -30px 0 rgba(245, 105, 145, 0.4);
  }
  25% {
    box-shadow: inset 30px 0 0 rgba(245, 105, 145, 0.4),
        inset 0 30px 0 rgba(209, 242, 165, 0.4),
        inset -30px 0 0 rgba(239, 250, 180, 0.4), 
        inset 0 -30px 0 rgba(255, 196, 140, 0.4);
  }
  50% {
     box-shadow: inset 30px 0 0 rgba(255, 196, 140, 0.4),
        inset 0 30px 0 rgba(245, 105, 145, 0.4),
        inset -30px 0 0 rgba(209, 242, 165, 0.4), 
        inset 0 -30px 0 rgba(239, 250, 180, 0.4);
  }
  75% {
   box-shadow: inset 30px 0 0 rgba(239, 250, 180, 0.4),
        inset 0 30px 0 rgba(255, 196, 140, 0.4),
        inset -30px 0 0 rgba(245, 105, 145, 0.4), 
        inset 0 -30px 0 rgba(209, 242, 165, 0.4);
  }
  100% {
    box-shadow: inset 30px 0 0 rgba(209, 242, 165, 0.4),
        inset 0 30px 0 rgba(239, 250, 180, 0.4),
        inset -30px 0 0 rgba(255, 196, 140, 0.4), 
        inset 0 -30px 0 rgba(245, 105, 145, 0.4);
  }
}
@keyframes colordancing {
  0% {
    color: #D1F2A5;
  }
  25% {
    color: #F56991;
  }
  50% {
    color: #FFC48C;
  }
  75% {
    color: #EFFAB4;
  }
  100% {
    color: #D1F2A5;
  }
}
@keyframes colordancing2 {
  0% {
    color: #FFC48C;
  }
  25% {
    color: #EFFAB4;
  }
  50% {
    color: #D1F2A5;
  }
  75% {
    color: #F56991;
  }
  100% {
    color: #FFC48C;
  }
}
</style>
<?php get_template_part( 'template-parts/vinculos'); ?>
<?php get_footer( ); ?>
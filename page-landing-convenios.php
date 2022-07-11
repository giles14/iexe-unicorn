<?php /* Template Name: Landing convenios */ ?>
<?php get_header( ); ?>

<section id="convenios">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="convenio"><img src="" alt="" class="logo"><p class="nombre">Agencias Creativas</p> </div>
            </div>
            <div class="col-md-2">
                <div class="convenio"><img src="" alt="" class="logo"><p class="nombre">Analiza Valor</p> </div>
            </div>
            <div class="col-md-2">
                <div class="convenio"><img src="" alt="" class="logo"><p class="nombre">Canirac</p> </div>
            </div>
            <div class="col-md-2">
                <div class="convenio"><img src="" alt="" class="logo"><p class="nombre">Coparmex</p> </div>
            </div>
            <div class="col-md-2">
                <div class="convenio"><img src="" alt="" class="logo"><p class="nombre">cpe</p> </div>
            </div>
            <div class="col-md-2">
                <div class="convenio"><img src="" alt="" class="logo"><p class="nombre">aksys</p> </div>
            </div>
        </div>
    </div>
</section>
<section>
<div class="container">
  <div class="row">
    <div class="col-sm-12 mb-3">
      <input type="text" id="myFilter" class="form-control" onkeyup="myFunction()" placeholder="Busca el convenio..">
    </div>
  </div>
  <div class="row" id="myItems">
    <div class="col-sm-12 mb-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><a href="#">Coparmex</a></h5>
          <h6 class="card-subtitle mb-2 text-muted">Más información </h6>
          <p class="card-text">Texto </p>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><a href="#">Canirac</a></h5>
          <h6 class="card-subtitle mb-2 text-muted">Más Información</h6>
          <p class="card-text">Texto</p>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><a href="#">Infonavit</a></h5>
          <h6 class="card-subtitle mb-2 text-muted">Más información</h6>
          <p class="card-text">Texto</p>
        </div>
      </div>      
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
</script>
<?php get_footer( ); ?>

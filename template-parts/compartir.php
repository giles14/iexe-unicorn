<div class="modal fade" id="modal-compartir" tabindex="-1" aria-labelledby="ModalCompartirTag" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-blanco">
      <div class="modal-header">
        <h5 class="modal-title">Compartir...</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true" style="font-size: 36px; font-weight: 300;">×</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="mb-0">Comparte esta entrada de blog usando las siguientes redes:</p>
        <?php echo do_shortcode( '[social]' ); ?>
        <p class="mb-0"><br>O copia este link:</p>
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- <div class="input-group mb-3">
                        <input id="url-copy-input-2" type="text" class="form-control" placeholder="link" value="" aria-label="link para compartir" aria-describedby="copiar-compartir" disabled>
                        <div class="input-group-append">
                            <button class="btn bg-primary text-white" type="button" onclick="copiaTexto();" id="copiar-compartir">Copiar</button>
                        </div>
                    </div> -->
                    <div class="copartido-cont d-flex align-items-baseline">
                        <p id="url-copy-input"></p>
                        <button onclick="copiaTexto();" class="copiar">Copiar</button>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
<script>
    $('#modal-compartir').on('show.bs.modal', function (event) {
        //document.getElementById('url-copy-input').setAttribute('value', window.location.href);
        document.getElementById('url-copy-input').innerHTML = window.location.href;
    });
    function copiaTexto() {
        //var copyText = document.getElementById("url-copy-input").getAttribute('value');
        var copyText = document.getElementById("url-copy-input").innerHTML;

        //copyText.select();
        //copyText.setSelectionRange(0, 99999); // For mobile devices
        navigator.clipboard.writeText(copyText);
        //navigator.clipboard.writeText(miTexto);

        // Alert the copied text
        alert("Texto copiado al portapapeles: " + copyText);
}
</script>
<style>
  #modal-compartir .modal-header {
    background: #273481;
}
#modal-compartir .modal-content.bg-blanco {
    border: none;
}
#modal-compartir .modal-header {
    background: #273481;
    padding-top: 6px;
    padding-bottom: 6px;
}
#modal-compartir h5.modal-title {
    color: #FFF;
    font-weight: 300;
    font-size: 30px;
}
p#url-copy-input {
    width: 100%;
    height: 18px;
    overflow: hidden;
    line-break: anywhere;
    padding-right: 14px;
    color: #3051FF;
}
button.copiar {
    background: #273481;
    border: none;
    border-radius: 38px;
    padding: 5px 27px;
    color: #FFF;
    font-weight: 600;
    text-transform: uppercase;
    font-weight: 100;
    font-size: 16px;
    margin-bottom: 5px;
    box-shadow: 0px 5px 8px #ccc;
}
#modal-compartir .modal-header {
    background: #273481;
    padding-top: 6px;
    padding-bottom: 6px;
    border-radius: 10px 10px 0px 0px;
}
.modal-content.bg-blanco {
    border-radius: 13px;
}
#modal-compartir .modal-header {
    background: #273481;
    padding-top: 6px;
    padding-bottom: 6px;
    border-radius: 10px 10px 0px 0px;
}
</style>
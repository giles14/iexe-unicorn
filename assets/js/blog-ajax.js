function likePost(){
    var $ele = document.getElementById('awesome-heart');
    var $corazones = document.getElementsByClassName('awesome-heart');
    let $cont = document.getElementsByClassName('num-come');

    // Array.from($ele).forEach(function (element){
    //     element.classList.toggle('filled')
    // });
    
    $changed = false;

    Array.from($corazones).forEach(function (element){
        //element.classList.toggle('filled')
        if(!element.classList.contains('filled')){
            element.classList.add('filled');
            Array.from($cont).forEach(function (element){
                if(!$changed){
                    element.innerHTML = parseInt(element.innerHTML) + 1;
                }
            });
        }else{
            element.classList.remove('filled');
            Array.from($cont).forEach(function (element){
                if(!$changed){
                    element.innerHTML = parseInt(element.innerHTML) - 1;
                }
            });
        }
        $changed = !$changed;
    });
    

    // if(!$ele.classList.contains('filled')){
    //     $ele.classList.add('filled');
    //     let $cont = document.getElementsByClassName('num-come')[0];
    //     $cont.innerHTML = parseInt($cont.innerHTML) + 1;
    // }else{
    //     $ele.classList.remove('filled');
    //     let $cont = document.getElementsByClassName('num-come')[0];
    //     $cont.innerHTML = parseInt($cont.innerHTML) - 1;
    // }


    jQuery.ajax({
        type: "post",
        url: "https://www.iexe.edu.mx/wp-admin/admin-ajax.php",
        data: {
            'action':'cagb_vote_post',
            'id_post': frontend_ajax_object.el_post_id,
            'nonce': frontend_ajax_object.nonce,
            'user':frontend_ajax_object.user
    },
        success: function(result){
            console.log(result);
            //$ele = document.getElementById('Icon_awesome-heart');
            //$ele.classList.add('filled');
        },
        error: function(result){
            console.log("hubo un error" + result.message);
            $ele = document.getElementById('Icon_awesome-heart');
            $ele.classList.remove('filled');
            let $cont = document.getElementsByClassName('num-come')[0];
            $cont.innerHTML = parseInt($cont.innerHTML) - 1;
        }
        
    });
}
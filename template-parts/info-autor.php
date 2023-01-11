<?php
    if(is_user_logged_in(  )){
        echo wpb_author_info_box();
    }
?>

<style>
img.autor-profile-pic {
    border-radius: 150px;
    width: 95px;
    border: 2px solid #273481;
    object-fit: contain;
    background: #273481;
}
p.nombre-autor {
    text-transform: uppercase;
    margin-bottom: 0px;
    font-weight: 600;
    font-size: 14px;
}
p.bio-autor {
    font-weight: 300;
    font-size: 14px;
}
</style>

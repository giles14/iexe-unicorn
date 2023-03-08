<?php $cagb_like_voted = check_if_voted(get_the_ID(), $_SERVER['REMOTE_ADDR'], get_current_user_id()); ?>
<div class="contenedor-boton">
    <div class="pill-1 primera">
                <a onclick="likePost()" style="position: relative;"><span aria-label="Me gusta" data-microtip-position="right" role="tooltip"><svg xmlns="http://www.w3.org/2000/svg" width="27.978" height="23.497" viewBox="0 0 27.978 23.497">
                    <path id="Icon_awesome-heart" class="awesome-heart <?php echo ($cagb_like_voted) ? "filled" : ""?>" data-name="Icon awesome-heart" d="M24.356,3.777a7.494,7.494,0,0,0-9.831.679L13.487,5.469,12.449,4.456a7.493,7.493,0,0,0-9.831-.679A6.915,6.915,0,0,0,2.1,14.156L12.291,24.13a1.716,1.716,0,0,0,2.387,0l10.195-9.975a6.91,6.91,0,0,0-.516-10.379Z" transform="translate(0.502 -1.745)" fill="none" stroke="#273482" stroke-width="1"/>
                    </svg></span><span class="num-come"><?php echo cagb_count_likes_post(); ?></span>
                </a>
    </div>
    <div class="pill-1">
        <a href="#comments">
            <svg xmlns="http://www.w3.org/2000/svg" width="27.989" height="23.366" viewBox="0 0 27.989 23.366">
                <path id="Icon_awesome-comment-dots" data-name="Icon awesome-comment-dots" d="M13.488,2.25C6.038,2.25,0,6.9,0,12.634a9,9,0,0,0,3,6.525A12.6,12.6,0,0,1,.116,23.942a.381.381,0,0,0-.079.434.414.414,0,0,0,.385.24A12.438,12.438,0,0,0,7.829,22.05a16.861,16.861,0,0,0,5.659.969c7.45,0,13.488-4.648,13.488-10.384S20.938,2.25,13.488,2.25ZM6.744,14.232a1.6,1.6,0,1,1,0-3.2,1.6,1.6,0,1,1,0,3.2Zm6.744,0a1.6,1.6,0,1,1,1.686-1.6A1.642,1.642,0,0,1,13.488,14.232Zm6.744,0a1.6,1.6,0,1,1,1.686-1.6A1.642,1.642,0,0,1,20.232,14.232Z" transform="translate(0.513 -1.75)" fill="none" stroke="#273481" stroke-width="1" opacity="1"/>
            </svg>
        </a>   
    </div>
</div>

<style>
.contenedor-boton {
    background: #e0eefd;
    width: 212px;
    border-radius: 50px;
    position: relative;
    display: flex;
    height: 51px;
    box-shadow: 2px 3px 7px #cccccc85;
    align-items: center;
    position: sticky;
    bottom: 50px;
    margin: 0 auto;
}
.pill-1 {
    width: 50%;
    /* display: block; */
    color: #fff;
    height: 25px;
    margin-bottom: 0px;
    text-align: center;
}
path#Icon_awesome-comment-dots:hover {
    fill: #273482;
    cursor: pointer;
}
/* span.num-come {
    border: 1px solid gray;
    border-radius: 10px;
    font-size: 12px;
    padding: 0px 6px;
    position: absolute;
    left: 54%;
    background: rgb(255,255,255,0.2);
    top: 16px;
    color: #273482;
} */

/* .menu-nav span.num-come {
    /* border: 1px solid gray; */
    /* border-radius: 10px; 
    font-size: 12px;
    padding: 0px 6px;
    position: absolute;
    left: 43%;
    background: rgb(255,255,255,0.2);
    top: 100%;
    color: #273482;
    border: none;
    font-weight: 700;
} */
.menu-nav span.num-come {
    font-size: 15px;
    padding: 0px 6px;
    position: absolute;
    background: rgb(255,255,255,0.2);
    color: #273482;
    border: none;
    font-weight: 700;
    display: block;
    width: 100%;
    top: unset;
}

.pill-1 span.num-come {
    border: none;
    top: 2%;
    left: 90%;
    font-size: 16px;
    font-weight: 800;
    background: none;
    color: #273482;
    padding-left: 3px;
}
.pill-1.primera {
    border-right: 1px solid;
    color: #c6d3eb;
}
path#Icon_awesome-comment-dots:hover {
    fill: #273482;
    cursor: pointer;
}
</style>
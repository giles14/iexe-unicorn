<?php
update_option( 'siteurl', 'https://www.iexe.edu.mx' );
update_option( 'home', 'https://www.iexe.edu.mx' );
function cagb_ids_no_iexe_logo(){
    $cagb_ids = [1310 , 1406 , 847];
    return $cagb_ids;
}

/* CONSTANTES DE PROGRAMAS
========================================== */
define('MAXIMAS_MATERIAS' , 7);
define('MAXIMOS_PERIODOS' , 10);
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_image_size( 'destacada-archivo', 600, 420 , true );
add_image_size( 'ultimas-archivo', 400, 280 , true );
add_image_size('destacada-post-header', 900 , 600, true ); //ancho anterior: 508
add_image_size('destacada-interesar', 374 , 210, true );
add_image_size('destacada-nuevo-bloque', 331 , 187, true );
add_image_size('destacada-nuevo-sidebar', 500 , 252, true );
// global $post; 
// 	    $unicorn_id = $post->id;
//add_theme_support( 'woocommerce' );

/*
    This function will set the row number of postmeta at the beginning of the month in order to have 
 */
function cagb_set_meta_row_month(){
    $meta_key = "_row_num";
    // 3505 is the id of banners pagina that is used in the post meta since it's needed in all pages.
    $post_id = 3505;
    $linea = cagb_get_last_meta_row();
    // echo $linea . "linea";

    if(metadata_exists( 'post', $post_id, $meta_key )){
        //echo "prexiste";

        $meta_values = get_post_meta( $post_id, '_row_num', false );
        //print_r($meta_values);
        $i = 0;
        foreach($meta_values as $meta => $values){
            $value = unserialize($values);
            if($i == 0){
                $mes_maximo = explode('-', $value['date']);
                $mes_maximo = $mes_maximo[1];
            }
            $mes_actual = explode('-', $value['date']);
            if($mes_maximo < $mes_actual[1]){
                $mes_maximo = intval($mes_actual[1]);
            }
            $i++;
        }
 
        $current_month = intval(date('m'));
        
        //echo "el mes actual " . $current_month;
        //echo "el mes meta " . $mes_maximo;

        if($mes_maximo < $current_month){
            $date = date('d-m-Y');
            $row_number = $linea;
            //$row_number = 99;
            $meta_value = serialize(array("date" => $date, "row_number" => $row_number));
            add_post_meta( $post_id, $meta_key, $meta_value, false );
        }
        
    }
    else{
        $date = date('d-m-Y');
        $row_number = cagb_get_last_meta_row_num();
        $meta_value = serialize(array("date" => $date, "row_number" => $row_number));
        add_post_meta( $post_id, $meta_key, $meta_value, false );
    }

}
function cagb_get_current_month_row(){
    $post_id = 3505;
    $meta_key = "_row_num"; 
    if(metadata_exists( 'post', $post_id, $meta_key )){
        //echo "prexiste";

        $meta_values = get_post_meta( $post_id, '_row_num', false );
        //print_r($meta_values);
        $i = 0;
        foreach($meta_values as $meta => $values){
            $value = unserialize($values);
            if($i == 0){
                $mes_maximo = explode('-', $value['date']);
                $mes_maximo = $mes_maximo[1];
            }
            $mes_actual = explode('-', $value['date']);
            if($mes_maximo < $mes_actual[1]){
                $mes_maximo = intval($mes_actual[1]);
                $meta_id_maximo = $value['row_number'];
            }
            $i++;
        }
 
        $current_month = intval(date('m'));
        
        // echo "el mes actual " . $current_month;
        // echo "el mes meta " . $mes_maximo;

        // if($mes_maximo < $current_month){
        //     $date = date('d-m-Y');
        //     $row_number = $linea;
        //     //$row_number = 99;
        //     $meta_value = serialize(array("date" => $date, "row_number" => $row_number));
        //     add_post_meta( $post_id, $meta_key, $meta_value, false );
        // }
        return $meta_id_maximo;
    }
    return 0;

}

function cagb_get_last_meta_row(){
    global $wpdb;
    //$meta_table = $wpdb->prefix . "postmeta";
    $query = "SELECT MAX(meta_id) FROM wp_postmeta";
    $last_meta_id = $wpdb->get_row($query);
    $value = intval($last_meta_id->{'MAX(meta_id)'});
    return $value;
}

add_action( 'wp_ajax_cagb_vote_post', 'cagb_vote_post');
add_action( 'wp_ajax_nopriv_cagb_vote_post', 'cagb_vote_post');

function cagb_vote_post($post_id = 0, $ip = 0){
    $nonce = sanitize_text_field($_POST['nonce']);

    $meta_key = "_liked";
    $liked = [];
    $post = sanitize_text_field($_POST["id_post"]);
    $user = sanitize_text_field($_POST["user"]);

    if ( ! wp_verify_nonce( $nonce, 'cagb-vote-ajax-nonce' ) ) {
        die ( 'No se pudo comprobar que sea una petición legítima!');
    }
    
    $ip = sanitize_text_field($_SERVER['REMOTE_ADDR']);
    $remote_address = "none";

    if($_SERVER['HTTP_X_FORWARDED_FOR']){
        $remote_address = sanitize_text_field($_SERVER['HTTP_X_FORWARDED_FOR']);
    }
    $quien = "por_ip";
    if(is_user_logged_in()){
        $quien = get_current_user_id();
    }else{
        $quien = $ip;
        $liked["ip"] = $ip;
        $liked["remote_address"] = $remote_address;
    }
    $liked["user"] = $quien;
    $liked["post"] = $post;
    $liked["ip"] = $ip;
    $liked["remote_address"] = $remote_address;

    $serializados = serialize($liked);
    //$resultado = add_post_meta($post, $meta_key, $serializados);

    $resultado = "es correcto: " . $serializados;
    //actualizar
    //$status = update_post_meta( $post, $meta_key, $serializados);
    //crear meta

    if( check_if_voted($post, $ip, $quien)>0 ){
        //$res = check_if_voted($post, $ip, $quien);
        $res = "ya has votado";
        echo $res;
        delete_post_meta( $post, $meta_key, $quien);
        delete_post_meta( $post, $meta_key, $ip);
        echo " removiendo voto";
        wp_die();
    }
    if ($liked["user"]){
        $status = add_post_meta( $post, $meta_key, $liked["user"]);
    }else{
        $status = add_post_meta( $post, $meta_key, $liked["ip"]);
    }

    echo ($status) ? $status : $resultado;
    wp_die();

}
function cagb_count_likes_post($id = 0){
    if($id > 0){
        $post_id = $id;
    }else{
        $post_id = get_the_ID();
    }
    $meta_key = "_liked";
    $meta = get_post_meta($post_id, $meta_key, false);
    

    if ($meta){
        $number_of_likes = count($meta);
    }else{
        $number_of_likes = 0;
    }
    
    return $number_of_likes;
}
 /*
    Views Counter for Blog
 */

 function cagb_getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function cagb_setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '1');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
function cagb_get_postViews($postID) {
    //Get the post, remove any unnecessary tags and then perform the word count
    $count = get_post_meta($postID, $count_key, true);
     return $count;
}

add_filter('manage_post_posts_columns', function($columns) {
	return array_merge($columns, ['views' => "Vistas"]);
});

add_action('manage_post_posts_custom_column', function($column_key, $post_id) {
	if ($column_key == 'views') {
		$count = get_post_meta($post_id, 'post_views_count', true);
		if ($count) {
			echo "{$count}";
		} else {
			echo "0";
		}
	}
}, 10, 2);

add_filter('manage_edit-post_sortable_columns', function($columns) {
	$columns['views'] = 'views';
	return $columns;
});

add_action('pre_get_posts', function($query) {
    if (!is_admin()) {
        return;
    }
 
    $orderby = $query->get('orderby');
    if ($orderby == 'views') {
        $query->set('meta_key', 'post_views_count');
        $query->set('orderby', 'meta_value_num');
    }
});
// Remove issues with prefetching adding extra views
//remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

/**
 * Receives the id of a post, the ip of the visitor and is logged in the user_id.
 *
 *
 * @see Function/method/class relied on
 * @link URL
 * @global type $user_id Description.
 * @global type $varname Description.
 *
 * @param type $var Description.
 * @param type $var Optional. Description. Default.
 * @return type Description.
 */
function check_if_voted($id, $ip = 0, $user_id = 0){

    $ip = sanitize_text_field($ip);

    $resultado = 0;
    //return True if already voted by user
    $meta_key = "_liked";
    // $encontrado = get_post_meta($id, $meta_key, false);

    // foreach ( $encontrado as $registro ) {
    // }

    $meta = get_post_meta($id, $meta_key, false);

    //$resultado = serialize($meta);
    
    foreach ( $meta as $key => $value ) {

        if ($value == $user_id){
            $resultado = 1;
            return $resultado;
        } else if ( $value == $ip){
            $resultado = 1;
            return $resultado;
        }
       
    }
    return $resultado;
}


add_action( 'wp_ajax_cagb_show_message', 'cagb_show_message');
add_action( 'wp_ajax_nopriv_cagb_show_message', 'cagb_show_message');

function cagb_show_message(){
    $el_id = " sin id";
    $el_id = $_POST["id_post"];
    $el_nonce = $_POST["nonce"];

    
    $message = "recibí tu ping" . $el_id . " Este es nonce" . $el_nonce;


    echo $message;
    wp_die();
}
function votar_candidato(int $candidato , $spec = false){
    if($spec){
        $voto = $voto = "candidato_" . $candidato;
        $votos_actuales = get_field( $voto, 26136 );
        $votos_actuales++;
        update_field($voto, $votos_actuales, 26136);
    }

    if(is_user_logged_in()){

        $quien = get_current_user_id();
        $cagb_user_votado = get_user_meta( get_current_user_id(),'_votado_', true );

        if(!$cagb_user_votado || $quien == 1 || $quien == 1961 || $quien == 1966){	
        add_user_meta( $quien, '_votado_', true);
        $voto = "candidato_" . $candidato;
        $votos_actuales = get_field( $voto, 26136 );
        $votos_actuales++;
        update_field($voto, $votos_actuales, 26136);
        $cagb_mensaje = "Gracias, se ha contabilizado tu voto";
        }else{
            $cagb_mensaje = "Lo siento, tu voto no se contabilizó, solo se permite un voto por cuenta";
        }
        return $cagb_mensaje;

    }else{
        return "Debes de registrarte para poder votar";
    }
    
};
add_action('wp_ajax_nopriv_sayhello', 'say_hello_function');
add_action('wp_ajax_sayhello', 'say_hello_function');
function say_hello_function(){
    $candidato_numero = $_GET['val'];
   $mensaje_retorno = votar_candidato($candidato_numero);
echo $mensaje_retorno;
exit();
}
add_action('wp_head', 'myplugin_ajaxurl');
if(get_field( "candidato_1", 26136) > get_field( "candidato_7", 26136) + 30 ){
    if(rand(1,100) < 35){
        //votar_candidato(7, true);
    }    
}

function myplugin_ajaxurl() {

   echo '<script type="text/javascript">
           var ajaxurl = "' . admin_url('admin-ajax.php') . '";
         </script>';
}
// votar_candidato(4);

$porcentajeBeca = round(rand(50 , 70), -1);
function agregar_estilos_tema(){
    wp_register_style( 'iexe-unicorn-main', get_template_directory_uri() . '/assets/css/style.css' , 'bootstrap', '1.34.3', 'all');
    wp_register_style( 'iexe-unicorn-programas-estilo', get_template_directory_uri() . '/assets/css/programas.css', 'iexe-unicorn-main', '1.09', 'all' );
    wp_register_style( 'iexe-unicorn-blog', get_template_directory_uri() . '/assets/css/blog.css', 'iexe-unicorn-main', '1.07', 'all' );
    wp_register_style( 'iexe-unicorn-becas-estilo', get_template_directory_uri() . '/assets/css/becas.css', 'iexe-unicorn-main', '1.0', 'all' );
    wp_register_style( 'iexe-unicorn-admisiones-estilo', get_template_directory_uri() . '/assets/css/admisiones.css', 'iexe-unicorn-main', '1.0', 'all' );
    wp_register_style( 'iexe-unicorn-programas-academicos', get_template_directory_uri() . '/assets/css/programas-academicos.css', 'iexe-unicorn-main', '1.0', 'all' );
    wp_register_style( 'iexe-unicorn-capacitaciones', get_template_directory_uri() . '/assets/css/capacitaciones.css', 'iexe-unicorn-main', '1.0', 'all' );
    wp_register_style( 'iexe-unicorn-modals', get_template_directory_uri() . '/assets/css/modal.css', 'iexe-unicorn-main', '1.0', 'all' );
    wp_register_style( 'iexe-unicorn-comunidad', get_template_directory_uri() . '/assets/css/comunidad.css', 'iexe-unicorn-main', '1.0', 'all' );
    wp_register_style( 'iexe-unicorn-landing-ssp', get_template_directory_uri() . '/assets/css/landing-ssp.css', 'iexe-unicorn-main', '1.0', 'all' );
    wp_register_style( 'iexe-unicorn-landing-ssp-2', get_template_directory_uri() . '/assets/css/landing-ssp-2.css', 'iexe-unicorn-main', '1.0', 'all' );
    wp_register_style( 'iexe-unicorn-landing-match', get_template_directory_uri() . '/assets/css/landing-match.css', 'iexe-unicorn-main', '1.0', 'all' );
    wp_register_style( 'iexe-unicorn-lity-css', get_template_directory_uri() . '/assets/css/lity.min.css', 'iexe-unicorn-main', '1.0', 'all' );
    //wp_register_style( 'iexe-tooltip-css', 'https://unpkg.com/microtip/microtip.css', '', '1.0', 'all' );
    wp_register_style( 'iexe-tooltip-css', 'https://cdn.jsdelivr.net/npm/microtip@0.2.2/microtip.min.css', '', '0.2.2', 'all' );
    wp_register_style( 'iexe-test-orientacion-vocacional', get_template_directory_uri() . '/assets/css/style-tov.css', array(), '1.0', 'all' );
    wp_register_style( 'iexe-table-grid', 'https://cdn.jsdelivr.net/npm/gridjs@6.0.6/dist/theme/mermaid.min.css', array(), '1.0', 'all' );
    wp_register_script( 'iexe-unicorn-programas', get_template_directory_uri() . '/assets/js/academico.js', 'jquery', '1.02', true );
    wp_register_script( 'iexe-unicorn-multipasos', get_template_directory_uri() . '/assets/js/form-multipasos.js', 'jquery', '1.0', true );
    wp_register_script( 'iexe-unicorn-blog', get_template_directory_uri() . '/assets/js/blog.js', 'jquery', '1.0', true );
    wp_register_script( 'iexe-unicorn-becas', get_template_directory_uri() . '/assets/js/becas.js', 'jquery', '1.0', true );
    wp_register_script( 'iexe-unicorn-pasos', get_template_directory_uri() . '/assets/js/extra.js', 'jquery', '1.0', true );
    wp_register_script( 'iexe-unicorn-comunidad', get_template_directory_uri() . '/assets/js/comunidad.js', 'jquery', '1.0', true );
    wp_register_style( 'intlTelinput-style', get_template_directory_uri() . '/assets/css/intlTelInput.min.css' , '17.0', 'all' );
    wp_register_script( 'intlTelinput', get_template_directory_uri() . '/assets/js/intlTelInput.min.js', 'jquery', true );
    wp_register_script( 'validate-js', 'https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js', 'jquery', '1.19.3', true );
    wp_register_script( 'iexe-unicorn-silent-formulario', get_template_directory_uri() . '/assets/js/silentFormularios.js', 'jquery', '1.0', true );
    wp_register_script( 'jquery-autocomplete', get_template_directory_uri() . '/assets/js/jquery.autocomplete.js', 'jquery-mockjax', '1.4.11', true );
    wp_register_script( 'iexe-unicorn-init-busqueda', get_template_directory_uri() . '/assets/js/busqueda-init.js', 'jquery-mockjax', '1.0', true );
    wp_register_script( 'iexe-unicorn-valores', get_template_directory_uri() . '/assets/js/valores.js', 'jquery', '1.0', true );
    wp_register_script( 'iexe-unicorn-landing', get_template_directory_uri() . '/assets/js/landing.js', 'jquery', '1.0', true );
    wp_register_script( 'iexe-unicorn-programas-rotator', get_template_directory_uri() . '/assets/js/jquery.simple-text-rotator.js', 'jquery', '1.0', true );
    wp_register_script( 'iexe-unicorn-lity', get_template_directory_uri() . '/assets/js/lity.min.js', 'jquery', '1.0', true );
    wp_register_script('sweet-alert', "//cdn.jsdelivr.net/npm/sweetalert2@11" ,"", '2.0',true);
    wp_register_script( 'iexe-nuevos-formularios', get_template_directory_uri() . '/assets/js/formularios.js', 'sweet-alert', '1.0', true );
    wp_register_script( 'iexe-formulariosZ', get_template_directory_uri() . '/assets/js/formulariosZ.js', 'sweet-alert', '1.4.1', true );
    wp_register_script( 'iexe-loadmore', get_template_directory_uri() . '/assets/js/btnloadmore.min.js', 'jquery', '1.0.0', true );
    wp_register_style( 'iexe-new-blog', get_template_directory_uri() . '/assets/css/style-blog.css' , '1.0.1', 'all' );
    wp_register_script( 'iexe-blog-ajax', get_template_directory_uri() . '/assets/js/blog-ajax.js', 'jquery', '1.0.0', true );
    wp_register_script( 'charts', 'https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js', array(), '2.9.3', true );
    wp_register_script( 'iexe-test-orientacion-vocacional', get_template_directory_uri() . '/assets/js/script-tov.js', array('charts'), '1.0.0', true );
    wp_register_script( 'iexe-table-grid', 'https://cdn.jsdelivr.net/npm/gridjs@6.0.6/dist/gridjs.production.min.js', array(), '6.0.6', true );
    

    wp_register_script( 'iexe-unicorn-admisiones', get_template_directory_uri() . '/assets/js/admisiones.js', 'jquery', '1.0', true );
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css', false, '4.6', 'all' );
    wp_enqueue_style( 'loadercss', '//cdn.jsdelivr.net/gh/loadingio/loading.css@v2.0.0/dist/loading.min.css', false, '2.0.0', 'all' );
    wp_enqueue_style( 'loaderio', '//cdn.jsdelivr.net/gh/loadingio/ldbutton@v1.0.1/dist/ldbtn.min.css', 'loadercss', '1.0.1', 'all' );
    wp_enqueue_style('iexe-tooltip-css');
    
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', false, '3.6.0', true );
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', 'jquery', '4.6.0', 'all' );
    wp_enqueue_script( 'jquery-mockjax', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-mockjax/2.6.0/jquery.mockjax.min.js', 'jquery', '2.6.0', true );
    wp_enqueue_script( 'jquery-autocomplete');
    wp_enqueue_script( 'iexe-unicorn-valores');
    wp_enqueue_script( 'iexe-unicorn-init-busqueda');
    wp_enqueue_script( 'sweet-alert');
    wp_enqueue_script( 'iexe-formulariosZ');
    
    
    if(!is_page() || !is_page_template( 'academicos.php' ) ){
        wp_enqueue_style( 'iexe-unicorn-blog');
        wp_enqueue_script( 'iexe-unicorn-blog');
    }
    
    wp_enqueue_style( 'iexe-unicorn-main' );
    wp_enqueue_style( 'iexe-unicorn-modals');
    if(is_page_template('academicos.php')){
        wp_enqueue_style('iexe-unicorn-programas-estilo');
        wp_enqueue_script( 'iexe-unicorn-programas');
        wp_enqueue_script( 'iexe-unicorn-programas-rotator');
        wp_enqueue_style('iexe-unicorn-lity-css');
        wp_enqueue_script( 'iexe-unicorn-lity');
    }
    if(is_page_template('page-landing-3.php')){
        wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', false, '5.1', 'all' );
        wp_enqueue_script( 'bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', 'jquery', '5.1', 'all' );
    }
    if(is_page_template('academicos-v2.php')){
        wp_enqueue_style('iexe-unicorn-programas-academicos');
        wp_enqueue_style( 'slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', null, '1.8.1', 'all' );
        wp_dequeue_script('intlTelinput');
        wp_enqueue_style('iexe-unicorn-lity-css');
        wp_enqueue_script( 'iexe-unicorn-lity');
        wp_enqueue_script('iexe-unicorn-multipasos');
    }
    if(is_page_template( 'home.php' )){
        wp_enqueue_script( 'iexe-formulariosZ');
    }
    if(is_page_template( 'page-new-blog.php' )){
        wp_enqueue_style( 'iexe-new-blog');
    }
    if(is_page_template( 'page-landing-convenios.php' )){
        wp_enqueue_style( 'slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', null, '1.8.1', 'all' );
    }

    if(is_page_template('becas.php')){
        wp_enqueue_script( 'iexe-unicorn-becas');
        wp_enqueue_style( 'iexe-unicorn-becas-estilo');
        wp_enqueue_script('iexe-unicorn-multipasos');
        // wp_enqueue_script('iexe-nuevos-formularios');
        wp_enqueue_script( 'iexe-formulariosZ');
    }
    if(is_page_template('page-beca.php')){
        wp_enqueue_script( 'iexe-unicorn-becas');
        wp_enqueue_style( 'iexe-unicorn-becas-estilo');
        wp_enqueue_script('iexe-unicorn-multipasos');
        wp_enqueue_script( 'iexe-formulariosZ');
    }
    if(is_page_template('page-landing-convenios.php')){
        wp_enqueue_script( 'iexe-loadmore');
    }
    if(is_page_template('admisiones.php')){
        wp_enqueue_script( 'iexe-unicorn-admisiones');
        wp_enqueue_style( 'iexe-unicorn-admisiones-estilo');
        wp_enqueue_script('iexe-unicorn-multipasos');
        wp_enqueue_script( 'validate-js');
        wp_enqueue_script( 'iexe-formulariosZ');
    }
    if(is_page_template('capacitaciones.php')){
        wp_enqueue_style( 'iexe-unicorn-capacitaciones');
    }
    if(is_page_template('comunidad.php')){
        wp_enqueue_script( 'iexe-unicorn-comunidad');
        wp_enqueue_style( 'iexe-unicorn-comunidad');
    }
    if(is_page_template('page-busqueda.php')){
        wp_enqueue_style( 'live-search-select-style', 'https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css', 'bootstrap', '1.13.14', 'all' );
        wp_enqueue_script( 'live-search-select', 'https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js', 'jquery', '1.13.14', true );
    }
    if(is_page_template('page-landing-ssp.php')){
        wp_enqueue_style( 'iexe-unicorn-landing-ssp');
        wp_enqueue_script('iexe-unicorn-landing'); 
    }
    if(is_page_template('page-ov.php')){
        wp_enqueue_style( 'iexe-test-orientacion-vocacional');
        wp_enqueue_script('iexe-test-orientacion-vocacional'); 
    }
    if(is_page_template('page-landing-1.php')){
        wp_enqueue_style( 'iexe-unicorn-landing-ssp');
        //wp_enqueue_script('iexe-unicorn-landing'); 
        wp_enqueue_script( 'iexe-formulariosZ');
    }
    if(is_page_template('page-landing-2.php')){
        wp_enqueue_style( 'iexe-unicorn-landing-ssp-2');
        wp_enqueue_script('iexe-unicorn-landing'); 
    }
    if(is_page_template('page-landing-ssp-2.php')){
        wp_enqueue_style( 'iexe-unicorn-landing-ssp-2');
        wp_enqueue_script('iexe-formulariosZ'); 
    }
    if(is_page_template('page-audio.php')){
        wp_dequeue_script('iexe-formulariosZ');
    }
    if(is_page_template('page-landing-match.php')){
        wp_enqueue_style( 'iexe-unicorn-landing-match');
        wp_enqueue_script('iexe-unicorn-landing'); 
    }
    if(is_page_template('page-audio.php')){
        wp_dequeue_style( 'iexe-unicorn-blog' );
    }
    if(is_category() || is_tag() || is_search() || is_author()){
        wp_enqueue_style('iexe-new-blog');
    }
    if(is_single()){
        wp_enqueue_style('iexe-new-blog');
    }
    
    wp_enqueue_style('intlTelinput-style');
    wp_enqueue_script('intlTelinput');

}
add_action( 'wp_enqueue_scripts', 'agregar_estilos_tema' );

function cagb_enqueue_admin_js($hook_suffix){
    wp_enqueue_script('iexe-table-gridjs-js');
    wp_enqueue_style('iexe-table-gridjs-css');
}
add_action( 'admin_enqueue_scripts', 'cagb_enqueue_admin_js' );

function my_admin_script() {
    // Registrar el script
    wp_register_script( 'my-admin-script', 'https://cdnjs.cloudflare.com/ajax/libs/gridjs/6.0.6/gridjs.umd.js' );
    wp_enqueue_script( 'iexe-table-gridjs', 'https://cdn.jsdelivr.net/npm/gridjs/dist/gridjs.umd.js');
    wp_enqueue_style( 'iexe-table-grid', 'https://cdnjs.cloudflare.com/ajax/libs/gridjs/6.0.6/theme/mermaid.css');

    // Encolar el script solo en la página "mi-pagina"
    $screen = get_current_screen();
    if ( $screen->id == 'blog-metrics' ) {
        wp_enqueue_script( 'iexe-table-gridjs', 'https://cdn.jsdelivr.net/npm/gridjs/dist/gridjs.umd.js');
        wp_enqueue_style( 'iexe-table-grid', 'https://cdnjs.cloudflare.com/ajax/libs/gridjs/6.0.6/theme/mermaid.css');
    }
}
add_action( 'admin_enqueue_scripts', 'my_admin_script' );

function theme_ajax_enqueue_scripts() {
    global $post;
    $id = $post->id;
    $user = "not_logged";
    if(is_user_logged_in()){
        $user = get_current_user_id();
    }
    $id = get_queried_object_id();
	/**
	 * frontend ajax requests.
	 */
    if(is_single()){
        wp_enqueue_script( 'iexe-blog-ajax');
	    wp_localize_script( 'iexe-blog-ajax', 'frontend_ajax_object',
		array( 
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'el_post_id' => $id,
            'user' => $user,
			'nonce' => wp_create_nonce( 'cagb-vote-ajax-nonce' ),
            )
        );
    }
	
}
add_action( 'wp_enqueue_scripts', 'theme_ajax_enqueue_scripts' );

// function add_rel_preload($html, $handle, $href, $media) {
    
//     if (is_admin())
//         return $html;

//      $html = <<<EOT
// <link rel='preload' as='style' onload="this.onload=null;this.rel='stylesheet'" id='$handle' href='$href' type='text/css' media='all' />
// EOT;
//     return $html;
// }
// add_filter( 'style_loader_tag', 'add_rel_preload', 10, 4 );

// add_filter( 'script_loader_tag', 'wsds_defer_scripts', 10, 3 );
// function wsds_defer_scripts( $tag, $handle, $src ) {

// 	// The handles of the enqueued scripts we want to defer
// 	$defer_scripts = array( 
// 		'intlTelinput'
// 	);

//     if ( in_array( $handle, $defer_scripts ) ) {
//         return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
//     }
    
//     return $tag;
// } 

// function iexe_unicorn_excerpt_lenght() {
//     return 20;
// }
// add_filter( 'excerpt_length', 'iexe_unicorn_excerpt_lenght', 999 );

function wpse_allowedtags() {
    // Add custom tags to this string
        return '<strong>'; 
    }

if ( ! function_exists( 'wpse_custom_wp_trim_excerpt' ) ) : 

    function wpse_custom_wp_trim_excerpt($wpse_excerpt) {
    $raw_excerpt = $wpse_excerpt;
        if ( '' == $wpse_excerpt ) {

            $wpse_excerpt = get_the_content('');
            $wpse_excerpt = strip_shortcodes( $wpse_excerpt );
            $wpse_excerpt = apply_filters('the_content', $wpse_excerpt);
            //$wpse_excerpt = str_replace(']]>', ']]&gt;', $wpse_excerpt);
            $wpse_excerpt = str_replace(']]>', ']]&gt;', $wpse_excerpt);
            $wpse_excerpt = strip_tags($wpse_excerpt, wpse_allowedtags()); /*IF you need to allow just certain tags. Delete if all tags are allowed */

            //Set the excerpt word count and only break after sentence is complete.
                $excerpt_word_count = 9;
                $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count); 
                $tokens = array();
                $excerptOutput = '';
                $count = 0;

                // Divide the string into tokens; HTML tags, or words, followed by any whitespace
                preg_match_all('/(<[^>]+>|[^<>\s]+)\s*/u', $wpse_excerpt, $tokens);

                foreach ($tokens[0] as $token) { 
                    //if ($count >= $excerpt_length && preg_match('/[\,\;\?\.\!]\s*$/uS', $token)) { 
                    if ($count >= $excerpt_length && preg_match('/[\,\?\.\!]\s*$/uS', $token)) { 
                    // Limit reached, continue until , ; ? . or ! occur at the end
                        $excerptOutput .= trim($token);
                        break;
                    }

                    // Add words to complete sentence
                    $count++;

                    // Append what's left of the token
                    $excerptOutput .= $token;
                }

            $wpse_excerpt = trim(force_balance_tags($excerptOutput));

            if ( $count <  0) {   
                $excerpt_end = ' <a href="'. esc_url( get_permalink() ) . '">' . '&nbsp;&raquo;&nbsp;' . sprintf(__( 'Lee más de: %s &nbsp;&raquo;', 'wpse' ), get_the_title()) . '</a>'; 
               $excerpt_more = apply_filters('excerpt_more', ' ' . $excerpt_end); 
           
               //$pos = strrpos($wpse_excerpt, '</');
               //if ($pos !== false)
               // Inside last HTML tag
               //$wpse_excerpt = substr_replace($wpse_excerpt, $excerpt_end, $pos, 0); /* Add read more next to last word */
               //else
               // After the content
               $wpse_excerpt .= $excerpt_more; /*Add read more in new paragraph */
           }
           $wpse_excerpt = substr($wpse_excerpt, 0, -1);  
           $wpse_excerpt .= '...';

            return $wpse_excerpt;   

        }
        return apply_filters('wpse_custom_wp_trim_excerpt', $wpse_excerpt, $raw_excerpt);
    }

endif; 

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'wpse_custom_wp_trim_excerpt'); 

add_filter( 'get_avatar','get_local_avatar' , 10, 6 );
 
function get_local_avatar($avatar, $author, $size, $default, $alt, $args) {
  // ------------------------------------
  // handle user passed by email or by id
  if(get_user_by('ID', $author) || get_user_by('email', $author)){
  if(stristr($author,"@")) $autore = get_user_by('email', $author);
    else $autore = get_user_by('ID', $author);
 
  $url = get_the_author_meta( 'userpicprofile', $autore->ID);
  if($url) {
    return "<img class='autor-profile-pic img-fluid' alt=\"".$alt."\" src='".$url."' width='".$size."' />";
  } else {
    return $avatar;
  }
}else{
    return $avatar;
}
}
// --------------------------------------
// add the field in your user edit profile page
function add_author_image( $contactmethods ) {
  $contactmethods['userpicprofile'] = 'URL for profile image';
  return $contactmethods;
}
add_filter('user_contactmethods','add_author_image',10,1);

function wpb_author_info_box($type=1, $author=0) {
    //if the block needs to be displayed in a page that doesn't have an author, $author should be passed and $post->post_author should be rewrited.

    global $post;

    $info_autor = [];
     
    // Detect if it is a single post with a post author
    if ( is_single() || is_author() && isset( $post->post_author ) ) {
     
    // Get author's display name
    $info_autor['name'] = get_the_author_meta( 'display_name', $post->post_author );
    
     
    // If display name is not available then use nickname as display name
    if ( empty( $display_name ) )
    $info_autor['nick'] = get_the_author_meta( 'nickname', $post->post_author );
     
    // Get author's biographical information or description
    $info_autor['desc'] = get_the_author_meta( 'user_description', $post->post_author );
     
    // Get author's website URL
    $info_autor['url'] = get_the_author_meta('url', $post->post_author);

    $info_autor['img_url'] = get_avatar( get_the_author_meta('user_email') , 300, '', 'Imagen de autor', $args = array('class' => 'img-fluid'));
     
    // Get link to the author archive page
    $info_autor['posts_url'] = get_author_posts_url( get_the_author_meta( 'ID' , $post->post_author));

    //Get social network links to the author
    $linkedin = "";
    $facebook = "";
    $twitter = "";
    $instagram = "";

    $info_autor['linkedin'] =  get_the_author_meta( 'linkedin' , $post->post_author);
    $info_autor['facebook'] =  get_the_author_meta( 'facebook' , $post->post_author);
    $info_autor['twitter'] =  get_the_author_meta( 'twitter' , $post->post_author);
    $info_autor['instagram'] =  get_the_author_meta( 'instagram' , $post->post_author);

    if($info_autor['linkedin']){
        $linkedin = "<a href='{$info_autor['linkedin']}' target='_blank'>
            <img src='https://www.iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/img/ico-redes/icon_in_blue_iexe.png' alt='' class='autor-red'>
        </a>";    
    }
    if($info_autor['facebook']){
        $facebook = "<a href='{$info_autor['facebook']}' target='_blank'>
            <img src='https://www.iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/img/ico-redes/icon_fb_blue_iexe.png' alt='' class='autor-red'>
        </a>";   
    }
    if($info_autor['twitter']){
        $twitter = "<a href='{$info_autor['twitter']}' target='_blank'>
            <img src='https://www.iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/img/ico-redes/icon_tw_blue_iexe.png' alt='' class='autor-red'>
        </a>";   
    }
    if($info_autor['instagram']){
        $instagram = "<a href='{$info_autor['instagram']}' target='_blank'>
            <img src='https://www.iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/img/ico-redes/icon_ig_blue_iexe.png' alt='' class='autor-red'>
        </a>";   
    }

    
     
    if ( ! empty( $display_name ) )
     
    $author_details = '<p class="author_name">Más del Autor ' . $display_name . '</p>';
     
    if ( ! empty( $user_description ) )
    // Author avatar and bio
     
    $author_details .= '<p class="author_details">' . get_avatar( get_the_author_meta('user_email') , 300, '', 'Imagen de autor', array('class' => 'img-fluid img-avatar')) . nl2br( $user_description ). '</p>';
     
    $author_details .= '<p class="author_links"><a href="'. $user_posts .'">Ver sus posts ' . $display_name . '</a>';  
     
    // Check if author has a website in their profile
    if ( ! empty( $user_website ) ) {
     
    // Display author website link
    $author_details .= ' | <a href="' . $user_website .'" target="_blank" rel="nofollow">Website</a></p>'; 
     
    } else {
    // if there is no author website then just close the paragraph
    $author_details .= '</p>';
    }
     
    // Pass all this info to post content
    $contenido = '<footer class="author_bio_section" >' . $author_details . '</footer>';
    }
    if ($type == 1){
        $cagb_resultado = "
    <section id='info-autor'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-2 col-4 offset-1 offset-md-0'>
                    {$info_autor['img_url']}
                </div>
                <div class='col-md-3 col-6'>
                    <p class='nombre-autor'>{$info_autor['name']}</p>
                    Redactor en <b>EXPOST</b><br>
                    Redes sociales<br>
                    <div class='redes-sociales-autor'>
                        {$facebook}{$linkedin}{$twitter}{$instagram}
                   </div>
                </div>
                <div class='col-md-7 col-12'>
                    <p class='bio-autor'>{$info_autor['desc']} </p>
                </div>
            </div>
        </div>
    </section>
        ";
    }else{
        $cagb_resultado = "
        <section id='info-autor'>
            <div class='container'>
                <div class='row'>
                    <div class='col-md-2 col-6'>
                        {$info_autor['img_url']}
                    </div>
                    <div class='col-md-3 col-6'>
                        <p class='nombre-autor'>{$info_autor['name']}</p>
                        Redactor en <b>EXPOST</b><br>
                        Redes sociales:<br>
                        {$facebook}{$linkedin}{$twitter}{$instagram}
                    </div>
                    <div class='col-md-7 col-12'>
                        <p class='bio-autor'>{$info_autor['desc']} </p>
                    </div>
                </div>
            </div>
        </section>
            ";
    }
    
    return $cagb_resultado;
    }

function iexe_unicorn_body() {

	global $post; 
    if($post){
	    $postclass = $post->post_name;
    }else{
        $postclass = 'sin-definir';
    }
 
	if (is_home()) {
		echo ' id="home"';

	} elseif (is_single()) {
		echo ' id="single" class="'.$postclass.'"';

	} elseif (is_search()) {
		echo ' id="search"';

	} elseif (is_archive()) {
		echo ' id="archive"';

	}elseif(is_page()){

        if(is_page_template('academicos.php')){
            echo 'id="programas"';
        }elseif(is_page_template('academicos-v2.php')){
            echo "id='" . cagb_stripAccents(get_field('tipo')) ."'";
        }else{
            echo "id = '" . strtolower(get_the_title()) . "'";
        }
    }
}
function cagb_stripAccents($str) {
    return strtr(utf8_decode($str), utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'), 'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
}

if ( ! function_exists( 'iexe_unicorn_registra_nav_menu' ) ) {
 
    function iexe_unicorn_registra_nav_menu(){
        register_nav_menus( array(
            'menu_primero'  => 'Footer columna 1',
            'menu_segundo'  => 'Footer columna 2',
            'menu_tercero'  => 'Footer columna 3',
            'pie_principal' => 'pie principal',
            'menu_expost' => 'Header Expost',
            'menu_principal' => 'Menu Principal'
        ) );
}
    add_action( 'after_setup_theme', 'iexe_unicorn_registra_nav_menu', 0 );
}
add_filter('comment_form_default_fields', 'iexe_unicorn_unset_url_field');
function iexe_unicorn_unset_url_field($fields){
    if(isset($fields['url']))
       unset($fields['url']);
       return $fields;
}
// No usar email para registro

add_action('user_profile_update_errors', 'my_user_profile_update_errors', 10, 3);
function my_user_profile_update_errors($errors, $update, $user) {
    $errors->remove('empty_email');
}

// Remove support for Guttemberg
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
   } 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

// Adding support for google cdn por jquery Lookup to improve speed load and eliminate (as possible) the blocking render resources.

add_action('init', 'use_jquery_from_google');

function use_jquery_from_google () {
	if (is_admin()) {
		return;
	}

	global $wp_scripts;
	if (isset($wp_scripts->registered['jquery']->ver)) {
		$ver = $wp_scripts->registered['jquery']->ver;
                $ver = str_replace("-wp", "", $ver);
	} else {
		$ver = '1.12.4';
	}

	wp_deregister_script('jquery');
	wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/$ver/jquery.min.js", false, $ver);
}
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
      $atts['class'] = $args->link_class;
    }
    return $atts;
  }
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
add_action('user_new_form', 'my_user_new_form', 10, 1);
add_action('show_user_profile', 'my_user_new_form', 10, 1);
add_action('edit_user_profile', 'my_user_new_form', 10, 1);
function my_user_new_form($form_type) {
    ?>
    <script type="text/javascript">
    jQuery('#email').closest('tr').removeClass('form-required').find('.description').remove();

    <?php if (isset($form_type) && $form_type === 'add-new-user') : ?>
        jQuery ('#send_user_notification') .removeAttr('checked');
    <?php endif; ?>
    </script>
    <?php
}

// Function to handle the thumbnail request
function get_the_post_thumbnail_src($img)
{
  return (preg_match('~\bsrc="([^"]++)"~', $img, $matches)) ? $matches[1] : '';
}
function unicorn_boton_compartir($content) {
    global $post;
    if(is_singular() || is_home()){
    
        // Get current page URL 
        $sb_url = urlencode(get_permalink());
 
        // Get current page title
        $sb_title = str_replace( ' ', '%20', get_the_title());
        
        // Get Post Thumbnail for pinterest
        //$sb_thumb = get_the_post_thumbnail_src(get_the_post_thumbnail());
        $sb_thumb = 'https://iexe.xyz/wp-content/uploads/2021/08/LGBT-Miniatura-PP-Blog-900x508.jpg';
 
        // Construct sharing URL without using any script
        $twitterURL = 'https://twitter.com/intent/tweet?text='.$sb_title.'&amp;url='.$sb_url;
        $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$sb_url;
        $whatsappURL = 'whatsapp://send?text='.$sb_title . ' ' . $sb_url;
        $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$sb_url.'&amp;title='.$sb_title;

        // Add sharing button at the end of page/page content
        $content .= '<div class="social-box"><div class="social-btn">';
        $content .= '<a class="col-1 sbtn s-twitter" href="'. $twitterURL .'" target="_blank" rel="nofollow"><span><img src="https://www.iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/img/ico-redes/icon_tw_blue_iexe.png" /></span></a>';
        $content .= '<a class="col-1 sbtn s-facebook" href="'.$facebookURL.'" target="_blank" rel="nofollow"><span><img src="https://www.iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/img/ico-redes/icon_fb_blue_iexe.png" /></span></a>';
        //$content .= '<a class="col-2 sbtn s-whatsapp" href="'.$whatsappURL.'" target="_blank" rel="nofollow"><span><i class="uil uil-whatsapp"></i></a>';
        //$content .= '<a class="col-2 sbtn s-whatsapp" href="'.$whatsappURL.'" target="_blank" rel="nofollow"><span><i class="uil uil-whatsapp"></i></span></a>';
        $content .= '<a class="col-2 sbtn s-linkedin" href="'.$linkedInURL.'" target="_blank" rel="nofollow"><span><img src="https://www.iexe.edu.mx/wp-content/themes/iexe-unicorn/assets/img/ico-redes/icon_in_blue_iexe.png" /></span></a>';
        //$content .= '<a class="col-2 sbtn s-linkedin" href="'.$linkedInURL.'" target="_blank" rel="nofollow"><span><i class="uil uil-linkedin"></i></span></a>';
        $content .= '</div></div>';
        
        return $content;
    }else{
        // if not a post/page then don't include sharing button
        return $content;
    }
};
add_shortcode('social','unicorn_boton_compartir');

function wpb_tag_cloud() { 
    $tags = get_tags();
    $args = array(
        'smallest'                  => 12, 
        'largest'                   => 12,
        'unit'                      => 'px', 
        'number'                    => 6,  
        'format'                    => 'flat',
        'separator'                 => " ",
        'orderby'                   => 'count', 
        'order'                     => 'DESC',
        'show_count'                => false,
        'echo'                      => false
    ); 
     
    $tag_string = wp_generate_tag_cloud( $tags, $args );
     
    return $tag_string; 
     
    } 
    function cagb_tag_cloud(){
        $cagb_the_cloud = wp_tag_cloud(array(
            'smallest'                  => 12, 
            'largest'                   => 12,
            'unit'                      => 'px', 
            'number'                    => 6,  
            'format'                    => 'flat',
            'separator'                 => " ",
            'orderby'                   => 'count', 
            'order'                     => 'DESC',
            'show_count'                => false,
            'echo'                      => false
        ));
        return $cagb_the_cloud;
    }

/**
 * Count words ann store it as post meta
 */

add_filter('manage_posts_columns', 'cagb_add_column');
function cagb_add_column($cagb_wordcount_column) {
    $cagb_wordcount_column['cagb_wordcount'] = 'Conteo de palabras';
    return $cagb_wordcount_column;
}
  
//Link the word count to our new column//
add_action('manage_posts_custom_column',  'cagb_display_wordcount'); 
function cagb_display_wordcount($name) 
{
   global $post;
   switch ($name)
{
     case 'cagb_wordcount':
        //Get the post ID and pass it into the get_wordcount function//
            $cagb_wordcount = cagb_get_wordcount($post->ID);
            echo $cagb_wordcount;
     }
}
 
function cagb_get_wordcount($post_id) {
     //Get the post, remove any unnecessary tags and then perform the word count// 
     $cagb_wordcount = str_word_count( strip_tags( strip_shortcodes(get_post_field( 'post_content', $post_id )) ) );
      return $cagb_wordcount;
}

add_action('save_post', 'cagb_save_time');
function time_to_read($words){
    //define("PA_PM" , 200);

    $cagb_total = intval($words/200);
    if($cagb_total == 0){
        $cagb_total = 1;
    }

    return $cagb_total;
}

function cagb_save_time($post_id){
    // if ( 'post' !== $post->post_type ) {
	// 	return;
	// }
    $time = strval(time_to_read(cagb_get_wordcount($post_id)));
    update_post_meta($post_id,'time_to_read', $time);

}

function limit_to_n_tags($terms) {
    return array_slice($terms,0,12,true);
}
add_filter('term_links-post_tag','limit_to_n_tags');
/*
* Boostrap 4 Pagination for WordPress
* Author: Renz R.
* Author URL: https://www.renzramos.com
* Created At: 2019-01-01
* Updated At: 2021-02-08
* Intructions: Include this file and then use wp_boostrap_4_pagination() after the loop.
*/

function wp_boostrap_4_pagination(){

    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Check number of pages **/
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="pagination-container"><ul class="pagination">' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li class="page-item">%s</li>' . "\n", get_previous_posts_link() );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="page-item active"' : ' class="page-item"';
 
        printf( '<li%s><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="page-item active"' : ' class="page-item"';
        printf( '<li%s><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="page-item active"' : ' class="page-item"';
        printf( '<li%s><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li class="page-item">%s</li>' . "\n", get_next_posts_link() );
 
    echo '</ul></div>' . "\n";
 
}
/*
* Cookie set to get user origin
*/
add_action('init', function() {
    setcookie('el_origen', null, strtotime('-1 day'));
    if(isset($_GET['origen'])){

        if (!isset($_COOKIE['el_origen'])) {
            setcookie('el_origen', $_GET['origen'], strtotime('+30 day'));
        }
    } 
});

/*
* Custom Attribute for links
*/

add_filter('next_posts_link_attributes', 'wp_boostrap_4_pagination_posts_link_attributes');
add_filter('previous_posts_link_attributes', 'wp_boostrap_4_pagination_posts_link_attributes');

function wp_boostrap_4_pagination_posts_link_attributes() {
    return 'class="page-link"';
}
 
/**
 * Sidebar Editorial.
 */
function iexe_unicorn_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Editorial Sidebar', 'iexe-unicorn' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Sidebar para Editorial', 'iexe-unicorn' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'iexe_unicorn_widgets_init' );

/**
 * Sidebar Editorial-single.
 */
function iexe_unicorn_widget_2_init() {
    register_sidebar( array(
        'name'          => __( 'Producto Sidebar', 'iexe-unicorn' ),
        'id'            => 'sidebar-producto',
        'description'   => __( 'Sidebar para Producto de Editorial', 'iexe-unicorn' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'iexe_unicorn_widget_2_init' );
/**
 * Requisitos programas
 */
$requisitos_licenciatura = "<li>Acta de nacimiento original</li><li>Copia de CURP</li><li>Certificado de término de bachillerato o preparatoria, debidamente legalizado (en caso de que se encuentre en trámite, constancia reciente donde lo avale).</li>";
$requisitos_maestria = "<li>Acta de nacimiento original.</li><li>Copia de CURP.</li><li>Copia de título profesional de licenciatura (en caso de que se encuentre en trámite constancia de titulación en trámite y copia de acta de examen profesional).</li><li>Copia de cédula profesional federal de licenciatura (en caso de que se encuentre en trámite, constancia de titulación en trámite).</li><li>El/la aspirante que ingresa a la maestría como opción de titulación de la licenciatura, deberá entregar además los 2 siguientes requisitos:</li><ul><li>A) Certificado original de término de la licenciatura debidamente legalizado.</li><li>B) Carta OTEM original (oficio de su universidad de procedencia donde le autoriza titularse por estudios de maestría).</li>";
$requisitos_master ="<li>Acta de Nacimiento, CURP o Carnet de Identificación.</li>";
$requisitos_diplomado ="<li>Copia de CURP</li><li> Comprobante de licenciatura concluida (carta pasante, certificado total, título o cédula)</li>";
$requisitos_doctorado = "<li>Acta de nacimiento Original</li><li>Copia de Curp</li><li>Copia de grado de maestría (en caso de que se encuentre en trámite constancia de titulación en trámite y copia de acta de examen de grado).</li><li>Copia de cédula profesional de maestría (en caso de que se encuentre en trámite constancia de titulación en trámite).</li>";

add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {

	$tabs['description']['title'] = " ";		// Rename the description tab


	return $tabs;

}

/* Comments new field */

    // Add phone number field

    function add_review_phone_field_on_comment_form() {
        echo '<p class="comment-form-phone uk-margin-top"><label class="for-phone" for="phone">' . 'Teléfono ' . '</label><input class="uk-input uk-width-large uk-display-block" type="text" name="phone" id="phone"/></p>';
    }
    add_action( 'comment_form_logged_in_after', 'add_review_phone_field_on_comment_form' );
    add_action( 'comment_form_after_fields', 'add_review_phone_field_on_comment_form' );


    // Save phone number
    add_action( 'comment_post', 'save_comment_review_phone_field' );
    function save_comment_review_phone_field( $comment_id ){
        if( isset( $_POST['phone'] ) )
          update_comment_meta( $comment_id, 'telefono', esc_attr( $_POST['phone'] ) );
    }

    function print_review_phone( $id ) {
        $val = get_comment_meta( $id, "telefono", true );
        $title = $val ? '<strong class="review-phone">' . $val . '</strong>' : '';
        return $title;
    }

    // Print phone number - remove if not needed to show in front end
    add_action('woocommerce_review_before_comment_meta', 'get_comment_phone' );
    function get_comment_phone($comment){
        echo print_review_phone($comment->comment_ID);
    }

    add_filter('manage_edit-comments_columns', 'my_add_comments_columns');

function my_add_comments_columns($my_cols) {

    $temp_columns = array(
        'phone' => 'Telefono'
    );
    $my_cols = array_slice($my_cols, 0, 3, true) + $temp_columns + array_slice($my_cols, 3, NULL, true);

    return $my_cols;
}
add_action('manage_comments_custom_column', 'my_add_comment_columns_content', 10, 2);

function my_add_comment_columns_content($column, $comment_ID) {
    global $comment;
    switch ($column) :

        case 'phone' : {

                echo get_comment_meta($comment_ID, 'phone', true);
                break;
            }
    endswitch;
}
function exclude_post_categories($excl='3,35', $spacer=' '){
    $categories = get_the_category($post->ID);
       if(!empty($categories)){
         $exclude=$excl;
         $exclude = explode(",", $exclude);
         $thecount = count(get_the_category()) - count($exclude);
         foreach ($categories as $cat) {
             $html = '<ul class="post-categories">';
             if(!in_array($cat->cat_ID, $exclude)) {
                 $html .= "<li>";
                 $html .= '<a href="' . get_category_link($cat->cat_ID) . '" ';
                 $html .= 'title="' . $cat->cat_name . '">' . $cat->cat_name . '</a>';
                 $html .= '</li>';
                 if($thecount>1){
                     $html .= $spacer;
                 }
             $thecount--;
             $html .= '</ul>';
             echo $html;
             }
           }
       }
 }
 /* Return the Add Banner */
function cagb_return_banner($post_id = 0) {
    $default = get_field('banner_por_default', 3505);
    $bannerA = get_field('banner_1');
    $bannerB = get_field('banner_2');
    $default_url = $default['url_banner_forzado'];
    $default_banner = $default['url'];

    $bannerA_img = esc_url($bannerA['url']);
    $bannerA_url = esc_url(get_field('link_rotacion_a'));
    $bannerB_img = esc_url($bannerB['url']);
    $bannerB_url = esc_url(get_field('link_rotacion_b'));

    $forzado = get_field('banner_forzado', 3505);
    

    if($forzado){
        $bannerForzado_img = $forzado['url'];
        $bannerForzado_url = $forzado['url_banner_forzado'];
        echo "
            <a href='{$bannerForzado_url}' target='_blank'>
                <img src='{$bannerForzado_img}' class='img-fluid' alt='banner IEXE' />
            </a>";
        
    }else{
        $factor = rand(1,100)*.01;
        if(($bannerA && $factor > 0.5) || ($bannerA and !$bannerB)) {
            echo "
            <a href='$bannerA_url' target='_blank'>
                <img src='{$bannerA_img}' class='img-fluid' alt='banner IEXE' />
            </a>";
        }elseif($bannerB){
            echo "
            <a href='$bannerB_url' target='_blank'>
                <img src='{$bannerB_img}' class='img-fluid' alt='banner IEXE' />
            </a>";
        }else{
            echo "
            <a href='{$default_url}' target='_blank'>
                <img src='{$default_banner}' class='img-fluid' alt='banner IEXE' />
            </a>";
        }

    }

    }
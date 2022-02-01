<?php
/* CONSTANTES DE PROGRAMAS
========================================== */
define('MAXIMAS_MATERIAS' , 7);
define('MAXIMOS_PERIODOS' , 10);
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_image_size( 'destacada-archivo', 600, 420 , true );
add_image_size( 'ultimas-archivo', 400, 280 , true );
add_image_size('destacada-post-header', 900 , 508, true );
add_image_size('destacada-interesar', 374 , 210, true );
// global $post; 
// 	    $unicorn_id = $post->id;
//add_theme_support( 'woocommerce' );

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


function agregar_estilos_tema(){
    wp_register_style( 'iexe-unicorn-main', get_template_directory_uri() . '/assets/css/style.css' , 'bootstrap', '1.19', 'all'  );
    wp_register_style( 'iexe-unicorn-programas-estilo', get_template_directory_uri() . '/assets/css/programas.css', 'iexe-unicorn-main', '1.03', 'all' );
    wp_register_style( 'iexe-unicorn-blog', get_template_directory_uri() . '/assets/css/blog.css', 'iexe-unicorn-main', '1.0', 'all' );
    wp_register_style( 'iexe-unicorn-becas-estilo', get_template_directory_uri() . '/assets/css/becas.css', 'iexe-unicorn-main', '1.0', 'all' );
    wp_register_style( 'iexe-unicorn-admisiones-estilo', get_template_directory_uri() . '/assets/css/admisiones.css', 'iexe-unicorn-main', '1.0', 'all' );
    wp_register_style( 'iexe-unicorn-programas-academicos', get_template_directory_uri() . '/assets/css/programas-academicos.css', 'iexe-unicorn-main', '1.0', 'all' );
    wp_register_style( 'iexe-unicorn-capacitaciones', get_template_directory_uri() . '/assets/css/capacitaciones.css', 'iexe-unicorn-main', '1.0', 'all' );
    wp_register_style( 'iexe-unicorn-modals', get_template_directory_uri() . '/assets/css/modal.css', 'iexe-unicorn-main', '1.0', 'all' );
    wp_register_style( 'iexe-unicorn-comunidad', get_template_directory_uri() . '/assets/css/comunidad.css', 'iexe-unicorn-main', '1.0', 'all' );
    wp_register_style( 'iexe-unicorn-landing-ssp', get_template_directory_uri() . '/assets/css/landing-ssp.css', 'iexe-unicorn-main', '1.0', 'all' );
    wp_register_style( 'iexe-unicorn-landing-ssp-2', get_template_directory_uri() . '/assets/css/landing-ssp-2.css', 'iexe-unicorn-main', '1.0', 'all' );
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

    wp_register_script( 'iexe-unicorn-admisiones', get_template_directory_uri() . '/assets/js/admisiones.js', 'jquery', '1.0', true );
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css', false, '4.6', 'all' );
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', false, '3.6.0', true );
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', 'jquery', '4.6.0', 'all' );
    wp_enqueue_script( 'jquery-mockjax', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-mockjax/2.6.0/jquery.mockjax.min.js', 'jquery', '2.6.0', true );
    wp_enqueue_script( 'jquery-autocomplete');
    wp_enqueue_script( 'iexe-unicorn-valores');
    wp_enqueue_script( 'iexe-unicorn-init-busqueda');
    
    
    if(!is_page() || !is_page_template( 'academicos.php' ) ){
        wp_enqueue_style( 'iexe-unicorn-blog');
        wp_enqueue_script( 'iexe-unicorn-blog');
    }
    
    wp_enqueue_style( 'iexe-unicorn-main' );
    wp_enqueue_style( 'iexe-unicorn-modals');
    if(is_page_template('academicos.php')){
        wp_enqueue_style('iexe-unicorn-programas-estilo');
        wp_enqueue_script( 'iexe-unicorn-programas');
    }

    if(is_page_template('becas.php')){
        wp_enqueue_script( 'iexe-unicorn-becas');
        wp_enqueue_style( 'iexe-unicorn-becas-estilo');
        wp_enqueue_script('iexe-unicorn-multipasos');
    }
    if(is_page_template('admisiones.php')){
        wp_enqueue_script( 'iexe-unicorn-admisiones');
        wp_enqueue_style( 'iexe-unicorn-admisiones-estilo');
        wp_enqueue_script('iexe-unicorn-multipasos');
        wp_enqueue_script( 'validate-js');
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
    if(is_page_template('page-landing-1.php')){
        wp_enqueue_style( 'iexe-unicorn-landing-ssp');
        wp_enqueue_script('iexe-unicorn-landing'); 
    }
    if(is_page_template('page-landing-2.php')){
        wp_enqueue_style( 'iexe-unicorn-landing-ssp-2');
        wp_enqueue_script('iexe-unicorn-landing'); 
    }
    if(is_page_template('page-landing-ssp-2.php')){
        wp_enqueue_style( 'iexe-unicorn-landing-ssp-2');
        wp_enqueue_script('iexe-unicorn-landing'); 
    }
    wp_enqueue_style('intlTelinput-style');
    wp_enqueue_script('intlTelinput');

}
add_action( 'wp_enqueue_scripts', 'agregar_estilos_tema' );

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
            $wpse_excerpt = str_replace(']]>', ']]&gt;', $wpse_excerpt);
            $wpse_excerpt = strip_tags($wpse_excerpt, wpse_allowedtags()); /*IF you need to allow just certain tags. Delete if all tags are allowed */

            //Set the excerpt word count and only break after sentence is complete.
                $excerpt_word_count = 10;
                $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count); 
                $tokens = array();
                $excerptOutput = '';
                $count = 0;

                // Divide the string into tokens; HTML tags, or words, followed by any whitespace
                preg_match_all('/(<[^>]+>|[^<>\s]+)\s*/u', $wpse_excerpt, $tokens);

                foreach ($tokens[0] as $token) { 

                    if ($count >= $excerpt_length && preg_match('/[\,\;\?\.\!]\s*$/uS', $token)) { 
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
        }else{
            echo "id = '" . strtolower(get_the_title()) . "'";
        }
    }
}

if ( ! function_exists( 'iexe_unicorn_registra_nav_menu' ) ) {
 
    function iexe_unicorn_registra_nav_menu(){
        register_nav_menus( array(
            'menu_primero'  => 'Footer columna 1',
            'menu_segundo'  => 'Footer columna 2',
            'menu_tercero'  => 'Footer columna 3',
            'pie_principal' => 'pie principal',
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
        $content .= '<a class="col-1 sbtn s-twitter" href="'. $twitterURL .'" target="_blank" rel="nofollow"><span><i class="uil uil-twitter"></i></span></a>';
        $content .= '<a class="col-1 sbtn s-facebook" href="'.$facebookURL.'" target="_blank" rel="nofollow"><span><i class="uil uil-facebook-f"></i></span></a>';
        $content .= '<a class="col-2 sbtn s-whatsapp" href="'.$whatsappURL.'" target="_blank" rel="nofollow"><span><i class="uil uil-whatsapp"></i></span></a>';
        $content .= '<a class="col-2 sbtn s-linkedin" href="'.$linkedInURL.'" target="_blank" rel="nofollow"><span><i class="uil uil-linkedin"></i></span></a>';
        $content .= '</div></div>';
        
        return $content;
    }else{
        // if not a post/page then don't include sharing button
        return $content;
    }
};
add_shortcode('social','unicorn_boton_compartir');

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
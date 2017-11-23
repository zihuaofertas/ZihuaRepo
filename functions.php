<?php

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

add_filter('gform_field_value_author_email', 'populate_post_author_email');
function populate_post_author_email($value){
    global $post;

    $author_email = get_the_author_meta('email', $post->post_author);

    return $author_email;
}

function zo_widgets_init() {

    register_sidebar( array(
        'name' => 'widgets_sidebar_ofertas_single',
        'id' => 'widgets_sidebar_ofertas_single'
    ) );


}
add_action( 'widgets_init', 'zo_widgets_init' );

add_theme_support( 'post-thumbnails' );
//cambiar el mistery man por el logo (hay que activarlo en el admin de avatares dentro de wp)
add_filter( 'avatar_defaults', 'newgravatar' );
function newgravatar ($avatar_defaults) {
    $myavatar = get_bloginfo('template_directory') . '/img/ZihuaOfertasLogo.svg';
    $avatar_defaults[$myavatar] = "Own";
    return $avatar_defaults;
}

add_filter( 'flp/redirect_url' , 'register_redirect_url');
function register_redirect_url( $url ) {
if ( isset( $GLOBALS['pagenow'] ) &&  $GLOBALS['pagenow']== 'wp-login.php' && isset( $_GET['action']) && 'register' == $_GET['action']  )
            $url = 'http://zihuaofertas.com/zihuaofertas/edita-los-datos-de-tu-negocio';

return $url;
}

add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );
?>

<?php 

$t_url = get_stylesheet_directory_uri();

function t_url() {
	global $t_url;
	echo $t_url;
}

/* Setup */

add_action( 'after_setup_theme', 'my_setup' );

function my_setup() {
	register_nav_menu( 'primary', 'Menu' );
	register_nav_menu( 'secondary', 'Coleção' );

	//update_option( 'thumbnail_size_w', 125 );
	//update_option( 'thumbnail_size_h', 114 );
	//update_option( 'large_size_w', 840 );
	//update_option( 'large_size_h', 584 );

	add_image_size( 'image-home', 570, 826, true );
	add_image_size( 'image-widget', 362, 291, true );
}

/* Actions */

add_action( 'wp', 'my_page_redirect' );
add_action( 'wp_enqueue_scripts', 'my_scripts' );

function my_page_redirect() {
	global $post;
	if ( $redirect_to = get_field( 'redirect_to', $post->ID ) ) {
		wp_redirect( $redirect_to, 301 );
		exit;
	}
}

function my_scripts() {
	global $post, $t_url;
	
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://code.jquery.com/jquery-1.9.1.min.js"', array(), null, true );

	if ( is_front_page() || is_page_template( 'template-a-marca.php' ) || is_page_template( 'template-campanha.php' ) || is_page_template( 'template-colecao.php' ) ) {
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'interface', "{$t_url}/js/interface.js", array( 'jquery' ), filemtime( TEMPLATEPATH . '/js/interface.js' ), true );
	}
}

/* Admin */

add_action( 'admin_menu', 'remove_menus' );
add_filter( 'acf/options_page/settings', 'my_acf_options_page_settings' );

function my_acf_options_page_settings( $settings ) {
	$settings['title'] = 'Redes Sociais';
	return $settings;
}

function remove_menus() {
	global $menu;
	$restricted = array( __('Posts'), __('Links'), __('Tools'), __('Comments') );
	end( $menu );
	while( prev( $menu ) ) {
		$value = explode( ' ',$menu[key( $menu )][0] );
		if ( in_array( $value[0] != NULL ? $value[0] : "" , $restricted ) ) 
			unset( $menu[key( $menu )] );
	}
}

<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!-- WP/ --><?php wp_head(); ?><!-- /WP -->
</head>
<body <?php body_class( "page-{$post->post_name}" ); ?>>
	<header id="head" class="cf">
<?php 	if ( is_front_page() ) : ?>
		<h1 id="logo"><img src="<?php t_url(); ?>/img/andrea-puglia.png" alt="<?php bloginfo( 'name' ); ?>" class="logo" width="332" height="56"></h1>
<?php 	else : ?>
		<div id="logo"><a href="<?php echo home_url( '/' ); ?>"><img src="<?php t_url(); ?>/img/andrea-puglia.png" alt="<?php bloginfo( 'name' ); ?>" class="logo" width="332" height="56"></a></div>
<?php 	endif; ?>
		<?php 
		wp_nav_menu( array(
			'theme_location'  => 'primary',
			'container'       => 'nav', 
			'container_id'    => 'nav',
			'menu_id'         => 'menu',
			'fallback_cb'     => null,
			'depth'           => 1,
		) ); 
		?>

		<a href="http://www.fabricadasmeninas.com.br/" id="compra-online" target="_blank">Compre Online</a>

		<ul id="social">
<?php 		if ( $fb = get_field( 'facebook', 'options' ) ) : ?>
			<li class="social-item"><a href="<?php echo $fb; ?>" target="_blank"><img src="<?php t_url(); ?>/img/icon-facebook.png" alt="Facebook" class="block" width="25" height="25"></a></li>
<?php 		endif;
			if ( $tw = get_field( 'twitter', 'options' ) ) : ?>
			<li class="social-item"><a href="<?php echo $tw; ?>" target="_blank"><img src="<?php t_url(); ?>/img/icon-twitter.png" alt="Twitter" class="block" width="25" height="25"></a></li>
<?php 		endif;
			if ( $yt = get_field( 'youtube', 'options' ) ) : ?>
			<li class="social-item"><a href="<?php echo $yt; ?>" target="_blank"><img src="<?php t_url(); ?>/img/icon-youtube.png" alt="Youtube" class="block" width="25" height="25"></a></li>
<?php 		endif;
			if ( $ig = get_field( 'instagram', 'options' ) ) : ?>
			<li class="social-item"><a href="<?php echo $ig; ?>" target="_blank"><img src="<?php t_url(); ?>/img/icon-instagram.png" alt="Instagram" class="block" width="25" height="25"></a></li>
<?php 		endif; ?>
		</ul>
	</header>

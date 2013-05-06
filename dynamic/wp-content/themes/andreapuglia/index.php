<?php 
/*
Template name: Home
*/
$frontpage_id = get_option('page_on_front');
$fields = (object) array(
	'destaque_img' => get_field( 'destaque_img', $frontpage_id ),
	'destaque_url' => get_field( 'destaque_url', $frontpage_id ),
	'widgets' => get_field( 'widgets', $frontpage_id ),
);
?>
<?php get_header(); ?>
	<section id="body" class="cf">
		<div class="home-content">
<?php 		if ( $url = $fields->destaque_url ) : ?>
			<a href="<?php echo $url; ?>"><img src="<?php 
			echo $fields->destaque_img['sizes']['image-home']; 
			?>" alt="" class="block" width="<?php 
			echo $fields->destaque_img['sizes']['image-home-width']; 
			?>" height="<?php 
			echo $fields->destaque_img['sizes']['image-home-height']; 
			?>"></a>
<?php 		else : ?>
			<img src="<?php 
			echo $fields->destaque_img['sizes']['image-home']; 
			?>" alt="" class="block" width="<?php 
			echo $fields->destaque_img['sizes']['image-home-width']; 
			?>" height="<?php 
			echo $fields->destaque_img['sizes']['image-home-height']; 
			?>">
<?php 		endif; ?>
		</div>
		<div class="widgets">
<?php 		foreach( $fields->widgets as $i => $widget ) : ?>
			<div class="widget widget-<?php echo $i + 1; ?>">
<?php 			if ( $url = $widget['widget_url'] ) : ?>
				<a href="<?php echo $url; ?>"><img src="<?php 
				echo $widget['widget_img']['sizes']['image-widget']; 
				?>" alt="" class="block" width="<?php 
				echo $widget['widget_img']['sizes']['image-widget-width']; 
				?>" height="<?php 
				echo $widget['widget_img']['sizes']['image-widget-height']; 
				?>"></a>
<?php 			else : ?>
				<img src="<?php 
				echo $widget['widget_img']['sizes']['image-widget']; 
				?>" alt="" class="block" width="<?php 
				echo $widget['widget_img']['sizes']['image-widget-width']; 
				?>" height="<?php 
				echo $widget['widget_img']['sizes']['image-widget-height']; 
				?>">
<?php 			endif; ?>
			</div>
<?php 		endforeach; ?>
<?php 		get_template_part( 'inc', 'newsletter' ); ?>
		</div>
<?php 	get_template_part( 'inc', 'instagram' ); ?>
	</section>
<?php get_footer(); ?>
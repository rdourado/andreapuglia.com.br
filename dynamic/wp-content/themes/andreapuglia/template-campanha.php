<?php 
/*
Template name: Campanha
*/
?>
<?php get_header(); ?>
	<div id="body" class="cf">
		<article class="hentry">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="entry-content">
<?php 		$images = get_field( 'attachments' );
			if ( $images ) :
				$first  = reset( $images ); ?>
				<div id="preview" class="preview">
					<img src="<?php 
					echo $first['sizes']['large']; 
					?>" alt="" id="container" class="block" width="<?php 
					echo $first['sizes']['large-width']; 
					?>" height="<?php 
					echo $first['sizes']['large-height']; 
					?>">
					<button type="button" class="prev"><span>«</span></button>
					<button type="button" class="next"><span>»</span></button>
				</div>
				<ul class="thumbnails">
<?php  				foreach( $images as $i => $img ) : ?>
					<li class="thumb"><a href="<?php 
					echo $img['sizes']['large']; 
					?>" data-index="<?php echo $i; ?>"><img src="<?php 
					echo $img['sizes']['thumbnail']; 
					?>" alt="" class="block" width="<?php 
					echo $img['sizes']['thumbnail-width']; 
					?>" height="<?php 
					echo $img['sizes']['thumbnail-height']; 
					?>"></a></li>
<?php 				endforeach; ?>
				</ul>
<?php 		endif; ?>
			</div>
		</article>
	</div>
<?php get_footer(); ?>
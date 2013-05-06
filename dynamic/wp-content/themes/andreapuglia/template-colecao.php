<?php 
/*
Template name: Coleção
*/
?>
<?php get_header( 'colecao' ); ?>
	<div id="body" class="cf">
		<article class="hentry">
			<h1 class="entry-title">Coleção</h1>
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
					<div class="info"><?php 
					$caption = trim( $first['caption'] );
					$caption = str_replace( '[', '<b>',  $caption );
					$caption = str_replace( ']', '</b>', $caption );
					echo nl2br( $caption );
					?></div>
					<button type="button" class="prev"><span>«</span></button>
					<button type="button" class="next"><span>»</span></button>
				</div>
				<ul class="thumbnails">
<?php  				foreach( $images as $i => $img ) : ?>
					<li class="thumb"><a href="<?php 
					echo $img['sizes']['large']; 
					?>" data-info="<?php 
					echo str_replace( "\n", '|', trim( $img['caption'] ) ); 
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
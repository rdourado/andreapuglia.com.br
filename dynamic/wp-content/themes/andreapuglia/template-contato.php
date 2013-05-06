<?php 
/*
Template name: Contato
*/
if ( function_exists( 'wpcf7_enqueue_scripts' ) ) 
	wpcf7_enqueue_scripts();
?>
<?php get_header(); ?>
	<div id="body" class="cf">
<?php 	while( have_posts() ) : the_post(); ?>
		<article class="hentry">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="entry-content">
				<div class="sideinfo">
					<?php the_content(); ?>
				</div>
				<?php echo do_shortcode( '[contact-form-7 id="23" title="Contato"]' ); ?>

			</div>
		</article>
<?php 	endwhile; ?>
	</div>
<?php get_footer(); ?>
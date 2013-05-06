<?php 
/*
Template name: A Marca
*/
?>
<?php get_header(); ?>
	<section id="body" class="cf">
<?php 	while( have_posts() ) : the_post(); ?>
		<article class="hentry">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>
<?php 	endwhile; ?>
		<div class="widgets">
<?php 		get_template_part( 'inc', 'newsletter' ); ?>
		</div>
<?php 	get_template_part( 'inc', 'instagram' ); ?>
	</section>
<?php get_footer(); ?>
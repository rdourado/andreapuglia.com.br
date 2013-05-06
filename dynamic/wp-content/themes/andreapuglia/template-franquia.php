<?php 
/*
Template name: Franquia
*/
if ( function_exists( 'wpcf7_enqueue_scripts' ) ) 
	wpcf7_enqueue_scripts();
?>
<?php get_header(); ?>
	<div id="body" class="cf">
		<article class="hentry">
			<h1 class="entry-title">Franquia</h1>
			<nav class="pages-nav">
				<ul class="pages-menu">
<?php 				wp_list_pages( array(
						'title_li' => '',
						'child_of' => $post->post_parent ? $post->post_parent : $post->ID,
					) ); ?>
				</ul>
			</nav>
<?php 		while( have_posts() ) : the_post(); ?>
			<div class="entry-content">
				<h2 class="page-title"><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
<?php 		endwhile; ?>
		</article>
	</div>
<?php get_footer(); ?>
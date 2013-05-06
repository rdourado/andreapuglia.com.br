<?php 
/*
Template name: Lojas
*/
?>
<?php get_header(); ?>
	<div id="body" class="cf">
		<article class="hentry">
			<h1 class="entry-title">Lojas</h1>
<?php 		while( have_posts() ) : the_post(); ?>
			<div class="sidebar">
				<nav class="pages-nav">
					<ul class="pages-menu">
<?php 					wp_list_pages( array(
							'depth' => 1,
							'title_li' => '',
							'child_of' => $post->post_parent ? $post->post_parent : $post->ID,
						) ); ?>
					</ul>
				</nav>
				<div class="address">
					<h2><?php the_title(); ?></h2>
					<address><?php the_field( 'address' ); ?></address>
				</div>
			</div>
			<div class="entry-content">
				<?php the_field( 'gmap' ); ?>
			</div>
<?php 		endwhile; ?>
		</article>
	</div>
<?php get_footer(); ?>
<?php get_header(); ?>
	<div id="body" class="cf">
<?php 	while( have_posts() ) : the_post(); ?>
		<article class="hentry">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="entry-content">
				<div class="sideinfo">
<?php 				$query = new WP_Query( 'page_id=10' );
					while( $query->have_posts() ) : 
						$query->the_post();
						the_content();
					endwhile;
					wp_reset_postdata(); ?>
				</div>
				<div class="wpcf7-form">
					<?php the_content(); ?>
				</div>
			</div>
		</article>
<?php 	endwhile; ?>
	</div>
<?php get_footer(); ?>
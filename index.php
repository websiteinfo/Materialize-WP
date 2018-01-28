<?php get_header(); ?>

<div class="row">
	<div class="col s12 m9 l9">

		
			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );
  
			endwhile; ?>

			<?php next_posts_link( 'Older posts' ); ?>
			<?php previous_posts_link( 'Newer posts' ); ?>
			<?php
			endif; 
			?>

		
	</div> <!-- /.blog-main -->

	<?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>
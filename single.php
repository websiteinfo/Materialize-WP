<?php get_header(); ?>

<div class="row">
	<div class="col s12 m12 l12">

		
			<?php 
					if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content-single', get_post_format() );

					if ( comments_open() || get_comments_number() ) :
					  comments_template();
					endif;

					endwhile; endif; 
			?>

		
	</div> <!-- /.blog-main -->

</div> 	<!-- /.row -->

<?php get_footer(); ?>
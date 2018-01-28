<div class="">
	<h4 class=""><?php the_title(); ?></h4>
	<p class=""><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

<?php if ( has_post_thumbnail() ) {
  the_post_thumbnail();
} ?>
 <?php the_content(); ?>

</div><!-- /.blog-post -->
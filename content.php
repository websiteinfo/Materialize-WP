<div class="">
	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	<p class=""><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a>
	<a href="<?php comments_link(); ?>">
	<?php
	printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( 						get_comments_number() ) ); ?>
</a>
</p>
 <?php the_excerpt(); ?>

</div><!-- /.blog-post -->
<div class="blog-post">
	<h2 class="blog-post-title"><?php echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';?></h2>

	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

 <?php the_content(); ?>

</div><!-- /.blog-post -->
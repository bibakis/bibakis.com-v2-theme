<?php get_header(); ?>
<div class="row">
	<div class="col-sm-12">
		<div class="post">
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
			endwhile; endif;
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>

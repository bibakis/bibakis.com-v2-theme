<?php get_header(); ?>

<?php

if (is_single())
{
	if ( have_posts() ) : while ( have_posts() ) : the_post();



	echo '<div class="post-title-container">
				<div class="container">
				<div class="row">
					<div class="col-sm-12">';
						echo '<h2 class="post-title">' . get_the_title() . '</h2>';
						echo '<p>'.the_date().'</p>';
			echo '
					</div>
				</div>
				</div>
			</div>';

	echo '<div class="container content">';
	echo '<div class="row">
		<div class="col-sm-12">';

	echo '<div class="the_post">';
		the_content();

	echo '</div><!-- /.the_post -->';

	echo '</div> <!-- /.col-sm-12 -->
	</div> <!-- /.row -->
	</div> <!-- /.container content -->';
	endwhile; endif;
}
elseif (have_posts())
{
echo '<div class="container content">
			<div class="row">
				<div class="col-sm-12">
					<div class="post">';


				if ( have_posts() ) : while ( have_posts() ) : the_post();
	        get_template_part( 'content', get_post_format() );
				endwhile; endif;

		echo '
			</div>
		</div>
	</div>
	</div>';

}

?>
<?php get_footer(); ?>

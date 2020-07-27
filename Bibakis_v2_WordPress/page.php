<?php get_header(); ?>


			<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();

echo '<div class="page-title-container">
			<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="page-title">' . get_the_title() . '</h2>';
		echo '
				</div>
			</div>
			</div>
		</div>';

echo '<div class="container content">';
echo '<div class="row">
	<div class="col-sm-12">';

echo '<div class="the_page">';
	the_content();

echo '</div><!-- /.the_page -->';

echo '</div> <!-- /.col-sm-12 -->
</div> <!-- /.row -->
</div> <!-- /.container content -->';

endwhile; endif;
			?>



<?php get_footer(); ?>

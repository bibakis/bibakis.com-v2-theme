<!DOCTYPE html>
<html>
<head>
<title><?php echo get_bloginfo( 'name' ); ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
<meta name="author" content="">

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery-3.5.1.js'; ?>"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery-ui.min.js'; ?>"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/bootstrap-4.5.0-dist/js/bootstrap.min.js'; ?>"></script>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/bootstrap-4.5.0-dist/css/bootstrap.min.css'; ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<?php wp_head();?>
</head>

<body>

		<div class="blog-masthead">
		<div class="container">
			<nav class="blog-nav">
				<a class="blog-nav-item active" href="#">Home</a>
				<?php wp_list_pages( '&title_li=' ); ?>
			</nav>
		</div>
	</div>

	  <div class="container">

			<div class="blog-header">
  			<h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
  			<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
			</div>

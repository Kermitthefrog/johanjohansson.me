<?php
/**
 * @package johanjohansson
 */
?>
<!DOCTYPE html>
	<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<!-- LÈ CSS -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css">
		<link href='http://fonts.googleapis.com/css?family=Arapey:400italic,400' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Old+Standard+TT:400,700,400italic' rel='stylesheet' type='text/css'>

		<!-- LÈ SCRIPTS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">

				<header id="masthead" class="site-header push-header" role="banner">
					<div id="logo" class="container text-center">
						<div class="col-sm-12">
							<a href="<?php echo home_url(); ?>" data-hover="Designer & Front End utvecklare">Johan Johansson</a>
						</div><!-- col-sm-12 end -->
					</div><!-- logo end -->

					<div class="container">
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<div class="navbar navbar-default" role="navigation">
		        				<div class="container-fluid">
			          				<div class="navbar-header">
			            				<button type="button" id="button-toggle" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			              					<span class="sr-only">Toggle navigation</span>
			              					<span class="icon-bar"></span>
			              					<span class="icon-bar"></span>
			              					<span class="icon-bar"></span>
			            				</button>
			         				 </div>

			          				<div class="navbar-collapse collapse">
			            				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			          				</div><!--/.nav-collapse -->
		        				</div><!--/.container-fluid -->
		      				</div>
						</nav><!-- #site-navigation -->
					</div><!-- container end -->
				</header><!-- #masthead -->


			<div id="content" class="site-content">


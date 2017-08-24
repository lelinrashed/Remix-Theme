<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Remix</title>

		<meta name="description" content="Remix - is a Free HTML Responsive Templeate by PortfolioBazaar Team. You can use this for anykind of organaizations">

		<meta name="keywords" content="Free HTML Template">

		<meta name="author" content="PortfolioBazaar">

		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<!-- Main Menu -->
		<div id="main-menu"  class="main-menu-container navbar-fixed-top">
			<div  class="main-menu">
				<div class="container">
					<div class="row">
						<div class="navbar navbar-default" role="navigation">
							<div class="container-fluid">
							    <!-- Brand and toggle get grouped for better mobile display -->
							    <div class="navbar-header">
								    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								        <span class="sr-only">Toggle navigation</span>
								        <span class="icon-bar"></span>
								        <span class="icon-bar"></span>
								        <span class="icon-bar"></span>
								    </button><!-- /.navbar-toggle collapsed -->
								    <a class="navbar-brand" href="#"><img src="<?php echo cs_get_option('logo_upload'); ?>" alt="Logo Image"></a>
							    </div><!-- /.navbar-header -->

							    <!-- Collect the nav links, forms, and other content for toggling -->
							    <nav class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
								    <ul id="main-nav" class="nav navbar-nav sm sm-blue">
								        <li class="active">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="<?php echo cs_get_option('menu_one_icon'); ?>"></i> <span><?php echo cs_get_option('menu_one_text'); ?></span><span class="sr-only">(current)</span></a>
								        </li>
								        <li><a href="#about"><i class="fa fa-folder-open"></i> <span>About</span></a></li>
								        <li><a href="#team"><i class="fa fa-user"></i> <span>Team</span></a></li>
								        <li><a href="#pricing"><i class="fa fa-list"></i> <span>Pricing</span></a></li>
								        <li><a href="#work"><i class="fa fa-briefcase"></i> <span>Work</span></a></li>
								        <li><a href="#blog"><i class="fa fa-pencil-square-o"></i> <span>Blog</span></a></li>
								        <li><a href="#"><i class="fa fa-globe"></i> <span>Contact</span></a></li>
								    </ul><!-- /#main-menu -->
							    </nav><!-- /.navbar-collapse -->

							</div><!-- /.container-fluid -->
						</div><!-- /.navbar navbar-default -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.full-main-menu -->
		</div><!-- #main-menu -->
		<!-- Main Menu end -->

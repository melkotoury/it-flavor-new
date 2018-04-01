<?php
$page = $_SERVER['REQUEST_URI'];
echo $page;
?>
<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>IT Flavor | Even IT has it's own Flavor</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">


		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">


		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->


	</head>

	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>



			<!--
			=============================================
				Theme Header
			==============================================
			-->
			<header class="theme-menu-wrapper">
				<div class="container">
					<div class="top-header">
						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-12">
								<p>Even IT Has its own Flavor</p>
							</div>
							<div class="col-md-4 col-sm-3 col-xs-12">
								<div class="call"><a href="#"><i class="flaticon-telephone"></i> +20 1005398098</a></div>
							</div>
							<div class="col-md-4 col-sm-3 col-xs-12">
								<ul class="social-icon text-right">
									<li><a href="https://www.facebook.com/ITFlavorLLC" class="tran3s" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#" class="tran3s" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#" class="tran3s" target="_blank"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
									<li><a href="#" class="tran3s" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#" class="tran3s" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.top-header -->

					<div class="header-wrapper clearfix">
						<!-- Logo -->
						<div class="logo float-left"><a href="index.php"><img src="images/logo/logo.png" alt="Logo"></a></div>

						<!-- ============================ Theme Menu ========================= -->
						<nav class="theme-main-menu navbar float-right" id="mega-menu-wrapper">
							<!-- Brand and toggle get grouped for better mobile display -->
						   <div class="navbar-header">
						     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
						       <span class="sr-only">Toggle navigation</span>
						       <span class="icon-bar"></span>
						       <span class="icon-bar"></span>
						       <span class="icon-bar"></span>
						     </button>
						   </div>
						   <!-- Collect the nav links, forms, and other content for toggling -->
						   <div class="collapse navbar-collapse" id="navbar-collapse-1">
								<ul class="nav">

                                    <li class="<?php (($page === '/') || ($page === '/index.php') ? 'active' : ''); ?>"><a href="index.php" class="tran3s">Home</a></li>
                                    <li class="<?php ($page === '/about.php' ? 'active' : ''); ?>"><a href="about.php" class="tran3s">About</a></li>
                                    <li class="<?php (($page === '/services.php') || ($page === '/service_details.php') ? 'active' : ''); ?>"><a href="services.php" class="tran3s">Services</a></li>
                                    <li class="<?php (($page === '/news.php') || ($page === '/news_details.php') ? 'active' : ''); ?>"><a href="news.php" class="tran3s">News</a></li>
                                    <li class="<?php ($page === '/contact.php' ? 'active' : ''); ?>"><a href="contact.php" class="tran3s">Contact</a></li>
									<li class="quote"><a href="#" class="tran3s">Get Quote</a></li>
								</ul>
						   </div><!-- /.navbar-collapse -->
						</nav> <!-- /.theme-main-menu -->
					</div> <!-- /.header-wrapper -->
				</div> <!-- /.container -->
			</header> <!-- /.theme-menu-wrapper -->


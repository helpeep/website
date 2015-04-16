<!DOCTYPE HTML>
<?php require 'inc/config.inc.php'; ?>
<html>
	<head>
		<title>Helpeep</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="<?php echo JQUERY; ?>"></script>
		<script src="js/vegas.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<link href="<?php echo MAILCHIMP; ?>" rel="stylesheet" type="text/css">
		<link href="css/vegas.min.css" rel="stylesheet" type="text/css">
		<noscript>
			<link rel="stylesheet" href="css/combined.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<section id="header" class="dark">
				<header>
					<img src="images/logo.png" alt="Helpeep logo" />
					<h1 id="movingText">Helpeep</h1>
					<p>Sharing is truly caring.</a></p>
				</header>
				<footer>
					<a href="#first" class="button scrolly">Our Mission</a>
				</footer>
			</section>
			
		<!-- First -->
			<section id="first" class="main">
				<header>
					<div class="container">
						<h2>You can change the world, start with your community.</h2>
						<p>We create platform/community where people can help each other from heart in local and connect people around the world using the app. This project is to help people to help people. So It has to be operated by like-hearted people who are enthusiastic and passionate about helping people/solving problems from genuine heart (not for something else such as money). By doing this, we can make a better place around the world where people help each other from heart and reconnect each other as a human kind.</p>
					</div>
				</header>
				<?php  include 'inc/first-section.inc.php'; ?>
			</section>
		<!-- Second -->

			<?php  include 'inc/second-section.inc.php'; ?>

			<?php // include 'inc/third-section.inc.php'; ?>

			<?php // include 'inc/basic-elements.inc.php'; ?>
			
			<!-- <section id="fourth" class="main">

				<div class="content style1 dark">
					<div class="container 75%">
						<?php // include 'inc/mailchimp.inc.php'; ?>
					</div>
				</div>
			</section> -->
			
		<!-- Footer -->
			<section id="footer">
				<ul class="icons">
					<li><a href="<?php echo FACEBOOK; ?>" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="<?php echo GITHUB; ?>" class="icon fa-github"><span class="label">GitHub</span></a></li>
				</ul>
				<div class="copyright">
					<ul class="menu">
						<li>&copy; <?php echo date('Y'); ?> Helpeep. All rights reserved.</li>
					</ul>
				</div>
			</section>
			<script type="text/javascript" src="js/moveText.js"></script>
			<script type="text/javascript" src="js/slide.js"></script>
	</body>
</html>

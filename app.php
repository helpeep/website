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
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/combined.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<section id="app-header" class="dark">
				<header>
					<img src="images/logo.png" alt="Helpeep logo"/>
					<h1 id="movingText">Helpeep</h1>
					<p>Sharing is truly caring.</a></p>
				</header>
				<footer>
				
					<form method="post" action="/">
						<div class="row 50% query">
							<div class="12u query-field"><input name="give" id="give" type="text" placeholder="" /></div>
						</div>
						
						<div class="row submit-push">
							<div class="12u">
								<ul class="actions">
									<li><input name="submit" id="submit" type="submit" class="button" value="Send Message" /></li>
								</ul>
							</div>
						</div>
					</form>

				</footer>
			</section>

	</body>
</html>
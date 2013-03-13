<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		
		<!-- Title -->
		<title>Lists</title>
		
		<!-- CSS -->
		<link rel="stylesheet" media="screen" href="css/style.css" >
		
		<!-- PRELOAD SCRIPTS -->
		<script src="js/external/matchmedia.js"></script>
		<script src="js/picturefill.js"></script>
		
		<!-- Alternative HTML5 Modernizr -->
		<!--[if lt IE 9]>
		<script src="js/dist/html5shiv.js"></script>
		<![endif]-->
		<script>var base = '<?php echo BASE; ?>'</script>
		
	</head>
	<body>

		<!-- HEADER -->
		<div class="header">
			<div class="container">
				<div class="row header-menu">
					<ul class="main-menu">
						<li class="menu-item main"><a href="<?php echo BASE; ?>">Lists</a></li>
						<li class="menu-item new-list" >
							<a href="#">
								<svg class="px18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
									<polygon id="plus-icon" points="462,198.615 313.385,198.615 313.385,50 198.615,50 198.615,198.615 50,198.615 50,313.385 198.615,313.385 198.615,462 313.385,462 313.385,313.385 462,313.385 "></polygon>
								</svg>
								New List
							</a>
						</li>
					</ul>
					<ul class="secondary-menu">
						<li class="menu-item login">
							<a href="#">
								<svg class="px18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
									<path id="user-icon" d="M407.448,360.474c-59.036-13.617-113.989-25.541-87.375-75.717 c81.01-152.729,21.473-234.406-64.072-234.406c-87.231,0-145.303,84.812-64.072,234.406c27.412,50.482-29.608,62.393-87.375,75.717 c-59.012,13.609-54.473,44.723-54.473,101.176h411.838C461.919,405.196,466.458,374.083,407.448,360.474z"></path>
								</svg>
							</a>
							<div class="login-menu">
								<form method="post">
									<input type="text" name="username" id="username" placeholder="Username" required>
									<input type="password" name="password" id="password" placeholder="Password" required>
									<input type="submit" value="Login">
								</form>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	
		<!-- START CONTENT -->
		<?php echo $content; ?>

		<!-- END PAGE -->	
		<!-- SCRIPTS -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
		<script>!window.jQuery && document.write('<script src="js/jquery-1.8.2.min.js"><\/script>')</script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>

	</body>
</html>
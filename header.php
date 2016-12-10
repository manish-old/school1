<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link type="text/javascript" src="js/jquery-1.11.2.min.js">
	<link rel="stylesheet" type="text/css" href="css/material-icons.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<nav>
		<?php
		$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') 
		                === FALSE ? 'http' : 'https';
		$host     = $_SERVER['HTTP_HOST'];
		$script   = $_SERVER['SCRIPT_NAME'];

		$thisPage = $protocol . '://' . $host . $script;
		?>
		<ul class="navigation">
			<!--
			<li<?php if ($thisPage=="Home") echo " id=\"active\""; ?>><a href="index.php">Home</a></li>
			.menu > li > a:hover, .menu li#active{ background-color:#4c700b !important; color:#679b08 !important }
			-->
			<li <?php if($thisPage == "NEW") echo "id=\"active\""; ?>><a href="#">NEW!</a></li>
			<li <?php if($thisPage == "HOME") echo " id=\"active\""; ?>><a href="#">HOME</a></li>
			<li	<?php if($thisPage == "SERVICES") echo "id=\"active\""; ?>"><a href="#">SERVICES</a></li>
			<li	<?php if($thisPage == "CAREERS") echo "id=\"active\""; ?>"><a href="#">CAREERS</a></li>
			<li <?php if($thisPage == "CONTACT US")	echo "id=\"active\""; ?>"><a href="#">CONTACT US</a></li>
			
			<button class="sign-up" href="#">SIGN UP</button>
			<button class="sign-in" href="#">LOGIN</button>
		</ul>
	</nav>
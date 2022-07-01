<!DOCTYPE html>
<html>
<head>
	<title>Nobodysfool</title>
	<meta charset="utf-8">	
	<link rel="stylesheet" href="public/css/nobodysfool.css">
	<link rel="stylesheet" href="public/css/fonts.css">
	<link rel="stylesheet" href="public/css/media.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">  
	<link rel="stylesheet" type="text/css" href="public/js/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="public/js/slick/slick-theme.css"/>
</head>
<body>
<div class="fixed">
<div class="bg-panel">
	<div class="container">
		
			<div class="top-nav">
				<ul class="top-menu">
					<li><a>Привет, <?=$_SESSION["user"]?></a></li>
					<li><a href="/logout.php">Logout</a></li>
					<li><a href="#">rss Feeds</a></li>
					<li><a href="#">archived news</a></li>
					<li><a href="<? require 'public/user_header.php';?>">Admin</a></li>
				</ul>
			</div>
			<div class="icons">
			<ul class="icons-menu">
				<li class="facebook"><a href="#" class="fa fa-facebook"></a></li>
				<li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
				<li class="pinterest"><a href="#" class="fa fa-pinterest"></a></li>
				
				<li class="google-plus"><a href="#" class="fa fa-google-plus"></a></li>
				<li class="rss"><a href="#" class="fa fa-rss"></a></li>
			</ul>
			</div>
	</div>
</div>

<div class= "width clearfix">
<div class="hidden-menu ">	
	
		<ul class="submenu">
			<li><a href="#">Contact us</a></li><hr>
			<li><a href="/registration.php">Registration</a></li><hr>
			<li><a href="#">Write us</a></li><hr>
			<li><a href="#">FAQ</a></li>
		</ul>
		<button class="butt-show-menu fa fa-plus"></button>

	</div>
<div class="hidden-menu-left">	
	<button class="butt-show-nav fa fa-bars">
	</button></div>
</div>
</div>
	<header>
	<div class="container">	

	<nav class="navbar">
		
	<ul class="nav-menu">
		<li><a href="#">homepage</a></li>
		<li><a href="#">style demo</a></li>
		<li><a href="#">full width</a></li>
		<li><a href="#" >dropdown</a>
		</li>	
		<li><a href="#">portfolio</a></li>
		<li><a href="#">gallery</a></li>
		<li><a href="#">link text</a></li>
		<li><a href="#">long link text</a></li>
	</ul>
</nav>
	<nav class="navbar-small">
	<div class="close">	
	<button class="butt-close fa-close fa "></button></div>	
		<ul class="nav-menu-small">
		<li><a href="#">homepage</a></li><hr>		
		<li><a href="#">style demo</a></li><hr>	
		<li><a href="#">full width</a></li><hr>	
		<li><a href="#" >dropdown</a>
		</li><hr>		
		<li><a href="#">portfolio</a></li><hr>	
		<li><a href="#">gallery</a></li><hr>		
		<li><a href="#">link text</a></li	><hr>	
		<li><a href="#">long link text</a></li><hr>	
	</ul>
	</nav>
</div>
<div class="width margin-top">

<div class="logo_search container">

<div class='logo'>	
	<? include 'includes/logotype.php';?>
</div>
<div class="search-bar">
	<input type="search" class='search' name="search" placeholder="search our website">
	<input type="button" class="btn" name="" value="Search">
</div>	
</div>
</div>
	</header>
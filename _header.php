<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">

	<link rel="stylesheet" href="css/animate.css">
	<link rel='stylesheet' href='css/camera.css'>

	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet'>
	<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet'>

	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>

	<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/wow/wow.min.js"></script>
	<script>
		$(document).ready(function () {
			//----------------WOW ini-----------------
			if ($('html').hasClass('desktop')) {
				new WOW().init();
			}
		});
	</script>
	<!--<![endif]-->

	<script src='js/camera.js'></script>
	<script src="js/sForm.js"></script>

	<script>
		$(document).ready(function(){
			//----------------Camera ini-----------------
			$('.camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '320',
				thumbnails: false,
				height: '51.1628%',
				caption: false,
				navigationHover: false,
				playPause: false,
				fx: 'scrollHorz'
			});
		});
	</script>

	<!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
			<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
		</a>
	</div>
	<![endif]-->

	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
</head>
<body class="page-main text-2">
<!--========================================================
                          HEADER
=========================================================-->
<header id="header">
	<section class="header-top">
		<div id="stuck_container">
			<div class="stuck_wrapper">
				<div class="container">
					<div class="row">
						<div class="grid_12">
							<!--=======================-->
							<h1><a href="index.php">Сновел</a></h1>
							<nav>
								<ul class="sf-menu">
									<li class="current"><a href="index.php">Главная</a></li>
									<li><a href="about.php">О нас</a></li>
									<li><a href="services.php">Услуги и направления</a></li>
									<li><a href="products.php">Продукты</a></li>
									<li><a href="projects.php">Проекты</a></li>
									<li><a href="contacts.php">Контакты</a></li>
								</ul>
							</nav>
							<!--=======================-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<? if (isset($showSlider)) {?>
	<section class="header-slider">
		<div class="camera_wrap">
			<div data-src="images/slide.jpg">
				<div class="block-slider color-1">
					<div class="fadeIn camera_effected">
						<div class="container">
							<div class="row">
								<div class="grid_12">
									<!--=======================-->
									<div class="block-slider_section-1">1/3</div>
									<div class="block-slider_section-2">Changing the future</div>
									<div class="block-slider_section-3">Donec accusan malsuada orcnc sit ametrem ipsum dolor sit at cons</div>
									<div class="block-slider_section-4"><a href="#" class="btn">Read more</a></div>
									<!--=======================-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div data-src="images/slide1.jpg">
				<div class="block-slider color-1">
					<div class="fadeIn camera_effected">
						<div class="container">
							<div class="row">
								<div class="grid_12">
									<!--=======================-->
									<div class="block-slider_section-1">2/3</div>
									<div class="block-slider_section-2">We think globally</div>
									<div class="block-slider_section-3">Donec accusan malsuada orcnc sit ametrem ipsum dolor sit at cons</div>
									<div class="block-slider_section-4"><a href="#" class="btn">Read more</a></div>
									<!--=======================-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div data-src="images/slide2.jpg">
				<div class="block-slider color-1">
					<div class="fadeIn camera_effected">
						<div class="container">
							<div class="row">
								<div class="grid_12">
									<!--=======================-->
									<div class="block-slider_section-1">3/3</div>
									<div class="block-slider_section-2">Everything is possible</div>
									<div class="block-slider_section-3 color-9">Donec accusan malsuada orcnc sit ametrem ipsum dolor sit at</div>
									<div class="block-slider_section-4"><a href="#" class="btn">Read more</a></div>
									<!--=======================-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<? } ?>
</header>
<!DOCTYPE HTML>

<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
	<title>Kevin Ma</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=RobotoDraft:300,400,500,600,700,400italic" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="../css/normalize.css" type="text/css" media="screen">
	<link rel="stylesheet" href="../css/grid.css" type="text/css" media="screen">
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen">
	<link rel="icon" type="image/png" href="../img/icon.png">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="../js/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="../js/waypoints.min.js"></script>
	<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="../js/scripts.js"></script>

</head>

<body>
		<?php include_once("../php/analyticstracking.php") ?>


	<?php
		include '../php/menu.php';
	?>

	<div class="slide boxslide" id="projectslide" data-slide="1" data-stellar-background-ratio="0.5">

		<div class="container clearfix">

			<div id="content" class="grid_12 bumpdown">
				<h2 class="projecttitle">Ink + Graphite</h2>
				<p class="projectdescription">A collection of freehand drawings.</p>
			</div>

			<div class="grid_12 bumpdown">
				<img src="../img/draw1.jpg">
				<img src="../img/draw3.jpg">
			</div>

<!-- 			<div class="grid_12 bumpdown">
				<img src="../img/draw4.jpg">
			</div> -->

			<div class="grid_12 bumpdown">
				<img src="../img/draw5.jpg">
			</div>

			<div class="grid_12 bumpdown">
				<img src="../img/draw6.jpg">
			</div>

			<div class="grid_12 bumpdown">
				<img src="../img/draw7.jpg">
			</div>

		</div>

	</div>

	<?php
	include '../php/thumbnailslide.php';
	$picturename="funkysquid.jpg";
	include '../php/customcontactslide.php';
	include '../php/footer.php';
	?>

	
</body>

</html>
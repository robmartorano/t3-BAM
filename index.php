<?php
$current_page = "index";
require_once("header.php");
?>

<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<div class="row carousel-holder">

	<div class="col-md-12">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img class="slide-image" src="http://freeimages.imagestocks.in/best-pictures/vintage-clothing/backstyle-pandoras-bleach-2.png" alt="all clothes" width='100%'>
					<div class="carousel-caption">
						<h3>Shop all clothes</h3>
					</div>
				</div>
				<div class="item">
					<img class="slide-image" src="https://placehold.it/1200x600" alt="">
					<div class="carousel-caption">
						<h3>Caption Text</h3>
					</div>
				</div>
				<div class="item">
					<img class="slide-image" src="https://placehold.it/1200x600" alt="">
					<div class="carousel-caption">
						<h3>Caption Text</h3>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
	</div>

</div>
</div>

</body>
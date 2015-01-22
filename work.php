<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Jackies Portfolio</title>

<!--To ensure proper rendering and touch zooming for mobile friendly styles-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- meta tags-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="language" content="english, en">
<meta name="description" content="I have to think of an funny and creative description, so don't bother me!">
<meta name="keywords" content="Web, Design, Developing, HTMl, CSS, PHP, Jacqueline Scheidl">
<meta name="author" content="Jacqueline Scheidl">
<meta name="page-topic" content="Web Design, Web Programming">
<meta name="revisit-after" content="1 month">

<!--Stylesheets-->
<link rel="stylesheet" href="css/bootstrap.css" >		<!--Bootstrap-->
<link rel="stylesheet" href="css/lightbox.css">			<!--Lightbox-->
<link rel="stylesheet" href="css/box.css">
<link rel="stylesheet" href="css/style.css">

<!-- Javascript-->
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>		<!--JQuery-->
<script type="text/javascript" src="js/bootstrap.js"></script>				<!--Bootstrap-->
<script type="text/javascript" src="js/lightbox.min.js"></script>			<!--Lightbox-->
<script type="text/javascript" src="js/script.js"></script>					<!-- My Jacvascript -->

</head>

<body>

<div class="container">

<div class="work">

<div id="nav">
	<a href="index.html" class="home_nav">Home</a>
	<a href="#" class="web_nav">Web & Games</a>
	<a href="#" class="grafics_nav">Grafics & Photography</a>
	<a href="#" class="drawings_nav">Drawings</a>
    <a href="#" class="contact_nav">Contact</a>
</div>



<!--  /////////////////////////////////////////////////////// -->

<div class="web">

<div class="block">
		<div class="row">

			<!-- WALDKINDERGAERTEN -->
			<a href="img/web/waldkindergarten/waldkindergaerten.jpg" data-lightbox="waki" data-title="Waldkindergärten Home" class="col-md-4">
				<img src="img/web/waldkindergarten/waki_pin.png"  />
			</a>

			<!-- UK -->
			<a href="img/web/uk/uk_home.jpg" data-lightbox="uk" data-title="UK Website" class="col-md-4">
				<img src="img/web/uk/uk_pin.png"  />
			</a>

			<?php
			$images = glob("img/web/uk/_*.jpg");

			foreach($images as $image) {
					echo ("<a href='".$image."' data-lightbox='uk' data-title='UK Website' class='hidden'>");
					echo ("<img src='".$image."'  /></a>");}
			?>

			<!-- ROLLTHEBALL -->
			<a href="img/web/rolltheball/rolltheball_start.jpg" data-lightbox="rolltheball" data-title="Roll The Ball" class="col-md-4">
				<img src="img/web/rolltheball/rolltheball_pin.png"  />
			</a>

			<?php

			$images = glob("img/web/rolltheball/_*.jpg");
			foreach($images as $image) {
				echo ("<a href='".$image."' data-lightbox='rolltheball' data-title='Roll The Ball' class='hidden'>");
				echo ("<img src='".$image."'  /></a>");				}
			?>

		</div><!--row-end-->

		<div class="row">
			<div class="col-md-4">
				<div class="postit">
					<h1>Waldkindergärten</h1>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
				</div> <!--postit-end-->
			</div>

			<div class="col-md-4">
				<div class="postit">
					<h1>UK Website</h1>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
				</div><!--postit-end-->
			</div>

			<div class="col-md-4">
				<div class="postit">
					<h1>Roll the Ball</h1>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
				</div><!--postit-end-->
			</div>

		</div> <!--row-end-->
	</div> <!--block-end-->

	<div class="block">
		<div class="row">

			<!-- MOORHUHN -->
			<a href="img/web/moorhuhn/moorhuhn_game.jpg" data-lightbox="moorhuhn" data-title="Moorhuhn" class="col-md-4">
				<img src="img/web/moorhuhn/moorhuhn_pin.png"  />
			</a>

			<?php

			$images = glob("img/web/moorhuhn/_*.jpg");
			foreach($images as $image) {
					echo ("<a href='".$image."' data-lightbox='moorhuhn' data-title='Moorhuhn' class='hidden'>");
					echo ("<img src='".$image."'  /></a>");		}
			?>

			<!-- WHACAMOLE -->
			<a href="img/web/whacamole/whacamole_game.jpg" data-lightbox="mole" data-title="Whac A Mole" class="col-md-4">
				<img src="img/web/whacamole/whacamole_pin.png"  />
			</a>

			<?php

			$images = glob("img/web/whacamole/_*.jpg");
			foreach($images as $image) {
					echo ("<a href='".$image."' data-lightbox='mole' data-title='Whac A Mole' class='hidden'>");
					echo ("<img src='".$image."'  /></a>");		}
				?>

			<!-- FORUM -->
			<a href="img/web/forum/forum.jpg" data-lightbox="forum" data-title="Forum" class="col-md-4">
				<img src="img/web/forum/forum_pin.png"  />
			</a>

			<?php

			$images = glob("img/web/forum/_*.jpg");
			foreach($images as $image) {
					echo ("<a href='".$image."' data-lightbox='forum' data-title='Forum' class='hidden'>");
					echo ("<img src='".$image."'  /></a>");		}
			?>

		</div><!--row-end-->

		<div class="row">
			<div class="col-md-4">
				<div class="postit">
					<h1>Moorhuhn</h1>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
				</div><!--postit-end-->
			</div>

			<div class="col-md-4">
				<div class="postit">
					<h1>Whac A Mole</h1>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
				</div><!--postit-end-->
			</div>

			<div class="col-md-4">
				<div class="postit">
					<h1>Forum</h1>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
				</div><!--postit-end-->
			</div>

		</div> <!--row-end-->
	</div> <!--block-end-->


	<div class="block">
		<div class="row">

			<!-- GAESTEBUCH -->
			<a href="img/web/gaestebuch/gb_eintraege.jpg" data-lightbox="gb" data-title="Gästebuch" class="col-md-4">
				<img src="img/web/gaestebuch/gb_pin.png"  />
			</a>

			<?php

			$images = glob("img/web/gaestebuch/_*.jpg");
			foreach($images as $image) {
					echo ("<a href='".$image."' data-lightbox='gb' data-title='Gästebuch' class='hidden'>");
					echo ("<img src='".$image."'  /></a>");		}
			?>

			<!-- MONDI -->
			<a href="img/web/mondi/mondi_event2.jpg" data-lightbox="mondi" data-title="Mondi" class="col-md-4">
				<img src="img/web/mondi/mondi_pin.png"  />
			</a>

			<?php

			$images = glob("img/web/mondi/_*.jpg");
			foreach($images as $image) {
					echo ("<a href='".$image."' data-lightbox='mondi' data-title='Mondi' class='hidden'>");
					echo ("<img src='".$image."'  /></a>");		}
			?>


		</div><!--row-end-->

		<div class="row">
			<div class="col-md-4">
				<div class="postit">
					<h1>Gästebuch</h1>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
				</div><!--postit-end-->
			</div>

			<div class="col-md-4">
				<div class="postit">
					<h1>Mondi</h1>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
				</div><!--postit-end-->
			</div>

		</div> <!--row-end-->
	</div> <!--block-end-->

</div> <!--web-end-->


<!--  /////////////////////////////////////////////////////// -->

<div class="grafics hidden">
	<div class="block">
		<div class="row">

			<!-- TIEFENSCHAERFE -->
			<a href="img/grafics/tiefenschaerfe/IMG_7368.jpg" data-lightbox="tiefenschaerfe" data-title="Tiefenschärfe" class="col-md-4">
					<img src="img/grafics/tiefenschaerfe/tiefenschaerfe_pin.png" />
			</a>

			<?php

			$images = glob("img/grafics/tiefenschaerfe/_*.JPG");
			foreach($images as $image) {
					echo ("<a href='".$image."' data-lightbox='tiefenschaerfe' data-title='Tiefenschärfe' class='hidden'>");
					echo ("<img src='".$image."'  /></a>");		}
			?>

			<!-- PHOTOGRAPHY -->
			<a href="img/grafics/photography/IMG_0311.jpg" data-lightbox="photography" data-title="Photography" class="col-md-4">
					<img src="img/grafics/photography/photography_pin.png" />
			</a>

			<?php

			$images = glob("img/grafics/photography/_*.JPG");
			foreach($images as $image) {
					echo ("<a href='".$image."' data-lightbox='photography' data-title='Photography' class='hidden'>");
					echo ("<img src='".$image."'  /></a>");		}
			?>


			<!-- ANALOG PHOTOGRAPHY -->
			<a href="img/grafics/analog/DSC_2233.jpg" data-lightbox="analog" data-title="Analog Photography" class="col-md-4">
					<img src="img/grafics/analog/analog_pin.png" />
			</a>

			<?php

			$images = glob("img/grafics/analog/_*.JPG");
			foreach($images as $image) {
					echo ("<a href='".$image."' data-lightbox='analog' data-title='Analog Photography' class='hidden'>");
					echo ("<img src='".$image."'  /></a>");		}
			?>

		</div> <!--row-end-->

		<div class="row">
			<div class="col-md-4">
				<div class="postit_small">
					<h1>Tiefenschärfe</h1>
				</div> <!--postit-end-->
			</div>

			<div class="col-md-4">
				<div class="postit_small">
					<h1>Photography</h1>
				</div><!--postit-end-->
			</div>

			<div class="col-md-4">
				<div class="postit_small">
					<h1>Analog Photography</h1>
				</div><!--postit-end-->
			</div>

		</div> <!--row-end-->
	</div> <!--block-end-->


	<div class="block">
		<div class="row">

			<!-- BANNER -->
			<a href="img/grafics/banner/tut4.jpg" data-lightbox="banner" data-title="Banner, Wallpaper & Vorher/Nachher" class="col-md-4">
					<img src="img/grafics/banner/banner_pin.png" />
			</a>

			<?php

			$images = glob("img/grafics/banner/_*.jpg");
			foreach($images as $image) {
					echo ("<a href='".$image."' data-lightbox='banner' data-title='Banner, Wallpaper & Vorher/Nachher' class='hidden'>");
					echo ("<img src='".$image."'  /></a>");		}
			?>

			<!-- CD -->
			<a href="img/grafics/cdbooklet/cd1.jpg" data-lightbox="cd" data-title="CD-Booklet" class="col-md-4">
					<img src="img/grafics/cdbooklet/cd_pin.png" />
			</a>

			<?php

			$images = glob("img/grafics/cdbooklet/_*.jpg");
			foreach($images as $image) {
					echo ("<a href='".$image."' data-lightbox='cd' data-title='CD-Booklet' class='hidden'>");
					echo ("<img src='".$image."'  /></a>");		}
			?>

			<!-- WEIHNACHTSKARTE -->
			<a href="img/grafics/weihnachtskarte/weihnachtskarte_vorne.jpg" data-lightbox="xmas" data-title="Weihnachtskarte" class="col-md-4">
					<img src="img/grafics/weihnachtskarte/weihnachtskarte_vorne_pin.png" />
			</a>

			<?php

			$images = glob("img/grafics/weihnachtskarte/_*.jpg");
			foreach($images as $image) {
					echo ("<a href='".$image."' data-lightbox='xmas' data-title='Weihnachtskarte' class='hidden'>");
					echo ("<img src='".$image."'  /></a>");		}
			?>

		</div> <!--row-end-->

		<div class="row">
			<div class="col-md-4">
				<div class="postit_small">
					<h1>Banner</h1>
				</div> <!--postit-end-->
			</div>

			<div class="col-md-4">
				<div class="postit_small">
					<h1>CD-Booklet</h1>
				</div><!--postit-end-->
			</div>

			<div class="col-md-4">
				<div class="postit_small">
					<h1>Weihnachtskarte</h1>
				</div><!--postit-end-->
			</div>

		</div> <!--row-end-->
	</div> <!--block-end-->

	<div class="block">
		<div class="row">

			<!-- FLYER -->
			<a href="img/grafics/flyer/flyer.jpg" data-lightbox="flyer" data-title="Flyer" class="col-md-4">
					<img src="img/grafics/flyer/flyer_pin.png" />
			</a>

			<?php

			$images = glob("img/grafics/flyer/_*.jpg");
			foreach($images as $image) {
					echo ("<a href='".$image."' data-lightbox='flyer' data-title='Flyer' class='hidden'>");
					echo ("<img src='".$image."'  /></a>");		}
			?>

			<!-- CORPORATE DESIGN -->
			<a href="img/grafics/corporate_design/visitenkarte_vorne.jpg" data-lightbox="corporatedesign" data-title="Corporate Design" class="col-md-4">
					<img src="img/grafics/corporate_design/corporatedesign_pin.png" />
			</a>

			<?php

			$images = glob("img/grafics/corporate_design/_*.jpg");
			foreach($images as $image) {
					echo ("<a href='".$image."' data-lightbox='corporatedesign' data-title='Corporate Design' class='hidden'>");
					echo ("<img src='".$image."'  /></a>");		}
			?>

			<!-- KALENDER -->
			<a href="img/grafics/kalender_meli/00deckblatt.jpg" data-lightbox="kalender" data-title="Kalender" class="col-md-4">
					<img src="img/grafics/kalender_meli/kalender_pin.png" />
			</a>

			<?php

			$images = glob("img/grafics/kalender_meli/_*.jpg");
			foreach($images as $image) {
					echo ("<a href='".$image."' data-lightbox='kalender' data-title='Kalender' class='hidden'>");
					echo ("<img src='".$image."'  /></a>");		}
			?>

		</div> <!--row-end-->

		<div class="row">
			<div class="col-md-4">
				<div class="postit_small">
					<h1>Flyer</h1>
				</div> <!--postit-end-->
			</div>

			<div class="col-md-4">
				<div class="postit_small">
					<h1>Corporate Design</h1>
				</div><!--postit-end-->
			</div>

			<div class="col-md-4">
				<div class="postit_small">
					<h1>Kalender</h1>
				</div><!--postit-end-->
			</div>

		</div> <!--row-end-->
	</div> <!--block-end-->


</div> <!--grafics-end-->

<!--  ///////////////////////////////////////////////////////-->

<div class="drawings hidden">

	<div class="row">
		<a href="img/drawings/Noel.jpg" data-lightbox="drawings" data-title="Noel" class="col-md-4">
			<img src="img/drawings/Noel.jpg" />
		</a>

		<a href="img/drawings/Lafadiel.jpg" data-lightbox="drawings" data-title="Lafadiel Skizze" class="col-md-4">
			<img src="img/drawings/Lafadiel.jpg"  />
		</a>
		<a href="img/drawings/Lafadiel2.jpg" data-lightbox="drawings" data-title="Lafadiel Colored" class="hidden">
			<img src="img/drawings/Lafadiel2.jpg" />
		</a>

		<a href="img/drawings/Philippe.jpg" data-lightbox="drawings" data-title="Phillipe Skizze" class="col-md-4">
			<img src="img/drawings/Philippe.jpg"  />
		</a>
		<a href="img/drawings/Philippe2.jpg" data-lightbox="drawings" data-title="Phillipe Colored" class="hidden">
			<img src="img/drawings/Philippe2.jpg"  />
		</a>
	</div> <!--row-end-->

	<div class="row">
		<a href="img/drawings/Mika.jpg" data-lightbox="drawings" data-title="Mika Skizze" class="col-md-4">
			<img src="img/drawings/Mika.jpg"  />
		</a>
		<a href="img/drawings/Mika2.jpg" data-lightbox="drawings" data-title="Mika Colored" class="hidden">
			<img src="img/drawings/Mika2.jpg"  />
		</a>

		<a href="img/drawings/Lotte.jpg" data-lightbox="drawings" data-title="Lotte Skizze" class="col-md-4">
			<img src="img/drawings/Lotte.jpg"  />
		</a>
		<a href="img/drawings/Lotte2.jpg" data-lightbox="drawings" data-title="Lotte Colored" class="hidden">
			<img src="img/drawings/Lotte2.jpg"  />
		</a>

		<a href="img/drawings/Eileen.jpg" data-lightbox="drawings" data-title="Eileen Skizze" class="col-md-4">
			<img src="img/drawings/Eileen.jpg"  />
		</a>
		<a href="img/drawings/Eileen2.jpg" data-lightbox="drawings" data-title="Eileen Colored" class="hidden">
			<img src="img/drawings/Eileen2.jpg"  />
		</a>
	</div> <!--row-end-->

	<div class="row">
		<a href="img/drawings/Hina4.jpg" data-lightbox="drawings" data-title="Hina" class="col-md-4">
			<img src="img/drawings/Hina4.jpg"  />
		</a>

		<a href="img/drawings/Hina6.jpg" data-lightbox="drawings" data-title="Hina Tomb Raider" class="col-md-4">
			<img src="img/drawings/Hina6.jpg"  />
		</a>

		<a href="img/drawings/Hina2.jpg" data-lightbox="drawings" data-title="Hina Young" class="col-md-4">
			<img src="img/drawings/Hina2.jpg"  />
		</a>
	</div> <!--row-end-->

	<div class="row">
		<a href="img/drawings/Melanie.jpg" data-lightbox="drawings" data-title="Melanie Skizze" class="col-md-4">
			<img src="img/drawings/Melanie.jpg"  />
		</a>
		<a href="img/drawings/Melanie2.jpg" data-lightbox="drawings" data-title="Melanie Colored" class="hidden">
			<img src="img/drawings/Melanie2.jpg"  />
		</a>

		<a href="img/drawings/Leonie_Miami_Cargo.jpg" data-lightbox="drawings" data-title="Leonie, Miami, Cargo" class="col-md-4">
			<img src="img/drawings/Leonie_Miami_Cargo.jpg"  />
		</a>

		<a href="img/drawings/Kagome.jpg" data-lightbox="drawings" data-title="Kagome" class="col-md-4">
			<img src="img/drawings/Kagome.jpg"  />
		</a>
	</div> <!--row-end-->

	<div class="row">
		<a href="img/drawings/Merlin2.jpg" data-lightbox="drawings" data-title="Merlin" class="col-md-4">
			<img src="img/drawings/Merlin2.jpg"  />
		</a>

		<a href="img/drawings/Circe.jpg" data-lightbox="drawings" data-title="Circe" class="col-md-4">
			<img src="img/drawings/Circe.jpg"  />
		</a>

	</div> <!--row-end-->
</div> <!--drawings-end-->
</div> <!--work-end-->


</div> <!--container-end-->

</body>
</html>

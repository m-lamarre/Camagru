<!DOCTYPE html>
<html lang="en">
<head>
	<title>Camagru - Camera</title>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" type="text/css" href="stylesheets/camera.css" />
	<link rel="shortcut icon" type="image/png" sizes="16x16" href="images/Ukulily.png" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />
</head>
<body>
	<div id="top">
		<header>
			<a href="home_page1.php"><img src="images/Ukulily.png" id="ukulily_logo" title="Ukulily Logo" align="left"/></a><h1>Camagru</h1>
		</header>
		<nav id="nav_bar">
			<ul id="nav_list">
				<li><a href="home_page1.php">HOME</a></li>
				<li><a href="gallery1.php">GALLERY</a></li>
				<li><a href="camera.php">CAMERA</a></li>
				<li><a href="home_page.php">LOG OUT</a></li>
			</ul>
		</nav>
	</div>
	<br>

	<div id="mid_div">
		<h2 class="gallery">TAKE AND EDIT A PHOTO</h2>
		<div class="camera">
			<video id="video" poster="images/_pony_selfie1.jpg" autoplay="true" onclick="take_photo();" >
				<object>
					<p>Video is not available. :(</p>
				</object>
			</video>
			<canvas id="canvas">
				Your browser does not support HTML5. :(
			</canvas><br />
			<button id="startbutton" class="buttons" onclick="take_photo();">TAKE PHOTO</button><br />
			<input id="file" class="" type="file" accept="image/*;"><br />
		</div>
		<div id="button_grid">
			<button class="buttons" onclick="draw_fluttershy();">FLUTTERSHY</button><br />
			<button class="buttons" onclick="draw_rarity();">RARITY</button>	<br />
			<button class="buttons" onclick="draw_pinkie();">PINKIE</button><br />
			<button class="buttons" onclick="draw_rainbow();">RAINBOW</button><br />
			<button class="buttons" onclick="draw_twilight();">TWILIGHT</button><br />
			<button class="buttons" onclick="draw_apple();">APPLE JACK</button><br />
			<button class="buttons" onclick="draw_horn();">HORN</button><br />
			<button class="buttons" onclick="draw_sunglasses();">SUNGLASSES</button><br />
		</div>
	</div>
	<div id="hidden" >
		<img class="hidden" id="fluttershy" src="images/fluttershy.png"/>
		<img class="hidden" id="rarity" src="images/rarity.png"/>
		<img class="hidden" id="pinkie" src="images/pinkie_pie.png"/>
		<img class="hidden" id="rainbow" src="images/rainbow_dash.png"/>
		<img class="hidden" id="twilight" src="images/twilight.png"/>
		<img class="hidden" id="apple" src="images/apple_jack.png"/>
		<img class="hidden" id="horn" src="images/horn.png"/>
		<img class="hidden" id="sunglasses" src="images/sunglasses.png"/>
	</div>

	<div id="footer">
		<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
			  <a href="https://www.facebook.com/UkulilyFilly" target="_blank"><i class="fa fa-facebook-square" style="font-size: 40px; color: #8625FB;"></i></a> &nbsp; &nbsp;
			  <a href="https://twitter.com/UkulilyFilly" target="_blank"><i class="fa fa-twitter-square" style="font-size: 40px; color: #8625FB;"></i></a> &nbsp; &nbsp;
			  <a href="https://www.linkedin.com/in/miriam-lamarre" target="_blank"><i class="fa fa-linkedin-square" style="font-size: 40px; color: #8625FB;"></i></a>

			<p style="font-size: 0.8vw">Fictional Website created by mlamarre of <a href="http://www.wethinkcode.co.za/" target="_blank" >WeThinkCode_</a></p>
	        <p style="font-size: 0.7vw">Copyright &copy; 2016</p>
		</footer>
	</div>
	<script src="camera.js" type="text/javascript"></script>
</body>
</html>

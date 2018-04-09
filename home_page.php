<!DOCTYPE html>
<html lang="en">
<head>
	<title>Camagru</title>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" type="text/css" href="stylesheets/home_page.css" />
	<link rel="shortcut icon" type="image/png" sizes="16x16" href="images/Ukulily.png" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />
</head>
<body>
	<div id="top">
		<header>
			<a href="home_page.php"><img src="images/Ukulily.png" id="ukulily_logo" alt="Ukulily Logo" title="Ukulily Logo" /></a><h1>Camagru</h1>
		</header>
		<nav id="nav_bar">
			<ul id="nav_list">
				<li><a href="home_page.php">HOME</a></li>
				<li><a href="gallery.php">GALLERY</a></li>
				<li><a href="sign_up.php">SIGN UP</a></li>
				<li><a href="index.php">SIGN IN</a></li>
			</ul>
		</nav>
	</div>
	<br>

	<div id="mid_div">
		<h2 class="gallery"><a class="gallery" href="gallery.php">GALLERY</a></h2>
		<div class="slideshow">
			<div class="slides fade">
			<div class="number">1 / 4</div>
			<img class="home_imgs" alt="Pony Selfie 1" title="Pony Selfie 1" src="images/_pony_selfie1.jpg">
			</div>

			<div class="slides fade">
			<div class="number">2 / 4</div>
			<img class="home_imgs" img alt="Pony Selfie 2" title="Pony Selfie 2" src="images/_pony_selfie2.jpg">
			</div>

			<div class="slides fade">
			<div class="number">3 / 4</div>
			<img class="home_imgs" img alt="Pony Selfie 3" title="Pony Selfie 3" src="images/_pony_selfie3.jpg">
			</div>

			<div class="slides fade">
			<div class="number">4 / 4</div>
			<img class="home_imgs" img alt="Pony Selfie 4" title="Pony Selfie 4" src="images/_pony_selfie4.jpg">
			</div>

			<a class="prev" onclick="plusSlides(-1)">❮</a>
  			<a class="next" onclick="plusSlides(+1)">❯</a>
		</div>
		<br>

		<div style="text-align:center;">
		  <span class="dot" onclick="currentSlide(1)"></span> 
		  <span class="dot" onclick="currentSlide(2)"></span> 
		  <span class="dot" onclick="currentSlide(3)"></span>
		  <span class="dot" onclick="currentSlide(4)"></span> 
		</div>
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

	<script src="home_page.js" type="text/javascript"></script>
</body>
</html>
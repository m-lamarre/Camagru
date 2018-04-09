<!DOCTYPE html>
<html lang="en">
<head>
	<title>Camagru - Sign In</title>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" type="text/css" href="stylesheets/sign_in.css" />
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
		<h2 id="sign_in">SIGN IN</h2>
	</div>

	<div>
	  <form action="index.php" method="POST">
		<table>
			<tr>
			    <td class="text">
			        Username:
			    </td>
			    <td>
			        <input type="text" id="username" name="username" class="inputs" />
			    </td>
			</tr>
			<tr>
			    <td class="text">
			        Password:
			    </td>
			    <td>
			        <input type="password" id="password" name="password" class="inputs" />
			    </td>
			</tr>
			<tr><td><br/></td></tr>
			<tr>
				<td colspan="2">
					<a href="forgot_password.php" style="font-size: 1vw;">Forgot Your Password?</a>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<a href="sign_up.php" style="font-size: 1vw;">Not Registered? Sign-Up Here!</a>
				</td>
				<td></td>
			</tr>
			<tr><td><br/></td></tr>
			<tr>
			    <td colspan="2">
			        <button type="submit" id="submit" name="submit">Submit</button>
			    </td>
			</tr>
		</table>
	  </form>
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

	<!-- <div>
	<?php 
		include ('./config.php');
		$username = $_POST['username'];
		$password = $_POST['password'];
		$connection = new PDO($DB_DSN, $DB_USER, $DB_PASS, $DB_PDO);
		$select_user = $connection->query("SELECT USERNAME FROM users");
		$select_password = $connection->query("SELECT PASSWORD FROM users");
		$select_active = $connection->query("SELECT ACTIVE FROM users");
		$username_auth = 0;
		$password_auth = 0;
		$active = 0;
		$hash_whirlpool = hash("whirlpool", $password);
		$hash_md5 = hash("md5", $username);
		
		if (isset($username) && isset($password) && !empty($username) && !empty($password)) {
			foreach ($select_user as $user_row) {
				if ($user_row['USERNAME'] === $username) {
					$username_auth = 1;
					foreach ($select_password as $password_row) {
						if ($password_row['PASSWORD'] === $hash_whirlpool) {
							$password_auth = 1;
							foreach ($select_active as $active_row) {
								if ($active_row['ACTIVE'] === $hash_md5) {
									$active = 1;
								}
							}
						}
					}
				}
			}
			if ($username_auth == 1) {
				if ($password_auth == 1) {
					if ($active == 1) {
						session_start();
						header('location:http://localhost:8080/files/home_page1.php');
					}
					else
						echo "<div id='invalid'>This account has not been activated yet. <br />
							  Please check your email for the verification link.</div>";
				}
				else
					echo "<div id='invalid'>You have entered an Invalid Password</div>";
			}
			else
				echo "<div id='invalid'>You have entered an Invalid Username</div>";
		}
	?>
	</div> -->
</body>
</html>

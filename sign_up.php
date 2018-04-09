<!DOCTYPE html>
<html lang="en">
<head>
	<title>Camagru - Sign Up</title>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" type="text/css" href="stylesheets/sign_up.css" />
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
		<h2 id="sign_up">SIGN UP</h2>
	</div>
	  <form action="sign_up.php" method="POST">
		<table>
			<tr>
			    <td class="text">
			        Username:
			    </td>
			    <td>
			        <input type="text" id="username" name="username" class="inputs inputs1" />
			    </td>
			</tr>
			<tr>
			    <td class="text">
			        Email Address:
			    </td>
			    <td>
			        <input type="email" name="email" placeholder="email@domain.com" class="inputs inputs1" />
			    </td>
			</tr>
			<tr>
			    <td class="text">
			        Password:
			    </td>
			    <td>
			        <input type="password" id="password" name="password" class="inputs inputs1" />
			    </td>
			<tr><td><br/></td></tr>
			<tr>
				<td colspan="2">
					<a href="index.php" style="font-size: 1vw;">Already Registered? Sign-In Here!</a>
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
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password_hash = hash("whirlpool", $password);
		$hash = hash("md5", rand(1000, 10000));
		$connection = new PDO($DB_DSN, $DB_USER, $DB_PASS, $DB_PDO);
		$select_user = $connection->query("SELECT USERNAME FROM users");
		$select_email = $connection->query("SELECT EMAIL FROM users");
		$insert_into = $connection->prepare("INSERT INTO users (USERNAME, EMAIL, PASSWORD, HASH)
										   VALUES (:USERNAME, :EMAIL, :PASSWORD, :HASH)");

		if (isset($username) && isset($email) && isset($password) &&
			!empty($username) && !empty($email) && !empty($password)) {
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
				foreach ($select_user as $user_row) {
					if ($user_row['USERNAME'] == $username) {
						echo "<div id='invalid'>Username Already in Use<br />
							  Please Try Again</div><br />";
						return;
					}
				}

				foreach ($select_email as $email_row) {
					if ($email_row['EMAIL'] == $email) {
						echo "<div id='invalid'>Email Already in Use<br />
						 		Please Try Again</div><br />";
						return;
					}
				}

				$insert_into->bindParam(":USERNAME", $username);
				$insert_into->bindParam(":EMAIL", $email);
				$insert_into->bindParam(":PASSWORD", $password_hash);
				$insert_into->bindParam(":HASH", $hash);
				$insert_into->execute();

				
				
				$email_subject = "Camagru | Verification Email";
				$email_head = "From: noreply@camagru.42.fr"."\r\n";
				$email_message = "
				Good Day and Thank You for signing up with Camagru.
				Let the fun begin!
				
				You can log into the site with the following details:

				----------------------------------------------------
				USERNAME: ".$username."
				PASSWORD: ".$password."
				----------------------------------------------------

				You can verify your identity by clicking on the link below:
				authenticate.php?username=$username&hash=$hash
				
				Happy Snapping,
				Camagru Team";

				mail($email, $email_subject, $email_message, $email_head);
				echo "<div id='invalid'>Your user account has been created<br />
						Please check your email <span id='email'>$email</span> for the verification link.</div><br />";
				$connection = NULL;
			}
			else {
				echo "<div id='invalid'>Please enter a Valid Email Address</div><br />";
			}
		}
		else if (isset($username) && isset($email) && isset($password) && 
				(empty($username) || empty($email) || empty($password))) {
			echo "<div id='invalid'>Please complete all fields</div><br />";
		}
	?>
	</div> -->
</body>
</html>
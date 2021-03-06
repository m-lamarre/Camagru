<!DOCTYPE html>
<html lang="en">
<head>
	<title>Camagru - Forgot Password</title>
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
		<h2 id="sign_in">FORGOT PASSWORD</h2>
	</div>

	<div>
	  <form action="forgot_password.php" method="POST">
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
			        Email Address:
			    </td>
			    <td>
			        <input type="email" name="email" placeholder="email@domain.com" class="inputs" />
			    </td>
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

	<div>
	<!-- <?php
        include ('./config.php');
        $username = $_POST['username'];
        $email = $_POST['email'];
		$connection = new PDO($DB_DSN, $DB_USER, $DB_PASS, $DB_PDO);
        $select_username = $connection->query("SELECT USERNAME FROM users WHERE USERNAME like '$username'");
        $select_email = $connection->query("SELECT EMAIL FROM users WHERE USERNAME like '$username'");
		$select_password = $connection->query("SELECT PASSWORD FROM users WHERE USERNAME like '$username'");

        if (isset($username) && isset($email) && !empty($username) && !empty($email)) {
            foreach ($select_username as $user_row) {
                if ($user_row['USERNAME'] == $username) {
                    foreach ($select_email as $email_row) {
                        if ($email_row['EMAIL'] == $email) {
                            foreach ($select_password as $password_row) {
								$password = $password_row['PASSWORD'];

								
								$email_subject = "Camagru | Password Change Request";
								$email_head = "From: noreply@camagru.42.fr"."\r\n";
								$email_message = "
								Good Day ".$username.",

								Please note that a change of password request has been sent to you:

								----------------------------------------------------
								EMAIL ADDRESS: ".$email."
								----------------------------------------------------

								You can click on the link below to make the change:

								http://localhost:8080/files/change_password.php?change_log=$password
								
								Thank you for your continued use,
								Camagru Team";
								mail($email, $email_subject, $email_message, $email_head);

								echo "<div id='invalid1'>An email has been sent to your email <span id='email'>$email</span> <br />
										You will be able to change your password by clicking the verification link.</div><br />";								
                            }
                        }
                    }
                }
            }
        }
        else if (isset($username) && isset($email) && (empty($username) || empty($email))) {
            echo "<div id='invalid1'>Please enter a Username and an Email Address</div>";
        }
    ?>
	</div> -->
</body>
</html>
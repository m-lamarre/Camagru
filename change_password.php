<!DOCTYPE html>
<html lang="en">
<head>
	<title>Camagru - Change Password</title>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" type="text/css" href="stylesheets/sign_in.css" />
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
		<h2 id="sign_in">CHANGE PASSWORD</h2>
	</div>

	<div>
	  <form action="change_password.php" method="POST">
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
			        New Password:
			    </td>
			    <td>
                    <input style="display: none" type="text" name="old_password" class="inputs" value="<?php echo ($_GET['change_log']) ?>"  />
			        <input type="password" name="new_password" class="inputs"  />
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

	<!-- <div>
	<?php
        include ('./config.php');
        $username = $_POST['username'];
        $new_password = $_POST['new_password'];
		$old_password = $_POST['old_password'];
        $connection = new PDO($DB_DSN, $DB_USER, $DB_PASS, $DB_PDO);
        $select_username = $connection->query("SELECT USERNAME FROM users WHERE USERNAME like '$username'");
        $select_password = $connection->query("SELECT PASSWORD FROM users WHERE USERNAME like '$username'");
        $update_table = $connection->prepare("UPDATE users SET PASSWORD=:PASSWORD WHERE USERNAME like '$username'");

        if (isset($username) && isset($new_password) && !empty($username) && !empty($new_password)) {
            foreach ($select_username as $user_row) {
                if ($user_row['USERNAME'] == $username) {
                    foreach ($select_password as $password_row) {
                        if ($password_row['PASSWORD'] == $old_password) {
                            $update_table->bindParam(':PASSWORD', hash('whirlpool', $new_password));
                            $update_table->execute();
                            echo "<div id='invalid1'>Your password has been changed.<br />
										Please log in using your New Password.</div><br />";
                        }
                    }
                }
            }
        }
        else if (isset($username) && isset($new_password) && (empty($username) || empty($new_password))) {
            echo "<div id='invalid1'>Please enter your Username and a New Password</div>";
        }
    ?>
	</div> -->
</body>
</html>
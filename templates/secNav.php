		<ul>
			<li><a href="index.php">Home</a></li>
			<?php if (!isset($_COOKIE['karnakCookie']))	{ echo '<li><a href="register.php">Register</a></li>';
																				echo '<li><a href="logIn.php">Log In</a></li>';} ?>
			<?php if (isset($_COOKIE['karnakCookie']))	{echo '<li><a href="userHome.php">Your Home</a></li>'; 
																		 echo '<li><a href="userPage.php">Your Profile</a></li>';
																		 echo '<li><a href="userPosts.php">Your Posts</a></li>';
																		  echo '<li><a href="logOut.php">Log Out</a></li>';}?>
			<li><a href="index.php">Home</a></li>
		</ul>
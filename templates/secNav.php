
<!--<ul class="parentMenu">
    <li>Menu
<ul class="navMenu">
<li><a href="index.php">Home</a></li>
<?php//  if (!isset($_COOKIE['karnakCookie'])){
//        echo '<li><a href="register.php">Register</a></li>
//              <li><a href="logIn.php">Log In</a></li>';} 
//    
//else if (isset($_COOKIE['karnakCookie'])){
//    echo '<li><a href="userHome.php">Your Home</a></li>; 
//          <li><a href="userPage.php">Your Profile</a></li>
//          <li><a href="userPosts.php">Your Posts</a></li>
//          <li><a href="logOut.php">Log Out</a></li>';}  ?>
</ul>
    </li>
</ul>-->




<h3>Menu</h3>
<ul class="navMenu">
<li><a href="index.php">Home</a></li>
<?php  if (!isset($_COOKIE['karnakCookie'])){
        echo '<li><a href="register.php">Register</a></li>
              <li><a href="logIn.php">Log In</a></li>';} 
    
else if (isset($_COOKIE['karnakCookie'])){
    echo '<li><a href="userHome.php">Your Home</a></li> 
          <li><a href="userPage.php">Your Profile</a></li>
          <li><a href="userPosts.php">Your Posts</a></li>
          <li><a href="logOut.php">Log Out</a></li>';}  ?>
</ul>


<?php 
session_start();
if (isset($_SESSION['username'])) {
    echo '<span>Logged in as '.$_SESSION['username'] .'</span> | ';
    echo '<a href="Logout.php">Logout</a>';
    echo '<hr>';
} else {
    echo '
    <a href="/project/GenNext_Project/home.php">Home</a> |
    <a href="/project/CloudKitchen/Admin_Login.php">Login</a> |
	<a href="/project/CloudKitchen/Registration.php">Registration</a>
  <hr>
';
}
?>


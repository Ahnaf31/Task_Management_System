
<?php 
session_start();
if (isset($_SESSION['email'])) {
    echo '<span>Logged in as '.$_SESSION['username'] .'</span> | ';
    echo '<a href="/project/GenNext_Project/User/view/Logout.php">Logout</a> |';
    echo '<hr>';
} else {
    echo '
    <a href="/project/GenNext_Project/Home.php">Home</a> |
    <a href="/project/GenNext_Project/User/view/User_login.php">Login</a> |
  <hr>
';

}
?>



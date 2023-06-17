<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
<style>
  .large-break {
    margin-bottom: 100px;
  }
</style>
</head>
<body style="background-color:#f0f0f0;">
<fieldset>
Task management system
<div align=right>
<?php
include 'C:/xampp/htdocs/project/GenNext_Project/User/Navigation/header.php';?>
</div>
 </fieldset>


 


<fieldset>
<div align=center><img src='/project/GenNext_Project/logo.png' alt="TManagement" width="150" height="150"></div>
<h2 style="text-align:center"; >Access Your Team's Task Management Portal</h2>
<br>

  <h3 style="text-align:center; color:#800080;" >If you are new, then create an account from the "Sign Up" button</h3>
 
 <div align=center><br>
<button onclick="location.href='/project/GenNext_Project/User/view/User_signup.php'" type="button" style="color: green;">Sign Up</button>

<br><br><br>

 <h3 style="text-align:center; color:#800080;" >Already have an account? Simply click the 'Sign In' button.</h3>
<button onclick="location.href='/project/GenNext_Project/User/view/User_login.php'" type="button" style="color: green;">Sign In</button>
<div class="large-break"></div>
</fieldset>
  

 
 <fieldset>
 <div align=center>
<?php include 'C:/xampp/htdocs/project/GenNext_Project/User/Navigation/footer.php';?>
</div>
</fieldset>
</body>
</html>
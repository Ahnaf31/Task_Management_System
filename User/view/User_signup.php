
<head>
    <title>Create Account for User</title>
<style rel="stylesheet">	

body {
  background-color: #f0f0f0;
  font-family: Arial, sans-serif;
}

h1 {
  text-align: center;
  color: green;
  font-size: 24px;
  margin-bottom: 20px;
}

fieldset {
  border: 1px solid #ccc;
  border-radius: 10px;
  padding: 20px;
  background-color: #fff;
  width: 400px;
  margin: 0 auto;
}

form input[type="text"],
form input[type="password"],
form input[type="email"],
form input[type="nid"],
form input[type="radio"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

form button[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  margin-top: 20px;
  font-size: 16px;
  color: #fff;
  background-color: #4caf50;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

form button[type="submit"]:hover {
  background-color: #45a049;
}


</style>

</head>

<fieldset>
Task management system
<div align=right>
<?php include 'C:/xampp/htdocs/project/GenNext_Project/User/Navigation/header.php';?>
</div>
</fieldset>


<h1>Create Account for User</h1>

 <fieldset>
    <form id="register_form" action="../controller/User_signup_controller.php" method="post" name="regform">
        <h1 style="color: Green; font-size: 30px; text-align:center">User Registration</h1>
        FULL NAME:<input type="text" name="fname" placeholder="Full Name" value="" onkeypress='return onlyalphabets(event)'/><div id="fname" class="val"></div>
        <span></span>
        <br>USERNAME:<input type="text" name="username" placeholder="Name" id="username" onkeypress='return onlyalphabets2(event)'/>
        <span></span>
        <br>PASSWORD:<input type="password" name="password" placeholder="Password" id="password">
        <br>Confirm PASSWORD:<input type="password" name="Cpassword" placeholder="Confirm Your Password" id="Cpassword">
        <br>EMAiL:<input type="email" id="email" name="email" placeholder="Email" >
        <br>NID:<input type="nid" name="nid" placeholder="Nid" id="nid">
        <span></span>
        <br><br>
        <br>
        <br>
        <button style="cursor:move" type="submit" name="submit" id="submit" onclick="return Rcheck()">Registration</button>
    </form>
</fieldset>
 
<script type="text/javascript">
"use strict";

function onlyalphabets(e) {
  var name = e.which || e.keycode;

  if (
    (name >= 65 && name <= 90) ||
    name == 95 ||
    name == 32 ||
    (name >= 97 && name <= 122) ||
    name == 8
  ) {
    return true;
  } else {
    return false;
  }
}

function onlyalphabets2(e) {
  var name = e.which || e.keycode;

  if (
    (name >= 65 && name <= 90) ||
    name == 95 ||
    (name >= 97 && name <= 122) ||
    name == 8
  ) {
    return true;
  } else {
    return false;
  }
}

function Rcheck() {
  var fname = document.forms["regform"]["fname"];
  var username = document.getElementById("username").value;
  var pass = document.getElementById("password").value;
  var Cpass = document.getElementById("Cpassword").value;
  var email = document.getElementById("email").value;
  var nid = document.getElementById("nid").value;

  if (fname.value == "") {
    alert("Please fill in all the fields");
    return false;
  }
  if (WordCount(fname.value) < 2) {
    alert("Full name must contain at least 2 words");
    return false;
  }

  if (fname.length < 4) {
    alert("Name must be at least 4 characters to be valid in this field");
    return false;
  }
  if (fname.length > 15) {
    alert("Name must be less than 15 characters to be valid in this field");
    return false;
  }

  if (username == "") {
    alert("Please fill in the username to proceed");
    return false;
  }
  if (username.length < 4) {
    alert("Username must be at least 4 characters to be valid in this field");
    return false;
  }
  if (username.length > 15) {
    alert("Username must be less than 15 characters to be valid in this field");
    return false;
  }
  if (pass == "") {
    alert("Please fill in the password to proceed");
    return false;
  }
  if (Cpass == "") {
    alert("Please confirm the password to proceed");
    return false;
  }
  if (pass != Cpass) {
    alert("Please confirm that you entered the same password twice to proceed");
    return false;
  }
  if (pass.length < 6) {
    alert("Password must contain at least 6 characters to be valid in this field");
    return false;
  }
  if (pass.length > 15) {
    alert("15 characters are strong enough to make the password valid in this field");
    return false;
  }
  if (email == "") {
    alert("Please fill in the email to proceed");
    return false;
  }
  if (email.slice(-4) !== ".com" && email.slice(-3) !== ".org") {
    alert("Warning: The email should end with '.com' or '.org' to be valid");
    return false;
  }
  if (nid == "") {
    alert("Please fill in the NID to proceed");
    return false;
  }
  if (nid.length < 12) {
    alert("12 characters are required for NID");
    return false;
  }

  // Redirect to another page after form submission
  window.location.href = "../view/adminDashboard.php";
}

function WordCount(str) {
  return str.split(" ").length;
}

		
	</script>
<fieldset>
 <div align=center>
<?php include 'C:/xampp/htdocs/project/GenNext_Project/User/Navigation/footer.php';?>
</div>
</fieldset>
</body>
</html>
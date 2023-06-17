<!DOCTYPE html>
<html>
<head>


    <title>Log in</title>

<style rel="stylesheet">
body {
  background: rgb(0, 128, 128);
  font-family: "Arial", sans-serif;
}

#LOGIN_form {
  width: 500px;
  margin: 100px auto;
  padding: 30px;
  border: 1px solid #918274;
  border-radius: 20px;
  color: black;
  font-size: 18px;
  background: rgb(192, 192, 192);
}

#LOGIN_form h1 {
  text-align: center;
  font-size: 30px;
  margin-bottom: 20px;
}

#LOGIN_form input[type="text"],
#LOGIN_form input[type="password"] {
  width: 100%;
  height: 35px;
  margin-bottom: 15px;
  padding: 5px 10px;
  font-size: 18px;
}

#submit {
  height: 40px;
  width: 100%;
  margin-bottom: 15px;
  font-size: 20px;
  color: white;
  background: rgb(0, 255, 0);
  border: none;
  border-radius: 5px;
  cursor: pointer;
}



.reg {
  font-size: 30px;
  color: white;
  background-color: rgb(255, 124, 53);
  text-decoration: underline bold;
}

.forget {
  font-size: 16px;
  color: red;
  background-color: rgb(255, 154, 53);
  text-decoration: underline bold;
}

label {
  color: #a64dff;
  font-size: 18px;
}

.error {
  color: #ff0000;
  font-size: 15px;
  margin-top: 5px;
}

/* Responsive Design */
@media (max-width: 600px) {
  #LOGIN_form {
    width: 80%;
  }
}
</style>

</head>
<body style="background-color:#f0f0f0;">

Task management system
<div align=right>
<?php include 'C:/xampp/htdocs/project/GenNext_Project/User/Navigation/header.php';?>
</div>



 
 <form id="LOGIN_form" action="../controller/User_login_controller.php" method="post" ;"/>


		<center><h1>User Login</h1>
		<div>
			<input type="text" id="email" name="email" placeholder="email" onkeypress='return onlyalphabets(event)'/>
			<span class="error" id="emailErr"><?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];}?></span>
		</div>
		<div>
			<input type="password" id="password" name="password" placeholder="Password">
			  <span class="error" id="passwordErr"><?php if(!empty($_GET['passwordErr'])){echo $_GET['passwordErr'];}?></span>
		</div>
		<div>
			<input type="checkbox" id="reme" name="remember" value="remember">
			<label for="reme" > Remember Me</label><br>
			
			<button type="submit" name="submit" id="submit" onclick="Lcheck()">Login</button>
			<a href="../view/User_signup.php">Registration</a> <br> <br>
			
				<a href="../view/Admin_forget_pass.php">Forget Pass</a>
		</center></div>
	</form>

<script>
 function onlyalphabets(e) {
    var name = e.which || e.keycode;
    if ((name >= 65 && name <= 90) || (name == 95) || (name >= 97 && name <= 122) || name == 8) {
        return true;
    } else {
        return false;
    }
}

function Lcheck() {
    var email = document.getElementById('email').value;
    var pass = document.getElementById('password').value;

    if (email == "") {
        alert('PLEASE FILL THE EMAIL to proceed');
        return false;
    }
    if (!validateEmail(email)) {
        alert('Invalid email format');
        return false;
    }

    if (pass == "") {
        alert('PLEASE FILL THE PASSWORD area to proceed');
        return false;
    }
    if (pass.length < 6) {
        alert('PASSWORD must contain at least 6 characters to be valid in this field');
        return false;
    }
    if (pass.length > 10) {
        alert('10 characters are STRONG enough to make PASSWORD valid in this field');
        return false;
    } else {
        location.href = "../views/adminDashboard.php";
    }
}

function validateEmail(email) {
    var format = /\S+@\S+\.\S+/;
    return format.test(email);
}
</script>

 <div align=center>
<?php include 'C:/xampp/htdocs/project/GenNext_Project/User/Navigation/footer.php';?>
</div>

</body>
</html>
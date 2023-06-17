
<?php
require_once "../model/model.php";

session_start();
if(isset($_POST['submit']))
{

if(isset($_POST['remember'])) {
setcookie("email", $_POST["email"], time()+1000);
setcookie("password", $_POST["password"], time()+1000);
}

  function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }

  $email=$password="";
  $flag=1;


  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $flag = 0;
	} 
	else {
		$email = test_input($_POST["email"]);

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
			{
			$emailErr = "Invalid email format";
			$flag = 0;
			} 
			
		else {
				if (strlen($email) < 4) {
					$emailErr = "Email must contain at least four characters";
					$flag = 0;
				}
			}
		}

if (!empty($_POST["password"])) {
        $password = test_input($_POST["password"]);
        if (strlen($_POST["password"]) < 8) {
            $passwordErr = "Your Password Must Contain At Least 8 Characters!";
        } elseif (!preg_match("#[a-z]+#", $password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
        }
    } elseif (!empty($_POST["password"])) {
        $passwordErr = "Please enter the password";
    }


if($flag==0){
  header('Location: ../view/User_Login.php');
}


 if ($flag == 1) {
    try {
        $data = searchemail($email);
        if ($data != NULL) {
            $passwordFromDB = ""; // Initialize the variable
            foreach ($data as $i => $user) {
                $passwordFromDB = $user['password'];
				$username = $user['username']; // Fetch the username from the data
            }
            if ($password == $passwordFromDB) {
                session_start();
                $_SESSION['email'] = $email;
				$_SESSION['username'] = $username;
                header('Location: ../view/UserDashboard.php');
                exit();
            } else {
                echo "Incorrect Password";
            }
        } else {
            echo "Email not found";
        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}


}

else {
  echo "You are not allowed to access this page";
}
if(!empty($_POST["remember"])) {
  setcookie ("email",$_POST["email"],time()+ 1000);
  setcookie ("password",$_POST["password"],time()+ 1000);
  echo "Cookies Set Successfuly <br>";
} else {
  setcookie("email","");
  setcookie("password","");
}



?>
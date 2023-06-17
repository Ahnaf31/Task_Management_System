<?php
	
	session_start();
	require('../model/model.php');
	
	if(isset($_POST['submit']))
	{
		$fname = $_POST['fname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$nid = $_POST['nid'];
		
		$con = mysqli_connect('127.0.0.1', 'root', '', 'task_management');
		
		if(!$con)
		{
			echo 'connection to server is denied';
			header("refresh:6;	url=../view/User_signup.php");
		}		
		else
		{
		
		$sql = "INSERT INTO `users` (`fname`,`username`,`password`,`email`,`nid`) VALUES ('$fname','$username','$password','$email','$nid')";
				
			if(mysqli_query($con, $sql))
			{
				echo "COngraTS !! You have created an account successfully! Now You can Login";
				header("refresh:4;	url=../view/UserDashboard.php");
			}
			else
			{
				echo "!! ERROR to store in database !!";
				header('Location: /project/GenNext_Project/User/view/User_signup.php');
			}
			
		}
		
	}
	else
	{
		echo "ERROR!";
		header('Location: /project/GenNext_Project/User/view/User_signup.php');
	}
	
?>
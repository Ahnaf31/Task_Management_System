<?php


	require('../model/model.php');
	
	if(isset($_POST['submit']))
	{
		$task_name = $_POST['task_name'];
		$description = $_POST['description'];
		$due_date = $_POST['due_date'];
		$assignee = $_POST['assignee'];
		
		$con = mysqli_connect('127.0.0.1', 'root', '', 'task_management');
		
		if(!$con)
		{
			echo 'connection to server is denied';
			header("refresh:6;	url=../view/Task_Creation.php");
		}		
		else
		{
		
		$sql = "INSERT INTO `create_task` (`task_name`,`description`,`due_date`,`assignee`) VALUES ('$task_name','$description','$due_date','$assignee')";
				
			if(mysqli_query($con, $sql))
			{
				echo "Congrats !! New Task is inserted successfully!";
				header("refresh:3;	url=../view/UserDashboard.php");
			}
			else
			{
				echo "!! ERROR to store in database !!";
				header("refresh:7;	url=../view/Task_Creation.php");
			}
			
		}
		
	}
	else
	{
		echo "ERROR!";
		header("refresh:3;	url=../view/Task_Creation.php");
	}
	
?>
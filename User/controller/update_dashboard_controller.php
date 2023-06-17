<?php

$con = mysqli_connect('127.0.0.1', 'root', '', 'task_management');

if (!$con) 
	{
    echo 'Connection to the server is denied';
    header("refresh:2; url=../views/View_profile.php");
	} 
else 
	{
		if (isset($_POST['mark_complete']) && isset($_POST['id'])) {
			$taskId = $_POST['id'];
			
			$sql = "UPDATE create_task SET status = 'Completed' WHERE id = '$taskId'";
			
			if (mysqli_query($con, $sql)) {
				echo "Task marked as completed!";
				header("refresh:4; url=../view/UserDashboard.php");
			} else {
				echo "Error updating task status!";
			}
		} else {
			echo "Invalid request!";
		}
	}

?>

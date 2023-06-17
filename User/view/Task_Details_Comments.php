<?php
	require('../model/model.php');
	$result = getAllUsers();
	
	$con = mysqli_connect('127.0.0.1', 'root', '', 'task_management');
	$sql = "SELECT * FROM `create_task`";
	$results = mysqli_query($con, $sql);
?>

<html>
<head>
	<title>Task Details And Comments</title>
	<style>
	body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

h1 {
    text-align: center;
	font-size: 25px;
}

table {
    border-collapse: collapse;
    width: 80%;
    margin: 20px auto;
}

td {
    padding: 10px;
    text-align: center;
}

th {
    background-color: #f2f2f2;
    padding: 10px;
    text-align: center;
}

a {
    display: inline-block;
    height: 40px;
    width: 300px;
    margin: 10px;
    font-size: 20px;
    color: #fff;
    background-color: #4CAF50;
    text-decoration: none;
    border-radius: 5px;
    text-align: center;
    line-height: 40px;
}

fieldset {
    border: none;
    margin-top: 20px;
    margin-bottom: 20px;
}

.sidebar {
    width: 200px;
    padding: 10px;
    background-color: #f0f0f0;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.sidebar a {
    display: block;
    margin-bottom: 10px;
    color: midnightblue;
    text-decoration: none;
}

.sidebar a:hover {
    text-decoration: underline;
}


	</style>
</head> 
<body>
	<center>
		<br>
		<br>
		<table border="4">
			<tr>
				<td colspan="4">
					<h1><b><center>Task Details And Comments</center></b></h1>
				</td>
			</tr>
			<div align="right">
				<?php include 'C:/xampp/htdocs/project/GenNext_Project/User/Navigation/header.php';?>
			</div>
			
		<tr>
	<td><center><b>Task Name:</b></center></td>
	<td><center><b>Description:</b></center></td>
	<td><center><b>Due Date:</b></center></td>
	<td><center><b>Assignee:</b></center></td>
</tr>

			
			<?php
			while($row = mysqli_fetch_array($results)) {
				echo '<tr>';
				echo '<td>' . $row['task_name'] . '</td>';
				echo '<td>' . $row['description'] . '</td>';
				echo '<td>' . $row['due_date'] . '</td>';
				echo '<td>' . $row['assignee'] . '</td>';
				echo '</tr>';
			}
			?>
			
			<tr>
				<td colspan="4"><center><a href="Task_Creation.php"><b>Create New Task</b></a></center></td>
			</tr>
		
		</table>
		
		<table border="4">
			<tr>
				<td colspan="4">
					<h1><b><center>Comments Section</center></b></h1>
				</td>
			</tr>
			
		<tr>
	<td><center><b>Task Name:</b></center></td>
	<td><center><b>Comment:</b></center></td>
	<td><center><b>Commented By:</b></center></td>
	<td><center><b>Date and Time:</b></center></td>
	
</tr>

			
			<?php
			$sql = "SELECT * FROM comment";
				$as = mysqli_query($con, $sql);
			while($row = mysqli_fetch_array($as)) {
				echo '<tr>';
				echo '<td>' . $row['task_name'] . '</td>';
				echo '<td>' . $row['comment_text'] . '</td>';
				echo '<td>' . $_SESSION['username'] . '</td>'; // Assuming 'name' is the session variable containing the commenter's name
				echo '<td>' . date('Y-m-d H:i:s') . '</td>'; // Current date and time
				echo '</tr>';
			}
			?>
		
		
	<tr>
				<td colspan="4"><center><form action="../controller/comment_controller.php" method="post">
			<textarea name="comment_text" placeholder="Enter your comment"></textarea><br>
			<select name="task_name">
				<?php
				// Fetch task names from the database
				$sql = "SELECT * FROM create_task";
				$result = mysqli_query($con, $sql);
				while ($row = mysqli_fetch_assoc($result)) {
					echo '<option value="' . $row['task_name'] . '">' . $row['task_name'] . '</option>';
				}
				?>
			</select><br>
			<input type="submit" name="submit" value="Add Comment" class="submit-btn">
		</form></center></td>
			</tr>
		</table>
		
		
	</center>
</body>

<fieldset>
Menu <br>
___________<br>
<div align="left">
	<?php include 'C:/xampp/htdocs/project/GenNext_Project/User/Navigation/sidebar.php';?>
</div>
</fieldset>
</html>

<fieldset>
Task management system
<div align=right>
<?php include 'C:/xampp/htdocs/project/GenNext_Project/User/Navigation/header.php';
if(!isset($_SESSION['email'])){  
		header("location: User_Login.php");
		}
		
		$con = mysqli_connect('127.0.0.1', 'root', '', 'task_management');
	$sql = "SELECT * FROM `create_task`";
	$results = mysqli_query($con, $sql);
	
	?>
</div>
</fieldset>

<html>
<head>
<link rel="stylesheet" href="../UI_UX/dashboard.css">
	<title>Task Filters and Sorting</title>
</head> 
<body>
	<fieldset>
    
    <form action="../controller/sorting_controller.php" method="post">
        <label for="filter">Filter tasks:</label>
        <select name="filter" id="filter">
            <option value="all">All Tasks</option>
            <option value="assigned">Assigned to Me</option>
            <option value="completed">Completed Tasks</option>
        </select>

        <label for="sort">Sort tasks by:</label>
        <select name="sort" id="sort">
            <option value="default">Default</option>
            <option value="due_date">Due Date</option>
        </select>

        <input type="submit" name="apply_filters" value="Apply Filters">
    </form>


    <h2>Filtered Tasks</h2>
    <table>
        <tr>
            <th>Task Name</th>
            <th>Due Date</th>
            <th>Status</th>
        </tr>

        <?php
        while ($row = mysqli_fetch_array($results)) {
            echo "<tr>";
            echo "<td>" . $row['task_name'] . "</td>";
            echo "<td>" . $row['due_date'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "</tr>";
        }
        ?>

    </table>
</fieldset>
</body>

<fieldset>
Menu <br>
___________<br>
<div align="left">
	<?php include 'C:/xampp/htdocs/project/GenNext_Project/User/Navigation/sidebar.php';?>
</div>
</fieldset>
</html>

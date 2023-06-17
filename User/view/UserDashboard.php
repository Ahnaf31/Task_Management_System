<?php
$con = mysqli_connect('127.0.0.1', 'root', '', 'task_management');
$sql = "SELECT * FROM create_task";
$results = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../UI_UX/dashboard.css">
    <title>Dashboard</title>
</head>
<body style="background-color:#f0f0f0;">

<fieldset>
    <legend>Task Management System</legend>

    <div align="right">
        <?php
        include 'C:/xampp/htdocs/project/GenNext_Project/User/Navigation/header.php';
        if (!isset($_SESSION['email'])) {
            header("location: User_Login.php");
        }
        ?>
    </div>
</fieldset>

<fieldset>
    <div align="center">
        <img src="logo.png" alt="Task Management" width="200" height="200"><br>
        <h2>Simplify Your Team's Workflow</h2>
		  <center>
        <?php
        if (isset($_SESSION['email'])) {
            echo "<h3>Welcome " . $_SESSION['username'] . " to the User's Dashboard! Manage your tasks, track progress, and collaborate with ease. Let's make your project a success!</h3>";
        }
        ?>
    </center>
    </div>
<br> <br>
    <form action="../controller/update_dashboard_controller.php" method="post">
    <table>
        <tr>
            <th>Task Name</th>
            <th>Due Date</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>

        <?php
        if (isset($_SESSION['email'])) {
            while ($row = mysqli_fetch_array($results)) {
                echo "<tr><form action='../controller/update_dashboard_controller.php' method='post'>";
                echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
                echo "<td>" . $row['task_name'] . "</td>";
                echo "<td>" . $row['due_date'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                
                if ($row['status'] == 'On going') {
                    echo '<td><input type="submit" name="mark_complete" value="Mark as Complete"></td>';
                } else {
                    echo '<td>Completed</td>';
                }
                
                echo "</form></tr>";
            }
        } else {
            header('Location: /project/GenNext_Project/User/view/User_Login.php');
        }
        ?>
    </table>
</form>


  
</fieldset>

<fieldset>
    <legend>Menu</legend>
    <div align="left">
        <?php include 'C:/xampp/htdocs/project/GenNext_Project/User/Navigation/sidebar.php'; ?>
    </div>
</fieldset>

<fieldset>
    <div align="center">
        <?php include 'C:/xampp/htdocs/project/GenNext_Project/User/Navigation/footer.php'; ?>
    </div>
</fieldset>

</body>
</html>

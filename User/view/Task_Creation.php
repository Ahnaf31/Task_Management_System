<fieldset>
Task management system
<div align=right>
<?php include 'C:/xampp/htdocs/project/GenNext_Project/User/Navigation/header.php';
if(!isset($_SESSION['email'])){  
		header("location: User_Login.php");
		
	}?>
</div>
</fieldset>

<!DOCTYPE html>
<html>
<head>
	<title>Create Task</title>
	<style>
   body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
 
    }

    h1 {
        text-align: center;
    }

    .error {
        color: red;
        margin-bottom: 10px;
    }

    .form-container {
        width: 100px;
        margin: 0 auto;
        background-color: #f0f0f0;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: bold;
    }

    input[type="text"],
    textarea,
    input[type="date"] {
        width: 50%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    textarea {
        height: 30px;

    }

    .submit-btn {
        display: block;
        width: 50%;
        padding: 10px;
        font-weight: bold;
        text-align: center;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>

</head>
<body>
	
	<form name="tinsert" id="Tinsert_form" action="../controller/Task_Creation_controller.php" method="post" onsubmit="validateForm();">
		
		
		<div class="form-group">
                <label for="task_name">Task Name:</label>
                <input type="text" name="task_name" id="task_name" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" required></textarea>
            </div>

            <div class="form-group">
                <label for="due_date">Due Date:</label>
                <input type="date" name="due_date" id="due_date" required>
            </div>

            <div class="form-group">
                <label for="assignee">Assignee:</label>
                <input type="text" name="assignee" id="assignee" required>
            </div>

            <input type="submit" name="submit" value="Create Task" class="submit-btn">
		
	</form>
	
	<script>
        function validateForm() {
            var taskName = document.getElementById("task_name").value;
            var description = document.getElementById("description").value;
            var dueDate = document.getElementById("due_date").value;
            var assignee = document.getElementById("assignee").value;

            var errors = [];

            if (taskName.trim() === "") {
                errors.push("Task Name is required.");
            }

            if (description.trim() === "") {
                errors.push("Description is required.");
            }

            if (dueDate === "") {
                errors.push("Due Date is required.");
            }

            if (assignee.trim() === "") {
                errors.push("Assignee is required.");
            }

            if (errors.length > 0) {
                var errorDiv = document.createElement("div");
                errorDiv.className = "error";

                for (var i = 0; i < errors.length; i++) {
                    var errorText = document.createTextNode(errors[i]);
                    errorDiv.appendChild(errorText);
                    errorDiv.appendChild(document.createElement("br"));
                }

                var formContainer = document.getElementsByClassName("form-container")[0];
                formContainer.insertBefore(errorDiv, formContainer.firstChild);

                return false;
            }

            return true;
        }
    </script>
	<fieldset><br>
	
Menu <br>
___________<br>
<div align=left>
<?php include 'C:/xampp/htdocs/project/GenNext_Project/User/Navigation/sidebar.php';
?>

	
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Log out</title>
	 <style>
        body {
            background-color:#f0f0f0;
            font-family: "Arial", sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: rgb(153, 0, 204);
            font-size: 28px;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            height: 40px;
            line-height: 40px;
            padding: 0 20px;
            margin-top: 20px;
            font-size: 18px;
            color: white;
            background-color: midnightblue;
            text-decoration: none;
            border-radius: 4px;
        }

        a:hover {
            background-color: #004080;
        }

        @media (max-width: 600px) {
            .container {
                max-width: 80%;
            }
        }
    </style>
</head>
<body style="background-color:#f0f0f0;">
<fieldset>
Task management system

<div align="right">
<?php include 'C:/xampp/htdocs/project/GenNext_Project/User/Navigation/header.php';?>
</div>

</fieldset>
<fieldset>
<?php 
session_destroy();
$email = $pass = "";
setcookie('email', $email, time() - 1);
setcookie('password', $pass, time() - 1);
echo "You successfully logout. click here to <a href ='/project/GenNext_Project/User/view/User_Login.php'>Login Again</a>";
?>
</fieldset>
<fieldset>

 <div align="center">
<?php include 'C:/xampp/htdocs/project/GenNext_Project/User/Navigation/footer.php';?>
</div>

</fieldset>
</body>
</html>

<?php
require_once "../model/model.php";
$con = mysqli_connect('127.0.0.1', 'root', '', 'task_management');
session_start();
        $filter = isset($_POST['filter']) ? $_POST['filter'] : 'all';
        $sort = isset($_POST['sort']) ? $_POST['sort'] : 'default';

        $sql = "SELECT * FROM create_task";

        if ($filter == 'assigned') {
            $sql .= " WHERE assignee = '{$_SESSION['username']}'";
        } elseif ($filter == 'completed') {
            $sql .= " WHERE status = 'Completed'";
        }

        if ($sort == 'due_date') {
            $sql .= " ORDER BY due_date";
        }

        if ($filter == 'all' && $sort == 'default') {
            $sql = "SELECT * FROM create_task";
        }

        $results = mysqli_query($con, $sql);



?>
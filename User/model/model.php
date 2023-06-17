<?php

require_once 'dbconnect.php';

function validate($email, $password)
	{

		$con = getConnection();
		$sql = "select * from users where email='{$email}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}


	function getAllUsers()
	{
		$con = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($con, $sql);
		return $result;
	}
	
	function getAllcomment()
	{
		$con = getConnection();
		$sql = "select * from comment";
		$result = mysqli_query($con, $sql);
		return $result;
	}
	
function searchemail($email){
    $con = getConnection();
    $sql = "select * from users where email='{$email}'";
	$result = mysqli_query($con, $sql);
		return $result;
}

function getPassword($email){
	$con = getConnection();
    $sql = "select password from users where email='{$email}'";
	$result = mysqli_query($con, $sql);
		return $result;
}


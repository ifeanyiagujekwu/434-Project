<?php
	include 'config1.php';
	session_start();

	$user_check=$_SESSION['login_user'];

	$ses_sql=mysqli_query($db,"SELECT Matric from student where Matric='$user_check' ");

	$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
	$login_session =$row['matric'];

	if (!isset($_SESSION['login_user'])) {
		header('location:studentpage.php');
		die();
	}
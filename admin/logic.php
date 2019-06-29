<?php
	session_start();
	require_once('../connection.php');

	if(isset($_POST['submit_login'])){
		print_r($_POST);
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql = "SELECT * from users where email = '$email' AND password ='".md5($password)."' ";
		$result = $conn -> query($sql);
		if($result -> num_rows >= 1){
			$record = $result -> fetch_assoc();
			$_SESSION['user_id'] = $record['id'];
			$_SESSION['name'] = $record['name'];
			$_SESSION['email'] = $record['email'];
			header('location:index.php');
		}else{
			header('location:login.php');
		}


	}
	
?>
<?php 
//var_dump($_POST);
//die;
session_start();
require_once('../connect.php');
$email='';
$password='';
if(isset($_POST['submit'])){

		if(isset($_POST['email'])){
			$email=$_POST['email'];

		}
		if(isset($_POST['password'])){
			$password=$_POST['password'];
		}
	}
	$query = "SELECT * FROM authors WHERE email ='".$email."' AND password = '".$password."' AND status = 1 AND deleted_at is null;";
	//var_dump($query);
	//die;
	$author = $conn->query($query)->fetch_assoc();


	if($author){
		$_SESSION['isLogin']= true;
		$_SESSION['author_id']= $author['id'];


		header("Location: ../posts/list.php");
	}
	else{
		header("Location: login.php");
	}

 ?>
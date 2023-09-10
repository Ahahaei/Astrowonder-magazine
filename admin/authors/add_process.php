<?php 
	require_once('../connect.php');
	date_default_timezone_set('Asia/Ho_Chi_minh');
	$name='';
	$description='';
	$email='';
	$password= '';
	$status='';
	if(isset($_POST['submit'])){
		if(isset($_POST['name'])){
			$name=$_POST['name'];
		}
		if(isset($_POST['description'])){
			$description=$_POST['description'];
		}
		if(isset($_POST['email'])){
			$email=$_POST['email'];
		}
		if(isset($_POST['password'])){
			$password=$_POST['password'];
		}
		if(isset($_POST['status'])){
			$status=$_POST['status'];
		}
	}
	$created_at = date ('Y-m-d h:i:s');
	$query="INSERT INTO authors (name, description, status, created_at, email, password ) VALUES ('".$name."', '".$description."',".$status.",'".$created_at."','".$email."', '".$password."')";
	//var_dump($query);
	//die;
	$result = $conn->query($query);
	if($result){
		setcookie('success', 'Thêm mới thành công !', time() +10);
		header("Location: list.php");
	}else{
		setcookie('fail', 'Thêm mới thất bại !', time() +10);
		header("Location: add.php");}
 ?>
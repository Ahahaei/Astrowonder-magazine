<?php 
		//echo "jhghgjh";
		//die;



	require_once('../connect.php');
	date_default_timezone_set('Asia/Ho_Chi_minh');
	$name='';
	$description='';
	$status='';
	$email='';
	$password ='';
	$id='';

	//var_dump($_POST);



	if(isset($_POST['submit'])){
		if(isset($_POST['id'])){
			$id=$_POST['id'];
		}
		if(isset($_POST['name'])){
			$name=$_POST['name'];
		}
		if(isset($_POST['description'])){
			$description=$_POST['description'];
		}
		if(isset($_POST['status'])){
			$status=$_POST['status'];
		}
		if(isset($_POST['email'])){
			$email=$_POST['email'];
		}
		if(isset($_POST['password'])){
			$password=$_POST['password'];
		}

	}

	$updated_at = date ('Y-m-d h:i:s');
	




	$query="UPDATE authors SET name = '".$name."', description ='".$description."', status = ".$status.", email = '".$email."',  password='".$password."', updated_at = '".$updated_at."' WHERE id=".$id;
	//var_dump($query);
	//die;
	$result = $conn->query($query);

	if($result){
		setcookie('success', 'Thêm mới thành công !', time() +10);
		header("Location: list.php");
	}else{
		setcookie('fail', 'Thêm mới thất bại !', time() +10);
		header("Location: add.php");



	}

 ?>
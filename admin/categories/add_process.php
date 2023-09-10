<?php 
//var_dump($_POST);
//die;
	require_once('../connect.php');
	date_default_timezone_set('Asia/Ho_Chi_minh');
	$name='';
	$description='';
	$status='';
	$parent_id='';
	function to_slug($str) {
	    $str = trim(mb_strtolower($str));
	    $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
	    $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
	    $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
	    $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
	    $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
	    $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
	    $str = preg_replace('/(đ)/', 'd', $str);
	    $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
	    $str = preg_replace('/([\s]+)/', '-', $str);
	    return $str;
	}


	if(isset($_POST['submit'])){
		if(isset($_POST['name'])){
			$name=$_POST['name'];
			$slug=to_slug($name, '-');
		}
		if(isset($_POST['description'])){
			$description=$_POST['description'];
		}
		if(isset($_POST['status'])){
			$status=$_POST['status'];
		}
		if(isset($_POST['parent_id'])){
			$parent_id=$_POST['parent_id'];
		}

	}


	$created_at = date ('Y-m-d h:i:s');


	$query="INSERT INTO categories (name, description, status, created_at, parent_id, slug) VALUES ('".$name."', '".$description."',".$status.",'".$created_at."',".$parent_id.", '".$slug."')";
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
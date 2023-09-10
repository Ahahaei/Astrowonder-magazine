<?php 


	require_once('../connect.php');
	date_default_timezone_set('Asia/Ho_Chi_minh');
	$id='';
	$title='';
	$description='';
	$status='';
	$category_id='';
	$content='';
	$slug='';
	$thumbnail='';
	$view_count= 0;
	$target_dir="../uploads/";



		$target_file= $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
        
        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
            $thumbnail=  basename($_FILES["thumbnail"]["name"]);
        } else { // Upload file có lỗi 
            $thumbnail= '';
        }

    //var_dump($thumbnail);
    //die;

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
		if(isset($_POST['title'])){
			$title=$_POST['title'];
			$slug=to_slug($title, '-');
		}
		if(isset($_POST['description'])){
			$description=$_POST['description'];
		}
		if(isset($_POST['status'])){
			$status=$_POST['status'];
		}
		if(isset($_POST['category_id'])){
			$category_id=$_POST['category_id'];
		}
		if(isset($_POST['content'])){
			$content=$_POST['content'];
		}
		if(isset($_POST['id'])){
			$id=$_POST['id'];
		}

	}

	$updated_at = date ('Y-m-d h:i:s');





	$query="UPDATE posts SET title ='".$title."', description ='".$description."', status = ".$status.", category_id = ".$category_id.", slug='".$slug."', updated_at = '".$updated_at."', content ='".$content."', slug = '".$slug."', thumbnail = '".$thumbnail."' WHERE id=".$id;

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
<?php 
require_once('../connect.php');
date_default_timezone_set('Asia/Ho_Chi_minh');
$id = '';
if(isset($_GET['id'])){
	$id = $_GET['id'];
}
$deleted_at = date( 'Y-m-d h:i:s');
$query = "UPDATE categories SET deleted_at = '".$deleted_at."' WHERE id = ".$id;
$result = $conn->query($query);
	if($result){
		setcookie('success', 'Xóa thành công !', time() +10);
		header("Location: list.php");
	}else{
		setcookie('fail', 'Xóa thất bại !', time() +10);
		
}
 ?>

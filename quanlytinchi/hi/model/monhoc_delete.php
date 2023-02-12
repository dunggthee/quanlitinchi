<?php
	include_once('../publish/connect.php');
	$mamonhoc=$_GET['mamonhoc'];
	$sql="DELETE FROM monhoc WHERE mamonhoc='$mamonhoc'";
	$kq=mysqli_query($conn,$sql);
	
	if ($kq) {
		echo'<script> alert("Xóa thành công")</script>';

		include_once('../controller/monhoc_delete.php');
	}
	
?>

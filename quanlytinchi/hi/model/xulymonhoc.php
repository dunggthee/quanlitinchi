<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	 <meta http-equiv="refresh" content="0.5 url=http://localhost/hi/view/quanlymonhoc.php" >
	<title></title>
</head>
<body>
<?php
	include_once('../publish/connect.php');
	$mamonhoc = $_POST["mamonhoc"];
	$tenmonhoc =$_POST ["tenmonhoc"];
	$giangvien = $_POST["giangvien"];
	$sotinchi = $_POST['sotinchi'];
	$hocphi = $_POST['hocphi'];
	$makhoa=$_POST['makhoa'];
	
	if (mysqli_num_rows(mysqli_query($conn,"SELECT mamonhoc FROM monhoc WHERE mamonhoc='$mamonhoc'")) > 0)
    {
        echo "Mã môn này đã có người dùng. Vui lòng chọn mã khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
		$sql="INSERT INTO monhoc (mamonhoc,tenmonhoc,giangvien,sotinchi,hocphi,makhoa) VALUES('$mamonhoc','$tenmonhoc','$giangvien','$sotinchi','$hocphi','$makhoa')";
		$kq=mysqli_query($conn,$sql);
	if ($kq) {
		echo'<script> alert("Thêm thành công")</script>';
		include_once('../controller/add_monhoc.php');
	}	
	else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='.view/quanlymonhoc.php'>Thử lại</a>";
		
?>
</body>
</html>
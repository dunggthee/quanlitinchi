<?php

	$conn=mysqli_connect('localhost','root','','btl') or die('Không kết nối được DB');
	$lang=mysqli_query($conn,"SET NAMES 'utf8'");
?>
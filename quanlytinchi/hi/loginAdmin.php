<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
</head>
<body>
	<?php 
	if (isset($_POST['oke'])) {
	$user=addslashes($_POST['adusername']);
	$pass=addslashes($_POST['adpassword']);
	if($user =="admin"&&$pass=="admin")
	echo "Xin chào " . $user . ". Bạn đã đăng nhập thành công. <a href='trangchu2.php'>Về trang chủ</a>";
    die();
}
exit();
	 ?>
<form method="POST" action="loginAdmin.php">
		<div align="center">
        <a href="">
            <img src="img/logo.png">
        </a>
    </div>
    <fieldset style="text-align: center;">
	    <legend><p ><h1 align="center">| ADMIN |</h1></legend> </p>
	  
	    	<table align="center">
	    		<tr>
	    			<td>Username:</td>
	    			<td><input type="text" name="adusername" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td>Password:</td>
	    			<td><input type="password" name="adpassword" size="30"></td>
	    		</tr>
	    	</table>
	    	<br><td colspan="2" align="center"> <input type="submit" name="oke" value="Đăng nhập"></td>
			
			
			
	</fieldset>
				
  </form>

</body>
</html>
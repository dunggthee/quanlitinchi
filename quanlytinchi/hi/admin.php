<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
</head>
<body style="background-image:url(./img/bg.jpg) ">

	<?php 
	if (isset($_POST['oke'])) {
	$user=addslashes($_POST['adusername']);
	$pass=addslashes($_POST['adpassword']);
	if($user =="admin"&&$pass=="admin")
		include_once('trangchu2.php');
		else
		echo "Đăng nhập thất bại.";
}

	 ?>
<form method="POST" action="loginAdmin.php">
	
		<div align="center" >
            <img src="img/logo.png">
        
    </div>
    <div style="padding-top: 70px ;"  style="text-align: center; ">
	    <p ><h1 align="center">| ADMIN |</h1> </p>
	  
	    	<table align="center" >
	    		<tr>
	    			<td>Username:</td>
	    			<td><input type="text" name="adusername" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td>Password:</td>
	    			<td><input type="password" name="adpassword" size="30"></td>
	    		</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
				</tr>
	    		<tr>
				<td colspan="2" align="center"  > <input type="submit" name="oke" value="Đăng nhập"></td>
				</tr>
	    			
	    	</table>
	    	
	</div>

  </form>

</body>
</html>
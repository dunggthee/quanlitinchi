
 <!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> -->
	


	<style type="text/css">
        .limiter {
           
    width: 100%;
    margin: 0 auto;
}

.container-login100 {

  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding-top:  20px;
  position: relative;
  top: 0px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
 
}

.container-login100::before {

  width: 100%;
  height: 100%;
  top: 100px;
  left: 0;
  background-color: rgba(255,255,255,0.9);
}
@keyframes myAnimation {
    0% {
  background-color: #0ed4c8;
  color: #0ed4c8
 }
 20% {
  background-color: #6bd57e;
  color: #6bd57e
 }
 40% {
  background-color: #db7adb;
  color: #db7adb
 }
 60% {
  background-color: #57cff4;
  color: #57cff4
 }
 80% {
  background-color: #fbcf61;
  color: #fbcf61
 
 }
 100% {
  background-color: #fbcf61;
  color: #fbcf61
 }
}


		.input99{
    font-family: Poppins-Regular;
    font-size: 16px;
    color: #fff;
    line-height: 1.2;
    display: block;
    width: 100%;
    height: 45px;
    background: transparent;
    padding-left: 5px;
    border-radius: 8px;
    }
		.wrap-login101 {
    width: 500px;
    border-radius: 10px;
    overflow: hidden;
    padding: 55px 55px 37px 55px;
    animation: myAnimation 20s  infinite;
    
}
.login101-form-btn {
   font-family: poppins-regular;
    font-size: 20px;
    color: white;
    line-height: 1.2;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 20px;
    min-width: 120px;
    height: 50px;
    border-radius: 25px;
    background: #0067ce;
    background: -webkit-linear-gradient(bottom, rgba(0,0,0,.15), #f8f9fa);
    background: -o-linear-gradient(bottom, #7579ff, #0067ce);
    background: -moz-linear-gradient(bottom, #7579ff, #0067ce);
    background: linear-gradient(bottom, #7579ff, #0067ce);
    position: relative;
    z-index: 1;
   
    transition: all 0.4s;
    text-align: center;
}
	</style>
	<title>Trang ????ng nh???p</title>
	<meta charset="utf-8">
</head>

<body >
    
<?php
//Khai b??o s??? d???ng session
session_start();
 
//Khai b??o utf-8 ????? hi???n th??? ???????c ti???ng vi???t
header('Content-Type: text/html; charset=UTF-8');
 
//X??? l?? ????ng nh???p
if (isset($_POST['dangnhap'])) 
{
    //K???t n???i t???i database
    include('publish/connect.php');
     
    //L???y d??? li???u nh???p v??o
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);

    
    //Ki???m tra ???? nh???p ????? t??n ????ng nh???p v???i m???t kh???u ch??a
    if (!$username || !$password) {
        echo "Vui l??ng nh???p ?????y ????? t??n ????ng nh???p v?? m???t kh???u. <a href='javascript: history.go(-1)'>Tr??? l???i</a>";
        exit;
    }
     
    //Ki???m tra t??n ????ng nh???p c?? t???n t???i kh??ng
    $sql="SELECT username, password FROM sinhvien WHERE username='$username'";
    $kq=mysqli_query($conn,$sql);
    if (mysqli_num_rows($kq) == 0) {
        echo "T??n ????ng nh???p n??y kh??ng t???n t???i. Vui l??ng ki???m tra l???i. <a href='javascript: history.go(-1)'>Tr??? l???i</a>";
        exit;
    }
    else {$row = mysqli_fetch_array($kq);
     
    //So s??nh 2 m???t kh???u c?? tr??ng kh???p hay kh??ng
    if ($password != $row['password']) {
        echo "M???t kh???u kh??ng ????ng. Vui l??ng nh???p l???i. <a href='javascript: history.go(-1)'>Tr??? l???i</a>";
        exit;
    }

        # code...
    }
    //L???y m???t kh???u trong database ra
    
     
    //L??u t??n ????ng nh???p
    $_SESSION['username'] = $username;
    $username = $_SESSION['username'] ;

    $sql="SELECT * FROM sinhvien WHERE username='$username'";
    $kq=mysqli_query($conn,$sql);
    if (mysqli_num_rows($kq) > 0) { {
            while ($row = mysqli_fetch_assoc($kq)) {
                # code...
                echo "Xin ch??o " . $row['hoten'] . ". B???n ???? ????ng nh???p th??nh c??ng. <a href='trangchu.php'>V??? trang ch???</a>";

            }
        }

    }   
    die();
}

?>




	<div class="limiter" >
		<div class="container-login100" style="background-image: url(img/bg.jpg);">
        
			<div class="wrap-login101" >
				<form class="" action="login.php" method="POST">
					<span class="">
						<div align="center">	<span class="" >
						<a href="">
            <img src="img/logoutt.png">
        </a>
					</span></div>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						LOGIN
					</span>
					<div style="color: white; margin: 2px;">T??n ????ng Nh???p:</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">

						<input class="input99" type="text" name="username" placeholder="">
						<span class="" data-placeholder="&#xf207;"></span>
					</div>
					<div style="color: white; margin: 2px;">M???t Kh???u:</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input99" type="password" name="password" placeholder="">
						<span class="" data-placeholder="&#xf191;"></span>
					</div>
                    <div style="padding-bottom: 50px; text-align: right;">
                        <p class="" style="color: white">????ng nh???p v???i quy???n.
                        <a class="" style="color: white" href="http://localhost/hi/admin.php">
                            <u>Admin</u>
                        </a></p>

                    </div>
					 

					<div class="container-login100-form-btn" align="center">

						<input type="submit"  class="login101-form-btn" name="dangnhap" value="Login"></input>
                        
					</div>

					<div class="text-center p-t-90">
						<p class="" style="color: white">B???n ch??a c?? t??i kho???n.
						<a class="" style="color: white" href="http://localhost/hi/register.php">
							<u>Sign up?</u>
						</a></p>

					</div>
                    
				</form>
			</div>
		</div>
	</div>
    
	

	

</body>
</html>
</body>
</html>
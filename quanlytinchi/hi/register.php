 
 <!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> -->
	


	<style type="text/css">
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
		.input98{
	font-family: Poppins-Regular;
    font-size: 18px;
    color: white;
    line-height: 1.2;
    display: block;
    width: 100%;
    height: 25px;
    background: #4e99e5;
    padding-left: 5px;
    border-color: white;
	
    padding-left: 5px;
    border-radius: 8px

		}
		.input98:hover{
			border-color: #888;
		}
		.input98::-ms-expand{
			display: none;
		}
		.input98:focus{
			border-color: #aaa;
		box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
		box-shadow: 0 0 0 3px -moz-mac-focusring;
		color: #222; 
		outline: none;
		}
		.input98 option{
			font-weight:normal;
		}

		.input99{
    font-family: Poppins-Regular;
    font-size: 20px;
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
    font-family: Poppins-Medium;
    font-size: 16px;
    color: #555555;
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
    background: #9152f8;
    background: -webkit-linear-gradient(bottom, rgba(0,0,0,.15), #f8f9fa);
    background: -o-linear-gradient(bottom, #7579ff, #b224ef);
    background: -moz-linear-gradient(bottom, #7579ff, #b224ef);
    background: linear-gradient(bottom, #7579ff, #b224ef);

    position: relative;
    z-index: 1;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
    text-align: center;
}
.gt{
	width: 100%;
    height: 45px;
    padding-left: 5px;
    padding-top: 10px;
    color: white;
    padding-bottom: 10px;
}
	</style>
	<title>????ng k??</title>
	<meta charset="utf-8">
</head>
<body>






				<div class="limiter">
		<div class="container-login100" style="background-image: url(img/bg.jpg);">
			<div class="wrap-login101">
				<form class="" action="http://localhost/hi/xulydangky.php" method="POST">
					<span class="">
						<div align="center">	<span class="" >
						<a href="">
            <img src="img/logoutt.png">
        </a>
					</span></div>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						SIGN UP
					</span>
					<div style="color: white; margin: 2px;">T??n ????ng Nh???p:</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input99" type="text" name="username">
						
					</div>
					<div style="color: white; margin: 2px;">M???t Kh???u:</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input99" type="password" name="password">
						
					</div>
					<div style="color: white; margin: 2px;">M?? sinh vi??n:</div>
					<div class="wrap-input100 validate-input" data-validate = "">
						<input class="input99" type="text" name="masinhvien">
						
					</div>
					<div style="color: white; margin: 2px;">H??? t??n:</div>
					<div class="wrap-input100 validate-input" data-validate = "">
						<input class="input99" type="text" name="hoten">
						
					</div>
					<div style="color: white; margin: 2px;">Ng??y sinh:</div>
					<div class="wrap-input100 validate-input" data-validate = "">
						<input class="input99" type="date" name="ngaysinh">
						
						
					</div>
					<div style="color: white; margin: 2px;">Gi???i t??nh:</div>
					<div class="gt" data-validate = "">
						<input class="" type="radio" name="gioitinh" value="Nam" checked=""> Nam
								<input  type="radio" name="gioitinh" value="N???">N???
						
					</div>
					<div style="color: white; margin: 2px;">L???p:</div>
					<div class="gt" data-validate = "">
						 <select class="input98" name="lop">
                           <?php
                           include_once("publish/connect.php");
	
								$sql="SELECT lop,tenkhoa FROM lophoc INNER JOIN khoa ON lophoc.makhoa = khoa.makhoa";
								$kq=mysqli_query($conn,$sql);
                                include_once('model/lophoc_list.php');
                                while ($row=mysqli_fetch_array($kq)) {
                                     echo "<option value=".$row['lop'].">".$row['lop']." - khoa: ".$row['tenkhoa']."</option>";
                                }
                            ?>
                        </select>
						
					</div>
					<div style="color: white; margin: 2px;">Qu?? qu??n:</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input99" type="text" name="quequan">
					</div>
						
					
			

					<div class="container-login101-form-btn" align="center">

						<input type="submit"  class="login101-form-btn" name="dangky" value="Sign Up">
					</div>

					<div class="text-center p-t-90">
						<p class="" style="color: white">B???n ???? c?? t??i kho???n.
						<a class="" style="color: white" href="http://localhost/hi/login.php">
							<u>Login?</u>
						</a></p>

					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	


</body>
</html>
</body>
</html>
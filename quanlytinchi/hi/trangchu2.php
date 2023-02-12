<?php if (session_id() == '' || !isset($_SESSION)) {
  session_start();
} ?>
<!DOCTYPE html>
<html>
<head>
<!--     <link rel="stylesheet" href="css/qlbh.css" /> -->
    <title>ADMIN</title>
</head>
<body>
  <div>
    <style type="text/css">
      * {
  margin: 0;
  padding: 0;
}
.button {
  -moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
  -webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
  box-shadow:inset 0px 1px 0px 0px #ffffff;
  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf) );
  background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
  background-color:#ededed;
  -webkit-border-top-left-radius:6px;
  -moz-border-radius-topleft:6px;
  border-top-left-radius:6px;
  -webkit-border-top-right-radius:6px;
  -moz-border-radius-topright:6px;
  border-top-right-radius:6px;
  -webkit-border-bottom-right-radius:6px;
  -moz-border-radius-bottomright:6px;
  border-bottom-right-radius:6px;
  -webkit-border-bottom-left-radius:6px;
  -moz-border-radius-bottomleft:6px;
  border-bottom-left-radius:6px;
  text-indent:0;
  border:1px solid #dcdcdc;
  display:inline-block;
  color:#777777;
  font-family:Times New Roman;
  font-size:15px;
  font-weight:normal;
  font-style:normal;
  height:25px;
  line-height:25px;
  width:100px;
  text-decoration:none;
  text-align:center;
  text-shadow:1px 1px 0px #ffffff;
}
.button:hover {
  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
  background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
  background-color:#dfdfdf;
}.button:active {
  position:relative;
  top:1px;
}
/* This button was generated using http://tools.ngoisaoso.vn/css3button/ */


#menu {
        font-size: 15px;
    color: white;
    padding: 5px 5px 5px 5px;
    background-color: #0066FF;
    height: 23px;
    top: 89px;
    right: 0px;
   text-align: right;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
}
#menu a{
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  font-size: 15px;
  font-weight: 3px;
  border-radius: 5px;
  color: white;
  padding: 5px;
  text-decoration: none;
  text-align: center;
  
  right: 5px;

}
#menu a:hover{
  background-color: #dcdcdc;
  color: #3c7ab7;
  text-decoration: solid;
  font-weight: 5px;
}
#menu :active{
  color: #ffff56;
}
.h1{
  font-family: arial;
  width: 300px;
  height: 50px;
  padding-left: 10px;
  font-size: 20px;
  font-weight: bold;
  text-align: justify;
}
.h2{
    font-family: arial;
  width: 700px;
  height: 150px;
  padding-left: 10px;
  font-size: 18px;
  text-align: justify;
  padding-top: 5px;
}
#news-block-title {
    font-size: 18px;
        border-bottom: 1px solid #cd2122;
        position: relative;
        left: 300px;
        font-size: 30px;
        top: 50px;

}
p{
  padding-top: 10px;
  font-size: 16px;
  font-weight: normal;
}
.a3{
  font-size: 20px;
  text-decoration: none;
  font-style: bold;
  color: black;
  font-size: 20px;
}
.a3:hover{
  color: #CD2122;
}
.tr{
      margin: 0 0 30px;
    overflow: hidden;
    list-style-type: none;
}
    </style>
    <div align="center" style="background-image: url(img/bg.jpg);">
        <a href="">
            <img src="img/logo.png">
        </a>
    </div>
<div id="menu">
    
    <a href="trangchu2.php">Trang Chủ</a>
    |
    <a href="view/quanlysinhvien.php">Quản lý sinh viên</a>
    |
     <a href="view/quanlymonhoc.php">Quản lý môn học</a>
    |
    
      Bạn là ADMIN -
    <a href="login.php">Thoát</a>
    

</div>
</div>
<div >
<span style="z-index: -1; " id="news-block-title">TIN TỨC SỰ KIỆN</span>

<div align="center" style="padding-top: 20px">
  <table style="position: relative; top: 80px;" width="1000px">
    <tr class="tr">
      <td class="" rowspan="2"><img height="250px" src="img/1.jpg" alt=""></td>
      <td class="h1"><a class="a3" href="https://fbu.edu.vn/le-ky-niem-12-nam-ngay-thanh-lap-truong-dai-hoc-tai-chinh-ngan-hang-ha-noi/">
      Lễ Kỷ Niệm 12 năm ngày thành lập Trường Đại học Tài chính – Ngân hàng Hà Nội</a>
        
                      <p>22/12/2022</p>
</td >
      <tr><td class="h2" >Ngày 21/12/2022, Trường Đại học Tài chính – Ngân hàng Hà Nội long trọng tổ chức Lễ Kỷ Niệm 12 năm ngày thành lập Trường (21/12/2010 – 21/12/2022).

Tham dự Lễ Kỷ Niệm có đông đủ các vị Khách quý, tập thể Cán bộ – Giảng viên Nhà trường...</td></tr>
    </tr>

    <tr>
      <td class="" rowspan="2"><img height="250px" src="img/2.jpg" alt=""></td>
      <td class="h1"><a class="a3" href="https://fbu.edu.vn/le-ky-niem-40-nam-ngay-nha-giao-viet-nam-20-11-20-11-1982-20-11-2022/">
      LỄ KỶ NIỆM 40 NĂM NGÀY NHÀ GIÁO VIỆT NAM 20/11 (20/11/1982 – 20/11/2022)</a>
        
                      <p>19/11/2022</p>
</td >
      <tr><td class="h2" >Tháng 11 lại về trong không khí hân hoan của cả nước hướng về ngày nhà giáo Việt Nam 20/11, ngày mà cả xã hội trân trọng, tôn vinh công lao người thầy. Hoà trong niềm vui chung đó, Sáng ngày 18/11/2022, Trường Đại học Tài chính – Ngân hàng Hà Nội...</td></tr>
    </tr>
<tr>
      <td class="" rowspan="2"><img height="250px" src="img/3.jpg" alt=""></td>
      <td class="h1"><a class="a3" href="https://fbu.edu.vn/toa-dam-doi-moi-chuong-trinh-dao-tao-nganh-luat-kinh-te-truong-dh-tai-chinh-ngan-hang-hn/">
      Tọa đàm đổi mới chương trình đào tạo Ngành Luật Kinh Tế Trường ĐH Tài Chính – Ngân Hàng HN</a>
        
                      <p>14/11/2022</p>
</td >
      <tr><td class="h2" >Sáng ngày 12/11/2022, tại hội trường tầng 9, cơ sở 3 Trường Đại học Tài chính – Ngân hàng Hà Nội, Viện Pháp luật Kinh tế đã tổ chức tọa đàm đổi mới chương trình đào tạo ngành Luật kinh tế đáp ứng yêu cầu của thị trường lao động trong bối cảnh CMCN 4.0...</td></tr>
    </tr>

<tr>
      <td class="" rowspan="2"><img height="250px" src="img/4.jpg" alt=""></td>
      <td class="h1"><a class="a3" href="https://fbu.edu.vn/gap-mat-tan-sinh-vien-khoa-11-khoa-ngoai-ngu/">
      Gặp mặt tân sinh viên khóa 11 Khoa Ngoại Ngữ</a>
        
                      <p>28/10/2022</p>
</td >
      <tr><td class="h2" >Sáng 27/10 tại hội trường 301, cơ sở đào tạo 136 Phạm Văn Đồng, Khoa Ngoại Ngữ – trường Đại học Tài chính Ngân hàng Hà Nội đã tổ chức buổi gặp mặt tân sinh viên khóa 11...</td></tr>
    </tr>
  </table>
</div>
</div>
</body>
</html>
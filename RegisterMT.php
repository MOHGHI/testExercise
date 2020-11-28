<?php
include ("Conndb.php");
    if(isset($_POST['do'])=='تسجيل')
{
    $fname=$_POST['fullname'];
    $tnum=$_POST['trynum'];
    $spac=$_POST['spec'];
    $pass=$_POST['pass'];
    $cpass=$_POST['Cpass'];
    $avg=$_POST['avrige'];
    $phone=$_POST['number'];
    $place=$_POST['living'];
mysqli_query($con,"INSERT INTO login_member (fullname,trinig_num,specialty,password_mt,password_emp,avrag,phone_num,Place) VALUES 
     ('$fname','$tnum','$spac','$pass','$cpass','$avg','$phone','$place')");
    
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>wesal</title>
<meta charset="utf-8" />

<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body >

<div id="page-wrapper">
<link href="https://fonts.googleapis.com/css2?family=Scheherazade&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
<!-- Header -->
<section id="header" class="wrapper">

    <!-- Logo -->
    <div id="logo">
   <h1><a href="index.php">وصال</a></h1>
            <p>موقع الكتروني يسهل التواصل بين المتدربة ومنسقة التدريب التعاوني <br>
                واختيار جهات التدريب المتاحة وتوفيرالاحصائيات والتقارير</p>
        </div>
 <!-- Nav -->
 
 <nav id="nav">
        <ul>
                <li class="current">
                    <a href="#">التسجيل</a>
                    <ul>
                    <li><a href="loginMT.php">المتدربة</a></li>
                        <li><a href="loginMN.php">المنسقة</a></li>
                        
                        <li>
                       
                    </ul>
                </li>
                <li><a href="teamwork.php">فريق العمل</a></li>
                <li><a href="index.php">الرئيسية</a></li>
            </ul>
        </nav>

</section>
<!-- Intro -->
<!-- Highlights -->
<section id="highlights" class="wrapper style3">
<div class="title">تسجيل جديد</div>
<div class="container">
<div class="row aln-center">
<div class="col-3 col-12-medium">

 <form dir="rtl" method="POST" action="RegisterMT.php">
  الاسم الكامل <br><input type="text" placeholder=" "  class="txt" name="fullname"><br>
الرقم التدريبي <br> <input type="text" placeholder=" " class="txt" name="trynum">
<br>التخصص<input type="text" placeholder=" " class="txt" name="spec">
<br> كلمة المرور  <input  placeholder=" " type="password"  class="txt" name="pass">
 <br>تاكيد لكلمة المرور  <input  placeholder="" type="password"  class="txt" name="Cpass">
<br>المعدل  <input type="text" placeholder=" " class="txt" name="avrige">
<br>رقم الجوال  <input type="text" placeholder=" " class="txt" name="number">
<br> السكن   <input type="text" placeholder=" " class="txt" name="living">
   <br> <br><input type="submit" value="تسجيل" class="button style1" name="do">
            <br><br>
            <a href="loginMT.php">تسجيل دخول </a>
       
        </form>
   
 </div>  

</div>
</div>
</div>
</section>

<!-- Footer -->
<section id="footer" class="wrapper">
    <div class="title">
    <div id="copyright">
            <ul>
                <li>&copy; جميع الحقوق محفوظه </li>
            </ul>
        </div></div>
</section>  
</body>
</html>
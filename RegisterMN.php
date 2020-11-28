<!DOCTYPE HTML>
<!--
Escape Velocity by HTML5 UP
html5up.net | @ajlkn
Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
<title>wesal</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="left-sidebar is-preload">
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
<form dir="rtl">

          <fieldset>
            
          الاسم الكامل <br><input type="text" placeholder=" "  class="txt" name="fullname"><br>
          الرقم الوظيفي <br> <input type="text" placeholder=" " class="txt" name="username">
          <br> كلمة المرور  <input  placeholder=" " type="password"  class="txt" name="pass">
          <br>تاكيد لكلمة المرور  <input  placeholder="" type="password"  class="txt" name="Cpass">
          <br>الايميل <input  placeholder="" type="password"  class="txt" name="email">
          <br>رقم الجوال  <input type="text" placeholder=" " class="txt" name="number">
          <br><br><input type="submit" value="تسجيل " class="button style1" name="btn-save">
                   <br><br>
        <a href="loginMN.php">تسجيل دخول </a>
        <br>
        <?php include("connect.php");
       ?>
        </form>
 
 </div>  
</section>
</div>
</div>
</div>


<!-- Footer -->
<section id="footer" class="wrapper">
    <div class="title">
    <div id="copyright">
            <ul>
                <li>&copy; جميع الحقوق محفوظه </li>
            </ul>
        </div></div>
<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
<?php
session_start();
if(isset($_POST['send'])){

include("Conndb.php");
  mysqli_query($con,"INSERT INTO orders( `id_trining`, `id_hand`) VALUES 
     ({$_SESSION['id']},{$_POST['hand']})");
     // echo"<script>alert('hi')</script>";
}

?>
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
        
<style>
    center{background: #B2C0C0 url(images/overlay.png);}
#i {
    position:absolute;
    margin-left: 25%;
    display: flex;

}
#ii {
    position:absolute;
    margin-left: 66%;
    display: flex;

}
</style>
<img id="ii" src="images/is.png" width="125px">
<img id="i" src="images/is.png" width="125px">
   <h1><a href="index.html">وصال</a></h1>
            <p>موقع الكتروني يسهل التواصل بين المتدربة ومنسقة التدريب التعاوني <br>
                واختيار جهات التدريب المتاحة وتوفيرالاحصائيات والتقارير</p>
        </div>
 <!-- Nav -->
   
 <nav id="nav">
            
            
            <ul>
                    <li class="current">
                        <a href="#">التسجيل   <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
  <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
</svg></a>
                        <ul>
                        <li><a href="loginMT.php">المتدربة</a></li>
                            <li><a href="loginMN.php">المنسقة</a></li>
                            
                            <li>
                        
                        </ul>
                    </li>
                    <li><a href="teamwork.php" > فريق العمل   <svg  width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
    </svg></a></li>
                    <li><a href="index.php"> الرئيسية   <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
    </svg></a></li>
    
                </ul>
            </nav>
<div id = "logo1">
<img src="11.PNG" width="30" height="30" alt="" loading="lazy">
</div>

</section>

<!-- Intro -->
<!-- Highlights -->
<section id="highlights" class="wrapper style3">
<div class="title">الطلبات</div>
<div class="container">
<div class="row aln-center">
<div class="col-3 col-12-medium">

<style>
.table{ 
 margin-right:80%;
 color: black;
 direction: rtl;
border-collapse: collapse;
border-radius: 5px 5px 0 0;
border: solid 1px #dddddd;
}
th{
  border: solid 1px #dddddd;
  padding: 0.75rem;
  text-align: left;
  font-weight: bold;
}
td{
  border: solid 1px #dddddd;
  padding: 0.75rem;
  text-align: left;
}
</style>
								
				</div>
                
			<table class="table">
  <thead >
    <tr>
    
      <th scope="col"><strong>الرقم التدريبي</strong></th>
      <th scope="col"> <strong>   اسم المتدربة</strong></th>
      <th scope="col"><strong>الجهه</strong></th>
      <th scope="col"><strong>الموافقة</strong></th>
    </tr>
  </thead>
  <tbody>
  <?php

include("Conndb.php");
$r=mysqli_query($con,"SELECT  `trinig_num`, `fullname`,`hands`,`state` FROM `login_member`,`check_hand`,`orders`
WHERE 
login_member.id = {$_SESSION['id']}
AND
login_member.id = orders.id_trining
AND
check_hand.id = orders.id_hand");

//while(
 if($row= mysqli_fetch_array($r)) 
{
    echo "<tr>";
    echo "<td>".$row['trinig_num']."</td>";
    echo "<td>".$row['fullname']."</td>";
    echo "<td>".$row['hands']."</td>";
    echo "<td>"?>
   <?php if($row['state'] == 0)
   echo "لم يتم الموافقة";
   else
   echo " تم الموافقة ";
   echo"</td>";
   // echo "<td>".$row['nmhand']."</td>";
    echo "</tr>";
    }

//SELECT `id`, `id_member`, `id_hand` FROM `member_hand` WHERE 1
?>

  </tbody>
</table>

</div></div>
	
    


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
        </form>
    </div>
   
 </div>  
</section>
</div>
</div>
</div>


<!-- Footer -->
<section id="footer" class="wrapper">
    <div class="title"></div>
    <div class="container">
        <header class="style1">
        <div id="copyright">
            <ul>
                <li>&copy; جميع الحقوق محفوظه </li>
            </ul>
        </div>
   
<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
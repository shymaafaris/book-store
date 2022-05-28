<?php
require 'connect2.php';
$name=$email=$confemail=$password=$confpassword=$users='';
$nameErr=$emailErr=$confemailErr=$passwordErr=$confpasswordErr='';

if($_SERVER['REQUEST_METHOD']=='POST'){
if(!empty($_POST['name'])){
$fname=trim($_POST['name']);
if(!preg_match("^[a-zA-Z]+$^",$_POST['name'])){
$nameErr="Invalid Name";
}
}else
$nameErr="Name is required";

if(!empty($_POST['email'])) {
$email =trim( $_POST['email']);
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
$emailErr = "Invalid Email";
}
}else
$emailErr = "Email is required";

if(!empty($_POST['confirm email'])) {
$confemail = trim($_POST['confirm email']);
if (!filter_var($_POST['confirm email'], FILTER_VALIDATE_EMAIL)) {
$confemailErr = "Invalid Confirm Email";
}
} else
$confemailErr = "Confirm Email is required";

if(!empty($_POST['password'])){
$password=$_POST['password'];
if(!preg_match("^[a-zA-Z0-9]+$^",$_POST['password'])){
$passwordErr="Password should include at least one upper case,one number,and one special character";
}
}else
$passwordErr="Password is required";

if(!empty($_POST['confirm password'])) {
$confpassword = $_POST['confirm password'];
if (!preg_match("^[a-zA-Z0-9]+$^", $_POST['confirm password'])) {
$confpassswordErr = "Invalid Confirm Password";
}
} else
$confemailErr = "Confirm Password is required";
}


?>
<!DOCTYPE html>
<html>
<head>
<title>Book Store Online</title>
<meta name="author" content="shymaa rabei"/>
<meta name="description" content="books">
<!-- css file link -->
<link rel="stylesheet" href="style2.css"/>
<!-- font awesome cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" />
</head>
<body>
<!--section1-->
<header>
<div class="header1">
<div class="logo"><i class="fa-solid fa-book-open-reader"></i>
<span class="text">Booky</span></div>
</div>

<div class="header2">
<div id="mysidebar" class="sidebar">
<!-- a button to close the overlay navigation -->
<a href="javascript:void(0)" class="closebtn" onclick="closenav()">&times;</a><!--&times; is a multiplcation sign-->
<a href="home.php">Home</a>
<a href="about.html">About us</a>
<div class="sub">
<button class="sub-btn">Catogories</button>

<div class="sub-content">
<a href="art.php">Art</a>
<a href="fiction.php">Fiction</a>
<a href="crime.php">Crime</a>
</div>
</div>
</div>
<div id="main">
<button class="openbtn" onclick="opennav()">&#9776;</button><!--&#9776; is a menu sign-->
</div>

<form action="" class="search">
<input type="text" name="search" placeholder="search for books by keyword/title/author/ISBN" >
 <button class="button2" type="submit"><img src="search.png" width="20" height="20" > </button>
</form>

<div class="icons">
<a href="#" class="fa-solid fa-basket-shopping"></a>
<a href="#" class="fa-solid fa-user"></a>
</div>
</div>
</header>

<!--section2-->
<section>
<div class="image">
<div class="text1">
<h1>Books are a uniquely portable magic</h1>
<strong><p>Upto 75% Off</p></strong>
<p>Enjoy upto 75% off on th all item.The offer until 27 november</p>
<a href="art.php"><button class="button1">Shop now</button></a>
</div>
</div>
</section>
<!--section3-->
<section class="new">
<p>learn about new offers and gret mor deals by joining our newsletter</p>
<form>
<div class="form">
<div class="row">
<div class="col11">
<label for="email">Email</label>
</div>
<div class="col2">
<input type="text" id="email" name="email" placeholder="example@gmail.com">
<span class="error"><php $emailErr?></span>
</div>
</div>
<div class="sign up">
<input type="submit" name="submit" value="Sign up now"> 
</div>
</div>
</form>
</section>
<!--footer-->
<footer>
<div class="follow">
<div class="icon2"><i class="fa-brands fa-facebook-square fa-2x"></i>
</div>
<div class="icon2"><i class="fa-brands fa-twitter fa-2x"></i></div>
<div class="icon2"><i class="fa-brands fa-instagram-square fa-2x"></i></div>
<div class="icon2"><i class="fa-solid fa-envelope fa-2x"></i></div>
</div>
</footer>


<!-- javascript file link-->
<script src="javascript.js"></script>
</body>

</html>
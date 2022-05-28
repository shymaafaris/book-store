<?php
require 'connect2.php';
session_start();
if(isset($_POST['login'])){
$email=mysqli_real_escape_string($conn,$_POST['email']);
$password=mysqli_real_escape_string($conn,md5($_POST['password']));
$sql="SELECT * FROM register WHERE email='$_POST[email]' AND password='$_POST[password]'";
$select_user=mysqli_query($conn,$sql);
if(mysqli_num_rows($select_user)>0){
$row=mysqli_fetch_assoc($select_user);
if($row['$users']=='admin'){
$_SESSION[admin_name]=$row['name'];
$_SESSION[admin_email]=$row['email'];
$_SESSION[admin_id]=$row['id'];
header('location:admin_page.php');
}else{
if($row['$users']=='user'){
$_SESSION[user_name]=$row['name'];
$_SESSION[user_email]=$row['email'];
$_SESSION[user_id]=$row['id'];
header('location:home.php');
}
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>login</title>
<link rel="stylesheet" href="style2.css"/>
</head>
<body>
 

<header class="header"><h1>login</h1></header>
<form action="home.php" method="POST">
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
<div class="row">
<div class="col13">
<label for="password">Password</label>
</div>
<div class="col2">
<input type="text" id="password" name="password" >
<span class="error"><php $passwordErr?></span>
</div>
</div>
<div class="login">
<input type="submit" name="login" value="Login"> 
<p>Don't have an account?<a href="register1.php">Register</a></p>
</div>
</form>
</body>
</html>
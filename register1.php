<?php
require 'connect2.php';
$name=$email=$confemail=$password=$confpassword=$users='';
$nameErr=$emailErr=$confemailErr=$passwordErr=$confpasswordErr='';

if($_SERVER['REQUEST_METHOD']=='POST'){
if(!empty($_POST['name'])){
$name=trim($_POST['name']);
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

if(!empty($_POST['cemail'])) {
$confemail = trim($_POST['cemail']);
if (!filter_var($_POST['cemail'], FILTER_VALIDATE_EMAIL)) {
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

if(!empty($_POST['cpassword'])) {
$confpassword = $_POST['cpassword'];
if(!preg_match("^[a-zA-Z0-9]+$^", $_POST['cpassword'])) {
$confpassswordErr = "Invalid Confirm Password";
}
} else
$confemailErr = "Confirm Password is required";
}
if(isset($_POST['submit'])){
$name=mysqli_real_escape_string($conn,$_POST['name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);

$password=mysqli_real_escape_string($conn,md5($_POST['password']));

$users=$_POST['users'];

$sql="SELECT * FROM register WHERE email='$_POST[email]' AND password='$_POST[password]'";
$select_user=mysqli_query($conn,$sql);
if(mysqli_num_rows($select_user)>0){
echo("user was exist!");
}else{
if($confpassword != $password && $confemail != $email){
echo("not the same");
}else{
$sql="INSERT INTO register(name,email,password,users) VALUES ('$_POST[name]','$_POST[email]','$_POST[password]','$_POST[users]')";
mysqli_query($conn,$sql);
echo("error");
header('location:login.php');
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>register</title>
<link rel="stylesheet" href="style2.css"/>
</head>
<body>
<header class="header"><h1>Create an Account</h1></header>
<form action="login.php" method="POST">
<div class="form">
<div class="row">
<div class="col1">
<label for="name">Name</label>
</div>
<div class="col2">
<input type="text" id="name" name="name" placeholder="Your name...">
<span class="error"><php $nameErr?></span>
</div>
</div>


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
<div class="col12">
<label for="confemail"> Confirm Email</label>
</div>
<div class="col2">
<input type="text" id="confemail" name="cemail" >
<span class="error"><php $confemailErr?></span>
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

<div class="row">
<div class="col14">
<label for="confpassword">Confirm Password</label>
</div>
<div class="col2">
<input type="text" id="confpassword" name="cpassword" >
<span class="error"><php $confpasswordErr?></span>
</div>
<div class="row">
<div class="col15">
<label for="select">Select</label>
</div>
<div class="col21">
<select
id="users" name="users" >
<option value="user">User</option>
<option value="admin">Admin</option>
</select>
</div>
</div>
<div class="create">
<input type="submit" name="submit" value="Create"> 
<p>Already have an account?<a href="login.php">Login</a></p>
</div>
</div>
</form>
</body>
</html>
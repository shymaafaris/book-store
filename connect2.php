<?php
$servername="localhost";
$username="book";
$password="book";
$dtname="book";

//create connection
$conn=mysqli_connect($servername,$username,$password,$dtname);
//check connection
if(!$conn){
die("connection failed".mysqli_connect_error());
}




?>
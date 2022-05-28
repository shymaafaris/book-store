<?php
require('connect2.php');
?>
<!-- css file link -->
<link rel="stylesheet" href=" art-style.css"/>
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
<a href="fiction.php">Frictio</a>
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
<section class="section-books" id="book">
<header class="books"><h1>Fiction books<h1></header>


<div class="box">
<div class="b-image">
<img src="bookfr3.jpg" width="200" height="200">
</div>
<div class="book-content">
<h3>Game Changer<h3>
<div class="price">$11.89</div>
<a href="#" class="card-btn">Add to card</a>
</div>
</div>
<div class="box">
<div class="b-image">
<img src="bookfr2.jpg" width="200" height="200">
</div>
<div class="book-content">
<h3>The Doors Of Eden<h3>
<div class="price">$19.89</div>
<a href="#" class="card-btn">Add to card</a>
</div>
</div>
<div class="box">
<div class="b-image">
<img src="bookfr4.jpg" width="200" height="200">
</div>
<div class="book-content">
<h3>The Address<h3>
<div class="price">$16.89</div>
<a href="#" class="card-btn">Add to card</a>
</div>
</div>

</section>
<!-- javascript file link-->
<script src="javascript.js"></script>
</body>
</html>
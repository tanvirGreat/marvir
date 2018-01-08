<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta name"viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css.css">
<script src="validation.js" type="text/JavaScript"></script>
</head>
<body onload="date()">
<form name ="myForm" action="#" method="get" onsubmit="return Vemail()">
<h2>My First JavaScript</h2>
<nav id = "primary_nav_wrap">

<ul>
<li><a href= index.html>Home</a></li>
<li>
<a href= products.html> Products</a>
<ul>
<li>
<a href=bridal.html> Bridal </a></li>
</ul>
</li>
</ul>
</nav>

<br>
<br><br>
<input type="text" name="email" id="e">
<input type ="text" name ="name" id="name">
<label>age</label>
<input type="text" name="age" id="age">
<button type="submit"
onclick="Vemail()">Submit</button>
<p id="demo"></p><br>
<label id="demo1"></label>
<!-- vvvv -->
</form>
</body>
</html> 


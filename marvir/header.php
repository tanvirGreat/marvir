<?php session_start();

 $servername="localhost";
$username="choahm5_m";
$password="Tan@01737480110";
$dbname="choahm5_m";
//create connection
$conn = new mysqli ($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
  die ("connection failed:" . $$conn->connect_error);
}
 if (isset($_GET['action'])){
 $action=$_GET['action'];
}





$total=0;


 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<header> <ul>
<!--<a href= # style="text-decoration: none; color:white;"> login</a> &nbsp &nbsp -->
<a href= 'checkout.php?action=' style="text-decoration: none; color:white;"> cart</a></ul>
</header>
 <div class="logo"> <a href= index.php style="text-decoration: none; color:black;"> MARVIR </a> </div>
<div class="navbar">
<a href=contact.php> Contact </a> 
<a href=about.php> About </a> 
  <div class="dropdown">
    <button class="dropbtn">Products 
     
    </button>
    <div class="dropdown-content">
   <a href=clothing.php> Clothing </a> 
<a href=shoe.php> Shoe </a>
<a href=accessories.php> Accessories </a> 
<a href=sale.php> Sales </a> 
    </div>
  </div>
  <a href= index.php>Home</a></li>
 
</div>
<br> <br> <hr size=1;> 
</body>
</html>

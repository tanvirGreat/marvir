<?php session_start(); ?>
<!DOCTYPE html>
<head>
 <link rel="stylesheet" type="text/css" href="marvir.css">
</head>
<body>

<?php 


$servername = "localhost";
  $username = "choahm5_m";
  $password = "Tan@01737480110";
  $db="choahm5_m";
  $conn = new mysqli($servername, $username, $password,$db);
  if ($conn->connect_error) {
    die("connection failed :" . $conn->connect_error);}

  

    include 'header.php'; 
    $sql= "SELECT name, price from products" or die (mysql_error());
  if ($result = $conn->query($sql)){
    
       while ($row = $result->fetch_assoc()) {
        echo $row["name"],$row["price"];
       

    }
$result->free();}

    ?>

</body>
</html>
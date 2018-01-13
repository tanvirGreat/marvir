<?php 
error_reporting(0);
session_start();

include "header.php";
$servername="localhost";
$username="choahm5_m";
$password="Tan@01737480110";
$dbname="choahm5_m";
//create connection
$conn = new mysqli ($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
	die ("connection failed:" . $conn->connect_error);
} 


$id=$_GET['id'];
$sql = "SELECT * FROM products ORDER by id ";
    

$result = $conn->query($sql);

if ($result->num_rows > 0) {

   //header("Content-type: image/jpeg");

    // output data of each row
    while($row = $result->fetch_assoc()) {
      $id = $row['id'];

?>

<div class="one" style="text-decoration-line: none;">
<?php echo '<img src ="data:image/png;base64,'.base64_encode($row["image"]).'"  style="width:70%;height:70%;"/>' ;?><br>
 <?php echo $row["name"] ;?> <br>
<?php echo "£". $row["price"] ; echo "<br>
 <button type='submit'><a href='checkout.php?action=add&id= ".$row['id']. "'style='text-decoration:none; color:black;'> Add To Cart</a></button>" ;?>            
</div>

  <?php      
    }
    echo"<br>
         
          </div> ";


}
else {
    echo "Sorry, choosen product is unavilable at the moment<br>";
}
include 'footer.php';
$conn->close();

 ?>

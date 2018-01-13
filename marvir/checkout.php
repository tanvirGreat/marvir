<?php 
//error_reporting(0);
session_start();

include('header.php'); 
if (isset($_GET['id'])){
 $id=$_GET['id'];

}

else{$id=1;
}

if (isset($_GET['action'])){
 $action=$_GET['action'];
}

else{$action="empty";
}

switch ($action) {
	case 'add':
	if (isset($_SESSION['cart'][$id])){
	$_SESSION['cart'][$id]++;}
else{
	$_SESSION['cart'][$id]=1;
}
				break;
	
	case "remove":
			if (isset($_SESSION['cart'][$id])){
	$_SESSION['cart'][$id]-- ;
	if ($_SESSION['cart'][$id]==0){
		unset($_SESSION['cart'][$id]);
	}
}
		break;
case "empty":
unset($_SESSION['cart']);
	break;
}

?>
<div id='table'>
<?php
if (isset($_SESSION['cart'])){
echo "<table>
<th> Name </th>
<th> Quantity </th>
<th> Cost </th>";

$total=0;

foreach ($_SESSION['cart'] as $id => $x) {
$sql="SELECT * FROM products WHERE id=$id" ;

//$sql = "SELECT p.* , s.*  FROM products p, shoes s  where p.id==$id ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
$name=$row['name'];
$price=$row['price'];
$line_cost=$price * $x;
$total= $total + $line_cost; 
echo"<tr>
<td>".$name."</td>
<td>".$x ."</td>
<td>".$line_cost."</td>
<td><button> <b><a href='checkout.php?id=".$id."&action=remove' style='text-decoration:none; color:black;'> Reduce</a></b></button></td>
</tr> ";



}}
foreach ($_SESSION['cart'] as $id => $x) {
$sql="SELECT * FROM shoes WHERE id=$id" ;

//$sql = "SELECT p.* , s.*  FROM products p, shoes s  where p.id==$id ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
$name=$row['name'];
$price=$row['price'];
$line_cost=$price * $x;
$total= $total + $line_cost; 
echo"<tr>
<td>".$name."</td>
<td>".$x ."</td>
<td>".$line_cost."</td>
<td><button> <b><a href='checkout.php?id=".$id."&action=remove' style='text-decoration:none; color:black;'> Reduce</a></b></button></td>
</tr> ";



}}
foreach ($_SESSION['cart'] as $id => $x) {
$sql="SELECT * FROM accessories WHERE id=$id" ;

//$sql = "SELECT p.* , s.*  FROM products p, shoes s  where p.id==$id ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
$name=$row['name'];
$price=$row['price'];
$line_cost=$price * $x;
$total= $total + $line_cost; 
echo"<tr>
<td>".$name."</td>
<td>".$x ."</td>
<td>".$line_cost."</td>
<td><button> <b><a href='checkout.php?id=".$id."&action=remove' style='text-decoration:none; color:black;'> Reduce</a></b></button></td>
</tr> ";



}}
echo"<tr> 
<td align='right'>Total</td>
<td align='right'>".$total."</td>
</tr>
<tr>
<td><button> <b><a href='checkout.php?id=".$id."&action=empty' style='text-decoration:none; color:black;'> Empty cart</a></b></button></td>
</tr>"
;
echo "</table>";
?> 
</div>


<?php
}

else{
	echo "Your shopping cart is empty";

}




include ('footer.php');

?>
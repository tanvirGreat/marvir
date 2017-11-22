<!DOCTYPE html>
<body>
<?php 
$servername = "localhost";
  $username = "choahm5_m";
  $password = "Tan@01737480110";
  $conn = new mysqli($servername, $username, $password);
  if ($conn->connect_error) {
    die("connection failed :" . $conn->connect_error);}

  
    include 'header.php';
    if ($result->num_rows > 0) {

   
                    echo"<table>".
  "<thead>
    <tr>
      
    
  
       
       <th>Name</th>
          
    
          <th>Price</th>
           
    </tr>
  </thead>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

echo
  "<tbody>
    <tr>".
      
        "<td>". $row["name"]. "</td>".
      
      "<td>". $row["price"]. "</td>".
    "</tr>
  </tbody>";

        
    
    echo"</table>". "<br>";}
 
    ?>


</body>
</html>
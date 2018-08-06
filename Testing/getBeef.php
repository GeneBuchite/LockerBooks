<?php
session_start();

include 'Conn.php';
$sql="SELECT * FROM beef WHERE Counter=20194";
//$sql=$sql . "'" . request.querystring("q") . "'"

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $hint =$row['Full Name'];
    echo $row['Full Name'];
    echo $row['DeliveryDate'];
    
       // $_SESSION['BadCheck']=$row["BadCheck"];
     
      //  echo "id: " . $row["Id"]. " - Name: " . $row["Name"]. "<br>";
     
    $_SESSION[mFName]=$row['Full Name'];
    
     
    }
   
 
} else {
    echo "0 results";
    session_destroy();
}
  
//$conn->close();
?>


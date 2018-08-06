<?php session_start();
$_SESSION['Identifier'] = session_id();
$C = $_SESSION['CustomerName'];


?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
    //  echo "The time is " . date("h:i:sa");
include 'Conn.php';

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$sql = "SELECT Id, Name FROM Customers";
//$sql = "SELECT * FROM beef ORDER BY DeliveryDate DESC ";// Where FullName = '$C' ";
//$sql = "SELECT * FROM beef Where DeliveryDate='2017-04-28' ";// Where FullName = '$C' ";
$result = $conn->query($sql);
 ?>
        <table class="striped">
            <tr class="header">
                <td>Id</td>
                <td>FullName</td>
                <td>City</td>
            </tr>
            <?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    
     $_SESSION['ID']=$row["Counter"];
       //echo $_SESSION['ID']. "In SQL";
       $_SESSION['FullName']=$row["Full Name"];
       // $LN=$row["LName"]; 
     $_SESSION['DeliveryDate']=$row['DeliveryDate'];
     $_SESSION['myOrder']=$row['Order'];
     $_SESSION['Active']=$row['Active'];
     $_SESSION['Type']=$row['Type'];
                        echo "<tr>";
                   echo "<td>".$row[Counter]."</td>";
                   echo "<td>".$row[DeliveryDate]."</td>";
                   echo "<td>".$row[Type]."</td>";
                   echo "</tr>";
          


    
     //echo $_SESSION['ID']. " ". $_SESSION['FullName']. " ". $_SESSION['DeliveryDate']. " ". $_SESSION['Order']. " ". $_SESSION['Active']. " ". $_SESSION['Type'] ."<br> ";
    
        //$_SESSION['Address']=$row["Address"];
      //  $_SESSION['City']=$row["City"];
     // $_SESSION['State']=$row["State"];
    //    $_SESSION['Zip']=$row["Zip"];
     //   $_SESSION['DateEntered']=$row["DateEntered"];
      //  $_SESSION['Phone']=$row["Phone"];
      //  $_SESSION['WorkPhone']=$row["WorkPhone"];
      //  $_SESSION['CellPh']=$row["CellPh"];
      //  $_SESSION['Notes']=$row["Notes"];
       // $_SESSION['SSN']=$row["SSN"];
       // $_SESSION['DOB']=$row["DOB"];
       // $_SESSION['BadCheck']=$row["BadCheck"];
     
      //  echo "id: " . $row["Id"]. " - Name: " . $row["Name"]. "<br>";
       
    
     
    }
             ?>
        </table>
    </body>
    <?php 
 
} else {
    echo "0 results";
    session_destroy();
}
  
//$conn->close();
 //die("SQLBY");
?>
    </body>
</html>



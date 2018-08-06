<?php //session_start();
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
$sql = "SELECT * FROM Customers Where FullName = 'Buchite,Gene Pineville'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    
       $_SESSION['ID']=$row["ID"];
       //echo $_SESSION['ID']. "In SQL";
       $_SESSION['FullName']=$row["FullName"];
        $LN=$row["LName"]; 
     $_SESSION['FirstName']=$row['FName'];
        $_SESSION['Address']=$row["Address"];
        $_SESSION['City']=$row["City"];
      $_SESSION['State']=$row["State"];
        $_SESSION['Zip']=$row["Zip"];
     //   $_SESSION['DateEntered']=$row["DateEntered"];
        $_SESSION['Phone']=$row["Phone"];
        $_SESSION['WorkPhone']=$row["WorkPhone"];
        $_SESSION['CellPh']=$row["CellPh"];
        $_SESSION['Notes']=$row["Notes"];
       // $_SESSION['SSN']=$row["SSN"];
       // $_SESSION['DOB']=$row["DOB"];
       // $_SESSION['BadCheck']=$row["BadCheck"];
      //  $_SESSION['ApprovedDate']=$row["ApprovedDate"];
        $_SESSION['email']=$row["email"];
        
        
        
      //  echo "id: " . $row["Id"]. " - Name: " . $row["Name"]. "<br>";
       
    }
  
    $_SESSION['LastName']=$LN;
    
    //die("SQLBY");
} else {
    echo "0 results";
}
$conn->close();

?>
    </body>
</html>

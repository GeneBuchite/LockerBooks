<?php 

$q = $_REQUEST["q"];
  //--------------------------------------------------------------------------
  // Example php script for fetching data from mysql database
  //--------------------------------------------------------------------------
      $servername = "localhost:3306";
       
//$username = "root";
$username = "Mac";
//$password = "mylockerpass";
$password = "Programmer";
//$dbname = "starting";         // lockerdata
$dbname = "lockerdata";


// Create connection----------------------------------------
//$con = new mysqli($servername, $username, $password, $dbname);
$con = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM beef Where Counter = '$q' ";
  
$result = $con->query($sql);

//$result = mysql_query("SELECT * FROM $tableName");          //query
  $array = mysqli_fetch_row($result);                          //fetch result    


  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
  echo json_encode($array);


?>
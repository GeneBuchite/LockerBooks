<?php
session_start();

$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    include 'Conn.php';
$sql = "SELECT * FROM beef WHERE Counter=20194";
//$sql=$sql . "'" . request.querystring("q") . "'"
$hint = "";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $hint = "Gteayt";
        $hint = $row['Full Name'];
        
    }
} else {
    echo "0 results";
    session_destroy();
}

$conn->close();
}


// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;



?>


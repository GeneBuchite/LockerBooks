<?php

session_start();


//echo $_POST['Update'];
//echo $_SESSION['ID']. 'Is The Sessionm ID  ';
//echo $_POST['FullName'] . "What";
//system("lp $filename");
$nOB = $_POST['NumberOfBeef'];

$ID = $_POST['ID'];


$FN = $_POST['FullName'];

$O = $_POST['Owner'];
$Or = $_POST['Order'];
$Co = $_POST['ctr'];
$A = $_POST['g'];
$Lw = $_POST['LiveWeight'];
$Tn = $_POST['TagNumber'];
$Lww = $_POST['LiverWeight'];
$Hw = $_POST['HangingWeight'];
$Dw = $_POST['DressedWeight'];
$N = $_POST['NumBeef'];
$DD = $_POST['myDate'];
$tp = $_POST['Type'];
$C = $_POST['Condition'];
$Br = $_POST['Breed'];
$times = $_POST['Times'];

 if(strlen($C)<1){
     $C='Ambulatory';
     $_POST['Condition'] = $C;
     
 }
 if(strlen($Br)<2) {
     $Br='x-Breed';
     $_POST['Breed']=$Br;
     
 }
echo $N . ' Is The Number Of Beef';


//die ($FN . " " . $HW);
//$FuN = $FN . " " . $LN;
//$KillDate = $_POST['DOB'];
//$KD = strtotime($KillDate);
//$ab = strtotime($KD);
//$da = getdate($KD);
//$BD= $da["year"] . "-" . $da["mon"] . "-" . $da["mday"];

if ($_POST['Update'] == "Update") {
    echo 'Good';

    include 'Conn.php';

    //mysqli_query($conn, "UPDATE beef SET [Full Name]='$FN', Owner='$O' WHERE Counter= '$ID'");



    $sql = "UPDATE beef SET `Live Weight`='$Lw', `Tag Number` = '$Tn', `Order`='$Or', `Full Name`='$FN', Owner='$O', `Liver Weight`='$Lww', `Hanging Weight`='$Hw',`Dressed Weight`='$Dw',CuttingOrder='$Co',Age='$A',Condit='$C',Breed='$Br' WHERE Counter= '$ID'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
        die("ERROR");
    }

    $conn->close();





    //echo '<script> alert("Finish Here PLace Values INto SQL LIne 54 Update Beef.php"); </script>';
    echo '<script> location = ("Beef.php") </script>';

    die('Finish Here');
}
// *******************   ADD NEW RECORD     ***************************
Else {
    $carcass = 0;
    insertOneRecord();
}

function insertOneRecord() {
    $ID = $_POST['ID'];


    $FN = $_POST['FullName'];

    $O = $_POST['Owner'];
    $Or = $_POST['Order'];
    $Co = $_POST['ctr'];
    $A = $_POST['g'];
    $Lw = $_POST['LiveWeight'];
    $Tn = $_POST['TagNumber'];
    $Lww = $_POST['LiverWeight'];
    $Hw = $_POST['HangingWeight'];
    $Dw = $_POST['DressedWeight'];
    $N = $_POST['NumBeef'];
    $DD = $_POST['myDate'];
    $tp = $_POST['Type'];
    $C = $_POST['Condition'];
    $Br = $_POST['Breed'];

    if ($GLOBALS['nxtName'] == "Enter Customer Name") {
        $FN = $GLOBALS['nxtName'];
    }
    echo $N . ' Is The Number Of Beef';

    echo 'Cool; Niw Sctipt to The PAge! After Coding INsert Here';
    include 'Conn.php';

    $sql = "INSERT INTO beef (DeliveryDate,`Live Weight`,`Tag Number`, `Order`, `Full Name`, Owner, Condit, Breed, `Liver Weight`, `Hanging Weight`,`Dressed Weight`, CuttingOrder,Age,`Number Of Beef`,Type)
     VALUES ('$DD', '$Lw', '$Tn', '$Or','$FN','$O','$C','$Br','$Lww','$Hw','$Dw','$Co','$A','$N','$tp')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        $GLOBALS ['carcass'] += $N;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        die($sql);
        $conn->close();
    }
}

for ($x = 1; $x < $times; $x++) {
    echo "The number is: $x <br>";

    $nxtName = "Enter Customer Name";

    If ($N == 1) {//code here for adding Order, tagNumber ect...
        $_POST['LiveWeight'] = 0;
        $_POST['TagNumber'] = $Tn + $x;
        $_POST['Order'] = $Or + $x;
    } else {
        if ($nOB ==.33) {
            if($x == $times - 1) {
                $_POST['NumBeef']=.34;
                
            }
        }
        if ($nOB ==.51) {
            $_POST['NumBeef']=.25;
        }
        if ($nob==.67) {
            $_POST['NumBeef']=.33;
        }
    }
    insertOneRecord();
}



echo '<script> location = ("Beef.php") </script>';

die('Finish Here');
?>










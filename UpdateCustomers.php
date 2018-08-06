<?php session_start();




 


        ?>

<html>

<head>



 <title>Edit Customers Data</title>



</head>

<body>



<?php

           if ($_SESSION['Info'] == "6"){
             Die('You Cannot Edit The Guest Information');}
if (isset($_POST['SUBMIT'])) {

// Save Updates!!



// Updating
            echo "Update Started";
 $con=mysqli_connect("sql5c45a.carrierzone.com","swcprocess265704","1Cindy!Gene","swcpro_swcprocessing_com");
            echo "<br/> Connected";


    if (!$con)

   {

   die('Could not connect: ' . mysql_error($con));

   }
   
               echo "<br/> Con Passed";
$UN = $_SESSION['username'];

$FN= $_POST['FName'];

$LN= $_POST['LName'];

$A= $_POST['Address'];

$C= $_POST['City'];

$S= $_POST['State'];

$Z= $_POST['Zip'];

$P= $_POST['Phone'];

$CP= $_POST['Cell'];

$O= $_POST['OPhone'];

$EM= $_POST['EMail'];

$D= $_POST['DL'];

$FuN = $FN . " " . $LN;

$KillDate = $_POST['DOB'];

$KD = strtotime($KillDate);

$ab = strtotime($KD);

$da = getdate($KD);

 $BD= $da["year"] . "-" . $da["mon"] . "-" . $da["mday"];



         mysqli_query($con,"UPDATE Contacts SET FName='$FN', LName='$LN', Address='$A', City='$C', State='$S', Zip='$Z', Phone='$P', Cell='$CP', OPhone='$O', EMail='$EM', DLicense='$D', DOB='$BD', FullName='$FuN' WHERE UName= '" . $UN. "'");







   Print "Info Updated";



          mysqli_close($con);
          
          //Email User
          $Subject = "Updated Registration";

$Body = "This IS E=Mail";

$From = "owner@swcprocessing.com";

    $Body = " Thank you for registrating with Southwest City Processing. Your Information is as follows \n";

  $Body =  $Body . "Username  :" . $UN;

    $Body =  $Body . "....... Password  :XXXXXXXX";

    $Body =  $Body . "\n First Name:" . $FN;

    $Body =  $Body . "\n Last Name :" . $LN;

    $Body =  $Body . "\n Address   :" . $A;

    $Body =  $Body . "\n City      :" . $C;

    $Body =  $Body . "\n State     :" . $S;   

    $Body =  $Body . "\n Zip Code  :" . $Z;

    $Body =  $Body . "\n Phone #   :" . $P;

    $Body =  $Body . "\n Cell Phone:" . $CP;

    $Body =  $Body . "\n 3rd Phone :" . $O;

    $Body =  $Body . "\n E-Mail    :" . $EM;

    $Body =  $Body . "\n Drivers License #:" . $D;

    $Body =  $Body . "\n Birthday  :" . $BD;

if (!empty($EM)) {     // email 

       $ToL = $EM;

       mail($ToL,$Subject,$Body,$From);

    }





$To = "genebuchite@swcprocessing.com";

mail($To,$Subject,$Body,$From);

          echo $Body;
        include ('getuserdata.php');
//end email
         echo "<script> location='bb.php'</script>";
}
?>



<TABLE WIDTH="45%" BGCOLOR="#CCFFFF" ALIGN="left" CELLSPACING="1" CELLPADDING="4" BORDER="1">

<tr><td style="font-size:25;color:blue" align="center" colspan="2">Edit Customer Information

<tr><td style="font-size:18;color:blue" align="center" colspan="2"><? echo $username?>

<form method="post" action="EditUserINFO.php">

  <?php
    echo "<TR><TD>First Name</TD><TD><input type= 'text' name= 'FName' value = '{$_SESSION['FName']}'></TD></TR>";
    echo "<TR><TD>LastName</TD><TD><input type= 'text' name= 'LName' value = '{$_SESSION['LName']}'></TD></TR>";
    echo "<TR><TD>Address</TD><TD><input type= 'text' name= 'Address' value = '{$_SESSION['Address']}'></TD></TR>";
    echo "<TR><TD>City</TD><TD><input type= 'text' name= 'City' value = '{$_SESSION['City']}'></TD></TR>";
    echo "<TR><TD>State</TD><TD><input type= 'text' name= 'State' value = '{$_SESSION['State']}'></TD></TR>";
    echo "<TR><TD>Zip</TD><TD><input type= 'text' name= 'Zip' value = '{$_SESSION['Zip']}'></TD></TR>";
    echo "<TR><TD>Phone</TD><TD><input type= 'text' name= 'Phone' value = '{$_SESSION['Phone']}'></TD></TR>";
    echo "<TR><TD>Cell Phone</TD><TD><input type= 'text' name= 'Cell' value = '{$_SESSION['CellP']}'></TD></TR>";
    echo "<TR><TD>Other Phone</TD><TD><input type= 'text' name= 'OPhone' value = '{$_SESSION['OPhone']}'></TD></TR>";
    echo "<TR><TD>E-Mail</TD><TD><input type= 'text' name= 'EMail' value = '{$_SESSION['EMail']}'></TD></TR>";
    echo "<TR><TD>Drivers License# </TD><TD><input type= 'DL' name= 'DL' value = '{$_SESSION['DL']}'></TD></TR>";
    echo "<TR><TD>Date Of Birth</TD><TD><input type= 'text' name= 'DOB' value = '{$_SESSION['DOB']}'></TD></TR>";
    //echo "<TR><TD>Zip</TD><TD><input type= 'text' name= 'FName' value = '{$_SESSION['FName']}'></TD></TR>";
  ?>


<TD style="font-size:25;color:blue" align="center" colspan="2"><input type="submit" name="SUBMIT" value="submit" /> </TD></TR>

</TABLE></TABLE>

</form> 



</body> 

</html>
<?php

?>


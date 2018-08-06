<?php session_start();

include_once 'Header.php';
include 'SQLCustByName.php';


echo $_SESSION['ID']. 'Is The Sessionm ID';

$Addy = $_SESSION['Address'];
//echo $Addy. "IsNthe Addy";
//   Update Customer


    
    //system("lp $filename");
 
    
    $ID = $_SESSION['ID'];
    // echo $ID;
    $UN = $_SESSION['username'];

    $FN = $_POST['FName'];

    $LN = $_POST['LName'];

    $A = $_POST['Address'];

    $C = $_POST['City'];

    $S = $_POST['MyState'];

    $Z = $_POST['Zip'];

    $P = $_POST['Phone'];

    $CP = $_POST['Cell'];

    $O = $_POST['OPhone'];

    $EM = $_POST['EMail'];

//$D= $_POST['DL'];

    $nts = $_POST['Notes'];

//$FuN = $FN . " " . $LN;
//$KillDate = $_POST['DOB'];
//$KD = strtotime($KillDate);
//$ab = strtotime($KD);
//$da = getdate($KD);
    //$BD= $da["year"] . "-" . $da["mon"] . "-" . $da["mday"];

if (isset($_POST['Updte'])) {echo 'Good';

    include 'Conn.php';
    echo $A;

    mysqli_query($conn, "UPDATE Customers SET FName='$FN', LName='$LN', Address='$A', City='$C', State='$S', Zip='$Z', Phone='$P', CellPH='$CP', WorkPhone='$O', email='$EM',Notes='$nts' WHERE ID= '$ID'");


    if (!$conn) {
        die('Could Not Connect:' . mysql_error($conn));
    } else {

        //include 'SQLCustByName.php';
        Print "Info Updated";
        //echo "<script> location='Bounce.php'</script>";
    }








    mysqli_close($con);
   // echo "<script> location='Bounce.php'</script>";
echo "<script> location='index.php'</script>";
}
// *******************   ADD NEW RECORD     ***************************
IF (isset($_POST['AddNew'])) {
    echo 'Cool; Niw Sctipt to The PAge!';
    
}

?>

<html>

    <head>
<link rel="stylesheet" href="tables.css">
        

        <title>Customer Information </title>



    </head>

    <body>
        <div class="flex-container"> 
        <font size="5">

        <table id="Customer"  width="400" height="150" bgcolor="lightblue" border="1" align="center">

            <tr><td style="font-size:36;color:red" align="center" colspan="2"><?php echo $C; ?> </td></tr>

            <form method="post" action="">

                <tr><td align="right" width="100">

                        Last Name:</td><td><input  { font-size: 200px; } type="text" name="LName" size="45" value ="<?php echo $_SESSION['LastName']; ?>" </td></tr>

                <tr><td align="right" width="100">

                        FirstName:</td><td><input type="text" name="FName" size="45" value = "<?php echo $_SESSION['FirstName']; ?>"   </td></tr>

                <tr><td align="right" width="100">

                        Address:</td><td><input { font-size: 86px; } type="text" name="Address" size="45" value ="<?php echo $Addy; ?>"   </td></tr>

                <tr><td align="right" width="100">

                        City:</td><td><input { font-size: 36px; } type="text" name="City" size="45" value = "<?php echo $_SESSION['City']; ?>"  </td></tr>

                <tr><td align="right" width="100">

                        State:</td><td><input { font-size: 36px; } type="text" name="MyState" size="45" value = "<?php echo $_SESSION['State']; ?>"  </td></tr>

                <tr><td align="right" width="100">

                        Zip:</td><td><input { font-size: 36px; } type="text" name="Zip" size="45" value = "<?php echo $_SESSION['Zip']; ?>"  </td></tr>

                <tr><td align="right" width="100">

                        Phone:</td><td><input { font-size: 36px; } type="text" name="Phone" size="45" value = "<?php echo $_SESSION['Phone']; ?>"  </td></tr>

                <tr><td align="right" width="100">

                        CellPhpne:</td><td><input { font-size: 36px; } type="text" name="Cell" size="45" value = "<?php echo $_SESSION['CellPh']; ?>"  </td></tr>

                <tr><td align="right" width="100">

                        WorkPhone:</td><td><input { font-size: 36px; } type="text" name="OPhone" size="45" value = "<?php echo $_SESSION['WorkPhone']; ?>"  </td></tr>

                <tr><td align="right" width="80">

                        Email:</td><td><input { font-size: 36px; } type="text" name="EMail" size="45" value = "<?php echo $_SESSION['email']; ?>"  </td></tr>

                <tr><td rowspan="2" align="right" width="100">

                        Notes:</td><td>

                <tr><td><input { font-size: 36px; } type="textArea" name="Notes" size="145" value = "<?php echo $_SESSION['Notes']; ?>"  </td></tr>


                <tr><td>  <input type="submit" value="Update" name="Updte" </td> 
                    <?php if ($_SESSION['ID'] == 'Empty') ?>
                    
                    <td align="Center" width="50">  <input type="submit" value="Add New Record" name="AddNew" </td>
                    <td align="Center" width="50">  <input type="submit" value="Delete Record" name="Delete" </td>
                </tr>

           
        </table>

        </div>
        
    </body>

</html>








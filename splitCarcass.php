<?php
session_start();

//Written By Gene Buchite: Cinjerene Programming
//Netbeans IDE
//Most Info From W3Schools
//Bootstrap
if (isset($_POST['SaveInfo'])) {
    $ID = $_POST['vID'];
    $DD = $_POST['vDD'];
    $Lw = $_POST['LiveWeight'];
    $Tn = $_POST['TagNumber'];
    $Or = $_POST['vOrder'];
    $O = $_POST['vOwner'];
    $C = $_POST['vCondit'];
    $Br = $_POST['vBreed'];
    $tp = $_POST['vType'];
    $Co = '0';
    $A = $_POST['vAge'];


    if ($_POST['NumFour'] > 0) {



        // *******************   ADD FOURTH QUARTER     ***************************

        $FN = $_POST['CustomerF'];
        $Lww = $_POST['LiverFour'];
        $Hw = $_POST['HangingFour'];
        $Dw = $_POST['DressFour'];
        $N = $_POST['NumFour'];

        echo 'Cool; Niw Sctipt to The PAge! After Coding INsert Here';
        include 'Conn.php';

        $sql = "INSERT INTO beef (DeliveryDate,`Live Weight`,`Tag Number`, `Order`, `Full Name`, Owner, Condit, Breed, `Liver Weight`, `Hanging Weight`,`Dressed Weight`, CuttingOrder,Age,`Number Of Beef`,Type)
     VALUES ('$DD', '$Lw', '$Tn', '$Or','$FN','$O','$C','$Br','$Lww','$Hw','$Dw','$Co','$A','$N','$tp')";

        echo ($sql . "Fourth Quarter");
        
         if ($conn->query($sql) === TRUE) {
             echo "New record created successfully";
         } else {
             echo "Error: " . $sql . "<br>" . $conn->error;
             die($sql);
         }
    } else {
        echo'nothingtodowithFour';
    }

    
    if ($_POST['NumThree'] > 0) {



        // *******************   ADD Third QUARTER     ***************************

        $FN = $_POST['CustomerTh'];
        $Lww = $_POST['LiverThree'];
        $Hw = $_POST['HangingThree'];
        $Dw = $_POST['DressThree'];
        $N = $_POST['NumThree'];

        echo 'Cool; Niw Sctipt to The PAge! This Is The Third Quarter After Coding INsert Here';
        include 'Conn.php';

        $sql = "INSERT INTO beef (DeliveryDate,`Live Weight`,`Tag Number`, `Order`, `Full Name`, Owner, Condit, Breed, `Liver Weight`, `Hanging Weight`,`Dressed Weight`, CuttingOrder,Age,`Number Of Beef`,Type)
     VALUES ('$DD', '$Lw', '$Tn', '$Or','$FN','$O','$C','$Br','$Lww','$Hw','$Dw','$Co','$A','$N','$tp')";

        echo ($sql . "Third Quarter:");
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            die($sql);
        }
    } else {
        echo'nothingtodowithThree ' . $_POST['NumThree'];
    }

    if ($_POST['NumThree'] > 0) {



        // *******************   ADD Second QUARTER     ***************************

        $FN = $_POST['CustomerT'];
        $Lww = $_POST['LiverTwo'];
        $Hw = $_POST['HangingTwo'];
        $Dw = $_POST['DressTwo'];
        $N = $_POST['NumTwo'];

        echo 'Cool; Niw Sctipt to The PAge! This Is The Third Quarter After Coding INsert Here';
        include 'Conn.php';

        $sql = "INSERT INTO beef (DeliveryDate,`Live Weight`,`Tag Number`, `Order`, `Full Name`, Owner, Condit, Breed, `Liver Weight`, `Hanging Weight`,`Dressed Weight`, CuttingOrder,Age,`Number Of Beef`,Type)
     VALUES ('$DD', '$Lw', '$Tn', '$Or','$FN','$O','$C','$Br','$Lww','$Hw','$Dw','$Co','$A','$N','$tp')";

        echo ($sql) ?> </br> <?php ;
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            die($sql);
        }
    } else {
        echo'nothingtodowithTwo ' . $_POST['NumThree'];
    }

    // First Quarter: UpdaTE:

    include 'Conn.php';

     $FN = $_POST['CustomerO'];
        $Lww = $_POST['LiverOne'];
        $Hw = $_POST['HangingOne'];
        $Dw = $_POST['DressOne'];
        $N = $_POST['NumOne'];



    $sql = "UPDATE beef SET `Live Weight`='$Lw', `Tag Number` = '$Tn', `Order`='$Or', `Full Name`='$FN', Owner='$O', `Liver Weight`='$Lww', `Hanging Weight`='$Hw',`Dressed Weight`='$Dw',CuttingOrder='$Co',Age='$A',Condit='$C',Breed='$Br' WHERE Counter= $ID";
 
    echo $sql ;
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
        die("ERROR");
    }

    $conn->close();
   // die($sql);
    
     echo '<script> location = ("Beef.php") </script>';
}

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
?> <h1> <?php echo $FN . " " . $LWW . " " . $Lw . " " . $Hw . " " . $Dw . " " . $N; ?> </h1> <?php ?>
<link rel="stylesheet" href="tables.css">
<form method="post" action="">
    <div id="varia">
        <input type="text" value ="<?php echo $ID ?>" name="vID" />
        <input type="text" value ="<?php echo $O ?>" name="vOwner" />
        <input type="text" value ="<?php echo $Or ?>" name="vOrder" />
        <input type="text" value ="<?php echo $Co ?>" name="vCutting" />
        <input type="text" value ="<?php echo $A ?>" name="vAge" />
        <input type="text" value ="<?php echo $DD ?>" name="vDD" />
        <input type="text" value ="<?php echo $tp ?>" name="vType" /> 
        <input type="text" value ="<?php echo $C ?>" name="vCondit" /> 
        <input type="text" value ="<?php echo $Br ?>" name="vBreed" /> 

    </div>
    <divl id="varial"> Full Name </br>
        <input class="form-control" list="fnms" name="vFullName" id="fn" >
        <datalist id="fnms">
            <?php
            include 'Conn.php';

            $sqll = "SELECT FullName FROM Customers Order By FullName";
            $results = $conn->query($sqll);

            if ($results->num_rows > 0) {
                // output data of each row
                while ($row = $results->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $row['FullName']; ?>">
                        <?php
                    } //End While
                } else {
                    echo "0 results";
                }
                //$conn->close();
                ?>
        </datalist>
    </divl>    
    <div class='flex-containers' >


        <divl> Number Of Beef 
            <div> <input type="radio" name="Number Of Beef" value="1" checked="checked" onchange="NOB(1)" /> Whole</div>
            <div> <input type="radio" name="Number Of Beef" value=".5" onchange="NOB(.5)" /> Half </div>
            <div><input type="radio" name="Number Of Beef" value=".33" onchange="NOB(.33)"/> Third </div>
            <div><input type="radio" name="Number Of Beef" value=".25" onchange="NOB(.25)"/> Quarters </div>
            <div><input type="radio" name="Number Of Beef" value=".50" onchange="NOB(.51)"/> One Half Two Quarters </div> 
            <div><input type="radio" name="Number Of Beef" value=".67" onchange="NOB(.67)"/> Two Thirds And One Third </div>
            <div><input type="text" name="NumBeef" id="NumBeef"  Value="1" /></div>
        </divl>

    </div>
    <div class='flex-containers'>
        <div> Original Values
            <div> LiveWeight:  <input type="text" Name="LiveWeight" id="LiveWeight" value="<?php echo $Lw; ?>" /></div>
            <div>   LiverWeight: <input type="text" Name="LiverWeight" id="LiverWeight" value="<?php echo $Lww; ?>"  /></div>
            <div> HangingWeight:  <input type="text" Name="HangingWeight" id="Hanging" value="<?php echo $Hw; ?>" /> </div>
            <div> DressedWeight:  <input type="text" Name="DressedWeight" id="Dress" value="<?php echo $Dw; ?>" /> </div>
            <div> TagNumber:  <input type="text" Name="TagNumber" id="Tag" value="<?php echo $Tn; ?>" /> </div>
        </div>
    </div>
</div>
<div> Edit Full Names Here!</div>

<script>
    function NOB(N) {

        document.getElementById('div2').style.visibility = 'visible';
        document.getElementById('div3').style.visibility = 'visible';
        document.getElementById('div4').style.visibility = 'visible';

        if (N == .5) {
            document.getElementById('LWWO').value = document.getElementById('LiverWeight').value * .5;
            document.getElementById('HWO').value = document.getElementById('Hanging').value * .5;
            document.getElementById('DWO').value = document.getElementById('Dress').value * .5;
            document.getElementById('LWWT').value = document.getElementById('LiverWeight').value * .5;
            document.getElementById('HWT').value = document.getElementById('Hanging').value * .5;
            document.getElementById('DWT').value = document.getElementById('Dress').value * .5;
            document.getElementById('NO').value = '.5';
            document.getElementById('NT').value = '.5';
            document.getElementById('div3').style.visibility = 'hidden';
            document.getElementById('div4').style.visibility = 'hidden';
        } else if (N == .51) {
            document.getElementById('LWWO').value = document.getElementById('LiverWeight').value * .5;
            document.getElementById('HWO').value = document.getElementById('Hanging').value * .5;
            document.getElementById('DWO').value = document.getElementById('Dress').value * .5;

            document.getElementById('LWWT').value = document.getElementById('LiverWeight').value * .25;
            document.getElementById('HWT').value = document.getElementById('Hanging').value * .25;
            document.getElementById('DWT').value = document.getElementById('Dress').value * .25;
            document.getElementById('NO').value = '.5';
            document.getElementById('NT').value = '.25';

            document.getElementById('LWWTh').value = document.getElementById('LiverWeight').value * .25;
            document.getElementById('HWTh').value = document.getElementById('Hanging').value * .25;
            document.getElementById('DWTh').value = document.getElementById('Dress').value * .25;
            document.getElementById('NTh').value = '.25';
            document.getElementById('div4').style.visibility = 'hidden';
        } else if (N == .25) {
            document.getElementById('LWWO').value = document.getElementById('LiverWeight').value * .25;
            document.getElementById('HWO').value = document.getElementById('Hanging').value * .25;
            document.getElementById('DWO').value = document.getElementById('Dress').value * .25;

            document.getElementById('LWWT').value = document.getElementById('LiverWeight').value * .25;
            document.getElementById('HWT').value = document.getElementById('Hanging').value * .25;
            document.getElementById('DWT').value = document.getElementById('Dress').value * .25;
            document.getElementById('NO').value = '.5';
            document.getElementById('NT').value = '.25';

            document.getElementById('LWWTh').value = document.getElementById('LiverWeight').value * .25;
            document.getElementById('HWTh').value = document.getElementById('Hanging').value * .25;
            document.getElementById('DWTh').value = document.getElementById('Dress').value * .25;
            document.getElementById('NTh').value = '.25';

            document.getElementById('LWWF').value = document.getElementById('LiverWeight').value * .25;
            document.getElementById('HWF').value = document.getElementById('Hanging').value * .25;
            document.getElementById('DWF').value = document.getElementById('Dress').value * .25;
            document.getElementById('NO').value = '.25';

            document.getElementById('NF').value = '.25';

        } else if (N == .33) {
            document.getElementById('LWWO').value = document.getElementById('LiverWeight').value * .33;
            document.getElementById('HWO').value = document.getElementById('Hanging').value * .33;
            document.getElementById('DWO').value = document.getElementById('Dress').value * .33;

            document.getElementById('LWWT').value = document.getElementById('LiverWeight').value * .33;
            document.getElementById('HWT').value = document.getElementById('Hanging').value * .33;
            document.getElementById('DWT').value = document.getElementById('Dress').value * .33;
            document.getElementById('NO').value = '.33';
            document.getElementById('NT').value = '.33';

            document.getElementById('LWWTh').value = document.getElementById('LiverWeight').value * .34;
            document.getElementById('HWTh').value = document.getElementById('Hanging').value * .34;
            document.getElementById('DWTh').value = document.getElementById('Dress').value * .34;
            document.getElementById('NTh').value = '.25';
            document.getElementById('div4').style.visibility = 'hidden';

        } else if (N == .67) {
            document.getElementById('LWWO').value = document.getElementById('LiverWeight').value * .67;
            document.getElementById('HWO').value = document.getElementById('Hanging').value * .67;
            document.getElementById('DWO').value = document.getElementById('Dress').value * .67;

            document.getElementById('LWWT').value = document.getElementById('LiverWeight').value * .33;
            document.getElementById('HWT').value = document.getElementById('Hanging').value * .33;
            document.getElementById('DWT').value = document.getElementById('Dress').value * .33;
            document.getElementById('NO').value = '.67';
            document.getElementById('NT').value = '.33';

            document.getElementById('div3').style.visibility = 'hidden';
            document.getElementById('div4').style.visibility = 'hidden';
        } else {
            alert('Finish Here' + N);
        }
    }

</script> 


<div class='flex-container'>


    <divl id="div1"> 
        <divl>  <input class="form-control" list="fnms" type="text" value="<?php echo $FN ?>" name="CustomerO" size="30" id ="FNO"/> </divl>

        <div>Live Weight: <input type="text" name="LiveOne" value="<?php echo $Lw ?>" id='LWO'/> </div>
        <div>Liver Weight: <input type="text" name="LiverOne" value="<?php echo $Lww ?>" id='LWWO'/> </div>
        <div>Hanging : <input type="text" name="HangingOne" value="<?php echo $Hw ?>" id='HWO'/> </div>
        <div>Dressed : <input type="text" name="DressOne" value="<?php echo $Dw ?>" id='DWO'/> </div>
        <div>Number : <input type="text" name="NumOne" value="<?php echo $N ?>" id='NO'/> </div>

    </divl>

    <divl id='div2'>
        <divl>  <input class="form-control" list="fnms" type="text" name="CustomerT" size="30" id ="FNT"/> </divl>
        <div>Live Weight: <input type="text" name="LiveTwo" value="0" id=' LWT'/> </div>
        <div>Liver Weight: <input type="text" name="LiverTwo" value="0" id='LWWT'/> </div>
        <div>Hanging : <input type="text" name="HangingTwo" value="0" id='HWT'/> </div>
        <div>Dressed : <input type="text" name="DressTwo" value="0" id='DWT'/> </div>
        <div>Number : <input type="text" name="NumTwo" value="0" id='NT'/> </div>
    </divl>
    <divl id='div3'>
        <divl>  <input class="form-control" list="fnms" type="text" name="CustomerTh" size="30" id ="FNTh"/> </divl>
        <div>Live Weight: <input type="text" name="LiveThree" value="0" id=' LWTh'/> </div>
        <div>Liver Weight: <input type="text" name="LiverThree" value="0" id='LWWTh'/> </div>
        <div>Hanging : <input type="text" name="HangingThree" value="0" id='HWTh'/> </div>
        <div>Dressed : <input type="text" name="DressThree" value="0" id='DWTh'/> </div>
        <div>Number : <input type="text" name="NumThree" value="0" id='NTh'/> </div>
    </divl>
    <divl id='div4'>
        <divl>  <input class="form-control" list="fnms" type="text" name="CustomerF" size="30" id ="FNF"/> </divl>
        <div>Live Weight: <input type="text" name="LiveFour" value="0" id=' LWF'/> </div>
        <div>Liver Weight: <input type="text" name="LiverFour" value="0" id='LWWF'/> </div>
        <div>Hanging : <input type="text" name="HangingFour" value="0" id='HWF'/> </div>
        <div>Dressed : <input type="text" name="DressFour" value="0" id='DWF'/> </div>
        <div>Number : <input type="text" name="NumFour" value="<?php echo $Nw ?>" id='NF'/> </div>
    </divl>
</div>




<div class='flex-container'>
    <div></div>
    <div></div>
    <div>
        <div><input class="buttonG" type="submit" value="SaveInfo" name="SaveInfo" /></div>

    </div>

</form>

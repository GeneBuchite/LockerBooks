<?php
session_start();
$_SESSION['mfn'] = "Geno";
$Action = "Insert";

include_once 'Header.php';


$q = $_REQUEST["q"];

if ($q == "Beef") {
    $_SESSION["myType"] = $q;
} Else IF ($q == "Pork") {
    $_SESSION["myType"] = $q;
} else {
    $q = $_SESSION['myType'];
}

If (isset($_POST['myDate'])) {
    echo $_POST['myDate'] . ' BookDate at toptop buy SESSION';
    $dd = $_POST['myDate'];
    $_SESSION['bookDate'] = $_POST['myDate'];
} else {
    echo $_COOKIE['bookDate'] . ' BookDate at By Cooklie';
    $dd = $_COOKIE['bookDate'];
    $_SESSION['bookDate'] = $_COOKIE['bookDate'];
}



//echo $q . " Does it Say Beef?";
//Written By Gene Buchite: Cinjerene Programming
//Netbeans IDE
//Most Info From W3Schools
//Bootstrap
if (isset($_POST['NxtWk'])) {


    $dd = $_SESSION['bookDate'];

    if ($_POST['NxtWk'] == "Next Week") {

        $date = date_create($dd);
        date_add($date, date_interval_create_from_date_string("1 weeks"));


        $dd = date_format($date, "Y-m-d");
        $_SESSION['bookDate'] = $dd;
        //echo "End OF Next>>" . $dd . "<<dd cookie>> " . $_SESSION['bookDate'];
    } else {

        $date = date_create($dd);
        date_add($date, date_interval_create_from_date_string("-1 weeks"));

        $dd = date_format($date, "Y-m-d");
        $_SESSION['bookDate'] = $dd;
    }
}  //End IF

if (isset($_POST['Cust'])) {

    $_SESSION['CustomerName'] = $_POST['FullName'];

    // echo "<script> window.open("https://www.w3schools.com", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");</script>";
    echo '<script> window.open("Customers.php", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=1000,height=800"); </script>';
}



if (isset($_POST['Update'])) {

    require 'UpdateBeef';

    echo 'Updating Now';
}
if (isset($_POST['Split'])) {
    echo 'PLace Split Code Here';
}
if (isset($_POST['Delete'])) {
    echo 'PLacde Delete Code Hdere';
}
include 'Conn.php';
//2017-04-28

$sql = "Select * FROM beef WHERE Type = '$q' Order By `Tag Number` DESC LIMIT 1 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $LTn = $row["Tag Number"];
        $LOn = $row["Order"];
        $LTn += 1;
        $LOn += 1;
    }
} else {
    echo "0 results " . $sql;
}


$sql = "SELECT * FROM beef Where Type = '$q' And  DeliveryDate='$dd' Order By `Order` "; // Where FullName = '$C' ";

$result = $conn->query($sql);
//$_SESSION['bookDate'] = $dd;





$myField = $_SESSION['mlw'];
// ***************** Inputs Section
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="tables.css">


    </head> 
    <body> 


        <form action="" method="post" >
            <div class="row">
                <div class="column">
                    <div class="flex-container">
                        <div> Live Weight </br>
                            <input type="text"  name="LiveWeight" id="lw" size="4" onchange="NextAnimal()" autofocus onfocus="clearFields()" ></div>
                        <div> Tag Number </br>
                            <input  type="text" name="TagNumber" value='0' id="tn" size="4"></div>
                        <div> Order </br>
                            <input type="text" name="Order" id="o" size="4"></div>
                        <divl> Full Name </br>
                            <input type="text" name="FullName" id="fn" size="30">
                        </divl>    
                        <div> Cutting Order </br>
                            <input type="checkbox" name="CuttingOrder" value="0" id="co" size="3" onclick="setCuttingOrder()">
                            <input type="text" name="ctr" value="0" id="ctr" hidden="true" /></div>
                        <divl> Owner </br>
                            <input type="text" name="Owner" size="30" id ="ow"/>
                        </divl>


                    </div>

                    <div class="flex-container">
                        <divs> 
                        </divs>
                        <div><input class="buttonE" name="Edit Weights" value="Edit Weights" onclick="EditWeights()"/> 

                        </div>
                        <div> Liver  Weights:** </br>
                            <input type="text" name="LiverWeight" id="lwt" value="0" size="4"></div>
                        <div> Hanging Weight </br>
                            <input type="text" name="HangingWeight" id="hw" value="0" size="4">
                        </div>    
                        <div> Dressed Weight </br>
                            <input type="text" name="DressedWeight" id="dw"  value="0" size="4">
                        </div>    

                        <div> Age  </br>
                            <input type="checkbox" name="Age" id="a" size="3" value="0" onclick="setAge()"/>
                            <input type="text" name="g" id="g" value="0" hidden="true"/></div>
                        <divl> Condition </br>
                            <input type="text" name="Condition" size="30" id ="con" ></divl>
                        <divl> Breed </br>
                            <input type="text" name="Breed" size="30" id ="br" ></divl>


                    </div>
                    <div id="overflowTest">
                        <table class="flex-container" id="MyTable">
                            <tr style="color:black">

                                <td>LiveWeight</td>
                                <td>Tag Number</td>
                                <td>Order</td>
                                <td>Liver</td>
                                <td>Dressed</td>
                                <td>Full Name</td>
                                <td>N.O.B.</td>
                                <td>CgtngOrdr</td>

                                <td>Age</td>
                                <td>Dress%</td>
                                <td>Owner</td>
                                <td>Condition</td>
                                <td>Breed</td>



                            </tr>
                            <?php
                            if ($result->num_rows > 0) {
                                // echo 'This Is Working /n';
                                // output data of each row

                                $t = .0;
                                while ($row = $result->fetch_assoc()) {

                                    if ($t >= 0) {
                                        $color = "lightBlue";
                                    }
                                    if ($t >= 1) {
                                        $color = "lightPink";
                                    }
                                    if ($t >= 2) {
                                        $color = "lightGreen";
                                        $t = -1.0;
                                    }
                                    //number_format(110000,2);
                                    //echo 'NUmbder Of Beef IS:' . number_format($row["Number Of Beef"], 1);


                                    $v = "Am";
                                    echo "<tr bgcolor=$color onclick='MyFun(this)' style='color:black;'>";

                                    echo "<td>" . $row["Live Weight"] . "</td>";
                                    echo "<td>" . $row["Tag Number"] . "</td>";
                                    echo "<td>" . $row[Order] . "</td>";
                                    echo "<td>" . $row["Liver Weight"] . "</td>";
                                    echo "<td>" . $row["Dressed Weight"] . "</td>";
                                    echo "<td>" . $row["Full Name"] . "</td>";
                                    echo "<td>" . $row["Number Of Beef"] . "</td>";
                                    //echo "<td>" . $row["CuttingOrder"] . "</td>";
                                    if ($row[CuttingOrder] > 0) {
                                        echo "<td><input type = 'checkbox' value='" . $row[CuttingOrder] . "' checked name='CuttingOrder[]'> </td>";
                                    } else {
                                        echo "<td><input type = 'checkbox' value='" . $row[CuttingOrder] . "'  name='CuttingOrder[]'> </td>";
                                    }
                                    if ($row[Age] > 0) {
                                        echo "<td><input type = 'checkbox' value='" . $row[Age] . "' checked name='Age'> </td>";
                                    } else {
                                        echo "<td><input type = 'checkbox' value='" . $row[Age] . "'  name='Age'> </td>";
                                    }

                                    echo "<td>" . $row[Dress] . "</td>";
                                    echo "<td>" . $row[Owner] . "</td>";
                                    echo "<td>" . $row[Condit] . "</td>";
                                    echo "<td>" . $row[Breed] . "</td>";
                                    echo "<td hidden>" . $row[Counter] . "</td>";




                                    echo "</tr>";
                                    $t += $row["Number Of Beef"];
                                }
                                ?>
                            </table>
                        </div>


                    </div>

                    <div class="column2">
                        <div class="flex-containers">

                            <div> Number Of Beef 
                                <div> <input type="radio" name="Number Of Beef" value="1" checked="checked" onchange="NOB(1)" /> Whole</div>
                                <div> <input type="radio" name="Number Of Beef" value=".5" onchange="NOB(.5)" /> Half </div>
                                <div><input type="radio" name="Number Of Beef" value=".33" onchange="NOB(.33)"/> Third </div>
                                <div><input type="radio" name="Number Of Beef" value=".25" onchange="NOB(.25)"/> Quarters </div>
                                <div><input type="radio" name="Number Of Beef" value=".5" onchange="NOB(.5)"/> One Half Two Quarters </div> 
                                <div><input type="radio" name="Number Of Beef" value=".67" onchange="NOB(.67)"/> Two Thirds And One Third </div>
                                <div><input type="text" name="NumBeef" id="NumBeef" readonly="True" Value="1" /></div>
                            </div>
                        </div>
                        <div class="flex-containers">

                            <div> Database 
                                <div>
                                    <div><input class="buttonG" type="submit" value="Insert New Record" formaction="UpdateBeef.php?q=$Action" name="Update" id="UD" />  </div>
                                    <div>  </div>
                                    <div><input class="buttonC" type="submit" value="Split Carcass" name="Split" id="SP" />  </div>
                                    <div></div>
                                    <div><input class="buttonS" type="submit" value="Delete" name="Delete" id="DT" />  </div> 

                                </div>
                            </div>
                        </div>



                        <div> Slaughter Report : Current Month
                            <div>
                                <div>Head Count: <input type="text" name="hc" id="hc" />  </div>
                                <div>Live Weight:  <input type="text" name="lw" value=""  readonly="readonly" id="lw" />  </div> 
                                <div>Hanging Weight: <input type="text" name="hw" value=""  readonly="readonly" id="hw" />  </div>

                            </div>

                        </div>
                        <div> <div> </div></div>

                        <div> Slaughter Report  : Displayed Week
                            <div>
                                <div>Head Count: <input type="text" name="hc" id="hc" />  </div>
                                <div>Live Weight:  <input type="text" name="lw" value=""  readonly="readonly" id="lw" />  </div> 
                                <div>Hanging Weight: <input type="text" name="hw" value=""  readonly="readonly" id="hw" />  </div>
                                <div> <input class="buttonG"  type="submit" value="Display Cutomer Information" name="Cust" id="Cust"/>
                                </div>

                            </div>
                        </div>
                    </div>



                </div>  
                <div class="flex-container">
                    <div><input type='text' id='ID' name='ID'/> <div></div> </div>
                    <div> <input type="text" name="Type" value="<?php echo $q; ?> " readonly="readonly" id='tpe'/> </div>
                    <input class = buttonG type="submit" value="Previous Week" name="NxtWk" />
                    <input type="text" value="<?php echo $_SESSION['bookDate']; ?>" name="myDate" id="myDate" />

                    <input type="submit" class="buttonG" value="Next Week" name="NxtWk"/>

                    <input type="text" name="LTn" id="LTn" value="<?php echo $LTn; ?>"  />
                    <input type="text" name="LOn" id="LOn" value="<?php echo $LOn; ?>" />

                </div>


            </div>











        </form>
        <?php
    } else {
        echo "0 results";
        echo $sql;
        ?>
    </table>
    </div>
    <div class="row"><div class="column">
            <div class="flex-container">
                <div> </div>
                <div> <input type="text" name="Type" value="<?php echo $q; ?> " readonly="readonly" id='tpe'/></div>
                <input type="submit" value="Previous Week" name="NxtWk" />
                <input type="text" value="<?php echo $_SESSION['bookDate']; ?>" name="myDate" id="myDate" />

                <input type="submit" value="Next Week" name="NxtWk"/>
                <input class="buttonG" type="submit" value="Insert New Record" formaction="UpdateBeef.php?q=$Action" name="Update" id="UD" />
                NOB  <input type="text" name="NumBeef" id="NumBeef" readonly="True" value="1" />

            </div>
        </div>
    </div>
    <?php
}

$conn->close();
echo "AllDone";
//die("SQLBY");
?>
<script>
    function NOB(N) {
        document.getElementById('NumBeef').value = N;

    }

</script>

<script>
    // Change the value of Cutting Order For Database

    function setCuttingOrder() {
        if (document.getElementById('co').checked) {
            document.getElementById('ctr').value = 1;
        } else {
            //alert('Yes');
            document.getElementById('ctr').value = 0;
        }
    }

    // Change the value of Age Order For Database

    function setAge() {
        if (document.getElementById('a').checked) {
            document.getElementById('g').value = 1;
        } else {
            //alert('Yes');
            document.getElementById('g').value = 0;
        }
    }

</script>
<script>

    function NxtWk(mf) {
        alert('okHere');
        var md = new Date(document.getElementById("myDate").value);
        // document.getElementById("lw").value = md;


        var dayOfWeek = 4; //friday
        var date = new Date(md);
        var diff = date.getDay() - dayOfWeek;
        if (diff > 0) {
            date.setDate(date.getDate() + 6);
        } else if (diff < 0) {
            date.setDate(date.getDate() + ((-1) * diff))
        }
        if (mf == "ad") {
            date.setDate(date.getDate() + 7);
        } else {
            date.setDate(date.getDate() - 7);
        }
        document.getElementById("myDate").value = date.toISOString().substr(0, 10);
        document.getElementById("con").value = date.toISOString().substr(0, 10);
        var d = date.toISOString().substr(0, 10);
        document.cookie = "bookDate=" + d;
    }
</script>

<script>
    function EditWeights() {
               document.getElementById('lwt').style.visibility = 'visible';
        document.getElementById('hw').style.visibility = 'visible';
        document.getElementById('dw').style.visibility = 'visible';

        
    }

    function clearFields() {

        document.getElementById('lwt').style.visibility = 'hidden';
        document.getElementById('hw').style.visibility = 'hidden';
        document.getElementById('dw').style.visibility = 'hidden';


    }

</script>

<script>
    function NextAnimal() {

        var ltn = document.getElementById('LTn').value;

        var tp = document.getElementById('tpe').value;
        var tnt = document.getElementById('tn').value;

        if (tnt == 0) {

            document.getElementById('tn').value = ltn;
            document.getElementById('o').value = document.getElementById('LOn').value;
        }
    }


</script>
<script>


    function MyFun(j) {

        var k = document.getElementById("MyTable").rows[j.rowIndex].cells[13].innerHTML;
        document.getElementById("lw").value = k;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                var myArr = JSON.parse(this.responseText);
                document.getElementById("lw").value = myArr[10];
                document.getElementById("tn").value = myArr[11];
                document.getElementById("o").value = myArr[3];
                document.getElementById("fn").value = myArr[1];
                // if (myArry[19]>1){Alert("CuttingOrder On File:");} else {alert("No Cuttoing On On File");}
                document.getElementById("lwt").value = myArr[8];
                document.getElementById("hw").value = myArr[6];
                document.getElementById("dw").value = myArr[9];
                document.getElementById("a").value = myArr[18];
                document.getElementById("con").value = myArr[20];
                document.getElementById("br").value = myArr[21];
                document.getElementById("ow").value = myArr[19];
                document.getElementById("co").value = myArr[17];
                if (myArr[17] > 0) {
                    document.getElementById("co").checked = true;
                    document.getElementById("ctr").value = 1;
                } else {
                    document.getElementById("co").checked = false;
                    document.getElementById("ctr").value = 0;
                }
                if (myArr[18] > 0) {
                    document.getElementById("a").checked = true;
                    document.getElementById('g').value = 1;
                } else {
                    document.getElementById("a").checked = false;
                    document.getElementById('g').value = 0;
                }

                //$('.myCheckbox').prop('checked', true);
                document.getElementById("UD").value = "Update";
                document.getElementById('ID').value = myArr[0];
                document.getElementById('NumBeef').value = myArr[14];

                // alert(myArr[4]);
            }
        };
        xmlhttp.open("GET", "api.php?q=" + k, true);
        xmlhttp.send();
    }
</script>
</body>
</html>


<?php
session_start();
$_SESSION['mfn'] = "Geno";

include 'Header.php';
$q = $_REQUEST["q"];
//echo $q . " Does it Say Beef?";
//Written By Gene Buchite: Cinjerene Programming
//Netbeans IDE
//Most Info From W3Schools
//Bootstrap


include 'Conn.php';
$sql = "SELECT * FROM beef Where Type = '$q' And  DeliveryDate='2017-04-28' Order By `Order` "; // Where FullName = '$C' ";
$result = $conn->query($sql);


$myField = $_SESSION['mlw'];
// ***************** Inputs Section
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            /* Create three equal columns that floats next to each other */
            .column {
                float: left;
                width: 70%;
                padding: 3px;
            }
            .column2 {
                float: right;
                width: 25%;
                padding: 1px;
                
            }

            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            .button {
                background-color: antiquewhite

            }

            .button1 {font-size: 10px;}
            .button5 {font-size: 24px;}
            .flex-container {
                display: flex;
                flex-wrap: wrap;
                background-color: lightblue;
                width:1080px;
            }

            .flex-container > div {
                background-color: #f1f1f1;
                width: 100px;
                margin: 2px;
                text-align: center;
                line-height: 13px;
                font-size: 13px;
            }   

            .flex-container > divl {
                background-color: lightyellow;
                width: 250px;
                margin: 2px;
                text-align: center;
                line-height: 13px;
                font-size: 13px;
            } 
            .flex-container > divs {
                background-color: lightskyblue;
                width: 20px;
                margin: 2px;
                text-align: center;
                line-height: 13px;
                font-size: 13px;
            } 

        </style>


    </head> 
    <body> 

        <form action="/action_page.php"> 
            <div class="row">
                <div class="column">
                    <div class="flex-container">
                        <div> Live Weight </br>
                            <input type="text" value = "1" name=" LiveWeight" id="lw" size="4" onfocus="EditWt()" autofocus ></div>
                        <div> Tag Number </br>
                            <input  type="text" name="TagNumber" id="tn" size="4"></div>
                        <div> Order </br>
                            <input type="text" name="Order" id="o" size="4"></div>
                        <divl> Full Name </br>
                            <input type="text" name="FullName" id="fn" size="30">
                        </divl>    
                        <div> Cutting Order </br>
                            <input type="checkbox" name="CuttingOrder" id="co" size="3"></div>
                        <divl> Owner </br>
                            <input type="text" name="Owner" size="30" id ="ow" ></divl>


                    </div>

                    <div class="flex-container">
                        <divs> 
                        </divs>
                        <div> 

                            <input type="button" class="button button5" onclick="MyFun()" value="Edit Weights"></div>
                        <div> Liver Weight </br>
                            <input type="text" name="Liver Weight" id="lwt" size="4"></div>
                        <div> Hanging Weight </br>
                            <input type="text" name="Hanging Weight" id="hw" size="4">
                        </div>    
                        <div> Dressed Weight </br>
                            <input type="text" name="Dressed Weight" id="dw" size="4">
                        </div>    

                        <div> Age  </br>
                            <input type="checkbox" name="Age" id="a" size="3"></div>
                        <divl> Condition </br>
                            <input type="text" name="Condition" size="30" id ="con" ></divl>
                        <divl> Breed </br>
                            <input type="text" name="Breed" size="30" id ="Br" ></divl>


                    </div>
                </div>
                <div class="column2">

                    <div> Hello World </div>
                    <div> Hello World </div>
                    <div> Hello World </div>
                    <div> Hello World </div>
                    <div> Hello World </div>
                    <div> Hello World </div>
                    <div> Hello World </div>

                </div>
            </div>


            <div class="row">
                <div class="col-sm-1">  Live Weight</div>
                <div class="col-sm-1">Tag Number</div>
                <div class="col-sm-1">Order</div>

                <div class="col-sm-4">FullName</div>

                <div class="col-sm-1">CuttingOrder</div>


                <div class="col-sm-4">Owner</div>

            </div>
            <div class="row">
                <div class="col-sm-1"><input type="text" value = "1" name=" LiveWeight" id="lw1" size="4" onfocus="EditWt()" ></div>
                <div class="col-sm-1"><input onfocus="EditWt()" type="text" name="TagNumber"id="tn1" size="4"></div>
                <div class="col-sm-1"><input type="text" name="Order" id="o1" size="4"></div>
                <div class="col-sm-4"><input type="text" name="FullName" id="fn1" size="65"></div>
                <div class="col-sm-1"><input type="checkbox" name="CuttingOrder" id="co1" size="3"></div>

                <div class="col-sm-4"><input type="text" name="Owner" size="65" id ="ow1" ></div>

            </div>
            <div class="row">
                <div class="col-sm-1"> </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-1">LiverWeight</div> 
                <div class="col-sm-1">Hanging Weight</div>
                <div class="col-sm-1">Dressed Weight</div>
                <div class="col-sm-1">Age</div>
                <div class="col-sm-3">Condition</div>
                <div class="col-sm-3">Breed</div>

            </div>
            <div class="row">
                <div class="col-sm-1"> </div>

                <div class="col-sm-1"><input type="button" onclick="MyFun()" value="Edit Weights!"></div> 
                <div class="col-sm-1"><input type="text" name="LiverWeight" id="lwt"  size="4"></div>
                <div class="col-sm-1"><input type="text" name="HangingWt" id="hw" size="4"></div>
                <div class="col-sm-1"><input type="text" name="DressedWt" id="dw" size="4"></div>
                <div class="col-sm-1"><input type="checkbox"  name="Age"  id="a" size="4"></div>
                <div class="col-sm-3"><input type="text" name="Condition" onkeyup="showHint(this.value)" id="con" size="40"></div>
                <div class="col-sm-3"><input type="text" name=">Breed" id="br" size="65"></div>


            </div>
        </form>



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
                        if (myArr[17] > 0) {
                            document.getElementById("co").checked = true;
                        } else {
                            document.getElementById("a").checked = false;
                        }


                        //$('.myCheckbox').prop('checked', true);

                        // alert(myArr[4]);
                    }
                };
                xmlhttp.open("GET", "api.php?q=" + k, true);
                xmlhttp.send();

            }
        </script>


        <table class="striped" id="MyTable">
            <tr>
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
                <td>Condit</td>
                <td>Breed</td>
                <td>ID</td>
                <td>DeliveryDate</td>

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
                    echo "<tr bgcolor=$color onclick='MyFun(this)'>";
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
                    echo "<td>" . $row[Counter] . "</td>";
                    echo "<td>" . ": :" . $t . "</td>";

                    echo "</tr>";
                    $t += $row["Number Of Beef"];
                }
                ?>
            </table>

            <?php
        } else {
            echo "0 results";
            session_destroy();
        }

        $conn->close();
//die("SQLBY");
        ?>

    </body>
</html>


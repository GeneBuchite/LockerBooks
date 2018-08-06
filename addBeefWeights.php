<?php
session_start();

//Written By Gene Buchite: Cinjerene Programming
//Netbeans IDE
//Most Info From W3Schools
//Bootstrap

$q = $_REQUEST["q"];
include "Header.php";
include 'Conn.php';
// Select Last Date Entered
$sql = "Select DeliveryDate,Counter,Type FROM beef WHERE Type = '$q' Order By DeliveryDate DESC LIMIT 1 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $dd = $row['DeliveryDate'];

        //$LTn = $row["Tag Number"];
    }
} else {
    echo "0 results " . $sql;
    die("?");
}

$sql = "SELECT * FROM beef Where Type = '$q' And  DeliveryDate='$dd' Order By `Order` "; // Where FullName = '$C' ";

$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="tables.css">

    </head>
    <body>
        <p> Southwest City Processing Add New <?php echo " " . $q . " "; ?> Weights</p>
        <form action="" method="post" >
            <div class="row">
                <div class="column">
                    <div class="flex-container">

                    </div>
                    <div id="overflowTest">
                        <table class="flex-container" id="MyTable">
                            <tr style="color:black">

                                <td>LiveWeight</td>
                                <td>Order</td>
                                <td>Liver</td>
                                <td>Hanging Weight</td>
                                <td>Dressed Weight</td>

                                <td>N.O.B.</td>
                                <td>Counter</td>


                            </tr>
                            <?php
                            if ($result->num_rows > 0) {
                                // echo 'This Is Working /n';
                                // output data of each row

                                $t = .0;
                                while ($row = $result->fetch_assoc()) {



                                    $t += 1;


                                    $thisNumber = $row['Order'];
                                    //number_format(110000,2);
                                    //echo 'NUmbder Of Beef IS:' . number_format($row["Number Of Beef"], 1);
                                    if ($lastNumber == $thisNumber) {
                                        $lastNumber = $row['Order'];
                                    } else {
                                        echo $lastNumber . "=LastNumber ThisdNumber= " . $row["Order"];

                                        echo "<tr onfocus='MyFun(this)' style='color:black;' onblur='erase()' >";

                                        echo "<td>" . $row["Live Weight"] . "</td>";
                                        echo "<td>" . $row["Order"] . "</td>";
                                        echo "<td contenteditable='true'>$t</td>";
                                        echo "<td contenteditable='true'>$t</td>";
                                        echo "<td id='Dr'>" . $row["Dressed Weight"] . "</td>";
                                        echo "<td>" . $row["Number Of Beef"] . "</td>";
                                        echo "<td>" . $row["Counter"] . "</td>";

                                        echo "</tr>";

                                        $lastNumber = $row['Order'];
                                    }
                                }
                            } else {
                                echo 'Screwed';
                            }
                            ?>
                        </table>


                    </div>    
                </div> 


            </div>
            <div>
                <input type="text" value="Hello" onclick='MyFun()' id='Num' />

            </div>  
            <script>
                function erase() {
                    alert('WOW');

                }

                function MyFun() {
                    var rowCount = document.getElementById('MyTable').rows.length;
                    for (i = 1; i < rowCount; i++) {
                        var j = i;
                        var l = 1.0;

                        l = document.getElementById("MyTable").rows[j].cells[2].innerHTML;
                        var h = 1.0;
                        h = document.getElementById("MyTable").rows[j].cells[3].innerHTML;
                        var d = Number(l) + Number(h);

                        document.getElementById("Num").value = d;
                        // alert(document.getElementById("Num").value);
                        document.getElementById("MyTable").rows[j].cells[4].innerHTML = d;
                        document.getElementById("Liver").value = l;
                        document.getElementById("Hang").value = h;
                        document.getElementById("Dress").value = d;
                    }


                    var j = 1;
                    //alert(j);
                    var l = document.getElementById("MyTable").rows[j].cells[2].innerHTML;
                    var h = document.getElementById("MyTable").rows[j].cells[3].innerHTML;
                    document.getElementById("Num").value = l;


                }
                function updateRecord() {
                    alert("Learn how to submit a form using Java Script");
                }

            </script>


        </form>
        <form>

            <input type='text' value='Liver' id='Liver' name='Liver' />
            <input type="text" value="Hang" id="Hang" name="Hang"/>

            <input type="text" name="Dres" value="Dres" id="Dress" size="24" onchange="updateRecord()" />   
        </form>
    </body>
</html>





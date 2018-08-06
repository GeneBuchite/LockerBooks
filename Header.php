<?php
session_start();

//Written By Gene Buchite: Cinjerene Programming
//Netbeans IDE
//Most Info From W3Schools
//Bootstrap
$_SESSION['bookDate'] = "{NULL}";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SWCProcessing Book System</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            ul {
                list-style-type: none;
                margin: 5px;
                padding: 0;

                background-color: lightblue;
            }

            <?php
//  table, th, td {
//border: 2px solid black;
// padding:8px;
// }
            ?>

        </style>




    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">SWC Processing</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="Index.php">Home</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Pickup <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Meat</a></li>
                        <li><a href="#">Hides</a></li>
                        <li><a href="#">Other</a></li>
                    </ul>

                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">AddNew <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="Beef.php?q=Beef">Beef</a></li>
                        <li><a href="Beef.php?q=Pork">Pork</a></li>
                        <li><a href="#">Counter Sales</a></li>
                        <li><a href="aBW.php?q=Beef">Add Beef Weights</a></li>
                        <li><a href="addBeefWeights.php?q=Pork">Add Pork Weights</a></li>
                    </ul>

                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Edit <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="Error.php">Breed</a></li>
                        <li><a href="Error.php">Citys</a></li>
                        <li><a href="Error.php">Condition</a></li>
                    </ul>

                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Sausages <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="Beef.php">Add Order</a></li>
                        <li><a href="#">Batch</a></li>
                        <li><a href="#">Tools</a></li>
                        <ul>
                            <li><a href="#">Create New Type</a></li>
                            <li><a href="Error.php">EditType</a></li>


                        </ul>

                    </ul>

                </li>

                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
                <li><a href="#">Kill Date: <input type="date" name = "dte" id="myDateG" value=""></a></li>
                <li><input type="button" value="SetDate" name="SetTodaysDate" onclick="INitDate()" /></li>

            </ul>

        </div>
    </nav>


    <script>
        //onload=INitDate;
        function INitDate() {
           //alert(document.getElementById("myDate").value);

            var md = new Date().toISOString().substr(0, 10);
            // document.getElementById("myDate").value = md;
            
            //*************** Set to nearest Friday!!! ******
            var dayOfWeek = 5;//friday
            var date = new Date();
            var diff = date.getDay() - dayOfWeek;
            if (diff > 0) {
                date.setDate(date.getDate() + 6);
            } else if (diff < 0) {
                date.setDate(date.getDate() + ((-1) * diff));
            }
            document.getElementById("myDateG").value = date.toISOString().substr(0, 10);
            var d = date.toISOString().substr(0, 10);
            document.cookie = "bookDate=" + d;

        }

        function setDate() {
             alert('OKI');
            var date = new Date(document.getElementById("myDateG").value);
            var d = date.toISOString().substr(0, 10);
            document.cookie = "bookDate=" + d;
            // document.getElementById("myDate").value = "1970-12-12";
        }
        function sD() {

            alert($_COOKIE['bookDate']);
            if (empty($_COOKIE['bookDate'])) {
                alert('Good');
            } else
            {
                alert('BaD');
            }
        }
    
    </script>



</html>

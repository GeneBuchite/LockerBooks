<?php
session_start();
//session_destroy();

$_SESSION['ID'] = "Empty";

$_SESSION['Identifier'] = session_id();
include 'Header.php';

?>
<!DOCTYPE html>
<?php
if (isset($_POST['Customers'])) {


    $b = $_POST['browser'];
    echo $_POST['browser'];
    echo"OK";
    //$_SESSION = array();   // Resets The Session Variables
    echo $b . "Was Printed";
    $_SESSION['CustomerName'] = $b;


    echo "<script> location='Customers.php'</script>";
}
if (isset($_POST['BeefBook'])) {
    echo'BeefSeledted';
}
if (isset($_POST['PorkBook'])) {
    echo "Pork";
}
?>

<!DOCTYPE html>
<html lang="en">
   
    <body>
        
        <form method="post" action="" >
            <div class="container">
                <h2>Southwest City Processing   </h2>
                <p>...By Cinjernene Programming</p>

               
                <input class="form-control" list="browsers" name="browser">
                <datalist id="browsers">
                    <?php
                    include 'Conn.php';



//$sql = "SELECT Id, Name FROM Customers";
                    $sql = "SELECT FullName FROM Customers Order By FullName";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            //  echo "id: " . $row["Id"]. " - Name: " . $row["Name"]. "<br>";
                            //  echo "id: " . $row["ID"]. " - Name: " . $row["FullName"]. "<br>";
                            //   echo "The time is " . date("h:i:sa");
                            //echo "The time is " . date("h:i:sa");
                            ?>


                            <option value="<?php echo $row['FullName']; ?>">




                                <?php
                            } //End While
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
//echo "The time is " . date("h:i:sa");
                        ?>
                </datalist>
                
                <input type="submit" name='Customers' value ='Customer Form'> 
                <input type="submit" name='PorkBook' value ='PorkBook'>
                <input type="submit" name='BeefBook' value ='BeefBook'>

                <p><strong>Note:</strong> WOW You CAn't Use Safari : The datalist tag is not supported in Internet Explorer 9 and earlier versions, or in Safari.</p>
        </form>
    </div>
</body>
</html>

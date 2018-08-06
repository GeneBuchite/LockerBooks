<?php

session_start();



$_SESSION['Identifier'] = session_id();

?>

<html>

<head>

        

 <title>Login</title>



</head>

<body>



<?php



if (isset($_POST['create'])){

    if (empty($_POST['txtuname'])) {

        die ("You must Enter A User NAme");

    }

    if (empty($_POST['txtpwd'])) {

        die ("You must Enter A Password");

    }

    if (empty($_POST['Cpassword'])) {

        die ("You must Enter Confirmation Password");

    }

    if ($_POST['txtpwd'] <> $_POST['Cpassword']) {

      die ("Passwords Must Match!");



    }

       $_SESSION = array();   // Resets The Session Variables

       $_SESSION['username'] = $_POST['txtuname'];

       $_SESSION['password'] = $_POST['txtpwd'];

    include('LoginFunctions.php');

 

 if ($_SESSION['Login'] == "Name USed") {



   

   }

  if ($_SESSION['Login'] == "FAILED") {

      // Create User


 $con=mysqli_connect("sql5c45a.carrierzone.com","swcprocess265704","1Cindy!Gene","swcpro_swcprocessing_com");

      if (!$con) { die('Could not connect: ' . mysqli_error()); }

   $UName = $_SESSION['username'];

    $Password = $_SESSION['password'];

    $sql="INSERT INTO Users(UName, Password, Info) VALUES ('$UName','$Password','0')"; 

    if (!mysqli_query($sql,$con))

    {

       die('Error: ' . mysqli_error());

    }



    mysqli_close($con);

echo "User Updated PLease Login!";

 include ('LoginFunctions.php');

   if ($_SESSION['Login'] == "OK") {

        echo "<script> location='Contact.php'</script>";

   }  else {

       die ($_SESSION['Login'] . " is THe SESSION LOgin <br/>");

       echo "<script> location='http://www.swcprocessing.com'</script>";

   }



// End CreateUser 



    }

}   // End Create Function

   //forgotten Passwortd

    else if(isset($_POST['Forgot'])){   //Email UserINfo!
    echo "<script> location='Forgotten.php'</script>";
}           // End forgotten Passwortd

else if(isset($_POST['sub'])){   //Attempt Login



   //echo "PLace the Login Code Here!";

     $_SESSION = array();   // Resets The Session Variables

       $_SESSION['username'] = $_POST['txtuname'];



   $_SESSION['Info'] = "Ralph";

if (!isset($_POST['txtpwd'])){

  die ("You Must Enter A Password <br/> use your browsers back button and try again ");

}

   $_SESSION['password'] = $_POST['txtpwd'];

   //echo $_SESSION['username'] . " Did I Print Thne Username <br/>";

   //echo $_SESSION['password'] . " Was Sent to The Functino <br/> ";

   include('LoginFunctions.php');

  // echo "I Am Still Trying<br/>"; 

  // echo $_SESSION['Login'];



   if ($_SESSION['Login'] == "OK")  { // Login Okay

      // echo "<script> location='EmployeesHome.php'</script>";

       echo "Ok Here I Am";

      //echo "Login Was Set to" . $_SESSION['Login'] . "<br/>";

      echo "Info Was Set to " . $_SESSION['Info'];

      if ($_SESSION['Info'] > "0") {

           echo "Great! Go To Employees Login";

      

           echo "<script> location='EmployeesHome.php'</script>";

      }

      else {

           echo "<script> location='Contact.php'</script>";  



         }



   }  //End Login 

   else    //Login Failed

   {

       echo "<h1>Login INcorrect Try Again </h1>";

   }   //End Login Failed





}     // End Attempt Login

else {   //Login 

echo "<h1> Please Login </h1>";

}        //NOt Loged In



?>

<table width="200" height="150" bgcolor="lightblue" border="1" align="center">

<tr><td style="font-size:25;color:red" align="center" colspan="2">Login Form </td></tr>

<form method="post" action="">

<tr><td align="right" width="100">

Username:</td><td><input type="text" name="txtuname" </td></tr>

<tr><td align="right" width="100">

Password:</td><td><input type="password" name="txtpwd" </td></tr>

<tr><td align="right" width="100">

<input type="submit" value="login" name="sub" </td></tr>

<tr><td align="right" width="100">

Confirm Password:</td><td><input type="password" name="Cpassword" </td></tr>

<tr><td align="right" width="100">

<input type="submit" value="Create new Password" name="create" </td>
<td> <input type="submit" value="ForgottenPAssword/UserName" name="Forgot"

</td></tr>

</form>

</table>



</body>

</html>








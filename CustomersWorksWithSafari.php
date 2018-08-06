<?php
session_start();

include 'SQLCustByName.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//echo" I Havent Finished This Yet But is Comming Soon\n";
//echo $_SESSION['CustomerName'];

$_SESSION['Identifier'] = session_id();
$C = $_SESSION['CustomerName'];

?>

<html>

<head>

        

 <title>Customer Information </title>



</head>

<body>



<table width="400" height="150" bgcolor="lightblue" border="1" align="center">

<tr><td style="font-size:36;color:red" align="center" colspan="2"><?php echo $C; ?> </td></tr>

<form method="post" action="">

<tr><td align="right" width="100">

Last Name:</td><td><input  { font-size: 48px; } type="text" name="LName" size="45" value = '{<?php echo $_SESSION['LastName']; ?>}' </td></tr>

<tr><td align="right" width="100">

FirstName:</td><td><input type="text" name="FName" size="45" value = <?php echo $_SESSION['FirstName']; ?>   </td></tr>

<tr><td align="right" width="100">

Address:</td><td><input { font-size: 36px; } type="text" name="txtaddress" size="45"  value = <?php echo $_SESSION['Address']; ?>   </td></tr>

<tr><td align="right" width="100">

City:</td><td><input { font-size: 36px; } type="text" name="txtaddress" size="45"  value = <?php echo $_SESSION['City']; ?>   </td></tr>

<tr><td align="right" width="100">

<input type="submit" value="login" name="sub" </td></tr>

<tr><td align="right" width="100">

Confirm Password:</td><td><input type="password" name="Cpassword" </td></tr>

<tr><td align="right" width="100">

<input type="submit" value="Create new Password" name="create" </td>
<td> <input type="submit" value="ForgottenPAssword/UserName" name="Forgot"

</td></tr>
<input {font-size = 48px;} type="text" name="bigon">
</form>
<?php
print_r($_SESSION);
?>
</table>

<?php echo $_SESSION['Address']; ?>

</body>

</html>








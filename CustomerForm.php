<?php
session_start();
//    INsdert,Delete,Updatge Decision
if (isset($_POST['Updte'])) {

echo'Put Update Code Here';

} Else
echo 'Update Code Not Here Yet';


include 'SQLCustByName';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container">
            <h2>Customer Form</h2>
            <p><?php echo $_SESSION['ID'] . ": " . $_SESSION['FullName']; ?> </p>

            <form class="form-horizontal" method="post" action="">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="inputdefault">LastName</label>
                    <div class="col-sm-10">
                        <input value="<?php echo $_SESSION['LastName']; ?>"  class="form-control" id="LName" type="text"  >
                    </div>

                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="inputlg">FirstName</label>
                    <div class="col-sm-10">
                        <input value="<?php echo $_SESSION['FirstName']; ?>"  class="form-control" id="FName" type="text"  >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="Address">Address</label>
                    <div class="col-sm-10">
                        <input value="<?php echo $_SESSION['Address']; ?>"  class="form-control" id="MyAddress" type="text"  >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="City">City</label>
                    <div class="col-sm-10">
                        <input value="<?php echo $_SESSION['City']; ?>"  class="form-control" id="City" type="text"  >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="State">State</label>
                    <div class="col-sm-10">
                        <input value="<?php echo $_SESSION['State']; ?>"  class="form-control" id="State" type="text"  >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="Zip">Zip</label>
                    <div class="col-sm-10">
                        <input value="<?php echo $_SESSION['Zip']; ?>"  class="form-control" id="Zip" type="text"  >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="Phone">Phone Number</label>
                    <div class="col-sm-10">
                        <input value="<?php echo $_SESSION['Phone']; ?>"  class="form-control" id="Phone" type="text"  >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="CellPhone">CellPhone</label>
                    <div class="col-sm-10">
                        <input value="<?php echo $_SESSION['CellPh']; ?>"  class="form-control" id="CellPh" type="text"  >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="WorkPhone">WorkPhone</label>
                    <div class="col-sm-10">
                        <input value="<?php echo $_SESSION['WorkPhone']; ?>"  class="form-control" id="WorkPhone" type="text"  >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="E-Mail">Email</label>
                    <div class="col-sm-10">
                        <input value="<?php echo $_SESSION['email']; ?>"  class="form-control" id="email" type="text"  >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="Notes">Notes</label>
                    <div class="col-sm-10">

                        <textarea class="form-control" rows=5 id="Notes"> <?php echo $_SESSION['Notes']; ?> </textarea>
                    </div>
                </div>
                 <input type="submit" name='Updte' value ='Updte'>
                <button type="button" class="btn btn-primary btn-lg btn-block" value="Updte">Update</button>
                <button type="button" class="btn btn-default btn-lg btn-block" value="Insrt">Insert</button>
                <button type="button" class="btn btn-default btn-lg btn-block" value="Dle">Delete</button>

            </form>


        </div>

    </body>
</html>

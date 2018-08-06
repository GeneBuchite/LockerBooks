<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <?php
        include 'SQLCustByName.php';
        echo $_SESSION['FullName'];
        ?>


    </head>
    <body>

        <div class="container">
            <h2>Customer Form</h2>
            <p><?php echo $_SESSION['ID'] .": ". $_SESSION['FullName']; ?></p>
            <form>
                <div class="form-group">
                    <label for="inputdefault">LastName</label>
                    <input value="<?php echo $_SESSION['LastName']; ?>"  class="form-control" id="LName" type="text"  >
                </div>
                <div class="form-group">
                    <label for="inputlg">FirstName</label>
                     <input value="<?php echo $_SESSION['FirstName']; ?>"  class="form-control" id="FName" type="text"  >
                </div>
                <div class="form-group">
                    <label for="Address">Address</label>
                     <input value="<?php echo $_SESSION['Address']; ?>"  class="form-control" id="MyAddress" type="text"  >
                </div>
                <div class="form-group">
                    <label for="sel1">Default select list</label>
                    <select class="form-control" id="sel1">
                        <option><?php echo $_SESSION['FullName']; ?></option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="sel2">input-lg</label>
                    <select class="form-control input-lg" id="sel2">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="sel3">input-sm</label>
                    <select class="form-control input-sm" id="sel3">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="NewTable">input-lg</label>
                    <select class="form-control input-lg" id="sel4">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
                <div class="wrap">
                    <input name="test" type="text" class="form-control" placeholder="Type here" size="4" maxlength="4">
                    <div>



                        .wrap .form-control {
                        background-color: #fff;
                        background-image: none;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
                        color: #555;
                        display: block;
                        font-size: 14px;
                        height: 34px;
                        line-height: 1.42857;
                        padding: 6px 12px;
                        /*width: 100%;*/ remove this
                        }
                        </form>
                    </div>

                    </body>
                    </html>

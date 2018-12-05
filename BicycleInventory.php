<?php
$Host = "localhost"; 
$UserName = "ShadowBikes";
$Password = "Shadow#Bikes.";
$DBName = "Shadow_Bikes";
$DBConnect = mysqli_connect ( "$Host", "$UserName", "$Password", "$DBName" ) or die ( '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Connection error: ' . $DBConnect -> connect_error . '.<br>Please try again.</h4></div></div></div>' );

if ( mysqli_connect_errno ())
{
    echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Connection error: ' . $DBConnect -> connect_error . '.<br>Please try again.</h4></div></div></div>';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bicycle Inventory</title>
        <meta name="author" content="Leonard Box">
       <meta name="description" content="">
        <link href="css/main.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.typekit.net/hia7juf.css">
    </head>
    <body>
        <?php require('header.php'); ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Bicycle</h1>
                    <h3>Current Inventory</h3>
                </div>
            </div>
          <form action="CurrentInventoryTargetPage.php" method="post" name="Current Inventory">
                <div class="form-group">
                    <hr>
                    <?php
                    $TableName = "Halloween";
                    $Column = "Description";
                    $SQLString = "SELECT DISTINCT $Column FROM $TableName";
                    $QueryResult = mysqli_query ( $DBConnect, $SQLString );
                    while ( $Row = mysqli_fetch_array ( $QueryResult ))
                    {
                        $ItemName = $Row [ $Column ];
                    ?>
                    <input type="radio" value="<?php echo $ItemName; ?>" name="Description">
                    <label>&nbsp;&nbsp;<?php echo $ItemName; ?></label>
                    <hr>
                    <?php
                    } 
                    ?>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p><a href="InventoryManagement.php">Update Inventory</a></p>
                </div>
            </div>        
        </div>
        <?php require('footer.php'); ?>
		<script src="js/custom-1.0.0.js" type="text/javascript"></script>
		<script src="js/jquery-3.3.1.js" type="text/javascript"></script>
    	<script src="vendor/bootstrap-4.1.3/js/popper.min.js" type="text/javascript"></script>
    	<script src="vendor/bootstrap-4.1.3/js/bootstrap-4.0.0.js" type="text/javascript"></script>
	</body>
</html>
<?php
    mysqli_close ( $DBConnect );
?>
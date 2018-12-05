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
        <title>Cannondale Inventory</title>
        <meta name="author" content="Leonard Box">
       <meta name="description" content="">
        <link href="css/main.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.typekit.net/hia7juf.css">
    </head>
    <body>
        <?php require('header.php'); ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Cannondale</h1>
                    <h3>Inventory Management</h3>
                </div>
            </div>
			<div class="row">
				<div class="col-12">
					<form action="" method="post" name="CannondalesForSale">
                		<div class="form-group">
                		    <div class="row">
                		        <div class="col-1">
                		            <h6>ID</h6>
                		        </div>								
                		        <div class="col-2">
                		            <h6>Image</h6>
                		        </div>						
                		        <div class="col-1">
                		            <h6>Type</h6>
                		        </div>
                		        <div class="col-1">
                		            <h6>Model</h6>
                		        </div>
                		        <div class="col-1">
                		            <h6>Version</h6>
                		        </div>
                		        <div class="col-1">
                		            <h6>Frame Size</h6>
                		        </div>						
                		        <div class="col-1">
                		            <h6>Wheel Size</h6>
                		        </div>
                		        <div class="col-2">
                		            <h6>Description</h6>
                		        </div>	
                		        <div class="col-1">
                		            <h6>Price</h6>
                		        </div>
                		        <div class="col-1">
                		            <h6>Quantity</h6>
                		        </div>						
                		    </div>
                    		<?php
								$TableName = "Cannondale_Inventory";
								$Item = "Bicycle_Type";
								$Column = "Bicycle_Type";
								$SQLString = "SELECT * FROM $TableName ORDER BY 'Retail_Price' ASC, 'Bicycle_Type' ASC, 'Model_Name' ASC, 'Model_Version' ASC";
                    			$QueryResult = mysqli_query ( $DBConnect, $SQLString );
                    			while ( $Row = mysqli_fetch_assoc ( $QueryResult ))
                    			{
									$ItemID = $Row [ 'ID' ];
                        			$ItemImage = $Row [ 'Image' ];
									$ItemType = $Row [ 'Bicycle_Type' ];
                        			$ItemModel = $Row [ 'Model_Name' ];
                        			$ItemVersion = $Row [ 'Model_Version' ];
                        			$ItemFrameSize = $Row [ 'Frame_Size' ];
									$ItemWheelSize = $Row [ 'Wheel_Size' ];
									$ItemDescription = $Row [ 'Description' ];
									$ItemPrice = $Row [ 'Retail_Price' ];
									$ItemQuantity = $Row [ 'QTY_In_Stock' ];
									
									echo "<div class=\"row\"><div class=\"col-1\"><p style=\"font-size: .75em !important; text-align: center;\">$ItemID</p></div><div class=\"col-2\"><img src=\"$ItemImage\" alt=\"$ItemModel\">$ItemId</p></div><div class=\"col-1\"><p style=\"font-size: .75em !important; text-align: center;\">$ItemType</p></div><div class=\"col-1\"><p style=\"font-size: .75em !important; text-align: center;\">$ItemVersion</p></div><div class=\"col-1\"><p style=\"font-size: .75em !important; text-align: center;\">$ItemFrameSize</p></div><div class=\"col-1\"><p style=\"font-size: .75em !important; text-align: center;\">$ItemWheelSize</p></div><div class=\"col-2\"><p style=\"font-size: .75em !important; text-align: center;\">$ItemDescription</p></div><div class=\"col-1\"><p style=\"font-size: .75em !important; text-align: center;\">$ItemPrice</p></div><div class=\"col-1\"><p style=\"font-size: .75em !important; text-align: center;\">$ItemQuantity</p></div></div>";
								}
							?>
						</div>
					</form>
				</div>
			</div>
            <div class="row">
				<hr>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <form action="AddCannondaleInventory.php" method="post" name="AddInventory">
                        <hr>
                        <label for="AddInventory">Add Inventory</label>
                        <br>
                        <label style="font-size: .75em; color: #ff0000;" for="ItemID">Add Restocked Items</label>
                        <hr>
                        <div class="form-group">
                            <label style="font-size: .75em;" for="ItemID">Item ID</label>
                            <input id="ItemID" name="ItemID" type="number" min="1" max="12">
                        </div>                        
                        <div class="form-group">
                            <label style="font-size: .75em;" for="ItemQuantity">Item Quantity</label>
                            <input id="ItemQty" name="ItemQty" type="number" min="0" max="99">
                        </div>
                      <input class="btn btn-primary" style="font-size: .75em;" type="submit" name="Submit" value="Add Inventory">
                    </form>
                </div>
                <div class="col-4">				
                    <form action="UpdateCannondaleInventory.php" method="post" name="UpdateInventory">
                        <hr>
                        <label for="UpdateInventory">Update Inventory</label>
                        <br>
                        <label style="font-size: .75em; color: #ff0000;" for="ItemID">Add New Iventory</label>
                        <hr>
                        <div class="form-group">
                            <label style="font-size: .75em;" for="Image">Image</label>
							<input id="Image" name="Image" type="file">
                        </div>  						
                        <div class="form-group">
                            <label style="font-size: .75em;" for="Type">Type</label>
                            <input id="Type" name="Type" type="text" maxlength="99" size="8">
                        </div>                             
                        <div class="form-group">
                            <label style="font-size: .75em;" for="Model">Model</label>
                            <input id="Model" name="Model" type="text" maxlength="99" size="8">
                        </div>
                        <div class="form-group">
                            <label style="font-size: .75em;" for="Version">Version</label>
                            <input id="Version" name="Version" type="text" maxlength="99" size="8">
                        </div>						
                        <div class="form-group">
                          <label style="font-size: .75em;" for="Description">Item Description</label>
                            <input id="Description" name="Description" type="text" maxlength="99" size="8">
                        </div>   
                        <div class="form-group">
                          <label style="font-size: .75em;" for="Frame_Size">Frame Size</label>
                            <input id="Frame_Size" name="Frame_Size" type="text" maxlength="99" size="8">
                        </div>
                        <div class="form-group">
                          <label style="font-size: .75em;" for="Wheel_Size">Wheel Size</label>
                            <input id="Wheel_Size" name="Wheel_Size" type="text" maxlength="99" size="8">
                        </div>	
                        <div class="form-group">
                          <label style="font-size: .75em;" for="Price">Retail Price</label>
                            <input id="Price" name="Price" type="text" maxlength="99" size="8">
                        </div>						
                        <div class="form-group">
                            <label style="font-size: .75em;" for="Quantity">Quantity</label>
                            <input id="QTY" name="QTY" type="number" min="0" max="99">
                        </div>						
                      <input class="btn btn-primary" style="font-size: .75em;" type="submit" name="Submit" value="Update Inventory">
                    </form>
                </div>
                <div class="col-4">
                    <form action="RemoveCannondaleInventory.php" method="post" name="RemoveInventory">
                        <hr>
                        <label for="RemoveInventory">Remove Inventory</label>
                        <br>
                        <label style="font-size: .75em; color: #ff0000;" for="ItemID">Remove Sold Items</label>
                        <hr>
                        <div class="form-group">
                            <label style="font-size: .75em;" for="ItemID">Item ID</label>
                            <input id="ItemID" name="ItemID" type="number" min="1" max="12">
                        </div>                             
                        <div class="form-group">
                            <label style="font-size: .75em;" for="ItemQuantity">Item Quantity</label>
                            <input id="ItemQty" name="ItemQty" type="number" min="0" max="99">
                        </div>
                        <input class="btn btn-primary" style="font-size: .75em;" type="submit" name="Submit" value="Remove Inventory">
                    </form>
                </div>
            </div>           
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p><a href="BicycleInventory.php">Select a different item.</a></p>
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
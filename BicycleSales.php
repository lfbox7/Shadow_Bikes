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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Final Project</title>
        <meta name="author" content="Leonard Box">
        <meta name="description" content="">
        <link href="css/main.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.typekit.net/hia7juf.css">
	</head>
	<body>
	<?php require('header.php'); ?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-8">
				  <nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="#">Home</a></li>
					    <li class="breadcrumb-item"><a href="#">Road</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Cannondale</li>
				    </ol>
				  </nav>
                </div>
				<div class="col-2">
					<!-- php category echoed here -->
				</div>
			</div>
			<div class="row"></div>
		</div>
		<div class="container-fluid">
			<div class="row">
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
									
									echo 
				"<div class=\"card text-center col-md-4 card-sales\">
					<div class=\"card-header\">$ItemModel</div>
				    <div class=\"card-body\">
						<h5 class=\"card-title\">$ItemVersion</h5>
                        <img class=\"img-fluid card-image\" src=$ItemImage alt=$ItemModel>
						<p class=\"card-text\">$ItemDescription</p>
                        <div class=\"row\">
                        <table class=\"card-sales col-10 offset-1\"><tr><th>Wheel Size</th><th>Frame Size</th><th>Quantity In-Stock</th></tr>
                        <tr><td>$ItemWheelSize</td><td>$ItemFrameSize</td><td>$ItemQuantity</td></tr></table></div>
					</div>
					<div class=\"card-footer text-muted\">$ItemPrice</div>
				</div>";
								}
							?>				
			</div>
		</div>
        <?php require('footer.php'); ?>
		<script src="js/custom-1.0.0.js" type="text/javascript"></script>
		<script src="js/jquery-3.3.1.js" type="text/javascript"></script>
    	<script src="vendor/bootstrap-4.1.3/js/popper.min.js" type="text/javascript"></script>
    	<script src="vendor/bootstrap-4.1.3/js/bootstrap-4.0.0.js" type="text/javascript"></script>
	</body>
</html>
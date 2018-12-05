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

$ItemImage = $_POST [ 'Image' ];
$ItemType = $_POST [ 'Type' ];
$ItemModel = $_POST [ 'Model' ];
$ItemVersion = $_POST [ 'Version' ];
$ItemFrameSize = $_POST [ 'Frame_Size' ];
$ItemWheelSize = $_POST [ 'Wheel_Size' ];
$ItemDescription = $_POST [ 'Description' ];
$ItemPrice = $_POST [ 'Price' ];
$ItemQuantity = $_POST [ 'QTY' ];
$ItemImage = stripslashes ( $ItemImage );
$ItemType = stripslashes ( $ItemType );
$ItemModel = stripslashes ( $ItemModel );
$ItemVersion = stripslashes ( $ItemVersion );
$ItemFrameSize = stripslashes ( $ItemFrameSize );
$ItemWheelSize = stripslashes ( $ItemWheelSize );
$ItemDescription = stripslashes ( $ItemDescription );
$ItemPrice = stripslashes ( $ItemPrice );
$ItemQuantity = stripslashes ( $ItemQuantity );
$ItemImage = mysqli_real_escape_string ( $DBConnect, $ItemImage );
$ItemType = mysqli_real_escape_string ( $DBConnect, $ItemType );
$ItemModel = mysqli_real_escape_string ( $DBConnect, $ItemModel );
$ItemVersion = mysqli_real_escape_string ( $DBConnect, $ItemVersion );
$ItemFrameSize = mysqli_real_escape_string ( $DBConnect, $ItemFrameSize );
$ItemWheelSize = mysqli_real_escape_string ( $DBConnect, $ItemWheelSize );
$ItemDescription = mysqli_real_escape_string ( $DBConnect, $ItemDescription );
$ItemPrice = mysqli_real_escape_string ( $DBConnect, $ItemPrice );
$ItemQuantity = mysqli_real_escape_string ( $DBConnect, $ItemQuantity );
$ItemQuantity = ( int ) $ItemQuantity;

$TableName = "Cannondale_Inventory";
$SQLString="INSERT INTO $TableName ( Bicycle_Type, Model_Name, Model_Version, Wheel_Size, Frame_Size, Description, Image, QTY_In_Stock, Retail_Price ) VALUES ( '$ItemType', '$ItemModel', '$ItemVersion', '$ItemWheelSize', '$ItemFrameSize', '$ItemDescription', '$ItemImage', '$ItemQuantity', '$ItemPrice' )";
if ( mysqli_query ( $DBConnect, $SQLString )) 
{
    echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">New record created successfully.</h4></div></div></div>';
    header ( "location: CannondaleInventory.php" );
} else {
    echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Error: ' . $SQLString . '<br>' . mysqli_error ( $DBConnect ) . '.</h4></div></div></div>';
}

mysqli_close ( $DBConnect );
?>
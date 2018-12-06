<?php
$DBConnect = mysqli_connect ( "localhost", "root", "" );
if ( $DBConnect === false ) 
    die ( '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Connection error: ' . $DBConnect -> connect_error . '.<br>Please try again.</h4></div></div></div>');

$DBName = "CREATE DATABASE Shadow_Bikes";
if ( mysqli_query ( $DBConnect, $DBName ))
    echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Successfully ' . $DBName . '.</h4></div></div></div>';

$Host = "localhost"; 
$UserName = "ShadowBikes";
$Password = "Shadow#Bikes.";
$DBName = "Shadow_Bikes";
$AccountName = "CREATE USER '$UserName'@'$Host' IDENTIFIED BY '$Password';";
$QueryResult = mysqli_query ( $DBConnect, $AccountName );
$SQLString = "SELECT User FROM mysql.user WHERE User='$UserName'";
if ( mysqli_query ( $DBConnect, $SQLString ))
{
}
else 
    echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Failed to create account.</h4></div></div></div>';
$PermissionsName = "GRANT ALL ON $DBName.* TO '$UserName'@'$Host';";
$QueryResult = mysqli_query ( $DBConnect, $PermissionsName );
$SQLString = "SHOW GRANTS FOR '$UserName'@'$Host'";
if ( mysqli_query ( $DBConnect, $SQLString ))
{}
else 
    echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Failed to modify account.</h4></div></div></div>';
mysqli_close ( $DBConnect );


$Host = "localhost"; 
$UserName = "ShadowBikes";
$Password = "Shadow#Bikes.";
$DBName = "Shadow_Bikes";
$DBConnect = mysqli_connect ( "$Host", "$UserName", "$Password", "$DBName" );
if ( $DBConnect === false ) 
        die ( '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Connection error: ' . $DBConnect -> connect_error . '.<br>Please try again.</h4></div></div></div>');

$TableName = "Shadow_Blog";
$SQLString = "SELECT * FROM $TableName";
$QueryResult = mysqli_query ( $DBConnect, $SQLString );
if ( @mysqli_num_rows ( $QueryResult ) > 0 )
{
} else {
    $SQLString = "CREATE TABLE $TableName ( ID int(3) NOT NULL AUTO_INCREMENT PRIMARY KEY, Reg_Date TIMESTAMP, Title VARCHAR(35) NOT NULL, Image LONGBLOB, Description VARCHAR(99) NOT NULL, Content VARCHAR(255) NOT NULL,  Author VARCHAR(20) NOT NULL )";
    if ( mysqli_query ( $DBConnect, $SQLString ))
    {
        echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Successfully created the ' . $TableName . ' table.</h4></div></div></div>';		
	}
}
$TableName = "User_Login";
$SQLString = "SELECT * FROM $TableName";
$QueryResult = mysqli_query ( $DBConnect, $SQLString );
if ( @mysqli_num_rows ( $QueryResult ) > 0 )
{
} else {
    $SQLString = "CREATE TABLE $TableName ( ID INT(7) NOT NULL AUTO_INCREMENT PRIMARY KEY, Email VARCHAR(20) NOT NULL, Password VARCHAR(32) NOT NULL)";
    if ( mysqli_query ( $DBConnect, $SQLString ))
	{
        echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Successfully created the ' . $TableName . ' table.</h4></div></div></div>';	
	}	
}
$TableName = "User1_Information";
$SQLString = "SELECT * FROM $TableName";
$QueryResult = mysqli_query ( $DBConnect, $SQLString );
if ( @mysqli_num_rows ( $QueryResult ) > 0 )
{
} else {
    $SQLString = "CREATE TABLE $TableName ( ID INT(7) NOT NULL AUTO_INCREMENT PRIMARY KEY, FirstName VARCHAR(20) NOT NULL, LastName VARCHAR(32) NOT NULL, StreetAddress VARCHAR(50) NOT NULL, City VARCHAR(20) NOT NULL, State VARCHAR(3) NOT NULL, ZipCode VARCHAR(10) NOT NULL, PhoneNumber VARCHAR(13) NOT NULL )";
    if ( mysqli_query ( $DBConnect, $SQLString ))
	{
        echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Successfully created the ' . $TableName . ' table.</h4></div></div></div>';	
	}	
}
$TableName = "Cannondale_Inventory";
$SQLString = "SELECT * FROM $TableName";
$QueryResult = mysqli_query ( $DBConnect, $SQLString );
if ( @mysqli_num_rows ( $QueryResult ) > 0 )
{
} else {
    $SQLString = "CREATE TABLE $TableName ( ID INT(7) NOT NULL AUTO_INCREMENT, Bicycle_Type VARCHAR(20) NOT NULL PRIMARY KEY, Model_Name VARCHAR(32) NOT NULL, Model_Version VARCHAR(32) NOT NULL, Wheel_Size VARCHAR(5) NOT NULL, Frame_Size VARCHAR(3) NOT NULL, Description VARCHAR(255) NOT NULL, Image LONGBLOB, QTY_In_Stock INT(3) NOT NULL, Retail_Price VARCHAR(13) NOT NULL )";
    if ( mysqli_query ( $DBConnect, $SQLString ))
	{
        echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Successfully created the ' . $TableName . ' table.</h4></div></div></div>';		
	}	
}
$TableName = "Trek_Inventory";
$SQLString = "SELECT * FROM $TableName";
$QueryResult = mysqli_query ( $DBConnect, $SQLString );
if ( @mysqli_num_rows ( $QueryResult ) > 0 )
{
} else {
    $SQLString = "CREATE TABLE $TableName ( ID INT(7) NOT NULL AUTO_INCREMENT, Bicycle_Type VARCHAR(20) NOT NULL PRIMARY KEY, Model_Name VARCHAR(32) NOT NULL, Model_Version VARCHAR(32) NOT NULL, Wheel_Size VARCHAR(5) NOT NULL, Frame_Size VARCHAR(3) NOT NULL, Description VARCHAR(255) NOT NULL, Image LONGBLOB, QTY_In_Stock INT(3) NOT NULL, Retail_Price VARCHAR(13) NOT NULL )";
    if ( mysqli_query ( $DBConnect, $SQLString ))
	{
        echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Successfully created the ' . $TableName . ' table.</h4></div></div></div>';		
	}	
}
$TableName = "Specialized_Inventory";
$SQLString = "SELECT * FROM $TableName";
$QueryResult = mysqli_query ( $DBConnect, $SQLString );
if ( @mysqli_num_rows ( $QueryResult ) > 0 )
{
} else {
    $SQLString = "CREATE TABLE $TableName ( ID INT(7) NOT NULL AUTO_INCREMENT, Bicycle_Type VARCHAR(20) NOT NULL PRIMARY KEY, Model_Name VARCHAR(32) NOT NULL, Model_Version VARCHAR(32) NOT NULL, Wheel_Size VARCHAR(5) NOT NULL, Frame_Size VARCHAR(3) NOT NULL, Description VARCHAR(255) NOT NULL, Image LONGBLOB, QTY_In_Stock INT(3) NOT NULL, Retail_Price VARCHAR(13) NOT NULL )";
    if ( mysqli_query ( $DBConnect, $SQLString ))
	{
        echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Successfully created the ' . $TableName . ' table.</h4></div></div></div>';	
	}	
}
$TableName = "Shimano_Inventory";
$SQLString = "SELECT * FROM $TableName";
$QueryResult = mysqli_query ( $DBConnect, $SQLString );
if ( @mysqli_num_rows ( $QueryResult ) > 0 )
{
} else {
    $SQLString = "CREATE TABLE $TableName (  ID INT(7) NOT NULL AUTO_INCREMENT, Part_Type VARCHAR(20) NOT NULL PRIMARY KEY, Part_Name VARCHAR(32) NOT NULL, Part_Version VARCHAR(32) NOT NULL, Part_Number VARCHAR(30) NOT NULL, Description VARCHAR(255) NOT NULL, Image LONGBLOB, QTY_In_Stock INT(3) NOT NULL, Retail_Price VARCHAR(13) NOT NULL )";
    if ( mysqli_query ( $DBConnect, $SQLString ))
	{
        echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Successfully created the ' . $TableName . ' table.</h4></div></div></div>';		
	}	
}
$TableName = "Sram_Inventory";
$SQLString = "SELECT * FROM $TableName";
$QueryResult = mysqli_query ( $DBConnect, $SQLString );
if ( @mysqli_num_rows ( $QueryResult ) > 0 )
{
} else {
    $SQLString = "CREATE TABLE $TableName ( ID INT(7) NOT NULL AUTO_INCREMENT, Part_Type VARCHAR(20) NOT NULL PRIMARY KEY, Part_Name VARCHAR(32) NOT NULL, Part_Version VARCHAR(32) NOT NULL, Part_Number VARCHAR(30) NOT NULL, Description VARCHAR(255) NOT NULL, Image LONGBLOB, QTY_In_Stock INT(3) NOT NULL, Retail_Price VARCHAR(13) NOT NULL )";
    if ( mysqli_query ( $DBConnect, $SQLString ))
	{
        echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Successfully created the ' . $TableName . ' table.</h4></div></div></div>';	
	}	
}
?>
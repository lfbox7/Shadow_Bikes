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

$MyEmail = $_POST [ 'MyEmail' ];
$MyPassword = $_POST [ 'MyPassword' ];
$MyEmail = stripslashes ( $MyEmail );
$MyPassword = stripslashes ( $MyPassword );
$MyEmail = mysqli_real_escape_string ( $DBConnect, $MyEmail );
$MyPassword = mysqli_real_escape_string ( $DBConnect, $MyPassword );
$Encrypted_MyPassword = md5 ( $MyPassword );

$TableName = "User_Login";
$SQLString = "SELECT * FROM $TableName WHERE Email = '$MyEmail' AND Password = '$Encrypted_MyPassword'";
$QueryResult = mysqli_query ( $DBConnect, $SQLString );
$Rows = mysqli_num_rows ( $QueryResult );

if ( $Rows == 1 )
{
    $_SESSION [ 'MyEmail' ] = $MyEmail;
    $_SESSION [ 'MyPassword' ] = $Encrypted_MyPassword;
    $_SESSION [ 'LoginBool' ] = "False";
    header ( "location: index.php" );
} else {
    $_SESSION [ 'LoginFail' ] = "True";
    header ( "location:ShadowGroup.php" );
}
?>